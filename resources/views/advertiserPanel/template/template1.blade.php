<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="www.grunpfi.com.br" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{$title or ''}}</title>
        <link rel="shortcut icon" type="image/ico" href="{{url('favicon.ico')}}"/>        
        <link rel="stylesheet" type="text/css" href="{{url('assets/advertiserPanel/template/css/template1.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/advertiserPanel/template/css/hamburgers.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/all/fonts/googlefonts/css/pacifico.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{url('assets/all/fonts/fontawesome/css/fontawesome-all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/all/jquery.mmenu/dist/jquery.mmenu.all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/all/jquery.mhead/dist/jquery.mhead.css')}}">
        <style type="text/css">
			.mh-head {
				background: #4b4b4b;
				color: #fff;
                height: 50px;
                padding: 3.5px 0px 0px 0px;
			}
			.mh-text {
				font-size: 16px;
				font-weight: bold;
			}
            
            .mh-mais {
				font-size: 16px;
				font-weight: bold;
                color: rgb(255, 102, 0);
			}
            
			.mh-head .mh-form .fa {
				color: #4b4b4b;
			}
            
            .mh-head a {
				outline:none;
            }
            
            .mh-head .hamburger-inner,
			.mh-head .hamburger-inner:after, 
			.mh-head .hamburger-inner:before
			{
				background: rgb(255, 102, 0);
			}
		</style>
        
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="{{url('assets/all/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css')}}">
        <!-- /BOOTSTRAP CSS-->
        
        <!-- COMPLEMENTO CSS --> 
        @stack('css')
         <!-- /COMPLEMENTO CSS -->
		
        <!-- VERIFICA O NAVEGADOR INTERNET EXPLORER ABAIXO DA VERSÃO 9 E NORMALIZA PARA MELHOR EXPERIÊNCIA DO USUÁRIO -->
        <!--[if lt IE 9]>
            <script type="text/javascript" src="{{url('assets/all/modernizr/src/html5shiv.js')}}"></script>
            <script type="text/javascript" src="{{url('assets/all/modernizr/src/Modernizr.js')}}"></script>
        <![endif]-->
        <!-- /VERIFICA O NAVEGADOR INTERNET EXPLORER ABAIXO DA VERSÃO 9 E NORMALIZA PARA MELHOR EXPERIÊNCIA DO USUÁRIO -->
        
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        
	</head>
	<body>
        
        <!-- CORPO PAGINA --> 
		<div id="page">
            
            <!-- MENU PORTAL--> 
			<header class="mh-head first Sticky">
				<span class="mh-btns-left">
					<a class="mh-hamburger" href="#menu"></a>
				</span>
				<span class="mh-text">Navegue <span class="mh-mais">+</span> Anunciantes</span>
				<span class="mh-btns-right">
					<a class="fas fa-info" href="#shoppingbag"></a>
				</span>
			</header>
            <!-- /MENU PORTAL--> 
            
            <!-- HACK PARA MANTER O CONTEÚDO ABAIXO DO MENU TOPO --> 
            <div class="clear"></div>
            <!-- /HACK--> 
			
            <!-- CONTEÚDO --> 
            <div id="conteudo">
                
                @yield('conteudo')
            
            </div>
             <!-- /CONTEÚDO -->
            
            <!-- RODAPÉ -->
            <div id="my-footer"></div> 
            <!-- /RODAPÉ -->
            
            <!-- MENU LATERAL ESQUERDO -->
			<nav id="menu">
				<ul>
					<li>
                        <span>
                            <div class="perfil">
                                <img class="btn-foto-empresa" src="{{url('assets/all/images/sem-foto.png')}}" alt="Logo Empresa" title="{{$title or ''}}"/> 
                            </div>
                        </span>
                        <div class="text-left">
                            <h1 class="oculto">{{$title or ''}}</h1>
                            <p>{{ Auth::guard('web_advertiser')->user()->name }}</p>
                            <p>{{ Auth::guard('web_advertiser')->user()->email }}</p>
                            <a href="#">Editar</a>
                        </div>
                    </li>
                    <li>
                        <span>
                            <a href="#">
                                <div class="home"><i class="fas fa-home"></i></div>
                                <div class="home-texto">Home</div>
                            </a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="#">
                                <div class="edit"><i class="far fa-edit"></i></div> 
                                <div class="edit-texto">Incluir</div>
                                <div class="edit-texto">Veículo</div>
                            </a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="#">
                                <div class="bus"><i class="fas fa-bus"></i></div>
                                <div class="bus-texto">Veículos</div>
                            </a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="#">
                                <div class="handshake"><i class="far fa-handshake"></i></div>
                                <div class="handshake-texto">Contratos</div>
                            </a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="#">
                                <div class="phone"><i class="fas fa-phone"></i></div>
                                <div class="phone-texto">Suporte</div>
                            </a>
                        </span>
                    </li>
				</ul>
			</nav>
            <!-- /MENU LATERAL ESQUERDO -->
            
            <!-- MENU LATERAL DIREITO -->
			<nav id="shoppingbag">
				<div>
					<br />
					<p>Você não tem nenhum anuncio ativo no momento.</p>
				</div>
			</nav>
            <!-- /MENU LATERAL DIREITO -->
            
		</div>
        <!-- /CORPO PÁGINA -->
        
        <!-- SCRIPT EXTERNO --> 
        @stack('scripts')
         <!-- /SCRIPT EXTERNO -->
        
        <!-- AJAX-->
        <script type="text/javascript" src="{{url('assets/all/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
        <!-- /AJAX-->
        
        <!-- BOOTSTRAP JS 
        <script type="text/javascript" src="{{url('assets/all/bootstrap/3.3.7-dist/js/bootstrap.min.js')}}"></script>-->
        <script type="text/javascript" src="{{url('assets/all/tether/tether-1.3.3/js/tether.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/all/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js')}}"></script>
        <!-- /BOOTSTRAP JS-->
        
        <!-- JQUERY MASK AND VALIDATIONS -->
        <script type="text/javascript" src="{{url('assets/all/jquery.mask/jquery.mask.min.js')}}"></script>
        <!-- /JQUERY MASK AND VALIDATIONS -->
        
        <!-- MMENU -->
		<script type="text/javascript" src="{{url('assets/all/jquery.mmenu/dist/jquery.mmenu.all.js')}}"></script>
		<script type="text/javascript" src="{{url('assets/all/jquery.mhead/dist/jquery.mhead.js')}}"></script> 
		<script type="text/javascript">
			$(function() {
				$('#menu').mmenu({
                    extensions	: [ 'theme-dark', 'fx-menu-slide', 'shadow-page', 'shadow-panels', 'listview-large', 'pagedim-white' ],
                    pageScroll  : true,
                    iconPanels	: true,
					counters	: true,
                    dragOpen    : { 
                        open: ($.mmenu.support.touch?true:false) 
                    },
                    setSelected : {
                        hover   : true,
                        parent  : true
                    },
                    backButton: {
                        close: true
                    },
					keyboardNavigation : {
						enable	: true,
						enhance	: true
					},
					searchfield : {
						placeholder	    : 'Pesquise em nosso menu',
                        resultsPanel    : true,
                        showTextItems   : true
					},
					navbar : {
						title   : 'Menu Anunciantes'
					},
					navbars	: [
						{
							position	: 'top',
							content		: [ 'searchfield' ]
						}, {
							position	: 'top',
							content		: [ 'breadcrumbs', 'close' ]
						}, {
							position	: 'bottom',
							content: [
                                "<a class='far fa-envelope' href='#/'></a>",
                                "<a class='fab fa-twitter' href='#/'></a>",
                                "<a class='fab fa-facebook-square' href='#/'></a>"
                            ]
						}
					]
				}, {
					searchfield : {
						clear : true
					}
                });
                
				$('#shoppingbag').mmenu({
					navbar: {
						title: 'Informações'
					},
					offCanvas: {
						position: 'right'
					}
				});
                
				$('.mh-head.first').mhead({
					scroll: {
						hide: 200
					}
				});
                
				$('.mh-head.second').mhead({
					scroll: false
				});
                
				$('a[href^="#/"]').click(function() {
					alert( 'Thank you for clicking, but that\'s a demo link.' );
					return;
				})
                        
			});
            
		</script>
        <!-- /MMENU -->
        
    </body>
    <!-- /PAGINA -->  
    
</html>