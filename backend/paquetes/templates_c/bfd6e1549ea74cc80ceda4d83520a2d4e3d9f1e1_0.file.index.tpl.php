<?php
/* Smarty version 3.1.33, created on 2022-07-06 01:52:38
  from 'C:\xampp\htdocs\casablanca\backend\category\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62c4cec60a7797_37268888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfd6e1549ea74cc80ceda4d83520a2d4e3d9f1e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\category\\templates\\index.tpl',
      1 => 1656524216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c4cec60a7797_37268888 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-6">
              <h5 class="padding-left" >Categorías</h5>              
        </div>
        <div class="col-lg-6">
           <a class="btn btn-warning float-right margin-right " href="/casablanca/newCategory"><i class="fas fa-plus"></i> Nueva Categoría</a>
        </div>
    </div>


<br>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Listado de categorías</h6>
        </div>
        <div class="card-body">
            <?php if (is_array($_smarty_tpl->tpl_vars['list']->value) && count($_smarty_tpl->tpl_vars['list']->value) > 0) {?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Estatus</th>
                                <th>Fecha de creación</th>
                                <th>Última modificación</th>
                                <th class='text-center' style="min-width:70px"><i class='fa fa-cog'></i></th>
                            </tr>
                        </thead>

                        <tbody>
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'category', false, NULL, 'categories', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                             <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
</td>
                                 <td class='text-center'> <img class="rounded-circle" style="width: 50px;height: 50px" alt="100x100" src="../casablanca/backend/category/files/<?php if ($_smarty_tpl->tpl_vars['category']->value['imagen_path'] != '') {
echo $_smarty_tpl->tpl_vars['category']->value['imagen_path'];
} else { ?>no-image.png<?php }?>"
                                         data-holder-rendered="true"></td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['category']->value['is_active'] == 0) {?><span class='badge badge-warning'>Inactivo</span>
                                     <?php } elseif ($_smarty_tpl->tpl_vars['category']->value['is_active'] == 1) {?><span class='badge badge-success'>Activo</span>
                                     <?php } elseif ($_smarty_tpl->tpl_vars['category']->value['is_active'] == 2) {?><span class='badge badge-danger'>Eliminado</span>
                                     <?php }?></td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['category']->value['created_at'];?>
</td>                            
                                 <td><?php echo $_smarty_tpl->tpl_vars['category']->value['updated_at'];?>
</td>                            

                                 <td style="min-width:70px">
                                    <a class="btn btn-sm btn-danger btn-config" onclick="confirmDelete('<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
');" title='Eliminar' ><i class="fas fa-trash"></i></a>
                                    <a class="btn btn-sm btn-dark btn-config" href='/casablanca/category-edit/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
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
                        <small>Para agregar una nueva categoría da click en el botón (+) de la esquina superior derecha</small>
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
        <form action="/casablanca/deleteCategory" method="POST" onsubmit="return deleteCategory();">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar categoría</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="userId" name="id">
                ¿Estas seguro de que quieres eliminar la categoría "<b id="userName"></b>" ?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btn-delete">Eliminar</button>
            </div>
        </div>
        </form>
    </div>
</div>

<?php echo '<script'; ?>
>
    function confirmDelete(id, name){       
        $('#userId').val(id);
        $('#userName').html(name);
        $('#deleteModal').modal('show');
    }
    
    function deleteCategory(){
        $('#btn-delete').prop('disabled',true);
        $('#btn-delete').html('<i class="fas fa-spin fa-spinner"></i> Eliminando');
    }
<?php echo '</script'; ?>
><?php }
}
