<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContraOlvidadaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonacionController;
use App\Http\Controllers\DonadorController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\ComentariosEventosController;
use App\Http\Controllers\ComentariosBlogController;
use App\Http\Controllers\RestrablecerContraController;
use App\Http\Controllers\UsuarioController;



use App\Http\Controllers\MercadoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home');
//Ruta offiline: 
Route::get('/offline', function () {
    return view('vendor/laravelpwa/offline');
});

Route::get('nosotros', [HomeController::class, 'nosotros'])->name('nosotros');
Route::get('contacto', [HomeController::class, 'contacto'])->name('contacto');
Route::get('blog', [BlogController::class, 'blog'])->name('blog.index');
Route::get('blog/{id}', [BlogController::class, 'blogDetalle'])->name('blog.detalle')->whereNumber('id');

// INICIO DE SESION
Route::get('iniciar-sesion', [AuthController::class, 'login'])
    ->name('auth.login');

Route::post('iniciar-sesion', [AuthController::class, 'loginAction'])
    ->name('auth.loginAction');

// CERRAR SESION
Route::post('cerrar-sesion', [AuthController::class, 'logout'])
    ->name('auth.logout');

// REGISTRO
Route::get('registro', [AuthController::class, 'register'])->name('auth.register');

Route::post('registro', [AuthController::class, 'registerAction'])->name('auth.registerAction');

// ROLES
Route::get('admin/index', [AuthController::class, 'admin'])->name('admin.index')->middleware(['auth', 'role']);
Route::get('consumidor/index', [AuthController::class, 'consumidor'])->name('consumidor.index')->middleware(['auth', 'role']);
Route::get('donador/index', [AuthController::class, 'donador'])->name('donador.index')->middleware(['auth', 'role']);

// PERFIL
Route::get('perfil', [UsuarioController::class, 'perfil'])->name('usuarios.perfil')->middleware(['auth', 'role']);

// VER EL PERFIL DEL USUARIO VENDEDOR
Route::get('perfil/{id}', [AuthController::class, 'mostrarPerfil'])->name('perfilUsuario')->middleware(['auth', 'role']);


Route::get('perfil/editar/{id}', [UsuarioController::class, 'editarPerfil'])->name('usuarios.editarPerfil')->whereNumber('id')->middleware(['auth', 'role']);
Route::post('perfil/editar/{id}', [UsuarioController::class, 'editarPerfilAction'])->name('usuarios.editarPerfilAction')->whereNumber('id')->middleware(['auth', 'role']);

// ADMIN
Route::get('admin/dashboardAdmin', [AdminController::class, 'dashboardAdmin']) -> name('admin.dashboardAdmin')->middleware(['auth', 'role']);

Route::get('admin/dashboardBlog', [AdminController::class, 'dashboardBlog']) -> name('admin.blog.dashboardBlog')->middleware(['auth', 'role']);

Route::get('admin/dashboardBlog/blog/nuevo', [AdminController::class, 'formNewBlog'])-> name('admin.formNewBlog')->middleware(['auth', 'role']);
Route::post('admin/dashboardBlog/blog/nuevo', [AdminController::class, 'runNewBlog'])-> name('admin.runNewBlog')->middleware(['auth', 'role']);

Route::get('admin/dashboardBlog/blog/{id}/eliminar', [AdminController::class, 'deleteBlog'])->name('admin.deleteBlog')->whereNumber('id')->middleware(['auth', 'role']);
Route::post('admin/dashboardBlog/blog/{id}/eliminar', [AdminController::class, 'deleteActionBlog'])->name('admin.deleteActionBlog')->whereNumber('id')->middleware(['auth', 'role']);

Route::get('admin/dashboardBlog/blog/{id}/editar', [AdminController::class, 'editBlog'])->name('admin.blog.editBlog')->whereNumber('id')->middleware(['auth', 'role']);
Route::post('admin/dashboardBlog/blog/{id}/editar', [AdminController::class, 'editActionBlog'])->name('admin.blog.editActionBlog')->whereNumber('id')->middleware(['auth', 'role']);

// Mercado
Route::get('mercado', [MercadoController::class, 'verTodos'])->name('mercado.index')->middleware(['auth', 'role']);

Route::get('mercado/nuevo', [MercadoController::class, 'formNewMercado'])-> name('mercado.formNewMercado')->middleware(['auth', 'role']);
Route::post('mercado/nuevo', [MercadoController::class, 'runNewMercado'])-> name('mercado.runNewMercado')->middleware(['auth', 'role']);
Route::get('mercado/productos/{id}', [MercadoController::class, 'findById'])->name('mercado.mercadoDetalle')->whereNumber('id')->middleware(['auth', 'role']);

Route::get('mercado/misProductos/{id}', [MercadoController::class, 'allProducts'])-> name('mercado.userProducts')->middleware(['auth', 'role']);

