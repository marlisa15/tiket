<table class="table table-responsive" id="detailTransaksis-table">
    <thead>
        <tr>
            <th>Waktu</th>
        <th>Jumlah Tiket</th>
        <th>Transaksi Id</th>
        <th>Kapal Id</th>
        <th>Jadwal Id</th>
        <th>Rute Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($detailTransaksis as $detailTransaksi)
        <tr>
            <td>{!! $detailTransaksi->waktu !!}</td>
            <td>{!! $detailTransaksi->jumlah_tiket !!}</td>
            <td>{!! $detailTransaksi->transaksi_id !!}</td>
            <td>{!! $detailTransaksi->kapal_id !!}</td>
            <td>{!! $detailTransaksi->jadwal_id !!}</td>
            <td>{!! $detailTransaksi->rute_id !!}</td>
            <td>
                {!! Form::open(['route' => ['detailTransaksis.destroy', $detailTransaksi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('detailTransaksis.show', [$detailTransaksi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('detailTransaksis.edit', [$detailTransaksi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>