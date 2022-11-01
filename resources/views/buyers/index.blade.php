@extends('layouts.master')


@section('content')

    <section class="container">
        <div class="container-fluid">
            <br>
            @include('alert.alerts')
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="input-group input-group-sm ">
                            <input type="text"
                                data-url="{{ route('searchAjax', ['type' => 'buyers', 'status' => isset($status) ? $status : null]) }}"
                                class="form-control ajax-data-search" placeholder="Search Buyers">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary w3-border">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buyer Management</h4>
                    <div class="card-tools">
                        @can('role-create')
                            <a class="btn btn-success btn-xs" href="{{ route('buyers.create') }}"> Create New Buyer</a>
                        @endcan
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody class="ajax-data-container">
                                <?php $i = 1; ?>

                                <?php $i = ($data->currentPage() - 1) * $data->perPage() + 1; ?>
                            @forelse ($data as $key => $role)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a class="btn btn-info btn-xs" href="{{ route('buyers.show', $role->id) }}">Show</a>
                                        @can('role-edit')
                                            <a class="btn btn-primary btn-xs" href="{{ route('buyers.edit', $role->id) }}">Edit</a>
                                        @endcan
                                        @can('role-delete')
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['buyers.destroy', $role->id], 'style' => 'display:inline']) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                            {!! Form::close() !!}
                                        @endcan
                                        <a class="btn btn-warning btn-xs" href="{{ route('buyerOrdersList', ['buyer'=>$role->id]) }}">All Orders</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                @empty
                                <tr>
                                    <td class="text-danger"> No Buyers Found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        {!! $data->render() !!}
                    </div>
                </div>
            </div>
            
            {{-- <p class="text-center text-primary"><small>{{ env('APP_NAME') }}</small></p> --}}

        </div>
    </section>

@endsection
@push('js')
<script>
    $(function() {


        var delay = (function() {
            var timer = 0;
            return function(callback, ms) {
                clearTimeout(timer);
                timer = setTimeout(callback, ms);
            };
        })();


        //////////////////////
        $(document).on('keypress', '.ajax-data-search', function(e) {
            if (e.which == 13) {
                e.preventDefault();
            }
        });
        //////////////////////
        $(document).on("keyup", ".ajax-data-search", function(e) {
            e.preventDefault();
            var that = $(this);
            var q = e.target.value;
            console.log(q)
            var url = that.attr("data-url");
            var urls = url + '?q=' + q;
            console.log(urls)


            delay(function() {
                $.ajax({
                    url: urls,
                    type: 'GET',
                    cache: false,
                    dataType: 'json',
                    success: function(response) {
                        // console.log(response.page);
                        $(".ajax-data-container").empty().append(response.page);
                    },
                    error: function() {}


                });
            }, 999);



        });
        //////////////////////admin search end //////////////////
        $(document).on('click', '.ajax-pagination-area .pagination li a', function(e) {
            e.preventDefault();

            var url = $(this).attr('href');

            $.ajax({
                url: url,
                type: 'GET',
                cache: false,
                dataType: 'json',
                success: function(response) {
                    console.log(response.page)
                    $(".ajax-data-container").empty().append(response.page);
                },
                error: function() {}
            });

        });

    });
</script>
@endpush