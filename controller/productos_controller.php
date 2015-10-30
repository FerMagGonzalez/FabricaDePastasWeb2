<?php
  include_once 'view/index_view.php';
  include_once 'model/productos_model.php';

  class productoController
  {

    private $view;
    private $model;

    function __construct()
    {
      $this->view = new productoView();
      $this->model = new productoModel();
    }

    public function MostrasIndex()
    {
      $this->view->mostrarIndex();
    }

    function RetornarContenido($contenido)
    {
      $ruta = "templates/" . $contenido . ".tpl";
      return $this->view->mostrarTPL($ruta,$this->model->getProductos());
    }

    function agregarProducto()
    {
      if(isset($_REQUEST['product'])&&($_REQUEST['product'] != '')&&isset($_REQUEST['price'])&&($_REQUEST['price'] != '')&&isset($_REQUEST['category'])){
        $this->model->agregarProducto($_REQUEST['product'], $_REQUEST['price'],$_REQUEST['category']);
      }
      else{
        $this->view->mostrarError('El producto que intenta agregar esta vacio');
      }
      $this->MostrasIndex();
    }

    function borrarProducto(){
      if(isset($_REQUEST['id_producto'])){
        $this->model->borrarProducto($_REQUEST['id_producto']);
      }
      else{
        $this->view->mostrarError('El producto que intenta borrar no existe');
      }
      $this->MostrasIndex();
    }

  }

?>
