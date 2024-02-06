@extends('admin.layout.layout')
@section('content')
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Edit Data User</h4>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Form Edit Data User</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                    <a href='{{ url("data_user")}}' class="btn btn-secondary mb-2"><i class="	fas fa-backward"></i>Kembali</a>
                    <form action="{{url('data_user/'.$data_user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='name' value="{{ $data_user->name }}" id="name">
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name='email' value="{{ $data_user->email}}" id="email">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name='password' value="{{ $data_user->password}}" id="password">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="role" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='role' value="{{ $data_user->role}}" id="role">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Simpan</button></div>
                        </div>
                    </form>
        <!-- AKHIR FORM -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection