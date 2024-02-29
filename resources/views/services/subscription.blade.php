<x-app-layout>

  <div class="body-wrapper">
    <div class="container-fluid">
      <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
<div class="card-body px-4 py-3">
<div class="row align-items-center">
  <div class="col-9">
    <h4 class="fw-semibold mb-8">Subscription</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="/services"
            >Home</a
          >
        </li>
        <li class="breadcrumb-item" aria-current="page">Subscription</li>
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

      <div class="widget-content searchable-container list">
      
        <!-- Modal -->


        <div class="row">
          <div class="col-12">
            <div class="card-body p-4 pb-0">
              <div class="d-flex justify-content-between align-items-center mb-4">
                  <a class="btn btn-primary d-lg-none d-flex" data-bs-toggle="offcanvas"
                      href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                      <i class="ti ti-menu-2 fs-6"></i>
                  </a>
                  {{-- <h5 class="fs-5 fw-semibold mb-0 d-none d-lg-block">Connections</h5> --}}

                  <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                      <button type="button" data-bs-toggle="modal" data-bs-target="#samedata-modal1" data-bs-whatever="@mdo" class=" btn  btn-rounded btn-secondary  align-items-center">
                          <i class="ti ti-device-floppy fs-4 me-2"></i>
                          Save Draft
                      </button>
                      <button class="btn btn-primary">Save</button>
                      <button class="btn bg-danger-subtle text-danger">Cancel</button>
                  </div>

                
              </div>
              <div class="row">

                  <div class="row justify-content-center">
                      <div class="col-lg-12">
                          <div class="text-center mb-7">
                              {{-- <h3 class="fw-semibold">Frequently asked questions</h3>
                              <p class="fw-normal mb-0 fs-4">Get to know more about ready-to-use admin
                                  dashboard templates</p> --}}
                          </div>
                          <div class="accordion accordion-flush mb-5 card position-relative overflow-hidden"
                              id="accordionFlushExample">
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingOne">
                                      <button class="accordion-button  fs-4 fw-semibold shadow-none"
                                          type="button" data-bs-toggle="collapse"
                                          data-bs-target="#flush-collapseOne" aria-expanded="true"
                                          aria-controls="flush-collapseOne">
                                          Connections
                                      </button>
                                  </h2>
                                  <div id="flush-collapseOne" class="accordion-collapse "
                                      aria-labelledby="flush-headingOne"
                                      data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body fw-normal">
                                          <form>
                                              <div class="row">
                                              
                                                  <div class="col-lg-6">
                                                      <div class="mb-4">
                                                          <label
                                                              class="form-label fw-semibold">Party Type</label>
                                                          <select class="form-select"
                                                              aria-label="Default select example">
                                                              <option selected>Customer</option>
                                                              <option value="1">Vendor</option>
                                                              <option value="1">Retailer</option>
                                                              <option value="1">Distributor</option>

                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="exampleInputtext"
                                                            class="form-label fw-semibold">Company Name</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleInputtext"
                                                            placeholder="Enter company name"
                                                            value="Raymond">
                                                    </div>
                                                </div>
                                                  <div class="col-lg-6">
                                                    <div class="mb-4">
                                                        <label for="exampleInputtext"
                                                            class="form-label fw-semibold">Party Name</label>
                                                        <input type="text" class="form-control"
                                                            id="exampleInputtext"
                                                            placeholder="Enter party name"
                                                            value="Raja Gowda">
                                                    </div>
                                                </div>

                                                  <div class="col-lg-6">
                                                      <div class="mb-4">
                                                          <label
                                                              class="form-label fw-semibold">Status</label>
                                                          <select class="form-select"
                                                              aria-label="Default select example">
                                                              <option selected>Activate</option>
                                                              <option value="1">Cancel</option>

                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      <div class="mb-4">
                                                          <label for="exampleInputtext1"
                                                              class="form-label fw-semibold">Customer Email
                                                              id</label>
                                                          <input type="email" class="form-control"
                                                              id="exampleInputtext1"
                                                              placeholder="info@modernize.com"
                                                              value="alex@gmail.com">
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      <div class="mb-4">
                                                          <label for="exampleInputtext1"
                                                              class="form-label fw-semibold">Customer
                                                              Name</label>
                                                          <input type="text" class="form-control"
                                                              id="exampleInputtext1"
                                                              placeholder="Customer Name"
                                                              value="Alex William">
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      <div class="mb-4">
                                                          <label
                                                              class="form-label fw-semibold">Priority</label>
                                                          <select class="form-select"
                                                              aria-label="Default select example">
                                                              <option selected>High</option>
                                                              <option value="1">Medium</option>
                                                              <option value="1">Low</option>

                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      <div class="mb-4">
                                                          <label class="form-label fw-semibold">Issue
                                                              Type</label>
                                                          <select class="form-select"
                                                              aria-label="Default select example">
                                                              <option selected>Order Type</option>
                                                              <option value="1">Shipment Issue</option>
                                                              <option value="1">Quality Issue</option>
                                                              <option value="1">Not Delivered</option>

                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      <div class="mb-4">
                                                          <label for="exampleInputtext2"
                                                              class="form-label fw-semibold">Store
                                                              Name</label>
                                                          <input type="text" class="form-control"
                                                              id="exampleInputtext2"
                                                              placeholder="Maxima Studio">
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      <div class="mb-4">
                                                          <label
                                                              class="form-label fw-semibold">Currency</label>
                                                          <select class="form-select"
                                                              aria-label="Default select example">
                                                              <option selected>India (INR)</option>
                                                              <option value="1">US Dollar ($)
                                                              </option>
                                                              <option value="2">United Kingdom
                                                                  (Pound)</option>
                                                              <option value="3">India (INR)</option>
                                                              <option value="3">Russia (Ruble)
                                                              </option>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="col-lg-6">
                                                      <div class="mb-4">
                                                          <label for="exampleInputtext3"
                                                              class="form-label fw-semibold">Phone</label>
                                                          <input type="text" class="form-control"
                                                              id="exampleInputtext3"
                                                              placeholder="+91 12345 65478">
                                                      </div>
                                                  </div>
                                                  <div class="col-12">
                                                      <div class="">
                                                          <label for="exampleInputtext4"
                                                              class="form-label fw-semibold">Address</label>
                                                          <input type="text" class="form-control"
                                                              id="exampleInputtext4"
                                                              placeholder="814 Howard Street, 120065, India">
                                                      </div>
                                                  </div>
                                               
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingTwo">
                                      <button class="accordion-button  fs-4 fw-semibold shadow-none"
                                          type="button" data-bs-toggle="collapse"
                                          data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                          aria-controls="flush-collapseTwo">
                                          Details
                                      </button>
                                  </h2>
                                  <div id="flush-collapseTwo" class="accordion-collapse "
                                      aria-labelledby="flush-headingTwo"
                                      data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body fw-normal">
                                          <div class="col-12">
                                            <div class="row">
                                            <div class="col-lg-6">
                                              <div class="mb-4">
                                                  <label for="exampleInputtext3"
                                                      class="form-label fw-semibold">Subscription Start Date</label>
                                                  <input type="date" class="form-control"
                                                      id="exampleInputtext3"
                                                      >
                                              </div>
                                          </div>
                                            <div class="col-lg-6">
                                              <div class="mb-4">
                                                  <label for="exampleInputtext3"
                                                      class="form-label fw-semibold">Subscription Start Date</label>
                                                  <input type="date" class="form-control"
                                                      id="exampleInputtext3"
                                                     >
                                              </div>
                                          </div>
                                            <div class="col-lg-6">
                                              <div class="mb-4">
                                                  <label for="exampleInputtext3"
                                                      class="form-label fw-semibold">Current Invoice Start Date</label>
                                                  <input type="date" class="form-control"
                                                      id="exampleInputtext3"
                                                     >
                                              </div>
                                          </div>
                                            <div class="col-lg-6">
                                              <div class="mb-4">
                                                  <label for="exampleInputtext3"
                                                      class="form-label fw-semibold">Current Invoice End Date</label>
                                                  <input type="date" class="form-control"
                                                      id="exampleInputtext3"
                                                     >
                                              </div>
                                          </div>
                                            <div class="col-lg-6">
                                              <div class="mb-4">
                                                  <label for="exampleInputtext3"
                                                      class="form-label fw-semibold">Cancellation Date</label>
                                                  <input type="date" class="form-control"
                                                      id="exampleInputtext3"
                                                     >
                                              </div>
                                          </div>
                                            <div class="col-lg-6">
                                              <div class="mb-4">
                                                  <label for="exampleInputtext3"
                                                      class="form-label fw-semibold">Days Until Due</label>
                                                  <input type="text" class="form-control"
                                                      id="exampleInputtext3" placeholder="Enter Due Date"
                                                     >
                                                     <p class="mb-0">Number of days that the subscriber has to pay invoices generated by this subscription.</p>
                                              </div>
                                          </div>
                                        
                                            <div class="col-lg-6">
                                              <div class="mb-4">
                                                  <label for="exampleInputtext3"
                                                      class="form-label fw-semibold">Trial Period Start Date</label>
                                                  <input type="date" class="form-control"
                                                      id="exampleInputtext3" 
                                                     >
                                              </div>
                                          </div>
                                            <div class="col-lg-6">
                                              <div class="mb-4">
                                                  <label for="exampleInputtext3"
                                                      class="form-label fw-semibold">Trial Period End Date</label>
                                                  <input type="date" class="form-control"
                                                      id="exampleInputtext3" 
                                                     >
                                              </div>
                                          </div>
                                          </div>

                                          





                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingThree">
                                      <button class="accordion-button  fs-4 fw-semibold shadow-none"
                                          type="button" data-bs-toggle="collapse"
                                          data-bs-target="#flush-collapseThree" aria-expanded="false"
                                          aria-controls="flush-collapseThree">
                                          Settings
                                      </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse "
                                      aria-labelledby="flush-headingThree"
                                      data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body fw-normal">

                      
                          <form class="mb-7">
                            <label for="exampleInputtext5" class="form-label fw-semibold">Additional Email Address to notify*</label>
                            <input type="text" class="form-control" id="exampleInputtext5" placeholder="" required>
                         
                          </form>
                          <div class="">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                              <div class="d-flex align-items-center gap-3">
                                <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                  <i class="ti ti-article text-dark d-block fs-7" width="22" height="22"></i>
                                </div>
                                <div>
                                  <h5 class="fs-4 fw-semibold">Cancel at End of Period</h5>
                                  {{-- <p class="mb-0">We'll always let you know about important changes</p> --}}
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
                                  <h5 class="fs-4 fw-semibold">Generate Invoice at the Beginning of Period</h5>
                                 
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
                                  <h5 class="fs-4 fw-semibold">Follow Calendar Months</h5>
                                  <p class="mb-0">If this is checked subsequent new invoices will be created on calndar month and quarter start dates irrespective of current invoice start date.</p>
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
                                  <h5 class="fs-4 fw-semibold">Generate New Invoices Past Due Date
                                  
                                  </h5>
                                  <p class="mb-0">New Invocies will be generated as per schedule even if current invoices are unpaid or past due date.</p>
                                </div>
                              </div>
                              <div class="form-check form-switch mb-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                  id="flexSwitchCheckChecked3">
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

 
  



      </x-app-layout>


