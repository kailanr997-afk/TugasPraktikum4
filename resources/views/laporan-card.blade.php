@php
    if ($laporan->tinggi_genangan < 40) {
        $status = 'Waspada';
        $badgeClass = 'bg-warning text-dark';
    } elseif ($laporan->tinggi_genangan <= 80) {
        $status = 'Siaga';
        $badgeClass = 'bg-orange text-white';
    } else {
        $status = 'Awas';
        $badgeClass = 'bg-danger text-white';
    }
@endphp

<div class="card mb-3 shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h5 class="card-title m-0">{{ $laporan->lokasi }}</h5>
            <span class="badge {{ $badgeClass }} fs-6">{{ $status }}</span>
        </div>
        <p class="card-text mb-1"><strong>Pelapor:</strong> {{ $laporan->nama_pelapor }}</p>
        <p class="card-text mb-1"><strong>Tinggi Genangan:</strong> {{ $laporan->tinggi_genangan }} cm</p>
        <p class="card-text text-muted small"><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($laporan->tanggal_kejadian)->format('d M Y') }}</p>
    </div>
</div>