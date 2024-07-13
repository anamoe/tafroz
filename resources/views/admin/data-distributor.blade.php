@extends('layouts-admin.master')
@section('content')

<div class="card">
    <div class="card-header bg-primary">
        <h6 class="mb-0 text-white"> Data Distributor
            <a href="{{url('data-distributor/create')}}" class="btn btn-sm float-end btn-light">Add</a>
        </h6>
    </div>
    <div class="card-body">

        <div class="table-responsive mt-3">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat Lengkap</th>
                        <th>Nomor Wa</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama_lengkap}}</td>
                        <td>{{$item->alamat_lengkap}}</td>
                        <td>{{$item->no_wa}}</td>
                        <td>
                            <a href="{{url('data-distributor/'.$item->id.'/edit')}}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{url('data-distributor/'.$item->id.'/delete')}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center">KOSONG</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>

    </div>
</div>

@endsection