
@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Informasi
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Jadwal PMB</label>
                            <input type="text" class="form-control " name="jadwal_pmb" value="{{ $informasi->jadwal_pmb }}" readonly>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Jalur</label>
                            <input type="text" class="form-control " name="jalur" value="{{ $informasi->jalur }}" readonly>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Gelombang</label>
                            <input type="text" class="form-control " name="gelombang" value="{{ $informasi->gelombang }}" readonly>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Jenjang</label>
                            <input type="text" class="form-control " name="jenjang" value="{{ $informasi->jenjang }}" readonly>
                        </div>


                        
                       

                    </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('informasi.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection