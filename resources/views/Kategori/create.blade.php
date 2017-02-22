@extends('layouts.app')

@section('content')

<br><br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <center><h2>Input Kategori Lembur</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  {!! Form::open(['url' => 'Kategori', 'class' => 'form-horizontal form-label-left']) !!}
    <div id="pegawai">
      <div class="form-group{{ $errors->has('Kode_lembur') ? ' has-error' : '' }}">
                            <label for="Kode_lembur" class="control-label col-md-3 col-sm-3 col-xs-12">Kode Kategori Lembur</label>

                            <div class="col-md-6">
                                <input id="Kode_lembur" type="text" class="form-control col-md-7 col-xs-12" name="Kode_lembur" value="{{ old('Kode_lembur') }}"  autofocus>

                                @if ($errors->has('Kode_lembur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Kode_lembur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                            <label for="golongan_id" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Golongan</label>

                            <div class="col-md-6">
                                <select name="golongan_id" class="form-control col-md-7 col-xs-12">
                                   
                                    @foreach($gol as $data)
                                    <option value="{{$data->id}}">{{$data->Nama_golongan}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('golongan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('golongan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="jabatan_id" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Jabatan</label>

                            <div class="col-md-6">
                                <select name="jabatan_id" class="form-control col-md-7 col-xs-12">
                                  
                                    @foreach($jabatan as $data)
                                    <option value="{{$data->id}}">{{$data->Nama_jabatan}}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('jabatan_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jabatan_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Besaran_uang') ? ' has-error' : '' }}">
                            <label for="Besaran_uang" class="control-label col-md-3 col-sm-3 col-xs-12">Besaran uang </label>

                            <div class="col-md-6">
                                <input id="Besaran_uang" type="number" class="form-control col-md-7 col-xs-12" name="Besaran_uang" value="{{ old('Besaran_uang') }}"  autofocus>

                                @if ($errors->has('Besaran_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Besaran_uang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
      <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              {!! Form::submit('Save', ['class' => 'btn btn-success form-control']) !!}
          </div>
      </div>
    </div>
    {!! Form::close() !!}
                
    
@endsection
