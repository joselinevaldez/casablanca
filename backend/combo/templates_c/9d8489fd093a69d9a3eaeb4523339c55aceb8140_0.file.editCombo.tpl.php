<?php
/* Smarty version 3.1.33, created on 2022-08-04 00:16:51
  from 'C:\xampp\htdocs\casablanca\backend\combo\templates\editCombo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62eaf3d32f4b64_60068681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d8489fd093a69d9a3eaeb4523339c55aceb8140' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\combo\\templates\\editCombo.tpl',
      1 => 1659565009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62eaf3d32f4b64_60068681 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-lg-6">
        <a href="/casablanca/combos" class="padding-left  float-left text-warning f-s-18 p-b-5"><i class="fas fa-angle-left"></i></i></a><h5 class="padding-left float-left" >Combos / Editar combo</h5>              
    </div>
   
</div>


<br>
<form action="/casablanca/saveEditCombo" name='edit' method="post" onsubmit="return saveEdit();" enctype="multipart/form-data">
 
<div class="row justify-content-center">
                 
    
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                        <div class="text-center">
                            <b >Información general</b>
                        </div>
                        <hr>
                         <input id="productosIds" name="productosIds" type="hidden">
                        <div class="text-center">
                            <img class="rounded-circle" style="width: 100px;height: 100px" alt="100x100" src="../casablanca/backend/combo/files/<?php if ($_smarty_tpl->tpl_vars['data']->value['imagen_path'] != '') {
echo $_smarty_tpl->tpl_vars['data']->value['imagen_path'];
} else { ?>no-image.png<?php }?>"
                            data-holder-rendered="true">
                           
                        </div>                           
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Código</label>
                            <input type="text" class="form-control" id="code" name="code" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
">
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" required  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
                        </div>
                        <div class="form-group">
                             <label> Imagen</label>
                            <input type='file' name='file' class='form-control-file'>
                            <input type="hidden" name="old_file" value='<?php echo $_smarty_tpl->tpl_vars['data']->value['imagen_path'];?>
' class="form-control" >
                            <input type="hidden" name="combo_id" value='<?php echo $_smarty_tpl->tpl_vars['data']->value['combo_id'];?>
' class="form-control" >
                            <small>Seleccione una imagen si desea actualizarla</small>
                        
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Precio de venta</label>
                            <input type="text" class="form-control decimales" id="price" name="price" required  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
">
                        </div>
                       
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Estatus</label>
                            <select class="form-control custom-select" required id="status" name="status" required>
                                <option value="">Seleccione...</option>
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_active'] == 1) {?>selected<?php }?>>Activo</option>
                                <option value="0"  <?php if ($_smarty_tpl->tpl_vars['data']->value['is_active'] == 0) {?>selected<?php }?>>Inactivo</option>
                            </select>
                        </div>
                       
                        <small>Todos los campos (<span class="text-danger">*</span>) Son requeridos</small><hr>
                       
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
           
            <div class="card-body">
                <div class="basic-form">
                    <div class="text-center">
                               <b >Productos</b>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 text-right">
                            <a class="btn btn-sm btn-warning" onclick="modalProducts()">Agregar producto</a>
                        </div>
                    </div>
                    <div class="products" id="listProducts">
                         <div class="row justify-content-lg-center">
                            <div class="col-lg-12 text-center p-65">
                                <h6>Aún no has agregado productos a este combo</h6>
                                <small>Para agregar un producto da click en el botón (+) de la esquina superior derecha</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
         
                            
</div>
<hr>
 <div class="row">
     <div class="col-6 text-left">          
        <a id="btn-cancel" class="btn btn-danger float-left" href="/casablanca/combos"><i class="fas fa-close"></i> Cancelar</a>
   
     </div>
     <div class="col-6 text-right">          
         <button type="submit" id="btn-save" name="save" class="btn btn-warning float-right"><i class="fas fa-save"></i> Guardar</button>           
     </div> 
 </div>
                       
</form>
<br style="clear:both"><br>
<div class="modal fade" id="productsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
       
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Seleccionar artículos</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" placeholder="Buscar..." class="form-control" id="searchProduct" onkeyup="search()">
                    </div>
                </div>
                <hr>
                  <div id="tableProducts">
                     
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" data-dismiss="modal" aria-label="Close" onclick="loadTable();">Seleccionar</button>
            </div>
        </div>
     
    </div>
</div>

    <?php echo '<script'; ?>
 src="public/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    
    function modalProducts(){
         $('#productsModal').modal('show');
    }
    function saveEdit(){
     
        $('#btn-save').prop('disabled',true);
        $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
        if($('#productosIds').val() == ''){
            $('#btn-save').removeAttr('disabled');
            $('#btn-save').html('<i class="fas fa-save"></i> Guardar');
            warningAlert("Seleccione productos para agregar al combo");
            //alert("Las contraseñas no coinciden");
            return false;
        }   

        if(parseFloat($('#price').val()) <= 0){
              $('#btn-save').removeAttr('disabled');
              $('#btn-save').html('<i class="fas fa-save"></i> Guardar');
              warningAlert("El precio de venta del combo debe ser mayor a $0.00");
              //alert("Las contraseñas no coinciden");
              return false;
        }

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
  
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    let products = <?php echo $_smarty_tpl->tpl_vars['products']->value;?>
;
    $( document ).ready(function() {
        loadProducts();
        loadTable();
    });
    function loadTable(){
        const tableProducts = $('#listProducts');
        let htmlTable = "<hr>";
        let count = 0;
        let total = 0;
        let productosIds = "";
        for( let product of products){
           if(product.check == 1){
                count++;
                total+= parseFloat(product.sale_price);
                productosIds += product.product_id+"|";
                htmlTable += `<div class="row" >
                                
                                 <div class='col-2 text-center' > 
                                        <img class="rounded-circle" style="width: 40px;height: 40px" alt="100x100" src="../casablanca/backend/products/files/`+product.image_path +`"
                                         data-holder-rendered="true"></div>
                                  
                                 <div class='col-8'>
                                    <b>`+product.name +`</b> <small class="text-primary">`+product.code +`</small><br>                                  
                                    $`+product.sale_price +`
                                 </div>
                                <div class='col-1'>
                                   <a style="cursor:pointer" onclick="eliminar('`+product.product_id+`')"><i class="text-danger fa fa-trash" ></i></a>
                                 </div>
                             </div><hr>`;
            }
        }
        if(htmlTable == '<hr>'){
            htmlTable = `<div class="row justify-content-lg-center">
                            <div class="col-lg-12 text-center p-65">
                                <h6>Aún no has agregado productos a este combo</h6>
                                <small>Para agregar un producto da click en el botón (+) de la esquina superior derecha</small>
                            </div>
                        </div>`;
        }else{
            htmlTable+=`<div class="row" >
                                
                                 <div class='col-12 text-right'>
                                    <b>No. productos: </b>`+count+ `<br>
                                    <b>Precio sin descuento: </b>$`+total+`
                                 </div>
                               
                             </div><hr>`;
        }
        $('#productosIds').val(productosIds);
        tableProducts.html(htmlTable);
    }
    function loadProducts(){
        const tableProducts = $('#tableProducts');
        let htmlTable = "";
        for( let product of products){
          
           htmlTable += `<div class="row" >
                                
                                 <div class='col-2 text-center' > 
                                        <img class="rounded-circle" style="width: 40px;height: 40px" alt="100x100" src="../casablanca/backend/products/files/`+product.image_path +`"
                                         data-holder-rendered="true"></div>
                                  
                                 <div class='col-8'>
                                    <b>`+product.name +`</b> <small class="text-primary">`+product.code +`</small><br>                                  
                                    $`+product.sale_price +`
                                 </div>
                                <div class='col-1'>`;
                if(product.check == 1){
                    htmlTable += `<input type="checkbox" checked class="form-control" onclick="seleccionar('`+product.product_id+`')">`;
                }else{
                     htmlTable += `<input type="checkbox" class="form-control" onclick="seleccionar('`+product.product_id+`')">`;
               
                }
                  htmlTable += `</div>
                             </div><hr>`; 
        }
        tableProducts.html(htmlTable);
        console.log(products);
           
         $('#productsModal').modal('hide');
    
    }
    function search(){
        let search = $('#searchProduct').val();
        search = search.toLowerCase();
        console.log("buscando ... "+search);
        const tableProducts = $('#tableProducts');
        let htmlTable = "";
        for( let product of products){
            let nombre = product.name.toLowerCase();
            if(nombre.indexOf(search) !== -1 || product.check == 1){
                 htmlTable += `<div class="row" >
                                
                                 <div class='col-2 text-center' > 
                                        <img class="rounded-circle" style="width: 40px;height: 40px" alt="100x100" src="../casablanca/backend/products/files/`+product.image_path +`"
                                         data-holder-rendered="true"></div>
                                  
                                 <div class='col-8'>
                                    <b>`+product.name +`</b> <small class="text-primary">`+product.code +`</small><br>                                  
                                    $`+product.sale_price +`
                                 </div>
                                <div class='col-1'>`;
                if(product.check == 1){
                    htmlTable += `<input type="checkbox" checked class="form-control" onclick="seleccionar('`+product.product_id+`')">`;
                }else{
                     htmlTable += `<input type="checkbox" class="form-control" onclick="seleccionar('`+product.product_id+`')">`;
               
                }
                  htmlTable += `</div>
                             </div><hr>`; 
            }
            console.log(product);
        }
        if(htmlTable == ''){
            htmlTable += `<div class="row" >
                                
                               
                                 <div class='col-12 text-center'>
                                   No se encontraron resultados...
                                 </div>
                             </div>`; 
        }
        tableProducts.html(htmlTable);
    }
    
    function seleccionar(productSelect){
        console.log(productSelect);
        let newProducts = [];
        for( let product of products){           
            if(product.product_id == productSelect){
                if(product.check == 1){
                    product.check = 0;
                }else{
                    product.check = 1;
                }
                
            }
            newProducts.push(product);
        }
        
        products = newProducts;
        console.log(products);
    }
    
    function eliminar(id){
        seleccionar(id);
        loadTable();
        search();
    }
<?php echo '</script'; ?>
><?php }
}
