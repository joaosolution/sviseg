<?php
namespace SviSeg\entidades;

 use SviSeg\entidades\Entidade;

/**
 * @Entity
 * @Table(name="usuario")
 */
class Usuario{


  /**
  *	@var integer @Id
  *      @Column(name="id", type="integer")
  *      @GeneratedValue(strategy="AUTO")
  */
private $id;


/** @Column(type="string", length=100, nullable=true) */
private $nome;

/** @Column(type="string", length=45, nullable=true) */
private $email;

/** @Column(type="string", length=45, nullable=true) */
private $senha;


/**
 * @var @Column(type="text", length=256, nullable=true)
 */

private $avatar;

/**
 *
 * @var string @Column(type="datetime")
 */
private $dt_acesso;


/**
 *
 * @var string @Column(type="string", length=2)
 */
private $perfil;


/**
 *
 * @var string @Column(type="integer")
 */
private $ativo;

public function __construct($id = 0,$nome= "" ,$email= "" ,$senha= "" ,$avatar= "" ,$dt_acesso = "0000-00-00 00:00:00",$perfil= "" ,$ativo = 0){
$this->id = $id;
$this->nome = $nome;
$this->email = $email;
$this->senha = $senha;
$this->avatar = $avatar;
$this->dt_acesso = $dt_acesso;
$this->perfil = $perfil;
$this->ativo = $ativo;

}

public static function construct($array){
$obj = new Usuario();
$obj->setId( $array['id']);
$obj->setNome( $array['nome']);
$obj->setEmail( $array['email']);
$obj->setSenha( $array['senha']);
$obj->setAvatar( $array['avatar']);
$obj->setDt_acesso( $array['dt_acesso']);
$obj->setPerfil( $array['perfil']);
$obj->setAtivo( $array['ativo']);
return $obj;

}

public function getId(){
return $this->id;
}

public function setId($id){
 $this->id=$id;
}

public function getNome(){
return $this->nome;
}

public function setNome($nome){
 $this->nome=$nome;
}

public function getEmail(){
return $this->email;
}

public function setEmail($email){
 $this->email=$email;
}

public function getSenha(){
return $this->senha;
}

public function setSenha($senha){
 $this->senha=$senha;
}

public function getAvatar(){
return $this->avatar;
}

public function setAvatar($avatar){
 $this->avatar=$avatar;
}

public function getDt_acesso(){
return $this->dt_acesso;
}

public function setDt_acesso($dt_acesso){
 $this->dt_acesso=$dt_acesso;
}

public function getPerfil(){
return $this->perfil;
}

public function setPerfil($perfil){
 $this->perfil=$perfil;
}

public function getAtivo(){
return $this->ativo;
}

public function setAtivo($ativo){
 $this->ativo=$ativo;
}
public function equals($object){
if($object instanceof Usuario){

if($this->id!=$object->id){
return false;

}

if($this->nome!=$object->nome){
return false;

}

if($this->email!=$object->email){
return false;

}

if($this->senha!=$object->senha){
return false;

}

if($this->avatar!=$object->avatar){
return false;

}

if($this->dt_acesso!=$object->dt_acesso){
return false;

}

if($this->perfil!=$object->perfil){
return false;

}

if($this->ativo!=$object->ativo){
return false;

}

return true;

}
else{
return false;
}

}
public function toString(){

 return "  [id:" .$this->id. "]  [nome:" .$this->nome. "]  [email:" .$this->email. "]  [senha:" .$this->senha. "]  [avatar:" .$this->avatar. "]  [dt_acesso:" .$this->dt_acesso. "]  [perfil:" .$this->perfil. "]  [ativo:" .$this->ativo. "]  " ;
}



 public function toArray(){
   return [
  "id"=>$this->id,
  "nome"=>$this->nome,
   "email"=>$this->email,
   "avatar"=>$this->avatar,
   "dt_acesso"=>$this->dt_acesso,
   "perfil"=>$this->perfil,
   "ativo"=>$this->ativo];
 }

 


}
