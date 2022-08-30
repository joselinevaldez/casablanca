<?php
/* Smarty version 3.1.33, created on 2022-08-12 19:15:40
  from 'C:\xampp\htdocs\casablanca\backend\customers\templates\editCustomer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62f68abc0c4fa3_34767720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b5111bf28ac5739bd529ca69082076013816c28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\customers\\templates\\editCustomer.tpl',
      1 => 1660324537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62f68abc0c4fa3_34767720 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
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
                            <input type="hidden" class="form-control" id="client_id" name="client_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['client_id'];?>
">
                            <label><span class="text-danger">*</span> Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" required>
                        </div>
                        <div class="form-group">
                            <label>Alias</label>
                            <input type="text" class="form-control" id="alias" name="alias" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['alias'];?>
">
                        </div>
                        <div class="form-group">
                            <label><span class="text-danger">*</span> Teléfono</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
" required>
                        </div>
                         <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
">
                        </div>
                        <div class="form-group">
                            <label>Notas</label>
                            <textarea type="text" rows='3' class="form-control" id="description" name="description"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</textarea>
                            
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value, 'item', false, NULL, 'address', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                         <div class="row" >
                             <div class="col-lg-10">
                                <b class="text-dark"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</b><br>
                                <?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>

                             </div>
                             <div class="col-lg-2">
                                 <?php if ($_smarty_tpl->tpl_vars['item']->value['is_principal'] != 1) {?><a class="btn-sm btn btn-danger" onclick="confirmDelete('<?php echo $_smarty_tpl->tpl_vars['item']->value['client_address_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
' )"><i class="fas fa-trash"></i></a><?php }?>
                                 <a class="btn-sm btn btn-dark" onclick="openEditAddress('<?php echo $_smarty_tpl->tpl_vars['item']->value['client_address_id'];?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
', '<?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
')"><i class="fas fa-edit"></i></a>
                             </div>
                         </div>
                             <hr>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                <input type="hidden" name="client_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['client_id'];?>
">
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
                <input type="hidden" name="client_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['client_id'];?>
">
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
                <input type="hidden" id="client_id" name="client_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['client_id'];?>
">
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

    <?php echo '<script'; ?>
>
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
  <?php echo '</script'; ?>
>
<?php }
}
