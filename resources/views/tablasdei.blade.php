@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.tablasdeiViews.galeria')
    @include('layouts.tablasdeiViews.contactosdei')
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
            background-color: #e95662a4 !important;
            font-size: 20px
        }

        .nav-rounded {
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .logo {
            text-decoration: none;
        }

        /* shalom page style */
        .bg-badge {
            background: #e95662a4;
            background: linear-gradient(90deg, #e95662a4 62%, #e95662a4 100%);
        }

        .img-size {
            width: 100%;
            height: 50vh;
            border-radius: 20px;
        }

        .card {
            border: none;
        }

        .btn-primary {
            background: #e95662a4 !important;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background: #be9095a4 !important;
            color: white;
            border: none;
        }

        /* footer style */
        .footer-custom {
            background-color: #e95662a4;
        }

        .footer-a {
            text-decoration: none;
        }
    </style>
@endsection
