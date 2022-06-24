<?php
/* Smarty version 3.1.33, created on 2022-06-08 01:26:30
  from 'C:\xampp\htdocs\casablanca\backend\templates\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_629fdea60625c9_60277163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28b01247633d0f7513ee2108fcf63f7e6ab088fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\templates\\base.tpl',
      1 => 1654204683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629fdea60625c9_60277163 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="http://localhost:8086/casablanca/" /> 
    <title>Casa Blanca</title>

    <!-- Custom fonts for this template-->
    <link href="public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="public/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="public/assets/css/helper.css" rel="stylesheet">
    <link href="public/css/style_backend.css" rel="stylesheet">
    <link href="public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="public/assets/css/toastr/toastr.min.css" rel="stylesheet">
    <link href="public/assets/css/sweetalert/sweetalert.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['sidebar']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['header']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                    <!-- CONTENIDO DINAMICO -->
                    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['section']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <!-- -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <br style="clear:both"><br>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Admin Casa Blanca 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cerrar sesión</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">¿Estas seguro de que quieres cerrar sesión?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/casablanca/logout">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php echo '<script'; ?>
 src="public/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

    <!-- Core plugin JavaScript-->
    <?php echo '<script'; ?>
 src="public/vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>

    <!-- Custom scripts for all pages-->
    <?php echo '<script'; ?>
 src="public/js/sb-admin-2.min.js"><?php echo '</script'; ?>
>

    <!-- Page level plugins dataTable -->
    <?php echo '<script'; ?>
 src="public/vendor/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/vendor/datatables/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>

    <!-- Page level custom scripts -->
    <?php echo '<script'; ?>
 src="public/js/demo/datatables-demo.js"><?php echo '</script'; ?>
>

    
    <!-- TOAST -->
    <?php echo '<script'; ?>
 src="public/js/toastr/toastr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/toastr/toastr.init.js"><?php echo '</script'; ?>
>
    <!--SWEETALERT-->
    <?php echo '<script'; ?>
 src="public/js/sweetalert/sweetalert.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
     <?php if ($_smarty_tpl->tpl_vars['errors']->value != '') {?>
         <?php if ($_smarty_tpl->tpl_vars['errors']->value['type'] == 'error') {?>
             dangerAlert('<?php echo $_smarty_tpl->tpl_vars['errors']->value['msg'];?>
');

         <?php } elseif ($_smarty_tpl->tpl_vars['errors']->value['type'] == 'success') {?>
             successAlert('<?php echo $_smarty_tpl->tpl_vars['errors']->value['msg'];?>
');
         <?php }?>
     <?php }?>
      
 <?php echo '</script'; ?>
>

</body>

</html><?php }
}
