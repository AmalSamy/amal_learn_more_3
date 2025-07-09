<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteOne\SiteOneController;


Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/amal', function () {
    return view ('amal');
});*/

// Route::get('/home',function(){
//     return 'Home , Home ';
// });

//user , profile
// بدي امرر متغير في رابط واحد لعدة مستخدمين
// اجباري ارسل id
// Route::get('/user/profile/{id}',function($id){
// //return 'user profile';
// echo 'user id :' . $id;
// });

/*news , all news , new
 بدي اعرض خبر معين
 ليس مجبر انه اعطي id
 وهيظهر كل الاخبار
 متغير اختياري
Route::get('/news/{id?}',function($id = null){
    //اذا كان في خبر معين بدي اشوفه اعرض هذا الخبر , اذا مافي اعرضلي كل الاخبار
$news = [1 , 2 , 3 , 6 , 8];
if($id){
    echo 'new is :' . $id;
}else{
    // بطبع كل الاخبار لو ما اخترت اي دي معين
foreach ($news as $new) {
    echo $new . '<br>';
}
}

});
*/

// site 1 / home , about us , contact us
//prefix بدل ما اضيف الموقع على كل صفحة على حدا , بضيف prefix افضل
// Route::get('/home', function(){
// echo '<h1> home </h1>';
// });

// Route::get('/about', function(){
// echo '<h1> about us </h1>';
// });

// Route::get('/contact', function(){
// echo '<h1> contact us </h1>';
// });

//راوتس بطريقة الكونترولر
Route::prefix('site1')->name('site1.')->controller(SiteOneController::class)->group(function(){
Route::get('/home','home')->name('home');
Route::get('/services','services')->name('services');
Route::get('/portfolio','portfolio')->name('portfolio');
Route::get('/about', 'about')->name('about');
Route::get('/contact','contact')->name('contact');
//صفحة للمسجات جاية من الcontact
Route::get('/msg/{id}','msg')->name('msg');
Route::get('/ok','ok')->name('ok');
Route::post('/contact','postcontact')->name('postcontact');
Route::get('/viewcontact','viewcontact')->name('viewcontact');


});


