@extends('layouts.master')

@push('css')
@endpush

@section('content')
    <div class="container">
        <div class="container-fluid">
            <br>
            @include('alert.alerts')
            
            <div class="card">
                <div class="card-header">
                    <div class="">
                        <h2>Change Password</h2>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('changePassword',['user'=>$user->id]) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Current Password:</strong>
                                    <input type="password" name="c_password" class="form-control" placeholder="Current Password">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>New Password:</strong>
                                    <input type="password" name="password" class="form-control" placeholder="New Password">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Confirmation Password:</strong>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm  Password">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('js')
@endpush
