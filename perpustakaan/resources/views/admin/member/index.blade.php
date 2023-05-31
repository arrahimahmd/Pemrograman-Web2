@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-book"></i>
        </span> Anggota Perpustakaan
      </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>
    <a class="btn bg-gradient-primary text-white me-2" role="button" style="width : 250px;">+ Tambah Anggota</a>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
                <h3 class="page-title">
                  </h3>
                  <br>
                     <h4>Daftar Anggota Perpustakaan</h4>
                      <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
                          <thead>
                              <tr class="table-info text-uppercase">
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Email</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Status</th>
                                  <th>Alamat</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($members as $member )
                                  
                              
                                  <tr>
                                      <td>{{$loop->iteration}}</td>
                                      <td>{{$member->name}}</td>
                                      <td>{{$member->email}}</td>
                                      <td>{{$member->gender}}</td>
                                      <td>{{$member->status}}</td>
                                      <td>{{$member->address}}</td>
                                      <td>
              <a class="btn btn-primary" href="#">View</a>
              <a class="btn btn-warning" href="#">Edit</a>
              <a class="btn btn-danger" href="#">Delete</a>
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
@endsection