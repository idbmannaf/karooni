@extends('layouts.master')

@push('css')
@endpush

@section('content')

    <section class="container">
        <div class="container-fluid">

            <br>



            @include('alert.alerts')



            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users Management</h4>

                    <div class="card-tools">
                        <a class="btn btn-primary btn-xs" href="{{ route('users.create') }}"> Create New User</a> &nbsp;
                        <button class="btn btn-xs btn-info float-right" onclick="exportTableToCSV('users.csv')">Export To
                            CSV</button>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-sm table-striped">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th width="280px">Action</th>
                                <th>Temporary Password</th>
                            </tr>
                            @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $v)
                                                <label class="badge badge-primary">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-info btn-xs"
                                            href="{{ route('users.show', $user->id) }}">Show</a>
                                        <a class="btn btn-primary btn-xs"
                                            href="{{ route('users.edit', $user->id) }}">Edit</a>
                                       @can('user-delete')
                                       {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                       {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                       {!! Form::close() !!}
                                       @endcan
                                        <a class="btn btn-warning btn-xs" class="btn btn-primary" data-toggle="modal"
                                            data-target="#user{{ $user->id }}">Reset Password</a>
                                    </td>
                                    <td>
                                        {{ $user->temp_password }}
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="user{{ $user->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('resetPassword',['user'=>$user->id]) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="password">{{ __('New Password') }}</label>
                                                            <input type="password" name="password" id="password"
                                                                class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password_confirmation">Confirmation Password</label>
                                                            <input type="password" name="password_confirmation" id="password"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Change
                                                            Password</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </table>



                    </div>

                    {!! $data->render() !!}

                </div>
            </div>

        </div>
    </section>
@endsection

@push('js')
    <script>
        function downloadCSV(csv, filename) {
            var csvFile;
            var downloadLink;

            // CSV file
            csvFile = new Blob([csv], {
                type: "text/csv"
            });

            // Download link
            downloadLink = document.createElement("a");

            // File name
            downloadLink.download = filename;

            // Create a link to the file
            downloadLink.href = window.URL.createObjectURL(csvFile);

            // Hide download link
            downloadLink.style.display = "none";

            // Add the link to DOM
            document.body.appendChild(downloadLink);

            // Click download link
            downloadLink.click();
        }

        function exportTableToCSV(filename) {
            var csv = [];
            var rows = document.querySelectorAll("table tr");

            for (var i = 0; i < rows.length; i++) {
                var row = [],
                    cols = rows[i].querySelectorAll("td, th");

                for (var j = 0; j < cols.length; j++)
                    row.push("\"" + cols[j].innerText + "\"");

                csv.push(row.join(","));
            }

            // Download CSV file
            downloadCSV(csv.join("\n"), filename);
        }
    </script>
@endpush
