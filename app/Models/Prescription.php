<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
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

    /*
    COLUMN NAMES
        - for ensuring universal naming with autofill
    */
    public const PATIENT_ID = 'patient_id';
    public const DATE = 'date';
    public const COMMENTS = 'comments';
    public const MORNING_MED = 'morning_med';
    public const AFTERNOON_MED = 'afternoon_med';
    public const NIGHT_MED = 'night_med';

    public $table = 'prescriptions';

    protected $fillable = [
        self::PATIENT_ID,
        self::DATE,
        self::COMMENTS,
        self::MORNING_MED,
        self::AFTERNOON_MED,
        self::NIGHT_MED
    ];

    public function patient() : BelongsTo {
        return $this -> belongsTo(Patient::class, self::PATIENT_ID, Patient::PATIENT_ID);
    }

    public function morningMed() : BelongsTo {
        return $this -> belongsTo(Medication::class, self::MORNING_MED, Medication::MEDICATION_ID);
    }

    public function afternoonMed() : BelongsTo {
        return $this -> belongsTo(Medication::class, self::AFTERNOON_MED, Medication::MEDICATION_ID);
    }

    public function nightMed() : BelongsTo {
        return $this -> belongsTo(Medication::class, self::NIGHT_MED, Medication::MEDICATION_ID);
    }

    protected function casts(): array
    {
        return [
            self::DATE => 'datetime'
        ];
    }

}
