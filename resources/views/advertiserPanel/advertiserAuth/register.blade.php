@extends('portal.template.template1')

<!-- COMPLEMENTO CSS -->
@push('css-and-script')
    <link rel="stylesheet" type="text/css" href="{{url('assets/advertiserPanel/advertiserAuth/css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/advertiserPanel/advertiserAuth/css/responsive-login.css')}}">
@endpush
<!-- /COMPLEMENTO CSS -->

<!-- /CONTEÚDO PÁGINA -->
@section('conteudo')
    
    <!-- MARKETING -->
    <section id="marketing">  
        
        <div class="container marketing"> 
            
            <!-- MENSAGEM TOPO -->
            <div class="titulo-centro">
                <h1 class="mt-titulo-topo">Faça o seu <span class="laranja-grunpfi">login</span> ou <span class="laranja-grunpfi">cadastre-se</span> em nossa plataforma.</h1>
                <h2 class="mt-featurette-heading"><span class="text-muted">Tenha o controle dos seus anuncios na palma das suas mãos.</span></h2>
                <p class="lead">Veja todos os seus anúncios em um só lugar. Edite e exclua seus anúncios de forma rápida e fácil, altere seu perfil com segurança.</p>
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
                                <h2 class="fm-featurette-heading"><span class="text-muted">Conecte-se.</span></h2>
                                <p class="lead">No mercado atual, estar presente significa estar em todo lugar.</p>    
                            </div>
                            <div class="col-lg-12 section-padding-bottom"> 
                                <form id="frmLoginAnunciantes" name="frmLoginAnunciantes" role="form" method="post" action="{{ url('/anunciantes/login') }}" autocomplete="on">
                                    
                                    {{ csrf_field() }}
                                    
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
                                            <h3 class="card-header panel-heading panel-heading-default">Acessar meus anuncios</h3>
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
                                                            <div class="input-group-addon">
                                                                <i class="fas fa-key"></i>
                                                            </div>
                                                            <input 
                                                               class="form-control input-sm" 
                                                               id="cpSenhaLogin" 
                                                               name="password" 
                                                               placeholder="chave de acesso" 
                                                               type="password"
                                                               minlength="8"
                                                               maxlength="8"
                                                               required="required"/>
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('password'))
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <span class="help-block bla-msg-erro">
                                                            {{ $errors->first('password') }}
                                                        </span>
                                                    </div>
                                                    @endif
                                                </div>   
                                                <div class="row">
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <div class="input-group input-group-sm">
                                                            <div class="text-center">
                                                                <button id="btnLogar" class="btn btn-primary pointer" name="btnLogar" type="submit" value="logar">Login</button>
                                                                <a class="btn btn-link" href="{{ url('/anunciantes/reset') }}">
                                                                    Esqueceu a senha?
                                                                </a>
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
                                <h2 class="featurette-heading"><span class="text-muted">Veja as possibilidades do mundo digital.</span></h2>
                                <p class="lead">O Navegue<span class="laranja-grunpfi">+</span> conecta as pessoas certas e na hora certa para melhorar a publicidade digital. Faça o seu cadastro e conheça a nossa plataforma, sem compromisso, você paga apenas pelos anuncios exibidos e ainda define o valor que você quer pagar. <span class="laranja-grunpfi font-bold">Preencha o formulário abaixo:</span></p>
                            </div>
                            <div class="col-lg-12">
                                <form id="frmCadAnunciantes" name="frmCadAnunciantes" role="form" method="post" action="{{ url('/anunciantes/register') }}" autocomplete="on">
                                    
                                    {{ csrf_field() }}
                                    
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
                                        <!-- /SELEÇÃO TIPO CONTA -->

                                        <!-- SELEÇÃO TIPO CONTA -->
                                        <div id="qdTipoContaPanel" class="card">
                                            <div href="#qdTipoConta" id="qdTipoContaValid" data-toggle="collapse" data-parent="#accordion" class="card-header panel-heading-selecao pointer" role="tab"  aria-expanded="true">Tipo de Conta
                                            <span class="color-red">*</span></div>
                                            <div id="qdTipoConta" class="collapse"  role="tabpanel" aria-labelledby="qdTipoContaValid">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col col-form">
                                                            <label id="lgTipoPF" for="account_type" class="radio tipoContaTexto">
                                                                <input 
                                                                    id="rdTipoPF" 
                                                                    name="account_type"
                                                                    type="radio"  
                                                                    value="pf"
                                                                    checked/>
                                                                    Pessoa Física
                                                            </label>    
                                                        </div>
                                                        <div class="col col-form"></div>                 
                                                        <div class="w-100 col-form"></div>
                                                        <div class="col col-form">
                                                            <label id="lgTipoPJ" for="account_type" class="radio tipoContaTexto">
                                                                <input 
                                                                    id="rdTipoPJ" 
                                                                    name="account_type"
                                                                    type="radio"  
                                                                    value="pj"/> 
                                                                    Pessoa Jurídica
                                                            </label>  
                                                        </div>
                                                        <div class="col col-form"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /SELEÇÃO TIPO CONTA -->

                                        <!-- DADOS DA CONTA -->
                                        <div id="qdInfoPessoaisPanel" class="card">
                                            <div href="#qdInfoPessoais" id="qdInfoPessoaisValid" data-toggle="collapse" data-parent="#accordion" class="card-header panel-heading-default pointer" role="tab"  aria-expanded="true">Dados da Conta <span class="color-red">*</span></div>
                                            <div id="qdInfoPessoais" class="collapse"  role="tabpanel" aria-labelledby="qdInfoPessoaisValid">
                                                <div class="card-block">
                                                    <div id="lnPFPJ" class="row">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgPFPJ" for="cpf_cnpf" class="input-group-addon">CPF *</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="cpPFPJ" 
                                                                   name="cpf_cnpf"
                                                                   value="{{ old('cpf_cnpf') }}" 
                                                                   placeholder="___/___/___-__" 
                                                                   type="text" 
                                                                   autofocus
                                                                   required="required"/>
                                                            </div>
                                                        </div>
                                                        @if ($errors->cadastro->has('cpf_cnpf'))
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <span class="help-block bla-msg-erro">
                                                                {{ $errors->cadastro->first('cpf_cnpf', ' CPF ou CNPJ já cadastrado!') }}
                                                            </span>
                                                        </div>
                                                        @endif
                                                    </div> 
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgNome" for="company_name" class="input-group-addon">Nome *</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="cpName" 
                                                                   name="company_name" 
                                                                   value="{{ old('company_name') }}" 
                                                                   placeholder="" 
                                                                   type="text" 
                                                                   required="required" 
                                                                   minlength="5"/>   
                                                                @if ($errors->has('company_name'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('company_name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgAEconomica" for="economicactivity_id" class="input-group-addon">Atividade Economica *</label>
                                                                <select 
                                                                    id="cpAEconomica" 
                                                                    name="economicactivity_id"
                                                                    value="{{ old('economicactivity_id') }}"
                                                                    type="select"
                                                                    required="required"
                                                                    class="select form-control">
                                                                    <option value=""></option>
                                                                    @foreach($economic_activities as $ea)
                                                                        @if($ea->id == old('economicactivity_id'))
                                                                            <option value="{{$ea->id}}" selected>{{$ea->description}}</option>
                                                                        @else
                                                                            <option value="{{$ea->id}}">{{$ea->description}}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                                @if ($errors->has('economicactivity_id'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('economicactivity_id') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-6">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgTelContato" for="landline_phone" class="input-group-addon">Tel. Fixo</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="cpTelContato" 
                                                                   name="landline_phone"
                                                                   data-mask="(00) 0000-0000"
                                                                   value="{{ old('landline_phone') }}" 
                                                                   placeholder="(__)____-____" 
                                                                   type="tel" 
                                                                   inputmode="numeric"/>
                                                                @if ($errors->has('landline_phone'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('landline_phone') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-md-6">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgCelContato" for="mobile_phone" class="input-group-addon">Tel. Móvel</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="cpCelContato" 
                                                                   name="mobile_phone"
                                                                   data-mask="(00) 00000-0000"
                                                                   value="{{ old('mobile_phone') }}" 
                                                                   placeholder="(__)_____-____" 
                                                                   type="tel"
                                                                   inputmode="numeric"/>
                                                                @if ($errors->has('mobile_phone'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('mobile_phone') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row" id="InstrucaoContato">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgInstrucaoContato" class="legal-texto">Obs.: É obrigatório informar ao menos um telefone para contato.</label>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /CADASTRO DOS DADOS DA CONTA -->

                                        <!-- CADASTRO DO ENDEREÇO DA CONTA -->
                                        <div id="qdEnderecoPanel" class="card">
                                            <div href="#qdEndereco" id="qdEnderecoValid" data-toggle="collapse" data-parent="#accordion" class="card-header panel-heading-default pointer" role="tab"  aria-expanded="true">Endereço de Cobrança <span class="color-red">*</span>
                                            </div>
                                            <div id="qdEndereco" class="collapse"  role="tabpanel" aria-labelledby="qdEnderecoValid">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-4">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgCEP" for="zip_code" class="input-group-addon">CEP *</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="cpCEP" 
                                                                   name="zip_code"
                                                                   data-mask="00000-000"
                                                                   value="{{ old('zip_code') }}" 
                                                                   placeholder="_____-___"
                                                                   minlength="9"
                                                                   maxlength="9"
                                                                   type="text" 
                                                                   inputmode="numeric"
                                                                   required="required"/>
                                                                @if ($errors->has('zip_code'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('zip_code') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row card-oculto" id="validaCEP">
                                                        <div class="form-group col-xs-12 col-md-4 ">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgCEP" class="texto-cep-valid">Cep inválido!</label>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-9">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgEndereco" for="address" class="input-group-addon">Endereço *</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="cpEndereco" 
                                                                   name="address" 
                                                                   value="{{ old('address') }}" 
                                                                   placeholder="" 
                                                                   type="text"  
                                                                   minlength="5"       
                                                                   required="required"/>
                                                                @if ($errors->has('address'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('address') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-md-3">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgNumero" for="number" class="input-group-addon">N° *</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="cpNumero" 
                                                                   name="number" 
                                                                   value="{{ old('number') }}" 
                                                                   placeholder="" 
                                                                   type="text" 
                                                                   required="required"/>
                                                                @if ($errors->has('number'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('number') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-6">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgCidade" for="city" class="input-group-addon">Cidade *</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="cpCidade" 
                                                                   name="city" 
                                                                   value="{{ old('city') }}" 
                                                                   placeholder="" 
                                                                   type="text"
                                                                   minlength="4" 
                                                                   required="required"/>
                                                                @if ($errors->has('city'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('city') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-md-6">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgBairro" for="neighborhood" class="input-group-addon">Barro *</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="cpBairro" 
                                                                   name="neighborhood" 
                                                                   value="{{ old('neighborhood') }}" 
                                                                   placeholder="" 
                                                                   type="text"
                                                                   minlength="4" 
                                                                   required="required"/>
                                                                @if ($errors->has('neighborhood'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('neighborhood') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-xs-12 col-md-4">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgEstado" for="state_id" class="input-group-addon">Estado *</label>
                                                                <select 
                                                                    id="cpEstado" 
                                                                    name="state_id"
                                                                    value="{{ old('state_id') }}"
                                                                    type="select"
                                                                    required="required"
                                                                    class="select form-control">
                                                                    <option value=""></option> 
                                                                    @foreach($states as $st)
                                                                        @if($st->id == old('state_id'))
                                                                            <option value="{{$st->id}}" selected>{{$st->state}}</option>
                                                                        @else
                                                                            <option value="{{$st->id}}">{{$st->state}}</option>
                                                                        @endif
                                                                    @endforeach
                                                                </select>
                                                                @if ($errors->has('state_id'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('state_id') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /CADASTRO DO ENDEREÇO DA CONTA -->

                                        <!-- CADASTRO DE LOGIN ACESSO -->
                                        <div id="qdLoginPanel" class="card">
                                            <div href="#qdLogin" id="qdLoginValid" data-toggle="collapse" data-parent="#accordion" class="card-header panel-heading-default pointer" role="tab"  aria-expanded="true">Login de Acesso <span class="color-red">*</span>
                                            </div>
                                            <div id="qdLogin" class="collapse"  role="tabpanel" aria-labelledby="qdLoginValid">
                                                <div class="card-block">
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
                                                        <div class="form-group col-xs-12 col-md-6">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgSenha" for="password" class="input-group-addon">Senha *</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="cpSenha" 
                                                                   name="password" 
                                                                   value="{{ old('password') }}" 
                                                                   placeholder="" 
                                                                   type="password"
                                                                   required="required"/>
                                                                @if ($errors->has('password'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('password') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-xs-12 col-md-6">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgConfSenha" for="confirm_password" class="input-group-addon">Confirmar Senha *</label>
                                                                <input 
                                                                   class="form-control input-sm" 
                                                                   id="cpConfSenha" 
                                                                   name="confirm_password" 
                                                                   value="{{ old('confirm_password') }}" 
                                                                   placeholder="" 
                                                                   type="password"
                                                                   minlength="8"
                                                                   maxlength="8"
                                                                   required="required"/>
                                                                @if ($errors->has('confirm_password'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->cadastro->first('confirm_password') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="row" id="instrucaoSenha">
                                                        <div class="form-group col-xs-12 col-md-12">
                                                            <div class="input-group input-group-sm">
                                                                <label id="lgInstrucaoSenha" class="legal-texto">Obs.: A senha deve conter 08 caractéres, sendo no mínimo: 2 caracteres em maiúsculo, 2 números e 1 caractere especial.</label>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /CADASTRO DE LOGIN ACESSO -->

                                        <!-- ENVIO E DE ACORDO COM OS TERMOS LEGAIS -->
                                        <div id="qdEnviarPanel" class="card">
                                            <div href="#qdEnviar" id="qdEnviarValid" class="card-header panel-heading-default pointer" role="tab"  aria-expanded="true">Termos Legais <span class="color-red">*</span>
                                            </div>
                                            <div id="qdEnviar" role="tabpanel" aria-labelledby="qdEnviarValid">
                                                <div class="card-block">
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
                                                                        Declaro, para os devidos fins e efeitos legais, serem pessoais e verdadeiras as informações inseridas no cadastro do Naveguemais, sobre as quais assumo todas as responsbilidades, sob pena de incorrer nas sanções previstas nos artigos <a href="https://www.jusbrasil.com.br/busca?q=Art.+299+do+C%C3%B3digo+Penal+-+Decreto+Lei+2848%2F40" target="_blank">299</a> e <a href="https://www.jusbrasil.com.br/busca?q=Art.+307+do+C%C3%B3digo+Penal+-+Decreto+Lei+2848%2F40" target="_blank">307</a> do Código Penal.
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
                                        <!-- /ENVIO E DE ACORDO COM OS TERMOS LEGAIS -->

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
    <script type="text/javascript" src="{{url('assets/advertiserPanel/advertiserAuth/js/validaCadastro.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/advertiserPanel/advertiserAuth/js/validaLogin.js')}}"></script>
    <!-- /JQUERY MASK AND VALIDATIONS -->

@endpush
<!-- /SCRIPT DA PÁGINA -->

