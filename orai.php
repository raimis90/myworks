<!DOCTYPE html>
<html>
<head>
	<title>Orai</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	

<header>

	<?php

	include("header.php");
	?>


</head>
<body class="fonas">
	<div class="row">
	    <div class="col s12">

	      <ul class="tabs ">
	        <li class="tab col s2"><a class="active" href="#test1">Vilnius</a></li>
	        <li class="tab col s2"><a href="#test2">Kaunas</a></li>
	        <li class="tab col s2"><a href="#test3">Klaipėda</a></li>
	        <li class="tab col s2"><a href="#test4">Šiauliai</a></li>
	        <li class="tab col s2"><a href="#test5">Panevėžys</a></li>
	        <li class="tab col s2"><a href="#test6">Alytus</a></li>
	        
	      </ul>

	    </div>
	    <div id="test1" class="col s12">

			<a class="weatherwidget-io" href="https://forecast7.com/en/54d6925d28/vilnius/" data-label_1="VILNIUS" data-theme="original" >VILNIUS</a>
					<script>
					!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
					</script>

	    </div>
	    <div id="test2" class="col s12">

	    	<a class="weatherwidget-io" href="https://forecast7.com/en/54d9023d90/kaunas/" data-label_1="KAUNAS" data-theme="original" > KAUNAS</a>
	    </div>
	    <div id="test3" class="col s12">
			<a class="weatherwidget-io" href="https://forecast7.com/en/55d7021d14/klaipeda/" data-label_1="KLAIPĖDA" data-theme="original" >KLAIPĖDA</a>

	    </div>
	    <div id="test4" class="col s12">
			<a class="weatherwidget-io" href="https://forecast7.com/en/55d9323d31/siauliai/" data-label_1="ŠIAULIAI" data-theme="original" >ŠIAULIAI</a>
	    </div>
	    <div id="test5" class="col s12">
			<a class="weatherwidget-io" href="https://forecast7.com/en/55d7324d36/panevezys/" data-label_1="PANEVĖŽYS" data-theme="original" >PANEVĖŽYS</a>
	    </div>
	    <div id="test6" class="col s12">

			<a class="weatherwidget-io" href="https://forecast7.com/en/54d4024d05/alytus/" data-label_1="ALYTUS" data-theme="original" >ALYTUS</a>
	    </div>

	    <div class="horo">
	    	<h5>Mūsų horoskopai</h5>


	    	<a href="#" >                <!-- CIA REIKIA IDETI HOROSKOPU LINKA -->
				<img src="img/HoroskopuRatas.jpg" >
	  
	    </div>


	    <img src="http://orai.biz/pav/gamta.gif" class="paveiksl">
	  </div>









<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>





</body>


		<?php

	include("footer.php");
	?>

</footer>
</html>