<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\UserFactory;
use App\Enums\UserRole;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $role_id
 * @property string $role_name
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereRoleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    use HasFactory;

    /*
    COLUMN NAMES
        - for ensuring universal naming with autofill
    */
    public const ROLE_ID = 'role_id';
    public const ROLE_NAME = 'role_name';

    protected $table = 'roles';

    protected $primaryKey = self::ROLE_ID;

    protected $fillable = [
        self::ROLE_NAME,
    ];

    public function users()
    {
        return $this->hasMany(User::class, self::ROLE_ID, User::ROLE_ID);
    }

}
