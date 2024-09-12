<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\J_juegosController;
use App\Http\Controllers\PedidosArchivosController;
use App\Http\Controllers\TemporadaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('apimilton/', [TemporadaController::class, 'generarApiTemporada']);
Route::get('juego_y_contenido/{id}', [J_juegosController::class, 'juego_y_contenido']);
Route::post('j_guardar_calificacion', [J_juegosController::class, 'j_guardar_calificacion']);
Route::post('calificacion_estudiante', [J_juegosController::class, 'calificacion_estudiante']);
Route::get('estudiante_sopa/{id}', [EstudianteController::class, 'show']);

///=======PERSEO=========
require_once "others/perseo/PerseoRouter.php";
////ACORTADORES==
Route::get('verDataLink/{codigo}', 'LinkAcortadorController@verDataLink');

    Route::post('setContenido',[ArchivosController::class,'setContenido']);
    Route::post('eliminarPlanificacion',[ArchivosController::class,'eliminarPlanificacion']);
    Route::post('addTareaContenido',[ArchivosController::class,'addTareaContenido']);
    Route::post('addContenido',[ArchivosController::class,'addContenido']);
    Route::post('institucion',[ArchivosController::class,'store']);
    Route::post('guardarLogoInstitucion',[ArchivosController::class,'guardarLogoInstitucion']);
    Route::post('saveSeleccion',[ArchivosController::class,'guardaSeleccionSimple']);
    //================APIS PARA MATERIAL SUBIR===============
    Route::post('cargarmaterial',[ArchivosController::class,'storeMaterial']);
    Route::post('agregarMaterial',[ArchivosController::class,'agregarMaterial']);
    Route::post('upload/file',[ArchivosController::class,'upload']);
    Route::post('eliminar/material/subir',[ArchivosController::class,'eliminarMaterialSubir']);
    //================FIN APIS PARA MATERIAL====================
    Route::post('setPlanificacion',[ArchivosController::class,'setPlanificacion']);
    //evaluacion
    Route::post('pregunta',[ArchivosController::class,'storeEvaluacion']);
    Route::get('eliminarPregunta',[ArchivosController::class,'eliminarPregunta']);
    //fin evaluacion
    Route::post('preguntas_salle',[ArchivosController::class,'storeSalle']);
    //salle
    Route::post('cargar_opcion_salle',[ArchivosController::class,'cargar_opcion_salle']);
    Route::post('editar_opcion_salle',[ArchivosController::class,'editar_opcion_salle']);
    Route::get('quitar_opcion_salle/{id}',[ArchivosController::class,'quitar_opcion_salle']);
    Route::post('tipoJuegos',[ArchivosController::class,'storeJuego']);
    Route::post('perfil',[ArchivosController::class,'perfil']);
    Route::post('test',[ArchivosController::class,'test']);
    Route::post('files_departamentos_save',[ArchivosController::class,'files_departamentos_save']);
    Route::post('editarOpcion',[ArchivosController::class,'editarOpcion']);
    Route::post('cargarOpcion',[ArchivosController::class,'cargarOpcion']);
    Route::post('uploadDocuemntos',[ArchivosController::class,'uploadDocuemntos']);

    Route::post('guardarFotoMatricula',[ArchivosController::class, 'guardarFotoMatricula']);
    Route::post('guardarComprobantepension',[ArchivosController::class, 'guardarComprobantepension']);

    //api para eliminar archivos material
    Route::post('archivoseliminar',[ArchivosController::class, 'eliminarMaterialApoyo']);
    //===================API PARA INSTITUCIONES=================================
    Route::post('institucion_guardar',[ArchivosController::class,'institucion_guardar']);
    //===================API PARA MUESTRAS=================================
    Route::post('muestra',[ArchivosController::class,'muestra']);
    Route::post('EditarDetalle',[ArchivosController::class,'EditarDetalle']);
    Route::post('EliminarDetalleMuestra',[ArchivosController::class,'EliminarDetalleMuestra']);
    //===================ARTICULOS PEDAGOGICOSS=================================
    Route::post('save_posts',[ArchivosController::class,'save_articulos_ped']);
    Route::post('delete_posts',[ArchivosController::class,'eliminar_posts']);
    //===================PROYECTOS==========================================
    Route::post('proyectos',[ArchivosController::class,'guardarProyecto']);
    Route::get('proyectos/file/eliminar',[ArchivosController::class,'fileEliminar']);
    Route::post('proyectos/respuesta',[ArchivosController::class,'guardarProyectoRespuesta']);
    //===================ROMPECABEZAS==========================================
    Route::get('get_rompecabezas/{id_juego}',[ArchivosController::class,'get_rompecabezas']);
    Route::get('delete_rompecabezas/{id}',[ArchivosController::class,'delete_rompecabezas']);
    Route::post('save_rompecabezas',[ArchivosController::class,'save_rompecabezas']);
    Route::post('j_guardar_calificacion',[ArchivosController::class,'j_guardar_calificacion']);
    //===================PROPUESTAS==============================================
    Route::post('guardarPropuesta',[ArchivosController::class,'guardarPropuesta']);
    Route::get('propuesta/file/eliminar',[ArchivosController::class,'filePropuestaEliminar']);
    //===================ADAPTACIONES CURRICULARES===================================
    Route::post('guardarAdaptacion',[ArchivosController::class,'guardarAdaptacion']);
    Route::get('adaptacion/file/eliminar',[ArchivosController::class,'fileAdaptacionEliminar']);
    //===================DIAGNOSTICO===================================
    Route::post('cargarOpcionDiagnostico',[ArchivosController::class,'cargarOpcionDiagnostico']);
    Route::post('editarOpcionDiagnostico',[ArchivosController::class,'editarOpcionDiagnostico']);
    Route::post('eliminarOpcionDiagnostica',[ArchivosController::class,'eliminarOpcionDiagnostica']);
    //Pedidos
    Route::post('guardarPedido',[ArchivosController::class,'guardarPedido']);
    Route::post('guardarDocumentosDespuesContrato',[ArchivosController::class,'guardarDocumentosDespuesContrato']);
    Route::post('guardarFilePedido',[ArchivosController::class,'guardarFilePedido']);
    Route::get('pedidos/file/eliminar',[ArchivosController::class,'filePedidoEliminar']);
    Route::post('changeEstadoHistoricoPedido',[ArchivosController::class,'changeEstadoHistoricoPedido']);

    Route::post('f_guardarVarios',[ArchivosController::class,'f_guardarVarios']);
    Route::post('f_deleteVarios',[ArchivosController::class,'f_deleteVarios']);

    //obsequios
    Route::post('changeEstadoObsequio',[ArchivosController::class,'changeEstadoObsequio']);
    Route::post('saveCotizacionFactura',[ArchivosController::class,'saveCotizacionFactura']);
    //fichas
    Route::post('saveFichas',[ArchivosController::class,'saveFichas']);
    Route::post('eliminarFicha',[ArchivosController::class,'eliminarFicha']);
    Route::get('deleteFileFicha/{id}',[ArchivosController::class,'deleteFileFicha']);
    //verificaciones
    Route::post('saveFileVerificacion',[ArchivosController::class,'saveFileVerificacion']);
    //neet documentos
    Route::post('saveNeetDocumentos',[ArchivosController::class,'saveNeetDocumentos']);
    Route::post('eliminarNEET',[ArchivosController::class,'eliminarNEET']);
    Route::get('deleteFileNEET/{id}',[ArchivosController::class,'deleteFileNEET']);
    //pagos pedidos
    Route::resource('guardarDatosPedido',PedidosArchivosController::class);
    Route::post('eliminarValores',[PedidosArchivosController::class,'eliminarValores']);











