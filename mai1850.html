<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<script src="http://openlayers.org/api/OpenLayers.js"></script>
	<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<title>Élections d'avril 1850 - Paris (plan Vasserot)</title>	
</head>
<body>
	<div id="en-tete"><h1>Élections du 28 avril 1850 à Paris</h1></div>
	<div id="map"></div>

	<!-- JavaScript (Jquery) pour les onglets du cadre droit -->
	<script type="text/javascript">
		$(document).ready(function() {
			$(".tab_content").hide();
			$("ul.tabs li:first").addClass("active").show();
			$(".tab_content:first").show();
		
			$("ul.tabs li").click(function() {
				$("ul.tabs li").removeClass("active");
				$(this).addClass("active");
				$(".tab_content").hide();
				var activeTab = $(this).find("a").attr("href");
				$(activeTab).fadeIn();
				return false;
			});
		});
	</script>
	
	<div class="data">
		<ul class="tabs">
			<li><a href="#tab1">A propos</a></li>
			<li><a href="#tab2">Tableau de données</a></li>
		</ul>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<p>En avril 1850, un siège du département de la Seine est vacant à l'Assemblée nationale législative. Des élections sont donc organisées dans le département pour élire un nouveau représentant. Les démocrates-socialistes se rangent derrière la candidature de l'auteur des <em>Mystères de Paris</em>, Eugène Sue ; tandis que le Parti de l'ordre désigne un boutiquier ayant combattu contre les barricades en juin 1848 du nom de Leclerc.</p>
				<p>L'élection est remportée par Sue avec 127 812 voix contre 119 726 pour Leclerc.</p>
				<p>Ces résultats proviennent de l'ouvrage de Pierre Chaunu : CHAUNU, <em>Eugène Sue et la Seconde République</em>, Paris, PUF, 1948.</p>
			</div>
			<div id="tab2" class="tab_content">
				<?php include("tabDonnees.php"); ?>
			</div>
		</div>
	</div>
	<div id="cartouche">
		<img id="legende" src="" alt="" />
	</div>
	
	<!-- JavaScript pour génération des cartes via OpenLayers -->	
	<script type="text/javascript">
	var map = new OpenLayers.Map("map", {
	//minResolution: "auto",
	//minExtent:new OpenLayers.Bounds(-1, -1, 1, 1),
	maxResolution: "auto",
	maxExtent:new OpenLayers.Bounds(596320.332138, 125469.939357, 604889.312972, 131578.734095),
	units: "m",
	projection: "EPSG:27561"
	});
	
	// Couche plan Vasserot de Paris
	
	var Paris = new OpenLayers.Layer.WMS("Paris", "http://leodumont.alwaysdata.net/cgi-bin/mapserv?map=/home/leodumont/www/paris/mai1850.map&",{
	layers: "Paris",
	srs: "EPSG:27561",
	width: "500",
	height: "400",
	format: "image/png"
	},
	{isBaseLayer: true});
	
	// Couche vote Sue
	
	var voteSue = new OpenLayers.Layer.WMS("voteSue", "http://leodumont.alwaysdata.net/cgi-bin/mapserv?map=/home/leodumont/www/paris/mai1850.map&",{
	layers: "voteSue",
	srs: "EPSG:27561",
	width: "500",
	height: "400",
	format: "image/png"
	});
	
	// Couche vote Leclerc
	
	var voteLeclerc = new OpenLayers.Layer.WMS("voteLeclerc", "http://leodumont.alwaysdata.net/cgi-bin/mapserv?map=/home/leodumont/www/paris/mai1850.map&",{
	layers: "voteLeclerc",
	srs: "EPSG:27561",
	width: "500",
	height: "400",
	format: "image/png"
	});
	
	// Interface de contrôle
	
	map.addControl(new OpenLayers.Control.LayerSwitcher());
  	map.addControl(new OpenLayers.Control.MousePosition());
	
	//Gestion des popups pour récupérer les attributs
	
	info = new OpenLayers.Control.WMSGetFeatureInfo({
            url: 'http://leodumont.alwaysdata.net/cgi-bin/mapserv?map=/home/leodumont/www/paris/mai1850.map&', 
            title: 'Identifier les attributs avec la souris',
            queryVisible: true,
            eventListeners: {
                getfeatureinfo: function(event) {
                    map.addPopup(new OpenLayers.Popup.FramedCloud(
                        "chicken", 
                        map.getLonLatFromPixel(event.xy),
                        null,
                        event.text,
                        null,
                        true
                    ));
                }
            }
        });

	//Génération de la carte + zoom sur l'étendue de la couche
	
	map.addLayer(Paris);
	map.addLayer(voteSue);
	map.addLayer(voteLeclerc);
	map.zoomToMaxExtent();
	map.addControl(info);
    info.activate();

	//Affichage de la légende

map.events.register("changebaselayer",voteSue, function() {
	if (this.getVisibility()) {	document.getElementById('legende').src="http://leodumont.alwaysdata.net/cgi-bin/mapserv?map=/home/leodumont/www/paris/mai1850.map&SERVICE=WMS&VERSION=1.1.1&REQUEST=GetLegendGraphic&LAYER=voteSue&Format=image/png";
		}
	else {		document.getElementById('legende').src="http://leodumont.alwaysdata.net/cgi-bin/mapserv?map=/home/leodumont/www/paris/mai1850.map&SERVICE=WMS&VERSION=1.1.1&REQUEST=GetLegendGraphic&LAYER=voteLeclerc&Format=image/png";
        }
        });

</script>
	
</body>
</html>