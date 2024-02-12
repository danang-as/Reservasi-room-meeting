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
              <h4 class="page-title">Data Laporan</h4>
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
                  <h5 class="card-title">Laporan</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>Kode Booking</th>
                          <th>Nama Penanggung Jawab</th>
                          <th>Tanggal</th>
                          <th>Waktu Mulai</th>
                          <th>Waktu Selesai</th>
                          <th>Kegiatan</th>
                          <th>Jumlah Peserta</th>
                          <th>Jumlah Panitia</th>
                          <th>Nama Ruangan</th>
                          <th>Direktorat</th>
                          <th>Divisi</th>
                          <th>Bagian</th>
                          <th>Pendukung</th>
                          <th>Status</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $i = $data_laporan->firstItem() ?>
                      @foreach($data_laporan as $rw)
                          <tr>
                              <td>{{$i}}</td>
                              <td>{{ $rw->kode_booking }}</td>
                              <td>{{ $rw->nama_penanggung_jawab }}</td>
                              <td>{{ $rw->tanggal }}</td>
                              <td>{{ $rw->waktu_mulai }}</td>
                              <td>{{ $rw->waktu_selesai }}</td>
                              <td>{{ $rw->kegiatan }}</td>
                              <td>{{ $rw->jumlah_peserta }}</td>
                              <td>{{ $rw->jumlah_panitia }}</td>
                              <td>{{ $rw->nama_ruangan }}</td>
                              <td>{{ $rw->direktorat }}</td>
                              <td>{{ $rw->divisi }}</td>
                              <td>{{ $rw->bagian }}</td>
                              <td>{{ $rw->pendukung }}</td>
                              <td>{{ $rw->status }}</td>
                          </tr>
                          <?php $i++ ?>
                      @endforeach
                  </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
