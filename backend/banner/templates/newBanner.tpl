<div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/banner" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Banner / Nuevo banner</h5>              
    </div>
   
</div>


<br>

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                    <form action="/casablanca/newBanner" method="post" name='category' onsubmit="return newBanner();" enctype="multipart/form-data">
                        <div class="text-center">
                            <b >Información general</b>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Imagen</label>
                            <input type="file" name="file" class="form-control-file" required>
                          
                        </div>
                        <div class="form-group">
                            <label>Título</label>
                            <input type="text" class="form-control" id="title" name="title" >
                        </div>
                        <div class="form-group">
                            <label>Subtítulo</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" >
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
{literal}
<script>
  function newBanner(){
    
      $('#btn-save').prop('disabled',true);
      $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
    
      //enviando post
     return true;
  }
</script>
{/literal}