Route::get('mercado/misProductos/{id}/eliminar', [MercadoController::class, 'deleteProduct'])-> name('mercado.eliminarProduct')->middleware(['auth', 'role']);
Route::post('mercado/misProductos/{id}/eliminar', [MercadoController::class, 'deleteProductAction'])-> name('mercado.deleteProductAction')->middleware(['auth', 'role']);

Route::get('mercado/misProductos/{id}/editar', [MercadoController::class, 'editProduct'])-> name('mercado.editarProduct')->middleware(['auth', 'role']);
Route::post('mercado/misProductos/{id}/editar', [MercadoController::class, 'editProductAction'])-> name('mercado.editProductAction')->middleware(['auth', 'role']);

Route::get('mercado/misProductos/{id}/venta', [MercadoController::class, 'ventaEstado'])->name('mercado.vendido');
Route::post('mercado/misProductos/{id}/venta', [MercadoController::class, 'ventaEstadoAction'])->name('mercado.vendidoSi');
// MIS COMPRAS
Route::get('mercado/misCompras/{id}', [MercadoController::class, 'allCompras'])-> name('mercado.compras.userCompras')->middleware(['auth', 'role']);

Route::get('mercado/misCompras/{id}/detalle', [MercadoController::class, 'userComprasDetail'])-> name('mercado.compras.userComprasDetail')->middleware(['auth', 'role']);

Route::get('mercado/misCompras/{id}/eliminar', [MercadoController::class, 'deleteCompra'])-> name('mercado.compras.deleteCompra')->middleware(['auth', 'role']);
Route::post('mercado/misCompras/{id}/eliminar', [MercadoController::class, 'deleteCompraAction'])-> name('mercado.compras.deleteCompraAction')->middleware(['auth', 'role']);


//Donaciones - (Vistas del Consumidor)

//Donaciones - (Vistas del Consumidor)

Route::get('consumidor/donaciones',[DonacionController::class, 'allDonaciones'])->name('consumidor.donaciones')->middleware(['auth', 'role']);
Route::get('consumidor/donaciones/{id}', [DonacionController::class, 'findById'])->name('consumidor.donacionesDetalle')->whereNumber('id')->middleware(['auth', 'role']);

//Administración de Donaciones - (Donador - Donante)
Route::get('donador/dashboard', [DonadorController::class, 'dashboard'])->name('donador.dashboard')->middleware(['auth', 'role']);
Route::get('donador/reciclajeDetalle/{id}', [DonadorController::class, 'reciclajeDetalle'])->name('donador.reciclajeDetalle')->whereNumber('id')->middleware(['auth', 'role']);
Route::get('donador/donacion/{id}/donado', [DonadorController::class, 'estadoDonacion'])->name('donador.elementoDonado')->whereNumber('id')->middleware(['auth', 'role']);
Route::post('donador/donacion/{id}/donado', [DonadorController::class, 'estadoDonacionAction'])->name('donador.elementoDonadoConfirmar')->whereNumber('id')->middleware(['auth', 'role']);
Route::get('donador/dashboard/elemento/nuevo', [DonadorController::class, 'formElemento'])-> name('donador.formElemento')->middleware(['auth', 'role']);
Route::post('donador/dashboard/elemento/nuevo', [DonadorController::class, 'nuevoElemento'])-> name('donador.nuevoElemento')->middleware(['auth', 'role']);
//Eliminar Donaciones:
Route::get('donador/donacion/{id}/eliminar', [DonadorController::class, 'borrar'])->name('donador.borrar')->whereNumber('id')->middleware(['auth', 'role']);
Route::post('donador/donacion/{id}/eliminar', [DonadorController::class, 'borrarDonacion'])->name('donador.borrarDonacion')->whereNumber('id')->middleware(['auth', 'role']);
//Editar Donaciones:
Route::get('donador/donacion/{id}/editar', [DonadorController::class, 'editar'])->name('donador.editar')->whereNumber('id')->middleware(['auth', 'role']);
Route::post('donador/donacion/{id}/editar', [DonadorController::class, 'editarDonacion'])->name('donador.editarDonacion')->whereNumber('id')->middleware(['auth', 'role']);


//Empresas: 
Route::get('empresas/empresas',[EmpresasController::class, 'allEmpresas'])->name('empresas.empresas');
Route::get('empresas/empresas/{id}', [EmpresasController::class, 'findById'])->name('empresas.empresasDetalle')->whereNumber('id');
//Cargar empresa:
Route::get('admin/empresas/dashboard', [AdminController::class, 'dashboard'])->name('admin.empresas.dashboard')->middleware(['auth', 'role']);
Route::get('admin/empresas/formEmpresa/nuevo', [AdminController::class, 'formEmpresa'])-> name('admin.empresas.formEmpresa')->middleware(['auth', 'role']);
Route::post('admin/empresas/formEmpresa/nuevo', [AdminController::class, 'nuevaEmpresa'])-> name('admin.empresas.nuevaEmpresa')->middleware(['auth', 'role']);
//Eliminar Empresa:
Route::get('admin/empresas/empresa/{id}/eliminar', [AdminController::class, 'borrar'])->name('admin.empresas.borrar')->whereNumber('id')->middleware(['auth', 'role']);
Route::post('admin/empresas/empresa/{id}/eliminar', [AdminController::class, 'borrarEmpresa'])->name('admin.empresas.borrarEmpresa')->whereNumber('id')->middleware(['auth', 'role']);
//Editar Empresa:
Route::get('admin/empresas/empresa/{id}/editar', [AdminController::class, 'editar'])->name('admin.empresas.editar')->whereNumber('id')->middleware(['auth', 'role']);
Route::post('admin/empresas/empresa/{id}/editar', [AdminController::class, 'editarEmpresa'])->name('admin.empresas.editarEmpresa')->whereNumber('id')->middleware(['auth', 'role']);


