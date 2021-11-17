<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rosalia & Dewin</title>
    <link rel='stylesheet' id='glanztheme-library-css' href='../wp-content/themes/glanztheme/css/glanztheme_library.css' type='text/css' media='all' />
    <link rel='stylesheet' id='themify-icons-css' href='../wp-content/themes/glanztheme/fonts/themify-icons.css' type='text/css' media='all' />
    <link rel='stylesheet' id='marsha-font-css' href='../wp-content/themes/glanztheme/fonts/marsha/stylesheet.css' type='text/css' media='all' />
    <link rel='stylesheet' id='glanztheme-main-styles-css' href='../wp-content/themes/glanztheme/css/glanztheme_style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='glanztheme-style-css' href='../wp-content/themes/glanztheme/style.css' type='text/css' media='all' />
    <!-- <link rel='stylesheet' id='glanztheme-studio-fonts-css' href='http://fonts.googleapis.com/css?family=Dosis%3A400%2C700%7COpen%2BSans%3A400%2C400i%2C700%2C700i%7CPlayfair+Display%3A400%2C400i%2C700%2C700i' type='text/css' media='all' /> -->
    <link rel='stylesheet' id='fw-ext-breadcrumbs-add-css-css' href='../wp-content/plugins/unyson/framework/extensions/breadcrumbs/static/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-ext-builder-frontend-grid-css' href='../wp-content/plugins/unyson/framework/extensions/builder/static/css/frontend-grid.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-ext-forms-default-styles-css' href='../wp-content/plugins/unyson/framework/extensions/forms/static/css/frontend.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-shortcode-section-background-video-css' href='../wp-content/plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/css/background.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-shortcode-section-css' href='../wp-content/plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='../wp-content/plugins/unyson/framework/static/libs/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet'  href='../css/toastr.min.css'  media='all' />

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
 
img.crazy_lazy {
            opacity: 0
}

