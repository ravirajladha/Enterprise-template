<x-app-layout>
    <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    {{-- Old Wrapper --}}
      {{-- <div class="body-wrapper">
          <div class="container-fluid">
              <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                  <div class="card-body px-4 py-3">
                      <div class="row align-items-center">
                          <div class="col-9">
                              <h4 class="fw-semibold mb-8">Shop</h4>
                              <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item">
                                          <a class="text-muted text-decoration-none" href="../main/index.html">Home</a>
                                      </li>
                                      <li class="breadcrumb-item" aria-current="page">Shop</li>
                                  </ol>
                              </nav>
                          </div>
                          <div class="col-3">
                              <div class="text-center mb-n5">
                                  <img src="../assets/images/breadcrumb/ChatBc.png" alt=""
                                      class="img-fluid mb-n4" />
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
  
              <div class="card position-relative overflow-hidden">
                  <div class="shop-part d-flex w-100">
                      <div class="shop-filters flex-shrink-0 border-end d-none d-lg-block">
                          <ul class="list-group pt-2 border-bottom rounded-0">
                              <h6 class="my-3 mx-4 fw-semibold">Filter by Category</h6>
                              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                  <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                      href="javascript:void(0)"><i class="ti ti-circles fs-5"></i>All
                                  </a>
                              </li>
                              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                  <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                      href="javascript:void(0)"><i class="ti ti-hanger fs-5"></i>Fashion
                                  </a>
                              </li>
                              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                  <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                      href="javascript:void(0)"><i class="ti ti-notebook fs-5"></i></i>Books
                                  </a>
                              </li>
                              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                  <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                      href="javascript:void(0)"><i class="ti ti-mood-smile fs-5"></i>Toys
                                  </a>
                              </li>
                              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                  <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                      href="javascript:void(0)"><i class="ti ti-device-laptop fs-5"></i>Electronics
                                  </a>
                              </li>
                          </ul>
                          <ul class="list-group pt-2 border-bottom rounded-0">
                              <h6 class="my-3 mx-4 fw-semibold">Sort By</h6>
                              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                  <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                      href="javascript:void(0)"><i class="ti ti-ad-2 fs-5"></i>Newest
                                  </a>
                              </li>
                              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                  <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                      href="javascript:void(0)"><i class="ti ti-sort-ascending-2 fs-5"></i>Price: High-Low
                                  </a>
                              </li>
                              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                  <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                      href="javascript:void(0)"><i class="ti ti-sort-descending-2 fs-5"></i></i>Price:
                                      Low-High
                                  </a>
                              </li>
                              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                  <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                      href="javascript:void(0)"><i class="ti ti-ad-2 fs-5"></i>Discounted
                                  </a>
                              </li>
                          </ul>
                          <div class="by-gender border-bottom rounded-0">
                              <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Gender</h6>
                              <div class="pb-4 px-4">
                                  <div class="form-check py-2 mb-0">
                                      <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                          id="exampleRadios1" value="option1" checked>
                                      <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios1">
                                          All
                                      </label>
                                  </div>
                                  <div class="form-check py-2 mb-0">
                                      <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                          id="exampleRadios2" value="option1">
                                      <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios2">
                                          Men
                                      </label>
                                  </div>
                                  <div class="form-check py-2 mb-0">
                                      <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                          id="exampleRadios3" value="option1">
                                      <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios3">
                                          Women
                                      </label>
                                  </div>
                                  <div class="form-check py-2 mb-0">
                                      <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                          id="exampleRadios4" value="option1">
                                      <label class="form-check-label d-flex align-items-center ps-2" for="exampleRadios4">
                                          Kids
                                      </label>
                                  </div>
                              </div>
                          </div>
  
  
                          <div class="p-4">
                              <a href="javascript:void(0)" class="btn btn-primary w-100">Reset Filters</a>
                          </div>
                      </div>
  
  
                      <div class="card-body p-4 pb-0">
                          <div class="d-flex justify-content-between align-items-center mb-4">
                              <a class="btn btn-primary d-lg-none d-flex" data-bs-toggle="offcanvas"
                                  href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                                  <i class="ti ti-menu-2 fs-6"></i>
                              </a>
                              <h5 class="fs-5 fw-semibold mb-0 d-none d-lg-block">Products</h5>
                              <form class="position-relative">
                                  <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                                      placeholder="Search Product">
                                  <i
                                      class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                              </form>
                          </div>
                          <div class="row">
  
                              <div class="col-sm-6 col-xl-4">
                                  <div class="card hover-img overflow-hidden rounded-2">
                                      <div class="position-relative">
                                          <a href="javascript:void(0)"><img src="../assets/images/products/s2.jpg"
                                                  class="card-img-top rounded-0" alt="..."></a>
                                          <a href="javascript:void(0)"
                                              class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                              data-bs-toggle="tooltip" data-bs-placement="top"
                                              data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i></a>
                                      </div>
                                      <div class="card-body pt-3 p-4">
                                          <h6 class="fw-semibold fs-4">Psalms Book for Growth</h6>
                                          <div class="d-flex align-items-center justify-content-between">
                                              <h6 class="fw-semibold fs-4 mb-0">$89 <span
                                                      class="ms-2 fw-normal text-muted fs-3"><del>$99</del></span></h6>
                                              <ul class="list-unstyled d-flex align-items-center mb-0">
                                                  <li><a class="me-1" href="javascript:void(0)"><i
                                                              class="ti ti-star text-warning"></i></a>
                                                  </li>
                                                  <li><a class="me-1" href="javascript:void(0)"><i
                                                              class="ti ti-star text-warning"></i></a>
                                                  </li>
                                                  <li><a class="me-1" href="javascript:void(0)"><i
                                                              class="ti ti-star text-warning"></i></a>
                                                  </li>
                                                  <li><a class="me-1" href="javascript:void(0)"><i
                                                              class="ti ti-star text-warning"></i></a>
                                                  </li>
                                                  <li><a class="" href="javascript:void(0)"><i
                                                              class="ti ti-star text-warning"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
  
  
                      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                          aria-labelledby="offcanvasExampleLabel">
                          <div class="offcanvas-body shop-filters w-100 p-0">
                              <ul class="list-group pt-2 border-bottom rounded-0">
                                  <h6 class="my-3 mx-4 fw-semibold">Filter by Category</h6>
                                  <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                      <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                          href="javascript:void(0)"><i class="ti ti-circles fs-5"></i>All
                                      </a>
                                  </li>
                                  <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                      <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                          href="javascript:void(0)"><i class="ti ti-hanger fs-5"></i>Fashion
                                      </a>
                                  </li>
                                  <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                      <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                          href="javascript:void(0)"><i class="ti ti-notebook fs-5"></i></i>Books
                                      </a>
                                  </li>
                                  <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                      <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                          href="javascript:void(0)"><i class="ti ti-mood-smile fs-5"></i>Toys
                                      </a>
                                  </li>
                                  <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                      <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                          href="javascript:void(0)"><i class="ti ti-device-laptop fs-5"></i>Electronics
                                      </a>
                                  </li>
                              </ul>
                              <ul class="list-group pt-2 border-bottom rounded-0">
                                  <h6 class="my-3 mx-4 fw-semibold">Sort By</h6>
                                  <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                      <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                          href="javascript:void(0)"><i class="ti ti-ad-2 fs-5"></i>Newest
                                      </a>
                                  </li>
                                  <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                      <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                          href="javascript:void(0)"><i class="ti ti-sort-ascending-2 fs-5"></i>Price:
                                          High-Low
                                      </a>
                                  </li>
                                  <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                      <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                          href="javascript:void(0)"><i
                                              class="ti ti-sort-descending-2 fs-5"></i></i>Price: Low-High
                                      </a>
                                  </li>
                                  <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                      <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                                          href="javascript:void(0)"><i class="ti ti-ad-2 fs-5"></i>Discounted
                                      </a>
                                  </li>
                              </ul>
  
  
  
                              <div class="p-4">
                                  <a href="javascript:void(0)" class="btn btn-primary w-100">Reset Filters</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div> --}}
    {{-- Old Wrapper End --}}
  
  
      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body px-4 py-3">
    <div class="row align-items-center">
      <div class="col-9">
        <h4 class="fw-semibold mb-8">Batched Inventory</h4>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="../main/index.html"
                >Home</a
              >
            </li>
            <li class="breadcrumb-item" aria-current="page">Batched Inventory</li>
          </ol>
        </nav>
      </div>
      <div class="col-3">
        <div class="text-center mb-n5">
          <img
            src="../assets/images/breadcrumb/ChatBc.png"
            alt=""
            class="img-fluid mb-n4"
          />
        </div>
      </div>
    </div>
  </div>
  </div>
  
          <div class="card">

            <div class="card-body">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                  aria-labelledby="pills-account-tab" tabindex="0">
                
  
      {{-- ----TABLE ONE---- --}}
              <!-- language file -->
              <div class="row">
                <div class="col-12">

                      <div class="mb-2">
                        <h5 class="mb-0">Batch Details</h5>
                      </div>
                   
                      <div class="table-responsive">
                        <table id="lang_file" class="table border table-striped table-bordered display text-nowrap"
                          style="width: 100%">
                          <thead>
                            <!-- start row -->
                            <tr>
                              <th><input type="checkbox" id="selectAll"/></th>
                              <th>Sl. No. </th>
                              <th>UID</th>
                              <th>Batch Name</th>
                              <th>Manufacture Date</th>
                              <th>Expiry date</th>
                              <th>Action</th>
                            </tr>
                            <!-- end row -->
                          </thead>
                          <tbody>
                            <!-- start row -->
                            <tr>
                              <th><input type="checkbox" id="selectAll"/></th>
                              <td>1</td>
                              <td>B12525</td>
                              <td>Leather</td>
                              <td>24th Feb 2024</td>
                              <td>24th Dec 2024</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-info"
                                    title="View"><i class="fa fa-eye"></i></a>
                                <a href="/add_batched_inventory" class="btn btn-sm btn-primary"
                                    title="Edit"><i class="fa fa-edit"></i></a>
                            </td>
                            </tr>
                            <tr>
                              <th><input type="checkbox" id="selectAll"/></th>
                              <td>2</td>
                              <td>B12526</td>
                              <td>Wood</td>
                              <td>24th Feb 2024</td>
                              <td>24th Dec 2024</td>
                              <td>
                                <a href="#" class="btn btn-sm btn-info"
                                    title="View"><i class="fa fa-eye"></i></a>
                                <a href="/add_batched_inventory" class="btn btn-sm btn-primary"
                                    title="Edit"><i class="fa fa-edit"></i></a>
                            </td>
                            </tr>
                     
                  
                          </tbody>
                          <tfoot>
                            <!-- start row -->
                            <tr>
                              <th><input type="checkbox" id="selectAll"/></th>
                              <th>Sl. No. </th>
                              <th>UID</th>
                              <th>Batch Name</th>
                              <th>Manufacture Date</th>
                              <th>Expiry date</th>
                              <th>Action</th>
                            </tr>
                            <!-- end row -->
                          </tfoot>
                        </table>
                      </div>
                  
     
                </div>
              </div>
              </div>
     
                <div class="tab-pane fade" id="pills-notifications" role="tabpanel"
                  aria-labelledby="pills-notifications-tab" tabindex="0">
                  <div class="row justify-content-center">
                    <div class="col-lg-9">
                      <div class="card">
                        <div class="card-body p-4">
                          <h4 class="fw-semibold mb-3">Notification Preferences</h4>
                          <p>
                            Select the notificaitons ou would like to receive via email. Please note that you cannot opt
                            out of receving service
                            messages, such as payment, security or legal notifications.
                          </p>
                          <form class="mb-7">
                            <label for="exampleInputtext5" class="form-label fw-semibold">Email Address*</label>
                            <input type="text" class="form-control" id="exampleInputtext5" placeholder="" required>
                            <p class="mb-0">Required for notificaitons.</p>
                          </form>
                          <div class="">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                              <div class="d-flex align-items-center gap-3">
                                <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                  <i class="ti ti-article text-dark d-block fs-7" width="22" height="22"></i>
                                </div>
                                <div>
                                  <h5 class="fs-4 fw-semibold">Our newsletter</h5>
                                  <p class="mb-0">We'll always let you know about important changes</p>
                                </div>
                              </div>
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                  id="flexSwitchCheckChecked">
                              </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                              <div class="d-flex align-items-center gap-3">
                                <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                  <i class="ti ti-checkbox text-dark d-block fs-7" width="22" height="22"></i>
                                </div>
                                <div>
                                  <h5 class="fs-4 fw-semibold">Order Confirmation</h5>
                                  <p class="mb-0">You will be notified when customer order any product</p>
                                </div>
                              </div>
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                  id="flexSwitchCheckChecked1" checked>
                              </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                              <div class="d-flex align-items-center gap-3">
                                <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                  <i class="ti ti-clock-hour-4 text-dark d-block fs-7" width="22" height="22"></i>
                                </div>
                                <div>
                                  <h5 class="fs-4 fw-semibold">Order Status Changed</h5>
                                  <p class="mb-0">You will be notified when customer make changes to the order</p>
                                </div>
                              </div>
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                  id="flexSwitchCheckChecked2" checked>
                              </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                              <div class="d-flex align-items-center gap-3">
                                <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                  <i class="ti ti-truck-delivery text-dark d-block fs-7" width="22" height="22"></i>
                                </div>
                                <div>
                                  <h5 class="fs-4 fw-semibold">Order Delivered</h5>
                                  <p class="mb-0">You will be notified once the order is delivered</p>
                                </div>
                              </div>
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                  id="flexSwitchCheckChecked3">
                              </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                              <div class="d-flex align-items-center gap-3">
                                <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                  <i class="ti ti-mail text-dark d-block fs-7" width="22" height="22"></i>
                                </div>
                                <div>
                                  <h5 class="fs-4 fw-semibold">Email Notification</h5>
                                  <p class="mb-0">Turn on email notificaiton to get updates through email</p>
                                </div>
                              </div>
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                  id="flexSwitchCheckChecked4" checked>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card">
                        <div class="card-body p-4">
                          <h4 class="fw-semibold mb-3">Date & Time</h4>
                          <p>Time zones and calendar display settings.</p>
                          <div class="d-flex align-items-center justify-content-between mt-7">
                            <div class="d-flex align-items-center gap-3">
                              <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-clock-hour-4 text-dark d-block fs-7" width="22" height="22"></i>
                              </div>
                              <div>
                                <p class="mb-0">Time zone</p>
                                <h5 class="fs-4 fw-semibold">(UTC + 02:00) Athens, Bucharet</h5>
                              </div>
                            </div>
                            <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                              href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-title="Download">
                              <i class="ti ti-download"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card">
                        <div class="card-body p-4">
                          <h4 class="fw-semibold mb-3">Ignore Tracking</h4>
                          <div class="d-flex align-items-center justify-content-between mt-7">
                            <div class="d-flex align-items-center gap-3">
                              <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-player-pause text-dark d-block fs-7" width="22" height="22"></i>
                              </div>
                              <div>
                                <h5 class="fs-4 fw-semibold">Ignore Browser Tracking</h5>
                                <p class="mb-0">Browser Cookie</p>
                              </div>
                            </div>
                            <div class="form-check form-switch mb-0">
                              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked5">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex align-items-center justify-content-end gap-3">
                        <button class="btn btn-primary">Save</button>
                        <button class="btn bg-danger-subtle text-danger">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-bills" role="tabpanel" aria-labelledby="pills-bills-tab"
                  tabindex="0">
                  <div class="row justify-content-center">
                    <div class="col-lg-9">
                      <div class="card">
                        <div class="card-body p-4">
                          <h4 class="fw-semibold mb-3">Billing Information</h4>
                          <form>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="mb-4">
                                  <label for="exampleInputtext6" class="form-label fw-semibold">Business
                                    Name*</label>
                                  <input type="text" class="form-control" id="exampleInputtext6"
                                    placeholder="Visitor Analytics">
                                </div>
                                <div class="mb-4">
                                  <label for="exampleInputtext7" class="form-label fw-semibold">Business
                                    Address*</label>
                                  <input type="text" class="form-control" id="exampleInputtext7" placeholder="">
                                </div>
                                <div class="">
                                  <label for="exampleInputtext8" class="form-label fw-semibold">First Name*</label>
                                  <input type="text" class="form-control" id="exampleInputtext8" placeholder="">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="mb-4">
                                  <label for="exampleInputtext9" class="form-label fw-semibold">Business
                                    Sector*</label>
                                  <input type="text" class="form-control" id="exampleInputtext9"
                                    placeholder="Arts, Media & Entertainment">
                                </div>
                                <div class="mb-4">
                                  <label for="exampleInputtext10" class="form-label fw-semibold">Country*</label>
                                  <input type="text" class="form-control" id="exampleInputtext10" placeholder="Romania">
                                </div>
                                <div class="">
                                  <label for="exampleInputtext11" class="form-label fw-semibold">Last Name*</label>
                                  <input type="text" class="form-control" id="exampleInputtext11" placeholder="">
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card">
                        <div class="card-body p-4">
                          <h4 class="fw-semibold mb-3">Current Plan : <span class="text-success">Executive</span></h4>
                          <p>Thanks for being a premium member and supporting our development.</p>
                          <div class="d-flex align-items-center justify-content-between mt-7 mb-3">
                            <div class="d-flex align-items-center gap-3">
                              <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-package text-dark d-block fs-7" width="22" height="22"></i>
                              </div>
                              <div>
                                <p class="mb-0">Current Plan</p>
                                <h5 class="fs-4 fw-semibold">750.000 Monthly Visits</h5>
                              </div>
                            </div>
                            <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                              href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-title="Add">
                              <i class="ti ti-circle-plus"></i>
                            </a>
                          </div>
                          <div class="d-flex align-items-center gap-3">
                            <button class="btn btn-primary">Change Plan</button>
                            <button class="btn btn-outline-danger">Reset Plan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-9">
                      <div class="card">
                        <div class="card-body p-4">
                          <h4 class="fw-semibold mb-3">Payment Method</h4>
                          <p>On 26 December, 2023</p>
                          <div class="d-flex align-items-center justify-content-between mt-7">
                            <div class="d-flex align-items-center gap-3">
                              <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-credit-card text-dark d-block fs-7" width="22" height="22"></i>
                              </div>
                              <div>
                                <h5 class="fs-4 fw-semibold">Visa</h5>
                                <p class="mb-0 text-dark">*****2102</p>
                              </div>
                            </div>
                            <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                              href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top"
                              data-bs-title="Edit">
                              <i class="ti ti-pencil-minus"></i>
                            </a>
                          </div>
                          <p class="my-2">If you updated your payment method, it will only be dislpayed here after your
                            next billing cycle.</p>
                          <div class="d-flex align-items-center gap-3">
                            <button class="btn btn-outline-danger">Cancel Subscription</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex align-items-center justify-content-end gap-3">
                        <button class="btn btn-primary">Save</button>
                        <button class="btn bg-danger-subtle text-danger">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab"
                  tabindex="0">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="card">
                        <div class="card-body p-4">
                          <h4 class="fw-semibold mb-3">Two-factor Authentication</h4>
                          <div class="d-flex align-items-center justify-content-between pb-7">
                            <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis sapiente
                              sunt earum officiis laboriosam ut.</p>
                            <button class="btn btn-primary">Enable</button>
                          </div>
                          <div class="d-flex align-items-center justify-content-between py-3 border-top">
                            <div>
                              <h5 class="fs-4 fw-semibold mb-0">Authentication App</h5>
                              <p class="mb-0">Google auth app</p>
                            </div>
                            <button class="btn bg-primary-subtle text-primary">Setup</button>
                          </div>
                          <div class="d-flex align-items-center justify-content-between py-3 border-top">
                            <div>
                              <h5 class="fs-4 fw-semibold mb-0">Another e-mail</h5>
                              <p class="mb-0">E-mail to send verification link</p>
                            </div>
                            <button class="btn bg-primary-subtle text-primary">Setup</button>
                          </div>
                          <div class="d-flex align-items-center justify-content-between py-3 border-top">
                            <div>
                              <h5 class="fs-4 fw-semibold mb-0">SMS Recovery</h5>
                              <p class="mb-0">Your phone number or something</p>
                            </div>
                            <button class="btn bg-primary-subtle text-primary">Setup</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card">
                        <div class="card-body p-4">
                          <div
                            class="text-bg-light rounded-1 p-6 d-inline-flex align-items-center justify-content-center mb-3">
                            <i class="ti ti-device-laptop text-primary d-block fs-7" width="22" height="22"></i>
                          </div>
                          <h5 class="fs-5 fw-semibold mb-0">Devices</h5>
                          <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit Rem.</p>
                          <button class="btn btn-primary mb-4">Sign out from all devices</button>
                          <div class="d-flex align-items-center justify-content-between py-3 border-bottom">
                            <div class="d-flex align-items-center gap-3">
                              <i class="ti ti-device-mobile text-dark d-block fs-7" width="26" height="26"></i>
                              <div>
                                <h5 class="fs-4 fw-semibold mb-0">iPhone 14</h5>
                                <p class="mb-0">London UK, Oct 23 at 1:15 AM</p>
                              </div>
                            </div>
                            <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                              href="javascript:void(0)">
                              <i class="ti ti-dots-vertical"></i>
                            </a>
                          </div>
                          <div class="d-flex align-items-center justify-content-between py-3">
                            <div class="d-flex align-items-center gap-3">
                              <i class="ti ti-device-laptop text-dark d-block fs-7" width="26" height="26"></i>
                              <div>
                                <h5 class="fs-4 fw-semibold mb-0">Macbook Air</h5>
                                <p class="mb-0">Gujarat India, Oct 24 at 3:15 AM</p>
                              </div>
                            </div>
                            <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                              href="javascript:void(0)">
                              <i class="ti ti-dots-vertical"></i>
                            </a>
                          </div>
                          <button class="btn bg-primary-subtle text-primary w-100 py-1">Need Help ?</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex align-items-center justify-content-end gap-3">
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
      
  </x-app-layout>
  
  
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatable-advanced.init.js"></script>