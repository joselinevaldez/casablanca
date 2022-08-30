
 <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-6">
              <h5 class="padding-left" >Paquetes</h5>              
        </div>
        <div class="col-lg-6">
           <a class="btn btn-warning float-right margin-right " href="/casablanca/newPaquete"><i class="fas fa-plus"></i> Nuevo Paquete</a>
        </div>
    </div>


<br>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Listado de paquetes</h6>
        </div>
        <div class="card-body">
            {if is_array($list) and $list|@count > 0}
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Imagen</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Precio venta</th>
                                <th>Estatus</th>
                                <th>Fecha de creación</th>
                                <th>Última modificación</th>
                                <th class='text-center' style="min-width:70px"><i class='fa fa-cog'></i></th>
                            </tr>
                        </thead>

                        <tbody>
                             {foreach name=paquetes from=$list item=paquete}
                             <tr>
                                 <td>{$paquete.paquete_id}</td>
                                 <td class='text-center'> <img class="rounded-circle" style="width: 50px;height: 50px" alt="100x100" src="../casablanca/backend/paquetes/files/{if $paquete.imagen_path != ''}{$paquete.imagen_path}{else}no-image.png{/if}"
                                         data-holder-rendered="true"></td>
                                   <td>{$paquete.code}</td>
                                 <td>{$paquete.name}</td>
                               
                                 <td>${$paquete.price|string_format:"%.2f"}</td>
                                 <td>{if $paquete.is_active == 0}<span class='badge badge-warning'>Inactivo</span>
                                     {elseif $paquete.is_active == 1}<span class='badge badge-success'>Activo</span>
                                     {elseif $paquete.is_active == 2}<span class='badge badge-danger'>Eliminado</span>
                                     {/if}</td>
                                 <td>{$paquete.created_at}</td>                            
                                 <td>{$paquete.updated_at}</td>                            

                                 <td style="min-width:70px">
                                    <a class="btn btn-sm btn-danger btn-config" onclick="confirmDelete('{$paquete.paquete_id}', '{$paquete.name}');" title='Eliminar' ><i class="fas fa-trash"></i></a>
                                    <a class="btn btn-sm btn-dark btn-config" href='/casablanca/paquete-edit/{$paquete.paquete_id}' title='Editar'><i class="fas fa-edit"></i></a>
                                  </td>
                             </tr>
                             {/foreach}


                        </tbody>
                    </table>
                </div>
            {else}
                <div class="row justify-content-lg-center">
                    <div class="col-lg-12 text-center p-65">
                        <h6><i class="fas fa-book-open"></i></h6>
                        <h6>No se encontraron registro</h6>
                        <small>Para agregar un nuevo paquete da click en el botón (+) de la esquina superior derecha</small>
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
        <form action="/casablanca/deletePaquete" method="POST" onsubmit="return deletePaquete();">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar paquete</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="userId" name="id">
                ¿Estas seguro de que quieres eliminar el paquete "<b id="userName"></b>" ?
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
    function confirmDelete(id, name){       
        $('#userId').val(id);
        $('#userName').html(name);
        $('#deleteModal').modal('show');
    }
    
    function deletePaquete(){
        $('#btn-delete').prop('disabled',true);
        $('#btn-delete').html('<i class="fas fa-spin fa-spinner"></i> Eliminando');
    }
</script>