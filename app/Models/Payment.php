<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Database\Factories\UserFactory;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $payment_id
 * @property int $patient_id
 * @property numeric $payment_amount
 * @property string $date
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment wherePaymentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Payment extends Model
{
    use HasFactory;

    /*
    COLUMN NAMES
        - for ensuring universal naming with autofill
    */
    public const PAYMENT_ID = 'payment_id';
    public const PATIENT_ID = 'patient_id';
    public const PAYMENT_AMOUNT = 'payment_amount';
    public const DATE = 'date';

    protected $table = 'payments';

    protected $primaryKey = self::PAYMENT_ID;

    protected $fillable = [
        self::PATIENT_ID,
        self::PAYMENT_AMOUNT,
        self::DATE,
    ];

    protected $casts = [
        self::PAYMENT_AMOUNT => 'decimal:2',
        self::DATE => 'date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, self::PATIENT_ID, Patient::PATIENT_ID);
    }
}
