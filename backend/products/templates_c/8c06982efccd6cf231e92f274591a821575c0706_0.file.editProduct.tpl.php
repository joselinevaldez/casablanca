<?php
/* Smarty version 3.1.33, created on 2022-08-08 19:33:31
  from 'C:\xampp\htdocs\casablanca\backend\products\templates\editProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62f148ebd98ec8_98948354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c06982efccd6cf231e92f274591a821575c0706' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\products\\templates\\editProduct.tpl',
      1 => 1659980009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f148ebd98ec8_98948354 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/products" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Productos / Editar productos</h5>              
    </div>
   
</div>


<br>
<form action="/casablanca/saveEditProduct" name='edit' method="post" onsubmit="return saveEdit();" enctype="multipart/form-data">
 
<div class="row justify-content-center">
                 
    <div class="col-lg-3">
           <div class="card">
           
               <div class="card-body text-center">
                    <div class="text-center">
                        <b><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</b>
                    </div>
                    <hr>
                    
                    <img class="rounded-circle" style="width: 250px;height: 250px" alt="100x100" src="../casablanca/backend/products/files/<?php if ($_smarty_tpl->tpl_vars['data']->value['image_path'] != '') {
echo $_smarty_tpl->tpl_vars['data']->value['image_path'];
} else { ?>no-image.png<?php }?>"
                        data-holder-rendered="true">
                    <br><br>
                    <input type='file' name='file' class='form-control-file'>
                    <input type="hidden" name="old_file" value='<?php echo $_smarty_tpl->tpl_vars['data']->value['image_path'];?>
' class="form-control" >
                    <input type="hidden" name="product_id" value='<?php echo $_smarty_tpl->tpl_vars['data']->value['product_id'];?>
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
                            <input type="text" class="form-control" id="name" name="name" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
                        </div>
                       
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Costo</label>
                            <input type="text" class="form-control decimales" id="purchase_price" name="purchase_price" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['purchase_price'];?>
">
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Precio de venta</label>
                            <input type="text" class="form-control decimales" id="sale_price" name="sale_price" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sale_price'];?>
">
                        </div>
                         <div class="form-group">
                            <label><span class="text-danger">*</span> Categoría</label>
                            <select class="form-control custom-select" required id="category" name="category">
                                <option value="">Seleccione...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, NULL, 'categories', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                     <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['category_id'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Unidad</label>
                            <select class="form-control custom-select" required id="unit" name="unit">
                                <option value="">Seleccione...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['units']->value, 'unit', false, NULL, 'units', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->value) {
?>
                                     <option value="<?php echo $_smarty_tpl->tpl_vars['unit']->value['measurement_unit_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['measurement_unit_id'] == $_smarty_tpl->tpl_vars['unit']->value['measurement_unit_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['unit']->value['name'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </select>
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
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/products"><i class="fas fa-close"></i> Cancelar</a>
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
