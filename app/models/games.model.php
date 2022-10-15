<?php 

class GamesModel {

private $db;
// Asigno en el constructor la apertura de la BD.
public function __construct() {
$this->db = new PDO('mysql:host=localhost;'.'dbname=tpe_especial;charset=utf8','root','');}

//Funcion que trae todos los juegos y todos los generos para poder mostrar el genero.
function getAllGames() {
$query = $this->db->prepare('SELECT juegos.*, generos.* FROM juegos JOIN generos ON juegos.Genero_ID = generos.Genero_ID');
$query->execute();
$games = $query->fetchAll(PDO::FETCH_OBJ);
return $games;}

// Funcion que hace el INSERT a la base de datos a traves del formulario.
function InsertGame ($nombre,$fecha,$precio,$Descripcion,$genero) {
$query = $this->db->prepare('INSERT INTO juegos (Nombre,Fecha,Precio,Descripcion,Genero_ID) VALUES (?,?,?,?,?)');
$query->execute([$nombre,$fecha,$precio,$Descripcion,$genero]);
return $this->db->lastInsertId();}

//Funcion que elimina el juego en la BD con su respectiva ID
function DeleteGameByID ($ID_Juego) {
$query = $this->db->prepare('DELETE FROM juegos WHERE ID_Juego = ?');
$query->execute([$ID_Juego]);}

//Trae a traves de la ID el juego de la BD
function getGame($ID_Juego){
$query = $this->db->prepare( "SELECT juegos.ID_Juego, juegos.Nombre, juegos.Fecha, juegos.Precio, juegos.Descripcion, juegos.Genero_ID, generos.Genero FROM juegos JOIN generos ON juegos.Genero_ID = generos.Genero_ID WHERE ID_Juego=?;");
$query->execute(array($ID_Juego));
$game = $query->fetch(PDO::FETCH_OBJ);
return $game;}

//Funcion para editar en la BD un juego con su respectiva ID.
function UpdateGameBD($ID_Juego,$Nombre,$Fecha,$Precio,$Descripcion,$Genero){
$query = $this->db->prepare("UPDATE juegos SET Nombre=?,Fecha=?,Precio=?,Descripcion=?,Genero_ID=? WHERE ID_Juego =?");
$query->execute(array($Nombre,$Fecha,$Precio,$Descripcion,$Genero,$ID_Juego));}

}

