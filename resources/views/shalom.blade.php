@extends('layouts.app')
@section('content')
    @include('layouts.navbar')
    @include('layouts.shalomViews.galeria')
    @include('layouts.shalomViews.contactoshalom')
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

        /* shalom page style */
        .bg-badge {
            background: #215ba3e2;
            background: linear-gradient(90deg, #215ba3e2 62%, #083a77e2 100%);
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
            background: #215ba3e2 !important;
            color: white;
            border: none;
        }

        .btn-primary:hover {
            background: #59718fe2 !important;
            color: white;
            border: none;
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
