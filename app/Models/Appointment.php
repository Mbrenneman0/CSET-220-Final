<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $time_date
 * @property int $doctor_id
 * @property int $patient_id
 * @property int $completed
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Appointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Appointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Appointment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Appointment whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Appointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Appointment whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Appointment wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Appointment whereTimeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Appointment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Appointment extends Model
{
    use HasFactory;
    
    /*
    COLUMN NAMES
        - for ensuring universal naming with autofill
    */
    public const DOCTOR_ID = 'doctor_id';
    public const PATIENT_ID = 'patient_id';
    public const TIME_DATE = 'time_date';
    public const COMPLETED = 'completed';

    public $table = 'appointments';

    protected $primaryKey = self::TIME_DATE;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        self::DOCTOR_ID,
        self::PATIENT_ID,
        self::TIME_DATE
    ];

    public function doctor() : BelongsTo {
        return $this -> belongsTo(Employee::class, self::DOCTOR_ID, Employee::EMPLOYEE_ID);
    }

    public function patient() : BelongsTo {
        return $this -> belongsTo(Patient::class, self::PATIENT_ID, Patient::PATIENT_ID);
    }

    protected function casts(): array
    {
        return [
            self::TIME_DATE => 'datetime',
            self::COMPLETED => 'boolean',
        ];
    }

}
