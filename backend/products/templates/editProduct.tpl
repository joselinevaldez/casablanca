<div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/products" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Productos / Editar productos</h5>              
    </div>
   
</div>


<br>
<form action="/casablanca/saveEditProduct" name='edit' method="post" onsubmit="return saveEdit();" enctype="multipart/form-data">
 
<div class="row justify-content-center">
                 
    <div class="col-lg-3">
           <div class="card">
           
               <div class="card-body text-center">
                    <div class="text-center">
                        <b>{$data.name}</b>
                    </div>
                    <hr>
                    
                    <img class="rounded-circle" style="width: 250px;height: 250px" alt="100x100" src="../casablanca/backend/products/files/{if $data.image_path != ''}{$data.image_path}{else}no-image.png{/if}"
                        data-holder-rendered="true">
                    <br><br>
                    <input type='file' name='file' class='form-control-file'>
                    <input type="hidden" name="old_file" value='{$data.image_path}' class="form-control" >
                    <input type="hidden" name="product_id" value='{$data.product_id}' class="form-control" >
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
                            <label><span class="text-danger">*</span> Código</label>
                            <input type="text" class="form-control" id="code" name="code" required value="{$data.code}">
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required value="{$data.name}">
                        </div>
                       
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Costo</label>
                            <input type="text" class="form-control decimales" id="purchase_price" name="purchase_price" required value="{$data.purchase_price}">
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Precio de venta</label>
                            <input type="text" class="form-control decimales" id="sale_price" name="sale_price" required value="{$data.sale_price}">
                        </div>
                         <div class="form-group">
                            <label><span class="text-danger">*</span> Categoría</label>
                            <select class="form-control custom-select" required id="category" name="category">
                                <option value="">Seleccione...</option>
                                {foreach name=categories from=$categories item=category}
                                     <option value="{$category.category_id}" {if $data.category_id == $category.category_id}selected{/if}>{$category.name}</option>
                                {/foreach}

                            </select>
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Unidad</label>
                            <select class="form-control custom-select" required id="unit" name="unit">
                                <option value="">Seleccione...</option>
                                {foreach name=units from=$units item=unit}
                                     <option value="{$unit.measurement_unit_id}" {if $data.measurement_unit_id == $unit.measurement_unit_id}selected{/if}>{$unit.name}</option>
                                {/foreach}

                            </select>
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
                        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/products"><i class="fas fa-close"></i> Cancelar</a>
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