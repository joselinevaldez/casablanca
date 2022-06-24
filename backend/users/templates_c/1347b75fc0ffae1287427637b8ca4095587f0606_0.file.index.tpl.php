<?php
/* Smarty version 3.1.33, created on 2022-05-18 15:58:07
  from 'C:\xampp\htdocs\testjoseline\backend\users\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6284fb6f954ec6_15226184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1347b75fc0ffae1287427637b8ca4095587f0606' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testjoseline\\backend\\users\\templates\\index.tpl',
      1 => 1652882274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6284fb6f954ec6_15226184 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-6">
              <h5 class="padding-left" >Usuarios</h5>              
        </div>
        <div class="col-lg-6">
           <a class="btn btn-warning float-right margin-right " href="/testjoseline/newUser"><i class="fas fa-plus"></i> Nuevo Usuario</a>
        </div>
    </div>


<br>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Listado de usuarios</h6>
        </div>
        <div class="card-body">
            <?php if (count($_smarty_tpl->tpl_vars['list']->value) > 0) {?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Imagen</th>
                                <th>Nombre Completo</th>
                                <th>Email</th>
                                <th>Usuario</th>
                                <th>Rol</th>
                                <th>Fecha de creación</th>
                                <th>Última modificación</th>
                                <th class='text-center'><i class='fa fa-cog'></i></th>
                            </tr>
                        </thead>

                        <tbody>
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'user', false, NULL, 'users', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                             <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                                 <td class='text-center'> <img class="rounded-circle" style="width: 50px;height: 50px" alt="100x100" src="../testjoseline/backend/users/files/<?php if ($_smarty_tpl->tpl_vars['user']->value['imagen_path'] != '') {
echo $_smarty_tpl->tpl_vars['user']->value['imagen_path'];
} else { ?>default.png<?php }?>"
                                         data-holder-rendered="true"></td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['user']->value['role'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['user']->value['created_at'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['user']->value['updated_at'];?>
</td>                            

                                 <td>
                                    <a class="btn btn-sm btn-danger btn-config sweet-confirm" title='Eliminar' ><i class="fas fa-trash"></i></a>
                                    <a class="btn btn-sm btn-dark btn-config" href='/testjoseline/user-edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
' title='Editar'><i class="fas fa-edit"></i></a>
                                  </td>
                             </tr>
                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <div class="row justify-content-lg-center">
                    <div class="col-lg-12 text-center p-65">
                        <h6><i class="fas fa-book-open"></i></h6>
                        <h6>No se encontraron registro</h6>
                        <small>Para agregar un nuevo usuario da click en el botón (+) de la esquina superior derecha</small>
                    </div>
                </div>
            <?php }?>
            
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- Logout Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">¿Estas seguro de que quieres eliminar el usuario?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="/testjoseline/logout">Eliminar</a>
            </div>
        </div>
    </div>
</div><?php }
}
