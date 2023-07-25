
<div class="col-md-2">
    <div class="list-group shadow-sm rounded-0">

        @if (auth()->user()->hasRole('administrator'))
            <a href="{{ url('dasbor') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == '') bg-primary text-light @endif">
                <i class="fa-solid fa-dashboard"></i> Dasbor
            </a>
             <a href="{{ url('dasbor/pegawai') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'pegawai') bg-primary text-light @endif">
                <i class="fa-solid fa-address-card"></i> Pegawai
            </a>
            <a href="{{ url('dasbor/kehadiran') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'kehadiran') bg-primary text-light @endif">
                <i class="fa-solid fa-table"></i> Kehadiran
            </a>
            <a href="{{ url('dasbor/rekapan') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'rekapan') bg-primary text-light @endif">
                <i class="fa-solid fa-chart-simple"></i> Rekapan
            </a>
            <a href="{{ url('dasbor/pengguna') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'pengguna') bg-primary text-light @endif">
                <i class="fa-solid fa-users"></i> Pengguna
            </a>
        @elseif (auth()->user()->hasRole('pegawai'))
            <a href="{{ url('dasbor') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == '') bg-primary text-light @endif">
                <i class="fa-solid fa-dashboard"></i> Dasbor
            </a>
            <a href="{{ url('dasbor/pegawai/laporan') }}" class="list-group-item list-group-item-action @if(Request::segment(2) == 'laporan') bg-primary text-light @endif">
                <i class="fa-solid fa-bookmark"></i> Laporan
            </a>
        @endif
    </div>
</div>
