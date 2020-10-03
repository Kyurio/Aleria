<?php

class routes extends control{

  public function __construct(){

    $this->SessionModelo = $this->modelo('session');

  }

  // abre el constructor principal de la app
  public function index(){

    $this->vista('pages/inicio');
  }

  //vuejs
  public function vuetest(){
    
    $this->vista('pages/vuetest');
  }

  // abre la pagina de conectos
  public function contacto(){

    $this->vista('pages/contacto');
  }

  // abre la intranet
  public function intranet(){

    $countMails = $this->CounterMail();
    $mailsReibicidos = $this->SelectMail();
    $productos = $this->SelectProductos();
    $all_redes = $this->SelectSocial();

    $datos = [

      'cantidad_de_mails' => $countMails,
      'correos_recibidos' => $mailsReibicidos,
      'productos' => $productos,
      'redes' => $all_redes,

    ];

    $this->vista('pages/intranet', $datos);
  }

  public function productos(){

    $this->vista('pages/productos');
  }

  // redirecciona a la pagina de error
  public function error($err = null){

    if (is_null($err)) {
      redireccionar('pages/index');
    }else {

      switch ($err) {
        case 404:
        $this->vista('error/404');
        break;

        case 403:
        $this->vista('error/403');
        break;

        case 500:
        $this->vista('error/500');
        break;

        default:
        redireccionar('pages/index');
        break;

      }

    }//end if


  }

  // grabar simulacion
  public function test(){

    $this->vista('pages/test');
  }

}//end class
?>
