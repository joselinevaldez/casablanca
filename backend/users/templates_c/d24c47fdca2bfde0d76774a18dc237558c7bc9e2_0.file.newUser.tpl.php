<?php
/* Smarty version 3.1.33, created on 2022-06-24 00:56:38
  from 'C:\xampp\htdocs\casablanca\backend\users\templates\newUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62b4efa61647c9_34121989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd24c47fdca2bfde0d76774a18dc237558c7bc9e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\users\\templates\\newUser.tpl',
      1 => 1656024993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b4efa61647c9_34121989 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/users" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Usuarios / Nuevo usuario</h5>              
    </div>
   
</div>


<br>

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                    <form action="/casablanca/newUser" method="post" onsubmit="return newUser();" enctype="multipart/form-data">
                        <div class="text-center">
                            <b >Información general</b>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Nombre completo</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" name="file" class="form-control-file" >
                          
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
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
"><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </select>
                        </div>
                        <div class="text-center">
                            <b >Información de inicio de sesión</b>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Usuario</label>
                            <input type="text" class="form-control" required id="username" name="username" >
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Contraseña</label>
                            <input type="password" class="form-control" required id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Confirmar contraseña</label>
                            <input type="password" class="form-control" required id="confirm_password" name="confirm_password">
                        </div>
                        
                        <small>Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/users"><i class="fas fa-close"></i> Cancelar</a>
                        <button type="submit" id="btn-save" name="save" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br style="clear:both"><br>
<?php echo '<script'; ?>
>
  function newUser(){
    
      $('#btn-save').prop('disabled',true);
      $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
      //Validamos contraseñas
      if($('#password').val() != $('#confirm_password').val()){
        $('#btn-save').removeAttr('disabled');
        $('#btn-save').html('<i class="fas fa-save"></i> Guardar');
        warningAlert("Las contraseñas no coinciden");
        //alert("Las contraseñas no coinciden");
        return false;
      }
     
      //enviando post
     
  }
<?php echo '</script'; ?>
><?php }
}
