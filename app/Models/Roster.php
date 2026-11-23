<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $date
 * @property int $supervisor_id
 * @property int $doctor_id
 * @property int $caregiver_1
 * @property int $caregiver_2
 * @property int $caregiver_3
 * @property int $caregiver_4
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster whereCaregiver1($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster whereCaregiver2($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster whereCaregiver3($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster whereCaregiver4($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster whereSupervisorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Roster whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Roster extends Model
{
    use HasFactory;

    protected $table = 'Roster';
    protected $primaryKey = 'date';

    protected $fillable = [
        'supervisor_id',
        'doctor_id',
        'caregiver_1',
        'caregiver_2',
        'caregiver_3',
        'caregiver_4'
    ];
}
