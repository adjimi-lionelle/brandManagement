@extends('../../base')

@section('content')
        <div class="main-panel">
          <div class="content-wrapper">
          <a style="width:150px" href="{{ route('admin.brand.create') }}" class="btn btn-primary">Add Brand</a><br>
          <br>
          <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title" style="text-align:center">Brands list</h4>
                    @if (session('success'))
                       <br>   <div class="alert alert-success">
                              {{ session('success') }}
                          </div>
                      @endif
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered">
                        <thead class="thead-darrk">
                          <tr>
                          <th>N°</th>
                            <th>Brand Name</th>
                            <th>Brand Image</th>
                            <th>Rating</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @php
                        $i = 1;
                        @endphp

                         @foreach ($brands as $brand) 
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td><img src="{{ asset('storage/' . $brand->brand_image) }}" alt="{{ $brand->brand_name }}" style="max-width: 150px; max-height: 150px;"></td>
                                <td>{{ $brand->rating }}</td>
                                <td>
                                    <a href="{{ route('admin.brand.show', $brand->brand_id) }}" class="btn btn-info">Show</a>
                                    <a href="{{ route('admin.brand.edit', $brand->brand_id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.brand.destroy', $brand) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @php
                              $i++;
                            @endphp
                          @endforeach
                        </tbody>
                      </table>
                      <br>
                      <div class="d-flex justify-content-center">
                          {{ $brands->links('vendor.pagination.bootstrap-4') }} <!-- Utilisation de la vue de pagination personnalisée -->
                      </div>
                    </div>
                  </div>
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