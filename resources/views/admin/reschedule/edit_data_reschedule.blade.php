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
              <h4 class="page-title">Edit Data Reschedule</h4>
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
                  <h5 class="card-title">Form Edit Data Reschedule</h5>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered"
                    >
                    <a href='{{ url("data_reschedule")}}' class="btn btn-secondary mb-2"><i class="	fas fa-backward"></i>Kembali</a>
                    <form action="{{url('data_reschedule/'.$data_reschedule->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <div class="mb-3 row">
                                <label for="kode_booking" class="col-sm-2 col-form-label">Kode Booking</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name='kode_booking' value="{{ $data_reschedule->kode_booking }}" id="kode_booking">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama_penanggung_jawab" class="col-sm-2 col-form-label">Nama Penanggung Jawab</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='nama_penanggung_jawab' value="{{ $data_reschedule->nama_penanggung_jawab }}" id="nama_penanggung_jawab">
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='tanggal' value="{{ $data_reschedule->tanggal }}" id="tanggal">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="waktu_mulai" class="col-sm-2 col-form-label">Waktu Mulai</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='waktu_mulai' value="{{ $data_reschedule->waktu_mulai }}" id="waktu_mulai">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="waktu_selesai" class="col-sm-2 col-form-label">Waktu Selesai</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name='waktu_selesai' value="{{ $data_reschedule->waktu_selesai }}" id="waktu_selesai">
                                        </div>
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='kegiatan' value="{{ $data_reschedule->kegiatan }}" id="kegiatan">
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jumlah_peserta" class="col-sm-2 col-form-label">Jumlah Peserta</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='jumlah_peserta' value="{{ $data_reschedule->jumlah_peserta }}" id="jumlah_peserta">
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jumlah_panitia" class="col-sm-2 col-form-label">Jumlah Panitia</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='jumlah_panitia' value="{{ $data_reschedule->jumlah_panitia }}" id="jumlah_panitia">
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama_ruangan" class="col-sm-2 col-form-label">Nama Ruangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='nama_ruangan' value="{{ $data_reschedule->nama_ruangan }}" id="nama_ruangan">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="direktorat" class="col-sm-2 col-form-label">Direktorat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='direktorat' value="{{ $data_reschedule->direktorat }}" id="direktorat">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='divisi' value="{{ $data_reschedule->divisi }}" id="divisi">
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="bagian" class="col-sm-2 col-form-label">Bagian</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='bagian' value="{{ $data_reschedule->bagian }}" id="bagian">
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="pendukung" class="col-sm-2 col-form-label">Pendukung</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='pendukung' value="{{ $data_reschedule->pendukung }}" id="pendukung">
                                    </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select name="status" id="status" >
                                            <option value="Disetujui">Disetujui</option>
                                            <option value="Ditolak">Ditolak</option>
                                            <option value="Diproses">Diproses</option>
                                          </select>
                                        {{-- <input type="text" class="form-control" name='status' value="{{ $data_reschedule->status }}" id="status"> --}}
                                    </div>
                            </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-save"></i>Simpan</button>
                            </div>
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