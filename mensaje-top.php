<?php 

/*
Plugin Name: ShowTopMessage
Description: Plugin para mostrar un mensaje en la parte superior
Version:     1
Author:      Jhon Marreros
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

add_action('wp_head', 'muestraMensaje',0);

function muestraMensaje() {
	$estilos 		=  'position: fixed; 
					  	top: 0;
					  	width:100%; 
					  	padding:5px; 
					  	z-index:9999;
					  	background-color:#AA7525;
					  	color: #fff;
					  	font-family:Arial, sans serif;
					  	text-align:center;';
	$comentarios 	="Plugin en etapa de prueba"; 
	$mensaje 		="Sitio en pruebas - contactar con nombre@mail.com";

	echo "<!--". $comentarios ."-->\n";
	echo '<p style="'.$estilos.'">'.$mensaje.'</p>';
}
