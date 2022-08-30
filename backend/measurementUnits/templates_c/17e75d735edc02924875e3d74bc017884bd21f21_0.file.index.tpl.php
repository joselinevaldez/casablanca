<?php
/* Smarty version 3.1.33, created on 2022-07-06 01:52:43
  from 'C:\xampp\htdocs\casablanca\backend\measurementUnits\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62c4cecb2ad7c7_65199099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17e75d735edc02924875e3d74bc017884bd21f21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\measurementUnits\\templates\\index.tpl',
      1 => 1656524238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c4cecb2ad7c7_65199099 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-6">
              <h5 class="padding-left" >Unidades de medida</h5>              
        </div>
        <div class="col-lg-6">
           <a class="btn btn-warning float-right margin-right " href="/casablanca/newUnit"><i class="fas fa-plus"></i> Nueva Unidad de medida</a>
        </div>
    </div>


<br>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Listado de unidades de medida</h6>
        </div>
        <div class="card-body">
            <?php if (is_array($_smarty_tpl->tpl_vars['list']->value) && count($_smarty_tpl->tpl_vars['list']->value) > 0) {?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Estatus</th>
                                <th>Fecha de creación</th>
                                <th>Última modificación</th>
                                <th class='text-center' style="min-width:70px"><i class='fa fa-cog'></i></th>
                            </tr>
                        </thead>

                        <tbody>
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'unit', false, NULL, 'units', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->value) {
?>
                             <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['unit']->value['measurement_unit_id'];?>
</td>                                
                                 <td><?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['unit']->value['is_active'] == 0) {?><span class='badge badge-warning'>Inactivo</span>
                                     <?php } elseif ($_smarty_tpl->tpl_vars['unit']->value['is_active'] == 1) {?><span class='badge badge-success'>Activo</span>
                                     <?php } elseif ($_smarty_tpl->tpl_vars['unit']->value['is_active'] == 2) {?><span class='badge badge-danger'>Eliminado</span>
                                     <?php }?></td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['unit']->value['created_at'];?>
</td>                            
                                 <td><?php echo $_smarty_tpl->tpl_vars['unit']->value['updated_at'];?>
</td>                            

                                 <td style="min-width:70px">
                                    <a class="btn btn-sm btn-danger btn-config" onclick="confirmDelete('<?php echo $_smarty_tpl->tpl_vars['unit']->value['measurement_unit_id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
');" title='Eliminar' ><i class="fas fa-trash"></i></a>
                                    <a class="btn btn-sm btn-dark btn-config" href='/casablanca/unit-edit/<?php echo $_smarty_tpl->tpl_vars['unit']->value['measurement_unit_id'];?>
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
                        <small>Para agregar una nueva unidad de medida da click en el botón (+) de la esquina superior derecha</small>
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
        <form action="/casablanca/deleteUnit" method="POST" onsubmit="return deleteUnit();">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar unidad de medida</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="userId" name="id">
                ¿Estas seguro de que quieres eliminar la unidad de medida "<b id="userName"></b>" ?
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
    
    function deleteUnit(){
        $('#btn-delete').prop('disabled',true);
        $('#btn-delete').html('<i class="fas fa-spin fa-spinner"></i> Eliminando');
    }
<?php echo '</script'; ?>
><?php }
}
