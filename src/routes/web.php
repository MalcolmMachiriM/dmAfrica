<?php
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\InsuranceController;

use App\Http\Controllers\MotorInsuranceController;
use App\Http\Controllers\MotorFormController;
use App\Http\Controllers\MedicalFormController;
use App\Http\Controllers\PetFormController;
use App\Http\Controllers\BuildingFormController;
use App\Http\Controllers\CameraFormController;
use App\Http\Controllers\CarWarantyFormController;
use App\Http\Controllers\AccidentCoverFormController;
use App\Http\Controllers\MobileDevicesFormController;
use App\Http\Controllers\FleetCoverFormController;
use App\Http\Controllers\CombinedBusinessFormController;
use App\Http\Controllers\ContractorsFormController;
use App\Http\Controllers\ConstructionFormController;
use App\Http\Controllers\ProfessionalFormController;
use App\Http\Controllers\LogisticsFormController;
use App\Http\Controllers\CyberFormController;
use App\Http\Controllers\SecurityFormController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\ClaimsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PolicyController;

Route::get('/', function () {
    return view('index');
});

// Route::get('/insurance/motor-insurance', [InsuranceController::class, 'showMotorForm'])->name('insurance.motor-insurance');
// Route::get('/insurance/motor', [InsuranceController::class, 'showMotorForm'])->name('insurance.medical');
// Route::get('/insurance/pets', [InsuranceController::class, 'showPetForm'])->name('insurance.pet');
// Route::get('/insurance/house', [InsuranceController::class, 'showBuildingForm'])->name('insurance.building');
// Route::get('/insurance/business', [InsuranceController::class, 'showBusinessForm'])->name('insurance.car-waranty');
// Route::get('/insurance/life', [InsuranceController::class, 'showLifeForm'])->name('insurance.mobile-devices');

//save form data personal
Route::get('/motor-insurance', [MotorInsuranceController::class, 'create'])->name('motor-insurance.create');
Route::post('/motor-insurance', [MotorInsuranceController::class, 'store'])->name('motor-insurance.store');
Route::post('/medical-insurance', [MedicalFormController::class, 'store'])->name('medical-insurance.store');
Route::post('/pet-insurance', [PetFormController::class, 'store'])->name('pet-insurance.store');
Route::post('/building-insurance', [BuildingFormController::class, 'store'])->name('building-insurance.store');
Route::post('/camera-insurance', [CameraFormController::class, 'store'])->name('camera-insurance.store');
Route::post('/car-waranty-insurance', [CarWarantyFormController::class, 'store'])->name('car-waranty-insurance.store');
Route::post('/accident-cover-insurance', [AccidentCoverFormController::class, 'store'])->name('accident-cover-insurance.store');
Route::post('/mobile-devices-insurance', [MobileDevicesFormController::class, 'store'])->name('mobile-devices-insurance.store');

//save form data business
Route::post('/fleet-cover-insurance', [FleetCoverFormController::class, 'store'])->name('fleet-cover-insurance.store');
Route::post('/combined-business-insurance', [CombinedBusinessFormController::class, 'store'])->name('combined-business-insurance.store');
Route::post('/contractors-insurance', [ContractorsFormController::class, 'store'])->name('contractors-insurance.store');
Route::post('/construction-insurance', [ConstructionFormController::class, 'store'])->name('construction-insurance.store');
Route::post('/professional-insurance', [ProfessionalFormController::class, 'store'])->name('professional-insurance.store');
// Route::post('/logistics-insurance', [LogisticsFormController::class, 'store'])->name('logistics-insurance.store');
Route::post('/cyber-insurance', [CyberFormController::class, 'store'])->name('cyber-insurance.store');
Route::post('/security-insurance', [SecurityFormController::class, 'store'])->name('security-insurance.store');

//personal form routes
Route::get('/motor-form', [MotorFormController::class, 'show'])->name('motor.form');
Route::get('/medical-form', [MedicalFormController::class, 'show'])->name('medical.form');
Route::get('/pet-form', [PetFormController::class, 'show'])->name('pet.form');
Route::get('/building-form', [BuildingFormController::class, 'show'])->name('building.form');
Route::get('/camera-form', [CameraFormController::class, 'show'])->name('camera.form');
Route::get('/car-waranty-form', [CarWarantyFormController::class, 'show'])->name('car-waranty.form');
Route::get('/accident-cover-form', [AccidentCoverFormController::class, 'show'])->name('accident-cover.form');
Route::get('/mobile-devices-form', [MobileDevicesFormController::class, 'show'])->name('mobile-devices.form');

//business form routes
Route::get('/fleet-cover-form', [FleetCoverFormController::class, 'show'])->name('fleet-cover.form');
Route::get('/combined-business-form', [CombinedBusinessFormController::class, 'show'])->name('combined-business.form');
Route::get('/contractors-form', [ContractorsFormController::class, 'show'])->name('contractors.form');
Route::get('/construction-form', [ConstructionFormController::class, 'show'])->name('construction.form');
Route::get('/professional-form', [ProfessionalFormController::class, 'show'])->name('professional.form');
// Route::get('/logistics-form', [LogisticsFormController::class, 'show'])->name('logistics.form');
Route::get('/cyber-form', [CyberFormController::class, 'show'])->name('cyber.form');
Route::get('/security-form', [SecurityFormController::class, 'show'])->name('security.form');

//html pages
// Route::get('/fleet-cover-form', [ProductsController::class, 'show'])->name('fleet-cover.form');

//Products
Route::get('/products/index', [ProductsController::class, 'show'])->name('products.index');
Route::get('/careers/index', [CareersController::class, 'show'])->name('careers.index');
Route::get('/claims/index', [ClaimsController::class, 'show'])->name('claims.index');
Route::get('/contact/index', [ContactController::class, 'show'])->name('contact.index');
Route::get('/policy/index', [PolicyController::class, 'show'])->name('policy.index');