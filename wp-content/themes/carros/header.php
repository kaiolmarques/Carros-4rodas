<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/jquery/jquery-1.12.1.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
</head>

<body>

	<header>
	
	<div class="banner" style="
			width:738px;
			margin:0 auto;
			margin-bottom:20px;
	">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/banner.jpg" style="margin:0 auto;" />
	</div>	
		
	
		<nav>
			
			<!-- div class="topo-procurar" >
				<div class="inner-addon right-addon">
					<i class="glyphicon glyphicon-search"></i>
					<input type="text" class="form-procurar" Placeholder="Procurar" />
				</div>
			</div -->
			
			<ul class="topo-items" >
				<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/logo.png" alt="Quatro Rodas" title="Quatro Rodas" /></li>
				<li class="social">
					<ul>
						<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/face.png" /></a></li>
						<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/insta.png" /></a></li>
						<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/twitter.png" /></a></li>
						<li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/abril.png" /></a></li>
					</ul>
				</li>
				<?php
					add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
					add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
					add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
					add_filter('menu-principal', 'my_css_attributes_filter', 100, 1);
					add_filter('partial-refreshable-nav-menu partial-refreshable-nav-menu-1 menu-principal-container', 100, 1);
					
					$options = array(
						'theme_location' => 'top-pages-menu',
						'echo' => false
						,'container' => false
					);

					function my_css_attributes_filter($var) {
					  return is_array($var) ? array() : '';
					}
				
					if(has_nav_menu('top-pages-menu')) {
						$menu = wp_nav_menu($options);
						$menu = preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
						$menu = preg_replace('<ul class="sub-menu">', 'div><ul', $menu );
						$menu = preg_replace('</ul>', '/ul></div', $menu );
						echo $menu;
					} else {
						wp_list_pages();
					}
				?>
				
			<li>
					<input type="text" class="form-procurar" Placeholder="Procurar" />
					<i class="glyphicon glyphicon-search"></i>
				</div>
			</li>	
				
			</ul>

		</nav>

	</header>	

	<nav class="acessados">
	 <ul>
		<li>SALÃO DO AUTOMÓVEL</li>
		<li>RENEGADE</li>
		<li>NOVO SANDERO</li>
		<li>NOVO FOX</li>
		<li>NOVO KA</li>
		<li>HB 20</li>
		<li>DUSTER</li>
		<li>GOLF</li>
		<li>COROLLA</li>
		<li>CIVIC</li>
		<li>IA - ZI</li>
	  </ul>
	</nav>
	<div class="principal">
		<!-- div class="figura-princial fig1"></div>
		<div class="figura-secundaria fig2"></div>
		<div class="figura-secundaria fig3"></div>
		<div class="figura-secundaria fig4"></div>
		<div class="figura-secundaria fig5"></div -->
		
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fig1.jpg" class="figura-principal" />
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fig2.jpg" class="figura-secundaria" />
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fig3.jpg" class="figura-secundaria" />
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fig4.jpg" class="figura-secundaria" />
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fig5.jpg" class="figura-secundaria" />
		
	</div>
	
	<nav class="links-extras">
		<figure>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fig6.jpg">
			<h4>AUDI S3 X MERCEDES-BENZ CLA 45 AMG</h4>
			<h5>Pista livre para o embate entre dois cometas de cauda curta</h5>
			<a href="#">TROLLER T4 X JEEP RENEGADE</a>
		</figure>
		<figure>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fig7.jpg">
			<h4>AUDI S3 X MERCEDES-BENZ CLA 45 AMG</h4>
			<h5>Pista livre para o embate entre dois cometas de cauda curta</h5>
			<a href="#">TROLLER T4 X JEEP RENEGADE</a>
		</figure>
		<figure>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fig8.jpg">
			<h4>AUDI S3 X MERCEDES-BENZ CLA 45 AMG</h4>
			<h5>Pista livre para o embate entre dois cometas de cauda curta</h5>
			<a href="#">TROLLER T4 X JEEP RENEGADE</a>
		</figure>
		<figure>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/fig9.jpg">
			<h4>AUDI S3 X MERCEDES-BENZ CLA 45 AMG</h4>
			<h5>Pista livre para o embate entre dois cometas de cauda curta</h5>
			<a href="#">TROLLER T4 X JEEP RENEGADE</a>
		</figure>
	</nav>

</body>
	<script>
		$(window).on('scroll', function () {
			var scrollTop = $(window).scrollTop();
			if (scrollTop > 15) {
				$('nav.acessados').stop().animate({"margin-top": "227px"},20);
				$('ul.topo-items,ul.topo-items > li').stop().animate({height: "60px"},20);
				$('ul.topo-items > li div').stop().animate({'top': "60px"},20);
				if($('ul.topo-items li.social ul').css("visibility")=="hidden") {
					$('ul.topo-items li.social ul').css({opacity: 0, visibility: "visible"}).animate({opacity: 1.0}, 200);
				}
			} else {
				$('nav.acessados').stop().animate({"margin-top": "207px"},20);		
				$('ul.topo-items,ul.topo-items > li').stop().animate({height: "80px"},20);
				$('ul.topo-items > li div').stop().animate({'top': "80px"},20);
				if($('ul.topo-items li.social ul').css("visibility")=="visible") {
					$('ul.topo-items li.social ul').css({opacity: 1.0, visibility: "hidden"}).animate({opacity: 0}, 200);
				}
			}
		});
	</script>
</html>