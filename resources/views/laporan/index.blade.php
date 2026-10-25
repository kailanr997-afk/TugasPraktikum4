@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Laporan Banjir</h2>
        <a href="{{ route('laporan.create') }}" class="btn btn-primary">Buat Laporan Baru</a>
    </div>

    <div class="row">
        @forelse ($laporans as $laporan)
            <div class="col-md-4">
                @include('laporan-card', ['laporan' => $laporan])
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">Belum ada laporan banjir yang tersimpan.</div>
            </div>
        @endforelse
    </div>
</div>
@endsection