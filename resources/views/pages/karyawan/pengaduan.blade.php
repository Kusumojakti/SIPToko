@extends('layout.app')

@section('title', 'Pengaduan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/img.css') }}">
    <!-- quill js -->
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet" />
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/quill-image-resize-module@3.0.0/image-resize.min.js"></script>
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Lihat Pengaduan</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                        <label>Pilih Jenis Pengaduan</label>
                        <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label>Pengaduan Anda</label>
                                <textarea id="pengaduanTextarea" class="form-control" data-height="250" readonly></textarea>
                            </div>
                        </div>
                        <div class="col-4">
                            <label>Foto Aduan</label>
                            <img src="{{ asset('images/9440461.jpg') }}" class="img-fluid" alt="...">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5">
                        <div class="col-12 col-md-12 col-sm-12 col-lg-12">
                            <button id="ubahPengaduanBtn" class="btn btn-primary mt-2" type="button">Ubah Pengaduan</button>
                            <button class="btn btn-danger mt-2" type="submit">Hapus Pengaduan</button>
                            <a href="/tambah-pengaduan" class="btn btn-primary mt-2" type="button">Tambah Pengaduan</a>
                            <button class="btn btn-primary mt-2" type="submit">Kirim Pengaduan</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
    <script src="{{ asset('js/img.js') }}"></script>
    <script>
        document.getElementById('ubahPengaduanBtn').addEventListener('click', function() {
            const textarea = document.getElementById('pengaduanTextarea');
            textarea.removeAttribute('readonly');
        });
    </script>
@endpush
