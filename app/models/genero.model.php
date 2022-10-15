<?php


class GeneroModel {

private $db;
// Asigno en el constructor la apertura de la BD.
public function __construct() {
$this->db = new PDO('mysql:host=localhost;'.'dbname=tpe_especial;charset=utf8','root','');}

// Funcion que trae todos los generos.
public function getALLGeneros(){
$query = $this->db->prepare('SELECT * from generos');
$query->execute();
$generos=$query->fetchAll(PDO::FETCH_OBJ);    
return $generos;}

//Funcion que chequea si existe el genero en la base de datos.
function ExistsGeneroInBD($GeneroG){
$query = $this->db->prepare('SELECT * from generos WHERE Genero = ?');
$query->execute([$GeneroG]);    
$ExisteGenero = $query->fetchAll(PDO::FETCH_OBJ);
return $ExisteGenero;}

//Funcion que inserta en la BD el genero ingresado por el usuario si NO EXISTE en la BD.
function InsertGenero($GeneroG,$EdadG,$Particularidad) {
$existe = $this->ExistsGeneroInBD($GeneroG);
if(!$existe) {  
$query = $this->db->prepare('INSERT INTO generos (Genero,Edad,Particularidad) VALUES (?,?,?)');
$query->execute([$GeneroG,$EdadG,$Particularidad]);
return $this->db->lastInsertId();}}    

//Funcion que Elimina el genero a traves de su respectiva ID.
function DeleteGeneroByIDGen($Genero_ID){
$query =$this->db->prepare('DELETE FROM generos WHERE Genero_ID = ?');
$query->execute([$Genero_ID]);}

//Funcion que a traves de su ID trae el genero que le corresponda de la BD.
function getGEN($Genero_ID){
$query=$this->db->prepare('SELECT generos.Genero_ID, generos.Genero, generos.Edad, generos.Particularidad FROM generos WHERE Genero_ID= ?');
$query->execute(array($Genero_ID));
$genero = $query->fetch(PDO::FETCH_OBJ);
return $genero;}

//Funcion que edita en la base de datos a traves de su ID.
function UpdateGeneroBD ($Genero_ID,$Genero,$Edad,$Particularidad){
$query = $this->db->prepare("UPDATE generos SET Genero=?,Edad=?,Particularidad=? WHERE Genero_ID =?");
$query->execute(array($Genero,$Edad,$Particularidad,$Genero_ID));}

//Funcion que busca en la base de datos lo ingresado por el usuario y devuelve segun lo que haya escrito.          
function FindMatch($busqueda){
$query = $this->db->prepare('SELECT juegos.*, generos.* FROM juegos JOIN generos ON juegos.Genero_ID = generos.Genero_ID WHERE generos.Genero LIKE ?');
$query->execute(["%${busqueda}%"]);
$resultados = $query->fetchAll(PDO::FETCH_OBJ);
return $resultados;}

//Funcion que cuenta si hay algun genero en uso en la tabla de juegos. (Hecho para el borrar Genero)
function contadorCategoriaenJuegos($Genero_ID){
$sentencia = $this->db->prepare("SELECT count(*) as contaje FROM juegos WHERE Genero_ID = ?");
$sentencia->execute([$Genero_ID]);
$contador = $sentencia->fetch(PDO::FETCH_OBJ);
return $contador->contaje;}


}
