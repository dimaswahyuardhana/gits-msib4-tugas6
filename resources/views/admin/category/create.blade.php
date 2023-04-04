@extends('admin.index')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Responsive Table</h6>
                <div class="table-responsive">
                    <a href="{{ url('/tambah_kategori') }}">
                        <button type="button" class="btn btn-primary mb-3">Tambah Data</button>
                    </a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">JENIS KATEGORI</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name_kategori }}</td>
                                    <td>
                                        <form action="{{ url('/kategori', $item->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="btn-group">
                                                <a href="{{ url('/update',$item->id) }}"
                                                    class="btn btn-warning btn-sm">
                                                    UPDATE
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Apakah anda yakin mau menghapus?')">
                                                    DELETE
                                                </button>
                                            </div>
                                        </form>
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
@endsection
