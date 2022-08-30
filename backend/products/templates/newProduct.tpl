<div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/products" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Productos / Nuevo producto</h5>              
    </div>
   
</div>


<br>

<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                    <form action="/casablanca/newProduct" method="post" name='product' onsubmit="return newProduct();" enctype="multipart/form-data">
                        <div class="text-center">
                            <b >Información general</b>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Código</label>
                            <input type="text" class="form-control" id="code" name="code" required>
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Imagen</label>
                            <input type="file" class="form-control-file" id="imagen_path" name="file" required>
                        </div>
                       
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Costo</label>
                            <input type="text" class="form-control decimales" id="purchase_price" name="purchase_price" required>
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Precio de venta</label>
                            <input type="text" class="form-control decimales" id="sale_price" name="sale_price" required>
                        </div>
                         <div class="form-group">
                            <label><span class="text-danger">*</span> Categoría</label>
                            <select class="form-control custom-select" required id="category" name="category">
                                <option value="">Seleccione...</option>
                                {foreach name=categories from=$categories item=category}
                                     <option value="{$category.category_id}">{$category.name}</option>
                                {/foreach}

                            </select>
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Unidad</label>
                            <select class="form-control custom-select" required id="unit" name="unit">
                                <option value="">Seleccione...</option>
                                {foreach name=units from=$units item=unit}
                                     <option value="{$unit.measurement_unit_id}">{$unit.name}</option>
                                {/foreach}

                            </select>
                        </div>
                        <small>Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/products"><i class="fas fa-close"></i> Cancelar</a>
                        <button type="submit" id="btn-save" name="saveProduct" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br style="clear:both"><br>
{literal}
    <script src="public/vendor/jquery/jquery.min.js"></script>
<script>
  function newProduct(){
    
      $('#btn-save').prop('disabled',true);
      $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
    
      //enviando post
     return true;
  }
  
    $('.decimales').on('change', function () {
      this.value = maskDinero(unmaskDinero(this.value));
    });

    function unmaskDinero(numeroString) {
        return +(numeroString.replace(/[^0-9.-]+/g,""));
    }
    function maskDinero(numeroInt) {
        return parseFloat(numeroInt).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    }
  
</script>
{/literal}