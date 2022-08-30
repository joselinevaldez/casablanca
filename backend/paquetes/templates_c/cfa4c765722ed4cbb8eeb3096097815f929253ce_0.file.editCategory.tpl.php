<?php
/* Smarty version 3.1.33, created on 2022-06-24 00:56:10
  from 'C:\xampp\htdocs\casablanca\backend\category\templates\editCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62b4ef8a62d342_78900829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfa4c765722ed4cbb8eeb3096097815f929253ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\category\\templates\\editCategory.tpl',
      1 => 1656024967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b4ef8a62d342_78900829 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/category" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Categorías / Editar categoría</h5>              
    </div>
   
</div>


<br>
<form action="/casablanca/saveEditCategory" name='edit' method="post" onsubmit="return saveEdit();" enctype="multipart/form-data">
 
<div class="row justify-content-center">
                 
    <div class="col-lg-3">
           <div class="card">
           
               <div class="card-body text-center">
                    <div class="text-center">
                        <b><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</b>
                    </div>
                    <hr>
                    
                    <img class="rounded-circle" style="width: 250px;height: 250px" alt="100x100" src="../casablanca/backend/category/files/<?php if ($_smarty_tpl->tpl_vars['data']->value['imagen_path'] != '') {
echo $_smarty_tpl->tpl_vars['data']->value['imagen_path'];
} else { ?>no-image.png<?php }?>"
                        data-holder-rendered="true">
                    <br><br>
                    <input type='file' name='file' class='form-control-file'>
                    <input type="hidden" name="old_file" value='<?php echo $_smarty_tpl->tpl_vars['data']->value['imagen_path'];?>
' class="form-control" >
                    <input type="hidden" name="category_id" value='<?php echo $_smarty_tpl->tpl_vars['data']->value['category_id'];?>
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
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/category"><i class="fas fa-close"></i> Cancelar</a>
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
