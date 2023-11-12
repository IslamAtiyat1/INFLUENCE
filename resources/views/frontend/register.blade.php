@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="login">
        <div class="container">
            <h1>Register Now </h1>
            <div class="card-body">
                <div class="row">
                    <form action="{{ url('admin/influencer') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" />
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" />
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control" />
                            @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Description</label>
                            <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" />
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save </button>
                        </div>
                    </form>
                </div>
            </div>
          
    </div>
</div>
</div></div></div>
@endsection
