<?php get_header(); ?>
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><?php bloginfo( 'name' ); ?></h1>
                        <p class="intro-text"> <?php bloginfo( 'description' ); ?></p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
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
<img class="img-responsive" alt="zespół NoStress" src="<?php echo get_template_directory_uri(); ?>/img/zalacznik6.jpg"/>
        </div>
    </section>

    <!-- oferta zespołu -->
    <section id="oferta-zespolu" class="container content-section text-center">

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
            <div class="col-md-6">
<img class="img-responsive" alt="" src="<?php echo get_template_directory_uri(); ?>/img/zalacznik2.jpg"/>
	</div>
            <div class="col-md-6">
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
<div class="jumbotron col-lg-8 col-lg-offset-2 ">
<!-- <h2>Oferta okolicznościowa</h2> -->
                    <p>Zapraszamy do zapoznania się z naszą ofertą okolicznościową</p>
                    <a href="<?php echo get_template_directory_uri();?>/plik/Repertuar.pdf" download class="btn btn-default btn-lg">Repertuar</a>
	
</div>
    </section>

    <!-- Sklad zespolu -->
    <section id="sklad-zespolu" class="container content-section text-center">
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
    <!-- Partnerzy -->
    <section id="partnerzy" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Partnerzy</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>

<figure class="">
<a href="http://www.studio-dekoracji.pl/" target="_blank"><img class="img-partner" src="<?php echo get_template_directory_uri()?>/img/studio-dekoracji.png" alt="Studio dekoracji" ></a>
<figcaption class="caption"><a href="http://www.studio-dekoracji.pl/ " target="_blank">Studio dekoracji</a></figcaption>
</figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
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
<p><i class="fa fa-phone fa-fw"></i> Telefon kontaktowy: <span class=text-primary>691-163-913</span> lub <span class=text-primary>722-299-303</span> 
</p>
<!-- <i class="fa fa&#45;youtube fa&#45;fw"></i>  -->
                <p><i class="fa fa-envelope-o fa-fw"></i> E-mail: <a href="mailto:nostress6@o2.pl">nostress6@o2.pl</a> </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="" class="btn btn-default btn-lg"><i class="fa fa-youtube fa-fw"></i> <span class="network-name">YouTube</span></a>
                    </li>
                    <li>
                        <a href="" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
