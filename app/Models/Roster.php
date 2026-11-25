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

    /*
    COLUMN NAMES
        - for ensuring universal naming with autofill
    */
    public const DATE = 'date';
    public const SUPERVISOR_ID = 'supervisor_id';
    public const DOCTOR_ID = 'doctor_id';
    public const CAREGIVER_1 = 'caregiver_;1';
    public const CAREGIVER_2 = 'caregiver_2';
    public const CAREGIVER_3 = 'caregiver_3';
    public const CAREGIVER_4 = 'caregiver_4';

    protected $table = 'rosters';
    protected $primaryKey = 'date';

    public $incrementing = false;

    protected $fillable = [
        self::SUPERVISOR_ID,
        self::DOCTOR_ID,
        self::CAREGIVER_1 ,
        self::CAREGIVER_2,
        self::CAREGIVER_3,
        self::CAREGIVER_4
    ];

    protected function casts(): array
    {
        return [
            self::DATE => 'date',
        ];
    }

    public function doctor()
    {
        return $this->belongsTo(
            Employee::class,
            self::DOCTOR_ID,
            Employee::EMPLOYEE_ID
        );
    }

    public function supervisor()
    {
        return $this->belongsTo(
            Employee::class,
            self::DOCTOR_ID,
            Employee::EMPLOYEE_ID
        );
    }

    public function caregiver1(): BelongsTo
    {
        return $this->belongsTo(
            Employee::class,
            self::CAREGIVER_1,
            Employee::EMPLOYEE_ID
        );
    }

        public function caregiver2(): BelongsTo
    {
        return $this->belongsTo(
            Employee::class,
            self::CAREGIVER_2,
            Employee::EMPLOYEE_ID
        );
    }

        public function caregiver3(): BelongsTo
    {
        return $this->belongsTo(
            Employee::class,
            self::CAREGIVER_3,
            Employee::EMPLOYEE_ID
        );
    }

        public function caregiver4(): BelongsTo
    {
        return $this->belongsTo(
            Employee::class,
            self::CAREGIVER_4,
            Employee::EMPLOYEE_ID
        );
    }
}
