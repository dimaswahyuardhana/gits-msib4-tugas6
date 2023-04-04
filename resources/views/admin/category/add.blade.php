@extends('admin.index')
@section('content')
<form action="{{ url('/kategoriku') }}" method="POST">
    @csrf
    @method("post")
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Floating Label</h6>
                    <div class="form-floating mb-3">
                        <input type="text" name="name_kategori" class="form-control @error('name_kategori') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Nama Kategori</label>
                        @error('name_kategori')
                            <div class="invalid-feedback">
                                Nama Tidak boleh kosong.
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah</button>
    </div>
</form>
@endsection
