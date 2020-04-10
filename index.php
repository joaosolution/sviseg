
<?php

header('Content-type: text/html; charset=iso-8859-1');
//header("Content-type: text/html; charset=utf-8"); 
ini_set('default_charset','UTF-8');
$loader = require __DIR__ . '/vendor/autoload.php';

use SviSeg\entidades\Usuario;
use SviSeg\entidades\Pedido;
use SviSeg\controlador\UsuarioController;
use SviSeg\controlador\PedidoController;

$app = new \Slim\Slim ();


// Exibe todos os erros PHP (see changelog)
error_reporting(E_ALL);

// Exibe todos os erros PHP
error_reporting(-1);

$usuarioCtrl = new UsuarioController();
$pedidoCtrl = new PedidoController();

$app->get ( '/', function () {
	echo json_encode ( [
			"api" => "Venda de Agua novo",
			"version" => "1.0.0"
	] );
} );


$app->get ( '/usuario', function () use  ($usuarioCtrl){
//    echo json_encode($usuarioCtrl->retDados());
	$usuarioCtrl->retDados();
});

/*
$app->get ( '/usuario(/(:id))', function ($id = null) use  ($usuarioCtrl){
    echo json_encode($usuarioCtrl->get($id));
});
*/


$app->post ( '/usuario(/)', function () use  ($usuarioCtrl){
	$app = \Slim\Slim::getInstance ();
	$json = json_decode ( $app->request ()->getBody ());
	echo json_encode ($usuarioCtrl->insert( $json ) );

} );

$app->put ( '/usuario(/)', function () {
echo "PUT\n";
} );

$app->delete ( '/usuario/:id', function () {
	echo "DELETE\n";
} );

$app->get ( '/pedido(/(:id))', function ($id = null) use  ($pedidoCtrl){
echo json_encode($pedidoCtrl->get($id));
});

$app->post ( '/pedido(/)', function () use  ($pedidoCtrl){
	$app = \Slim\Slim::getInstance ();
	$json = json_decode ( $app->request ()->getBody ());
	echo json_encode ($pedidoCtrl->insert( $json ) );

} );

$app->put ( '/pedido(/)', function () {
echo "PUT\n";
} );

$app->delete ( '/pedido/:id', function () {
	echo "DELETE\n";
} );

$app->run ();

function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}

	?>