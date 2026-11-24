<?php

namespace App\Enums;

enum UserRole: string {
    case ADMIN = 'admin';
    case SUPERVISOR = 'supervisor';
    case DOCTOR = 'doctor';
    case CAREGIVER = 'caregiver';
    case PATIENT = 'patient';
    case FAMILY_MEMBER = 'family_member';
}