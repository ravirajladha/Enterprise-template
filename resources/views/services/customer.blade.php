<x-app-layout>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/blackboard.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/monokai.min.css" />
    <link rel="stylesheet" href="../assets/libs/summernote/dist/summernote-lite.min.css">
  <link rel="stylesheet" href="../assets/libs/dropzone/dist/min/dropzone.min.css">

    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Customer Detail</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="/services">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Customer Detail</li>
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
                                                    Basic Form Detail
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
                                                                        class="form-label fw-semibold">Salutation</label>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example">
                                                                        <option selected>Mr</option>
                                                                        <option value="1">Mrs.</option>

                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-4">
                                                                    <label for="exampleInputtext"
                                                                        class="form-label fw-semibold">Customer Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="exampleInputtext"
                                                                        placeholder="Radhika Kumari"
                                                                        value="Radhika Kumari">
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
                                                                        class="form-label fw-semibold">Default Company Bank Account
                                                                        Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="exampleInputtext1"
                                                                        placeholder="Bank account number"
                                                                        value="BOI12452558">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-4">
                                                                    <label for="exampleInputtext1"
                                                                        class="form-label fw-semibold">Tax Id
                                                                        </label>
                                                                    <input type="text" class="form-control"
                                                                        id="exampleInputtext1"
                                                                        placeholder=""
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-4">
                                                                    <label for="exampleInputtext1"
                                                                        class="form-label fw-semibold">Tax 
                                                                        Category</label>
                                                                    <input type="text" class="form-control"
                                                                        id="exampleInputtext1"
                                                                        placeholder=""
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-4">
                                                                    <label for="exampleInputtext1"
                                                                        class="form-label fw-semibold">Tax 
                                                                        Withholding Category</label>
                                                                    <input type="text" class="form-control"
                                                                        id="exampleInputtext1"
                                                                        placeholder=""
                                                                        value="">
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
                                                    Company Details
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse "
                                                aria-labelledby="flush-headingTwo"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body fw-normal">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            {{-- <div class="border-bottom title-part-padding">
                                                                <h4 class="card-title mb-0">Description</h4>
                                                            </div> --}}
                                                            <div class="card-body">
                                                                <div class="summernote">
                                                                    <h4>...
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mb-3">
                                                            <div
                                                                class="card w-100 position-relative overflow-hidden mb-0">
                                                                <div class="card-body p-4">
                                                                    <h5 class="card-title fw-semibold">PAN Card Details</h5>

                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-4">
                                                                                    <label for="exampleInputtext"
                                                                                        class="form-label fw-semibold">Upload File
                                                                            </label>
                                                                                    <input type="file"
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
                                                                      <h4 class="card-title mb-0">Dropzone</h4>
                                                                    </div>
                                                                    <div class="card-body">
                                                                      <h6 class="card-subtitle mb-3">
                                                                        For multiple file upload put class <code>.dropzone</code> to
                                                                        form.
                                                                      </h6>
                                                                      <form action="#" class="dropzone">
                                                                        <div class="fallback">
                                                                          <input name="file" type="file" multiple />
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


<script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>  
