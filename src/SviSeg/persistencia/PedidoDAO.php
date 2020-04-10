<?php

namespace SviSeg\persistencia;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use SviSeg\entidades\Pedido;
use SviSeg\persistencia\AbstractDAO;
use SviSeg\persistencia\UsuarioDAO;

class PedidoDAO extends AbstractDAO{

public function __construct() {
		parent::__construct('SviSeg\entidades\Pedido');
	}
	

}
