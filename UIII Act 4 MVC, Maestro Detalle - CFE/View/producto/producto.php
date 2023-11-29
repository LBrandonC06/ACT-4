<h1 class="page-header">Productos </h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Vendedores&a=Nuevo">Nuevo Proveedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">id_Medidor</th>
            <th style="width:120px;">CodigoPostal</th>
            <th style="width:120px;">Colonia</th>
            <th style="width:120px;">Calle</th>
            <th style="width:120px;">N_Ext</th>
            <th style="width:120px;">N_Int</th>
            <th style="width:120px;">Nombre</th>
            <th style="width:120px;">Telefono</th>
            <th style="width:120px;">Id Tarifa</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_Medidor; ?></td>
            <td><?php echo $r->CodigoPostal; ?></td>
            <td><?php echo $r->Colonia; ?></td>
            <td><?php echo $r->Calle; ?></td>
            <td><?php echo $r->N_Ext; ?></td>
            <td><?php echo $r->N_Int; ?></td>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Telefono; ?></td>
            <td><?php echo $r->id_Vendedor; ?></td>
            <td>
                <a href="?c=producto&a=Crud&id_Medidor=<?php echo $r->id_Medidor; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&id_Medidor=<?php echo $r->id_Medidor; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