//Eventos / CONSUMIDOR:
Route::get('eventos/consumidor/eventos',[EventosController::class, 'allEventos'])->name('eventos.consumidor.eventos')->middleware(['auth', 'role']);
Route::get('eventos/consumidor/eventos/{id}', [EventosController::class, 'findById'])->name('eventos.consumidor.eventoDetalle')->whereNumber('id')->middleware(['auth', 'role']);

//Eventos / DONADOR:
Route::get('eventos/donador/eventos',[EventosController::class, 'allEventosDonador'])->name('eventos.donador.eventos')->middleware(['auth', 'role']);
Route::get('eventos/donador/eventos/{id}', [EventosController::class, 'findByIdDonador'])->name('eventos.donador.eventoDetalle')->whereNumber('id')->middleware(['auth', 'role']);
Route::get('eventos/donador/misEventos', [DonadorController::class, 'allMisEventos'])->name('eventos.donador.misEventos')->middleware(['auth', 'role']);
Route::get('eventos/donador/misEventos/{id}', [EventosController::class, 'findByIdDonadorEventos'])->name('eventos.donador.misEventoDetalle')->whereNumber('id')->middleware(['auth', 'role']);

//publicar:
Route::get('eventos/donador/eventos/nuevo', [DonadorController::class, 'formNewEvento'])-> name('eventos.donador.formNewEvento')->middleware(['auth', 'role']);
Route::post('eventos/donador/eventos/nuevo', [DonadorController::class, 'runNewEvento'])-> name('eventos.donador.runNewEvento')->middleware(['auth', 'role']);

//Eliminar evento:
Route::get('eventos/donador/misEventos/{id}/eliminar', [DonadorController::class, 'borrarEvento'])->name('eventos.donador.borrar')->whereNumber('id')->middleware(['auth', 'role']);
Route::post('eventos/donador/misEventos/{id}/eliminar', [DonadorController::class, 'borrarEventoAcc'])->name('eventos.donador.borrarEventoAcc')->whereNumber('id')->middleware(['auth', 'role']);
//Editar evento:
Route::get('eventos/donador/misEventos/{id}/editar', [DonadorController::class, 'editarEvento'])->name('eventos.donador.editar')->whereNumber('id')->middleware(['auth', 'role']);
Route::post('eventos/donador/misEventos/{id}/editar', [DonadorController::class, 'editarEventoAcc'])->name('eventos.donador.editarEventoAcc')->whereNumber('id')->middleware(['auth', 'role']);


//Comentarios Eventos: 

Route::get('eventos/donador/eventos/{id}/comentarios', [ComentariosEventosController::class, 'allComentariosDonante'])->name('eventos.donador.eventoDetalle')->whereNumber('id')->middleware(['auth', 'role']);
Route::post('eventos/donador/eventos/{id}/comentarios', [ComentariosEventosController::class, 'comentarioEvento'])->name('eventos.donador.eventoDetalle')->whereNumber('id')->middleware(['auth', 'role']);

Route::get('eventos/consumidor/eventos/{id}/comentarios', [ComentariosEventosController::class, 'allComentarios'])->name('eventos.consumidor.eventoDetalle')->whereNumber('id');
Route::post('eventos/consumidor/eventos/{id}/comentarios', [ComentariosEventosController::class, 'comentarioEvento'])->name('eventos.consumidor.eventoDetalle')->whereNumber('id');


//Comentarios Blog: 
Route::get('blog/{id}/comentarios', [ComentariosBlogController::class, 'allComentarios']) -> name('blog.detalle') ->whereNumber('id');
Route::post('blog/{id}/comentarios', [ComentariosBlogController::class, 'comentarioBlog']) -> name('blog.detalle') ->whereNumber('id');


// Recuperar Contraseña
Route::get('forgot-password', [ContraOlvidadaController::class, 'showForm'])->name('password.request');
Route::post('forgot-password', [ContraOlvidadaController::class, 'sendRecoveryCode'])->name('password.email');


Route::get('reset-password/{code}', [RestrablecerContraController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [RestrablecerContraController::class, 'resetPassword'])->name('password.update');


Route::get('/offline', function () {
    return view('offline');
})->name('offline');

Route::fallback(function () {
    return view('404.404');
});