@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-book"></i>
            </span> Daftar Buku
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <h3>Tambah Buku</h3><br />
            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- form validasi -->
            <form class="forms-sample" action="{{ url('/dashboard/book/store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-sm-4 col-form-label">Judul Buku</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Judul Buku">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isbn" class="col-sm-4 col-form-label">No ISBN</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="isbn" name="isbn"
                            placeholder="ISBN">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok" class="col-sm-4 col-form-label">Jumlah Tersedia</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="stok" name="stok"
                            placeholder="Jumlah Tersedia">
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                <button type="reset" class="btn btn-light">Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection