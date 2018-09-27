<?php
/*
Template Name: Front Page
*/

get_header(); ?>

	<div id="primary" class="fullwidth">
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114657103-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114657103-1');
</script>
	<main id="main" class="site-main" role="main">

	<h1><?php the_title(); ?></h1>
</div>	
<iframe width="560" height="315" src="https://www.youtube.com/embed/FXhXeXWMtjw?autoplay=1&loop=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	<?php theshop_sections(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
