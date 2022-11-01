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