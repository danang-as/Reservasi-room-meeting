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
              <h4 class="page-title">Data Direktorat</h4>
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
                    <a href='{{ url("data_direktorat/create")}}' class="btn btn-success text-light font-bold"><i class="far fa-plus-square"></i>Tambah Data Direktorat</a>
                  </div>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Direktorat</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = $data_direktorat->firstItem() ?>
                      @foreach ($data_direktorat as $item)
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->nama_direktorat}}</td>
                        <td>
                          <a href="{{ url('data_direktorat/'.$item->id.'/edit')}}" class="btn btn-primary ml-3 font-bold"><i class="fas fa-pen-square mr-2"></i>Edit</a>
                          <form  onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{ url('data_direktorat/'.$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger font-bold"><i class="fas fa-trash-alt"></i>Hapus</button>
                          </form>
                        </td>
                      </tr>
                      <?php $i++ ?>
                      @endforeach
                        
                      </tbody>
                    </table>
                    {{ $data_direktorat->links()}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
