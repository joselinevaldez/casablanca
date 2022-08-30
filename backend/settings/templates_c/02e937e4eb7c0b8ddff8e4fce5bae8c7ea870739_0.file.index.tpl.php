<?php
/* Smarty version 3.1.33, created on 2022-07-01 18:57:02
  from 'C:\xampp\htdocs\casablanca\backend\settings\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62bf275ebc6a54_50739203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02e937e4eb7c0b8ddff8e4fce5bae8c7ea870739' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\settings\\templates\\index.tpl',
      1 => 1656694020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bf275ebc6a54_50739203 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Page Heading -->
 
<div class="row">
    <div class="col-lg-6">
          <h5 class="" >Configuración General</h5>              
    </div>
   
</div>
 <form action="/casablanca/saveSettings" name='edit' method="post" onsubmit="return saveEdit();" enctype="multipart/form-data">
 <div class="row">
     <div class="col-lg-6">
        <div class="card shadow mb-4"  style="min-height: 530px">
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
        <div class="card shadow mb-4" style="min-height: 530px">
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
        <div class="card shadow mb-4" style="min-height: 980px">
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
        <div class="card shadow mb-4" style="min-height: 980px">
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

 <div class="row">
  
     <div class="col-lg-12">
         <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-dark">Ubicación</h6>
                
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div id="googleMap" style="height: 400px;width: 100%;"></div>
                <input class="form-control" type="hidden" id="lat" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['lat'];?>
" name="lat">
                <input class="form-control" type="hidden" id="long" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['lon'];?>
" name="long">
            </div>
         </div>
     </div>
</div>
 <div class="row">
      <small class="m-l-10">Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
     <div class="col-12 text-right">
           <button type="submit" id="btn-save" name="save" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                       
     </div>
 </div>
 </form>
<hr>
<div class="row">
     <div class="col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-dark">Servicios</h6>
                
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <a class="btn btn-sm btn-warning" onclick="newServices()"><i class="fa fa-plus"></i> Agregar servicio</a>
                    </div>
                </div>
                <br>
                <?php if (is_array($_smarty_tpl->tpl_vars['services']->value) && count($_smarty_tpl->tpl_vars['services']->value) > 0) {?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               
                                <th>Nombre</th>
                                <th class='text-center' style="min-width:70px"><i class='fa fa-cog'></i></th>
                            </tr>
                        </thead>

                        <tbody>
                             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service', false, NULL, 'services', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
?>
                             <tr>
                                                             
                                 <td><?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
</td>                   
                                 <td style="min-width:70px;text-align: center">
                                    <a class="btn btn-sm btn-danger btn-config" onclick="confirmDelete('<?php echo $_smarty_tpl->tpl_vars['service']->value['configuration_services_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
')" title='Eliminar' ><i class="fas fa-trash"></i></a>
                                    
                                  </td>
                             </tr>
                             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <div class="row justify-content-lg-center">
                    <div class="col-lg-12 text-center p-65">
                        <h6><i class="fas fa-book-open"></i></h6>
                        <h6>No se encontraron registro</h6>
                        <small>Para agregar un nuevo servicio da click en el botón (+) de la esquina superior derecha</small>
                    </div>
                </div>
            <?php }?>
            
            </div>
        </div>
     </div>
    
</div>
 <div class="modal fade" id="newServicesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="/casablanca/saveServices" method="POST" onsubmit="return saveServices();">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo servicio</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="form-group">
                    <label><span class="text-danger">*</span> Nombre</label>
                    <input type="text" name="name" class="form-control" required>
                   
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btn-services">Guardar</button>
            </div>
        </div>
        </form>
    </div>
</div> 
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="/casablanca/deleteServices" method="POST" onsubmit="return deleteServices();">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar sevicio</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="configuration_services_id" name="id">
                ¿Estas seguro de que quieres eliminar el servicio "<b id="servicesDelete"></b>" ?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btn-delete">Eliminar</button>
            </div>
        </div>
        </form>
    </div>
</div>           
 
       <!-- Google Map API Key-->
    <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZwC5HHUTHvH5hZ6L5dBtnzYaHcy6gfgo" defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
           // Inicializando el mapa cuando se carga la página
    window.onload = function() {
      initializeMap();
    };
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
    
    function newServices(){
         $('#newServicesModal').modal('show');
    }
    
     function saveServices(){
        $('#btn-services').prop('disabled',true);
        $('#btn-services').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
    }
    function confirmDelete(id, name){       
        $('#configuration_services_id').val(id);
        $('#servicesDelete').html(name);
        $('#deleteModal').modal('show');
    }
    
    function deleteServices(){
        $('#btn-delete').prop('disabled',true);
        $('#btn-delete').html('<i class="fas fa-spin fa-spinner"></i> Eliminando');
    }
    
    function initializeMap() {
       
        var lat = 25.7503705;
        if($('#lat').val() != ''){
            lat = $('#lat').val();
        }
        var lon = -108.8148044;
          if($('#long').val() != ''){
            lon = $('#long').val();
        }
        console.log(lat);
        console.log(lon);
        // Configuración del mapa
        var mapProp = {
          center: new google.maps.LatLng(lat, lon),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Agregando el mapa al tag de id googleMap
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
       
        // Creando un marker en el mapa
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(lat,lon),
          map: map,
          title: 'Casa Blanca',
          draggable: true //que el marcador se pueda arrastrar
        });
      
        // Registrando el evento drag, en este caso imprime 
        // en consola la latitud y longitud
        google.maps.event.addListener(marker,'drag',function(event) {
          $('#lat').val(event.latLng.lat());
          $('#long').val(event.latLng.lng());
        });
      
      }
       
   
  <?php echo '</script'; ?>
>
<?php }
}
