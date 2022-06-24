<div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/users" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Usuarios / Editar usuario</h5>              
    </div>
   
</div>


<br>
<form action="/casablanca/saveEditUser" name='edit' method="post" onsubmit="return saveEdit();" enctype="multipart/form-data">
 
<div class="row justify-content-center">
                 
    <div class="col-lg-3">
           <div class="card">
           
               <div class="card-body text-center">
                    <div class="text-center">
                        <b>{$data.username}</b>
                    </div>
                    <hr>
                    
                    <img class="rounded-circle" style="width: 250px;height: 250px" alt="100x100" src="../casablanca/backend/users/files/{if $data.imagen_path != ''}{$data.imagen_path}{else}default.png{/if}"
                        data-holder-rendered="true">
                    <br><br>
                    <input type='file' name='file' class='form-control-file'>
                    <input type="hidden" name="old_file" value='{$data.imagen_path}' class="form-control" >
                    <input type="hidden" name="user_id" value='{$data.user_id}' class="form-control" >
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
                            <label><span class="text-danger">*</span> Nombre completo</label>
                            <input type="text" class="form-control" id="name" name="name" value="{$data.name}" required>
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{$data.email}" required>
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Rol</label>
                            <select class="form-control custom-select" required id="role" name="role">
                                <option value="">Seleccione...</option>
                                {foreach name=roles from=$roles item=role}
                                     <option value="{$role.role_id}" {if $data.role_id == $role.role_id} selected {/if}>{$role.name}</option>
                                {/foreach}

                            </select>
                        </div>
                        <div class="text-center">
                            <b >Actualizar contraseña</b><br>
                            <small>(Sí no desea actualizar la contraseña deje vacíos los campos)</small>
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
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/users"><i class="fas fa-close"></i> Cancelar</a>
                        <button type="submit" id="btn-save" name="save" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                        
                    
                </div>
            </div>
        </div>
    </div>

</div>
</form>
<br style="clear:both"><br>

{literal}
    <script>
 
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
  </script>
{/literal}