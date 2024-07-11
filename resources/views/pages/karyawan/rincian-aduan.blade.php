@extends('layout.app')

@section('title', 'Rincian Pengaduan')

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
                <h1>Rincian Pengaduan</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="{{ route('pengaduan.update', $laporan->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label>Rincian Aduan</label>
                                    <textarea class="form-control" data-height="250">{{ $laporan->laporan }}</textarea>
                                </div>
                            </div>
                            <div class="col-4">
                                <label>Foto Aduan</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto"
                                            accept=".jpg,.gif,.png,.jpeg,.HEIF" name="foto">
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                </div>
                                <img src="{{ asset($laporan->foto) }}" alt="image" class="img-fluid" width="200"
                                    id="preview">
                            </div>
                        </div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-12 col-md-6 text-center">
                                <button class="btn btn-primary mt-2" type="submit">Simpan</button>
                    </form>
                    <form action="{{ route('pengaduan.destroy', $laporan->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger mt-2" type="submit">Hapus</button>
                    </form>
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
@endpush
