<div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/customers" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Clientes / Editar cliente</h5>              
    </div>
   
</div>


<br>
<form action="/casablanca/saveEditCustomer" name='edit' method="post" onsubmit="return saveEdit();" enctype="multipart/form-data">
 
<div class="row justify-content-center">                 
    
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                        <div class="text-center">
                            <b >Información general</b>
                        </div>
                      
                        <hr>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="client_id" name="client_id" value="{$data.client_id}">
                            <label><span class="text-danger">*</span> Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="{$data.name}" required>
                        </div>
                        <div class="form-group">
                            <label>Alias</label>
                            <input type="text" class="form-control" id="alias" name="alias" value="{$data.alias}">
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Teléfono</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{$data.phone}" required>
                        </div>
                         <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{$data.email}">
                        </div>
                        <div class="form-group">
                            <label>Notas</label>
                            <textarea type="text" rows='3' class="form-control" id="description" name="description">{$data.description}</textarea>
                            
                        </div>
                       <div class="form-group">
                            <label><span class="text-danger">*</span> Estatus</label>
                            <select class="form-control custom-select" required id="status" name="status" required>
                                <option value="">Seleccione...</option>
                                <option value="1" {if $data.is_active == 1}selected{/if}>Activo</option>
                                <option value="0"  {if $data.is_active == 0}selected{/if}>Inactivo</option>
                            </select>
                        </div>
                        <small>Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/customers"><i class="fas fa-close"></i> Cancelar</a>
                        <button type="submit" id="btn-save" name="save" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                        
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                    <div class="">
                        <b >Libreta de Direcciones</b>
                        <a class="btn btn-warning btn-sm" style="float:right" onclick="newAddress()"><i class="fas fa-plus"></i> Nueva dirección</a>
                  
                    </div>
                    
                    <hr>
                    {foreach name=address from=$address item=item}
                         <div class="row" >
                             <div class="col-lg-10">
                                <b class="text-dark">{$item.description}</b><br>
                                {$item.address}
                             </div>
                             <div class="col-lg-2">
                                 {if $item.is_principal != 1}<a class="btn-sm btn btn-danger" onclick="confirmDelete('{$item.client_address_id}','{$item.description}' )"><i class="fas fa-trash"></i></a>{/if}
                                 <a class="btn-sm btn btn-dark" onclick="openEditAddress('{$item.client_address_id}','{$item.address}', '{$item.description}')"><i class="fas fa-edit"></i></a>
                             </div>
                         </div>
                             <hr>
                     {/foreach}
                </div>
            </div>
        </div>
    </div>
     
</div>
</form>
<br style="clear:both"><br>
<div class="modal fade" id="newAddressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="/casablanca/newAddress" method="POST" onsubmit="return saveAddress();">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva dirección</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="client_id" value="{$data.client_id}">
                <div class="form-group">
                    <label><span class="text-danger">*</span> Descripción</label>
                    <input type="text" name="description" class="form-control" required>
                   
                </div>
                <div class="form-group">
                    <label><span class="text-danger">*</span> Dirección</label>
                    <textarea type="text" rows='3' class="form-control" name="address" required></textarea>
                   
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btn-address">Guardar</button>
            </div>
        </div>
        </form>
    </div>
</div>
<div class="modal fade" id="editAddressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="/casablanca/editAddress" method="POST" onsubmit="return editAddress();">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar dirección</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="client_id" value="{$data.client_id}">
                <input type="hidden" id="edit-client-address-id" name="client_address_id">
                <div class="form-group">
                    <label><span class="text-danger">*</span> Descripción</label>
                    <input type="text"id="edit-description" name="description" class="form-control" required>
                   
                </div>
                <div class="form-group">
                    <label><span class="text-danger">*</span> Dirección</label>
                    <textarea type="text" rows='3' class="form-control" id="edit-address" name="address" required></textarea>
                   
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btn-edit-address">Guardar</button>
            </div>
        </div>
        </form>
    </div>
</div>  
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="/casablanca/deleteAddress" method="POST" onsubmit="return deleteAddress();">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar dirección</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="client_id" name="client_id" value="{$data.client_id}">
                <input type="hidden" id="client_address_id" name="id">
                ¿Estas seguro de que quieres eliminar la dirección del cliente" <b id="addressDelete"></b>" ?
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
    <script>
    function newAddress(){
         $('#newAddressModal').modal('show');
    }
    function openEditAddress(id,address,description){
        $('#edit-description').val(description);
        $('#edit-address').val(address);
        $('#edit-client-address-id').val(id);
        $('#editAddressModal').modal('show');
    }
     function saveAddress(){
        $('#btn-address').prop('disabled',true);
        $('#btn-address').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
    }
     function editAddress(){
        $('#btn-edit-address').prop('disabled',true);
        $('#btn-edit-address').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
    }
    function saveEdit(){
     
        $('#btn-save').prop('disabled',true);
        $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
       

    }
     function confirmDelete(id, name){       
        $('#client_address_id').val(id);
        $('#addressDelete').html(name);
        $('#deleteModal').modal('show');
    }
    
    function deleteAddress(){
        $('#btn-delete').prop('disabled',true);
        $('#btn-delete').html('<i class="fas fa-spin fa-spinner"></i> Eliminando');
    }
  </script>
{/literal}