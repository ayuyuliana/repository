@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title text-capitalize">form create</h4>
          <a href="{{ route('repository.index') }}" class="text-capitalize">back</a>
        </div>
        <div class="card-body">
          <form action="{{ route('repository.store') }}" method="POST">
            @csrf

            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="" class="form-control @error('title')
              is-invalid
              @enderror"
              value="{{ old('title') }}">
              @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="author" class="text-capitalize">Author</label>
              <input type="text" name="author" id="" class="form-control @error('author')
              is-invalid
              @enderror"
                value="{{ old('author') }}">
              @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="" class="text-capitalize">Years</label>
              <input type="text" name="year" id="" class="form-control @error('year')
              is-invalid
              @enderror"
                value="{{ old('year') }}">
              @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="" class="text-capitalize">Deskripsi</label>
              <textarea name="description" id="" cols="30" rows="10" class="form-control @error('description')
              is-invalid
              @enderror"
                value="{{ old('description') }}">
              @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              </textarea>
            </div>

            <button type="submit" class="btn btn-primary text-capitalize">submit</button>

          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
