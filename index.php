<?php
	/*******************************************************************************
	* index.php                                                                    *
	*                                                                              *
	* Versión:  1.14                                                               *
	* Fecha:    2017-12-01                                                         *
	* Proyecto: 17_plcontrol                                                       *
	* GitHub:   https://github.com/rmonla/17_plcontrol                             *
	* Web:      https://immense-tor-16114.herokuapp.com                            *
	* Author:   Ricardo N. MONLA (rmonla@gmail.com)                                *
	*******************************************************************************/


	( isset($_POST["MM_insert"]) && $_POST["MM_insert"] == "form2" )? include_once "pdfres.php" : include_once "form.php";
?>
