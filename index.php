<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Grayscale Bootstrap Theme
 * @since Grayscale Bootstrap Theme
 */
get_header(); ?>
    <!-- Intro Header -->
<div id="podmenu">
</div>
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><?php bloginfo( 'name' ); ?></h1>
                        <p class="intro-text"> <?php bloginfo( 'description' ); ?></p>
                        <a href="#about" class="btn btn-circle page-scroll hidden-xs">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center kolor-ciemny">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
<?php 
$the_query = new WP_Query( array( 'pagename' => 'o-nas' ) );
// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<h2>'. get_the_title() . '</h2>';
		echo	'<img class="logo img-responsive img-rounded" src= "'. get_template_directory_uri().'/img/logo.jpg" />';
		echo the_content() ;
	}
} else {
	echo " no posts found";
}
wp_reset_postdata();
?>
            </div>
<img class="img-szerokosc img-responsive" alt="zespół NoStress" src="<?php echo get_template_directory_uri(); ?>/img/zalacznik6.jpg"/>
        </div>
    </section>

    <!-- oferta zespołu -->
    <section id="oferta-zespolu" class="container content-section text-center kolor-jasny">

<?php 
$the_query = new WP_Query( array( 'pagename' => 'oferta-zespolu' ) );
// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
?>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
<?php echo '<h2>'. get_the_title() . '</h2>'; ?>
		</div>
	</div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
<img class="img-responsive img-rounded" alt="" src="<?php echo get_template_directory_uri(); ?>/img/zalacznik2.jpg"/>
                </br>
	</div>
            <div class="col-sm-5">
<?php
		echo the_content() ;
	}
} else {
	echo " no posts found";
}
wp_reset_postdata();
?>
            </div>
        </div>
<div class="jumbotron col-lg-8 col-lg-offset-2 " >

<!-- <h2>Oferta okolicznościowa</h2> -->
                    <p>Zapraszamy do zapoznania się z naszą ofertą okolicznościową</p>
                    <a href="<?php echo get_template_directory_uri();?>/plik/Repertuar.pdf" download class="btn btn-default btn-lg">Repertuar</a>
	
</div>
    </section>

    <!-- Sklad zespolu -->
    <section id="sklad-zespolu" class="container content-section text-center kolor-ciemny">
        <div class="row">
            <!-- <div class="col&#45;lg&#45;8 col&#45;lg&#45;offset&#45;2"> -->
<?php 
$the_query = new WP_Query( array( 'pagename' => 'sklad-zespolu' ) );
// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<h2>'. get_the_title() . '</h2>';
		// echo	'<img class="logo img-responsive img-rounded" src= "'. get_template_directory_uri().'/img/logo.jpg" />';
		echo the_content() ;
	}
} else {
	echo " no posts found";
}
wp_reset_postdata();
?>
            <!-- </div> -->
        </div>
    </section>
 <!-- Multimedia Section -->
    <section id="multimedia" class="container content-section text-center kolor-jasny">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Multimedia</h2>
<!-- audio Multimedia  -->
<h4 id="audio">audio</h4>
<?php // echo do_shortcode('[cue id="149"]'); ?>
<?php echo do_shortcode('[playlist ids="176,173,174,172,175,169,171,170,166,168,167,137,136,135,134,133,132,129,130,131,127,128,110,111,109"]'); ?>
	

<!--video karuzela  -->
<h4 id="video">Video</h4>
<div id="carousel-video" class="carousel slide" data-ride="carousel" data-interval="false" data-pause="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-video" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-video" data-slide-to="1"></li>
       <li data-target="#carousel-video" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" 
 width="853" height="480" src="https://www.youtube.com/embed/Nusx10O39CA?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
</div>
      <div class="carousel-caption">
	<!-- <p>Tytuł piosenki</p> -->
      </div>
    </div>
 
         <div class="item">
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" 
 width="853" height="480" src="https://www.youtube.com/embed/BEsbRtf2ZJ4?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
