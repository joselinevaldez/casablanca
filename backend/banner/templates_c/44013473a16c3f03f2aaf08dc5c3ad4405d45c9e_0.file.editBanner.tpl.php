<?php
/* Smarty version 3.1.33, created on 2022-07-01 18:57:51
  from 'C:\xampp\htdocs\casablanca\backend\banner\templates\editBanner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62bf278f831bd5_67957652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44013473a16c3f03f2aaf08dc5c3ad4405d45c9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\banner\\templates\\editBanner.tpl',
      1 => 1656694663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bf278f831bd5_67957652 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/banner" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Banner / Editar banner</h5>              
    </div>
   
</div>


<br>

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                    <form action="/casablanca/saveEditBanner" method="post" name='category' onsubmit="return editBanner();" enctype="multipart/form-data">
                        <div class="text-center">
                            <b >Información general</b>
                        </div>
                        <hr>
                         <div class="img" style="height: 300px;background-image: url('../casablanca/backend/banner/files/<?php echo $_smarty_tpl->tpl_vars['data']->value['imagen_path'];?>
');background-size: 100%;background-repeat: no-repeat, repeat;background-position: center;"></div>
                         <br>
                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="hidden" name="configuration_banner_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['configuration_banner_id'];?>
">   
                            <input type="hidden" name="old_file" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['imagen_path'];?>
">   
                            <input type="file" name="file" class="form-control-file" >   
                            <small>Seleciona una imagen nueva si deseas actualizar la imagen actual</small>
                        </div>
                        <div class="form-group">
                            <label>Título</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" >
                        </div>
                        <div class="form-group">
                            <label>Subtítulo</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['subtitle'];?>
" >
                        </div>
                        
                        <input type='hidden' name='save'>
                        <small>Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/banner"><i class="fas fa-close"></i> Cancelar</a>
                        <button type="submit" id="btn-save" name="saveBanner" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br style="clear:both"><br>

<?php echo '<script'; ?>
>
  function editBanner(){
    
      $('#btn-save').prop('disabled',true);
      $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
    
      //enviando post
     return true;
  }
<?php echo '</script'; ?>
>
<?php }
}
