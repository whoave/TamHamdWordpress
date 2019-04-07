<div id="sagWidget">
        <div class="sonGirilenler">
            <h1>Dostlar</h1>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Dostlar") ) : ?>
            <a href=""><span>R10!</span></a><br />
            <a href=""><span>Google!</span></a><br />
            <a href=""><span>Namaz!</span></a><br />
            <?php endif;?>

           
        </div>    
        <div class="temizle"></div>
        <div class="sonReklamlar">
                <h1>Reklamlaaar</h1>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Reklam") ) : ?>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/ornekleme/300x300.png"></a> 

<?php endif;?>

        </div>
        <div class="temizle"></div>
        <div class="sonGaleri">
                <h1>Galeri</h1>
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Galeri") ) : ?>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/ornekleme/p1.jpg"></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/ornekleme/p2.png"></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/ornekleme/p3.jpg"></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/ornekleme/p3.jpg"></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/ornekleme/p2.png"></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/ornekleme/p1.jpg"></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/ornekleme/p2.png"></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/ornekleme/p3.jpg"></a>
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/ornekleme/p1.jpg"></a>

                <?php endif;?>


             
        </div><br />
        <div class="temizle"></div>
        <div class="kategoriler">
            <h1>Kategoriler</h1>
            <ul>
            <li> <?php wp_list_categories('title_li='); ?>
 </li>
            </ul>
        </div>