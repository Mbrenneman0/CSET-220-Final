<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $patient_id
 * @property string $comments
 * @property int $morning_med
 * @property int $afternoon_med
 * @property int $night_med
 * @property string $date
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescription newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescription newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescription query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescription whereAfternoonMed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescription whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescription whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescription whereMorningMed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescription whereNightMed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescription wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescription whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Prescription extends Model
{
    use HasFactory;
    public $table = 'prescriptions';

    public function patient() : BelongsTo {
        return $this -> belongsTo(Patient::class, 'patient_id', 'patient_id');
    }

    public function morning_med() : BelongsTo {
        return $this -> belongsTo(Medication::class, 'morning_med', 'medication_id');
    }

    public function afternoon_med() : BelongsTo {
        return $this -> belongsTo(Medication::class, 'afternoon_med', 'medication_id');
    }

    public function night_med() : BelongsTo {
        return $this -> belongsTo(Medication::class, 'night_med', 'medication_id');
    }


}
