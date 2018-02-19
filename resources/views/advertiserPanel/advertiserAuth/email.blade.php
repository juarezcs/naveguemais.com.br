@extends('portal.template.template1')

<!-- COMPLEMENTO CSS -->
@push('css-and-script')
    <link rel="stylesheet" type="text/css" href="{{url('assets/portal/anunciantes/css/email.css')}}">
@endpush
<!-- /COMPLEMENTO CSS -->

<!-- /CONTEÚDO PÁGINA -->
@section('conteudo')

    <!-- BARRA LOGIN ANUNCIOS -->
    <section class="bra-head-fundo">
        <div class="container-fluid">
            <div class="row bra-ajuste-barra">
                <div class="form-group col-sm-12 col-md-2 bra-conteudo">
                    <p class="form-control-static bra-titulo">Reset Password</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /BARRA LOGIN ANUNCIOS -->
    
    <!-- MARKETING -->
    <section id="email">  
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/anunciantes/email') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-success">
                                            Send Password Reset Link
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- /MARKETING --> 

     <hr class="featurette-divider">

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
    <!-- /JQUERY MASK AND VALIDATIONS -->

@endpush
<!-- /SCRIPT DA PÁGINA -->

