<?php
/* Smarty version 3.1.33, created on 2022-06-24 00:02:44
  from 'C:\xampp\htdocs\casablanca\backend\settings\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62b4e304be3c12_20471321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02e937e4eb7c0b8ddff8e4fce5bae8c7ea870739' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\settings\\templates\\index.tpl',
      1 => 1656021738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b4e304be3c12_20471321 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Page Heading -->

<div class="row">
    <div class="col-lg-6">
          <h5 class="" >Configuración</h5>              
    </div>
   
</div>
 <form action="/casablanca/saveSettings" name='edit' method="post" onsubmit="return saveEdit();" enctype="multipart/form-data">
 <div class="row">
     <div class="col-lg-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-dark">Información general</h6>
                
            </div>
            <!-- Card Body -->
            <div class="card-body">
                 <div class="row">
                     <div class="col-12  text-center">
                         <img class="rounded-circle" style="width: 100px;height: 100px" alt="100x100" src="../casablanca/backend/settings/files/<?php if ($_smarty_tpl->tpl_vars['data']->value['logo_path'] != '') {
echo $_smarty_tpl->tpl_vars['data']->value['logo_path'];
} else { ?>logo_dark.jpg<?php }?>"
                        data-holder-rendered="true">
                     </div>
                 
                 </div>
                <div class="form-group">
                    <label >Logotipo</label>
                    <input type="hidden" name="old_logo" value="<?php if ($_smarty_tpl->tpl_vars['data']->value['logo_path']) {
echo $_smarty_tpl->tpl_vars['data']->value['logo_path'];
}?>">
                    <input type="file" name='file' class="form-control-file">                    
                </div>
                <div class="form-group">
                    <label ><span class="text-danger">*</span> Nombre del negocio</label>
                    <input type="text" name="store_name" required="true" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['data']->value['store_name']) {
echo $_smarty_tpl->tpl_vars['data']->value['store_name'];
}?>">                    
                </div>
                <div class="form-group">
                    <label ><span class="text-danger">*</span> Teléfono principal</label>
                    <input type="text" name="phone" required="true"  class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['data']->value['phone']) {
echo $_smarty_tpl->tpl_vars['data']->value['phone'];
}?>">                    
                </div>
                <div class="form-group">
                    <label >Teléfono secundario</label>
                    <input type="text" name="phone_secondary" class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['data']->value['phone_secondary']) {
echo $_smarty_tpl->tpl_vars['data']->value['phone_secondary'];
}?>">                    
                </div>
                
            </div>
        </div>
    </div>
     <div class="col-lg-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-dark">Redes sociales</h6>
                
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="form-group">
                    <label ><span class="text-danger">*</span> Facebook</label>
                    <input type="text" name="url_facebook" required="true"  class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['data']->value['url_facebook']) {
echo $_smarty_tpl->tpl_vars['data']->value['url_facebook'];
}?>">   
                    <small class="form-text text-muted" >Ingresa la URL de facebook</small>
                </div>
                <div class="form-group">
                    <label ><span class="text-danger">*</span> Instagram</label>
                    <input type="text" name="url_instagram" required="true"  class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['data']->value['url_instagram']) {
echo $_smarty_tpl->tpl_vars['data']->value['url_instagram'];
}?>">   
                    <small class="form-text text-muted">Ingresa la URL de Instagram</small>
                </div>
                <div class="form-group">
                    <label ><span class="text-danger">*</span> WhatsApp</label>
                    <input type="text" name="whatsapp" required="true"  class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['data']->value['whatsapp']) {
echo $_smarty_tpl->tpl_vars['data']->value['whatsapp'];
}?>">   
                    <small class="form-text text-muted">Ingresa el número de celular a 10 digitos</small>
                </div>
                 <div class="form-group">
                    <label ><span class="text-danger">*</span> Email</label>
                    <input type="text" name="email" required="true"  class="form-control" value="<?php if ($_smarty_tpl->tpl_vars['data']->value['email']) {
echo $_smarty_tpl->tpl_vars['data']->value['email'];
}?>">   
                    <small class="form-text text-muted">Ingresa el email</small>
                </div>
                
                
            </div>
        </div>
    </div>
 </div>
<div class="row">
     <div class="col-lg-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-dark">Sitio web</h6>
                
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="form-group">
                    <label ><span class="text-danger">*</span> Información</label>
                    <textarea rows="5" name="information" required="true"  class="form-control"><?php if ($_smarty_tpl->tpl_vars['data']->value['information']) {
echo $_smarty_tpl->tpl_vars['data']->value['information'];
}?></textarea>  
                    <small class="form-text text-muted">Ingresa la descripción del negocio</small>
                </div>
                 <div class="form-group">
                    <label ><span class="text-danger">*</span> Misión</label>
                    <textarea rows="5" name="mision" required="true"  class="form-control"><?php if ($_smarty_tpl->tpl_vars['data']->value['mision']) {
echo $_smarty_tpl->tpl_vars['data']->value['mision'];
}?></textarea>  
                    <small class="form-text text-muted">Ingresa la misión del negocio</small>
                </div>
                 <div class="form-group">
                    <label ><span class="text-danger">*</span> Visión</label>
                    <textarea rows="5" name="vision" required="true"  class="form-control"><?php if ($_smarty_tpl->tpl_vars['data']->value['vision']) {
echo $_smarty_tpl->tpl_vars['data']->value['vision'];
}?></textarea>  
                    <small class="form-text text-muted">Ingresa la visión del negocio</small>
                </div>
                 <div class="form-group">
                    <label ><span class="text-danger">*</span> Dirección</label>
                    <textarea rows="5" name="address" required="true"  class="form-control"><?php if ($_smarty_tpl->tpl_vars['data']->value['address']) {
echo $_smarty_tpl->tpl_vars['data']->value['address'];
}?></textarea>  
                    <small class="form-text text-muted">Ingresa la dirección del negocio</small>
                </div>
            </div>
        </div>
    </div>
     <div class="col-lg-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-dark">Horarios</h6>
                
            </div>
            <!-- Card Body -->
            <div class="card-body">
                
                <span class="badge badge-warning">Lunes</span>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_1" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_lunes'] == 'Descanso') {?>checked<?php }?> onchange="activar_descanso(1);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_1" name="h_lunes" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_lunes'] == 'Descanso') {?>disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['data']->value['h_lunes']) {
echo $_smarty_tpl->tpl_vars['data']->value['h_lunes'];
}?>">
                    </div>
                </div>                   
                <hr>
                <span class="badge badge-warning">Martes</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_2" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_martes'] == 'Descanso') {?>checked<?php }?> onchange="activar_descanso(2);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_2" name="h_martes" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_martes'] == 'Descanso') {?>disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['data']->value['h_martes']) {
echo $_smarty_tpl->tpl_vars['data']->value['h_martes'];
}?>">
                    </div>
                </div>                    
                <hr>
                <span class="badge badge-warning">Miércoles</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_3" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_miercoles'] == 'Descanso') {?>checked<?php }?> onchange="activar_descanso(3);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_3" name="h_miercoles" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_miercoles'] == 'Descanso') {?>disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['data']->value['h_miercoles']) {
echo $_smarty_tpl->tpl_vars['data']->value['h_miercoles'];
}?>">
                    </div>
                </div>                    
                <hr>
                <span class="badge badge-warning">Jueves</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_4" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_jueves'] == 'Descanso') {?>checked<?php }?> onchange="activar_descanso(4);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_4" name="h_jueves" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_jueves'] == 'Descanso') {?>disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['data']->value['h_jueves']) {
echo $_smarty_tpl->tpl_vars['data']->value['h_jueves'];
}?>">
                    </div>
                </div>                    
                <hr>
                <span class="badge badge-warning">Viernes</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_5" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_viernes'] == 'Descanso') {?>checked<?php }?> onchange="activar_descanso(5);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_5" name="h_viernes" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_viernes'] == 'Descanso') {?>disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['data']->value['h_viernes']) {
echo $_smarty_tpl->tpl_vars['data']->value['h_viernes'];
}?>">
                    </div>
                </div>                    
                <hr>
                <span class="badge badge-warning">Sábado</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_6" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_sabado'] == 'Descanso') {?>checked<?php }?> onchange="activar_descanso(6);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_6" name="h_sabado" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_sabado'] == 'Descanso') {?>disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['data']->value['h_sabado']) {
echo $_smarty_tpl->tpl_vars['data']->value['h_sabado'];
}?>">
                    </div>
                </div>                    
                <hr>
                <span class="badge badge-warning">Domingo</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_7" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_domingo'] == 'Descanso') {?>checked<?php }?> onchange="activar_descanso(7);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_7" name="h_domingo" class="form-control" <?php if ($_smarty_tpl->tpl_vars['data']->value['h_domingo'] == 'Descanso') {?>disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['data']->value['h_domingo']) {
echo $_smarty_tpl->tpl_vars['data']->value['h_domingo'];
}?>">
                    </div>
                </div>                    
                <hr>
            </div>
        </div>
    </div>

</div>
 <hr>
 
 <div class="row">
      <small class="m-l-10">Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
     <div class="col-12 text-right">
           <button type="submit" id="btn-save" name="save" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                       
     </div>
 </div>
 </form>
                    
 
    <?php echo '<script'; ?>
>
    function activar_descanso(dia){
        var checked = $('#check_'+dia).prop('checked');
        if(checked){
            $('#horario_'+dia).val("Descanso");
            $('#horario_'+dia).prop("disabled",true);
        }else{
            $('#horario_'+dia).val("");
            $('#horario_'+dia).prop("disabled",false);
        }
    }
    function saveEdit(){
     
        $('#btn-save').prop('disabled',true);
        $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
        //Validamos horarios
        if(!$('#check_1').prop('checked') && $('#horario_1').val() == ""){
             warningAlert("Ingresa un horario para el día lunes");
             return false;
        }else if(!$('#check_2').prop('checked') && $('#horario_2').val() == ""){
             warningAlert("Ingresa un horario para el día martes");
             return false;
        }else if(!$('#check_3').prop('checked') && $('#horario_3').val() == ""){
            warningAlert("Ingresa un horario para el día miércoles");
            return false;
        }else if(!$('#check_4').prop('checked') && $('#horario_4').val() == ""){
            warningAlert("Ingresa un horario para el día jueves");
            return false;
        }else if(!$('#check_5').prop('checked') && $('#horario_5').val() == ""){
            warningAlert("Ingresa un horario para el día viernes");
            return false;
        }else if(!$('#check_6').prop('checked') && $('#horario_6').val() == ""){
            warningAlert("Ingresa un horario para el día sábado");
            return false;
        }else if(!$('#check_7').prop('checked') && $('#horario_7').val() == ""){
            warningAlert("Ingresa un horario para el día domingo");
            return false;
        }
        
        for(var x=1;x<=7;x++){
            $('#horario_'+x).prop('disabled', false);
        }
        //enviando post

    }
  <?php echo '</script'; ?>
>
<?php }
}
