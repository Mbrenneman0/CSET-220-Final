<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
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
    //
}
