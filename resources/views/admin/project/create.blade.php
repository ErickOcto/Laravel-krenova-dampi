@extends('admin.layouts.app')

@section('content')
<div class="main-content container-fluid">

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Data Projek</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama Fasilitas</label>
                                            <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Masukkan Nama Fasilitas">
                                        </div>
                                        @error('name')
                                            <strong class="alert alert-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Pilih Kategori</label>
                                            <fieldset class="form-group">
                                                <select class="form-select" name="facility_category_id">
                                                    @foreach ($companies as $company)
                                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                        </div>
                                        @error('facility_category_id')
                                            <strong class="alert alert-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Latitude</label>
                                            <input type="text" id="first-name-column" name="lat" class="form-control" placeholder="Masukkan Latitude">
                                        </div>
                                        @error('lat')
                                            <strong class="alert alert-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Longtitude</label>
                                            <input type="text" id="first-name-column" name="long" class="form-control" placeholder="Masukkan Longtitude">
                                        </div>
                                        @error('long')
                                            <strong class="alert alert-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Deskripsi</label>
                                            <textarea id="first-name-column" name="description" class="form-control" placeholder="Masukkan Deskripsi Fasilitas" rows="5"></textarea>
                                        </div>
                                        @error('description')
                                            <strong class="alert alert-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Gambar Fasilitas</label>
                                            <input type="file" accept=".jpg, .png, .jpeg, .svg" id="first-name-column" name="imageUrl" class="form-control" placeholder="Masukkan Gambar Fasilitas">
                                        </div>
                                        @error('imageUrl')
                                            <strong class="alert alert-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-12 d-flex justify-content-end">
                                        <a href="{{ route('facility.index') }}" class="btn btn-light-secondary me-1 mb-1">Kembali</a>
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>
@endsection
