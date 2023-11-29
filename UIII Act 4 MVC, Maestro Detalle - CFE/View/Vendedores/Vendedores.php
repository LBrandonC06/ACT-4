<h1 class="page-header">Vendedores</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Vendedores&a=Nuevo">Nuevo Vendedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">ID Vendedor</th>
            <th style="width:120px;">Dueno</th>
            <th style="width:120px;">Energia</th>
            <th style="width:120px;">Iva</th>
            <th style="width:120px;">Fac_Periodo</th>
            <th style="width:120px;">DAP</th>
            <th style="width:120px;">Adeudo</th>
            <th style="width:120px;">Total</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_Medidor; ?></td>
            <td><?php echo $r->Dueno; ?></td>
            <td><?php echo $r->Energia; ?></td>
            <td><?php echo $r->Iva; ?></td>
            <td><?php echo $r->Fac_Periodo; ?></td>
            <td><?php echo $r->DAP; ?></td>
            <td><?php echo $r->Adeudo; ?></td>
            <td><?php echo $r->Total; ?></td>
            <td>
                <a href="?c=Vendedores&a=Crud&id_Medidor=<?php echo $r->id_Medidor; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Vendedores&a=Eliminar&id_Medidor=<?php echo $r->id_Medidor; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
