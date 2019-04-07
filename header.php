<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stil/stilyazi.css" type="text/css" media="all" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="ek/etki1.js"></script>
    <!-- emoji kodları dilenirse kaldırılabilir -->
    <script src="http://twemoji.maxcdn.com/2/twemoji.min.js"></script>
    <script>
        twemoji.parse(document.body);
    </script>
    <!-- emoji kodları son -->
    <title>Tam-Hamd</title>


    
    <?php wp_head();?>
</head>
<body>
    <!-- baslangıc baslik --> 
    <div id="baslik">
        <!-- logo -->
        <div id="logo"><a href="<?php $url = home_url( '/' );
echo esc_url( $url ); ?>"><img src="<?php 
if(get_option('logo_display')!=""){
echo get_option('logo_display');
}else{
    $tLoc =  get_template_directory_uri();

    print $tLoc . "/rsm/logo.png"; 

}


?>"></a></div>
        <!-- butonlar eklenebilir gerekirse, fa icons ile ikonlar değiştirilebilir-->
        <div id="yonlendirBas">
            <ul><?php print get_option('logo');?>
            <a href="<?php print get_option('forum_url'); ?>"><li><span class="fab fa-wpforms"></span><span class="uzakButon">&nbsp;Forum</span></li></a>
            <a href="<?php print get_option('facebook_url'); ?>"><li><span class="fab fa-facebook"></span><span class="uzakButon">&nbsp;Facebook</span></li></a>
            <a href="skype:<?php print get_option('skype_url'); ?>?add""><li><span class="fab fa-skype"></span><span class="uzakButon">&nbsp;Skype</span></li></a>
            </ul>
            <div class="temizle"></div>
        </div>
    </div>
    <div id="gizliMobil">
            <ul>
                    <a href="#"><li><span class="fab fa-wpforms"></span><span>&nbsp;Forum</span></li></a>
                    <a href="#"><li><span class="fab fa-facebook"></span><span>&nbsp;Facebook</span></li></a>
                    <a href="#"><li><span class="fab fa-skype"></span><span>&nbsp;Skype</span></li></a>
            </ul>
            <div class="temizle"></div>
            <hr />
    </div>
   <!-- baslık son --> 

   
  <div id="konteynir">
    <!-- son dakika güncel çubuğu altta-->
    <div id="sonDakika">
            <div class="solSon"><i class="sonDakika fas fa-newspaper"></i><span>ENSON!</span></div>
            <div class="sonIcerik"><marquee direction="left">
            
            <?php	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<a style="text-decoration:none;color:red;" href="' . get_permalink($recent["ID"]) . '"> #' .   $recent["post_title"].'</a> ';
	}
	wp_reset_query(); ?>

            </marquee></div>
    </div>
    <div class="temizle"></div>
    <div class="renkliCubuk"></div>
    <!-- içerikler -->