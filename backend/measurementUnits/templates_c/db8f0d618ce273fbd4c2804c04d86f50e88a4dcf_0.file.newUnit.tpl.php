<?php
/* Smarty version 3.1.33, created on 2022-06-24 01:11:42
  from 'C:\xampp\htdocs\casablanca\backend\measurementUnits\templates\newUnit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62b4f32e7aef41_50782535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db8f0d618ce273fbd4c2804c04d86f50e88a4dcf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\measurementUnits\\templates\\newUnit.tpl',
      1 => 1656025844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b4f32e7aef41_50782535 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/measurementUnits" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Unidades de medida / Nueva unidad de medida</h5>              
    </div>
   
</div>


<br>

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                    <form action="/casablanca/newUnit" method="post" name='category' onsubmit="return newUnit();" enctype="multipart/form-data">
                        <div class="text-center">
                            <b >Información general</b>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                      
                        
                        <small>Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/measurementUnits"><i class="fas fa-close"></i> Cancelar</a>
                        <button type="submit" id="btn-save" name="saveUnit" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br style="clear:both"><br>

<?php echo '<script'; ?>
>
  function newUnit(){
    
      $('#btn-save').prop('disabled',true);
      $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
    
      //enviando post
     return true;
  }
<?php echo '</script'; ?>
>
<?php }
}
