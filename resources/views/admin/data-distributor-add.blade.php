@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Add
            <a href="{{url('data-distributor')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('data-distributor')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nomor WA</label>
                            <input type="text" class="form-control @error('no_wa') is-invalid @enderror" name="no_wa">

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="form-label">Alamat Lengkap</label>
                            <textarea type="text" class="form-control @error('alamat_lengkap') 
                            is-invalid @enderror" name="alamat_lengkap"></textarea>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <select name="provinsi_id" id="province" class="form-control">
                                <option value="">Pilih Provinsi</option>
                                @foreach($provinsis as $v)
                                <option value="{{ $v['id']}}">{{ $v['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city" class="form-label">Kota</label>
                            <select name="kota_id" id="city" class="form-control">
                                <option value="">Pilih Kota</option>
                            </select>

                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary float-end mt-3">Tambah</button>

            </form>
        </div>
    </div>

</div>

@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('#province').on('change', function(){
            var province_id = $(this).val();
            console.log(province_id)
            if(province_id){
                $.ajax({
                    url: '{{ url("api/get-cities") }}',
                    type: 'POST',
                    data: {
                        province_id: province_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data){
                        console.log(data)
                        $('#city').empty();
                        $('#city').append('<option value="">Pilih Kota</option>');
                        $.each(data, function(index, city){
                            $('#city').append('<option value="'+ city.id +'">'+ city.name +'</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            } else {
                $('#city').empty();
            }
        });
    });
</script>
@endpush
