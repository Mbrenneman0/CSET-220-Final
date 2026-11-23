<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    protected $table = 'Care_Group';
    protected $primaryKey = 'group_id';

    protected $fillable = [
        'caregiver_id'
    ];

    public function patients(): BelongsToMany
    {
        return $this->belongsToMany(
            Patient::class,
            'group__assignments',
            'group_id',
            'patient_id',
            'group_id',
            'patient_id'
        );
    }
}
