<?php
/* Smarty version 3.1.33, created on 2022-07-06 01:52:43
  from 'C:\xampp\htdocs\casablanca\backend\templates\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62c4cecb006596_74362334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ffcde31796e5fafcfc2d8b1c67f7f0e69f30b1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\templates\\sidebar.tpl',
      1 => 1656524915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c4cecb006596_74362334 (Smarty_Internal_Template $_smarty_tpl) {
?> <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" style='padding:50px' href="index.html">
            <img src='public/images/logo_dark.jpg' style='height: 100px;width: 100px;'>
        </a>
        
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active" >
            <a class="nav-link" href="/casablanca/home" style='padding-top: 0px;padding-bottom: 10px;'>
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Inicio</span></a>
        </li>
         <hr class="sidebar-divider">
        <li class="nav-item " >
            <a class="nav-link" href="/casablanca/customers" style='padding-top: 0px;padding-bottom: 10px;'>
                <i class="fas fa-fw fa-users"></i>
                <span>Clientes</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed active" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo" style='padding-top: 0px;padding-bottom: 10px;'>
                <i class="fas fa-fw fa-folder"></i>
                <span>Cátalogos</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="text-white py-2 collapse-inner rounded">                  
                    <a class="collapse-item text-white" href="/casablanca/category">Categorías</a>
                    <a class="collapse-item text-white" href="/casablanca/measurementUnits">Unidades de medida</a>
                </div>
            </div>
        </li>
         <hr class="sidebar-divider">
        <li class="nav-item " >
            <a class="nav-link" href="/casablanca/products" style='padding-top: 0px;padding-bottom: 10px;'>
                <i class="fas fa-fw fa-table"></i>
                <span>Productos</span></a>
        </li>
         <hr class="sidebar-divider">
      
          <li class="nav-item">
            <a class="nav-link collapsed active" href="#" data-toggle="collapse" data-target="#collapseConf"
                aria-expanded="true" aria-controls="collapseConf" style='padding-top: 0px;padding-bottom: 10px;'>
                <i class="fas fa-fw fa-cogs"></i>
               <span>Configuraciones</span></a>
            </a>
            <div id="collapseConf" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="text-white py-2 collapse-inner rounded">                  
                    <a class="collapse-item text-white" href="/casablanca/settings">General</a>
                    <a class="collapse-item text-white" href="/casablanca/banner">Banner</a>
                </div>
            </div>
        </li>
         <hr class="sidebar-divider">
        <li class="nav-item " >
            <a class="nav-link" href="/casablanca/reports" style='padding-top: 0px;padding-bottom: 10px;'>
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Reportes</span></a>
        </li>
         <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSecurity"
                aria-expanded="true" aria-controls="collapseSecurity" style='padding-top: 0px;padding-bottom: 10px;'>
                <i class="fas fa-fw fa-lock"></i>
                <span>Seguridad</span>
            </a>
            <div id="collapseSecurity" class="collapse" aria-labelledby="headingSecurity" data-parent="#accordionSidebar">
                <div class="text-white py-2 collapse-inner rounded">                  
                    <a class="collapse-item text-white" href="/casablanca/users">Usuarios</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

       
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="sidebar-card d-none d-lg-flex">
            
            <p class="text-center mb-2"><strong>Admin Casa Blanca</strong> V 0.1</p>
          
        </div>

    </ul><?php }
}
