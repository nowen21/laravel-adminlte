<?php

use Illuminate\Support\Facades\Route;

$routexxx = 'welcomex';
$controll = 'App\Http\Controllers\WelcomController@';

Route::group(['prefix' => ''], function () use ($routexxx, $controll) {

    // Ruta para la página de inicio
    Route::get('/', [
        'uses' => $controll . 'index',
    ])->name($routexxx);

    // Rutas para diferentes páginas de dashboard
    Route::get('dashboard2', [
        'uses' => $controll . 'dashboard2',
    ])->name($routexxx.'-dashboa2');

    Route::get('dashboard3', [
        'uses' => $controll . 'dashboard3',
    ])->name($routexxx.'-dashboa3');

    // Ruta para la página de widgets
    Route::get('widget', [
        'uses' => $controll . 'widget',
    ])->name($routexxx.'-widgetxx');

    // Rutas para diferentes estilos de navegación superior
    Route::get('topnav', [
        'uses' => $controll . 'topnav',
    ])->name($routexxx.'-topnavxx');

    Route::get('topnavsidebar', [
        'uses' => $controll . 'topnavsidebar',
    ])->name($routexxx.'-topnavsi');

    // Ruta para la página de diseño en caja
    Route::get('boxed', [
        'uses' => $controll . 'boxed',
    ])->name($routexxx.'-boxedxxx');

    // Ruta para la página de barra lateral fija
    Route::get('fixedsidebar', [
        'uses' => $controll . 'fixedsidebar',
    ])->name($routexxx.'-fixedsid');

    // Ruta para la página de barra lateral fija personalizada
    Route::get('fixedsidebarcustom', [
        'uses' => $controll . 'fixedsidebarcustom',
    ])->name($routexxx.'-fixsidcu');

    // Rutas para diferentes gráficos
    Route::get('chartjs', [
        'uses' => $controll . 'chartjs',
    ])->name($routexxx.'-chartjsx');

    Route::get('flot', [
        'uses' => $controll . 'flot',
    ])->name($routexxx.'-flotxxxx');

    // Ruta para la página de gráficos en línea
    Route::get('inline', [
        'uses' => $controll . 'inline',
    ])->name($routexxx.'-inlinexx');

    // Ruta para la página de gráficos uPlot
    Route::get('uplot', [
        'uses' => $controll . 'uplot',
    ])->name($routexxx.'-uplotxxx');

    // Ruta para la página de elementos generales
    Route::get('general', [
        'uses' => $controll . 'general',
    ])->name($routexxx.'-generalx');

    // Ruta para la página de iconos
    Route::get('iconos', [
        'uses' => $controll . 'iconos',
    ])->name($routexxx.'-iconosxx');

    // Ruta para la página de botones
    Route::get('buttons', [        'uses' => $controll . 'buttons',
    ])->name($routexxx.'-buttonsx');

    // Ruta para la página de sliders
    Route::get('sliders', [
        'uses' => $controll . 'sliders',
    ])->name($routexxx.'-slidersx');

    // Ruta para la página de modals
    Route::get('modals', [
        'uses' => $controll . 'modals',
    ])->name($routexxx.'-modalsxx');

    // Ruta para la página de navbar
    Route::get('navbar', [
        'uses' => $controll . 'navbar',
    ])->name($routexxx.'-navbarxx');

    // Ruta para la página de timeline
    Route::get('timeline', [
        'uses' => $controll . 'timeline',
    ])->name($routexxx.'-timeline');

    // Ruta para la página de ribbons
    Route::get('ribbons', [
        'uses' => $controll . 'ribbons',
    ])->name($routexxx.'-ribbonsx');

    // Ruta para la página de formulario general
    Route::get('formgeneral', [
        'uses' => $controll . 'formgeneral',
    ])->name($routexxx.'-formgene');

    // Ruta para la página de funciones avanzadas
    Route::get('advanced', [
        'uses' => $controll . 'advanced',
    ])->name($routexxx.'-advanced');

    // Ruta para la página de editores
    Route::get('editors', [
        'uses' => $controll . 'editors',
    ])->name($routexxx.'-editorsx');

    // Ruta para la página de validación
    Route::get('validation', [
        'uses' => $controll . 'validation',
    ])->name($routexxx.'-validati');

    // Ruta para la página simple
    Route::get('simple', [
        'uses' => $controll . 'simple',
    ])->name($routexxx.'-simplexx');

    // Ruta para la página de datos
    Route::get('data', [
        'uses' => $controll . 'data',
    ])->name($routexxx.'-dataxxxx');

    // Ruta para la página de jsgrid
    Route::get('jsgrid', [
        'uses' => $controll . 'jsgrid',
    ])->name($routexxx.'-jsgridxx');

    // Ruta para la página de calendario
    Route::get('calendar', [
        'uses' => $controll . 'calendar',
    ])->name($routexxx.'-calendar');

    // Ruta para la página de galería
    Route::get('gallery', [
        'uses' => $controll . 'gallery',
    ])->name($routexxx.'-galleryx');

    // Ruta para la página de kanban
    Route::get('kanban', [
        'uses' => $controll . 'kanban',
    ])->name($routexxx.'-kanbanxx');

    // Ruta para la página de correo
    Route::get('mailbox', [
        'uses' => $controll . 'mailbox',
    ])->name($routexxx.'-mailboxx');

    // Ruta para la página de componer correo
    Route::get('compose', [        'uses' => $controll . 'compose',
    ])->name($routexxx.'-composex');

    // Ruta para la página de leer correo
    Route::get('read', [
        'uses' => $controll . 'read',
    ])->name($routexxx.'-readxxxx');

    // Ruta para la página de factura
    Route::get('invoice', [
        'uses' => $controll . 'invoice',
    ])->name($routexxx.'-invoicex');

    // Ruta para la página de impresión de factura
    Route::get('invoice-print', [
        'uses' => $controll . 'invoiceprint',
    ])->name($routexxx.'-invoprin');

    // Ruta para la página de perfil
    Route::get('profile', [
        'uses' => $controll . 'profile',
    ])->name($routexxx.'-profilex');

    // Ruta para la página de comercio electrónico
    Route::get('e-commerce', [
        'uses' => $controll . 'ecommerce',
    ])->name($routexxx.'-ecommerc');

    // Ruta para la página de proyectos
    Route::get('projects', [
        'uses' => $controll . 'projects',
    ])->name($routexxx.'-projects');

    // Ruta para la página de agregar proyecto
    Route::get('project-add', [
        'uses' => $controll . 'projectadd',
    ])->name($routexxx.'-projeadd');

    // Ruta para la página de editar proyecto
    Route::get('project-edit', [
        'uses' => $controll . 'projectedit',
    ])->name($routexxx.'-projedit');

    // Ruta para la página de detalle de proyecto
    Route::get('project-detail', [
        'uses' => $controll . 'projectdetail',
    ])->name($routexxx.'-projdeta');

    // Ruta para la página de contactos
    Route::get('contacts', [
        'uses' => $controll . 'contacts',
    ])->name($routexxx.'-contacts');

    // Ruta para la página de preguntas frecuentes
    Route::get('faq', [
        'uses' => $controll . 'faq',
    ])->name($routexxx.'-faqxxxxx');

    // Ruta para la página de contacto
    Route::get('contact-us', [
        'uses' => $controll . 'contactus',
    ])->name($routexxx.'-contacus');

    // Ruta para la página de inicio de sesión v1
    Route::get('login-v1', [
        'uses' => $controll . 'loginv1',
    ])->name($routexxx.'-loginvun');

    // Ruta para la página de registro v1
    Route::get('register-v1', [
        'uses' => $controll . 'registerv1',
    ])->name($routexxx.'-regisvun');

    // Ruta para la página de olvidó contraseña v1
    Route::get('forgot-password-v1', [
        'uses' => $controll . 'forgotpasswordv1',
    ])->name($routexxx.'-forpavun');

    // Ruta para la página de recuperar contraseña v1
    Route::get('recover-password-v1', [
        'uses' => $controll . 'recoverpasswordv1',
        ])->name($routexxx.'-recpavun');
    
        // Ruta para la página de inicio de sesión v2
        Route::get('login-v2', [
            'uses' => $controll . 'loginv2',
        ])->name($routexxx.'-loginvdo');
    
        // Ruta para la página de registro v2
        Route::get('register-v2', [
            'uses' => $controll . 'registerv2',
        ])->name($routexxx.'-regisvdo');
    
        // Ruta para la página de olvidó contraseña v2
        Route::get('forgot-password-v2', [
            'uses' => $controll . 'forgotpasswordv2',
        ])->name($routexxx.'-forpavdo');
    
        // Ruta para la página de recuperar contraseña v2
        Route::get('recover-password-v2', [
            'uses' => $controll . 'recoverpasswordv2',
        ])->name($routexxx.'-recpavdo');
    
        // Ruta para la página de bloqueo de pantalla
        Route::get('lockscreen', [
            'uses' => $controll . 'lockscreen',
        ])->name($routexxx.'-lockscre');
    
        // Ruta para el menú de usuario heredado
        Route::get('legacy-user-menu', [
            'uses' => $controll . 'legacyUserMenu',
        ])->name($routexxx.'-leuserme');
    
        // Ruta para el menú de idioma
        Route::get('language-menu', [
            'uses' => $controll . 'languageMenu',
        ])->name($routexxx.'-langmenu');
    
        // Ruta para la página de error 404
        Route::get('error-404', [
            'uses' => $controll . 'error404',
        ])->name($routexxx.'-error404');
    
        // Ruta para la página de error 500
        Route::get('error-500', [
            'uses' => $controll . 'error500',
        ])->name($routexxx.'-error500');
    
        // Ruta para la búsqueda simple
        Route::get('simple', [
            'uses' => $controll . 'simpleSearch',
        ])->name($routexxx.'-simplexx');
    
        // Ruta para los resultados de búsqueda simple
        Route::get('simple-results', [
            'uses' => $controll . 'simpleResults',
        ])->name($routexxx.'-simpresu');
    
        // Ruta para la búsqueda mejorada
        Route::get('enhanced', [
            'uses' => $controll . 'enhanced',
        ])->name($routexxx.'-enhanced');
    
        // Ruta para los resultados de búsqueda mejorada
        Route::get('enhanced-results', [
            'uses' => $controll . 'enhancedResults',
        ])->name($routexxx.'-enharesu');
    });
