@extends('layouts.app')
@section('content')

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">{{$user->name}}</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{$user->profile_pic}}" class="img-circle img-responsive"> </div>

                    <div class=" col-md-9 col-lg-9 ">
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>E-mail:</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>GoogleID:</td>
                                <td>{{$user->google_id}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection