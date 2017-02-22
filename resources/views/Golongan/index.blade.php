@extends('layouts.app')

@section('content')
<!-- Header -->
   <header>
        <div class="container">
            <div class="row">
             
                <center><h2>Data Golongan</h2></center>
            </div>
        </div>
    </header>
<br>
<tr class="danger">
  <div class="panel-body">
    <div class="form-group">
      <form action="{{url('Golongan')}}/?name=name">
        <input type="text" name="name" placeholder="cari"/>
        <input class="btn btn-sm btn-warning" type="submit" value="cari"/></form>
      </form>
    </div>
  </div>
</tr>
   <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
 &nbsp;&nbsp;&nbsp;<a href="{{url('Golongan/create')}}" class="btn btn-primary">Input Data Golongan&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
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
                    <table id="datatable" class="table table-success table-border table-hover">
                      <thead>
                        <tr class="info">
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Kode Golongan</center></p></th>
                          <th><p class="center"><center>Nama Golongan</center></p></p></th>
                          <th><p class="center"><center>Besaran Uang</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php $no=1; ?>
                         @foreach ($gol as $data)
                             <tr>
                                 <th><center>{{ $no++ }}</center></th>
                                 <th><center>{{ $data->Kode_golongan }}</center></th>
                                 <th><center>{{ $data->Nama_golongan }}</center></th>
                                 <th><center><?php echo 'Rp.'. number_format($data->Besaran_uang, 2,",","."); ?></center></th>
                                 <td><center><a href="{{ url('Golongan', $data->id) }}" class="btn btn-primary">Lihat</a></center></td>
            <td><center><a href="{{ route('Golongan.edit', $data->id) }}" class="btn btn-warning">Ubah</a></center></td>
                                 <th>
                                   <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i>Hapus</a>
                                  @include('modals.del', [
                                    'url' => route('Golongan.destroy', $data->id),
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


     