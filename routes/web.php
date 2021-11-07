<?php


use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::post('/enviarpreguntas', [App\Http\Controllers\PreguntasController::class, 'enviarpreguntas'])->name('preguntas.add');

Auth::routes(['register' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verpreguntas', [App\Http\Controllers\PreguntasController::class, 'listarpreguntas'])->name('verpreguntas.add');
Route::get('/Nosotros', [App\Http\Controllers\NosotrosController::class, 'nosotros'])->name('nosotros.add');

Route::get('/Registro', [App\Http\Controllers\Registro_sociosController::class, 'enviarsolicitud'])->name('solicitud.view');

Route::get('/configuracionDashboard', [App\Http\Controllers\DashboardsController::class, 'configuracion'])->name('dashboard.configuracion');

Route::get('/', [App\Http\Controllers\landingsController::class, 'index'])->name('landing.add');
Route::get('/createUsers', [App\Http\Controllers\UsersController::class, 'create']);


// admin
Route::group(['middleware' => 'admin'], function () {
    // •Dashboard
    Route::get('/dashboard', [App\Http\Controllers\DashboardsController::class, 'home'])->name('dashboard.home');


    // •Solititudes
    Route::get('/solicitudes', [App\Http\Controllers\IncorporacionSolicitudesController::class, 'index'])->name('solicitudes.page');
    Route::post('/enviarSolicitud', [App\Http\Controllers\IncorporacionSolicitudesController::class, 'enviar_solicitud'])->name('solicitud.add');
    Route::POST('/cambiarEstado', [App\Http\Controllers\IncorporacionSolicitudesController::class, 'editStatus'])->name('solicitud.status');
});


// Route::get('/', function () {
//     $data = Product::orderBy('order', 'desc')->where('active', '1')->get();
//     $tecnologies = Tecnologies::orderBy('order', 'desc')->where('active', '1')->get();
//     $page = Page::where('user', '=', 1)->first();
//     $noticias = Noticias::where('id_user', '=', 1)
//         ->where('active', '=', 1)
//         ->get();
//     $usuario = User::select('contactos')
//         ->where('id', '=', 1)->first();
//     $blog_noticias = Blogs::where('related', 'like', "%" . "noticia" . "%")
//         ->where('private', '=', 0)->orderBy('created_at', 'desc')->limit(3)->get();
//     $contactos = json_decode($usuario->contactos);
//     return view('welcome', compact('data', 'tecnologies', 'page', 'noticias', 'contactos', 'blog_noticias'));
// })->name('welcome');

// // addVisita
// Route::post('/addvisita', [App\Http\Controllers\visitasController::class, 'addVisita'])->name('visitas.add');

// Auth::routes();

// Route::POST('/addEmail', [App\Http\Controllers\Portafolio\EmailsController::class, 'addEmail'])->name('email.add');
// Route::post('/sumStadistic', [App\Http\Controllers\StadisticsController::class, 'sumStadistic'])->name('stadistic.sum');

// Route::get('/blog/{value}', [App\Http\Controllers\Portafolio\BlogsController::class, 'blogView'])->name('blog.view');
// Route::get('/search', [App\Http\Controllers\Portafolio\BlogsController::class, 'blogSearch'])->name('blog.search');


// //bajo login
// Route::group(['middleware' => 'admin'], function () {

//     Route::get('/zonavendedor', [App\Http\Controllers\Portafolio\SellerController::class, 'index'])->name('seller');
//     Route::get('/productPageEdit', [App\Http\Controllers\Portafolio\SellerController::class, 'editProduct'])->name('pageProedit');
//     Route::get('/tecnologyPageEdit', [App\Http\Controllers\Portafolio\SellerController::class, 'editTecnology'])->name('pageTecedit');


//     Route::get('/zonacliente', [App\Http\Controllers\Portafolio\ClientController::class, 'index'])->name('client');


//     Route::get('/productdel', [App\Http\Controllers\Portafolio\ProductController::class, 'deleteProduct'])->name('product.del');
//     Route::post('/productadd', [App\Http\Controllers\Portafolio\ProductController::class, 'addProduct'])->name('product.add');
//     Route::get('/productget', [App\Http\Controllers\Portafolio\ProductController::class, 'getProduct'])->name('product.get');
//     Route::POST('/productedit', [App\Http\Controllers\Portafolio\ProductController::class, 'editProduct'])->name('product.edit');
//     Route::POST('/productactive', [App\Http\Controllers\Portafolio\ProductController::class, 'checkActive'])->name('product.active');

//     Route::post('/tecnologyadd', [App\Http\Controllers\Portafolio\TecnologiesController::class, 'addTecnology'])->name('tecnology.add');
//     Route::get('/tecnologydel', [App\Http\Controllers\Portafolio\TecnologiesController::class, 'deleteTecnology'])->name('tecnology.del');
//     Route::get('/tecnologyget', [App\Http\Controllers\Portafolio\TecnologiesController::class, 'getTecnology'])->name('tecnology.get');
//     Route::POST('/tecnologyedit', [App\Http\Controllers\Portafolio\TecnologiesController::class, 'editTecnology'])->name('tecnology.edit');
//     Route::POST('/tecnoactive', [App\Http\Controllers\Portafolio\TecnologiesController::class, 'checkTecno'])->name('tecnology.active');

//     //admin
//     Route::get('/dashboard', [App\Http\Controllers\Portafolio\SellerController::class, 'dashboard'])->name('dashboard');
//     Route::get('/pageConfig', [App\Http\Controllers\Portafolio\SellerController::class, 'pageConfig'])->name('pageConfig');
//     Route::get('/slidersConfig', [App\Http\Controllers\Portafolio\SellerController::class, 'slidersConfig'])->name('slidersConfig');
//     Route::get('/profileConfig', [App\Http\Controllers\Portafolio\SellerController::class, 'profileConfig'])->name('profileConfig');
//     Route::get('/stadisticsConfig', [App\Http\Controllers\Portafolio\SellerController::class, 'stadisticsConfig'])->name('stadisticsConfig');

//     // editPage
//     Route::post('/editPage', [App\Http\Controllers\Portafolio\PageController::class, 'editPage'])->name('page.edit');

//     //profiles
//     Route::post('/editUser', [App\Http\Controllers\Portafolio\UsersController::class, 'editUser'])->name('user.edit');
//     Route::post('/editPassword', [App\Http\Controllers\Portafolio\UsersController::class, 'editPassword'])->name('password.edit');


//     Route::post('/editNotice', [App\Http\Controllers\Portafolio\NoticiasController::class, 'editNoticia'])->name('notice.edit');
//     Route::get('/deleteNotice', [App\Http\Controllers\Portafolio\NoticiasController::class, 'deleteNoticia'])->name('notice.delete');


//     Route::get('/deleteEmail', [App\Http\Controllers\Portafolio\EmailsController::class, 'deleteEmail'])->name('email.delete');


//     //estadisticas
//     Route::get('/editStadistic', [App\Http\Controllers\StadisticsController::class, 'editDetails'])->name('stadistic.edit');

//     //blogs


//     Route::get('/blogsConfig', [App\Http\Controllers\Portafolio\BlogsController::class, 'blogsView'])->name('blogs.home');
//     Route::get('/deleteBlog', [App\Http\Controllers\Portafolio\BlogsController::class, 'deleteBlog'])->name('delete.blog');
//     Route::get('/getBlog', [App\Http\Controllers\Portafolio\BlogsController::class, 'getBlog'])->name('get.blog');
//     Route::post('/addblog', [App\Http\Controllers\Portafolio\BlogsController::class, 'addBlog'])->name('add.blog');
//     Route::post('/updateblog', [App\Http\Controllers\Portafolio\BlogsController::class, 'updateBlog'])->name('update.blog');
//     Route::post('/privateblog', [App\Http\Controllers\Portafolio\BlogsController::class, 'privateBlog'])->name('private.blog');

//     //Tasks
//     Route::get('/proyects', [App\Http\Controllers\Portafolio\TasksController::class, 'homeProyects'])->name('task.home');
//     Route::get('/proyect', [App\Http\Controllers\Portafolio\TasksController::class, 'viewProyect'])->name('task.proyect');
//     Route::post('/proyectAdd', [App\Http\Controllers\Portafolio\TasksController::class, 'addProyect'])->name('task.add');
//     Route::get('/favoriteProyect', [App\Http\Controllers\Portafolio\TasksController::class, 'favoriteProyect'])->name('favorite.proyect');
//     Route::get('/deleteProyect', [App\Http\Controllers\Portafolio\TasksController::class, 'deleteProyect'])->name('proyect.delete');


//     //task from Json
//     Route::get('/addTask', [App\Http\Controllers\Portafolio\TasksController::class, 'addTask'])->name('task.addtask');
//     Route::get('/getTask', [App\Http\Controllers\Portafolio\TasksController::class, 'getTask'])->name('task.getTask');
//     Route::POST('/editTaskDescription', [App\Http\Controllers\Portafolio\TasksController::class, 'editTaskDescription'])->name('task.editTaskDescription');
//     Route::POST('/editTaskStep', [App\Http\Controllers\Portafolio\TasksController::class, 'editTaskStep'])->name('task.editTaskStep');


//     Route::get('/deleteFromJson', [App\Http\Controllers\Portafolio\TasksController::class, 'deleteFromJson'])->name('task.deleteFromJson');
//     Route::POST('/addToJson', [App\Http\Controllers\Portafolio\TasksController::class, 'addToJson'])->name('task.addToJson');
//     Route::get('/checkFromJson', [App\Http\Controllers\Portafolio\TasksController::class, 'checkFromJson'])->name('task.checkFromJson');


//     //visitas
//     Route::post('/deleteVisita', [App\Http\Controllers\visitasController::class, 'deleteVisita'])->name('visitas.delete');
// });

// Route::get('/clear-cache', function () {
//     chdir('/var/www/html/worklanding');
//     echo shell_exec('php artisan cache:clear');
//     echo shell_exec('php artisan config:clear');
//     echo shell_exec('php artisan config:cache');
//     echo shell_exec('php artisan route:clear');
//     echo shell_exec('php artisan optimize');
// });
