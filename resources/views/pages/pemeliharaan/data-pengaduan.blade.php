@extends('layout.app')

@section('title', 'Data Pengaduan')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <!-- quill js -->
    <link
      rel="stylesheet"
      href="https://cdn.quilljs.com/1.3.6/quill.snow.css"
    />
    <link
      href="https://cdn.quilljs.com/1.3.6/quill.core.css"
      rel="stylesheet"
    />
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/quill-image-resize-module@3.0.0/image-resize.min.js"></script>
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Data Pengaduan</h1>
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
                    <div class="card">
                            <div class="card-header">
                                <h4>Berikut Data Pengaduan yang diajukan</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table-md table">
                                        <tr>
                                            <th>#</th>
                                            <th>Pengaduan</th>
                                            <th>Created At</th>
                                            <th>Dikomplain oleh</th>
                                            <th>Dikerjakan oleh</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Pintu Rusak</td>
                                            <td>2017-01-09</td>
                                            <td>Irwansyah Saputra</td>
                                            <td>Saputra</td>
                                            <td>
                                                <div class="badge badge-success">Active</div>
                                            </td>
                                            <td>
                                                <div class="dropdown d-inline">
                                                    <button class="btn btn-secondary dropdown-toggle"
                                                        type="button"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                        data-bs-toggle="dropdown">
                                                        Detail
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item has-icon"
                                                            data-toggle="modal" data-target="#editdata"><i class="fa-regular fa-pen-to-square"></i> Edit</a>
                                                        <a class="dropdown-item has-icon"
                                                            href="#"><i class="fa-solid fa-trash"></i> Follow Up Pengaduan</a>
                                                        <a class="dropdown-item has-icon"
                                                            href="#"><i class="fa-solid fa-trash"></i> Hapus</a>
                                                    </div>
                                                </div>
                                            </td> 
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link"
                                                href="#"
                                                tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link"
                                                href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
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
