@extends('layouts.master')


@section('content')

    <section class="container">
        <div class="container-fluid">
            <br>

            {{-- MSG --}}
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Show Buyer</h4>
                    <div class="card-tools">
                        <a class="btn btn-primary btn-xs" href="{{ route('buyers.index') }}"> Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $buyer->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Mobile:</strong>
                                {{ $buyer->mobile }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                {{ $buyer->email }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                {{ $buyer->description }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>



@endsection
