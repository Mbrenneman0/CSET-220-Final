<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $role_id
 * @property string $role_name
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roles query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roles whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roles whereRoleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roles whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Roles extends Model
{
    //
}
