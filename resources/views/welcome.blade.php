@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.welcomeViews.banner')
    @include('layouts.welcomeViews.empresas')
    @include('layouts.footer')
@endsection

@section('css')
    @parent
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Courgette&display=swap');

        html,
        body {
            font-family: "Courgette", cursive !important;
            padding-top: 50px;
        }

        /* navbar style */
        .transparent-nav {
            background-color: #215ba3e2 !important;
            font-size: 20px
        }

        .nav-rounded {
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .logo {
            text-decoration: none;
        }

        /* banner style */
        .pyme {
            text-decoration: none;
        }

        .img-size {
            width: 60%;
            margin: 0 auto;
            border-radius: 20px;
        }

        .bg-badge {
            background: #215ba3e2;
            background: linear-gradient(90deg, #215ba3e2 62%, #083a77e2 100%);
        }

        .empresa {
            border: none;
            width: 60%;

        }

        /* footer style */
        .footer-custom {
            background-color: #215ba3e2;
        }

        .footer-a {
            text-decoration: none;
        }
    </style>
@endsection
