<x-app-layout>

  <div class="body-wrapper">
    <div class="container-fluid">
      <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
<div class="card-body px-1 py-1">
<div class="row align-items-center">
  <div class="col-9">
    <h4 class="fw-semibold mb-8">Project Management</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="../main/index.html"
            >Projects</a
          >
        </li>
        <li class="breadcrumb-item" aria-current="page">Task</li>
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
              

             <p class=" my-2 mx-1">
              <select class="select2 form-control mb-3" >
                <option>Created By</option>
        
                  <option value="AK">User 1</option>
                  <option value="HI">User 2</option>
               
              </select>
           
              <select class="select2 form-control mb-3 mt-2" >
                <option>Assigned To</option>
                <option value="AK">User 1</option>
                <option value="HI">User 2</option>
               
              </select>
            </p>
             
             
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
                  href="javascript:void(0)"><i class="ti ti-sort-ascending-2 fs-5"></i>Oldest
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
              <h5 class="fs-5 fw-semibold mb-0 d-none d-lg-block">Projects > Task</h5>
              <form class="position-relative">
                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                  placeholder="Search Event">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
              </form>
            </div>
            <div class="row">
              <div class="card">
                <div>
                  <div class="row gx-0">
                    <div class="col-lg-12">
                      <div class="p-4 calender-sidebar app-calendar">
                        <div id="calendar"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


             <!-- BEGIN MODAL -->
          <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="eventModalLabel">
                    Add / Edit Event
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="">
                        <label class="form-label">Event Title</label>
                        <input id="event-title" type="text" class="form-control" />
                      </div>
                    </div>
                    <div class="col-md-12 mt-4">
                      <div><label class="form-label">Event Color</label></div>
                      <div class="d-flex">
                        <div class="n-chk">
                          <div class="form-check form-check-primary form-check-inline">
                            <input class="form-check-input" type="radio" name="event-level" value="Danger"
                              id="modalDanger" />
                            <label class="form-check-label" for="modalDanger">Danger</label>
                          </div>
                        </div>
                        <div class="n-chk">
                          <div class="form-check form-check-warning form-check-inline">
                            <input class="form-check-input" type="radio" name="event-level" value="Success"
                              id="modalSuccess" />
                            <label class="form-check-label" for="modalSuccess">Success</label>
                          </div>
                        </div>
                        <div class="n-chk">
                          <div class="form-check form-check-success form-check-inline">
                            <input class="form-check-input" type="radio" name="event-level" value="Primary"
                              id="modalPrimary" />
                            <label class="form-check-label" for="modalPrimary">Primary</label>
                          </div>
                        </div>
                        <div class="n-chk">
                          <div class="form-check form-check-danger form-check-inline">
                            <input class="form-check-input" type="radio" name="event-level" value="Warning"
                              id="modalWarning" />
                            <label class="form-check-label" for="modalWarning">Warning</label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 d-none">
                      <div class="">
                        <label class="form-label">Enter Start Date</label>
                        <input id="event-start-date" type="text" class="form-control" />
                      </div>
                    </div>

                    <div class="col-md-12 d-none">
                      <div class="">
                        <label class="form-label">Enter End Date</label>
                        <input id="event-end-date" type="text" class="form-control" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">
                    Close
                  </button>
                  <button type="button" class="btn btn-success btn-update-event" data-fc-event-public-id="">
                    Update changes
                  </button>
                  <button type="button" class="btn btn-primary btn-add-event">
                    Add Event
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- END MODAL -->

          
          </div>
          {{-- <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
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
                    href="javascript:void(0)"><i class="ti ti-sort-ascending-2 fs-5"></i>Price: High-Low
                  </a>
                </li>
                <li class="list-group-item border-0 p-0 mx-4 mb-2">
                  <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                    href="javascript:void(0)"><i class="ti ti-sort-descending-2 fs-5"></i></i>Price: Low-High
                  </a>
                </li>
                <li class="list-group-item border-0 p-0 mx-4 mb-2">
                  <a class="d-flex align-items-center gap-2 list-group-item-action text-dark px-3 py-6 rounded-1"
                    href="javascript:void(0)"><i class="ti ti-ad-2 fs-5"></i>Discounted1
                  </a>
                </li>
              </ul>
           
              <div class="p-4">
                <a href="javascript:void(0)" class="btn btn-primary w-100">Reset Filters</a>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
        
  <script src="../assets/libs/fullcalendar/index.global.min.js"></script>
  <script src="../assets/js/apps/calendar-init.js"></script>
      </x-app-layout>
