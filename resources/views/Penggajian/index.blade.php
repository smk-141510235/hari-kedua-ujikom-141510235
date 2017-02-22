@extends('layouts.app')

@section('content')
<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
             <center><h2>Data Penggajian</h2></center>
                
            </div>
        </div>
    </header>
<br>
   <div class="right_col" role="main">
          <div class="">
           
            <div class="clearfix"></div>
 &nbsp;&nbsp;&nbsp;<a href="{{url('Penggajians/create')}}" class="btn btn-primary">Input Data Penggajians&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 
                  <div class="x_content">
<br><br>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Nama Pegawai</center></p></th>
                          <th><p class="center"><center>Tunjangan</center></p></th>
                          <th><p class="center"><center>Jumlah Jam Lembur</center></p></th>
                          <th><p class="center"><center>Jumlah Uang Lembur</center></p></p></th>
                          <th><p class="center"><center>Gaji Pokok</center></p></p></th>
                          <th><p class="center"><center>Tanggal Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Status Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Petugas Penerima</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php $no=1; ?>
                         @foreach ($penggajian as $data)
                             <tr>
                                 <th><center>{{ $no++ }}</center></th>
                                 <th><center>{{ $data->Pegawai->User->name}}</center></th>
                                 <th><center>{{ $data->Tunjangan_pegawai->tunjangan_pegawai_id }}</center></th>
                                 <th><center>{{ $data->Jumlah_jam->Lembur_pegawai->Jumlah_jam }}</center></th>
                                 <th><center><?php echo 'Rp.'. number_format($data->Kategori_lembur->Besaran_uang*$data->Lembur_pegawai->Jumlah_jam, 2,",","."); ?></center></th>
                                 <th><center><?php echo 'Rp.'. number_format($data->Jabatan->Besaran_uang+$data->Golongan->Besaran_uang, 2,",","."); ?></center></th>
                                 <th><center><?php echo 'Rp.'. number_format($data->Kategori_lembur->Besaran_uang*$data->Lembur_pegawai->Jumlah_jam+$data->Jabatan->Besaran_uang+$data->Golongan->Besaran_uang, 2,",","."); ?></center></th>
                                 <th><center>{{ $data->Tanggal_pengambilan }}</center></th>
                                 <th><center>{{ $data->Status_pengambilan }}</center></th>
                                 <th><center>{{ $data->Petugas_penerima }}</center></th>
                                <td><center><a href="{{ url('Penggajian', $data->id) }}" class="btn btn-primary">Lihat</a></center></td>
            <td><center><a href="{{ route('Penggajian.edit', $data->id) }}" class="btn btn-warning">Ubah</a></center></td>
                                 <th>
                                   <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i>Hapus</a>
                                  @include('modals.del', [
                                    'url' => route('Penggajian.destroy', $data->id),
                                    'model' => $data
                                  ])
                                 </th>
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