<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package earthshot_catalog
 */

?>
<!doctype html>
<html class="no-js" >
	<head>
		<!-- Primary Meta Tags -->
		<meta charset="utf-8">
		<title><?php bloginfo( 'title' ); ?></title>
		<meta name="title" content="<?php bloginfo( 'title' ); ?>">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		
		
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>//favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>//favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>//site.webmanifest">


		
		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PC9RRLK');</script>
<!-- End Google Tag Manager -->

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.min.css?v=1">
		
		<!-- Adobe typekit -->
		<script>
  (function(d) {
    var config = {
      kitId: 'mwc3bnc',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<!-- Adobe typekit -->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class('ja'); ?>>
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PC9RRLK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
		
		<?php wp_body_open(); ?>
				<nav id="nav" class="navbar sticky-top navbar-expand-lg">
		  <div class="container">
    
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_es.svg" alt=""></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	        <li class="nav-item">
          <a class="nav-link" href="#concept">Concept</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link" href="#esg">ESG / SDG</a>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link " href="/earthshot-tv/" aria-expanded="false">
            Earthshot TV
          </a>
          <ul class="dropdown-menu" aria-labelledby="">
            <li><a class="dropdown-item" href="/earthshot-tv/">Earthshot TV</a></li>
            <li><a class="dropdown-item" href="/startups/">Startups</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ecosystem">Ecosystem</a>
        </li>
       
 

 <?php 
// add "raw" key and save data to variable

$langs_array = pll_the_languages( array( 'dropdown' => 1, 'hide_current' => 1, 'raw' => 1 ) );
$currentlang = get_bloginfo('language');

?>
 <!-- <li class="nav-item language-switcher">
    <?php
       
        if($currentlang=="en-US"):
    ?>
      <a class="nav-link " href="/"> JA</a>
    <?php elseif($currentlang=="ja"): ?>
      <a class="nav-link " href="/en/"> EN</a>
    <?php endif; ?>
 </li> -->
 <li class="nav-item language-switcher" style="text-transform: uppercase;">
  <?php if ($langs_array) : ?>
  <div class="drop-block lang">
    <?php foreach ($langs_array as $lang) : ?>
      <a  class="nav-link" href="<?php echo $lang['url']; ?>" class="drop-block__link">
        <?php echo $lang['slug']; ?>
        </a>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
</li>




 

      </ul>    
    </div> 
  		</div>
		</nav>
