<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $patient_id
 * @property int $family_code
 * @property string $emergency_contact
 * @property string $emergency_phone
 * @property string $emergency_relation
 * @property string $admission_date
 * @property \Carbon\CarbonImmutable|null $created_at
 * @property \Carbon\CarbonImmutable|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereAdmissionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereEmergencyContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereEmergencyPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereEmergencyRelation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereFamilyCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Patient whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Patient extends Model
{
    //
}
