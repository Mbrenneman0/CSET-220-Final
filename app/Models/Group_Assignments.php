<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $group_id
 * @property int $patient_id
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group_Assignments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group_Assignments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group_Assignments query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group_Assignments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group_Assignments whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group_Assignments wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Group_Assignments whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Group_Assignments extends Model
{
    //
}
