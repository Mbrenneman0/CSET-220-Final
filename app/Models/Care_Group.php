<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $group_id
 * @property int $caregiver_id
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Group newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Group newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Group query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Group whereCaregiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Group whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Care_Group whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Care_Group extends Model
{
    //
}
