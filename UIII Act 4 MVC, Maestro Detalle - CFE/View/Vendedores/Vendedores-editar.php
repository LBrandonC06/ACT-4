<h1 class="page-header">
    <?php echo $pvd->id_Medidor != null ? $pvd->Dueno : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=vendedores">Vendedores</a></li>
  <li class="active"><?php echo $pvd->id_Medidor != null ? $pvd->Dueno : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-vendedores" action="?c=vendedores&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_Medidor" value="<?php echo $pvd->id_Medidor; ?>" />

    <div class="form-group">
        <label>Dueno del vendedor</label>
        <input type="text" name="Dueno" value="<?php echo $pvd->Dueno; ?>" class="form-control" placeholder="Ingrese Dueno del vendedor" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Energia</label>
        <input type="text" name="Energia" value="<?php echo $pvd->Energia; ?>" class="form-control" placeholder="Ingrese  los Energia del vendedor" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Iva</label>
        <input type="text" name="Iva" value="<?php echo $pvd->Iva; ?>" class="form-control" placeholder="Ingrese Iva vendedor" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Fac_Periodo</label>
        <input type="text" name="Fac_Periodo" value="<?php echo $pvd->Fac_Periodo; ?>" class="form-control" placeholder="Ingrese Fac_Periodo vendedor" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>DAP</label>
        <input type="text" name="DAP" value="<?php echo $pvd->DAP; ?>" class="form-control" placeholder="Ingrese DAP vendedor" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Adeudo</label>
        <input type="text" name="Adeudo" value="<?php echo $pvd->Adeudo; ?>" class="form-control" placeholder="Ingrese Adeudo vendedor" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Total</label>
        <input type="text" name="Total" value="<?php echo $pvd->Total; ?>" class="form-control" placeholder="Ingrese Total vendedor" data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-vendedores").submit(function(){
            return $(this).validate();
        });
    })
</script>
