<?php
/* Smarty version 3.1.33, created on 2022-06-29 20:50:14
  from 'C:\xampp\htdocs\casablanca\backend\banner\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62bc9ee61301e6_19964347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '909f8b01ebd0d2e7e65ad5c7ae0a91cab04d2dd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\casablanca\\backend\\banner\\templates\\index.tpl',
      1 => 1656524206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bc9ee61301e6_19964347 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-6">
              <h5 class="padding-left" >Configuración del banner</h5>              
        </div>
        <div class="col-lg-6">
           <a class="btn btn-warning float-right margin-right " href="/casablanca/newBanner"><i class="fas fa-plus"></i> Nuevo banner</a>
        </div>
    </div>


<br>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Banners</h6>
        </div>
        <div class="card-body">
            <?php if (is_array($_smarty_tpl->tpl_vars['list']->value) && count($_smarty_tpl->tpl_vars['list']->value) > 0) {?>
                
                <div class="row">
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'banner', false, NULL, 'banners', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->value) {
?>
                    <div class="col-lg-4 m-t-10">
                         <div class="card" style="">
                             <div class="img" style="height: 200px;background-image: url('../casablanca/backend/banner/files/<?php echo $_smarty_tpl->tpl_vars['banner']->value['imagen_path'];?>
');background-size: 100%;background-repeat: no-repeat, repeat;background-position: center;"></div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['banner']->value['title'];?>
</h5>
                                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['banner']->value['subtitle'];?>
</p>
                                <hr>
                                <div class='text-center'>
                                    <a class="btn btn-danger" onclick='confirmDelete("<?php echo $_smarty_tpl->tpl_vars['banner']->value['configuration_banner_id'];?>
")'><i class='fa fa-trash'></i> Eliminar</a>
                                    <a  class="btn btn-dark" href="/casablanca/banner-edit/<?php echo $_smarty_tpl->tpl_vars['banner']->value['configuration_banner_id'];?>
"><i class='fa fa-edit'></i> Editar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                   
                </div>
            <?php } else { ?>
                <div class="row justify-content-lg-center">
                    <div class="col-lg-12 text-center p-65">
                        <h6><i class="fas fa-book-open"></i></h6>
                        <h6>No se encontraron registro</h6>
                        <small>Para agregar un nuevo banner da click en el botón (+) de la esquina superior derecha</small>
                    </div>
                </div>
            <?php }?>
            
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- Logout Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="/casablanca/deleteBanner" method="POST" onsubmit="return deleteBanner();">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar banner</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="bannerId" name="id">
                ¿Estas seguro de que quieres eliminar el banner ?
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
    function confirmDelete(id){       
        $('#bannerId').val(id);
        $('#deleteModal').modal('show');
    }
    
    function deleteBanner(){
        $('#btn-delete').prop('disabled',true);
        $('#btn-delete').html('<i class="fas fa-spin fa-spinner"></i> Eliminando');
    }
<?php echo '</script'; ?>
><?php }
}
