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
        <h4 class="fw-semibold mb-8">Account Setting</h4>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="../main/index.html"
                >Home</a
              >
            </li>
            <li class="breadcrumb-item" aria-current="page">Account Setting</li>
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
  
  
            {{-- <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                  id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab"
                  aria-controls="pills-account" aria-selected="true">
                  <i class="ti ti-user-circle me-2 fs-6"></i>
                  <span class="d-none d-md-block">Account</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                  id="pills-notifications-tab" data-bs-toggle="pill" data-bs-target="#pills-notifications" type="button"
                  role="tab" aria-controls="pills-notifications" aria-selected="false">
                  <i class="ti ti-bell me-2 fs-6"></i>
                  <span class="d-none d-md-block">Notifications</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                  id="pills-bills-tab" data-bs-toggle="pill" data-bs-target="#pills-bills" type="button" role="tab"
                  aria-controls="pills-bills" aria-selected="false">
                  <i class="ti ti-article me-2 fs-6"></i>
                  <span class="d-none d-md-block">Bills</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                  id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button"
                  role="tab" aria-controls="pills-security" aria-selected="false">
                  <i class="ti ti-lock me-2 fs-6"></i>
                  <span class="d-none d-md-block">Security</span>
                </button>
              </li>
            </ul> --}}
  
  
            <div class="card-body">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
                  aria-labelledby="pills-account-tab" tabindex="0">
                  <div class="row">
                    {{-- <div class="col-lg-6 d-flex align-items-stretch">
                      <div class="card w-100 position-relative overflow-hidden">
                        <div class="card-body p-4">
                          <h5 class="card-title fw-semibold">Change Profile</h5>
                          <p class="card-subtitle mb-4">Change your profile picture from here</p>
                          <div class="text-center">
                            <img src="../assets/images/profile/user-1.jpg" alt="" class="img-fluid rounded-circle"
                              width="120" height="120">
                            <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                              <button class="btn btn-primary">Upload</button>
                              <button class="btn btn-outline-danger">Reset</button>
                            </div>
                            <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                          </div>
                        </div>
                      </div>
                    </div> --}}
  
                    {{-- <div class="col-lg-6 d-flex align-items-stretch">
                      <div class="card w-100 position-relative overflow-hidden">
                        <div class="card-body p-4">
                          <h5 class="card-title fw-semibold">Change Password</h5>
                          <p class="card-subtitle mb-4">To change your password please confirm here</p>
                          <form>
                            <div class="mb-4">
                              <label for="exampleInputPassword1" class="form-label fw-semibold">Current Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1"
                                value="12345678910">
                            </div>
                            <div class="mb-4">
                              <label for="exampleInputPassword2" class="form-label fw-semibold">New Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword2"
                                value="12345678910">
                            </div>
                            <div class="">
                              <label for="exampleInputPassword3" class="form-label fw-semibold">Confirm Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword3"
                                value="12345678910">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div> --}}
                    
                    <div class="col-12">
                      <div class="card w-100 position-relative overflow-hidden mb-0">
                        <div class="card-body p-4">
                          <h5 class="card-title fw-semibold">Item and Details</h5>
                          <p class="card-subtitle mb-4">Enter the details of the product</p>
                          <form>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="mb-4">
                                  <label for="exampleInputtext" class="form-label fw-semibold">Customer Name</label>
                                  <input type="text" class="form-control" id="exampleInputtext"
                                    placeholder="Enter Name">
                                </div>
  
                                <div class="mb-4">
                                  <label for="exampleInputtext" class="form-label fw-semibold">Contact Number</label>
                                  <input type="text" class="form-control" id="exampleInputtext"
                                    placeholder="Enter Contact Number">
                                </div>
  
                                <div class="mb-4">
                                  <label for="exampleInputtext1" class="form-label fw-semibold">Email</label>
                                  <input type="email" class="form-control" id="exampleInputtext1"
                                    placeholder="Enter email ID">
                                </div>
  
                                <div class="">
                                  <label for="exampleInputtext4" class="form-label fw-semibold">Description of Issue</label>
                                    <textarea class="form-control" id="exampleInputtext4" rows="3" placeholder="Write a brief description about the issue"></textarea>
                                    <small id="textHelp" class="form-text text-muted">Describe the issue</small>
                                </div>
  
                                {{-- <div class="mb-4">
                                  <label class="form-label fw-semibold">Location</label>
                                  <select class="form-select" aria-label="Default select example">
                                    <option selected>United Kingdom</option>
                                    <option value="1">United States</option>
                                    <option value="2">United Kingdom</option>
                                    <option value="3">India</option>
                                    <option value="3">Russia</option>
                                  </select>
                                </div> --}}
  
                                
  
                              </div>
  
  
                              <div class="col-lg-6">
                                <div class="mb-4">
                                  <label for="exampleInputtext2" class="form-label fw-semibold">Product ID</label>
                                  <input type="text" class="form-control" id="exampleInputtext2"
                                    placeholder="Enter Product ID">
                                </div>
  
                                <div class="mb-4">
                                  <label for="exampleInputtext2" class="form-label fw-semibold">Product Name</label>
                                  <input type="text" class="form-control" id="exampleInputtext2"
                                    placeholder="Enter Product Name">
                                </div>
  
                                <div class="mb-4">
                                  <label class="form-label fw-semibold">Date of Purchase</label>
  
                                  {{-- <select class="form-select" aria-label="Default select example">
                                    <option selected>India (INR)</option>
                                    <option value="1">US Dollar ($)</option>
                                    <option value="2">United Kingdom (Pound)</option>
                                    <option value="3">India (INR)</option>
                                    <option value="3">Russia (Ruble)</option>
                                  </select> --}}
  
                                  <div class="form-group">
                                    <input type="date" class="form-control" id="exampleInputtextN"
                                    placeholder="" value="dd-mm-yyyy">
                                </div>
  
                                </div>
  
  
                                {{-- <div class="mb-4">
                                  <label for="exampleInputtext3" class="form-label fw-semibold">Phone</label>
                                  <input type="text" class="form-control" id="exampleInputtext3"
                                    placeholder="+91 12345 65478">
                                </div> --}}
  
  
                                <div class="">
                                  <label for="exampleInputtext4" class="form-label fw-semibold">Invoice</label>
                                  <input type="file" class="form-control" id="">
                                </div>
                                
  
                              </div>
  
  
                              <div class="col-12">
                                {{-- <div class="">
                                  <label for="exampleInputtext4" class="form-label fw-semibold">Address</label>
                                  <input type="text" class="form-control" id="exampleInputtext4"
                                    placeholder="814 Howard Street, 120065, India">
                                </div> --}}
                              </div>
                              <div class="col-12">
                                <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                                  <button class="btn btn-primary">Save</button>
                                  <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
  
      {{-- ----TABLE ONE---- --}}
              <!-- language file -->
              <div class="row">
                <div class="col-12">
                  <!-- ---------------------
                              start Language file
                          ---------------- -->
                  <div class="card">
                    <div class="card-body">
                      <div class="mb-2">
                        <h5 class="mb-0">Purpose</h5>
                      </div>
                      <p class="card-subtitle mb-3">
                       This is from the Data Table with ascending/ Descending Functionality
                      </p>
                      <div class="table-responsive">
                        <table id="lang_file" class="table border table-striped table-bordered display text-nowrap"
                          style="width: 100%">
                          <thead>
                            <!-- start row -->
                            <tr>
                              <th><input type="checkbox" id="selectAll"/></th>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                            </tr>
                            <!-- end row -->
                          </thead>
                          <tbody>
                            <!-- start row -->
                            <tr>
                              <th><input type="checkbox" id="selectAll"/></th>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <th><input type="checkbox" id="selectAll"/></th>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td>$170,750</td>
                            </tr>
                            <!-- end row -->
                           
                  
                          </tbody>
                          <tfoot>
                            <!-- start row -->
                            <tr>
                              <th><input type="checkbox" id="selectAll"/></th>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                            </tr>
                            <!-- end row -->
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- ---------------------
                              end Language file
                          ---------------- -->
                </div>
              </div>
              </div>
        {{------END TABLE ONE------}}
  
  
        {{-- Second Tabel --}}
  
              <!-- table responsive -->
              <!-- ---------------------
                                        start Table Responsive 
                                    ---------------- -->
                                    <div class="card">
                                      <div class="card-body">
                                        <div class="mb-2">
                                          <h5 class="mb-0">Schedule</h5>
                                        </div>
                                        <p class="card-subtitle mb-3">Schedule table example</p>
                                        <div class="table-responsive m-t-40">
                                          <table id="config-table" class="table border display table-bordered table-striped no-wrap">
                                            <thead>
                                              <!-- start row -->
                                              <tr>
                                                <th>First name</th>
                                                <th>Last name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                <th>Extn.</th>
                                                <th>E-mail</th>
                                              </tr>
                                              <!-- end row -->
                                            </thead>
                                            <tbody>
                                              <!-- start row -->
                                              <tr>
                                                <td>Tiger</td>
                                                <td>Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>5421</td>
                                                <td>t.nixon@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Garrett</td>
                                                <td>Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                                <td>8422</td>
                                                <td>g.winters@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Ashton</td>
                                                <td>Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td>1562</td>
                                                <td>a.cox@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Cedric</td>
                                                <td>Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                                <td>6224</td>
                                                <td>c.kelly@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Airi</td>
                                                <td>Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                                <td>5407</td>
                                                <td>a.satou@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Brielle</td>
                                                <td>Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                                <td>4804</td>
                                                <td>b.williamson@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Herrod</td>
                                                <td>Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                                <td>9608</td>
                                                <td>h.chandler@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Rhona</td>
                                                <td>Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                                <td>6200</td>
                                                <td>r.davidson@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Colleen</td>
                                                <td>Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                                <td>2360</td>
                                                <td>c.hurst@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Sonya</td>
                                                <td>Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                                <td>1667</td>
                                                <td>s.frost@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Jena</td>
                                                <td>Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                                <td>3814</td>
                                                <td>j.gaines@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Quinn</td>
                                                <td>Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                                <td>9497</td>
                                                <td>q.flynn@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                              <!-- start row -->
                                              <tr>
                                                <td>Donna</td>
                                                <td>Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                                <td>4226</td>
                                                <td>d.snider@datatables.net</td>
                                              </tr>
                                              <!-- end row -->
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- ---------------------
                                                              end Table Responsive 
                                                          ---------------- -->
  
        {{--END Second Tabel --}}
  
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