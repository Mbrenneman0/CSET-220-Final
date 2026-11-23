<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $payment_id
 * @property int $patient_id
 * @property numeric $payment_amount
 * @property string $date
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payments query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payments whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payments wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payments wherePaymentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payments wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payments whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Payment extends Model
{
    //
}
