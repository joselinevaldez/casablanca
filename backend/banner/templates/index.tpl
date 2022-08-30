
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
            {if is_array($list) and $list|@count > 0}
                
                <div class="row">
                     {foreach name=banners from=$list item=banner}
                    <div class="col-lg-4 m-t-10">
                         <div class="card" style="">
                             <div class="img" style="height: 200px;background-image: url('../casablanca/backend/banner/files/{$banner.imagen_path}');background-size: 100%;background-repeat: no-repeat, repeat;background-position: center;"></div>
                            <div class="card-body">
                                <h5 class="card-title">{$banner.title}</h5>
                                <p class="card-text">{$banner.subtitle}</p>
                                <hr>
                                <div class='text-center'>
                                    <a class="btn btn-danger" onclick='confirmDelete("{$banner.configuration_banner_id}")'><i class='fa fa-trash'></i> Eliminar</a>
                                    <a  class="btn btn-dark" href="/casablanca/banner-edit/{$banner.configuration_banner_id}"><i class='fa fa-edit'></i> Editar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/foreach}
                   
                </div>
            {else}
                <div class="row justify-content-lg-center">
                    <div class="col-lg-12 text-center p-65">
                        <h6><i class="fas fa-book-open"></i></h6>
                        <h6>No se encontraron registro</h6>
                        <small>Para agregar un nuevo banner da click en el botón (+) de la esquina superior derecha</small>
                    </div>
                </div>
            {/if}
            
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

<script>
    function confirmDelete(id){       
        $('#bannerId').val(id);
        $('#deleteModal').modal('show');
    }
    
    function deleteBanner(){
        $('#btn-delete').prop('disabled',true);
        $('#btn-delete').html('<i class="fas fa-spin fa-spinner"></i> Eliminando');
    }
</script>