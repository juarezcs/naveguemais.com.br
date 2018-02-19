@extends('advertiserPanel.template.template1')

<!-- COMPLEMENTO CSS -->
@push('css')
    <link rel="stylesheet" type="text/css" href="{{url('assets/advertiserPanel/adveriserHome/css/panelHome.css')}}">
@endpush
<!-- /COMPLEMENTO CSS -->

<!-- /CONTEÚDO PÁGINA -->
@section('conteudo')

        <!-- BARRA LOGIN ANUNCIOS -->
    <section class="bha-head-fundo">
        <div class="container-fluid">
            <div class="row justify-content-end bha-ajuste-barra">
                <a href="{{ url('/anunciantes/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/anunciantes/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </section>
    <!-- /BARRA LOGIN ANUNCIOS -->

@endsection
<!-- /CONTEÚDO PÁGINA -->


<!-- SCRIPT DA PÁGINA -->
@push('scripts')


@endpush
<!-- /SCRIPT DA PÁGINA -->

