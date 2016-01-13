<?php
/**
 * Template Name: Página profissionais
 */

get_header(); ?>

<section class="section-profissionais">


 



<div class="row">


	  <?php


	    //$num_posts = ( is_front_page() ) ? 4 : -1;

	    $args = array(
	    	'post_type' => 'profissional',
	    	'posts_per_page' => -1
	    	);
	    $query = new WP_Query($args);

	   ?>



<div class="large-4 columns">
	<div id="locations">
	    <ul>
	    	<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
	        <li> <a href="javascript:google.maps(marker[1], 'click');" class="button3"><?php the_title(); ?></a>   </li>

  	    <?php endwhile; endif; wp_reset_postdata(); ?>

  	    </ul>
	</div>
</div> <!-- // large-4 -->


<div class="large-8 columns">

	<div class="acf-map">

<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
		<?php  $location = get_field('acf_profissionais__location'); ?>
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
				<div class="marker__content">			
					<h4 class="marker__title"><?php the_title(); ?></h4>
					
					<ul class="marker__informations_list">
						<li> <i class="fa fa-map-marker"></i>  <span class="marker__address"><?php echo $location['address']; ?></span></li>
						<li> <i class="fa fa-phone"></i>  <?php the_field('acf_profissionais__telefone_principal'); ?></li>
 						<li> <i class="fa fa-phone"></i>  <?php the_field('acf_profissionais__telefone_secundario'); ?></li>
 						<li> <i class="fa fa-envelope"></i>  <?php the_field('acf_profissionais__email_principal'); ?> </li>
						<li> <i class="fa fa-envelope"></i> <?php //the_field('acf_profissionais__nivel'); ?> </li>
					</ul>
				</div> <!-- //marker__content -->
			</div> <!-- //marker-->
 
<?php endwhile; endif; wp_reset_postdata(); ?>
</div>


</div> <!-- // large-8 -->

 
 <div class="large-12 columns">
 	<?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
		<?php  $location = get_field('acf_profissionais__location'); ?>
 

<pre>
<?php 
 var_dump($location);
?>
</pre>

<?php 
$locationExplode = explode(",", $location["address"]);
$locationCidadeEstadoExplode = explode("-", $locationExplode[2]);
 

?>

<ul>
<li> <?php echo $locationExplode[0];?> </li>
<li> <?php echo $locationExplode[1];?> </li>
<li> <?php echo $locationExplode[2];?> </li>
<li> <?php echo $locationExplode[3];?> </li>
<li> <?php echo $locationExplode[4];?> </li>
<li> ------------------------------ </li>
<li> <?php echo $locationCidadeEstadoExplode[0];?> </li>
<li> <?php echo $locationCidadeEstadoExplode[1];?> </li>
</ul>



 	<?php endwhile; endif; wp_reset_postdata(); ?>

 </div>
  
</div> <!-- // row -->
</section>



 







<style type="text/css">

.marker__content{ width: 300px !important; }
.marker__address{font-size: 14px;}
.marker__title{font-size: 18px}
.marker__informations_list{ list-style: none;}

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

/* fixes potential theme css conflict */
.acf-map img {
   max-width: inherit !important;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/



 



function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 5,
		center		: new google.maps.LatLng(-14.722985, -52.530087),
		mapTypeId	: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,

	};
	
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;
	
}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map,

	});

	// add to array
	map.markers.push( marker );
  
	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open( map, marker );
		});
	}

}

 

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
</script>




<?php get_footer(); ?>
