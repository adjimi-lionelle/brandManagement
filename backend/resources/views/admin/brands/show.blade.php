@extends('base')

@section('content')
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="text-align:center">Brands Details</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered">
                      <tr>
                        <th>Brand Name</th>
                        <td>{{ $brand->brand_name }}</td>
                        </tr>
                        <tr>
                            <th>Brand Image</th>
                            <td><img src="{{ asset('storage/' . $brand->brand_image) }}" alt="{{ $brand->brand_name }}" style="max-width: 200px; max-height: 200px;"></td>
                        </tr>
                        <tr>
                            <th>Rating</th>
                            <td>{{ $brand->rating }}</td>
                        </tr>
                      </table>
                    </div>
                  </div>
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