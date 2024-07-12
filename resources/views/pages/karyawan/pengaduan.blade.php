@extends('layout.app')

@section('title', 'Data Pengaduan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
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
                        <select class="form-control" name="jenis_aduans_id" id="jenis_aduans_id">
                            <option value="#">Semua Jenis Pengaduan</option>
                            @foreach ($jenisAduan as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Lihat Aduan</h4>
                                    <div class="card-header-form">
                                        {{-- <button class="btn btn-primary" type="button">Tambah Pengaduan</button> --}}
                                        <a href="{{ route('pengaduan.create') }}" class="btn btn-primary">Tambah
                                            Pengaduan</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table-striped table" id="table-aduan">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">
                                                        #
                                                    </th>
                                                    <th>Pengaduan</th>
                                                    <th>Created At</th>
                                                    <th>Pelapor</th>
                                                    <th>Dikerjakan</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($laporan as $index => $item)
                                                    <tr>
                                                        <td>
                                                            {{ $index + 1 }}
                                                        </td>
                                                        <td>{{ $item->laporan }}</td>
                                                        <td>{{ $item->created_at }}</td>
                                                        <td>
                                                            {{ $item->userPelapor->name }}
                                                        </td>
                                                        <td>
                                                            @if ($item->userPekerja)
                                                                {{ $item->userPekerja->name }}
                                                            @else
                                                                -
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($item->status == 'completed')
                                                                <div class="badge badge-success">Completed</div>
                                                            @elseif ($item->status == 'in progress')
                                                                <div class="badge badge-info">Inprogress</div>
                                                            @elseif ($item->status == 'pending')
                                                                <div class="badge badge-warning">Pending</div>
                                                            @else
                                                                <div class="badge badge-secondary">Unknown Status</div>
                                                            @endif

                                                        </td>
                                                        <td><a href="{{ route('pengaduan.edit', $item->id) }}"
                                                                class="btn btn-primary">Detail</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- modal edit data -->
        <div class="modal fade" id="editdata" aria-hidden="true" aria-labelledby="editdata" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5" id="exampleModalToggleLabel">Edit Data Pengaduan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="add_kodeBrg" class="form-label">Pengaduan</label>
                                <input type="text" class="form-control" id="add_kodeBrg" name="kodeBrg"
                                    placeholder="Masukkan Pengaduan Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="add_kodeBrg" class="form-label">Dikerjakan oleh</label>
                                <input type="text" class="form-control" id="add_kodeBrg" name="kodeBrg" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="add_kodeBrg" class="form-label">Dikomplain oleh</label>
                                <input type="text" class="form-control" id="add_kodeBrg" name="kodeBrg"readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label>Status</label>
                                <select class="form-control">
                                    <option>Open</option>
                                    <option>Inprogress</option>
                                    <option>Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
