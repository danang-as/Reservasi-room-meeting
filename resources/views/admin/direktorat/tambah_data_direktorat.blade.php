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
              <h4 class="page-title">Tambah Data Direktorat</h4>
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
                  <h5 class="card-title">Form pengisian</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                    <a href='{{ url("data_direktorat")}}' class="btn btn-secondary mb-2"><i class="	fas fa-backward"></i>Kembali</a>
                    <form action="{{url('data_direktorat')}}" method="post">
                        @csrf
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <div class="mb-3 row">
                                <label for="nama_direktorat" class="col-sm-2 col-form-label">Nama direktorat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='nama_direktorat' id="nama_direktorat">
                                </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
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