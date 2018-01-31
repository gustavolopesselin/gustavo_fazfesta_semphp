<?php 
    $conexao = mysql_connect('localhost','root','');
        if(!$conexao){
            die(mysql_error()); 
        }
    $banco = mysql_select_db('db_fazfesta',$conexao);
        if(!$banco){
            die(mysql_error());
        }
?>