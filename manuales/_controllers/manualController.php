<?php

// use Mpdf\Tag\Section;

class manualController extends Controller{
    private $db;
    private $param;
    //
    public function __construct(){
        $this->objM = $this->loadModel('userModel', 'userModel');
        $this->db   = new userModel;
        parent::__construct();
        $this->_view->setCss(array('bootstrap.min', 'mystyle'));
        $this->_view->setJs(['jquery-3.3.1.min','bootstrap.bundle.min','jquery-3.6.0.min']);
        $this->_view->setCss(['suneditor','fontawesomeLocal.min']);
        $this->_view->setJs(['suneditor.min','katex.min']);
    }
    //
    public function index(){

      // OJO CAMBIAR EN PRODUCCION 
      $_SESSION['id_usuario'] = 2;
      if(isset($_POST) &&  !empty($_POST)){
      
        //
        if(isset($_POST['a'])){
          switch ($_POST['a']) {
            case 'sMo': // inserta nuevo manual
              //$sql = 'INSERT INTO '
              if( !isset($error) && $this->capturaVacio($_POST['lenguaje']) ) $error = 'Seleccione lenguaje de programación para crear el manual';
              if( !isset($error) && $this->capturaVacio($_POST['nomM']) )     $error = 'El campo nombre es requerido para crear el manual ';
              if(!isset($error)){
                $sql = 'INSERT INTO 
                manuales (id_manual,     nombre,            requir, descrip, url_doc, id_lenguaje, insert_, update_, id_user) 
                VALUES    (
                  DEFAULT, "'.
                  $this->getSql('nomM').'", "'.
                  $this->getSql('reqM').'", "'.
                  $this->getSql('descM').'", "'.
                  $this->getSql('urlM').'", "'.
                  $this->getSql('lenguaje').'", "'.
                  date('Y-m-d H:i:s').'", "'.
                  date('Y-m-d H:i:s').'", "'.
                  $_SESSION['id_usuario'].'")';
                  $b                = $this->db->m_ejecuta($sql);
                  if($b){
                    
                  }else{
                    $error = 'Error a guardar manual';
                  }
              }else{
                $this->_view->error = $error;
              }

              if(!isset($_POST['manual'])) $_POST['manual']  = $this->db->m_ultimo_id(['id_manual','manuales']); // estop es para que consulte el id del manual que inserto una vez lo guarde
              break;
            case 'uI': 
              // Update item
              $sql  = 'UPDATE modals SET descripcion = "'.$_POST['obsAnt'].' '.$_POST['obs'].'" WHERE  modals.id_modal = '.$this->getSql('manual').'';
              $b = $this->db->m_ejecuta($sql);
              break;
            case 'sI': // Store Item
             
              $sql = 'INSERT INTO items  VALUES (DEFAULT,"'.$this->getSql('nameItem').'", "'.$this->getSql('manual').'")';
              $b = $this->db->m_ejecuta($sql);
              if($b){
                  // Pendiente redireccionar
              }
              break;
            case 'sT':
              if(empty($_POST['titleBtn']))                                                   $error = 'El campo titulo del boton es requerido';
              if(empty($_POST['titleModal']) && empty($_POST['url']) && empty($_POST['obs'])) $error = 'Tiene muchos campos vac�os ';
              // Store de tematica
              if(!isset($error)){
                $sql = 'INSERT INTO modals VALUES 
                (DEFAULT, "'.$this->getSql('titleModal').'" , "'.$this->getSql('titleBtn').'","'.$this->getSql('url').'","'.$this->getSql('obs').'", '.$this->getSql('id_modal').')';
                $b = $this->db->m_ejecuta($sql);
                if($b){

                }else{
                  $error = 'Error no registro';
                }

              }

              break;
            default:
              # code
              break;
          }
        }  
        $r = ($this->objM->m_consulta(1, ['WHERE M.id_manual = '.$this->getSql('manual') ] , 3    )     ); // donde el manula sea el seleccionado
        // datos general
        $this->_view->manual = [$r->row[16], $r->row[0], $r->row[17], $r->row[18], $r->row[19]];
        foreach($r->rows as $d){
          $g[$d[1].'|'.$d[2]] [$d[3].'|'.$d[5]][]= [ 
            $d[6],
            $d[16].'|'.$d[1].'|'.$d[3], 
            $d[7].'||'.$d[10],
            $d[14]
          ];  
        } 
      }
      //
      if(isset($error)) $this->_view->error = $error;
      $this->_view->data     =  $this->verificaResul($g);
      $this->_view->manuales =  $this->objM->m_consulta(0,'',2);
      $this->_view->lenguajes = $this->objM->m_consulta(2,'',2);
      $this->_view->renderizar('index', 1); 
    }


    public function dtItem(){
      Controller::ver($_POST);
      @session_start();
      if(isset( $_POST['id_modal']))$p[0] = 'WHERE id_modal = '.$this->getSql('id_modal').'';
      // Valida se hay update 
      if(isset($_POST['a'])){
        switch ($this->getSql('a')) {
          case 'update': 
            // Actualiza descripcion de un modal
            $sql  = 'UPDATE modals SET descripcion = "'.$_POST['obsAnt'].' '.$_POST['obs'].'" WHERE  modals.id_modal = '.$this->getSql('id_modal').'';
            $b = $this->db->m_ejecuta($sql);
            break;
          case 'createB': 
          //  Controller::ver($_POST,1,1);
            // Crea boton
            if( !isset($error) && empty($_POST['butonNam']) ) $error = 'Error el titulo de boton es requerido ';
            if( !isset($error) && empty($_POST['id_modal']) ) $error = 'Error el id del modal es requerido ';
            if(!isset($error)){
              $sql = 'INSERT INTO anexos (id_anexo, titulo, btn, descripcion, img, id_modal, id_tipo, insert_, update_, user_update) VALUES 
              (NULL, "Boton", "'.$this->getSql('butonNam').'", "btn", NULL, "'.$this->getSql('id_modal').'", "1", NULL, NULL, "1")';
              $b = $this->db->m_ejecuta($sql);
              $_SESSION['buton'] = [];
              $_SESSION['buton'][] = $this->db->m_ultimo_id(['id_anexo','anexos']);
              $_SESSION['buton'][] = $this->getSql('butonNam');
            }else{
              $this->_view->error = $error;
            }

            break;
          case 'subF': 
            // Actualiza foto copiada para DB
            if(isset($_FILES['foto']['error']) && $_FILES['foto']['error'] == 0 ){
              $destino = 'public/layout1/img/dev/'; // verificar si copio
              move_uploaded_file($_FILES['foto']['tmp_name'], $destino.'img'.$_SESSION['buton'][0].$_SESSION['buton'][1].'.jpg');
              $_FILES = null;
              $sql  = 'UPDATE anexos SET img = "'.'img'.$_SESSION['buton'][0].$_SESSION['buton'][1].'.jpg'.'" WHERE  anexos.id_anexo = '.$_SESSION['buton'][0].'';
              $b = $this->db->m_ejecuta($sql);
            }
            break;
            case 'rI':
              // Redirecciona a index 
              $this->redireccionar('manual');
              break;
          default:
          break;
        }
      } 
      //
      $r = ($this->objM->m_consulta(1, $p));
      foreach($r as $d){
        $this->_view->modal    = [$d[4], $d[6], $d[11] ];
        $this->_view->botons[] = [$d[8],  $d[10] , $d[15]] ;
      }
      $this->_view->renderizar('dtItem', 1);  
    }


}


