<?php
//Requires necesarios
require_once './app/models/games.model.php';
require_once './app/views/games.view.php';
require_once './app/models/genero.model.php';
require_once './app/views/genero.view.php';
require_once './app/helpers/user.helper.php';

class GamesController {
private $modelGame;
private $viewGame;
private $modelGenero;
private $viewGenero;
private $userHelper;

public function __construct() {
$this->modelGame = new GamesModel();
$this->viewGame = new GamesView();
$this->modelGenero = new GeneroModel(); 
$this->viewGenero = new GeneroView();
$this->userHelper = new UserHelper();
if(strnatcmp(phpversion(), '5.4.0') >= 0) {
    if (session_status() == PHP_SESSION_NONE) {
     session_start();
    }else if(session_id() == ''){
     session_start();}}
}

//Funcion que trae todos los Juegos/Generos y los muestra en el Index.
public function Show() {
$generostotal = $this->modelGenero->getALLGeneros();
$gamestotal = $this->modelGame->getAllGames();
$this->viewGame->ShowGames($gamestotal,$generostotal);
$this->viewGenero->ShowGeneros($generostotal); }

//Funcion que me trae un unico juego con su ID y lo muestra.
function ShowGameRouter($ID_Juego) {
$game = $this->modelGame->getGame($ID_Juego);
$this->viewGame->ShowGame($game); }

// Funcion que toma los valores del input y los guarda en una variable para despues pasarselos a la BD y que los inserte en ella. Trim agregado para que no se pueda agregar espacios en blanco.
function addGame() {
$this->userHelper->checkLoggedIn();
if(isset($_POST['Titulo']) && isset($_POST['Fecha']) && isset($_POST['Precio']) && isset($_POST['Descripcion']) && trim($_POST['Titulo']) && trim($_POST['Fecha'])){
if(!empty($_POST['Titulo']) && !empty($_POST['Fecha']) && !empty($_POST['Precio']) && !empty($_POST['Descripcion']) && trim($_POST['Precio'])&& trim($_POST['Descripcion'])){ 
$nombre = $_POST['Titulo'];
$fecha = $_POST['Fecha'];
$precio = $_POST['Precio'];
$Descripcion = $_POST['Descripcion'];
$genero =$_POST['Genero_ID'];
$id = $this->modelGame->InsertGame($nombre,$fecha,$precio,$Descripcion,$genero);
header("Location: " . BASE_URL);}}
else {header("Location: " . BASE_URL);}
}

// Funcion que elimina el juego de su respectiva ID.
function deleteGame($ID_Juego) {
$this->userHelper->checkLoggedIn();
$this->modelGame->DeleteGameByID($ID_Juego);
header("Location: " . BASE_URL);}

// Funcion que trae el juego y muestra el formulario para editarlo. Ademas trae todos los generos para poder utilizarlo en el select.
function editGame($ID_Juego){
$this->userHelper->checkLoggedIn();
$game = $this->modelGame->getGame($ID_Juego);
$generos = $this->modelGenero->getALLGeneros();
$this->viewGame->showEdit($game,$generos);}

// Funcion que toma los valores del Input y los pasa como parametros a la funcion que los updatea a la base de datos. Trim agregado para que no se pueda agregar espacios en blanco.
function EditGameBD(){
if(isset($_POST['Nombre']) && isset($_POST['Precio']) && isset($_POST['Fecha']) && isset($_POST['Descripcion']) && trim($_POST['Precio'])&& trim($_POST['Descripcion'])){
if(!empty($_POST['Nombre']) && !empty($_POST['Precio']) && !empty($_POST['Fecha']) && !empty($_POST['Descripcion']) && trim($_POST['Nombre']) && trim($_POST['Fecha'])){ 
$this->modelGame->UpdateGameBD($_POST['ID_Juego'], $_POST['Nombre'],$_POST['Precio'],$_POST['Fecha'],$_POST['Descripcion'],$_POST['Genero_ID']);
header("Location: " . BASE_URL);}}
else {header("Location: " . BASE_URL);}}
}









