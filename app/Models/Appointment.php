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
#[Fillable([
    'doctor_id',
    'patient_id',
    'time_date'
])]
class Appointment extends Model
{
    use HasFactory;
    
    public $table = 'appointments';

    protected $primaryKey = 'time_date';
    public $incrementing = false;
    protected $keyType = 'string';

    public function doctor() : BelongsTo {
        return $this -> belongsTo(Employee::class, 'doctor_id', 'employee_id');
    }

    public function patient() : BelongsTo {
        return $this -> belongsTo(Patient::class, 'patient_id', 'patient_id');
    }

    protected function casts(): array
    {
        return [
            'time_date' => 'datetime',
            'completed' => 'boolean',
        ];
    }

}
