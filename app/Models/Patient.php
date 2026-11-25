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

    /*
    COLUMN NAMES
        - for ensuring universal naming with autofill
    */
    public const PATIENT_ID = 'patient_id';
    public const EMERGENCY_CONTACT = 'emergency_contact';
    public const EMERGENCY_PHONE = 'emergency_phone';
    public const EMERGENCY_RELATION = 'emergency_relation';
    public const ADMISSION_DATE = 'admission_date';

    protected $table = 'patients';

    protected $primaryKey = self::PATIENT_ID;
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        self::EMERGENCY_CONTACT,
        self::EMERGENCY_PHONE,
        self::EMERGENCY_RELATION,
        self::ADMISSION_DATE,
    ];

    protected $casts = [
        self::ADMISSION_DATE => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, self::PATIENT_ID, User::USER_ID);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, Payment::PATIENT_ID, self::PATIENT_ID);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, Appointment::PATIENT_ID, self::PATIENT_ID);
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class, 'patient_id', self::PATIENT_ID);
    }

    public function care_activities()
    {
        return $this->hasMany(Care_Activity::class, Care_Activity::PATIENT_ID, self::PATIENT_ID);
    }
}
