<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    private $parametr = [
        'clasnavb' => '', // Clase para la barra de navegación (valor inicial: cadena vacía)
        'clasbody' => ' ', // Clase para el cuerpo (valor inicial: espacio en blanco)
        'jstempla' => [], // Plantillas JS (valor inicial: arreglo vacío)
        'csstempl' => [], // Plantillas CSS (valor inicial: arreglo vacío)
        'navbarxx' => 'layouts.adminlte.navbars.navbar', // Ruta de la plantilla de la barra de navegación
        'breadcru' => [ // Configuración para las migas de pan
            'activexx' => '', // Clase activa para el elemento actual de las migas de pan
            'linkxxxx' => [ // Enlaces de las migas de pan
                ['tituloxx' => 'Home', 'activexx' => ''], // Título y clase activa para el enlace de inicio
            ],
        ],
        'template' => 'layouts.adminlte.template', // Ruta de la plantilla general
        'sectionx' => false // Indicador de sección (valor inicial: falso)
    ];
    

    public function index()
    {
        $this->parametr['breadcru']['activexx']='Dasboard V1';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Dasboard V1',"activexx" => "active"];

        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';

        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        //return view('welcome');
        return view('layouts.adminlte.dashboards.d1.dashboard', $this->parametr);
    }
    public function dashboard2()
    {
        $this->parametr['breadcru']['activexx']='Dasboard V2';
        $this->parametr['clasbody'] = 'dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed';
        $this->parametr['clasnavb'] = 'navbar-expand navbar-dark';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Dasboard V2',"activexx" => "active"];

        //return view('welcome');
        return view('layouts.adminlte.dashboards.d2.dashboard', $this->parametr);
    }

    public function dashboard3()
    {
        $this->parametr['breadcru']['activexx']='Dasboard V3';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Dasboard V3',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini ';


        //return view('welcome');
        return view('layouts.adminlte.dashboards.d3.dashboard', $this->parametr);
    }

    public function widget()
    {
        $this->parametr['breadcru']['activexx']='Widgets';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Widgets',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini ';

        //return view('welcome');
        return view('layouts.adminlte.pages.widgets.widget', $this->parametr);
    }

    public function topnav()
    {
        $this->parametr['navbarxx']='layouts.adminlte.navbars.top-nav';
        $this->parametr['breadcru']['activexx']='Top Navigation <small>Example 3.0</small>';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Layout',"activexx" => ""];
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Top Navigation',"activexx" => "active"];
       

        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'layout-top-nav ';
        $this->parametr['template']='layouts.adminlte.pages.layout.top-nav';
        //return view('welcome');
        return view('layouts.adminlte.pages.layout.topnav.top-nav', $this->parametr);
    }
    
    public function topnavsidebar()
    {
        $this->parametr['navbarxx']='layouts.adminlte.navbars.top-nav';
        $this->parametr['breadcru']['activexx']='Top Navigation <small>Example 3.0</small>';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Layout',"activexx" => ""];
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Top Navigation',"activexx" => "active"];
      
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-collapse layout-top-nav ';
        $this->parametr['template']='layouts.adminlte.pages.layout.top-nav-sidebar';
        return view('layouts.adminlte.pages.layout.topnavsidebar.top-nav-sidebar', $this->parametr);
    }
    

    public function boxed()
    {
        $this->parametr['breadcru']['activexx']='Boxed Layout';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Layout',"activexx" => ""];
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Boxed Layout',"activexx" => "active"];

        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';

        $this->parametr['clasbody'] = 'sidebar-mini layout-boxed';
        $this->parametr['template']='layouts.adminlte.pages.layout.boxedxxx';
        return view('layouts.adminlte.pages.layout.boxed.boxed', $this->parametr);
    }
    public function fixedsidebar()
    {
        $this->parametr['breadcru']['activexx']='Fixed Layout';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Layout',"activexx" => ""];
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Fixed Layout',"activexx" => "active"];

        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';

        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        $this->parametr['template']='layouts.adminlte.pages.layout.fixed-sidebar';
        return view('layouts.adminlte.pages.layout.fixedsidebar.fixed-sidebar', $this->parametr);
    }
    public function fixedsidebarcustom()
    {
        $this->parametr['breadcru']['activexx']='Fixed Layout';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Layout',"activexx" => ""];
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Fixed Layout',"activexx" => "active"];

        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';

        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        $this->parametr['template']='layouts.adminlte.pages.layout.fixed-sidebar-custom';
        return view('layouts.adminlte.pages.layout.fixedsidebarcustom.fixed-sidebar-custom', $this->parametr);
    }

    public function chartjs()
    {
        $this->parametr['breadcru']['activexx']='ChartJS';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'ChartJS',"activexx" => "active"];

        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';

        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        //$this->parametr['template']='layouts.adminlte.pages.charts.chartjs';
        return view('layouts.adminlte.pages.charts.chartjs.chartjs', $this->parametr);
    }
    public function flot()
    {
        $this->parametr['breadcru']['activexx']='Flot Charts';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Flot Charts',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.charts.flot.flot', $this->parametr);
    }

    public function inline()
    {
        $this->parametr['breadcru']['activexx']='Inline Charts';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Inline Charts',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.charts.inline.inline', $this->parametr);
    }
    public function uplot()
    {
        $this->parametr['breadcru']['activexx']='uPlot Charts';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'uPlot Charts',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.charts.uplot.uplot', $this->parametr);
    }

    public function general()
    {
        $this->parametr['breadcru']['activexx']='Inline Charts';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Inline Charts',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.ui.general.general', $this->parametr);
    }

    public function iconos()
    {
        $this->parametr['breadcru']['activexx']='Iconos';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Iconos',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.ui.iconos.iconos', $this->parametr);
    }

    public function buttons()
    {
        $this->parametr['breadcru']['activexx']='Buttons';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Buttons',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.ui.buttons.buttons', $this->parametr);
    }

    public function sliders()
    {
        $this->parametr['breadcru']['activexx']='Sliders';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Sliders',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.ui.sliders.sliders', $this->parametr);
    }

    public function modals()
    {
        $this->parametr['breadcru']['activexx']='Modals';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Modals',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.ui.modals.modals', $this->parametr);
    }
    public function navbar()
    {
        $this->parametr['breadcru']['activexx']='Navbar';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Navbar',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.ui.navbar.navbar', $this->parametr);
    }
    
    public function timeline()
    {
        $this->parametr['breadcru']['activexx']='timeline';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'timeline',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.ui.timeline.timeline', $this->parametr);
    }
    public function ribbons()
    {
        $this->parametr['breadcru']['activexx']='Ribbons';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Ribbons',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.ui.ribbons.ribbons', $this->parametr);
    }

    public function formgeneral()
    {
        $this->parametr['breadcru']['activexx']='General';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'General',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.forms.general.general', $this->parametr);
    }

    public function advanced()
    {
        $this->parametr['breadcru']['activexx']='Advanced';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Advanced',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.forms.advanced.advanced', $this->parametr);
    }
    
    public function editors()
    {
        $this->parametr['breadcru']['activexx']='Text Editors';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Text Editors',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.forms.editors.editors', $this->parametr);
    }

    public function validation()
    {
        $this->parametr['breadcru']['activexx']='Validation';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Validation',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.forms.validation.validation', $this->parametr);
    }
    
    public function simple()
    {
        $this->parametr['breadcru']['activexx']='Simple Tables';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Simple Tables',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.tables.simple.simple', $this->parametr);
    }
    
    public function data()
    {
        $this->parametr['breadcru']['activexx']='DataTables';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'DataTables',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.tables.data.data', $this->parametr);
    }

    public function jsgrid()
    {
        $this->parametr['breadcru']['activexx']='jsGrid';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'jsGrid',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.tables.jsgrid.jsgrid', $this->parametr);
    }
    
    public function calendar()
    {
        $this->parametr['breadcru']['activexx']='Calendar';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Calendar',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.calendar.calendar.calendar', $this->parametr);
    }

    public function gallery()
    {
        $this->parametr['breadcru']['activexx']='Gallery';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Gallery',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.gallery.gallery.gallery', $this->parametr);
    }
    
    public function kanban()
    {
        $this->parametr['sectionx']=true;
        $this->parametr['breadcru']['activexx']='Kanban Board';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Kanban Board',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.kanban.kanban.kanban', $this->parametr);
    }
    public function mailbox()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Inbox';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Inbox',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.mailbox.mailbox.mailbox', $this->parametr);
    }

    public function compose()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Compose';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Compose',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.mailbox.mailbox.compose', $this->parametr);
    }

    public function read()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Read';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Read',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.mailbox.mailbox.read', $this->parametr);
    }

    public function invoice()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Invoice';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Invoice',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.invoice.invoice', $this->parametr);
    }
    
    public function invoiceprint()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Invoice';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Invoice',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.invoice.invoice-print', $this->parametr);
    }

    public function profile()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='User Profile';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'User Profile',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.profile.profile', $this->parametr);
    }
    

    public function ecommerce()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='E-commerce';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'E-commerce',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.e-commerce.e-commerce', $this->parametr);
    }

    public function projects()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Projects';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Projects',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.projects.projects', $this->parametr);
    }
    public function projectadd()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Project Add';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Project Add',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.project-add.project-add', $this->parametr);
    }

    public function projectedit()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Project Edit';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Project Edit',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.project-edit.project-edit', $this->parametr);
    }
    
    public function projectdetail()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Project Detail';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Project Detail',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.project-detail.project-detail', $this->parametr);
    }

    public function contacts()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Contacts';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Contacts',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.contacts.contacts', $this->parametr);
    }
    
    public function faq()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='FAQ';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'FAQ',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.faq.faq', $this->parametr);
    }
    
    public function contactus()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Contact us';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Contact us',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.contact-us.contact-us', $this->parametr);
    }

    public function loginv1()
    {
        return view('layouts.adminlte.pages.examples.login-register-v1.login', $this->parametr);
    }

    public function registerv1()
    {
        return view('layouts.adminlte.pages.examples.login-register-v1.register', $this->parametr);
    }

    public function forgotpasswordv1()
    {
        return view('layouts.adminlte.pages.examples.login-register-v1.forgot-password', $this->parametr);
    }
    
    public function recoverpasswordv1()
    {
        return view('layouts.adminlte.pages.examples.login-register-v1.recover-password', $this->parametr);
    }


    public function loginv2()
    {
        return view('layouts.adminlte.pages.examples.login-register-v2.login', $this->parametr);
    }

    public function registerv2()
    {
        return view('layouts.adminlte.pages.examples.login-register-v2.register', $this->parametr);
    }

    public function forgotpasswordv2()
    {
        return view('layouts.adminlte.pages.examples.login-register-v2.forgot-password', $this->parametr);
    }
    
    public function recoverpasswordv2()
    {
        return view('layouts.adminlte.pages.examples.login-register-v2.recover-password', $this->parametr);
    }
    public function lockscreen()
    {
        return view('layouts.adminlte.pages.examples.lockscreen.lockscreen', $this->parametr);
    }
    

    public function legacyUserMenu()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Legacy User Menu';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Legacy User Menu',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.legacy-user-menu.legacy-user-menu', $this->parametr);
    }

    public function languageMenu()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Language Menu';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Language Menu',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.language-menu.language-menu', $this->parametr);
    }

    public function error404()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Error 404';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Error 404',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.404.404', $this->parametr);
    }
    
    public function error500()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Error 500';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Error 500',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.500.500', $this->parametr);
    }


    public function simpleSearch()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Simple Search';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Simple Search',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.searchs.simple', $this->parametr);
    }

    public function simpleResults()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Simple Results';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Simple Results',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.searchs.simple-results', $this->parametr);
    }


    public function enhanced()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Enhanced Search';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Enhanced Search',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.searchs.enhanced', $this->parametr);
    }

    public function enhancedResults()
    {
        $this->parametr['sectionx']=false;
        $this->parametr['breadcru']['activexx']='Enhanced Results';
        $this->parametr['breadcru']['linkxxxx'][]=['tituloxx'=>'Enhanced Results',"activexx" => "active"];
        $this->parametr['clasnavb'] = 'navbar-expand navbar-white navbar-light';
        $this->parametr['clasbody'] = 'sidebar-mini layout-fixed';
        return view('layouts.adminlte.pages.examples.searchs.enhanced-results', $this->parametr);
    }


    
}
