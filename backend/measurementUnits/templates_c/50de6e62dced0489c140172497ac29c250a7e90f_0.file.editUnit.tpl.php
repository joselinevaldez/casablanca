<?php
/* Smarty version 3.1.33, created on 2022-06-24 16:05:18
  from 'C:\xampp\htdocs\casablanca\backend\measurementUnits\templates\editUnit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62b5c49e18e517_86509708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50de6e62dced0489c140172497ac29c250a7e90f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\measurementUnits\\templates\\editUnit.tpl',
      1 => 1656079455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b5c49e18e517_86509708 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/measurementUnits" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Unidades de medida / Editar unidad de medida</h5>              
    </div>
   
</div>


<br>
<form action="/casablanca/saveEditUnit" name='edit' method="post" onsubmit="return saveEdit();" enctype="multipart/form-data">
 
<div class="row justify-content-center">                 
    
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                        <div class="text-center">
                            <b >Información general</b>
                        </div>
                        <hr>
                        <div class="form-group">
                            <input type='hidden' name='measurement_unit_id' value='<?php echo $_smarty_tpl->tpl_vars['data']->value['measurement_unit_id'];?>
'>
                            <label><span class="text-danger">*</span> Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" required>
                        </div>
                        
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Estatus</label>
                            <select class="form-control custom-select" required id="status" name="status" required>
                                <option value="">Seleccione...</option>
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_active'] == 1) {?>selected<?php }?>>Activo</option>
                                <option value="0"  <?php if ($_smarty_tpl->tpl_vars['data']->value['is_active'] == 0) {?>selected<?php }?>>Inactivo</option>
                            </select>
                        </div>
                       
                        <small>Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/measurementUnits"><i class="fas fa-close"></i> Cancelar</a>
                        <button type="submit" id="btn-save" name="save" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                        
                    
                </div>
            </div>
        </div>
    </div>

</div>
</form>
<br style="clear:both"><br>


    <?php echo '<script'; ?>
>
 
    function saveEdit(){
     
        $('#btn-save').prop('disabled',true);
        $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
       

    }
  <?php echo '</script'; ?>
>
<?php }
}
