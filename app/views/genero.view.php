<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class GeneroView {
private $smarty;   
//Instancio Smarty en el constructor

public function __construct() {
$this->smarty = new Smarty();} 

//Funcion que muestra todos los generos y ademas el formulario para insertar uno nuevo.
function showGeneros($generos){
$this->smarty->assign('generos', $generos);
$this->smarty->display('Insertar_Mostrar_Genero.tpl');}

//Funcion que muestra los resultados del filtro/buscador.
function ShowResultados($resultados){
$this->smarty->assign('resultados',$resultados);
$this->smarty->display('templates/Resultados_Generos.tpl');}
    
//Funcion que muestra el formulario para editar un genero especifico traido a traves de su ID.
function ShowGenEdit($genero){
$this->smarty->assign('genero', $genero);
$this->smarty->display('form_edit_genero.tpl');}
       
//Funcion que muestra el genero especifico traido por una ID.
function ShowGenero($genero){ 
$this->smarty->assign('genero', $genero);
$this->smarty->display('MostrarGenero.tpl');}

//Funcion que muestra el error que se produce al querer eliminar un Genero utilizado en la tabla principal.           
function error(){
$this->smarty->assign('Error','error');
$this->smarty->display('error.tpl');
}

 }