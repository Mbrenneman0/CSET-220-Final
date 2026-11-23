<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\UserFactory;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $patient_id
 * @property int $family_code
 * @property string $emergency_contact
 * @property string $emergency_phone
 * @property string $emergency_relation
 * @property string $admission_date
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereAdmissionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereEmergencyContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereEmergencyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereEmergencyRelation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereFamilyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $primaryKey = 'patient_id';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'emergency_contact',
        'emergency_phone',
        'emergency_relation',
        'admission_date',
    ];

    protected $casts = [
        'admission_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'patient_id', 'user_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'patient_id', 'patient_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'patient_id', 'patient_id');
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class, 'patient_id', 'patient_id');
    }

    public function care_activities()
    {
        return $this->hasMany(Care_Activity::class, 'patient_id', 'patient_id');
    }
}
