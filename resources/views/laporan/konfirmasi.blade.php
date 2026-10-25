@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="m-0">Form Lapor Banjir</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('laporan.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_pelapor" class="form-label">Nama Pelapor</label>
                            <input type="text" name="nama_pelapor" id="nama_pelapor" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi Kejadian</label>
                            <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Kecamatan / Desa" required>
                        </div>
                        <div class="mb-3">
                            <label for="tinggi_genangan" class="form-label">Tinggi Genangan (cm)</label>
                            <input type="number" name="tinggi_genangan" id="tinggi_genangan" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_kejadian" class="form-label">Tanggal Kejadian</label>
                            <input type="date" name="tanggal_kejadian" id="tanggal_kejadian" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Kirim Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection