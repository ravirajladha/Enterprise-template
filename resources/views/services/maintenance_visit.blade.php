<x-app-layout>
  <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/blackboard.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/monokai.min.css" />
  <link rel="stylesheet" href="../assets/libs/summernote/dist/summernote-lite.min.css">
  <div class="body-wrapper">
      <div class="container-fluid">
          <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
              <div class="card-body px-4 py-3">
                  <div class="row align-items-center">
                      <div class="col-9">
                          <h4 class="fw-semibold mb-8">Issues</h4>
                          <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item">
                                      <a class="text-muted text-decoration-none" href="/services">Home</a>
                                  </li>
                                  <li class="breadcrumb-item" aria-current="page">Issues -> Id: 2024/02/5215858</li>
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
                




                  @include('modules.side_layout_form')

                  <div class="card-body p-4 pb-0">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                          <a class="btn btn-primary d-lg-none d-flex" data-bs-toggle="offcanvas"
                              href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                              <i class="ti ti-menu-2 fs-6"></i>
                          </a>
                          {{-- <h5 class="fs-5 fw-semibold mb-0 d-none d-lg-block">Connections</h5> --}}

                          <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                              <button type="button" data-bs-toggle="modal" data-bs-target="#samedata-modal1" data-bs-whatever="@mdo" class=" btn  btn-rounded btn-primary  align-items-center">
                                  <i class="ti ti-send fs-4 me-2"></i>
                                  Send
                              </button>
                              <button class="btn btn-primary">Save</button>
                              <button class="btn bg-danger-subtle text-danger">Cancel</button>
                          </div>

                          <form class="position-relative">
                              <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                                  placeholder="Issue Number">
                              <i
                                  class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                          </form>
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
                                                                  <label for="exampleInputtext"
                                                                      class="form-label fw-semibold">Subject</label>
                                                                  <input type="text" class="form-control"
                                                                      id="exampleInputtext"
                                                                      placeholder="Enter subject name"
                                                                      value="Tshirt size too small">
                                                              </div>
                                                          </div>
                                                          <div class="col-lg-6">
                                                              <div class="mb-4">
                                                                  <label
                                                                      class="form-label fw-semibold">Status</label>
                                                                  <select class="form-select"
                                                                      aria-label="Default select example">
                                                                      <option selected>Open</option>
                                                                      <option value="1">Close</option>

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
                                                      <div class="card">
                                                          <div class="border-bottom title-part-padding">
                                                              <h4 class="card-title mb-0">Description</h4>
                                                          </div>
                                                          <div class="card-body">
                                                              <div class="summernote">
                                                                  <h4>Hello, Last week I have bought a Tshirt which is
                                                                      too small. Attaching the order image.
                                                                      Alex
                                                                  </h4>
                                                              </div>
                                                          </div>
                                                      </div>

                                                      <div class="col-12 mb-3">
                                                          <div
                                                              class="card w-100 position-relative overflow-hidden mb-0">
                                                              <div class="card-body p-4">
                                                                  <h5 class="card-title fw-semibold">Valid From</h5>

                                                                  <form>
                                                                      <div class="row">
                                                                          <div class="col-lg-6">
                                                                              <div class="mb-4">
                                                                                  <label for="exampleInputtext"
                                                                                      class="form-label fw-semibold">Start
                                                                                      Date</label>
                                                                                  <input type="date"
                                                                                      class="form-control"
                                                                                      id="exampleInputtext"
                                                                                      value="22/02/2024">
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-lg-6">
                                                                              <div class="mb-4">
                                                                                  <label for="exampleInputtext"
                                                                                      class="form-label fw-semibold">End
                                                                                      Date</label>
                                                                                  <input type="date"
                                                                                      class="form-control"
                                                                                      id="exampleInputtext"
                                                                                      value="22/02/2024">
                                                                              </div>

                                                                          </div>

                                                                      </div>
                                                                  </form>
                                                              </div>
                                                          </div>
                                                      </div>



                                                      <div class="row">
                                                          <div class="col-md-12">
                                                              <div class="card">
                                                                  <div class="border-bottom title-part-padding">
                                                                      <h4 class="card-title mb-0">Response &
                                                                          Resolution</h4>
                                                                  </div>
                                                                  <div class="card-body">

                                                                      <form class="row">
                                                                          <div class="col-sm-3">
                                                                              <div class="mb-3">
                                                                                  <label>No</label>
                                                                              </div>
                                                                          </div>

                                                                          <div class="col-sm-2">
                                                                              <div class="mb-3">
                                                                                  <label>Priority</label>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-sm-3">
                                                                              <div class="mb-3">
                                                                                  <label>First Response Time</label>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-sm-2">
                                                                              <div class="mb-3">
                                                                                  <label>Resolution Time</label>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-sm-2">
                                                                              <div class="mb-3">
                                                                                  <label>Action</label>
                                                                              </div>
                                                                          </div>
                                                                      </form>
                                                                      <div id="education_fields" class="my-1">
                                                                      </div>
                                                                      <form class="row">
                                                                          <div class="col-sm-3">
                                                                              <div class="mb-3">
                                                                                  <input type="text"
                                                                                      class="form-control"
                                                                                      id="Schoolname"
                                                                                      name="Enter SL. No"
                                                                                      placeholder="Enter SL. No" />
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-sm-2">
                                                                              <div class="mb-3">
                                                                                  <input type="text"
                                                                                      class="form-control"
                                                                                      id="Priority" name="E"
                                                                                      placeholder="High, Medium, Low" />
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-sm-2">
                                                                              <div class="mb-3">
                                                                                  <input type="text"
                                                                                      class="form-control"
                                                                                      id="Degree" name="Degree"
                                                                                      placeholder="In Hours" />
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-sm-3">
                                                                              <div class="mb-3">
                                                                                  <select class="form-select"
                                                                                      id="educationDate"
                                                                                      name="educationDate">
                                                                                      <option>Time</option>
                                                                                      <option value="2015">1hr
                                                                                      </option>
                                                                                      <option value="2016">2hr
                                                                                      </option>
                                                                                      <option value="2023">3hr
                                                                                      </option>
                                                                                      <option value="2023">4hr
                                                                                      </option>
                                                                                  </select>
                                                                              </div>
                                                                          </div>
                                                                          <div class="col-sm-2">
                                                                              <div class="mb-3">
                                                                                  <button
                                                                                      onclick="education_fields();"
                                                                                      class="
                                                    btn
                                                    btn-success
                                                    font-weight-medium
                                                    waves-effect waves-light
                                                  "
                                                                                      type="button">
                                                                                      <i
                                                                                          class="ti ti-circle-plus fs-5"></i>
                                                                                  </button>
                                                                              </div>
                                                                          </div>
                                                                      </form>
                                                                  </div>
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
                                                  Attachments
                                              </button>
                                          </h2>
                                          <div id="flush-collapseThree" class="accordion-collapse "
                                              aria-labelledby="flush-headingThree"
                                              data-bs-parent="#accordionFlushExample">
                                              <div class="accordion-body fw-normal">
                                                  <div class="mb-3">
                                                      <h6 class="fw-semibold mb-0 text-dark mb-3">Attachments</h6>
                                                      <div class="d-block d-sm-flex align-items-center gap-4">
                                                          <a href="javascript:void(0)"
                                                              class="hstack gap-3 mb-2 mb-sm-0">
                                                              <div class="d-flex align-items-center gap-3">
                                                                  <div class="rounded-1 text-bg-light p-6">
                                                                      <img src="../assets/images/chat/icon-adobe.svg"
                                                                          alt="" width="24"
                                                                          height="24">
                                                                  </div>
                                                                  <div>
                                                                      <h6 class="fw-semibold">receipt.pdf</h6>
                                                                      <div
                                                                          class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                          <span>2
                                                                              MB</span><span>2 Dec 2023</span>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </a>
                                                          <a href="javascript:void(0)"
                                                              class="hstack gap-3 file-chat-hover">
                                                              <div class="d-flex align-items-center gap-3">
                                                                  <div class="rounded-1 text-bg-light p-6">
                                                                      <img src="../assets/images/chat/icon-zip-folder.svg"
                                                                          alt="" width="24"
                                                                          height="24">
                                                                  </div>
                                                                  <div>
                                                                      <h6 class="fw-semibold">images.zip</h6>
                                                                      <div
                                                                          class="d-flex align-items-center gap-3 fs-2 text-muted">
                                                                          <span>2
                                                                              MB</span><span>2 Dec 2023</span>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>


                                      <div class="modal fade" id="samedata-modal" tabindex="-1" aria-labelledby="exampleModalLabel1">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header d-flex align-items-center">
                                                <h4 class="modal-title" id="exampleModalLabel1">
                                                  Add Tag
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                <form>
                                                  <div class="mb-3">
                                                    <label for="recipient-name" class="control-label">Name</label>
                                                    <input type="text" class="form-control" id="recipient-name1" />
                                                  </div>
                                                 
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

                                      <div class="modal fade" id="samedata-modal1" tabindex="-1" aria-labelledby="exampleModalLabel1">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header d-flex align-items-center">
                                                <h4 class="modal-title" id="exampleModalLabel1">
                                                  Send Message
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body">
                                                <form>
                                                  <div class="mb-3">
                                                    <label for="recipient-name" class="control-label">Message</label>
                                                    <input type="text" class="form-control" id="recipient-name1" />
                                                  </div>
                                                 
                                                </form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn bg-danger-subtle text-danger font-medium"
                                                  data-bs-dismiss="modal">
                                                  Close
                                                </button>
                                                <button type="button" class="btn btn-success">
                                                  Send Message
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- /.modal -->


                                      {{-- <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingfour">
                                              <button class="accordion-button collapsed fs-4 fw-semibold shadow-none"
                                                  type="button" data-bs-toggle="collapse"
                                                  data-bs-target="#flush-collapsefour" aria-expanded="false"
                                                  aria-controls="flush-collapsefour">
                                                  Do Adminmart offers a money back guarantee?
                                              </button>
                                          </h2>
                                          <div id="flush-collapsefour" class="accordion-collapse collapse"
                                              aria-labelledby="flush-headingfour"
                                              data-bs-parent="#accordionFlushExample">
                                              <div class="accordion-body fw-normal">
                                                  There is no money
                                              </div>
                                          </div>
                                      </div> --}}
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/xml/xml.min.js"></script>
<script src="../assets/libs/summernote/dist/summernote-lite.min.js"></script>
<script src="../assets/js/forms/summernote-init.js"></script>
v
<script src="../assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
<script src="../assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="../assets/js/forms/repeater-init.js"></script>
