
@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Informasir
                    </div>
                    <div class="card-body">
                        <form action="{{ route('informasi.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Jadwal_pmb</label>
                                <input type="text" class="form-control  @error('jadwal_pmb') is-invalid @enderror"
                                    name="jadwal_pmb">
                                @error('jadwal_pmb')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">jalur</label>
                                <input type="text" class="form-control  @error('jalur') is-invalid @enderror"
                                    name="jalur">
                                @error('jalur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">gelombang</label>
                                <input type="text" class="form-control  @error('gelombang') is-invalid @enderror"
                                    name="gelombang">
                                @error('gelombang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">jenjang</label>
                                <input type="text" class="form-control  @error('jenjang') is-invalid @enderror"
                                    name="jenjang">
                                @error('jenjang')
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