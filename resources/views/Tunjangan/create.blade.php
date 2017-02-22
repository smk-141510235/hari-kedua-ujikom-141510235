@extends('layouts.app')

@section('content')
 <br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <center><h2>Edit Data Tunjangan</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
    {!! Form::open(['url' => 'Tunjangan', 'class' => 'form-horizontal form-label-left']) !!}
    <div id="pegawai">
                     <div class="form-group{{ $errors->has('Kode_tunjangan') ? ' has-error' : '' }}">
                            <label for="Kode_tunjangan" class="col-md-4 control-label">Kode Tunjangan</label>

                            <div class="col-md-6">
                                <input id="Kode_tunjangan" type="text" class="form-control" name="Kode_tunjangan" value="{{ old('Kode_tunjangan') }}"  autofocus>

                                @if ($errors->has('Kode_tunjangan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Kode_tunjangan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                            <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>

                            <div class="col-md-6">
                                <select name="golongan_id" class="form-control">
                                    
                                    @foreach($golongan as $data)
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
                            <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>

                            <div class="col-md-6">
                                <select name="jabatan_id" class="form-control">
                                    
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


                        <div class="form-group{{ $errors->has('Status') ? ' has-error' : '' }}">
                            <label for="Status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <select name="Status" class="form-control">
                                   
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Duda">Duda</option>
                                    <option value="Janda">Janda</option>
                                </select>
                                @if ($errors->has('Status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Jumlah_anak') ? ' has-error' : '' }}">
                            <label for="Jumlah_anak" class="col-md-4 control-label">Jumlah Anak</label>

                            <div class="col-md-6">
                                <input id="Jumlah_anak" type="text" class="form-control" name="Jumlah_anak" value="{{ old('Jumlah_anak') }}"  autofocus>

                                @if ($errors->has('Jumlah_anak'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Jumlah_anak') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('Besaran_uang') ? ' has-error' : '' }}">
                            <label for="Besaran_uang" class="col-md-4 control-label">Besaran Uang </label>

                            <div class="col-md-6">
                                <input id="Besaran_uang" type="number" class="form-control" name="Besaran_uang" value="{{ old('Besaran_uang') }}"  autofocus>

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
</div>
</div>
</div>
</div>
</div>

@endsection