<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Manage;
use App\Models\Studentatt;
use App\Models\ManageUser;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('Auth/login');
});
//  Student Controller ----


Route::get('/students',function(){
    $students = Student::all();
    return view('student.index',compact('students'));
});

Route::get('/student/create',function(){
    return  view('student.create');
    return view('student.view',compact('students'));
});

Route::get('/teachers',function(){
    return view('teachers');
});


Route::get('/student/show/{id}',function($id){
    $student = Student::find($id);
return view('student.show')->with('students', $student);
});





Route::post('/student/delete',function(Request $request){
    Student::destroy($request->id);
    return redirect()->back()->with('flash_message', 'Student deleted!');
});



Route::post('/student/delete',function(Request $request){
    Student::destroy($request->id);

    return redirect()->back()->with('flash_message', 'Student deleted!');
    return redirect('students')->with('flash_message', 'Student deleted!');

});




Route::get('/student/edit/{id}',function($id){
    $student = Student::find($id);
    return view('student.edit')->with('students', $student);
});



Route::post('/student/update',function(Request $request){

    $student = Student::find($request->id);
    $input = $request->all();
    $student->update($input);
    $students = Student::all();
    return view('student.index',compact('students'));
});







// Route::get('/parents',function(){
//     // $students = Student::all();
//     return view('parents.index');
// });



// Teacher-----Controller
// Route::get('/teachers',function(){
//     return view('teachers');
// });

Route::get('/teachers',function(){
    $teachers = Teacher::all();
    return view('teacher.index',compact('teachers'));
});




   // Parents

Route::get('/teacher/show/{id}',function($id){
    $teacher = Teacher::find($id);
return view('teacher.show')->with('teachers', $teacher);
});

Route::post('/teacher/delete',function(Request $request){
   Teacher::destroy($request->id);
    return redirect('teachers')->with('flash_message', 'Teacher deleted!');
});

Route::get('/teacher/edit/{id}',function($id){
    $teacher = Teacher::find($id);
    return view('teacher.edit')->with('teachers', $teacher);
});
Route::post('/teacher/update',function(Request $request){

    $teacher =Teacher::find($request->id);
    $input = $request->all();
    $teacher->update($input);
    $teachers= Teacher::all();
    return view('teacher.index',compact('teachers'));
});




//Parents Controller----
//    Route::get('/parents',function(){
//     return view('parents');
// });










// Manage-----Controller
// Route::get('/manages',function(){
//     return view('manages');
// });
Route::get('/manages',function(){
    $manages = Manage::all();
    return view('manage.index',compact('manages'));
});
Route::get('/manage/create',function(){
    return  view('manage.create');
    return view('manage.view',compact('manages'));
});
Route::get('/manage/show/{id}',function($id){
    $manage = Manage::find($id);
return view('manage.show')->with('manages', $manage);
});

Route::post('/manage/delete',function(Request $request){
   Manage::destroy($request->id);
    return redirect('manages')->with('flash_message', 'Manages deleted!');
});

Route::get('/manage/edit/{id}',function($id){
    $manages = Manage::find($id);
    return view('manage.edit')->with('manages', $manages);
});
Route::post('/manage/update',function(Request $request){

    $manage =Manage::find($request->id);
    $input = $request->all();
    $manage->update($input);
    $manages= Manage::all();
    return view('manage.index',compact('manages'));
});

// User Controller

Route::get('/user',function(){
    $user = ManageUser::all();
    return view('user.index',compact('user'));
});
Route::get('/user/create',function(){
    return  view('user.create');
    return view('user.view',compact('user'));
});
Route::get('/user/show/{id}',function($id){
    $user = ManageUser::find($id);
return view('user.show')->with('user', $user);
});

Route::post('/user/delete',function(Request $request){
   ManageUser::destroy($request->id);
    return redirect('user')->with('flash_message', 'user deleted!');
});

Route::get('/user/edit/{id}',function($id){
    $user = ManageUser::find($id);
    return view('user.edit')->with('user', $user);
});
Route::post('/user/update',function(Request $request){

    $user =ManageUser::find($request->id);
    $input = $request->all();
    $user->update($input);
    $user= ManageUser::all();
    return view('user.index',compact('user'));

});




