<!-- Waktu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('waktu', 'Waktu:') !!}
    {!! Form::text('waktu', null, ['class' => 'form-control']) !!}
</div>

<!-- Jumlah Tiket Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah_tiket', 'Jumlah Tiket:') !!}
    {!! Form::number('jumlah_tiket', null, ['class' => 'form-control']) !!}
</div>

<!-- Transaksi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaksi_id', 'Transaksi Id:') !!}
    {!! Form::number('transaksi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Kapal Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kapal_id', 'Kapal Id:') !!}
    {!! Form::number('kapal_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Jadwal Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jadwal_id', 'Jadwal Id:') !!}
    {!! Form::number('jadwal_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rute Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rute_id', 'Rute Id:') !!}
    {!! Form::number('rute_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('detailTransaksis.index') !!}" class="btn btn-default">Cancel</a>
</div>
