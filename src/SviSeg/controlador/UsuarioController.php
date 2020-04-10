<?php

namespace SviSeg\controlador;

use  SviSeg\persistencia\UsuarioDAO;
use  SviSeg\entidades\Usuario;
use SviSeg\controlador\AbstractController;

class UsuarioController extends AbstractController {

	public function __construct() {
    parent::__construct(new UsuarioDAO ());
	}


	public function insert($json){
    $user = new Usuario($json->id,$json->nome,$json->email,$json->senha,$json->avatar,$json->dt_acesso,$json->perfil,$json->ativo);
    $this->getDao()->insert ( $user );
    return ["mensagem"=>"Usuario inserido com sucesso"];
	}
	
	public function update($id, $json){
		
	}
	public function delete($id){
		
	}

	public function retDados(){



       $connect = mysqli_connect("localhost","root","solution","ecocheck");

		$sql = "Select id,nome,email,avatar,dt_acesso,perfil,ativo From Usuario";

/*
		$result = mysqli_query($connect, $sql);
  
		  $data = array();
		  while ($row = mysqli_fetch_assoc($result)){
		      $data[] = $row;
		  }
		  echo json_encode($data);
		  
        } catch (mysqli_sql_exception $e) { // Failed to connect? Lets see the exception details..
            echo "MySQLi Error Code: " . $e->getCode() . "<br />";
            echo "Exception Msg: " . $e->getMessage();
            exit(); // exit and close connection.
        }

       mysqli_close($connect);
*/
	
		$connect = mysqli_connect("localhost","root","solution","ecocheck");

		$connect->set_charset("utf8");

//		mysqli_set_charset($connect,"utf8mb4");

		$sql = "Select * From Usuario";

		$result = mysqli_query($connect, $sql);


      
		$json_array = array();

		while($row = mysqli_fetch_assoc($result))
		{
//			$json_array[] = utf8ize($row);
			$json_array[] = $row;
		}

		//print_r($json_array);
//		print_r(json_encode($json_array, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
		echo json_encode($json_array, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        
 		mysqli_close($connect);
	

		/*
		echo '<pre>';
		print_r($json_array);
		echo '</pre>';
		*/

		#return $json_array;
	}


}
