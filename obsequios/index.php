<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dewing&Rosalia</title>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }


#product_area{
	position:relative;
	padding-top: 0;
}


.mix{
	display: none;
}
.product_item .mix{
	display: none;
}
.product_filter {
	margin-bottom: 10px;
}
.product_filter ul {
	margin: 0px 0 40px;
	padding: 0;
	list-style: none;
}
.product_filter ul li {
	font-weight: 400;
	text-transform: uppercase;
	display: inline-block;
	cursor: pointer;
	padding: 12px 22px;
	font-size: 13px;
	border: 1px solid transparent;
	transition: .5s;
	letter-spacing: 1px;
	border-radius: 20px;
	margin:0px;
	color:#777;
	line-height: 1;
}
.product_filter .filter.active {
	color: #33d286;
	border-color: #33d286;
}

.single_product{
    text-align: center;
    overflow: hidden;
	margin-bottom: 30px;	
	border: 1px solid rgba(0,0,0,0.02);
	padding-bottom: 20px;
	background: #fff;
	transition: .5s;
}
.single_product:hover{
    cursor: pointer;
	box-shadow: 5px 5px 25px rgba(0,0,0,0.03);
}

.reservado{
    cursor: no-drop;
    opacity: 0.5;
}

.disponible{
    cursor: pointer;
}

.product_image{
	overflow: hidden;
	position: relative;
}
.product_image img{
    width: 100%;
    height: auto;
    transition: all 1.5s ease 0s;
	
}

.single_product:hover img{
    transform: scale(1.2);
}
.single_product .box-content{
    width: 100%;
    padding: 17px 10px;
    background: #fff;
    position: absolute;
    bottom: -100px;
    left: 0;
    z-index: 1;
    transition: all 0.6s ease 0s;
	overflow: hidden;
	opacity: 0;
	background: #9F6E65;
	
}
.single_product:hover .box-content{
    bottom: 0;
	opacity: 0.8;
}
.box-content a {
	display: inline-block;
	color: #333;
	font-size: 14px;
	width: 35px;
	height: 35px;
	line-height: 35px;
	background: #fff;
	border: 1px solid #fff;
	border-radius: 50%;
	margin: 0 7px;
	transition:.5s;
}
.box-content a:hover {
	color: #9F6E65;
	border-color: #fff;
}

.product_btm_text p {
	color: #8E8E8E;
	text-transform: uppercase;
	font-size: 13px;
}
.product_btm_text h4 {
	text-transform: capitalize;
	margin-top: 17px;
	margin-bottom: 6px;
	font-size: 17px;
}
.product_btm_text h4,
.product_btm_text h4 a{
	color: #333;
}

.new_badge {
	display: inline-block;
	color: #fff;
	padding: 3px 12px;
	font-size: 14px;
	position: absolute;
	top: 15px;
	right: 15px;
	border-radius: 2px;
    background-color: #BF2424;
}

.new_badge2 {
	display: inline-block;
	color: #fff;
    background-color: #33d286;
	padding: 3px 12px;
	font-size: 14px;
	position: absolute;
	top: 15px;
	right: 15px;
	border-radius: 2px;
}
.single_product span.price{
	color: #33d286;
	font-size: 16px;
}
.no-padding{
	padding: 0;
}
.p_rating{
	color: #fec42d;
	cursor: pointer;
}
    </style>

    <link rel='stylesheet' id='glanztheme-library-css' href='../wp-content/themes/glanztheme/css/glanztheme_library.css' type='text/css' media='all' />
    <link rel='stylesheet' id='themify-icons-css' href='../wp-content/themes/glanztheme/fonts/themify-icons.css' type='text/css' media='all' />
    <link rel='stylesheet' id='marsha-font-css' href='../wp-content/themes/glanztheme/fonts/marsha/stylesheet.css' type='text/css' media='all' />
    <link rel='stylesheet' id='glanztheme-main-styles-css' href='../wp-content/themes/glanztheme/css/glanztheme_style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='glanztheme-style-css' href='../wp-content/themes/glanztheme/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-ext-breadcrumbs-add-css-css' href='../wp-content/plugins/unyson/framework/extensions/breadcrumbs/static/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-ext-builder-frontend-grid-css' href='../wp-content/plugins/unyson/framework/extensions/builder/static/css/frontend-grid.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-ext-forms-default-styles-css' href='../wp-content/plugins/unyson/framework/extensions/forms/static/css/frontend.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-shortcode-section-background-video-css' href='../wp-content/plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/css/background.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-shortcode-section-css' href='../wp-content/plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='../wp-content/plugins/unyson/framework/static/libs/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
   <style>
        img.crazy_lazy {
            opacity: 0
        }
    </style>
    <style></style>
