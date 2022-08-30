<?php
/* Smarty version 3.1.33, created on 2022-08-03 23:35:16
  from 'C:\xampp\htdocs\casablanca\backend\paquetes\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62eaea1442fea3_23771527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7ac2315b1ac6c140505c58b29d80c22ee08f429' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\paquetes\\templates\\index.tpl',
      1 => 1659562508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62eaea1442fea3_23771527 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-6">
              <h5 class="padding-left" >Paquetes</h5>              
        </div>
        <div class="col-lg-6">
           <a class="btn btn-warning float-right margin-right " href="/casablanca/newPaquete"><i class="fas fa-plus"></i> Nuevo Paquete</a>
        </div>
    </div>


<br>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Listado de paquetes</h6>
        </div>
        <div class="card-body">
            <?php if (is_array($_smarty_tpl->tpl_vars['list']->value) && count($_smarty_tpl->tpl_vars['list']->value) > 0) {?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Imagen</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio venta</th>
                                <th>Estatus</th>
                                <th>Fecha de creación</th>
                                <th>Última modificación</th>
                                <th class='text-center' style="min-width:70px"><i class='fa fa-cog'></i></th>
                            </tr>
                        </thead>

                        <tbody>
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'paquete', false, NULL, 'paquetes', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['paquete']->value) {
?>
                             <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['paquete']->value['paquete_id'];?>
</td>
                                 <td class='text-center'> <img class="rounded-circle" style="width: 50px;height: 50px" alt="100x100" src="../casablanca/backend/paquetes/files/<?php if ($_smarty_tpl->tpl_vars['paquete']->value['imagen_path'] != '') {
echo $_smarty_tpl->tpl_vars['paquete']->value['imagen_path'];
} else { ?>no-image.png<?php }?>"
                                         data-holder-rendered="true"></td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['paquete']->value['code'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['paquete']->value['name'];?>
</td>
                               
                                 <td>$<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['paquete']->value['price']);?>
</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['paquete']->value['is_active'] == 0) {?><span class='badge badge-warning'>Inactivo</span>
                                     <?php } elseif ($_smarty_tpl->tpl_vars['paquete']->value['is_active'] == 1) {?><span class='badge badge-success'>Activo</span>
                                     <?php } elseif ($_smarty_tpl->tpl_vars['paquete']->value['is_active'] == 2) {?><span class='badge badge-danger'>Eliminado</span>
                                     <?php }?></td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['paquete']->value['created_at'];?>
</td>                            
                                 <td><?php echo $_smarty_tpl->tpl_vars['paquete']->value['updated_at'];?>
</td>                            

                                 <td style="min-width:70px">
                                    <a class="btn btn-sm btn-danger btn-config" onclick="confirmDelete('<?php echo $_smarty_tpl->tpl_vars['paquete']->value['paquete_id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['paquete']->value['name'];?>
');" title='Eliminar' ><i class="fas fa-trash"></i></a>
                                    <a class="btn btn-sm btn-dark btn-config" href='/casablanca/paquete-edit/<?php echo $_smarty_tpl->tpl_vars['paquete']->value['paquete_id'];?>
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
                        <small>Para agregar un nuevo paquete da click en el botón (+) de la esquina superior derecha</small>
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
        <form action="/casablanca/deletePaquete" method="POST" onsubmit="return deletePaquete();">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar paquete</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="userId" name="id">
                ¿Estas seguro de que quieres eliminar el paquete "<b id="userName"></b>" ?
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
    
    function deletePaquete(){
        $('#btn-delete').prop('disabled',true);
        $('#btn-delete').html('<i class="fas fa-spin fa-spinner"></i> Eliminando');
    }
<?php echo '</script'; ?>
><?php }
}
