<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="www.grunpfi.com.br" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{$title or ''}}</title>        
        <link rel="apple-touch-icon" sizes="180x180" href="{{url('favicon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{url('favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{url('favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{url('favicon/manifest.json')}}">
        <link rel="mask-icon" href="{{url('favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
        <link rel="shortcut icon" href="{{url('favicon/favicon.ico')}}">
        <meta name="msapplication-config" content="{{url('favicon/browserconfig.xml')}}">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" type="text/css" href="{{url('assets/portal/template/template1/css/template1.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/portal/template/template1/css/hamburgers.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/all/fonts/googlefonts/css/pacifico.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{url('assets/all/fonts/fontawesome/css/fontawesome-all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/all/jquery.mmenu/dist/jquery.mmenu.all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/all/jquery.mhead/dist/jquery.mhead.css')}}">
        <style type="text/css">
			.mh-head {
				background: #4b4b4b;;
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
				outline:none
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
        
        <!-- COMPLEMENTO CSS e JS --> 
        @stack('css-and-script')
         <!-- /COMPLEMENTO CSS e  JS -->
		
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
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="mh-hamburger" href="#menu"></a>
                </span>
                <a class="link-naveguemais" href="/"><span class="mh-text">Portal Navegue <span class="mh-mais">+</span></span></a>
                <span class="mh-btns-right">
                    <a class="fas fa-info" href="#shoppingbag"></a>
                </span>
            </div>
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
                            <img class="botao-perfil" src="{{url('assets/portal/template/template1/images/carolina.jpg')}}"/> 
                        </span>
                        <div class="text-center">
                            <h2>Carolina Muraro</h2>
                            <p>25 Anos</p>
                            <p>Feminino</p>
                            <a href="#">Editar</a>
                        </div>
                    </li>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Categorias</a></li>
                    <li><span>Sobre Nós</span>
                        <ul>
                            <li><a href="#about/history">Nossa História</a></li>
                            <li><span>Nossa Equipe</span>
                                <ul>
                                    <li><a href="#about/team/management">Gerência</a></li>
                                    <li><a href="#about/team/sales">Vendas</a></li>
                                    <li><a href="#about/team/development">Desenvolvimento</a></li>
                                </ul>
                            </li>
                            <li><a href="#about/address">Nosso Endereço</a></li>
                        </ul>
                    </li>
                    <li><a href="/anunciantes">Anunciantes</a></li>
                    <li><a href="/empresas/panelHome">Publishers </a></li>
                    <li><a href="#contact">Contato</a></li>
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
        
        <!-- BOOTSTRAP JS -->
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
						title   : 'Menu Portal'
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
                        title: 'Quadro Informativo'
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
                
                $(document).ready(function(){
                    $('#cpPFPJ').mask('000.000.000-00');
                    $('#cpTelContato').mask('(00) 0000-0000');
                    $('#cpCelContato').mask('(00) 00000-0000');
                });

                $(document).ready(function(){
                    $('#rdTipoPF').click(function() {
                        $('#cpPFPJ').mask('000.000.000-00', { placeholder: "___/___/___-__" });
                        $('#lgPFPJ').html("CPF");
                        $('#lgNome').html("Nome");
                    });
                });

                $(document).ready(function(){
                    $('#rdTipoPJ').click(function() { 
                        $('#cpPFPJ').mask('00.000.000/0000-00', { placeholder: "__.___.___/____-__" });
                        $('#lgPFPJ').html("CNPJ");
                        $('#lgNome').html("Razão Social");
                        $('#cpPFPJ').val("");
                    });
                });
                
                $("#frmCadAnunciantes").submit(function() {
                    $("#cpPFPJ").unmask();
                    $("#cpTelContato").unmask();
                    $("#cpCelContato").unmask();
                    $("#cpCEP").unmask();
                });

                $(document).ready(function(){
                    $('#qdTipoContaValid').click(function() {
                        $("#qdTipoContaValid").removeClass("panel-heading-default").addClass("panel-heading-selecao");
                        $("#qdInfoPessoaisValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdEnderecoValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdLoginValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdEnviarValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdInfoPessoais").collapse('hide');
                        $("#qdEndereco").collapse('hide');
                        $("#qdLogin").collapse('hide');
                    });
                });

                $(document).ready(function(){
                    $('#qdInfoPessoaisValid').click(function() {
                        $("#qdInfoPessoaisValid").removeClass("panel-heading-default").addClass("panel-heading-selecao");
                        $("#qdTipoContaValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdEnderecoValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdLoginValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdEnviarValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdTipoConta").collapse('hide');
                        $("#qdEndereco").collapse('hide');
                        $("#qdLogin").collapse('hide');
                    });
                });

                $(document).ready(function(){
                    $('#qdEnderecoValid').click(function() {
                        $("#qdInfoPessoaisValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdTipoContaValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdEnderecoValid").removeClass("panel-heading-default").addClass("panel-heading-selecao");
                        $("#qdLoginValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdEnviarValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdTipoConta").collapse('hide');
                        $("#qdLogin").collapse('hide');
                        $("#qdInfoPessoais").collapse('hide');
                    });
                });

                $(document).ready(function(){
                    $('#qdLoginValid').click(function() {
                        $("#qdInfoPessoaisValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdTipoContaValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdEnderecoValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdLoginValid").removeClass("panel-heading-default").addClass("panel-heading-selecao");
                        $("#qdEnviarValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdTipoConta").collapse('hide');
                        $("#qdEndereco").collapse('hide');
                        $("#qdInfoPessoais").collapse('hide');
                    });
                });

                $(document).ready(function(){
                    $('#qdEnviarValid').click(function() {
                        $("#qdInfoPessoaisValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdTipoContaValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdEnderecoValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdLoginValid").removeClass("panel-heading-selecao").addClass("panel-heading-default");
                        $("#qdEnviarValid").removeClass("panel-heading-default").addClass("panel-heading-selecao");
                        $("#qdTipoConta").collapse('hide');
                        $("#qdEndereco").collapse('hide');
                        $("#qdInfoPessoais").collapse('hide');
                        $("#qdLogin").collapse('hide');
                        $("#cbLegal").focus();
                    });
                });

                $(document).ready(function() {
                    $("#cpCEP").blur(function() {
                        var cep = $(this).val().replace(/\D/g, '');
                        if (cep != "") {
                            var validacep = /^[0-9]{8}$/;
                            if(validacep.test(cep)) {
                                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                                    if (!("erro" in dados)) {
                                        //Atualiza os campos com os valores da consulta.
                                        $("#cpEndereco").val(dados.logradouro);
                                        $("#cpBairro").val(dados.bairro);
                                        $("#cpCidade").val(dados.localidade);
                                        $("#cpEstado").val(dados.uf);
                                        $("#validaCEP").css("display", "none");  
                                    }else {
                                        $("#cpEndereco").val("");
                                        $("#cpbairro").val("");
                                        $("#cpCidade").val("");
                                        $("#cpEstado").val("");
                                        $("#validaCEP").css("display", "block");                                        
                                    }
                                });
                            } 
                        }
                    });
                });
                
                $(document).ready(function(){
                    
                    $('#form_acesso').mmenu({
                        extensions 	: [ "position-bottom", "fullscreen", "theme-white", "listview-50", "fx-panels-slide-up", "fx-listitems-drop", "border-offset" ],
                        navbar : {
                            title   : 'Bem Vindo!'
                        }
                    });
                    
                });
                
			});
		</script>
        <!-- /MMENU -->
        
	</body>
    <!-- /PAGINA -->  
    
</html>