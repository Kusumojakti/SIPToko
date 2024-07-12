@extends('layout.app')

@section('title', 'Follow Up Karyawan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Follow Up Pengaduan</h1>
            </div>
            <div class="timeline">
                <div class="timeline-item left">
                    <span class="icon icon-info icon-lg"><i class="fa-solid fa-folder-open"></i></span>
                    <h3 class="my-3 text-primary">Open</h3>
                    <h6 class="my-3">{{ $history[0]->laporan->created_at }}</h6>
                    <p>{{ $history[0]->laporan->laporan }}</p>
                </div>
                @foreach ($history as $index => $item)
                    @if (($index + 1) % 2 == 0)
                        <div class="timeline-item left">
                        @else
                            <div class="timeline-item right">
                    @endif
                    @if ($item->after == 'open')
                        <span class="icon icon-info icon-lg"><i class="fa-solid fa-folder-open"></i></span>
                        <h3 class="my-3 text-primary">Open</h3>
                    @elseif ($item->after == 'completed')
                        <span class="icon icon-info icon-lg"><i class="fa-solid  fa-circle-check"></i></span>
                        <h3 class="my-3 text-primary">Completed</h3>
                    @elseif ($item->after == 'in progress')
                        <span class="icon icon-info icon-lg"><i class="fa-solid fa-bars-progress"></i></span>
                        <h3 class="my-3 text-primary">Inprogress</h3>
                    @elseif ($item->after == 'pending')
                        <span class="icon icon-info icon-lg"><i class="fa-solid  fa-spinner"></i></span>
                        <h3 class="my-3 text-primary">Pending</h3>
                    @endif
                    <h6 class="my-3">{{ $item->created_at }}</h6>
                    <p>{{ $item->note }}</p>
            </div>
            @endforeach
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-md-6 text-center">
            <a href="#" class="btn btn-primary mt-2" type="button">Selesaikan dan Tutup Pengaduan</a>
        </div>
    </div>
    </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
