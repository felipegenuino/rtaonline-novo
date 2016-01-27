<?php
/**
 * Template Name: Página profissionais
 */

get_header(); ?>


<link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable({
      language: {
        processing:     "Processando..",
        search:         "Pesquisar",
        lengthMenu:     "_MENU_ Resultados por página",
        info:           "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        infoEmpty:      "Mostrando 0 até 0 de 0 registros",
        infoFiltered:   "(Filtrados de _MAX_ registros)",
        infoPostFix:    "",
        loadingRecords: "Carregando...",
        zeroRecords:    "Nenhum registro encontrado",
        emptyTable:     "Nenhum registro encontrado",
        paginate: {
            first:      "Primeiro",
            previous:   "Anterior",
            next:       "Próximo",
            last:       "Último"
        },
        aria: {
            sortAscending:  ": Ordenar colunas de forma ascendente",
            sortDescending: ": Ordenar colunas de forma descendente"
        }
    }
    });
} );
</script>

 



<section class="section-profissionais">
    <div class="row">
      <div class="small-10 small-offset-1 columns">
       
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class('article-profissionais') ?> id="post-<?php the_ID(); ?>" >
            
            <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
            <div class="entry-content">
               <?php edit_post_link('Editar', '<small class="post-edit post-edit__relative">', '</small>'); ?>
                <?php the_content(); ?>
                <ul class="profissionais-navigation">
                  <li> <span class="profissionais-btn profissionais-btn-table active"> Visualizar Lista</span></li>
                  <li> <span class="profissionais-btn profissionais-btn-map"> Visualizar Mapa</span></li>
                </ul>
            </div>
            
             
          </article>
        <?php endwhile;?>
      </div> <!--//small-12 columns -->
    </div>   <!-- //row -->
</section>

 
 

 <div id="navigation-profissionais" class="owl-carousel">
  <div> <!-- // start slide-1 -->
    <div class="row">

        <?php $args = array( 'post_type' => 'profissional', 'posts_per_page' => -1  ); $query = new WP_Query($args); ?>
        <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Estado</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Nível</th>
                     </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Estado</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Nível</th>
                     </tr>
                </tfoot>
                <tbody>
                <?php  if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                    <tr>
                        <td><?php the_title(); ?>   <?php edit_post_link('Editar', '<small class="post-edit post-edit__relative">', '</small>'); ?>   </td>
                        <td><?php  $field = get_field_object('acf_profissionais__location_estado');
                                   $value = get_field('acf_profissionais__location_estado');
                                   $label = $field['choices'][ $value ];
                                   echo $label;  ?>
                        </td>
                        <td>  <?php  the_field('acf_profissionais__telefone_principal'); ?></td>
                        <td>  <?php the_field('acf_profissionais__email_principal'); ?>  </td>
                        <td><?php $term = get_field('acf_profissionais__formacao'); if( $term ): ?>  <?php echo $term->name; ?>  <?php endif; ?></td>
                     </tr>
                <?php endwhile; endif; wp_reset_postdata();  ?>
                </tbody>
            </table>
          </div>   <!-- //row -->
    </div> <!-- // end slide-1 -->

  <div>  <!-- //start slide-2 -->  
         <div class="acf-map">
              <?php  $args = array( 'post_type' => 'profissional', 'posts_per_page' => -1  ); $query = new WP_Query($args);?>
              <?php  if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
       
              <?php $location = get_field('acf_profissionais__location'); ?>
                    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                        <h4 class="infomap__title"><?php the_title(); ?>  <?php edit_post_link('Editar', '<small class="post-edit post-edit__relative">', '</small>'); ?> </h4>
                        <p class="infomap__content">
                           <strong>Endereço:</strong> <?php echo $location['address']; ?> </br>
                           <strong>Telefone:</strong> <?php the_field('acf_profissionais__telefone_principal'); ?> </br>
                           <strong>E-mail:</strong> <?php the_field('acf_profissionais__email_principal'); ?> </br> 
                           <strong>Formação:</strong>  <?php $term = get_field('acf_profissionais__formacao'); if( $term ): ?>  <?php echo $term->name; ?>  <?php endif; ?> </br> 
                           <?php if(get_field('acf_profissionais__facebook')) { ?>   <a class="infomap__social--link" href="<?php the_field('acf_profissionais__facebook'); ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>  <?php }?>
                      </p>
                    </div>
              <?php endwhile; endif; wp_reset_postdata();  ?>
          </div> <!-- //acf-map -->
  </div> <!-- // slide-2 -->
</div> <!-- //navigation-profissionais -->




    





 
  

 





<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param $el (jQuery element)
*  @return  n/a
*/

function new_map( $el ) {
  
  // var
  var $markers = $el.find('.marker');
  
  
  // vars
  var args = {
    zoom    : 4,
    center    : new google.maps.LatLng(-15.404227, -52.285995),
    mapTypeId : google.maps.MapTypeId.ROADMAP,
    scrollwheel: false
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
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param $marker (jQuery element)
*  @param map (Google Map object)
*  @return  n/a
*/

function add_marker( $marker, map ) {

  // var
  var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

  // create marker
  var marker = new google.maps.Marker({
    position  : latlng,
    map     : map
  });

  // add to array
  map.markers.push( marker );

  // if marker contains HTML, add it to an infoWindow
  if( $marker.html() )
  {
    // create info window
    var infowindow = new google.maps.InfoWindow({
      content   : $marker.html(),
      maxWidth: 300
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
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param map (Google Map object)
*  @return  n/a
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
*  @type  function
*  @date  8/11/2013
*  @since 5.0.0
*
*  @param n/a
*  @return  n/a
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
