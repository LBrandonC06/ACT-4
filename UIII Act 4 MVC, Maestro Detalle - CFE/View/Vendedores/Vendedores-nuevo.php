<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Vendedores">Vendedores</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-Vendedores" action="?c=Vendedores&a=Guardar" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label>ID del vendedor</label>
    <input type="number" name="id_Medidor" class="form-control" value="<?php echo $pvd->id_Medidor; ?>" />
</div>

<div class="form-group">
    <label>Dueno del vendedor</label>
    <input type="text" name="Dueno" value="<?php echo $pvd->Dueno; ?>" class="form-control" placeholder="Ingrese Dueno del vendedor" />
</div>

<div class="form-group">
    <label>Energia</label>
    <input type="text" name="Energia" value="<?php echo $pvd->Energia; ?>" class="form-control" placeholder="Ingrese  los Energia del vendedor"  />
</div>

<div class="form-group">
    <label>Iva</label>
    <input type="text" name="Iva" value="<?php echo $pvd->Iva; ?>" class="form-control" placeholder="Ingrese Iva vendedor"   />
</div>

<div class="form-group">
    <label>Fac_Periodo</label>
    <input type="text" name="Fac_Periodo" value="<?php echo $pvd->Fac_Periodo; ?>" class="form-control" placeholder="Ingrese Fac_Periodo vendedor"   />
</div>

<div class="form-group">
    <label>DAP</label>
    <input type="text" name="DAP" value="<?php echo $pvd->DAP; ?>" class="form-control" placeholder="Ingrese DAP vendedor"   />
</div>

<div class="form-group">
    <label>Adeudo</label>
    <input type="text" name="Adeudo" value="<?php echo $pvd->Adeudo; ?>" class="form-control" placeholder="Ingrese Adeudo vendedor"   />
</div>

<div class="form-group">
    <label>Total</label>
    <input type="text" name="Total" value="<?php echo $pvd->Total; ?>" class="form-control" placeholder="Ingrese Total vendedor"   />
</div>


    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-Vendedores").submit(function(){
            return $(this).validate();
        });
    })
</script>
