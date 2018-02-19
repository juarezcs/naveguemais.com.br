@extends('portal.template.template1')

<!-- COMPLEMENTO CSS -->
@push('css-and-script')
    
    <link rel="stylesheet" type="text/css" href="{{url('assets/portal/home/css/home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/portal/home/css/responsive-home.css')}}">

@endpush
<!-- /COMPLEMENTO CSS -->

<!-- CONTEÚDO -->
@section('conteudo')
    
    <!-- MENU PESQUISAR -->
    <div class="mh-head second">
        <div class="container-fluid">
            <form class="mh-form">
                <input placeholder="search" />
                <a href="#/" class="fa fa-search"></a>
            </form>
        </div>
    </div>
    <!-- /MENU PESQUISAR -->

    <!-- GALERIAS -->
    <div class="gallery">

        <!-- GALERIA ESQUERDA -->
        <div class="gallery-esquerda">

            <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0"><a href="http://us.puma.com/en_US/home" target="_blank">
                    <img src="{{url('assets/portal/home/images/reebook.jpg')}}" alt="" id="sombra" class="cards-0"/></a>
                </div>
            </div>
            <!-- /BANNERS -->

            <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0">
                    <a href="https://www.facebook.com/restaurantefamiliaritu/?rf=446824612029722" target=“_blank”>
                        <img src="{{url('assets/portal/home/images/rest-familiar.jpg')}}" alt="" id="sombra" class="cards-0"/>
                    </a>
                </div>
            </div>
            <!-- /BANNERS -->

             <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0"><a href="www.fras-le.com" target=“_blank”>
                    <img src="{{url('assets/portal/home/images/flasle.gif')}}" alt="" id="sombra" class="cards-0"/></a>
                </div>
            </div>
            <!-- /BANNERS -->

            <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0">
                    <a href="www.cocsorocaba.com.br" target=“_blank”>
                        <img src="{{url('assets/portal/home/images/coc.jpg')}}" alt="" id="sombra" class="cards-0"/>
                    </a>
                </div>
            </div>
            <!-- /BANNERS -->

            <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0"><a href="www.condominiovistaatlantico.com.br" target=“_blank”>
                    <img src="{{url('assets/portal/home/images/vista-atlantico.gif')}}" alt="" id="sombra" class="cards-0"/></a>
                </div>
            </div>
            <!-- /BANNERS -->

            <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0"><a href="www.grunpfi.com.br" target=“_blank”>
                    <img src="{{url('assets/portal/home/images/plano-anual.gif')}}" alt="" id="sombra" class="cards-0"/></a>
                </div>
            </div>
            <!-- /BANNERS -->

            <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0">
                    <a href="www.facebook.com/Inside-Digital-Signage-117552068889261/?ref=br_rs" target="_blank">
                        <img src="{{url('assets/portal/home/images/cartao-extra.gif')}}" alt="" id="sombra" class="cards-0"/>
                    </a>
                </div>
            </div>
            <!-- /BANNERS -->

            <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0"><a href="www.extra.com.br/cartaoextra/cartao.aspx" target="_blank">
                    <img src="{{url('assets/portal/home/images/caixa-simulador.gif')}}" alt="" id="sombra" class="cards-0"/></a>
                </div>
            </div>
            <!-- /BANNERS -->

            <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0">
                    <div class="thumbnail-v0"><a href="www.pittol.com.br" target="_blank">
                        <img src="{{url('assets/portal/home/images/pittol.jpg')}}" alt="" id="sombra" class="cards-0"/></a>
                    </div>
                </div>
            </div>
            <!-- /BANNERS -->

            <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0">
                    <a href="www.solarimoveis.adm.br" target="_blank">
                        <img src="{{url('assets/portal/home/images/solar-imoveis.gif')}}" alt="" id="sombra" class="cards-0"/>
                    </a>
                </div>
            </div>
            <!-- /BANNERS -->

            <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0"><a href="www.mercadaocampolim.com.br/market.php" target="_blank">
                    <img src="{{url('assets/portal/home/images/mercadao_campolim.gif')}}" alt="" id="sombra" class="cards-0"/></a>
                </div>
            </div>
            <!-- /BANNERS -->

            <!-- BANNERS -->
            <div class="gallery-banner">
                <div class="thumbnail-v0"><a href="www.facebook.com/Inside-Digital-Signage-117552068889261/?ref=br_rs" target="_blank">
                    <img src="{{url('assets/portal/home/images/Tela-de-Wifi.gif')}}" alt="" id="sombra" class="cards-0"/></a>
                </div>
            </div>
            <!-- /BANNERS -->

        </div>
        <!-- /GALERIA ESQUERDA -->

    </div>
    <!-- /GALERIAS -->

    <!-- FORMULÁRIO ACESSO -->
    <nav id="form_acesso">
        
        <div id="app">

            <!-- MENSAGEM TOPO -->
            <div class="titulo-centro">
                <p class="lead"><span class="laranja-grunpfi">Identifique-se</span> ou <span class="laranja-grunpfi">cadastre-se</span> para acessar o nosso conteúdo</p>
            </div>
            
            <!-- LOGIN -->
            <ul id="identificarse">
                <li class="Divider">Identifique-se</li>
                <div class="iu-login">
                    <form id="iuFormLogin" class="inline-form" name="iuFormLogin" role="form" method="post" action="{{ url('/login') }}" autocomplete="on">
                        {{ csrf_field() }}
                        <li>
                            <div class="row iu-row">
                                <div class="col-3 text-left">
                                    <label class="iu-label" for="email">E-mail</label>
                                </div>
                                <div class="col">
                                    <input type="text"
                                                class="form-control-sm iu-input"
                                                id="cpEmailLogin" 
                                                name="email" 
                                                value="{{ old('email') }}" 
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                placeholder="" 
                                                type="email" 
                                                required="required"/>
                                </div>
                                <div class="col-2 iu-btn-identidiicar">
                                    <button id="btnOk" class="btn btn-primary btn-sm pointer" name="btnOk" type="submit" value="ok">OK</button>
                                </div>
                            </div>
                            @if ($errors->cadastro->has('email'))
                            <div class="form-group col-xs-12 col-md-12">
                                <span class="help-block bla-msg-erro">
                                    {{ $errors->identificar->first('email', ' Email não encontrado!') }}
                                </span>
                            </div>
                            @endif
                        </li>
                    </form>
                </div>
            </ul>
            <!-- /LOGIN -->
            
            <!-- CADASTRO -->
            <ul id="identificarse">
                <li class="Divider">Cadastre-se</li>
                <div class="iu-login">
                    <form id="iuFormCadastro" name="iuFormCadastro" role="form" method="post" action="{{ url('/login') }}" autocomplete="on">
                        {{ csrf_field() }}
                        <li>
                            <div class="row iu-row">
                                <div class="col-3 text-left">
                                    <label class="iu-label" for="name">Nome</label>
                                </div>
                                <div class="col">
                                    <input type="text"
                                                class="form-control-sm iu-input"
                                                id="name" 
                                                name="name" 
                                                minlength="5"
                                                value="{{ old('name') }}" 
                                                placeholder="" 
                                                type="text" 
                                                required="required"/>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->cadastro->first('name') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li>
                            <div class="row iu-row">
                                <div class="col-3 text-left">
                                    <label class="iu-label" for="email">E-mail</label>
                                </div>
                                <div class="col">
                                    <input type="text"
                                                class="form-control-sm iu-input"
                                                id="email" 
                                                name="email" 
                                                value="{{ old('email') }}" 
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                placeholder="" 
                                                type="email" 
                                                required="required"/>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->cadastro->first('email') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li>
                            <div class="row iu-row">
                                <div class="col-3 text-left">
                                    <label class="iu-label" for="year_id">Nascimento (Ano)</label>
                                </div>
                                <div class="col">
                                    <select 
                                        class="form-control-sm iu-input"
                                        id="cpEstado" 
                                        name="year_id"
                                        value="{{ old('year_id') }}"
                                        type="select"
                                        required="required">
                                        <option value=""></option>
                                        <option value="Masculino">2000</option> 
                                        <option value="Masculino">1999</option> 
                                        <option value="Masculino">1998</option> 
                                        <option value="Masculino">1997</option> 
                                        <option value="Masculino">1996</option> 
                                    </select>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            @if ($errors->has('year_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->cadastro->first('year_id') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li>
                            <div class="row iu-row">
                                <div class="col-3 text-left">
                                    <label class="iu-label" for="genre_id">Sexo</label>
                                </div>
                                <div class="col">
                                    <select 
                                        class="form-control-sm iu-input"
                                        id="genre_id" 
                                        name="genre_id"
                                        value="{{ old('genre_id') }}"
                                        type="select"
                                        required="required">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option> 
                                    </select>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            @if ($errors->has('genre_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->cadastro->first('genre_id') }}</strong>
                                </span>
                            @endif
                        </li>
                        <li>
                            <div class="row iu-row">
                                <div class="col-3"></div>
                                <div class="col">
                                    <label id="lgLegal" for="accepted_terms" class="form-check-label">
                                        <input 
                                            id="accepted_terms" 
                                            class="form-check-input" 
                                            type="checkbox" 
                                            name="accepted_terms" 
                                            value="1" 
                                            checked
                                            required="required">
                                            <p>Ao continuar, você também aceita as <a id="fechar_form_acesso" href="#">Condições de serviço</a> e a <a id="abrir-termos" href="#">Politica de privacidade</a> da Grumpfi MMD.</p>
                                        @if ($errors->has('accepted_terms'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('accepted_terms') }}</strong>
                                            </span>
                                        @endif
                                    </label>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </li>
                        <li>
                            <div class="row iu-row">
                                <div class="col-3"></div>
                                <div class="col">
                                    <button id="btnCadastrar" class="btn iu-btn-cadastro btn-primary btn-sm pointer" name="btnCadastrar" type="submit" value="cadastrar">Cadastrar</button>
                                </div>
                                <div class="col-2"></div>
                            </div>
                        </li>

                    </form>
                </div>
            </ul>
            <!-- /CADASTRO -->

           
            
        </div>
    </nav>
    <!-- /FORMULÁRIO ACESSO -->
    
@endsection

<!-- SCRIPT DA PÁGINA -->
@push('scripts')

    <!-- POPPER AND HOLDER -->
    <script type="text/javascript" src="{{url('assets/all/vendor/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/all/vendor/holder.min.js')}}"></script>
    <!-- /JQUERY MASK AND VALIDATIONS -->

@endpush
<!-- /SCRIPT DA PÁGINA -->

