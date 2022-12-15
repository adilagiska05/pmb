
@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        pendaftarr
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pendaftar.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">nama</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                    name="nama">
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">email</label>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror"
                                    name="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">no_hp</label>
                                <input type="text" class="form-control  @error('no_hp') is-invalid @enderror"
                                    name="no_hp">
                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">tgl_lahir</label>
                                <input type="text" class="form-control  @error('tgl_lahir') is-invalid @enderror"
                                    name="tgl_lahir">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label class="form-label">kampus</label>
                                <input type="text" class="form-control  @error('kampus') is-invalid @enderror"
                                    name="kampus">
                                @error('kampus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label class="form-label">prodi</label>
                                <input type="text" class="form-control  @error('prodi') is-invalid @enderror"
                                    name="prodi">
                                @error('prodi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label class="form-label">sistem_kuliah</label>
                                <input type="text" class="form-control  @error('sistem_kuliah') is-invalid @enderror"
                                    name="sistem_kuliah">
                                @error('sistem_kuliah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label class="form-label">status</label>
                                <input type="text" class="form-control  @error('status') is-invalid @enderror"
                                    name="status">
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label class="form-label">rekomendasi</label>
                                <input type="text" class="form-control  @error('rekomendasi') is-invalid @enderror"
                                    name="rekomendasi">
                                @error('rekomendasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">id_prodi</label>
                                <input type="text" class="form-control  @error('id_prodi') is-invalid @enderror"
                                    name="id_prodi">
                                @error('id_prodi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection