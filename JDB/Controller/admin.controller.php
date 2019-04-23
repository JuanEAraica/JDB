<?php
include_once 'model/adminModel.php';

class AdminController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Admin();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/admin/admin.php';
        require_once 'view/footer.php';
    }
    
    public function Editar(){
        $alm = new Admin();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/admin/admin-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Registrar(){
        $alm = new Admin();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/admin/admin-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Admin();
        
        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Apellido = $_REQUEST['Apellido'];
        $alm->Correo = $_REQUEST['Correo'];
        $alm->Sexo = $_REQUEST['Sexo'];
        $alm->FechaNacimiento = $_REQUEST['FechaNacimiento'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}