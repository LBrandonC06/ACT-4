<?php
require_once 'model/producto.php';

class ProductoController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Productos();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new Productos();

        if(isset($_REQUEST['id_Medidor'])){
            $prod = $this->model->Obtener($_REQUEST['id_Medidor']);
        }

        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new Productos();

        require_once 'view/header.php';
        require_once 'view/producto/producto-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new Productos();

        $prod->id_Medidor = $_REQUEST['id_Medidor'];
        $prod->CodigoPostal = $_REQUEST['CodigoPostal'];
        $prod->Colonia = $_REQUEST['Colonia'];
        $prod->Calle = $_REQUEST['Calle'];
        $prod->N_Ext = $_REQUEST['N_Ext'];
        $prod->N_Int = $_REQUEST['N_Int'];
        $prod->Nombre = $_REQUEST['Nombre'];
        $prod->Telefono = $_REQUEST['Telefono'];
        $prod->id_Vendedor = $_REQUEST['id_Vendedor'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=producto');
    }

    public function Editar(){
        $prod = new Productos();

        $prod->id_Medidor = $_REQUEST['id_Medidor'];
        $prod->CodigoPostal = $_REQUEST['CodigoPostal'];
        $prod->Colonia = $_REQUEST['Colonia'];
        $prod->Calle = $_REQUEST['Calle'];
        $prod->N_Ext = $_REQUEST['N_Ext'];
        $prod->N_Int = $_REQUEST['N_Int'];
        $prod->Nombre = $_REQUEST['Nombre'];
        $prod->Telefono = $_REQUEST['Telefono'];
        $prod->id_Vendedor = $_REQUEST['id_Vendedor'];

        $this->model->Actualizar($prod);

        header('Location: index.php?c=producto');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_Medidor']);
        header('Location: index.php');
    }
}
