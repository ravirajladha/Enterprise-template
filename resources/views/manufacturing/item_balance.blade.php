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
                        <h5 class="card-title fw-semibold">Update Item Picture</h5>
                        <p class="card-subtitle mb-4">Change your profile picture from here</p>
                        <div class="text-center">
                          <img src="../assets/images/products/s11.jpg" alt="" class="img-fluid rounded-circle"
                            width="120" height="120">
                          <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                            <button class="btn btn-primary">Upload</button>
                            <button class="btn btn-outline-danger">Reset</button>
                          </div>
                          <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100 position-relative overflow-hidden">
                      <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Add or Update Details</h5>
                        <form>
                          <div class="">
                            <label for="exampleInputPassword1" class="form-label fw-semibold">Warehouse</label>
                            <input type="text" class="form-control" id="exampleInputPassword1"
                              value="Warehouse1">
                          </div>
                          <div class="">
                            <label for="exampleInputPassword2" class="form-label fw-semibold">Item Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword2"
                              value="Leather">
                          </div>
                          <div class="">
                            <label for="exampleInputPassword3" class="form-label fw-semibold">Date</label>
                            <input type="date" class="form-control" id="exampleInputPassword3"
                             >
                          </div>
                          <div class="">
                            <label for="exampleInputPassword3" class="form-label fw-semibold">Item Description</label>
                            <input type="text" class="form-control" id="exampleInputPassword3"
                             placeholder="Enter Description">
                          </div>
                          <div class="">
                            <label for="exampleInputPassword3" class="form-label fw-semibold">Item Bar Code</label>
                            <input type="text" class="form-control" id="exampleInputPassword3"
                              value="B1254">
                          </div>
                          <div class="">
                            <label for="exampleInputPassword3" class="form-label fw-semibold">Item Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword3"
                              value="Leather">
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
          </div>
          </div>
 
          <!-- ---------------------
                                end Scroll - Vertical
                            ---------------- -->

    </x-app-layout>
  