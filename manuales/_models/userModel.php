<?php
class userModel{
public function __construct(){

   $this->db = new c_MySQLi;
   

}


public function m_consulta($tipo, $param= '', $obj = 1 ){
   switch ($tipo) {
      case 0: // trae select de todo los usuarios
         $sql = 'SELECT * FROM manuales';
         break;
      
      case 1: // consulta medidas de usario 
         $cond = $this->m_extraeSQL($param);
         $sql =  
         'SELECT
            M.nombre,
            I.id_item, 
            I.titulo, 
            MO.id_modal, 
            MO.titulo_modal, 
            MO.titulo_btn, 
            MO.descripcion,
            A.titulo, 
            A.btn, 
            A.descripcion, 
            A.img, 
            A.id_modal, 
            A.id_tipo,
            T.nombre, 
            MO.url, 
            A.id_anexo, 
            M.id_manual,
            M.requir,
            M.descrip,
            M.url_doc
         FROM manuales M
          LEFT JOIN users U USING(id_user)
          LEFT JOIN items I USING(id_manual)
          LEFT JOIN modals MO USING(id_item)
          LEFT JOIN anexos A USING(id_modal)
          LEFT JOIN tipos T USING(id_tipo)
         '
         .$cond;

         break;
      case 2: // trae select de lenguajes
         $sql = 'SELECT * FROM lenguajes';
         break;

     
            //
      
      default:
         die('error no ha seleccionado tipo cons');
         break;
   }
      switch ($obj) {
         case 1:
            return $this->db->m_trae_array($sql)->rows;
            break;
         case 2:
            return $this->db->m_trae_array($sql,2);
            break;
         case 3:
            return $this->db->m_trae_array($sql);
            break;
         
         default:
            return $this->db->m_trae_array($sql, 2);
            break;
      }
   }

   public function m_extraeSQL($param){
      return  ( isset($param) && is_array($param) && !empty($param))? implode(' ', $param) : '';
   }


public function m_update($param ){
// UPDATE quotes SET date_quote ='2021-03-18',  status ="A" ;
  // return 'UPDATE '.$param[0].' SET '.$param[1];
  $sql = 'UPDATE '.$param[0].' SET '.$param[1];
 
  
}


public function m_ejecuta($param){
   return $this->db->m_ejecuta($param);
}


public function m_delete($param){
   return 'DELETE  FROM '.$param[0].' WHERE '.$param[1].' = '.$param[2];
}

public function m_insert($param, $id_No_Default = null){
   if(isset($id_No_Default)){
      return 'INSERT INTO '.$param[0]. ' VALUES ("'.implode('","' ,$param[1]).'")';
   }else{
      return 'INSERT INTO '.$param[0]. ' VALUES ( DEFAULT, "'.implode('","' ,$param[1]).'")';
   }
}

public function m_ultimo_id($param){
   $obj = ($this->db->m_ejecuta('SELECT MAX('.$param[0].') from '.$param[1].''));
   $i = 0;
   while ($result = mysqli_fetch_row($obj)) {
      $data[0] = $result;
      $i++;
   }
   return $data[0][0];
}

}

?>