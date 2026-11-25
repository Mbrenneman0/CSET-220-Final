<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    use HasFactory;

    /*
    COLUMN NAMES
        - for ensuring universal naming with autofill
    */
    public const GROUP_ID = 'group_id';
    public const CAREGIVER_ID = 'caregiver_id';

    protected $table = 'care__groups';
    protected $primaryKey = self::GROUP_ID;

    protected $fillable = [
        self::CAREGIVER_ID
    ];

    public function patients(): BelongsToMany
    {
        return $this->belongsToMany(
            Patient::class,
            'group__assignments',
            'group_id',
            'patient_id',
            self::GROUP_ID,
            'patient_id'
        );
    }

    public function caregiver(): BelongsTo
    {
        return $this->belongsTo(
            Employee::class,
            self::CAREGIVER_ID,
            Employee::EMPLOYEE_ID
        );
    }
}
