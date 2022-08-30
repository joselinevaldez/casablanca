<?php
/* Smarty version 3.1.33, created on 2022-06-24 17:04:36
  from 'C:\xampp\htdocs\casablanca\backend\customers\templates\newCustomer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62b5d28496e7d3_92842771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7928e3bc8bb0f69e518d175c83c774dcbd16a50c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\customers\\templates\\newCustomer.tpl',
      1 => 1656083069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b5d28496e7d3_92842771 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
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

<?php echo '<script'; ?>
>
  function newCustomer(){
    
      $('#btn-save').prop('disabled',true);
      $('#btn-save').html('<i class="fas fa-spin fa-spinner"></i> Guardando');
    
      //enviando post
     return true;
  }
<?php echo '</script'; ?>
>
<?php }
}
