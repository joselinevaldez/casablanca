<?php
/* Smarty version 3.1.33, created on 2022-05-18 00:42:18
  from 'C:\xampp\htdocs\testjoseline\backend\users\templates\editUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_628424ca1ee667_27691760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '080d02b9d406d136533bb282e9ea5229dc13732b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\testjoseline\\backend\\users\\templates\\editUser.tpl',
      1 => 1652827221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628424ca1ee667_27691760 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6">
        <a href="/testjoseline/users" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Usuarios / Editar usuario</h5>              
    </div>
   
</div>


<br>
<form action="/testjoseline/saveEditUser" name='edit' method="post" onsubmit="return saveEdit();" enctype="multipart/form-data">
 
<div class="row justify-content-center">
                 
    <div class="col-lg-3">
           <div class="card">
           
               <div class="card-body text-center">
                    <div class="text-center">
                        <b><?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
</b>
                    </div>
                    <hr>
                    
                    <img class="rounded-circle" style="width: 250px;height: 250px" alt="100x100" src="../testjoseline/backend/users/files/<?php if ($_smarty_tpl->tpl_vars['data']->value['imagen_path'] != '') {
echo $_smarty_tpl->tpl_vars['data']->value['imagen_path'];
} else { ?>default.png<?php }?>"
                        data-holder-rendered="true">
                    <br><br>
                    <input type='file' name='file' class='form-control'>
                    <input type="hidden" name="old_file" value='<?php echo $_smarty_tpl->tpl_vars['data']->value['imagen_path'];?>
' class="form-control" >
                    <input type="hidden" name="user_id" value='<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
' class="form-control" >
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
                            <label><span class="text-danger">*</span> Nombre completo</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" required>
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" required>
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Rol</label>
                            <select class="form-control custom-select" required id="role" name="role">
                                <option value="">Seleccione...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role', false, NULL, 'roles', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                                     <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value['role_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['role_id'] == $_smarty_tpl->tpl_vars['role']->value['role_id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </select>
                        </div>
                        <div class="text-center">
                            <b >Actualizar contraseña</b><br>
                            <small>(Sí no desea actualizar la contraseña deje vacío los campos)</small>
                        </div>
                        <hr>
                        
                        <div class="form-group">
                            <label>Nueva Contraseña</label>
                            <input type="password" class="form-control"  id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label>Confirmar contraseña</label>
                            <input type="password" class="form-control"  id="confirm_password" name="confirm_password">
                        </div>
                        
                        <small>Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/testjoseline/users"><i class="fas fa-close"></i> Cancelar</a>
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
        //Validamos contraseñas
        if($('#password').val() != '' && ($('#password').val() != $('#confirm_password').val())){
          $('#btn-save').removeAttr('disabled');
          $('#btn-save').html('<i class="fas fa-save"></i> Guardar');
          warningAlert("Las contraseñas no coinciden");
          //alert("Las contraseñas no coinciden");
          return false;
        }

        //enviando post

    }
  <?php echo '</script'; ?>
>
<?php }
}
