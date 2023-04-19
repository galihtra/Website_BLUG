@extends('layouts.main')

@section('content')
    <h1 class="h3 mb-2 text-gray-800">Hai, Admin {{ Auth::user()->name }}</h1>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah
                Divisi</button>
        </div>
        <div class="card-body">

            <!-- Modal tambah admin-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Divisi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('add-divisi') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="">Nama Divisi</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- end Modal tambah admin --}}

            <!-- Modal edit-->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Divisi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('update-divisi') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="divisi_id" id="divisi_id">

                            <div class="modal-body">
                                <div class="form-group mb-3">
                                    <label for="">Name</label>
                                    <input type="text" id="name" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- end Modal --}}

            <!-- Modal delete-->
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Divisi</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="{{ url('delete-divisi') }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <h4 class="m-2">Confirm to delete divisi?</h4>
                            <input type="hidden" id="deleting_id" name="delete_divisi_id">

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Yes Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- end Modal --}}

            <!-- Table -->
            <table class="table table-responsive-lg">
                <thead>
                    <tr>
                        <th>Nama Divisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($divisi as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>
                                {{-- Button edit --}}
                                <button type="button" class="btn btn-secondary editbtn" value="{{ $item->id }}">
                                    <i class="fas fa-pen"></i>
                                </button>
                                {{-- Akhir Button edit --}}

                                {{-- Button delete --}}
                                <button type="button" class="btn btn-danger deletebtn" value="{{ $item->id }}">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                                {{-- Akhir Button delete --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- end Table -->
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {

            $(document).on('click', '.deletebtn', function() {
                var divisi_id = $(this).val();
                // alert(divisi_id);
                $('#deleteModal').modal('show');
                $('#deleting_id').val(divisi_id);
            });

            $(document).on('click', '.editbtn', function() {
                var divisi_id = $(this).val();
                // alert(divisi_id);
                $('#editModal').modal('show');

                $.ajax({
                    type: "GET",
                    url: "/edit-divisi/" + divisi_id,
                    success: function(response) {
                        // console.log(response.admin.username);
                        $('#name').val(response.divisi.name)
                        $('#divisi_id').val(divisi_id)
                    }
                });

            });
        });
    </script>
@endsection
