<li class="{{ Request::is('transaksis*') ? 'active' : '' }}">
    <a href="{!! route('transaksis.index') !!}"><i class="fa fa-edit"></i><span>Transaksis</span></a>
</li>

<li class="{{ Request::is('jadwals*') ? 'active' : '' }}">
    <a href="{!! route('jadwals.index') !!}"><i class="fa fa-edit"></i><span>Jadwals</span></a>
</li>

<li class="{{ Request::is('kapals*') ? 'active' : '' }}">
    <a href="{!! route('kapals.index') !!}"><i class="fa fa-edit"></i><span>Kapals</span></a>
</li>

<li class="{{ Request::is('rutes*') ? 'active' : '' }}">
    <a href="{!! route('rutes.index') !!}"><i class="fa fa-edit"></i><span>Rutes</span></a>
</li>

<li class="{{ Request::is('detailTransaksis*') ? 'active' : '' }}">
    <a href="{!! route('detailTransaksis.index') !!}"><i class="fa fa-edit"></i><span>Detail Transaksis</span></a>
</li>

