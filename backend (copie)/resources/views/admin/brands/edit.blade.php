@extends('base')

@section('content')
        <div class="main-panel">
          <div class="content-wrapper">
                <div class="card" style="width:800px">
                  <div class="card-body">
                    <h4 style="align:center" class="card-title">Edit Brand</h4>
                    <form action="{{ route('admin.brand.update', $brand->brand_id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="brand_name">Brand Name</label>
                            <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{ $brand->brand_name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="brand_image">Brand Image</label>
                            <input type="file" class="form-control-file" id="brand_image" name="brand_image">
                            <img src="{{ asset('storage/' . $brand->brand_image) }}" alt="{{ $brand->brand_name }}" style="max-width: 200px; max-height: 200px;">
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="number" class="form-control" id="rating" name="rating" value="{{ $brand->rating }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                  </div>
                </div>
          </div>
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
            </div>
          </footer>
        </div>
      </div>
    </div>
    @endsection 