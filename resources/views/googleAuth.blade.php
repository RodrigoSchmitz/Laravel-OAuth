@extends('layouts.app')
@section('content')
    <style type="text/css">
        .account-box
        {
            border: 2px solid rgba(153, 153, 153, 0.75);
            border-radius: 2px;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            -khtml-border-radius: 2px;
            -o-border-radius: 2px;
            z-index: 3;
            font-size: 13px !important;
            font-family: "Helvetica Neue" ,Helvetica,Arial,sans-serif;
            background-color: #ffffff;
            padding: 20px;
        }
        .logo
        {
            background-position: 0 -4px;
            background-color: lightslategray;
            margin: -5px 0 17px 80px;
            position: relative;
            text-align: center;
            width: 138px;
            border-radius: 1500px;
        }
        .forgotLnk
        {
            margin-top: 10px;
            display: block;
        }
        .or-box
        {
            position: relative;
            border-top: 1px solid #dfdfdf;
            padding-top: 20px;
            margin-top:20px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="account-box">
                    <div class="logo ">
                        <img src="https://imaginarium.disruptiva.com.br/img/disruptiva_w.png" width="80px" height="80px" alt=""/>
                    </div>

                    <div class="or-box">
                        <div class="row">
                            <div class="col-md-12 row-block">
                                <a href="{{ url('auth/google') }}" class="btn btn-lg btn-danger btn-block">
                                    <strong>Login With Google</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection