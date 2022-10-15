<?php

require_once './app/models/games.model.php';
require_once './app/views/games.view.php';
require_once './app/models/genero.model.php';
require_once './app/views/genero.view.php';
require_once './app/helpers/user.helper.php';


class GenerosController {
public function __construct() {
$this->modelGame = new GamesModel();
$this->viewGame = new GamesView();
$this->modelGenero = new GeneroModel(); 
$this->viewGenero = new GeneroView();
$this->userHelper = new UserHelper();

if(strnatcmp(phpversion(), '5.4.0') >= 0) {
if (session_status() == PHP_SESSION_NONE) {
session_start();} 
else if(session_id() == ''){
session_start();}}} 

//Funcion del buscador me trae del input y del buscador de la BD los resultados.
function ShowResults(){
if(isset($_POST["busqueda"]) && !empty($_POST["busqueda"])){
$resultados = $this->modelGenero->FindMatch($_POST["busqueda"]);
$this->viewGenero->ShowResultados($resultados); } }

// Funcion que me trae el genero con su ID y su formulario para editarlo.
function ShowEditGen($Genero_ID){
$this->userHelper->checkLoggedIn();
$genero = $this->modelGenero->getGEN($Genero_ID);
$this->viewGenero->ShowGenEdit($genero); }
        
//Funcion que me muestra un unico genero con su respectiva ID.
function ShowGeneroRouter($Genero_ID){
$genero = $this->modelGenero->getGEN($Genero_ID);
$this->viewGenero->ShowGenero($genero); }


// Funcion que toma los valores del input de Generos, y me los guarda en unas variables para despues pasarselas a la BD y que las inserte. Trim agregado para que no se pueda agregar espacios en blanco.
function addGEN() {
$this->userHelper->checkLoggedIn();
if(isset($_POST['Generos']) && isset($_POST['Edad']) && trim($_POST['Edad'])){
if(!empty($_POST['Generos']) && !empty($_POST['Edad']) && trim($_POST['Generos'])){
if(!empty($_POST['Particularidad']) && !empty($_POST['Particularidad']) && trim($_POST['Particularidad'])){
$GeneroG = $_POST['Generos'];
$EdadG = $_POST['Edad'];
$Particularidad = $_POST['Particularidad'];
$id = $this->modelGenero->InsertGenero($GeneroG,$EdadG,$Particularidad);
header("Location: " . BASE_URL);}}}
else {header("Location: " . BASE_URL);}
}
    
// Funcion que te elimina el genero solo si no esta siendo utilizado en la tabla principal de juegos. Muestra error.
function deleteGEN($Genero_ID){
$this->userHelper->checkLoggedIn();
$contador = $this->modelGenero->contadorCategoriaenJuegos($Genero_ID);
if ($contador > 0){
$this->viewGenero->error();} 
else{$this->modelGenero->DeleteGeneroByIDGen($Genero_ID);
header("Location: " . BASE_URL);}}

// Funcion que toma los valores del Input y los pasa como parametros a la funcion que los updatea a la base de datos. Trim agregado para que no se pueda agregar espacios en blanco.
function EditGeneroBD(){
$this->userHelper->checkLoggedIn();
if (!empty($_POST['Genero']) && isset($_POST['Genero'])&& trim($_POST['Genero'])){
if (!empty($_POST['Edad']) && isset($_POST['Edad']) && trim($_POST['Edad'])){
if (!empty($_POST['Particularidad']) && isset($_POST['Particularidad'])&& trim($_POST['Particularidad'])){    
$this->modelGenero->UpdateGeneroBD($_POST['Genero_ID'], $_POST['Genero'],$_POST['Edad'],$_POST['Particularidad']);
header("Location: " . BASE_URL);}}}
else {header("Location: " . BASE_URL);}}






}