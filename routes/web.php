<?php

use Illuminate\Support\Facades\Route;

// homepage
Route::inertia('/', 'welcome')->name('home');

// authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {

    // dashboard
    Route::inertia('/dashboard', 'dashboard')->name('dashboard');

    // family
    Route::inertia('/family/dashboard', 'family/dashboard')
        ->name('family.dashboard');

    // admin
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::inertia('/dashboard', 'admin/dashboard')->name('dashboard');
        Route::inertia('/doctor-appointments', 'admin/doctor-appointments')->name('doctor-appointments');
        Route::inertia('/employee-salary', 'admin/employee-salary')->name('employee-salary');
        Route::inertia('/employees', 'admin/employees')->name('employees');
        Route::inertia('/new-roster', 'admin/new-roster')->name('new-roster');
        Route::inertia('/patient-info', 'admin/patient-info')->name('patient-info');
        Route::inertia('/patients', 'admin/patients')->name('patients');
        Route::inertia('/payments', 'admin/payments')->name('payments');
        Route::inertia('/registration-approval', 'admin/registration-approval')->name('registration-approval');
        Route::inertia('/reports', 'admin/reports')->name('reports');
        Route::inertia('/roles', 'admin/roles')->name('roles');
        Route::inertia('roster', 'admin/roster')->name('roster');
    });

    // auth
    Route::prefix('auth')->name('auth.')->group(function () {
        Route::inertia('/login', 'auth/login')->name('login');
        Route::inertia('/register', 'auth/register')->name('register');
        Route::inertia('/employee-register', 'auth/employee-register')->name('employee-register');
    });

    // caregiver
    Route::prefix('caregiver')->name('caregiver.')->group(function () {
        Route::inertia('/dashboard', 'caregiver/dashboard')->name('dashboard');
    });

    // doctor
    Route::prefix('doctor')->name('doctor.')->group(function () {
        Route::inertia('/dashboard', 'doctor/dashboard')->name('dashboard');
        Route::inertia('/appointments', 'doctor/appointments')->name('appointments');
        Route::inertia('/new-prescription', 'doctor/new-prescription')->name('new-prescription');
        Route::inertia('/patient-prescriptions', 'doctor/patient-prescriptions')->name('patient-prescriptions');
    });

    // family
    Route::prefix('family')->name('family.')->group(function () {
        Route::inertia('/dashboard', 'family/dashboard')->name('dashboard');
    });

    // patient
    Route::prefix('patient')->name('patient.')->group(function () {
        Route::inertia('/dashboard', 'patient/dashboard')->name('dashboard');
    });

    // supervisor
    Route::prefix('supervisor')->name('supervisor.')->group(function () {
        Route::inertia('/dashboard', 'supervisor/dashboard')->name('dashboard');
        Route::inertia('/employees', 'supervisor/employees')->name('employees');
        Route::inertia('/patients', 'supervisor/patients')->name('patients');
        Route::inertia('/registration-approval', 'supervisor/registration-approval')->name('registration-approval');
        Route::inertia('/reports', 'supervisor/reports')->name('reports');
        Route::inertia('/roster', 'supervisor/roster')->name('roster');
    });

    // shared pages
    Route::prefix('shared')->name('shared.')->group(function () {
        Route::inertia('/patient-details', 'shared/patient-details')->name('patient-details');
        Route::inertia('/appointment-details', 'shared/appointment-details')->name('appointment-details');
    });
});

// settings
require __DIR__.'/settings.php';
