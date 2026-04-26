<?php

use App\Livewire\Contract\Add as ContractAdd;
use App\Livewire\Contract\Edit as ContractEdit;
use App\Livewire\Contract\Index as ContractIndex;
use App\Livewire\Department\Add as DepartmentAdd;
use App\Livewire\Department\Edit as DepartmentEdit;
use App\Livewire\Department\Index as DepartmentIndex;
use App\Livewire\Designation\Add as DesignationAdd;
use App\Livewire\Designation\Edit as DesignationEdit;
use App\Livewire\Designation\Index as DesignationIndex;
use App\Livewire\Employee\Add as EmployeeAdd;
use App\Livewire\Employee\Edit as EmployeeEdit;
use App\Livewire\Employee\Index as EmployeeIndex;
use App\Livewire\Payment\Add as PaymentAdd;
use App\Livewire\Payment\Edit as PaymentEdit;
use App\Livewire\Payment\Index as PaymentIndex;
use App\Livewire\Payroll\Add as PayrollAdd;
use App\Livewire\Payroll\Edit as PayrollEdit;
use App\Livewire\Payroll\Index as PayrollIndex;
use App\Livewire\Salary\Add as SalaryAdd;
use App\Livewire\Salary\Edit as SalaryEdit;
use App\Livewire\Salary\Index as SalaryIndex;
use App\Livewire\School\Add;
use App\Livewire\School\Edit;
use App\Livewire\School\Index;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::middleware(['auth', 'verified'])->group(function(){
    Route::view('dashboard' , 'dashboard')->name('dashboard');
    Route::prefix('school')->name('school')->group(function(){
         Route::get('index',Index::class)->name('index');
         Route::get('add',Add::class)->name('add');
         Route::get('edit',Edit::class)->name('edit');
});

 Route::prefix('department')->name('department')->group(function(){
         Route::get('index',DepartmentIndex::class)->name('index');
         Route::get('add',DepartmentAdd::class)->name('add');
         Route::get('edit',DepartmentEdit::class)->name('edit');
});
 Route::prefix('employee')->name('employee')->group(function(){
         Route::get('index',EmployeeIndex::class)->name('index');
         Route::get('add',EmployeeAdd::class)->name('add');
         Route::get('edit',EmployeeEdit::class)->name('edit');
});
 Route::prefix('payroll')->name('payroll')->group(function(){
         Route::get('index',PayrollIndex::class)->name('index');
         Route::get('add',PayrollAdd::class)->name('add');
         Route::get('edit',PayrollEdit::class)->name('edit');
});
 Route::prefix('salary')->name('salary')->group(function(){
         Route::get('index',SalaryIndex::class)->name('index');
         Route::get('add',SalaryAdd::class)->name('add');
         Route::get('edit',SalaryEdit::class)->name('edit');
});
 Route::prefix('contract')->name('contract')->group(function(){
         Route::get('index',ContractIndex::class)->name('index');
         Route::get('add',ContractAdd::class)->name('add');
         Route::get('edit',ContractEdit::class)->name('edit');
});
 Route::prefix('designation')->name('designation')->group(function(){
         Route::get('index',DesignationIndex::class)->name('index');
         Route::get('add',DesignationAdd::class)->name('add');
         Route::get('edit',DesignationEdit::class)->name('edit');
});
 Route::prefix('payment')->name('payment')->group(function(){
         Route::get('index',PaymentIndex::class)->name('index');
         Route::get('add',PaymentAdd::class)->name('add');
         Route::get('edit',PaymentEdit::class)->name('edit');
});

});


Route::prefix('dashbord')->middleware(['auth','verified'])->group(function(){
    Route::view("employee",'livewire.employee.index');
    Route::view("contract",'livewire.contract.index');
    Route::view("school",'livewire.school.index');
    Route::view("department",'livewire.department.index');
    Route::view("designation",'livewire.designation.index');
    Route::view("salary",'livewire.salary.index');
    Route::view("payment",'livewire.payment.index');
    Route::view("payroll",'livewire.payroll.index');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
