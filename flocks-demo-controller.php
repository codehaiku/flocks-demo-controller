<?php
/*
Plugin Name: Flocks Demo Controller
Plugin URI:  https://dunhakdis.com/
Description: Allows visitors to select colors, layout, and other awesome things!
Version:     1.0
Author:      Dunhakdis Software Creatives
Author URI:  https://dunhakdis.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dunhakdis
Domain Path: /languages
*/

require_once plugin_dir_path(__DIR__) . 'flocks-demo-controller/colors-collection.php';

add_action('wp_footer', 'fdc_render_view');


function fdc_render_view() { ?>
<style>

#flocks-demo-controller-view {
	position: fixed;
	right: -17px;
	top: calc( 50% - 250px );
	background: #fff;
	border: 1px solid #eee;
	z-index: 999999;
	box-shadow: 0px 10px 25px -15px #607D8B;

	transform: translateX(235px);

	transition: all 0.25s ease-in-out;
	-webkit-transition: all 0.25s ease-in-out;
	-moz-transition: all 0.25s ease-in-out;
}

#flocks-demo-controller-view.active {
	transform: translateX(0px);
}

#flocks-demo-controller-controls {
	padding: 20px;
	width: 250px;
	min-height: 250px;
	z-index: 2000;
    position: relative;
    background: #fff;
    border-right: 0;
}

#flocks-demo-controller-toggle {
	position: absolute;
    top: calc( 50% - 30px );
    left: -60px;
    height: 60px;
    width: 60px;
    text-align: center;
    padding-top: 8px;
    font-size: 26px;
    background: white;
    border: 1px solid #eee;
    border-right: 0;
    z-index: 1000;
    box-shadow: 19px 6px 25px -10px #020202;
    color: #292f32;
    cursor: pointer;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

#flocks-demo-controller-color-schemes {
	padding: 0;
	margin: 15px 0;
}
#flocks-demo-controller-color-schemes li {
	padding: 0;
	margin: 0;
	list-style: none;
	display: inline-block;
	width: 30px;
	height: 30px;
	background: red;
	border-radius: 50%;
	cursor: pointer;
	transition: all 0.15s ease-in-out;
	-webkit-transition: all 0.15s ease-in-out;
	-moz-transition: all 0.15s ease-in-out;
}

#flocks-demo-controller-color-schemes li.red {background: #f44336;}
#flocks-demo-controller-color-schemes li.purple {background: #e91e63;}
#flocks-demo-controller-color-schemes li.indigo {background: #9c27b0;}
#flocks-demo-controller-color-schemes li.violet {background: #673ab7;}
#flocks-demo-controller-color-schemes li.blue {background: #3f51b5;}
#flocks-demo-controller-color-schemes li.light-blue {background: #2196f3;}
#flocks-demo-controller-color-schemes li.sky-blue {background: #03a9f4;}
#flocks-demo-controller-color-schemes li.blue-green {background: #00bcd4;}
#flocks-demo-controller-color-schemes li.green {background: #009688;}
#flocks-demo-controller-color-schemes li.dark-green {background: #4caf50;}
#flocks-demo-controller-color-schemes li.light-green {background: #8bc34a;}
#flocks-demo-controller-color-schemes li.yellow-green {background: #cddc39;}
#flocks-demo-controller-color-schemes li.main-blue {background: #22b5ce;}
#flocks-demo-controller-color-schemes li.orange {background: #ffc107;}
#flocks-demo-controller-color-schemes li.dark-orange {background: #ff9800;}
#flocks-demo-controller-color-schemes li.red-orange {background: #ff5722;}
#flocks-demo-controller-color-schemes li.brown {background: #795548;}
#flocks-demo-controller-color-schemes li.teal {background: #607d8b;}

#flocks-demo-controller-color-schemes li:hover,
#flocks-demo-controller-color-schemes li.selected {
	border: 10px double rgba(0,0,0,0.30);
}

#flocks-demo-controller-color-schemes li:active {
	opacity: 0.85;
	box-shadow: inset 0px 0px 7px -1px #151515;
}

#flocks-demo-controller-layout {
	width: 95%;
	padding: 10px;
}

#main-demo-button {
	padding: 15px 25px;
	text-transform: uppercase;
	font-weight: bold;
}

.flocks-demo-controller-section h5 {
	font-size: 10px;
	font-weight: bold;
	text-transform: uppercase;
}
</style>
<div id="flocks-demo-controller-view">
	<div id="flocks-demo-controller-toggle" class="background-primary">
		<i class="fa fa-cog"></i>
	</div>
	<div id="flocks-demo-controller-controls">
		<!-- color scheme -->
		<section id="flocks-demo-controller-section-color-scheme" class="flocks-demo-controller-section">
			<h5>Color Scheme</h5>
			<ul id="flocks-demo-controller-color-schemes">

				<li data-color="22b5ce" class="selected main-blue"></li>
				<li data-color="f44336" class="red"></li>
				<li data-color="e91e63" class="purple"></li>
				<li data-color="9c27b0" class="indigo"></li>
				<li data-color="673ab7" class="violet"></li>
				<li data-color="3f51b5" class="blue"></li>
				<li data-color="2196f3" class="light-blue"></li>
				<li data-color="03a9f4" class="sky-blue"></li>
				<li data-color="00bcd4" class="blue-green"></li>
				<li data-color="009688" class="green"></li>
				<li data-color="4caf50" class="dark-green"></li>
				<li data-color="8bc34a" class="light-green"></li>
				<li data-color="cddc39" class="yellow-green"></li>
				<li data-color="ffc107" class="orange"></li>
				<li data-color="ff9800" class="dark-orange"></li>
				<li data-color="ff5722" class="red-orange"></li>
				<li data-color="795548" class="brown"></li>
				<li data-color="607d8b" class="teal"></li>
			</ul>

		</section>


		<!-- Demos -->
		<section id="flocks-demo-controller-section-layout" class="flocks-demo-controller-section">
			<h5>Layout</h5>
			<select id="flocks-demo-controller-layout">
				<option value="wide">Wide</option>
				<option value="boxed">Boxed</option>
			</select>
		</section>

		<!-- Main Demo -->
		<section id="flocks-demo-controller-section-main-demo" class="flocks-demo-controller-section">
			<h5>Main Demo</h5>
			<a class='button' id="main-demo-button" href="#">
				Go Back to Main Demo
			</a>
			
		</section>
	</div>
</div>
<style id="shityow"></style>
<script>
jQuery( document ).ready( function($) {

	'use strict';

	$('#flocks-demo-controller-color-schemes li').on('click', function(e){

		var $color = '#'+$(this).data('color');

		var $css = "";

		$('#flocks-demo-controller-color-schemes li').removeClass('selected');

		$(this).addClass('selected');

		// Backgrounds.
		$css += "<?php echo fdc_background_color_collecton(); ?> { background-color: "+$color+";}";

		// Colors.
		$css += "<?php echo fdc_color_collection(); ?> { color: "+$color+";}";
		
		$('#shityow').html( $css );

	});

	$('#flocks-demo-controller-toggle').on('click', function(e){

		$('#flocks-demo-controller-view').toggleClass('active');

	});

	$('#flocks-demo-controller-layout').on('change', function() {

		if ( "boxed" === $(this).val() ) {

			$('body').addClass( "boxed" );

		} else {

			$('body').removeClass( "boxed" );

		}

		$( window ).trigger('resize');
		
	});
});	
</script>
<?php } ?>
