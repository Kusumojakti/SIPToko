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
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label>Pilih Jenis Pengaduan</label>
                        <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="timeline">
                <!-- Timeline Item 1 -->
                <div class="timeline-item left">
                    <span class="icon icon-info icon-lg"><i class="fa-solid fa-bars-progress"></i></span>
                    <h3 class="my-3 text-primary">Inprogress</h3>
                    <h6 class="my-3">11-07-2024</h6>
                    <p>Eeitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum.</p>
                </div>
                <!-- Timeline Item 2 -->
                <div class="timeline-item right">
                    <span class="icon icon-secondary"><i class="fa-solid fa-spinner"></i></i></span>
                    <h3 class="my-3 text-primary">Pending</h3>
                    <h6 class="my-3">11-07-2024</h6>
                    <p>Bootstrap.end comype your ideas.</p>
                </div>
                <!-- Timeline Item 3 -->
                <div class="timeline-item left">
                    <span class="icon icon-danger"><i class="fa-solid fa-circle-check"></i></span>
                    <h3 class="my-3 text-primary">Completed</h3>
                    <p>Google and by a community of individuals and corporations to address many of the challenges encountered in developing single-page applications.</p>
                </div>
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
