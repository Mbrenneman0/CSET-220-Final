<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $medication_id
 * @property string $medication_name
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medication query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medication whereMedicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medication whereMedicationName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Medication whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Medication extends Model
{
    //
}
