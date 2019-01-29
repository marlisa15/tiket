<table class="table table-responsive" id="rutes-table">
    <thead>
        <tr>
            <th>Nama</th>
        <th>Harga</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rutes as $rute)
        <tr>
            <td>{!! $rute->nama !!}</td>
            <td>{!! $rute->harga !!}</td>
            <td>
                {!! Form::open(['route' => ['rutes.destroy', $rute->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rutes.show', [$rute->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rutes.edit', [$rute->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>