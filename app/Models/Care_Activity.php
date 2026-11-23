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
#[Fillable([
    'caregiver_id',
    'patient_id',
    'date'])]
class Care_Activity extends Model
{
    use HasFactory;
    public $table = 'care__activities';
    public function caregiver() : BelongsTo {
        return $this -> belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

    public function patient() : BelongsTo {
        return $this -> belongsTo(Patient::class, 'patient_id', 'patient_id');
    }

    protected function casts(): array
    {
        return [
            'date' => 'datetime'
            'morning_med' => 'boolean',
            'afternoon_med' => 'boolean',
            'night_med' => 'boolean',
            'morning_meal' => 'boolean',
            'afternoon_meal' => 'boolean',
            'night_meal' => 'boolean'
        ];
    }
}
