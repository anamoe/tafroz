@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white">Edit
            <a href="{{url('data-distributor')}}" class="btn btn-sm float-end btn-light">Kembali</a>
        </h6>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{url('data-distributor',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" name="nama_lengkap" value="{{$data->nama_lengkap}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="form-label">Nomor WA</label>
                            <input type="text" class="form-control @error('no_wa') is-invalid @enderror" name="no_wa" value="{{$data->no_wa}}">

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="form-label">Alamat Lengkap</label>
                            <textarea type="text" class="form-control @error('alamat_lengkap') 
                            is-invalid @enderror" name="alamat_lengkap"> {{$data->alamat_lengkap}}</textarea>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <!-- <select name="provinsi_id" id="province" class="form-control">
                                <option value="">Pilih Provinsi</option>
                                @foreach($provinsis as $v)
                                <option value="{{ $v['id']}}">{{ $v['name'] }}</option>
                                @endforeach
                            </select> -->
                            <select name="provinsi_id" id="province" class="form-control">
                                <option value="">Pilih Provinsi</option>
                                @foreach($provinsis as $v)
                                <option value="{{ $v['id'] }}" @if($v['id']==$data->provinsi_id) selected @endif>{{ $v['name'] }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-md-6">
    <div class="form-group">
        <label for="city" class="form-label">Kota</label>
        <select name="kota_id" id="city" class="form-control">
            <option value="">Pilih Kota</option>
            @foreach($kotas as $city)
                <option value="{{ $city['id'] }}" @if($city['id'] == $data->kota_id) selected @endif>{{ $city['name'] }}</option>
            @endforeach
        </select>
    </div>
</div>

                </div>

                <button type="submit" class="btn btn-primary float-end mt-3">Update</button>

            </form>
        </div>
    </div>

</div>

@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function(){
        // Fungsi untuk mengisi kota berdasarkan provinsi yang dipilih
        function populateCities(province_id, selected_city_id) {
            $.ajax({
                url: '{{ url("api/get-cities") }}',
                type: 'POST',
                data: {
                    province_id: province_id,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(data){
                    $('#city').empty();
                    $('#city').append('<option value="">Pilih Kota</option>');
                    $.each(data, function(index, city){
                        var selected = (city.id == selected_city_id) ? 'selected' : '';
                        $('#city').append('<option value="'+ city.id +'" '+ selected +'>'+ city.name +'</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }

        // Ketika halaman dimuat, panggil fungsi populateCities jika provinsi_id sudah terisi
        var selected_province_id = $('#province').val();
        var selected_city_id = '{{ $data->kota_id }}'; // Ambil ID kota dari data distribusi
        if (selected_province_id) {
            populateCities(selected_province_id, selected_city_id);
        }

        // Event listener untuk perubahan pada select provinsi
        $('#province').on('change', function(){
            var province_id = $(this).val();
            if(province_id){
                populateCities(province_id, null); // Kosongkan selected_city_id jika ingin mengisi dari awal
            } else {
                $('#city').empty();
            }
        });
    });
</script>
@endpush
