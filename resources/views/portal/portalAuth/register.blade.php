@extends('portal.template.template2')

<!-- COMPLEMENTO CSS -->
@push('css-and-script')
    <link rel="stylesheet" type="text/css" href="{{url('assets/portal/portalAuth/css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/portal/portalAuth/css/responsive-login.css')}}">
@endpush
<!-- /COMPLEMENTO CSS -->

<!-- /CONTEÚDO PÁGINA -->
@section('conteudo')
    
    <!-- MARKETING -->
    <section id="marketing">  
        
        <div class="container marketing"> 
            
            <!-- MENSAGEM TOPO -->
            <div class="titulo-centro">
                <h1 class="mt-titulo-topo"><span class="laranja-grunpfi">Identifique-se</span> e tenha acesso ao conteúdo exclusivo preparado por nossa equipe e nossos parceiros para você.</h1>
                <h2 class="mt-featurette-heading"><span class="text-muted"></span></h2>
                <p class="lead">Estamos com vocë em sua viagem, passeio e até mesmo nas horas das compras em supermercados, shopping centers e terminais rodoviários, sempre em parcerias com as principais empresas do mercado para lhe oferecer internet livre e promoções exclusivas.</p>
            </div>
            <!-- /MENSAGEM TOPO -->
            
            <!-- DIVISÃO -->
            <hr class="featurette-divider">
            <!-- /DIVISÃO -->
            
            <!-- FORMULARIOS MEIO -->
            <div class="row featurette">
                <div class="col-md-5 order-md-1">
                    <div class="container bootstrap-iso">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="fm-featurette-heading"><span class="text-muted">Identifique-se.</span></h2>
                                <p class="lead">A sua segurança e a dos outros usuários estão em primeiro lugar.</p>    
                            </div>
                            <div class="col-lg-12 section-padding-bottom"> 
                                <form id="frmLoginUsuarios" name="frmLoginUsuarios" role="form" method="post" action="{{ url('/login') }}" autocomplete="on">
                                    
                                    {{ csrf_field() }}
                                    <input type="hidden" name="password" value="">
                                    
                                    <!-- INFORMATIVO DE ERROS -->
                                    <div id="qdInfoPanelLogin" class="card card-oculto">
                                        <div href="#qdInfoLogin" id="qdInfoValidLogin" data-toggle="collapse" data-parent="#accordion" class="card-header panel-heading-feedback" role="tab"  aria-expanded="true">Atenção!</div>
                                        <div id="qdInfoLogin" class="collapse"  role="tabpanel" aria-labelledby="qdInfoValid">
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <div id="cpInfoValidLogin" class="table-responsive">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /SELEÇÃO TIPO CONTA -->
                                    
                                    <div class="panel-group">
                                        <div class="card">
                                            <h3 class="card-header panel-heading panel-heading-default">Quem Sou</h3>
                                            <div class="card-block">
                                                <div class="row"> 
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <div class="input-group input-group-sm">
                                                            <div class="input-group-addon">
                                                                <i class="fas fa-user"></i>
                                                            </div>
                                                            <input 
                                                               class="form-control input-sm" 
                                                               id="cpEmailLogin" 
                                                               name="email" 
                                                               value="{{ old('email') }}" 
                                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                               placeholder="informe seu e-mail" 
                                                               type="email" 
                                                               required="required"/>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('email'))
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <span class="help-block bla-msg-erro">
                                                            {{ $errors->first('email') }}
                                                        </span>
                                                    </div>
                                                    @endif
                                                </div>  
                                                <div class="row">
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <div class="input-group input-group-sm">
                                                            <div class="text-center">
                                                                <button id="btnLogar" class="btn btn-primary pointer" name="btnLogar" type="submit" value="logar">Enviar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 order-md-1 borda-left">
                    <div class="container bootstrap-iso">
                         <div class="row">
                            <div class="col-lg-12">
                                <h2 class="featurette-heading"><span class="text-muted">Cadastre-se.</span></h2>
                                <p class="lead">O Navegue<span class="laranja-grunpfi">+</span> conecta as pessoas certas, com as oportunidades certas e nos horários certos, levando em consideração o perfil dos usuários e as oportunidades disponiveis em toda nossa rede. <span class="laranja-grunpfi font-bold">Preencha o formulário abaixo:</span></p>
                            </div>
                            <div class="col-lg-12">
                                <form id="frmCadUsuarios" name="frmCadUsuarios" role="form" method="post" action="{{ url('/register') }}" autocomplete="on">
                                    
                                    {{ csrf_field() }}
                                    <input type="hidden" name="password" value="">
                                    
                                    <div role="tablist" aria-multiselectable="true">                          

                                        <!-- INFORMATIVO DE ERROS -->
                                        <div id="qdInfoPanel" class="card card-oculto">
                                            <div href="#qdInfo" id="qdInfoValid" data-toggle="collapse" data-parent="#accordion" class="card-header panel-heading-feedback" role="tab"  aria-expanded="true">Atenção!</div>
                                            <div id="qdInfo" class="collapse"  role="tabpanel" aria-labelledby="qdInfoValid">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div id="cpInfoValid" class="table-responsive">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /INFORMATIVO DE ERROS -->

                                        <!-- DADOS DA CONTA -->
                                        <div id="qdInfoPessoaisPanel" class="card">
                                            <div href="#qdInfoPessoais" id="qdInfoPessoaisValid" class="card-header panel-heading-selecao" role="tab"  aria-expanded="true">Quem é você? <span class="color-red">*</span></div>
                                            <div id="qdInfoPessoais" role="tabpanel" aria-labelledby="qdInfoPessoaisValid">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgName" for="name" class="input-group-addon">Nome *</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="name" 
                                                                   name="name" 
                                                                   value="{{ old('name') }}" 
                                                                   placeholder="" 
                                                                   type="text" 
                                                                   required="required" 
                                                                   minlength="5"/>   
                                                                @if ($errors->has('name'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgEmail" for="email" class="input-group-addon">E-mail *</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="email" 
                                                                   name="email" 
                                                                   value="{{ old('email') }}" 
                                                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                                   placeholder="exemplo@exemplo.com" 
                                                                   type="email" 
                                                                   required="required"/>
                                                            </div>
                                                        </div>
                                                        
                                                        @if ($errors->cadastro->has('email'))
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <span class="help-block bla-msg-erro">
                                                                {{ $errors->cadastro->first('email', ' Email já cadastrado!') }}
                                                            </span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgANascimento" for="year_id" class="input-group-addon">Nascido em *</label>
                                                                <select 
                                                                    id="year_id" 
                                                                    name="year_id"
                                                                    value="{{ old('year_id') }}"
                                                                    type="select"
                                                                    required="required"
                                                                    class="select form-control">
                                                                    <option value=""></option>
                                                                    @foreach($years as $y)
                                                                        @if($y->id == old('year_id'))
                                                                            <option value="{{$y->id}}" selected>{{$y->year}}</option>
                                                                        @else
                                                                            <option value="{{$y->id}}">{{$y->year}}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                                @if ($errors->has('year_id'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('year_id') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgGenre" for="genre_id" class="input-group-addon">Sexo *</label>
                                                                <select 
                                                                    id="genre_id" 
                                                                    name="genre_id"
                                                                    value="{{ old('genre_id') }}"
                                                                    type="select"
                                                                    required="required"
                                                                    class="select form-control">
                                                                    <option value=""></option>
                                                                    @foreach($genres as $g)
                                                                        @if($g->id == old('genre_id'))
                                                                            <option value="{{$g->id}}" selected>{{$g->genre}}</option>
                                                                        @else
                                                                            <option value="{{$g->id}}">{{$g->genre}}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                                @if ($errors->has('genre_id'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('genre_id') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>   
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div class="form-check form-check-inline">
                                                                <label id="lgLegal" for="accepted_terms" class="form-check-label legal-texto">
                                                                    <input 
                                                                        id="cbLegal" 
                                                                        class="form-check-input" 
                                                                        type="checkbox" 
                                                                        name="accepted_terms" 
                                                                        value="1" 
                                                                        checked
                                                                        required="required">
                                                                        Ao continuar, você também aceita as <a href="#">Condições de serviço</a> e a <a href="#">Politica de privacidade</a> do Naveguemais.com.br.
                                                                    @if ($errors->has('accepted_terms'))
                                                                        <span class="help-block">
                                                                            <strong>{{ $errors->first('accepted_terms') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </label>
                                                            </div>
                                                            <div class="radio legal-texto">Os campos marcados com (<span class="color-red">*</span>) são obrigatórios</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div class="input-group input-group-sm">
                                                                <div class="text-center">
                                                                    <button id="btnEnviar" class="btn btn-padrao pointer" name="btsubmit" type="submit" value="logar">Enviar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /CADASTRO DOS DADOS DA CONTA -->

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /FORMULARIOS MEIO -->
            
            <!-- DIVISÃO -->
            <hr class="featurette-divider">
            <!-- /DIVISÃO -->
            
        </div> 
        
    </section>
    <!-- /MARKETING --> 

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    <!-- /FOOTER -->

@endsection
<!-- /CONTEÚDO PÁGINA -->


<!-- SCRIPT DA PÁGINA -->
@push('scripts')

    <!-- POPPER AND HOLDER -->
    <script type="text/javascript" src="{{url('assets/all/vendor/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/all/vendor/holder.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/portal/portalAuth/js/validaCadastro.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/portal/portalAuth/js/validaLogin.js')}}"></script>
    <!-- /JQUERY MASK AND VALIDATIONS -->

@endpush
<!-- /SCRIPT DA PÁGINA -->

