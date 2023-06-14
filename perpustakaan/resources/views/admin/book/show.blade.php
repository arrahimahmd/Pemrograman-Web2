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
    <a href="{{ url('/dashboard/book/create') }}" class="btn btn-primary">+ Tambah Buku</a>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
            <div class="table-responsive">
                <h3 class="page-title">
                  </h3>
                  <br>
                     <h4>Daftar Buku Tersedia</h4>
                      <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
                          <thead>
                              <tr class="table-info text-uppercase">
                                  <th>Id</th>
                                  <th>Judul</th>
                                  <th>Jumlah Tersedia</th>
                                  <th>No ISBN</th>
                                  <th>Data Dibuat</th>
                              </tr>
                          </thead>
                          <tbody>
                                  <tr>
                                      <td>{{$book->id}}</td>
                                      <td>{{$book->title}}</td>
                                      <td>{{$book->stok}}</td>
                                      <td>{{$book->isbn}}</td>
                                      <td>{{$book->created_at}}</td>
                                      <td>
              </td>
            </tr>
                          </tbody>
                      </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection