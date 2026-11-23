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

    protected $table = 'payments';

    protected $primaryKey = 'payment_id';

    protected $fillable = [
        'patient_id',
        'payment_amount',
        'date',
    ];

    protected $casts = [
        'payment_amount' => 'decimal:2',
        'date' => 'date',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'patient_id');
    }
}
