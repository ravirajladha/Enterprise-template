<x-app-layout>

  <div class="body-wrapper">
    <div class="container-fluid">
      <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
<div class="card-body px-4 py-3">
<div class="row align-items-center">
  <div class="col-9">
    <h4 class="fw-semibold mb-8">Product Variants</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="../main/index.html"
            >Home</a
          >
        </li>
        <li class="breadcrumb-item" aria-current="page">Item Variants</li>
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
                  href="javascript:void(0)"><i class="ti ti-hanger fs-5"></i>Quantity
                </a>
              </li>
              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                  href="javascript:void(0)"><i class="ti ti-notebook fs-5"></i></i>Size
                </a>
              </li>
              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                  href="javascript:void(0)"><i class="ti ti-mood-smile fs-5"></i>Usability
                </a>
              </li>
              <li class="list-group-item border-0 p-0 mx-4 mb-2">
                <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                  href="javascript:void(0)"><i class="ti ti-device-laptop fs-5"></i>Brutility
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
                  href="javascript:void(0)"><i class="ti ti-sort-descending-2 fs-5"></i></i>Price: Low-High
                </a>
              </li>
            
            </ul>
         
          
            <div class="p-4">
              <a href="javascript:void(0)" class="btn btn-primary w-100">Reset Filters</a>
            </div>
          </div>
          <div class="card-body p-4 pb-0">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <a class="btn btn-primary d-lg-none d-flex" data-bs-toggle="offcanvas" href="#offcanvasExample"
                role="button" aria-controls="offcanvasExample">
                <i class="ti ti-menu-2 fs-6"></i>
              </a>
              <h5 class="fs-5 fw-semibold mb-0 d-none d-lg-block">Items </h5>
              <form class="position-relative">
                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                  placeholder="Search Item">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
              </form>
            </div>
            <div class="row">
              <div class="col-sm-6 col-xl-4">
                <div class="card hover-img overflow-hidden rounded-2">
                  <div class="position-relative">
                    <a href="javascript:void(0)"><img src="../assets/images/products/s11.jpg"
                        class="card-img-top rounded-0" alt="..."></a>
                        <a href="/product_balance"
                        class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Item"><i
                          class="ti ti-eye fs-4"></i></a>
                  </div>
                  <div class="card-body pt-3 p-4">
                    <h6 class="fw-semibold fs-4">Toy</h6>
                    <div class="d-flex align-items-center justify-content-between">
                      <h6 class="fw-semibold fs-4 mb-0">Qty: 25 <span
                          class="ms-2 fw-normal text-muted fs-3"></span></h6>
                   
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4">
                <div class="card hover-img overflow-hidden rounded-2">
                  <div class="position-relative">
                    <a href="javascript:void(0)"><img src="../assets/images/products/s5.jpg"
                        class="card-img-top rounded-0" alt="..."></a>
                        <a href="/product_balance"
                        class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Item"><i
                          class="ti ti-eye fs-4"></i></a>
                  </div>
                  <div class="card-body pt-3 p-4">
                    <h6 class="fw-semibold fs-4">Laptop</h6>
                    <div class="d-flex align-items-center justify-content-between">
                      <h6 class="fw-semibold fs-4 mb-0">Qty: 55 <span
                          class="ms-2 fw-normal text-muted fs-3"></span></h6>
                   
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4">
                <div class="card hover-img overflow-hidden rounded-2">
                  <div class="position-relative">
                    <a href="javascript:void(0)"><img src="../assets/images/products/s6.jpg"
                        class="card-img-top rounded-0" alt="..."></a>
                        <a href="/product_balance"
                        class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View Item"><i
                          class="ti ti-eye fs-4"></i></a>
                  </div>
                  <div class="card-body pt-3 p-4">
                    <h6 class="fw-semibold fs-4">Joystick</h6>
                    <div class="d-flex align-items-center justify-content-between">
                      <h6 class="fw-semibold fs-4 mb-0">Qty: 33 <span
                          class="ms-2 fw-normal text-muted fs-3"></span></h6>
                   
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
    </x-app-layout>
 