</div>
      <div class="carousel-caption">
	<!-- <p>Tytuł piosenki</p> -->
      </div>
    </div>
      
         <div class="item">
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" 
 width="853" height="480" src="https://www.youtube.com/embed/Unrw5X7UIcQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
</div>
      <div class="carousel-caption">
	<!-- <p>Tytuł piosenki</p> -->
      </div>
    </div>

<!--     <div class="item"> -->
<!-- <div class="embed&#45;responsive embed&#45;responsive&#45;16by9"> -->
<!--   <iframe class="embed&#45;responsive&#45;item"  -->
<!--  width="480" height="360" src="https://www.youtube.com/embed/vop7MkkkWBU?rel=0"  allowfullscreen></iframe> -->
<!-- </div> -->
<!--       <div class="carousel&#45;caption"> -->
<!-- 	<h3>Tytuł piosenki</h3> -->
<!--       </div> -->
<!--     </div> -->
<!--     <div class="item"> -->
<!-- <div class="embed&#45;responsive embed&#45;responsive&#45;16by9"> -->
<!--   <iframe class="embed&#45;responsive&#45;item"  -->
<!--  width="560" height="315" src="https://www.youtube.com/embed/oC&#45;GflRB0y4" allowfullscreen></iframe> -->
<!-- </div> -->
<!--       <div class="carousel&#45;caption"> -->
<!-- 	<h3>Tytuł piosenki</h3> -->
<!--       </div> -->
<!--     </div> -->
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-video" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-video" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- plugin zdjęcia -->
<h4 id="slajd">Zdjęcia</h4>

<?php  echo do_shortcode('[envira-gallery id="150"]'); ?>
<!-- karuzela zdjęcia -->
<!--                  -->
<!-- <div id="carousel&#45;example&#45;generic" class="carousel slide" data&#45;ride="carousel" data&#45;interval="false"> -->
<!--   <!&#45;&#45; Indicators &#45;&#45;> -->
<!--   <ol class="carousel&#45;indicators"> -->
<!--     <li data&#45;target="#carousel&#45;example&#45;generic" data&#45;slide&#45;to="0" class="active"></li> -->
<!--     <li data&#45;target="#carousel&#45;example&#45;generic" data&#45;slide&#45;to="1"></li> -->
<!--     <li data&#45;target="#carousel&#45;example&#45;generic" data&#45;slide&#45;to="2"></li> -->
<!--     <li data&#45;target="#carousel&#45;example&#45;generic" data&#45;slide&#45;to="3"></li> -->
<!--     <li data&#45;target="#carousel&#45;example&#45;generic" data&#45;slide&#45;to="4"></li> -->
<!--     <li data&#45;target="#carousel&#45;example&#45;generic" data&#45;slide&#45;to="5"></li> -->
<!--   </ol> -->
<!--  -->
<!--   <!&#45;&#45; Wrapper for slides &#45;&#45;> -->
<!--   <div class="carousel&#45;inner" role="listbox"> -->
<!--     <div class="item active"> -->
<!--       <img src="<?php echo get_template_directory_uri();?>/slajd/zalacznik2.jpg" alt="Nasze zdjęcia"> -->
<!--       <div class="carousel&#45;caption"> -->
<!--       </div> -->
<!--     </div> -->
<!--     <div class="item"> -->
<!--       <img src="<?php echo get_template_directory_uri();?>/slajd/zalacznik3.jpg" alt="Nasze zdjęcia"> -->
<!--       <div class="carousel&#45;caption"> -->
<!--       </div> -->
<!--     </div> -->
<!--     <div class="item"> -->
<!--       <img src="<?php echo get_template_directory_uri();?>/slajd/zalacznik4.jpg" alt="Nasze zdjęcia"> -->
<!--       <div class="carousel&#45;caption"> -->
<!--       </div> -->
<!--     </div> -->
<!--     <div class="item"> -->
<!--       <img src="<?php echo get_template_directory_uri();?>/slajd/zalacznik5.jpg" alt="Nasze zdjęcia"> -->
<!--       <div class="carousel&#45;caption"> -->
<!--       </div> -->
<!--     </div> -->
<!--     <div class="item"> -->
<!--       <img src="<?php echo get_template_directory_uri();?>/slajd/zalacznik6.jpg" alt="Nasze zdjęcia"> -->
<!--       <div class="carousel&#45;caption"> -->
<!--       </div> -->
<!--     </div> -->
<!--     <div class="item"> -->
<!--       <img src="<?php echo get_template_directory_uri();?>/slajd/zalacznik7.jpg" alt="Nasze zdjęcia"> -->
<!--       <div class="carousel&#45;caption"> -->
<!--       </div> -->
<!--     </div> -->
<!--   </div> -->
<!--  -->
<!--   <!&#45;&#45; Controls &#45;&#45;> -->
<!--   <a class="left carousel&#45;control" href="#carousel&#45;example&#45;generic" role="button" data&#45;slide="prev"> -->
<!--     <span class="glyphicon glyphicon&#45;chevron&#45;left" aria&#45;hidden="true"></span> -->
<!--     <span class="sr&#45;only">Previous</span> -->
<!--   </a> -->
<!--   <a class="right carousel&#45;control" href="#carousel&#45;example&#45;generic" role="button" data&#45;slide="next"> -->
<!--     <span class="glyphicon glyphicon&#45;chevron&#45;right" aria&#45;hidden="true"></span> -->
<!--     <span class="sr&#45;only">Next</span> -->
<!--   </a> -->
<!-- </div> -->
<!-- koniec row -->
            </div>
        </div>
        </br>