</head>   

<body class="page-template page-template-template-one-page page-template-template-one-page-php page page-id-288">
    <div class="gla_page gla_middle_titles" id="gla_page">
        <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>
        <header class="gla_header">
            <nav class="gla_light_nav gla_transp_nav ">
                <div class="container">
                    <div class="gla_logo_container clearfix">
                        <div class="gla_logo_txt"> <a href="#" class="gla_logo">DEWIN &amp; ROSALIA</a>
                            <div class="gla_logo_und">Diciembre 18, 2021</div>
                        </div>
                    </div>
                    <div class="gla_main_menu gla_main_menu_mobile">
                        <div class="gla_main_menu_icon"> <i></i><i></i><i></i><i></i> <b>Menu</b> <b class="gla_main_menu_icon_b">Back</b> </div>
                    </div>
                    <div class="gla_main_menu_content gla_image_bck" data-color="rgba(0,0,0,0.9)" data-image="">
                        <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
                    </div>
                    <div class="gla_main_menu_content_menu gla_wht_txt text-right">
                        <div class="container">
                            <div class="menu-menu-1-container">
                                <ul id="menu-menu-1" class="menu">
                                    <li id="menu-item-766" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-137 current_page_item menu-item-766"><a href="../index.html">Inicio</a></li>
                                    <li id="menu-item-779" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-779"><a href="../friends-blocks/index.html">Regalos</a></li>
                                </ul>
                            </div>
                            <div class="gla_main_menu_content_menu_copy"> </div>
                        </div>
                    </div>
                    <div class="gla_search_block"> </div>
                    <div class="gla_default_menu">
                        <div class="menu-menu-1-container">
                            <ul id="menu-menu-2" class="menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-137 current_page_item menu-item-766"><a href="../index.html">Inicio</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-779"><a href="../friends-blocks/index.html">Regalos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <section class="gla_slider gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="https://www.adn-mundo.com/wp-content/uploads/2021/08/regalos-de-boda.jpg" data-color="">
            <div class="gla_over" data-gradient="" data-color="#282828" data-opacity="0.5"></div>
            <div class="container">
                <div class="gla_slide_txt gla_slide_center_middle text-center">
                    <p><img class="gla_animated_flower" src="../wp-content/themes/glanztheme/images/animations/flowers.gif" data-top-bottom="@src:http://glanz.starkethemes.com/wp-content/themes/glanztheme/images/animations/flowers.gif" height="180" style="height: 180px!important"
                            alt="Glanz"></p>
                    <div class="gla_slide_title">Espacio de Obsequios</div>
                </div>
            </div>
            <a class="gla_scroll_down gla_go" href="#gla_content"> <b></b> Scroll </a>
        </section>
        <section id="gla_content" class="gla_content">
            <div class="fw-page-builder-content">
                <section class=" gla_section gla_image_bck " style=background-color:#ffffff;>
                    <div class="container text-center">
                        <h2 class="gla_h2_title">Obsequiar en 3 pasos</h2>
                        <div class="row gla_icon_boxes">
                            <div class="gla_icon_box fw-col-sm-4 text-center col-xs-12"> <i class="ti flaticon-016-calendar"></i>
                                <div class="gla_icon_box_content">
                                    <h4> <b> PASO 1</b> </h4>Elegir el obsequio con el que más te identifiques y reservarlo</div>
                            </div>
                            <div class="gla_icon_box fw-col-sm-4 text-center col-xs-12"> <i class="ti flaticon-041-cake"></i>
                                <div class="gla_icon_box_content">
                                    <h4> <b> PASO 2 </b> </h4>Dirigirte a la tienda, preguntar por el artículo y comprarlo</div>
                            </div>

                            <div class="gla_icon_box fw-col-sm-4 text-center col-xs-12"> <i class="ti flaticon-006-hand"></i>
                                <div class="gla_icon_box_content">
                                    <h4> <b> PASO 3 </b> </h4>Llevar el obsequio a la ceremonia</div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" gla_section gla_image_bck " style=background-color:#f2f2f2;>
                    <div class="container text-center">
                        <h2 class="gla_h2_title">Obsequios de Boda</h2>
                        <div class="button-group filter-button-group">

                        <?php
                                $obj = json_decode(file_get_contents('http://dyrwedding.com/sistema/index.php?c=categorias&a=getJsonCategorias'), true);
                                echo '<a data-filter="*">Mostrar todos</a>';
                                foreach ($obj as $key => $value) {
                                    if($value['Categoria']){
                                       echo '<a data-filter=".'.$value['Id'].'">'.$value['Categoria'].'</a> ';
                                    }
                                }
                            ?>

                        </div>
                        <div class="gla_portfolio grid">
                        <?php $obj2 = json_decode(file_get_contents('http://dyrwedding.com/sistema/index.php?c=regalos&a=getJsonRegalos'), true); ?>
                               
                                <?php foreach ($obj2  as $key => $value) : ?>

                                    <div class="col-sm-4 gla_anim_box grid-item <?= $value['CategoriaId'] ?>">
                                     <div class="single_product">
                                        <div class="product_image <?= ($value['Stock'] < 1) ? 'reservado' : 'disponible' ?>">
                                        <img src="http://dyrwedding.com/sistema/<?= $value['Imagen']?>" alt="<?= $value['Titulo']?>" width="80">
                                           
                                            <?= ($value['Stock'] < 1) ? '<div class="new_badge ">Reservado</div>' : '<div class="new_badge2">'.$value['Stock'].' Disponible (s)</div>' ?>
                                            <div class="box-content">
                                                <a href="#"><i class="fa fa-cart-plus"></i></a> 
                                            </div>							
                                      
                                        </div>

                                        <div class="product_btm_text">
                                            <h4><a href="#"><?=$value['Titulo'] ?></a></h4>
                                            <span class="price"><b>RD$ <?= number_format($value['Precio'])  ?></b></span>

                                        </div>
                                    </div>
                                </div>

                                <?php endforeach; ?>

                        </div>
                    </div>
                </section>

                <section class=" gla_section gla_image_bck gla_section_sml_padding" style=background-color:#e5e5e5;>
                    <div class="container ">
                        <div class="fw-col-xs-12 fw-col-sm-4 gla_bordered_block gla_grey_border gla_col">
                            <div class=" ">
                                <div class="gla_text_block">
                                    <p>2021 © Devsarrollando.org </p>
                                </div>
                            </div>
                        </div>
                        <div class="fw-col-xs-12 fw-col-sm-4 enh_push_none gla_bordered_block gla_grey_border text-center gla_col">
                            <div class=" ">
                                <div class="gla_social_btns">
                                     <a href="#"><i class="ti ti-facebook gla_icon_box"></i></a> 
                                     <a href="#"><i class="ti ti-instagram gla_icon_box"></i></a>
                            </div>
                        </div>
                        <div class="fw-col-xs-12 fw-col-sm-4 gla_bordered_block gla_grey_border gla_col">
                            <div class=" "> </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
    <script type='text/javascript' src='.././ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' defer='defer'></script>
    <script type='text/javascript'>
        try {
            jQuery.noConflict();
        } catch (e) {};
    </script>
    <script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min.js' defer='defer'></script>
    <!--<script type='text/javascript' src='.././ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js' defer='defer'></script>-->
    <script type='text/javascript' src='../wp-content/plugins/rsvp/rsvp_plugin.js' defer='defer'></script>
    <script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts.js' defer='defer'></script>
    <script type='text/javascript' src='../wp-includes/js/imagesloaded.min.js' defer='defer'></script>
    <script type='text/javascript' src='../wp-content/themes/glanztheme/js/glanztheme_library.js' defer='defer'></script>
    <script type='text/javascript' src='../wp-content/plugins/unyson/framework/static/js/fw-form-helpers.js' defer='defer'></script>
    <script type='text/javascript' src='../wp-content/themes/glanztheme/js/navigation.js' defer='defer'></script>
    <script type='text/javascript' src='../wp-content/themes/glanztheme/js/skip-link-focus-fix.js' defer='defer'></script>
    <script type='text/javascript' src='.././ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js' defer='defer'></script>
    <script type='text/javascript' src='../wp-content/themes/glanztheme/js/glanztheme_script.js' defer='defer'></script>
    <script type='text/javascript' src='../wp-content/plugins/speed-booster-pack/inc/js/jquery.unveil.min.js' defer='defer'></script>
    <script type='text/javascript' src='../wp-includes/js/wp-embed.min.js' defer='defer'></script>

    <script>

    </script>
</body>
</html>