<?php

namespace View;

require_once 'model.php';

class View{
	
	public function __construct(){
		
	}
	
	public function showHTML(){
		
		echo"<!DOCTYPE html>
				<html>
				<head lang='en'>
				    <meta charset='UTF-8'>
				    <link rel='stylesheet' type='text/css' href='css/style.min.css'/>
				    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
				    <title>Traffic Help</title>
				</head>
				<body>
				
				<div class='container-fluid'>
				
				    <div class ='header'>
				        <h1>Måns Trafikhjälp</h1>
				    </div>
				
				    <div id='map-canvas' class='col-md-8'></div>
				
				    <div class='dropDown col-md-4'>
				        <select class='switch btn-success form-control'>
				            <option class='btn btn-default' value='0'>Vägtrafik</option>
				            <option class='btn btn-default' value='1'>Kollektivtrafik</option>
				            <option class='btn btn-default'' value='2''>Planerad störning</option>
				            <option class='btn btn-default' value='3'>Övrigt</option>
				            <option class='btn btn-default' value='4' selected>Alla kategorier</option>
				        </select>
				    </div>
				    <div class='list col-md-4'>
				        <ul id='ul' class ='ul'>
				
				        </ul>
				    </div>
				</div>
				
				</body>
				<script type='text/javascript' src='js/jquery.js'></script>
				<script type='text/javascript'
				        src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDmGcaMA7rcCQ2bkbOOfLb8hrjBz3qF6tQ'>
				</script>
				<script src='js/markerBox.js'></script>
				<script src='js/googlemap.js'></script>
				
				</html>";	
	}
}
?>