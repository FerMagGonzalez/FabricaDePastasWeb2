<?php

  class LogingController extends Controller
  {

    function __construct()
    {
      $this->view = new indexView();
    }

    public function MostrasIndex()
    {
      $this->view->mostrarIndex();
    }

    function RetornarContenido($contenido)
    {
      $ruta = "templates/" . $contenido . ".tpl";
      return $this->view->mostrarTPL($ruta);
    }

  }

?>