@extends('portal.template.template1')

<!-- COMPLEMENTO CSS -->
@push('css-and-script')
    <link rel="stylesheet" type="text/css" href="{{url('assets/portal/advertiser/css/advertiser.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/portal/advertiser/css/responsive-advertiser.css')}}">
@endpush
<!-- /COMPLEMENTO CSS -->   

<!-- /CONTEÚDO PÁGINA -->
@section('conteudo')

    <!-- BARRA LOGIN ANUNCIOS -->
    <section class="bla-head-fundo">
        <div class="container-fluid">
            <form id="blaFrmLogin" name="blaFrmLogin" role="form" method="post" action="{{ url('/anunciantes/login') }}" autocomplete="on">
                
                {{ csrf_field() }}
                
                <div class="row justify-content-end bla-ajuste-barra">
                    <div class="form-group col-sm-12 col-md-1 bla-conteudo">
                        <p class="form-control-static bla-titulo">Meus Anuncios</p>
                    </div>
                    <div class="form-group col-sm-12 col-md-2 bla-conteudo">
                        <label for="cpEmailLogin" class="sr-only">Email</label>
                        <input 
                           class="form-control form-control-sm" 
                           id="email" 
                           name="email" 
                           value="" 
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                           placeholder="e-mail" 
                           type="email" 
                           required="required"/>
                        @if ($errors->has('email'))
                            <span class="help-block bla-msg-erro">
                                <p>{{ $errors->first('email') }}</p>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12 col-md-1 bla-conteudo">
                        <label for="cpSenhaLogin" class="sr-only">Password</label>
                        <input 
                           class="form-control form-control-sm" 
                           id="password" 
                           name="password" 
                           value="" 
                           placeholder="password" 
                           type="password"
                           minlength="8"
                           maxlength="8"
                           required="required"/>
                        @if ($errors->has('password'))
                           <span class="help-block bla-msg-erro">
                               <p>{{ $errors->first('password') }}</p>
                           </span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12 col-md-1">
                        <div class="row">
                            <div class="col bla-conteudo">
                                <button
                                    id="btnLogarAnuncios"
                                    type="submit" 
                                    class="btn btn-primary btn-sm bla-btn"
                                    name="btnLogarAnuncios"
                                    value="btnLogarAnuncios">
                                    Acessar</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-sm-12 col-md-1">
                        <div class="row">
                            <div class="col bla-conteudo">
                                <p class="form-control-static bla-link"><a href="/anunciantes/register">Cadastre-se!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- /BARRA LOGIN ANUNCIOS -->

    <!-- CAROUSEL -->
    <section id="carousel">  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="{{url('assets/portal/advertiser/images/dona-loja-cafe.jpg')}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="{{url('assets/portal/advertiser/images/dona-loja-flores1.jpg')}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="{{url('assets/portal/advertiser/images/dona-loja-doces.jpg')}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- /CAROUSEL --> 
    
    <!-- MARKETING -->
    <section id="marketing">  
        <div class="container marketing">
             <!-- Three columns of text below the carousel -->
            <div class="titulo-centro">
                <span class="titulo">Como funciona o Navegue<span class="laranja-grunpfi">+</span> Anúncios?</span>
            </div>
            <hr class="featurette-divider">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <div class="icons-grande laranja-grunpfi"><i class="fas fa-tasks"></i></div>
                    <h2>Passo 1</h2>
                    <p>Conte sobre sua empresa para nós.</p>
                    <p class="branco-grunpfi"><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icons-grande laranja-grunpfi"><i class="far fa-image"></i></div>
                    <h2>Passo 2</h2>
                    <p>As informações serão enviadas para uma equipe especializada, que montará o seu anúncio.</p>
                    <p class="branco-grunpfi"><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="icons-grande laranja-grunpfi"><i class="far fa-thumbs-up"></i></div>
                    <h2>Passo 3</h2>
                    <p>Pronto! É só esperar as visitas em seu site.</p>
                    <p class="branco-grunpfi"><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            
            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Nossos Planos. <span class="text-muted">It'll blow your mind.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Fale com nossos especialistas.</h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    <br/>
                    <p class="lead texto-contato"><i class="fas fa-phone icons-medio color-blue"></i> (15) 99803-0485</p>
                    <br/>
                    <h2 class="featurette-heading">Também entramos em contato com você.</h2>
                    <br/>
                </div>
                <div class="col-md-5 order-md-1">
                    <div class="container bootstrap-iso">
                        <div class="row">
                            <div class="col-lg-12"> 
                                <form id="frmCadAnunciantes" name="frmCadAnunciantes" role="form" method="post" action="" autocomplete="on">
                                    <div class="panel-group">
                                        <div class="card">
                                            <h3 class="card-header panel-heading">Forneça os seus dados para contato.</h3>
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <div class="input-group input-group-sm">
                                                            <div class="input-group-addon">
                                                                <i class="fas fa-user"></i>
                                                            </div>
                                                            <input 
                                                               class="form-control input-sm" 
                                                               id="cpName" 
                                                               name="cpName" 
                                                               value="" 
                                                               placeholder="Nome Completo" 
                                                               type="text" 
                                                               required="required" 
                                                               minlength="5"/>    
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <div class="input-group input-group-sm">
                                                            <div class="input-group-addon">
                                                                <i class="far fa-envelope"></i>
                                                            </div>
                                                            <input 
                                                               class="form-control input-sm" 
                                                               id="cpEmail" 
                                                               name="cpEmail" 
                                                               value="" 
                                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                               placeholder="e-mail" 
                                                               type="email" 
                                                               required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <div class="input-group input-group-sm">
                                                            <div class="input-group-addon">
                                                                <i class="fas fa-phone"></i>
                                                            </div>
                                                            <input 
                                                               class="form-control input-sm" 
                                                               id="cpTelContato" 
                                                               name="cpTelContato"
                                                               data-mask="(00) 0000-0000"
                                                               value="" 
                                                               pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"
                                                               placeholder="(__)____-____" 
                                                               type="tel" 
                                                               inputmode="numeric"
                                                               required="required"/>
                                                        </div>
                                                    </div>    
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <div class="input-group input-group-sm">
                                                            <div class="input-group-addon">
                                                                <i class="fas fa-mobile"></i>
                                                            </div>
                                                            <input 
                                                               class="form-control input-sm" 
                                                               id="cpCelContato" 
                                                               name="cpCelContato"
                                                               data-mask="(00) 00000-0000"
                                                               value="" 
                                                               pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"
                                                               placeholder="(__)_____-____" 
                                                               type="tel"
                                                               inputmode="numeric"
                                                               required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <div class="input-group input-group-sm">
                                                            <div class="input-group-addon">
                                                                <i class="far fa-comments"></i>
                                                            </div>
                                                            <textarea class="form-control" rows="5" id="comment"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-xs-12 col-md-12">
                                                        <div class="input-group input-group-sm">
                                                            <div class="text-center">
                                                                <button id="btnEnviar" class="btn btn-primary pointer" name="btsubmit" type="submit" value="logar">Enviar</button>
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
                
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Dados de Audiência. <span class="text-muted">Naveguemais.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
            
        </div> 
    </section>
    <!-- /MARKETING --> 

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    <!-- /FOOTER -->

@endsection
<!-- /CONTEÚDO PÁGINA -->


<!-- SCRIPT DA PÁGINA -->
@push('scripts')

    <!-- POPPER AND HOLDER -->
    <script type="text/javascript" src="{{url('assets/all/vendor/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/all/vendor/holder.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/portal/advertiser/js/validaLogin.js')}}"></script>
    <!-- /JQUERY MASK AND VALIDATIONS -->

@endpush
<!-- /SCRIPT DA PÁGINA -->

