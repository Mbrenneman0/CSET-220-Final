<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $caregiver_id
 * @property int $patient_id
 * @property string $date
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @property int $morning_med
 * @property int $afternoon_med
 * @property int $night_med
 * @property int $morning_meal
 * @property int $afternoon_meal
 * @property int $night_meal
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity whereAfternoonMeal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity whereAfternoonMed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity whereCaregiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity whereMorningMeal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity whereMorningMed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity whereNightMeal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity whereNightMed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Activity whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Care_Activity extends Model
{
    use HasFactory;

    /*
    COLUMN NAMES
        - for ensuring universal naming with autofill
    */
    public const CAREGIVER_ID = 'caregiver_id';
    public const PATIENT_ID = 'patient_id';
    public const DATE = 'date';
    public const MORNING_MED = 'morning_med';
    public const AFTERNOON_MED = 'afternoon_med';
    public const NIGHT_MED = 'night_med';
    public const MORNING_MEAL = 'morning_meal';
    public const AFTERNOON_MEAL = 'afternoon_meal';
    public const NIGHT_MEAL = 'night_meal';

    public $table = 'care__activities';

    protected $fillable = [
        self::CAREGIVER_ID,
        self::PATIENT_ID,
        self::DATE
    ];

    public function caregiver(): BelongsTo
    {
        return $this->belongsTo(Employee::class, self::CAREGIVER_ID, Employee::EMPLOYEE_ID);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class, self::PATIENT_ID, Patient::PATIENT_ID);
    }

    protected function casts(): array
    {
        return [
            self::DATE => 'datetime',
            self::MORNING_MED => 'boolean',
            self::AFTERNOON_MED => 'boolean',
            self::NIGHT_MED => 'boolean',
            self::MORNING_MEAL => 'boolean',
            self::AFTERNOON_MEAL => 'boolean',
            self::NIGHT_MEAL => 'boolean'
        ];
    }
}
