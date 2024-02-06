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
              <h4 class="page-title">Data Karyawan</h4>
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
                  <div class="pb-3">
                    <a href='{{ url("data_user/create")}}' class="btn btn-success text-light font-bold"><i class="far fa-plus-square"></i>Tambah Data User</a>
                  </div>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Role</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = $data_user->firstItem() ?>
                      @foreach ($data_user as $d)
                        <tr>
                          <td>{{$i}}</td>
                          <td>{{$d->name}}</td>
                          <td>{{$d->email}}</td>
                          <td>{{$d->password}}</td>
                          <td>{{$d->role}}</td>
                          <td>
                            <a href="{{ url('data_user/'.$d->id.'/edit')}}" class="btn btn-primary ml-3 font-bold"><i class="fas fa-pen-square mr-2"></i>Edit</a>
                            <form  onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{ url('data_user/'.$d->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" name="submit" class="btn btn-danger font-bold"><i class="fas fa-trash-alt"></i>Hapus</button>
                            </form>
                          </td>
                        </tr>
                        <?php $i++ ?>
                        @endforeach 
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      @endsection
