@extends('layouts.main')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Hai, {{ Auth::user()->name }}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">
                Tambah Admin
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                Tambah Admin
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="nama-admin" class="col-form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama-admin" />
                                </div>
                                <div class="form-group">
                                    <label for="username-admin" class="col-form-label">Username</label>
                                    <input type="text" class="form-control" id="username-admin" />
                                </div>
                                <div class="form-group">
                                    <label for="password-admin" class="col-form-label">Password</label>
                                    <input type="text" class="form-control" id="password-admin" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Inti</td>
                            <td>Inti Blug</td>
                            <td class="text-success">Aktif</td>
                            <td>
                                <button type="button" class="btn btn-info">
                                    <i class="fas fa-lock"></i>
                                </button>
                                <button type="button" class="btn btn-secondary" data-toggle="modal"
                                    data-target="#ubah-admin">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <div class="modal fade" id="ubah-admin" tabindex="-1" aria-labelledby="ubah-admin"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ubah-admin">
                                                    Ubah Data Admin
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="ubah-nama-admin" class="col-form-label">Nama</label>
                                                        <input type="text" class="form-control" id="ubah-nama-admin" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ubah-username-admin"
                                                            class="col-form-label">Username</label>
                                                        <input type="text" class="form-control"
                                                            id="ubah-username-admin" />
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-primary">
                                                    Ubah
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Programming</td>
                            <td>Programming Blug</td>
                            <td class="text-success">Aktif</td>
                            <td>
                                <button type="button" class="btn btn-info">
                                    <i class="fas fa-lock"></i>
                                </button>
                                <button type="button" class="btn btn-secondary" data-toggle="modal"
                                    data-target="#ubah-admin">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
