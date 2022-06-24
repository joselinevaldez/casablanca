<?php
/* Smarty version 3.1.33, created on 2022-06-24 16:01:40
  from 'C:\xampp\htdocs\casablanca\backend\category\templates\newCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62b5c3c465c223_18977697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7657f2b09ebf590d6625fad4a501fd636ec360d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\category\\templates\\newCategory.tpl',
      1 => 1656079298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b5c3c465c223_18977697 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/category" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Categorías / Nueva categoría</h5>              
    </div>
   
</div>


<br>

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                    <form action="/casablanca/newCategory" method="post" name='category' onsubmit="return newCategory();" enctype="multipart/form-data">
                        <div class="text-center">
                            <b >Información general</b>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Imagen</label>
                            <input type="file" name="file" class="form-control-file" required>
                          
                        </div>
                        
                        <small>Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/category"><i class="fas fa-close"></i> Cancelar</a>
                        <button type="submit" id="btn-save" name="saveCategory" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br style="clear:both"><br>

<?php echo '<script'; ?>
>
  function newCategory(){
    
      $('#btn-save').prop('disabled',true);
      $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
    
      //enviando post
     return true;
  }
<?php echo '</script'; ?>
>
<?php }
}
