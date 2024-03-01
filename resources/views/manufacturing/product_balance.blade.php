<x-app-layout>
      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                aria-labelledby="pills-account-tab" tabindex="0">
                <div class="row">
                  <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100 position-relative overflow-hidden">
                      <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Update Product Picture</h5>
                        <p class="card-subtitle mb-4">Change your product picture from here</p>
                        <div class="text-center">
                          <img src="../assets/images/products/s11.jpg" alt="" class="img-fluid rounded-circle"
                            width="120" height="120">
                          <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                            <button class="btn btn-primary">Upload</button>
                            <button class="btn btn-outline-danger">Reset</button>
                          </div>
                          <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>

                          <div class="mt-4">
                            <label for="exampleInputPassword3" class="form-label fw-semibold">Current Quantity</label>
                            <input type="text" class="form-control" id="exampleInputPassword3"
                              value="26" disabled>
                          </div>
                          <div class="">
                            <label for="exampleInputPassword3" class="form-label fw-semibold">Add Quantity</label>
                            <input type="text" class="form-control" id="exampleInputPassword3"
                              placeholder="Enter quantity to add">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100 position-relative overflow-hidden">
                      <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Add or Update Details</h5>
                        <form>
                      <label for="exampleInputPassword2" class="form-label fw-semibold">Category</label>

                      <select class="form-select" id="unit-of-measure" aria-label="Default select example">
                        <option value="Kg" selected>Category 1</option>
                          <option value="Nos" >Category 2</option>
                      
                      </select>
                      <label for="exampleInputPassword2" class="form-label fw-semibold">Sub Category</label>

                      <select class="form-select" id="unit-of-measure" aria-label="Default select example">
                        <option value="Kg" selected>Sub-Category 1</option>
                          <option value="Nos" >Sub-Category 2</option>
                      
                      </select>
                          <div class="">
                            <label for="exampleInputPassword2" class="form-label fw-semibold">Product Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword2"
                              value="Leather">
                          </div>
                          <div class="">
                            <label for="exampleInputPassword3" class="form-label fw-semibold">Date</label>
                            <input type="date" class="form-control" id="exampleInputPassword3"
                             >
                          </div>
                          <div class="">
                            <label for="exampleInputPassword3" class="form-label fw-semibold">Product Description</label>
                            <input type="text" class="form-control" id="exampleInputPassword3"
                             placeholder="Enter Description">
                          </div>
                          <div class="">
                            <label for="exampleInputPassword3" class="form-label fw-semibold">Product Bar Code</label>
                            <input type="text" class="form-control" id="exampleInputPassword3"
                              value="B1254">
                          </div>
                          
                          
                        </form>
                        <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                          {{-- <button type="button" data-bs-toggle="modal" data-bs-target="#samedata-modal1" data-bs-whatever="@mdo" class=" btn  btn-rounded btn-primary  align-items-center">
                            <i class="ti ti-send fs-4 me-2"></i>
                            Send
                        </button> --}}
                          <button class="btn btn-primary">Save</button>
                          <button class="btn bg-danger-subtle text-danger">Cancel</button>
                      </div>
                      </div>
                    </div>
                  </div>
          </div>
          </div>
          </div>
          </div>

          <div class="card">
            <div class="card-body">
                {{-- <div class="mb-2">
        <h5 class="mb-0">Operations</h5>
      </div>
      <p class="card-subtitle mb-3">
       This  Data Table provides with ascending/ Descending Functionality
      </p> --}}



                <div class="d-flex justify-content-between align-items-center mb-4">

                    <div class="mb-2">
                        <h5 class="mb-0">Raw Materials</h5>
                    </div>


                    {{-- <a class="btn btn-primary d-lg-none d-flex" data-bs-toggle="offcanvas"
            href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <i class="ti ti-menu-2 fs-6"></i>
        </a> --}}
                    {{-- <h5 class="fs-5 fw-semibold mb-0 d-none d-lg-block">Connections</h5> --}}

                    {{-- <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
            <button type="button" data-bs-toggle="modal" data-bs-target="#samedata-modal1" data-bs-whatever="@mdo" class=" btn  btn-rounded btn-primary  align-items-center">
                <i class="ti ti-send fs-4 me-2"></i>
                Send
            </button>
            <button class="btn btn-primary">Save</button>
            <button class="btn bg-danger-subtle text-danger">Cancel</button>
        </div> --}}

                    <div class="position-relative">
                        <button type="button" data-bs-toggle="modal"
                            data-bs-target="#samedata-modal1" data-bs-whatever="@mdo"
                            class=" btn  btn-rounded btn-primary  align-items-center">
                            <i class="ti ti-plus fs-4 me-2"></i>
                            Add Raw Materials
                        </button>
                    </div>
                </div>







                <div class="table-responsive">
                    <table id="zero_config"
                        class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th>Sl. No</th>
                                <th>Item Code</th>
                                <th>Type</th>
                                <th>Available Qty</th>
                                <th>Qty as BOM</th>
                              
                                <th>Action</th>
                            </tr>
                            <!-- end row -->
                        </thead>
                        <tbody>
                            <!-- start row -->
                            <tr>
                                <td>1</td>
                                <td>Leather</td>
                                <td>Purchase</td>
                                <td>5</td>
                                <td>10</td>
                             
                               
                                <td>
                                    <a href="item_variants" class="btn btn-sm btn-info"
                                        title="View"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-primary"
                                        title="Edit"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                            
                            
                            <!-- end row -->
                            <!-- start row -->

                            <!-- end row -->

                        </tbody>
                        <tfoot>
                            <!-- start row -->
                            <tr>
                              <th>Sl. No</th>
                              <th>Item Code</th>
                              <th>Type</th>
                              <th>Available Qty</th>
                              <th>Qty as BOM</th>
                            
                              <th>Action</th>
                            </tr>
                            <!-- end row -->
                        </tfoot>
                    </table>
                </div>




            </div>
        </div>



          </div>
          </div>
 
          <!-- ---------------------
                                end Scroll - Vertical
                            ---------------- -->


                            
    <div class="modal fade" id="samedata-modal1" tabindex="-1" aria-labelledby="exampleModalLabel1">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header d-flex align-items-center">
                  <h4 class="modal-title" id="exampleModalLabel1">
                     Add Raw Materials
                  </h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
          
                <div class="modal-body">
                  <form>
                      <div class="mb-3">
                          <label for="operation-name" class="control-label">Item Name</label>
                          <input type="text" class="form-control" id="operation-name" placeholder="Enter Operation Name" value="Cutting"/>
                      </div>
                      <label for="unit-of-measure" class="control-label">Type</label>
                      <select class="form-select" id="unit-of-measure" aria-label="Default select example">
                        <option value="Kg" selected>Purchase</option>
                          <option value="Nos" >Manufacture</option>
                      
                      </select>
                     
                  
                  </form>
         
              
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn bg-danger-subtle text-danger font-medium"
                      data-bs-dismiss="modal">
                      Close
                  </button>
                  <button type="button" class="btn btn-success">
                      Submit
                  </button>
              </div>
          </div>
      </div>
  </div>


    </x-app-layout>
  