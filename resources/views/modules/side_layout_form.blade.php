<div class="shop-filters flex-shrink-0 border-end d-none d-lg-block">
    <ul class="list-unstyled mb-0 d-flex align-items-center justify-content-center">
        <li class="d-lg-none d-block">
            <a class="text-dark back-btn px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                href="javascript:void(0)">
                <i class="ti ti-arrow-left"></i>
            </a>
        </li>
        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-title="Star">
            <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                href="javascript:void(0)">
                <i class="ti ti-star"></i>
            </a>
        </li>
        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-title="important">
            <a class="d-block text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                href="javascript:void(0)">
                <i class="ti ti-alert-circle"></i>
            </a>
        </li>
        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-title="Delete">
            <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                href="javascript:void(0)">
                <i class="ti ti-trash"></i>
            </a>
        </li>
        <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-title="Delete">
            <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
                href="javascript:void(0)">
                <i class="ti ti-printer"></i>
            </a>
        </li>

    </ul>

    <hr />
    <!-- Example single danger button -->
    <div class="btn-group mb-1 w-100 px-2 py-2">
        <button type="button" class="btn bg-danger-subtle text-danger">
            Action
        </button>
        <button type="button"
            class="btn bg-danger-subtle text-danger dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li>
                <a class="dropdown-item" href="#">Update Contact Information</a>
            </li>
            <li>
                <a class="dropdown-item" href="#">View History</a>
            </li>
            <li>
                <a class="dropdown-item" href="#">Schedule Follow-up</a>
            </li>
            <li>
                <a class="dropdown-item" href="#">Refund Request</a>
            </li>
            <li>
                <a class="dropdown-item" href="#">Close Issue</a>
            </li>
            <li>
                <a class="dropdown-item" href="#">Issue Discount</a>
            </li>
            <li>
                <a class="dropdown-item" href="#">Cancel Service</a>
            </li>
            <li>
                <hr class="dropdown-divider" />
            </li>
            <li>
                <a class="dropdown-item" href="#">Print</a>
            </li>
        </ul>
    </div>


    <hr />

    <ul class="list-group pt-0 border-bottom rounded-0">
        <h6 class="my-3 mx-4 fw-semibold">Add Tags</h6>
        <li class="list-group-item border-0 p-0 mx-4 mb-2">
            <button type="button" class="btn mb-1 btn-lg px-4 fs-4 font-medium bg-primary-subtle text-primary"
            data-bs-toggle="modal" data-bs-target="#samedata-modal" data-bs-whatever="@mdo">
            <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5"
            href="javascript:void(0)">
            <i class="ti ti-plus"></i>
        </a>
          </button>
          <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
            href="javascript:void(0)">- Important (tags)
          </a>
        </li>
        
      </ul>

 
    <form class="row px-2 py-2">
        <div class="col-sm-12">
            <label class="form-label fw-semibold">Employee</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Employee 1</option>

                <option value="1">Employee 2
                </option>

            </select>
        </div>
    </form>
    <div class="p-1">
        <a href="javascript:void(0)" class="btn btn-primary w-100">Assign</a>
    </div>
    <hr/>
    <div class="by-gender border-bottom rounded-0">
        <h6 class="mt-4 mb-3 mx-4 fw-semibold">Logs: </h6>
        <div class="pb-4 px-4">
            {{-- Lorem Ipsum is simply dummy text of the printing and
              type setting industry. --}}
            <h6 class="font-weight-medium">Subadmin accepted</h6>
            <div class="text-muted">January 23, 2024</div>

        </div>
        <div class="pb-4 px-4">
            {{-- Lorem Ipsum is simply dummy text of the printing and
              type setting industry. --}}
            <h6 class="font-weight-medium">Customer Created</h6>
            <div class="text-muted">January 14, 2023</div>

        </div>
    </div>

   

    {{-- <div class="p-4">
        <a href="javascript:void(0)" class="btn btn-primary w-100">Reset Filters</a>
    </div> --}}
</div>