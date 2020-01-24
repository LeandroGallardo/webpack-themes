<?php
/**
   Template Name: Pagina Home
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package novaguas
 */


get_header();
?>
<section id="home" class="sectionvh">
	<div class="container-fluid">
		<div class="row">
			<div class="owl-carousel sliderhome w-100">
				 <?php $loop = CFS()->get( 'seccion_slider' ); ?>
                    <?php foreach ($loop as $r):  ?>
						<div class="item w-100 sectionvh">
							 <img src="<?php echo $r['imagen_slider'] ?>" alt="<?php echo $r['alt'] ?>" class="img-fluid img-object-cover h-100">
							 <?php if($r['texto_slider']){ ?>
							 <div class="position-absolute texto_slider">
							 	<?php echo $r['texto_slider'] ?>
							 	<div class="separadorblanco d-block m-auto"></div>
							 	<?php echo $r['contenido_slider']; ?>
							 </div>
							 <?php } ?>
						</div>
					 <?php endforeach ?>
			</div>
		</div>
	</div>
</section>
<section class="sectionvh" style="background: url(<?php echo CFS()->get('imagen_seccion'); ?>) no-repeat top center / cover; height: 128vh" >
	<div class="w-100 " style="height: 40%">
		<div class="container h-100" >
			<div class="row h-100">
				<div id="containerreact" class="h-100 col-12">
				
				</div>
			</div>
		</div>
	</div>
	<div class=""  style="background: url(<?php echo CFS()->get('imagen_seccion_bottom'); ?>) no-repeat bottom center / cover;height: 60% ">
		<div class="w-100 py-5 d-flex align-items-center h-100">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center ">
						<h3 class="text-uppercase color-primary font-gotham-ultra"><?php echo CFS()->get('titulo_seccion') ?></h3>
						<div class="separador d-block m-auto"></div>
					</div>
					<?php $loop = CFS()->get('loop_iconos'); ?>
					
					<?php foreach ($loop as $resoult) { ?>
						<div class="col-md-3 text-center mt-5">
							<a href="#" class="icono position-relative">
								<img src="<?php  echo $resoult['icono'] ?>" alt="<?php  echo $resoult['alt_icono'] ?>" class="img-fluid m-auto icono z-index position-relative" >
							</a>
							<div class="w-100 mt-3">
								<a href="#" class="link-accesos">
									<p class="font-gotham-medium h5"><?php echo $resoult['texto_icono'] ?></p>
								</a>
							</div>
						</div>
					<?php } ?>
				</div>	
			</div>
		</div>
	</div>
</section>
<section class="section-promocionvh" style="background: url(<?php echo CFS()->get('imagen_seccion_promocion'); ?>) no-repeat top center / cover; ">
	<div class="w-100 h-100 d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h3 class="text-uppercase text-white font-gotham-ultra"> <?php echo CFS()->get('titulo_seccion_promocion') ?></h3>
					<div class="separadorblanco d-block m-auto"></div>
				</div>
				<div class="col-12 text-center ">
					<p class="text-white font-gotham-medium"><?php echo CFS()->get('contenido_seccion_promocion') ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-emergenciavh">
	<div class="w-100 h-100 d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="align-items-baseline col-12 d-flex justify-content-center text-center">
					<?php echo CFS()->get('icono_emergencia') ?><h3 class="text-uppercase text-white font-gotham-ultra"> <?php echo CFS()->get('titulo_contenido_emergencias') ?></h3>
				</div>
				<div class="col-12 text-center ">
					<p class="text-white h3 font-gotham-light"><?php echo CFS()->get('numero_emergencia') ?></p>
				</div>
			</div>
		</div>
	</div>
</section>




<?php
get_footer();
