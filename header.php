<?php

error_reporting(0);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if ( is_single() ) { ?><?php wp_title(''); ?><?php } else { ?><?php bloginfo('name'); ?><?php } ?></title>


<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Barcode+39+Extended+Text' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontawesome/css/font-awesome.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fontawesome/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/hack.css" />
  
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dark.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css"/>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/hint.css" type="text/css"/>
  

  <link rel="stylesheet" href="https://npmcdn.com/hack/dist/hack.css" />
  
  <link rel="stylesheet" href="https://npmcdn.com/hack/dist/dark.css" />
  

 
  <link rel="stylesheet" href="https://npmcdn.com/prismjs@1.5.1/themes/prism.css" />





  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/prism.css" />
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://npmcdn.com/prismjs@1.5.1/prism.js"></script>

<?php for ($ar=1; $ar<=get_option('posts_per_page'); $ar++) { ?>
<script type="text/javascript">
$(function(){
$('.acilyaziacil<?php echo $ar; ?>').click(function () {
$('.kirkharamilergeliyor<?php echo $ar; ?>').slideToggle(); }); });
</script>
<?php } ?>

	<script>
		$(function(){
			
			$(".cepecevre").hide().delay(1000).fadeIn();
			
		});
	</script>

<meta name="language" content="tr-TR" />
<meta name="location" content="türkiye, tr, turkey" />
<meta name="robots" content="all" />

<?php wp_head(); ?>
<?php echo get_option('analytics'); ?>


    <link rel="alternate" href="/atom.xml" title="1v3m&#39;in bloğu" type="application/atom+xml">
  
  
    <link rel="icon" href="/favicon.png" type="image/x-icon">
  
  
    
    

</head>

 <style>@font-face{font-family:forza;src:url(<?php bloginfo('template_url'); ?>/Forza-Medium.otf)}@import "https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i";@import "https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700";</style> 
 
        
     <body class="hack dark" style="font-family: forza, sans-serif;font-size: 15px;">



    <div class="container">
      <div class="grid">
        <aside class="cell -3of12" role="navigation">
          <div class="t-hackcss-navigation">
  <h2 class="t-hackcss-navigation-heading">Menu</h2>

  <nav class="menu" role="menubar">
    

 
  <?php

function kategori_id(){
  global $wp_query;
  if(is_category() || is_single()){
$cat_ID = get_query_var('cat');
  }
  return $cat_ID;
 }
 $kategori_al = kategori_id(); 
$alt_kategoriler =  get_categories('child_of='.$kategori_al.'&parent='.$kategori_al.'');
foreach ($alt_kategoriler as $kat)  { 
?>
 
 <a class="menu-item active"
        role="menuitem" href="<?php echo get_category_link( $kat->cat_ID ); ?>" title="">
         <?php echo  $kat->name; ?><div class="pull-right">»</div>
      </a>
	  
 
 
<?php } ?>
	  

      
    

    
  </nav>

</div>

        </aside>
    