
 <!-- Page Heading -->

    <div class="row">
        <div class="col-lg-6">
              <h5 class="padding-left" >Categorías</h5>              
        </div>
        <div class="col-lg-6">
           <a class="btn btn-warning float-right margin-right " href="/casablanca/newCategory"><i class="fas fa-plus"></i> Nueva Categoría</a>
        </div>
    </div>


<br>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Listado de categorías</h6>
        </div>
        <div class="card-body">
            {if is_array($list) and $list|@count > 0}
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Estatus</th>
                                <th>Fecha de creación</th>
                                <th>Última modificación</th>
                                <th class='text-center' style="min-width:70px"><i class='fa fa-cog'></i></th>
                            </tr>
                        </thead>

                        <tbody>
                             {foreach name=categories from=$list item=category}
                             <tr>
                                 <td>{$category.category_id}</td>
                                 <td class='text-center'> <img class="rounded-circle" style="width: 50px;height: 50px" alt="100x100" src="../casablanca/backend/category/files/{if $category.imagen_path != ''}{$category.imagen_path}{else}no-image.png{/if}"
                                         data-holder-rendered="true"></td>
                                 <td>{$category.name}</td>
                                 <td>{if $category.is_active == 0}<span class='badge badge-warning'>Inactivo</span>
                                     {elseif $category.is_active == 1}<span class='badge badge-success'>Activo</span>
                                     {elseif $category.is_active == 2}<span class='badge badge-danger'>Eliminado</span>
                                     {/if}</td>
                                 <td>{$category.created_at}</td>                            
                                 <td>{$category.updated_at}</td>                            

                                 <td style="min-width:70px">
                                    <a class="btn btn-sm btn-danger btn-config" onclick="confirmDelete('{$category.category_id}', '{$category.name}');" title='Eliminar' ><i class="fas fa-trash"></i></a>
                                    <a class="btn btn-sm btn-dark btn-config" href='/casablanca/category-edit/{$category.category_id}' title='Editar'><i class="fas fa-edit"></i></a>
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
                        <small>Para agregar una nueva categoría da click en el botón (+) de la esquina superior derecha</small>
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
        <form action="/casablanca/deleteCategory" method="POST" onsubmit="return deleteCategory();">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar categoría</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="userId" name="id">
                ¿Estas seguro de que quieres eliminar la categoría "<b id="userName"></b>" ?
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
    
    function deleteCategory(){
        $('#btn-delete').prop('disabled',true);
        $('#btn-delete').html('<i class="fas fa-spin fa-spinner"></i> Eliminando');
    }
</script>