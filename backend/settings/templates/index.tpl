
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
                         <img class="rounded-circle" style="width: 100px;height: 100px" alt="100x100" src="../casablanca/backend/settings/files/{if $data.logo_path != ''}{$data.logo_path}{else}logo_dark.jpg{/if}"
                        data-holder-rendered="true">
                     </div>
                 
                 </div>
                <div class="form-group">
                    <label >Logotipo</label>
                    <input type="hidden" name="old_logo" value="{if $data.logo_path }{$data.logo_path}{/if}">
                    <input type="file" name='file' class="form-control-file">                    
                </div>
                <div class="form-group">
                    <label ><span class="text-danger">*</span> Nombre del negocio</label>
                    <input type="text" name="store_name" required="true" class="form-control" value="{if $data.store_name }{$data.store_name}{/if}">                    
                </div>
                <div class="form-group">
                    <label ><span class="text-danger">*</span> Teléfono principal</label>
                    <input type="text" name="phone" required="true"  class="form-control" value="{if $data.phone }{$data.phone}{/if}">                    
                </div>
                <div class="form-group">
                    <label >Teléfono secundario</label>
                    <input type="text" name="phone_secondary" class="form-control" value="{if $data.phone_secondary }{$data.phone_secondary}{/if}">                    
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
                    <input type="text" name="url_facebook" required="true"  class="form-control" value="{if $data.url_facebook }{$data.url_facebook}{/if}">   
                    <small class="form-text text-muted" >Ingresa la URL de facebook</small>
                </div>
                <div class="form-group">
                    <label ><span class="text-danger">*</span> Instagram</label>
                    <input type="text" name="url_instagram" required="true"  class="form-control" value="{if $data.url_instagram }{$data.url_instagram}{/if}">   
                    <small class="form-text text-muted">Ingresa la URL de Instagram</small>
                </div>
                <div class="form-group">
                    <label ><span class="text-danger">*</span> WhatsApp</label>
                    <input type="text" name="whatsapp" required="true"  class="form-control" value="{if $data.whatsapp }{$data.whatsapp}{/if}">   
                    <small class="form-text text-muted">Ingresa el número de celular a 10 digitos</small>
                </div>
                 <div class="form-group">
                    <label ><span class="text-danger">*</span> Email</label>
                    <input type="text" name="email" required="true"  class="form-control" value="{if $data.email }{$data.email}{/if}">   
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
                    <textarea rows="5" name="information" required="true"  class="form-control">{if $data.information }{$data.information}{/if}</textarea>  
                    <small class="form-text text-muted">Ingresa la descripción del negocio</small>
                </div>
                 <div class="form-group">
                    <label ><span class="text-danger">*</span> Misión</label>
                    <textarea rows="5" name="mision" required="true"  class="form-control">{if $data.mision }{$data.mision}{/if}</textarea>  
                    <small class="form-text text-muted">Ingresa la misión del negocio</small>
                </div>
                 <div class="form-group">
                    <label ><span class="text-danger">*</span> Visión</label>
                    <textarea rows="5" name="vision" required="true"  class="form-control">{if $data.vision }{$data.vision}{/if}</textarea>  
                    <small class="form-text text-muted">Ingresa la visión del negocio</small>
                </div>
                 <div class="form-group">
                    <label ><span class="text-danger">*</span> Dirección</label>
                    <textarea rows="5" name="address" required="true"  class="form-control">{if $data.address }{$data.address}{/if}</textarea>  
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
                            <input type="checkbox" class="form-check-input" id="check_1" {if $data.h_lunes == 'Descanso' }checked{/if} onchange="activar_descanso(1);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_1" name="h_lunes" class="form-control" {if $data.h_lunes == 'Descanso' }disabled{/if} value="{if $data.h_lunes }{$data.h_lunes}{/if}">
                    </div>
                </div>                   
                <hr>
                <span class="badge badge-warning">Martes</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_2" {if $data.h_martes == 'Descanso' }checked{/if} onchange="activar_descanso(2);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_2" name="h_martes" class="form-control" {if $data.h_martes == 'Descanso' }disabled{/if} value="{if $data.h_martes }{$data.h_martes}{/if}">
                    </div>
                </div>                    
                <hr>
                <span class="badge badge-warning">Miércoles</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_3" {if $data.h_miercoles == 'Descanso' }checked{/if} onchange="activar_descanso(3);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_3" name="h_miercoles" class="form-control" {if $data.h_miercoles == 'Descanso' }disabled{/if} value="{if $data.h_miercoles }{$data.h_miercoles}{/if}">
                    </div>
                </div>                    
                <hr>
                <span class="badge badge-warning">Jueves</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_4" {if $data.h_jueves == 'Descanso' }checked{/if} onchange="activar_descanso(4);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_4" name="h_jueves" class="form-control" {if $data.h_jueves == 'Descanso' }disabled{/if} value="{if $data.h_jueves }{$data.h_jueves}{/if}">
                    </div>
                </div>                    
                <hr>
                <span class="badge badge-warning">Viernes</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_5" {if $data.h_viernes == 'Descanso' }checked{/if} onchange="activar_descanso(5);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_5" name="h_viernes" class="form-control" {if $data.h_viernes == 'Descanso' }disabled{/if} value="{if $data.h_viernes }{$data.h_viernes}{/if}">
                    </div>
                </div>                    
                <hr>
                <span class="badge badge-warning">Sábado</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_6" {if $data.h_sabado == 'Descanso' }checked{/if} onchange="activar_descanso(6);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_6" name="h_sabado" class="form-control" {if $data.h_sabado == 'Descanso' }disabled{/if} value="{if $data.h_sabado }{$data.h_sabado}{/if}">
                    </div>
                </div>                    
                <hr>
                <span class="badge badge-warning">Domingo</span>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="form-check m-t-5">
                            <input type="checkbox" class="form-check-input" id="check_7" {if $data.h_domingo == 'Descanso' }checked{/if} onchange="activar_descanso(7);">
                            <label class="form-check-label" for="exampleCheck1">Indicar descanso</label>
                        </div>
                        <input type="text" id="horario_7" name="h_domingo" class="form-control" {if $data.h_domingo == 'Descanso' }disabled{/if} value="{if $data.h_domingo }{$data.h_domingo}{/if}">
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
                <input class="form-control" type="hidden" id="lat" value="{$data.lat}" name="lat">
                <input class="form-control" type="hidden" id="long" value="{$data.lon}" name="long">
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
                {if is_array($services) and $services|@count > 0}
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                               
                                <th>Nombre</th>
                                <th class='text-center' style="min-width:70px"><i class='fa fa-cog'></i></th>
                            </tr>
                        </thead>

                        <tbody>
                             {foreach name=services from=$services item=service}
                             <tr>
                                                             
                                 <td>{$service.name}</td>                   
                                 <td style="min-width:70px;text-align: center">
                                    <a class="btn btn-sm btn-danger btn-config" onclick="confirmDelete('{$service.configuration_services_id}','{$service.name}')" title='Eliminar' ><i class="fas fa-trash"></i></a>
                                    
                                  </td>
                             </tr>
                             {/foreach}


                        </tbody>
                    </table>
                </div>
            {else}
                <div class="row justify-content-lg-center">
                    <div class="col-lg-12 text-center p-65">
                        <h6><i class="fas fa-book-open"></i></h6>
                        <h6>No se encontraron registro</h6>
                        <small>Para agregar un nuevo servicio da click en el botón (+) de la esquina superior derecha</small>
                    </div>
                </div>
            {/if}
            
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
 {literal}
       <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZwC5HHUTHvH5hZ6L5dBtnzYaHcy6gfgo" defer></script>
    <script>
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
       
   
  </script>
{/literal}