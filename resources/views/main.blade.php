<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link href="{{'vendor/nucleo/css/nucleo.css'}}" rel="stylesheet">
	<link href="{{'vendor/font-awesome/css/font-awesome.min.css'}}" rel="stylesheet">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<link rel="icon" href="http://icons-for-free.com/free-icons/png/512/2400506.png">
	<link type="text/css" href="{{'css/argon.css'}}" rel="stylesheet">
	<link rel="stylesheet" href="css/miestilo.css">
	<style>

		body::-webkit-scrollbar {
		  width: 7px;
		}

		body::-webkit-scrollbar-thumb {
		  background: #1297F9;
		  border-radius: 101px;
		}
	</style>
</head>
<body>
    @include('partials.navbar')


	<div class="container">
		@yield('contenido')
	</div>


<script src="{{'vendor/jquery/jquery.min.js'}}"></script>
  <script src="{{'vendor/popper/popper.min.js'}}"></script>
  <script src="{{'vendor/bootstrap/bootstrap.min.js'}}"></script>
  <script src="{{'vendor/headroom/headroom.min.js'}}"></script>
  <!-- Optional JS -->
  <script src="{{'vendor/onscreen/onscreen.min.js'}}"></script>
  <script src="{{'vendor/nouislider/js/nouislider.min.js'}}"></script>
  <script src="{{'vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js'}}"></script>

  <script src="{{'js/argon.js?v=1.0.1'}}"></script>
</body>
</html>