</br>
    </section>
<!-- Partnerzy -->
    <section id="partnerzy" class="content-section text-center kolor-ciemny">
        <div class="download-section ">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Partnerzy</h2>
<!--                    <p>jakiś ewentualny tekst</p>-->

<figure class="">
<a href="http://www.studio-dekoracji.pl/" target="_blank"><img class="img-partner" src="<?php echo get_template_directory_uri()?>/img/studio-dekoracji.png" alt="Studio dekoracji" ></a>
<figcaption class="caption"><a href="http://www.studio-dekoracji.pl/ " target="_blank">Studio dekoracji</a></figcaption>
</figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center kolor-jasny">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Kontakt</h2>
<p>
Świadczymy swoje usługi na terenie całego kraju. Zapraszamy do skorzystania z naszej oferty.
Napisz do nas na maila lub zadzwoń. Możesz również skorzystać z formularza kontaktowego umieszczonego poniżej – na pewno się do Ciebie odezwiemy.
</p>
<p>
Zapewniamy profesjonalną oprawę każdej imprezy. Zachęcamy do kontaktu w celu rezerwacji terminu.
</p>
<p><i class="fa fa-phone fa-fw"></i> Telefon kontaktowy: <span class=text-color>691-163-913</span> lub <span class=text-color>722-299-303</span> 
</p>
<!-- <i class="fa fa&#45;youtube fa&#45;fw"></i>  -->
                <p><i class="fa fa-envelope-o fa-fw"></i> E-mail: <a href="mailto:nostress6@o2.pl">nostress6@o2.pl</a> </p>
<?php echo do_shortcode('[contact-form-7 id="70" title="bootstrap"]'); ?>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://www.youtube.com/channel/UCDy0n8Lfj_FXMsHnXuqsTFg/videos" class="btn btn-default btn-lg"><i class="fa fa-youtube fa-fw"></i> <span class="network-name">YouTube</span></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/NoStress-562251003785719/?fref=ts" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <!--<li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>-->
                </ul>
            </div>
        </div>

    </section>

<?php get_footer(); ?>
