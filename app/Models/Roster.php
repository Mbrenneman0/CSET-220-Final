<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    protected $table = 'rosters';
    protected $primaryKey = 'date';

    public $incrementing = false;

    protected $fillable = [
        'supervisor_id',
        'doctor_id',
        'caregiver_1',
        'caregiver_2',
        'caregiver_3',
        'caregiver_4'
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }

    public function doctor()
    {
        return $this->hasMany(
            Roster::class,
            'doctor_id',
            'employee_id'
        );
    }

    public function supervisor()
    {
        return $this->hasMany(
            Roster::class,
            'doctor_id',
            'employee_id'
        );
    }

    public function caregiver1(): BelongsTo
    {
        return $this->belongsTo(
            Employee::class,
            'caregiver_1',
            'employee_id'
        );
    }

        public function caregiver2(): BelongsTo
    {
        return $this->belongsTo(
            Employee::class,
            'caregiver_2',
            'employee_id'
        );
    }

        public function caregiver3(): BelongsTo
    {
        return $this->belongsTo(
            Employee::class,
            'caregiver_3',
            'employee_id'
        );
    }

        public function caregiver4(): BelongsTo
    {
        return $this->belongsTo(
            Employee::class,
            'caregiver_4',
            'employee_id'
        );
    }

    public function care_groups(): BelongsToMany
    {
        return $this->belongsToMany(
            Care_Group::class,
            'group__assignments',
            'patient_id',
            'group_id',
            'patient_id',
            'group_id'
        );
    }
}
