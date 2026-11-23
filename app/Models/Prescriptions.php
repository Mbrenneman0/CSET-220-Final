<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $patient_id
 * @property string $comments
 * @property int $morning_med
 * @property int $afternoon_med
 * @property int $night_med
 * @property string $date
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescriptions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescriptions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescriptions query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescriptions whereAfternoonMed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescriptions whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescriptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescriptions whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescriptions whereMorningMed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescriptions whereNightMed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescriptions wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Prescriptions whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Prescriptions extends Model
{
    //
}
