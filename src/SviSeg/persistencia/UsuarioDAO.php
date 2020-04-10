<?php

namespace SviSeg\persistencia;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use SviSeg\persistencia\AbstractDAO;
use SviSeg\entidades\Usuario;

class UsuarioDAO extends AbstractDAO{

public function __construct() {
		parent::__construct('SviSeg\entidades\Usuario');
	}


}
