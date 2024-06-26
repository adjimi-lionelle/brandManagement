
@extends('base')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
             <div class="col-lg-8 d-flex flex-column" style="margin-left:120px">
              <div class="row flex-grow">
                <h2>Welcome to the administration station </h2>
              </div> <br> <br> <br>
                <div class="row flex-grow">
                        
                        <div class="col-md-3 col-lg-6 grid-margin stretch-card">
                              <div class="card card-rounded">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                        <div class="circle-progress-width">
                                          <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                        </div>
                                        <div>
                                          <p class="text-small mb-2">Total brands</p>
                                          <h4 class="mb-0 fw-bold">{{  $countBrands  }}</h4>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                         </div>
                </div>
            </div>
        </div>
    </div>

  @endsection                      