        @section('js')
            <script type="text/javascript">
                function readURL() {
                    var input = this;
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $(input).prev().attr('src', e.target.result);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $(function () {
                    $(".uploads").change(readURL)
                    $("#f").submit(function(){
                        // do ajax submit or just classic form submit
                      //  alert("fake subminting")
                        return false
                    })
                })


        // var check = function() {
        //   if (document.getElementById('password').value ==
        //     document.getElementById('confirm_password').value) {
        //     document.getElementById('submit').disabled = false;
        //     document.getElementById('message').style.color = 'green';
        //     document.getElementById('message').innerHTML = 'matching';
        //   } else {
        //     document.getElementById('submit').disabled = true;
        //     document.getElementById('message').style.color = 'red';
        //     document.getElementById('message').innerHTML = 'not matching';
        //   }
        // }
            </script>
        @stop

        @extends('layouts.app')

        @section('content')

        <form method="post" action="{{ route('suratkeluar.update', $data->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('put') }}
        <div class="row">
                    <div class="col-md-12 d-flex align-items-stretch grid-margin">
                      <div class="row flex-grow">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-body">
                              <h4 class="card-title">Edit Data Surat Keluar</h4>
                              
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Nomor Surat Isntansi</label>
                                    <div class="col-md-12">
                                        <input id="nama_instansi" type="text" class="form-control" name="nomor_surat" value="{{ $data->nomor_surat }}" required>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Sifat Surat</label>
                                    <div class="col-md-12">
                                        <input id="nama_instansi" type="text" class="form-control" name="sifat_surat" value="{{ $data->sifat_surat }}" required>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Lampiran</label>
                                    <div class="col-md-12">
                                        <input id="nama_instansi" type="text" class="form-control" name="lampiran" value="{{ $data->lampiran }}" required>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Hal</label>
                                    <div class="col-md-12">
                                        <input id="nama_instansi" type="text" class="form-control" name="hal" value="{{ $data->hal }}" required>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Tujuan Surat</label>
                                    <div class="col-md-12">
                                        <input id="nama_instansi" type="text" class="form-control" name="tujuan_surat" value="{{ $data->nomor_surat }}" required>
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Tempat Tujuan</label>
                                    <div class="col-md-12">
                                        <input id="nama_instansi" type="text" class="form-control" name="tempat_tujuan" value="{{ $data->tempat_tujuan }}" required>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Alamat Tujuan</label>
                                    <div class="col-md-12">
                                        <input id="nama_instansi" type="text" class="form-control" name="alamat_tujuan" value="{{ $data->alamat_tujuan }}" required>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Isi Surat</label>
                                    <div class="col-md-12">
                                        <input id="nama_instansi" type="text" class="form-control" name="isi_surat" value="{{ $data->isi_surat }}" required>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Tebusan</label>
                                    <div class="col-md-12">
                                        <input id="nama_instansi" type="text" class="form-control" name="tebusan" value="{{ $data->tebusan }}" required>
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Review</label>
                                    <div class="col-md-12">
                                        <input id="nama_instansi" type="text" class="form-control" name="review" value="{{ $data->tebusan }}" required>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                                    <label for="level" class="col-md-4 control-label">Disposisi</label>

                                    <div class="col-md-12">
                                    
                                    <select class="form-control" name="disposisi" required="">
                                   <?php
                                    $level = Array("Kabag TU","Kabid Teknis");
                                    foreach ($level as $kunci ) {
                                    ?>
                                     @if(Auth::user()->level == 'Kepala Bbksda')
                                    <option value="{{$kunci}}">{{$kunci}}</option>
                                    @endif
                                    @endforech
                                    <?php
                                     }
                                     ?>
                                    <?php
                                    $level = Array("Kepala Bbksda");
                                    foreach ($level as $kunci ) {
                                    ?>
                                     @if(Auth::user()->level == 'sekretaris')
                                    <option value="{{$kunci}}">{{$kunci}}</option>
                                    @endif
                                    @endforech
                                    <?php
                                      }
                                    $level = Array("Subag Umum","Subag Evaluasi dan Kehumasan","Subag Program dan Kerja Sama");
                                    foreach ($level as $kunci ) {
                                    ?>
                                     @if(Auth::user()->level == 'Kabag Tu')
                                    <option value="{{$kunci}}">{{$kunci}}</option>
                                    @endif
                                    @endforech
                                    <?php
                                     }
                                    $level = Array("Pelayanan Masyarakat","Perencanaan, Perlindungan dan Pengawetan");
                                    foreach ($level as $kunci ) {
                                    ?>
                                     @if(Auth::user()->level == 'Kabid Teknis')
                                    <option value="{{$kunci}}">{{$kunci}}</option>
                                    @endif
                                    @endforech
                                    <?php
                                     }
                                     ?>
                                    </select>

                                    </div>
                                </div>        
                                <button type="submit" class="btn btn-primary" id="submit">
                                            Tambah
                                </button>
                                <button type="reset" class="btn btn-danger">
                                            Reset
                                </button>
                                <a href="{{route('suratkeluar.index')}}" class="btn btn-light pull-right">Back</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

        </div>
        </form>
        @endsection