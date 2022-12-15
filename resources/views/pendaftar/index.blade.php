

@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Data prodi
                        <a href="{{ route('pendaftar.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No_Hp</th>
                                        <th>Tanggal_Lahir</th>
                                        <th>Kampus</th>
                                        <th>Prodi</th>
                                        <th>Sistem_Kuliah</th>
                                        <th>Status</th>
                                        <th>Rekomendasi</th>
                                        <th>Id_Prodi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($pendaftar as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->no_hp }}</td>
                                            <td>{{ $data->tgl_lahir}}</td>
                                            <td>{{ $data->kampus}}</td>
                                            <td>{{ $data->prodi}}</td>
                                            <td>{{ $data->kelas}}</td>
                                            <td>{{ $data->status}}</td>
                                            <td>{{ $data->rekomendasi}}</td>
                                            <td>{{ $data->id_prodi}}</td>
                                            
                                            <td>
                                                <form action="{{ route('pendaftar.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('pendaftar.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('pendaftar.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
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
