@extends('admin.index')
@section('content')
<form action="{{ url('/produkku',$products->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Floating Label</h6>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{ $products->name }}" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">
                                Nama Tidak boleh kosong.
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{ $products->price }}" name="price" class="form-control @error('price') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Harga</label>
                        @error('price')
                            <div class="invalid-feedback">
                                Nama Tidak boleh kosong.
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="{{ $products->description }}" name="description" class="form-control @error('description') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput">Deskripsi</label>
                        @error('description')
                            <div class="invalid-feedback">
                                Nama Tidak boleh kosong.
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <select name="category_id" class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example">
                            <option selected>=== PILIH KATEGORI ===</option>
                            @foreach ($categories as $item)
                                @if ($item->category_id == $item->id)
                                    <option value="{{ $item->id }}" selected>
                                        {{ $item->name_kategori }}
                                    </option>
                                @else
                                    <option value="{{ $item->id }}">
                                        {{ $item->name_kategori }}
                                    </option>
                                @endif

                            @endforeach
                        </select>
                        @error('kategori_id')
                                <div class="invalid-feedback">
                                    Pilih salah satu.
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
