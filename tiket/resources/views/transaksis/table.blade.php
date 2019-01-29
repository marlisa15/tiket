<table class="table table-responsive" id="transaksis-table">
    <thead>
        <tr>
            <th>Nama</th>
        <th>No Telp</th>
        <th>Total</th>
        <th>Keterangan</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($transaksis as $transaksi)
        <tr>
            <td>{!! $transaksi->nama !!}</td>
            <td>{!! $transaksi->no_telp !!}</td>
            <td>{!! $transaksi->total !!}</td>
            <td>{!! $transaksi->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['transaksis.destroy', $transaksi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('transaksis.show', [$transaksi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('transaksis.edit', [$transaksi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>