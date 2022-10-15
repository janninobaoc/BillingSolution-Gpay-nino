<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::view('/Gpay.com/register/', 'login');
Route::view('/Gpay.com/homepage/', 'home');
Route::view('/Gpay.com/features-client/', 'features_client');
Route::view('/Gpay.com/features-mobile/', 'features_mobile');
Route::view('/Gpay.com/features-payments/', 'features_payments');
Route::view('/Gpay.com/features-mileage-tracking/', 'features_mileage');
Route::view('/Gpay.com/features-expenses&receipts/', 'features_expenses');
Route::view('/Gpay.com/features-invoices/', 'features_invoices');
Route::view('/Gpay.com/features-estimates/', 'features_estimates');
Route::view('/Gpay.com/whoitsfor-self-employed-professionals/', 'whoitsfor_self_employed');
Route::view('/Gpay.com/whoitsfor-freelancers/', 'whoitsfor_freelancers');
Route::view('/Gpay.com/whoitsfor-business_with_constractor/', 'whoitsfor_business_with_constractors');
Route::view('/Gpay.com/whoitsfor-business_with_employees/', 'whoitsfor_business_with_employees');
Route::view('/Gpay.com/whoitsfor_unemployed/', 'whoitsfor_unemployed');
Route::view('/Gpay.com/whoitsfor_students/', 'whoitsfor_students');
Route::view('/Gpay.com/about_us/', 'about');
Route::post('/register/create_account', [RegisterController::class, 'create_account']);

