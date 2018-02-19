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
        <link rel="stylesheet" type="text/css" href="{{url('assets/portal/template/template2/css/template2.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/portal/template/template2/css/hamburgers.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('assets/all/fonts/googlefonts/css/pacifico.css')}}"/>
		<link rel="stylesheet" type="text/css" href="{{url('assets/all/fonts/fontawesome/css/fontawesome-all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/all/jquery.mmenu/dist/jquery.mmenu.all.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/all/jquery.mhead/dist/jquery.mhead.css')}}">
        
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
			
            <!-- CONTEÚDO --> 
            <div id="conteudo">
                
                @yield('conteudo')
            
            </div>
             <!-- /CONTEÚDO -->
            
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
        
	</body>
    <!-- /PAGINA -->  
    
</html>