<?php
/* Smarty version 3.1.33, created on 2022-08-01 16:50:39
  from 'C:\xampp\htdocs\casablanca\backend\combo\templates\editCombo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62e7e83fe2cd45_73678123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d8489fd093a69d9a3eaeb4523339c55aceb8140' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\combo\\templates\\editCombo.tpl',
      1 => 1659365425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e7e83fe2cd45_73678123 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/combos" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Combos / Editar combo</h5>              
    </div>
   
</div>


<br>
<form action="/casablanca/saveEditCombo" name='edit' method="post" onsubmit="return saveEdit();" enctype="multipart/form-data">
 
<div class="row justify-content-center">
                 
    <div class="col-lg-3">
           <div class="card">
           
               <div class="card-body text-center">
                    <div class="text-center">
                        <b><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</b>
                    </div>
                    <hr>
                    
                    <img class="rounded-circle" style="width: 250px;height: 250px" alt="100x100" src="../casablanca/backend/combo/files/<?php if ($_smarty_tpl->tpl_vars['data']->value['imagen_path'] != '') {
echo $_smarty_tpl->tpl_vars['data']->value['imagen_path'];
} else { ?>no-image.png<?php }?>"
                        data-holder-rendered="true">
                    <br><br>
                    <input type='file' name='file' class='form-control-file'>
                    <input type="hidden" name="old_file" value='<?php echo $_smarty_tpl->tpl_vars['data']->value['imagen_path'];?>
' class="form-control" >
                    <input type="hidden" name="combo_id" value='<?php echo $_smarty_tpl->tpl_vars['data']->value['combo_id'];?>
' class="form-control" >
                    <small>Seleccione una imagen si desea actualizarla</small>
               </div>
           </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                        <div class="text-center">
                            <b >Información general</b>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Código</label>
                            <input type="text" class="form-control" id="code" name="code" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
">
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
                        </div>
                       
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Precio de venta</label>
                            <input type="text" class="form-control decimales" id="price" name="price" required  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
">
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
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/combos"><i class="fas fa-close"></i> Cancelar</a>
                        <button type="submit" id="btn-save" name="save" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                        
                    
                </div>
            </div>
        </div>
    </div>

</div>
</form>
<br style="clear:both"><br>

    <?php echo '<script'; ?>
 src="public/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    
 
    function saveEdit(){
     
        $('#btn-save').prop('disabled',true);
        $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
       

    }

  
    $('.decimales').on('change', function () {
      this.value = maskDinero(unmaskDinero(this.value));
    });

    function unmaskDinero(numeroString) {
        return +(numeroString.replace(/[^0-9.-]+/g,""));
    }
    function maskDinero(numeroInt) {
        return parseFloat(numeroInt).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
  
<?php echo '</script'; ?>
>

<?php }
}
