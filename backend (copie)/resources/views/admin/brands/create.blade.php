@extends('base')

@section('content')
        <div class="main-panel">
          <div class="content-wrapper">
                <div class="card" style="width:800px">
                  <div class="card-body">
                    <h4 style="align:center" class="card-title">Create Brand</h4>
                   
                    <form action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                   
                      @error('brand_name')
                              <div class="alert alert-danger">{{ $message }}</div>   <br>
                         @enderror
                      
                         <label for="brand_name">Brand Name</label>
                         <input type="text" class="form-control" id="brand_name" name="brand_name" >
                      </div>
                      <div class="form-group">
                         <label for="brand_image">Brand Image</label>
                         <input type="file" class="form-control-file" id="brand_image" name="brand_image" >
                         @error('brand_image')
                            <br>  {{ $message }}
                         @enderror
                      </div>
                      <div class="form-group">
                         <label for="rating">Rating</label>
                         <input type="number" class="form-control" id="rating" name="rating" >
                         @error('rating')
                            <br>  {{ $message }}  
                         @enderror
                      </div>
                      <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                  </div>
                </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @endsection   