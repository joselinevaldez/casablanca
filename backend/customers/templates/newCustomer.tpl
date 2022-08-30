<div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/customers" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Clientes / Nuevo cliente</h5>              
    </div>
   
</div>


<br>

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                    <form action="/casablanca/newCustomer" method="post" name='category' onsubmit="return newCustomer();" enctype="multipart/form-data">
                        <div class="text-center">
                            <b >Información general</b>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Alias</label>
                            <input type="text" class="form-control" id="alias" name="alias">
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Teléfono</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                         <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Dirección principal</label>
                            <textarea type="text" rows='3' class="form-control" id="address" name="address" required></textarea>
                             <small>Podrás agregar más direcciones al finalizar el registro del cliente</small>
                        </div>
                        <div class="form-group">
                            <label>Notas</label>
                            <textarea type="text" rows='3' class="form-control" id="description" name="description"></textarea>
                            
                        </div>
                        <small>Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/customers"><i class="fas fa-close"></i> Cancelar</a>
                        <button type="submit" id="btn-save" name="saveCustomer" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br style="clear:both"><br>
{literal}
<script>
  function newCustomer(){
    
      $('#btn-save').prop('disabled',true);
      $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
    
      //enviando post
     return true;
  }
</script>
{/literal}