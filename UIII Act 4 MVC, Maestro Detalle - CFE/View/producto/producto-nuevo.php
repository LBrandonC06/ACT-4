<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=producto">Productos</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-producto" action="?c=producto&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Código Producto</label>
      <input type="text" name="id_Medidor" value="<?php echo $prod->id_Medidor; ?>" class="form-control" placeholder="Ingrese Código Producto" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>CodigoPostal</label>
        <input type="text" name="CodigoPostal" value="<?php echo $prod->CodigoPostal; ?>" class="form-control" placeholder="Ingrese Marca del producto" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Colonia</label>
        <input type="text" name="Colonia" value="<?php echo $prod->Colonia; ?>" class="form-control" placeholder="Ingrese nombre producto" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Calle</label>
        <input type="text" name="Calle" value="<?php echo $prod->Calle; ?>" class="form-control" placeholder="Ingrese precio producto" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>N_Ext</label>
        <input type="text" name="N_Ext" value="<?php echo $prod->N_Ext; ?>" class="form-control" placeholder="Ingrese cantidad producto" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>N_Int</label>
        <input type="text" name="N_Int" value="<?php echo $prod->N_Int; ?>" class="form-control" placeholder="Ingrese información nutrimental" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $prod->Nombre; ?>" class="form-control" placeholder="Ingrese porción por producto" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="Telefono" value="<?php echo $prod->Telefono; ?>" class="form-control" placeholder="Ingrese Telefono por producto" data-validacion-tipo="requerido|min:2" />
    </div>

    <div class="form-group">
        <label>Id Tarifa</label>
        <input type="text" name="id_Vendedor" value="<?php echo $prod->id_Vendedor; ?>" class="form-control" placeholder="Ingrese ID vendedor" data-validacion-tipo="requerido|min:3" />
    </div>


    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
