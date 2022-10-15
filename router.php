<?php
require_once './app/controllers/games.controller.php';
require_once './app/controllers/generos.controller.php';
require_once './app/controllers/user.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; 
if (!empty($_GET['action'])) {
$action = $_GET['action'];}

$params = explode('/', $action);


// Tabla de ruteo
switch ($params[0]) {
case 'login':
    $UserController = new UserController();
    $UserController->showFormLogin();
    break;
case 'validate':
    $UserController = new UserController();
    $UserController->validateUser();
    break;
case 'logout':
    $UserController = new userController();
    $UserController->logout();
    break;
case 'home':
    $GamesController = new GamesController();
    $GamesController->Show();
    break;
case 'add':
    $GamesController = new GamesController();
    $GamesController->addGame();
    break;
case 'addgen':
    $GeneroController = new GenerosController();
    $GeneroController->addGEN();
    break;    
case 'delete':
    $GamesController = new GamesController();
    $ID_Juego = $params[1];
    $GamesController->deleteGame($ID_Juego);
    break;
case 'deleteGEN':
    $GeneroController = new GenerosController();
    $Genero_ID = $params[1];
    $GeneroController->deleteGEN($Genero_ID);
    break;    
    case 'edit': 
    $GamesController = new GamesController();
    $GamesController->editGame($params[1]);
     break; 
    case 'editado':
    $GamesController = new GamesController();
    $GamesController->EditGameBD();
    break;
case 'mostrargeneros':
    $GeneroController = new GenerosController();
    $GeneroController->ShowResults();
    break;   
case 'juego':
    $GamesController = new GamesController();
    $GamesController->ShowGameRouter($params[1]);
    break;  
case 'editGEN':
    $GeneroController = new GenerosController();
    $GeneroController->ShowEditGen($params[1]);
    break;        
case 'genero':
    $GeneroController = new GenerosController();
    $GeneroController->ShowGeneroRouter($params[1]);
    break;    
case 'editadogen':
    $GeneroController = new GenerosController();
    $GeneroController->EditGeneroBD();    
default:
    echo('404 Page not found');
    break;
}
