<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $employee_id
 * @property numeric $salary
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Employee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Employee extends Model
{
    use HasFactory;

    protected $table = 'Employee';
    protected $primaryKey = 'employee_id';

    protected $fillable = [
        'salary'
    ];

    protected function casts(): array
    {
        return [
            'salary' => 'decimal:2',
        ];
    }

    public function rosters():BelongsToMany
    {
        return $this->belongsToMany(
            Roster::class,
            'roster_employees',
            'employee_id',
            'roster_id',
            'employee_id',
            'roster_id'
        );
    }
    public function care_groups():BelongsToMany
    {
        return $this->belongsToMany(
            Care_Group::class,
            'care_group_employees',
            'employee_id',
            'group_id',
            'employee_id',
            'group_id'
        );
    }
}