Route::post('insert', [App\Http\Controllers\Auth\ParentsController::class, 'insert'])->name('insert');
Route::post('show', [App\Http\Controllers\Auth\ParentsController::class, 'show'])->name('show');
// End ----------------------------------------------------->






//   students Attendance Controller ---->

// Route::get('/studentatt',function(){
//      return view('studentatt');
//  });

Route::get('/studentatts',function(){
    $studentatts = Studentatt::all();
    return view('markattendance.index',compact('studentatts'));
});

Route::get('/markattendance/create',function(){
    return  view('markattendance.create');
    return view('markattendance.view',compact('studentatts'));
});


Route::get('/markattendance/show/{id}',function($id){
    $studentatt = Studentatt::find($id);
return view('markattendance.show')->with('studentatts', $studentatt);

});












Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');






// Routes for parents controller -------------------------------------------------->

// Route::get('/parents',function(){
//     // $students = Student::all();
//     return view('parents.index');
// });

Route::get('parents' , [ParentsController::class , 'index'])->name('index');
Route::get('parents/show/{id}' , [ParentsController::class , 'show'])->name('show');
Route::get('parents/edit/{id}' , [ParentsController::class , 'edit'])->name('edit');
Route::put('parents/update' , [ParentsController::class , 'update'])->name('update');
Route::get('parents/delete/{id}' , [ParentsController::class , 'delete'])->name('delete');

Route::get('/parents/create',function(){
    return view('parents.create');
});




Route::post('prnt_insert', [App\Http\Controllers\Auth\ParentsController::class, 'insert'])->name('insert');
Route::post('show', [App\Http\Controllers\Auth\ParentsController::class, 'show'])->name('show');
// End ----------------------------------------------------->

// Routes For Vendor Here --------------------------------------------------------------------->

Route::get('ven' , [VendorController::class , 'index'])->name('vendor_index');
Route::get('vendor/show/{id}' , [VendorController::class , 'show'])->name('show');
Route::get('vendor/edit/{id}' , [VendorController::class , 'edit'])->name('edit');
Route::put('vendor/update' , [VendorController::class , 'update'])->name('update');
Route::get('vendor/delete/{id}' , [VendorController::class , 'delete'])->name('delete');

Route::get('/vendor/create',function(){
    return view('vendor.create');
});




Route::post('ven_insert', [App\Http\Controllers\VendorController::class, 'insert'])->name('vendor_insert');
Route::post('show', [App\Http\Controllers\VendorController::class, 'show'])->name('show');

// End ---------------------------------------------------------------------------------------------->


// Routes For Location Here --------------------------------------------------------------------->

Route::get('location' , [LocationController::class , 'index'])->name('location_index');
Route::get('location/show/{id}' , [LocationController::class , 'show'])->name('show');
Route::get('location/edit/{id}' , [LocationController::class , 'edit'])->name('edit');
Route::put('location/update' , [LocationController::class , 'update'])->name('update');
Route::get('location/delete/{id}' , [LocationController::class , 'delete'])->name('delete');

Route::get('/location/create',function(){
    return view('location.create');
});




Route::post('insert', [App\Http\Controllers\LocationController::class, 'insert'])->name('location_insert');
Route::post('show', [App\Http\Controllers\LocationController::class, 'show'])->name('show');

// End ---------------------------------------------------------------------------------------------->




Route::post('studentstore', [App\Http\Controllers\Auth\StudentController::class, 'store'])->name('studentstore');

 Route::post('stored', [App\Http\Controllers\Auth\TeacherController::class, 'store'])->name('stored');
 Route::post('managestore', [App\Http\Controllers\Auth\ManageController::class, 'store'])->name('managestore');
 Route::post('studentattstore', [App\Http\Controllers\Auth\StudentattController::class, 'store'])->name('studentattstore');
 Route::post('userstore', [App\Http\Controllers\Auth\UserController::class, 'store'])->name('userstore');

?>
