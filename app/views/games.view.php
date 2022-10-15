<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class GamesView {
private $smarty;


public function __construct() {
//Instancio Smarty en el constructor
$this->smarty = new Smarty();}

//Funcion que muestra los juegos cargados en la BD y formulario para agregar el juego. Con los parametros de $games para poder mostrarlos a todos y $Generos para poder tener el select con cada uno de los generos mostrados.
function showGames ($games,$generos) {
$this->smarty->assign('generos', $generos);
$this->smarty->assign('games', $games);
$this->smarty->display('templates/Insertar_Mostrar_Juego.tpl');}

//Funcion que muestra el juego especifico traido en $Game ya con su ID Propia.
function ShowGame ($game){
$this->smarty->assign('game', $game);
$this->smarty->display('templates/MostrarJuego.tpl');}

//Funcion que muestra el formulario para editar un juego. Con parametros $Game propio del juego seleccionado por la ID y $Generos para nuevamente poder mostrar todos los generos en un
function showEdit($game,$generos){
$this->smarty->assign('game', $game);
$this->smarty->assign('generos', $generos);
$this->smarty->display('templates/form_edit_juego.tpl');
}


































}