.gla_default_menu li i {
    font-size: 23px !important;
}
hr{
    margin-top: 9px !important;
    margin-bottom: 6px !important;
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
                        <div class="gla_logo_txt"> <a href="../index.php" class="gla_logo">ROSALIA &amp; DEWIN</a>
                            <div class="gla_logo_und">Diciembre 18, 2021</div>
                        </div>
                    </div>
                    <div class="gla_main_menu gla_main_menu_mobile">
                        <div class="gla_main_menu_icon"> <i></i><i></i><i></i><i></i> <b>Menú</b> <b class="gla_main_menu_icon_b">Atrás</b> </div>
                    </div>
                    <div class="gla_main_menu_content gla_image_bck" data-color="rgba(0,0,0,0.9)" data-image="">
                        <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
                    </div>
                    <div class="gla_main_menu_content_menu gla_wht_txt text-right">
                        <div class="container">
                            <div class="menu-menu-1-container">
                                <ul id="menu-menu-1" class="menu">
                                    <li id="menu-item-766" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-137 current_page_item menu-item-766"><a href="../index.php">Inicio</a></li>
                                    <li id="menu-item-779" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-779"><a href="index.php">Lista de regalos</a></li>
                                </ul>
                            </div>
                            <div class="gla_main_menu_content_menu_copy"> </div>
                        </div>
                    </div>
                    <div class="info-reserva .gla_first_step .gla_header nav.gla_transp_nav">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-780 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-cart fa-2x"> <span class="badge badge-light" id="cantidadObsequios" style="font: 400 18px/18pxDosis;">0</span></i>
                            </a>
                            <div class="dropdown-menu" id="MyListaUsuario" style="width: 300px;padding:30px;">
                            </div>

                        </li>
                        <li>
                            <a href="#" id="InvitadoOnline"></a>
                        </li>
                    </div>
                    <div class="gla_search_block"> </div>
                    <div class="gla_default_menu">
                        <div class="menu-menu-1-container">
                            <ul id="menu-menu-1" class="menu">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-137 menu-item-766"><a href="../index.php">Inicio</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-779"><a href="index.php">Lista de regalos</a></li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-780 dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-shopping-cart fa-2x"> <span class="badge badge-light" id="cantidadObsequios" style="font: 400 18px/18pxDosis;">0</span></i>
                                    </a>
                                    <div class="dropdown-menu" id="MyListaUsuario" style="width: 300px;padding:30px;">
                                    </div>

                                </li>
                                <li>
                                    <a href="#" id="InvitadoOnline"></a>
                                </li>
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
                    <p><img class="gla_animated_flower" src="../wp-content/themes/glanztheme/images/flowers_slider/flowers.gif" data-top-bottom="@src:../wp-content/themes/glanztheme/images/flowers_slider/flowers.gif" height="180" style="height: 180px!important"
                            alt="Glanz"></p>
                    <div class="gla_slide_title">Espacio de Regalos</div>
                </div>
            </div>
            <a class="gla_scroll_down gla_go" href="#gla_content"> <b></b> Scroll </a>
        </section>
        <section id="gla_content" class="gla_content">
            <div class="fw-page-builder-content">
                <section class=" gla_section gla_image_bck " style=background-color:#ffffff;>
                    <div class="container text-center">
                        <h2 class="gla_h2_title">Regalar en 3 pasos</h2>
                        <div class="row gla_icon_boxes">
                            <div class="gla_icon_box fw-col-sm-4 text-center col-xs-12"> <i class="ti ti-gift"></i>
                                <div class="gla_icon_box_content">
                                    <h4> <b> PASO 1</b> </h4>Elegir el/los regalo/s con el que más te identifiques y agregarlo al carrito para reservarlo</div>
                            </div>
                            <div class="gla_icon_box fw-col-sm-4 text-center col-xs-12"> <i class="ti ti-shopping-cart-full"></i>
                                <div class="gla_icon_box_content">
                                    <h4> <b> PASO 2 </b> </h4>Dirigirte a la tienda, preguntar por el artículo y comprarlo</div>
                            </div>

                            <div class="gla_icon_box fw-col-sm-4 text-center col-xs-12"> <i class="ti ti-mobile"></i>
                                <div class="gla_icon_box_content">
                                    <h4> <b> PASO 3 </b> </h4>Contáctanos para coordinar la entrega del regalo</div>
                            </div>
                        </div>
                        <div style="margin-top: 50px;padding: 40px;background-color: #f2f2f2;max-width: 600px;margin:0 auto;">
                            <p style="margin-bottom:0;"><strong>Nota:</strong> a través de esta página web no se compran los artículos, solo se separa para evitar duplicidad de regalos a modo de control interno. Para comprar el artículo, debe dirigirse a la tienda con el código, foto o nombre del artículo y comprarlo directamente allá.</p>
                        </div>
                        <hr style="margin-top:80px !important;">
                        <div class="row gla_icon_boxes">
                            <h3>También puedes regalarnos un aporte económico a una de nuestras siguientes cuentas:</h3><br>
                            <div class="gla_icon_box fw-col-sm-4 text-center col-xs-12"> <i class="ti ti-gift"></i>
                                <div class="gla_icon_box_content">
                                    <h4><b> Banco Popular</b> </h4>781944228</div>
                            </div>
                            <div class="gla_icon_box fw-col-sm-4 text-center col-xs-12"> <i class="ti ti-gift"></i>
                                <div class="gla_icon_box_content">
                                    <h4><b>BanReservas</b> </h4>3200551850</div>
                            </div>

                            <div class="gla_icon_box fw-col-sm-4 text-center col-xs-12"> <i class="ti ti-gift"></i>
                                <div class="gla_icon_box_content">
                                    <h4><b>APAP</b> </h4>1023539586</div>
                            </div>
                        </div>
                    </div>
                </section>

                 <section class=" gla_section gla_image_bck " style=background-color:#f2f2f2;>
                    <div class="container text-center">
                        <h2 class="gla_h2_title">Regalos de Boda</h2>
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
                               
                                <?php foreach ($obj2  as $key => $value) { 
                                    $Id           = $value['Id'];
                                    $Link         = $value['Link'];
                                    $Titulo       = $value['Titulo'];
                                    $Imagen       = $value['Imagen'];
                                    $Stock        = $value['Stock'];
                                    $Descripcion  = trim($value['Descripcion']);
                                ?>

                                    <div class="col-sm-3 gla_anim_box grid-item   <?= $value['CategoriaId'] ?> <?= ($Stock < 1) ? 'reservado' : 'disponible' ?>" alt="Click para agregar al carrito">
                                     <div class="single_product" data-regaloid="<?=$Id;?>">
                                         <div onclick="AnadirRegalo(this)"  data-regaloId="<?=$Id;?>"  data-titulo="<?= $Titulo ?>"  data-stock="<?=$Stock;?>" >
                                        <div class="product_image ">
                                        <img src="http://dyrwedding.com/sistema/<?= $Imagen?>" alt="<?= $Titulo?>" width="80" alt="Click para agregar al carrito">
                                            <?= ($Stock < 1) ? '<div class="new_badge ">Reservado</div>' : '<div class="new_badge2"><b class="stockdisponible">'.$Stock.'</b> <b>Disponible (s)</b></div>' ?>
                                            <?= ($Descripcion != "") ? "<div class='box-content' style='color:white'>".$Descripcion."</div>" : ""; ?>
                                        </div>
                                        <br>
                                        <?= ($Stock > 0) ? '<b class="rounded-circle"><i class="fa fa-cart-plus text-success fa-2x "></i> Agregar al carrito </b>' : '<b"><i class="fa fa-cart-plus text-danger fa-2x"></i> Agregar al carrito  </b>' ?>
                                        <div class="product_btm_text">
                                            <hr>
                                            <h4><?=$Titulo?></h4>
                                            <span class="price"><b>RD$ <?= number_format($value['Precio'])  ?></b></span><br>
                                        </div>
                                        </div>

                                        <h5><a alt="Click para agregar al carrito"  class="btn btn-secondary" target="_blank" href="<?=$Link?>">Ver en tienda</a></h5>
                                    </div>
                                </div>
                                <?php } ?>
                        </div>
                    </div>
                </section>

                <section class=" gla_section gla_image_bck gla_section_sml_padding" style=background-color:#e5e5e5;>
                    <div class="container ">
                        <!-- <img src="wp-content/themes/glanztheme/images/animations/thnyou.gif" alt=""> -->
                        <img class="gla_animated_flower" src="wp-content/themes/glanztheme/images/animations/thnyou.gif" height="200" style="height: 200px;" alt="">
                    </div>
                </section>
            </div>
        </section>
    </div>
    
    <script type='text/javascript' src='../js/jquery.min.js' defer='defer'></script>
   
   <script type='text/javascript'>

    var nombre = localStorage.getItem("Nombre");
    if(nombre != ""){
        document.getElementById("InvitadoOnline").innerHTML = "Hola, "+ nombre;
    }

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
    <script type='text/javascript' src='../js/toastr.min.js' defer='defer'></script>
    
    <script>
        
        let MyLista = [];

        function AnadirRegalo(param){

            let regaloId        = $(param).attr("data-regaloId");
            let Regalo          = $(param).attr("data-titulo");
            //let Stock           = $(param).attr("data-stock");
            let currentStock    =  $(param).find('.stockdisponible').html();

            if(regaloId){

                if(parseInt(currentStock) > 0){

                var nombre = localStorage.getItem("Nombre");
                var apellido = localStorage.getItem("Apellido");

                var cantidadActual =  $("#cantidadObsequios").html();
                cantidadActual     = parseInt(cantidadActual);

                if (MyLista.length > 0){

                    let existe = false;

                    for (let index = 0; index < MyLista.length; index++) {
                        
                        let element = MyLista[index];
                    
                        if(element.RegaloId == regaloId){
                            existe = true;
                          
                            if(MyLista[index].Cantidad <= currentStock){

                                MyLista[index].Cantidad =  (parseInt(MyLista[index].Cantidad)  + parseInt(1));

                                cantidadActual = parseInt(cantidadActual) + parseInt(1);
                                $("#cantidadObsequios").html(cantidadActual);

                                currentDivStock = parseInt(currentStock) - parseInt(1);
                                $(param).find('.stockdisponible').html(currentDivStock);

                            }else{
                               toastr.error('Regalo agotado', 'info');
                                $(param).addClass('new_badge');
                                $(param).parent().hide();
                            }
                            
                        }
                    }

                    if(existe == false){
                        MyLista.push({
                                RegaloId: regaloId, 
                                Nombre:  nombre,
                                Apellido: apellido,
                                Cantidad: 1,
                                Regalo: Regalo
                            });
                            toastr.options.closeButton = true;
                            toastr.options.closeDuration = 5000;
                            toastr.success('Regalo agregado. Ver carrito para confirmar');
                            $(".fa-shopping-cart").addClass('text-success');
                            
                            cantidadActual = parseInt(cantidadActual) + parseInt(1);
                             $("#cantidadObsequios").html(cantidadActual);

                             currentDivStock = parseInt(currentStock) - parseInt(1);
                            $(param).find('.stockdisponible').html(currentDivStock);
                    }
                        
                }else{
                    
                    MyLista.push({
                        RegaloId: regaloId, 
                        Nombre:  nombre,
                        Apellido: apellido,
                        Cantidad: 1,
                        Regalo: Regalo
                    });

                    toastr.options.closeButton = true;
                    toastr.success('Regalo agregado. Ver carrito para confirmar');
                    $(".fa-shopping-cart").addClass('text-success');
                  

                    cantidadActual = parseInt(cantidadActual) + parseInt(1);
                    $("#cantidadObsequios").html(cantidadActual);

                    currentDivStock = parseInt(currentStock) - parseInt(1);
               
                   $(param).find('.stockdisponible').html(currentDivStock);

                }
                if(parseInt(currentDivStock) == 0){
                    $(param).parent().hide();
                }

                if(parseInt(currentStock) < 1){
                    $(param).parent().hide();
                }


                $("#MyListaUsuario").html('');
                MyLista.forEach(element=>{
                    $("#MyListaUsuario").append('<i class="fa fa-close" data-registro="'+element.RegaloId+'" data-cantidad="'+element.Cantidad+'" onclick="EliminarRegalo(this)"></i><b class="dropdown-item" style="color:black; padding-left:10px;font: 400 18px/18px Dosis;">'+element.Regalo +' ('+ element.Cantidad+ ') <hr></b>');
                });

                $("#MyListaUsuario").append('<center><button type="button" class="btn-success btn btnreserva" style="font: 400 18px/18px Dosis;border: 0;border-radius: 0;-webkit-transition: all 0.3s;-o-transition: all 0.3s;transition: all 0.3s;background: #5cb85c;padding: 12px 15px;line-height: inherit;vertical-align: top;border-radius: 30px;margin-top:10px;" class="btnConfirmarReserva" onclick="guardarOrden()">Confirmar reserva</button></center>');

                }else{
                    toastr.error('Regalo agotado', 'info');
                   $(param).parent().hide();
                }

           }

        }

function EliminarRegalo(elemento){

    let IdElemento  = $(elemento).attr("data-registro");
    let CantidadElemento  = $(elemento).attr("data-cantidad");

    $(".single_product").find("[data-regaloid='"+IdElemento+"']").parent().css("display", "block");

    var stockActualDiv = $(".single_product").find("[data-regaloid='"+IdElemento+"']").find('.stockdisponible').html();
    var nuevoStock = parseInt(stockActualDiv) + parseInt(CantidadElemento);
    $(".single_product").find("[data-regaloid='"+IdElemento+"']").find('.stockdisponible').html(nuevoStock);


   var StockCarrito =  $("#cantidadObsequios").html();
   StockCarrito =  parseInt(StockCarrito) - (CantidadElemento);
   $("#cantidadObsequios").html(StockCarrito);

   if($("#cantidadObsequios").html() == "0"){
    $(".fa-shopping-cart").removeClass('text-success');
    $(".fa-shopping-cart").addClass('text-secondary');
    $(".btnreserva").hide();
   }
    
    $(elemento).next().remove();
    $(elemento).remove();

        MyLista = MyLista.filter(function(item) {
            return item.RegaloId !== IdElemento
        });


}

function guardarOrden(){

      if(MyLista.length > 0){

        let ocurrioError = false;

            MyLista.forEach(orden =>{

                $.ajax({
                    type: "POST",
                    url: "http://dyrwedding.com/sistema/index.php?c=ordenes&a=Save",
                    data: orden,
                    success: function(data){
                            
                        if(data){
                            toastr.success('Regalo reservado', '¡Muchas Gracias!');
                        }else{
                            ocurrioError = true;
                            toastr.error('Ha ocurrido un error. Favor intentarlo mas tarde', 'info');
                        }
                           
                   }, failure: function(errMsg) {
                         toastr.error('Ha ocurrido un error. Favor intentarlo mas tarde', 'info');
                    }
                });
            });

            if(ocurrioError == false){
                MyLista = [];
                $("#MyListaUsuario").html('');
                $("#cantidadObsequios").html("0")
             setTimeout(() => {location.reload();}, 1000);
                
            }

          }
         
   }
    </script>
</body>
</html>
