@extends('admin.index')
@section('content')
<form action="{{ url('/produkku') }}" method="POST">
    @csrf
    @method("post")
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Floating Label</h6>
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput">
                        <label for="floatingInput">Nama Produk</label>
                        @error('name')
                            <div class="invalid-feedback">
                                Nama Tidak boleh kosong.
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="floatingInput">
                        <label for="floatingInput">Harga</label>
                        @error('price')
                            <div class="invalid-feedback">
                                Nama Tidak boleh kosong.
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Deskripsi</label>
                        @error('description')
                            <div class="invalid-feedback">
                                Nama Tidak boleh kosong.
                            </div>
                        @enderror
                    </div>
                    <select name="category_id" class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example">
                        <option selected>=== PILIH KATEGORI ===</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name_kategori }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                            <div class="invalid-feedback">
                                Pilih salah satu.
                            </div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Tambah</button>
    </div>
</form>
@endsection
