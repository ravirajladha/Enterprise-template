<x-app-layout>

  <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/blackboard.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/monokai.min.css" />
  <link rel="stylesheet" href="../assets/libs/summernote/dist/summernote-lite.min.css">


  <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

  <div class="body-wrapper">
      <div class="container-fluid">
          <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
              <div class="card-body px-4 py-3">
                  <div class="row align-items-center">
                      <div class="col-9">
                          <h4 class="fw-semibold mb-8">Bill of Material</h4>
                          <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item">
                                      <a class="text-muted text-decoration-none" href="/services">Home</a>
                                  </li>
                                  <li class="breadcrumb-item" aria-current="page">Bill of Material -> Id: 2024/02/5215858</li>
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
{{--                 
                  @include('modules.side_layout_form') --}}

                  <div class="card-body p-4 pb-0">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                          <a class="btn btn-primary d-lg-none d-flex" data-bs-toggle="offcanvas"
                              href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                              <i class="ti ti-menu-2 fs-6"></i>
                          </a>
                          {{-- <h5 class="fs-5 fw-semibold mb-0 d-none d-lg-block">Connections</h5> --}}

                          <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                              {{-- <button type="button" data-bs-toggle="modal" data-bs-target="#samedata-modal1" data-bs-whatever="@mdo" class=" btn  btn-rounded btn-primary  align-items-center">
                                  <i class="ti ti-send fs-4 me-2"></i>
                                  Send
                              </button> --}}
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


                
                    
                   
                      <div class="card w-100 position-relative overflow-hidden mb-0">
                        <div class="card-body p-4">
                          <h5 class="card-title fw-semibold">Item and Details</h5>
                          <p class="card-subtitle mb-4">Enter the details of the product</p>
                          <form>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="mb-4">
                                  <label for="exampleInputtext" class="form-label fw-semibold">Product Name</label>
                                  <input type="text" class="form-control" id="exampleInputtext"
                                    placeholder="Enter Product Name" value="Led Monitor">
                                </div>
  
                                <div class="mb-4">
                                  <label for="exampleInputtext" class="form-label fw-semibold">Quantity</label>
                                  <input type="text" class="form-control" id="exampleInputtext" value="10"
                                    placeholder="Enter Quantity" value> 
                                </div>
  
                                <div class="mb-4">
                                  <label for="exampleInputtext1" class="form-label fw-semibold">Operation Date</label>
                                  <input type="date" class="form-control" id="exampleInputtext1" 
                                   >
                                </div>
                                <div class="mb-4">
                                  <label for="exampleInputtext1" class="form-label fw-semibold">Description</label>
                                  <textarea type="text" class="form-control" id="exampleInputtext1" 
                                   ></textarea>
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
                                  <label for="exampleInputtext4" class="form-label fw-semibold">Product Sample</label>
                                  <input type="file" class="form-control" id="">
                                </div>
                                
  
                              </div>
  
  
                         
                           
                            </div>
                          </form>
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
                              <h5 class="mb-0">Operations</h5>
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
  
                            <div  class="position-relative">
                              <button type="button" data-bs-toggle="modal" data-bs-target="#samedata-modal1" data-bs-whatever="@mdo" class=" btn  btn-rounded btn-primary  align-items-center">
                                <i class="ti ti-plus fs-4 me-2"></i>
                                Add Operation
                            </button>
                            </div >
                        </div>



                     



                      <div class="table-responsive">
                        <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                          <thead>
                            <!-- start row -->
                            <tr>
                              <th>No</th>
                              <th>Operation</th>
                              <th>Workstation</th>
                              <th>Operation Time</th>
                              <th>Fixed Timing</th>
                              <th>Operation Cost</th>
                              <th>Action</th>
                            </tr>
                            <!-- end row -->
                          </thead>
                          <tbody>
                            <!-- start row -->
                            <tr>
                              <td>1</td>
                              <td>Cutting</td>
                              <td>Fabric Cutting Station</td>
                              <td>10</td>
                              <td>   <input
                              class="form-check-input"
                              type="checkbox"
                              id="inlineCheckbox3"
                              value="option3" checked
                              
                            /></td>
                              <td>Rs 295</td>
                              <td>
                                  <a href="#" class="btn btn-sm btn-info" title="View"><i class="fa fa-eye"></i></a>
                                  <a href="#" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                            <tr>
                              <td>2</td>
                              <td>Labelling</td>
                              <td>Labelling Station</td>
                              <td>20</td>
                              <td>    <input
                              class="form-check-input"
                              type="checkbox"
                              id="inlineCheckbox3"
                              value="option3" checked
                              
                            /></td>
                              <td>Rs 32</td>
                              <td>
                                  <a href="#" class="btn btn-sm btn-info" title="View"><i class="fa fa-eye"></i></a>
                                  <a href="#" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                            <tr>
                              <td>3</td>
                              <td>Packing</td>
                              <td>Packing Station</td>
                              <td>15</td>
                             <td> <input
                              class="form-check-input"
                              type="checkbox"
                              id="inlineCheckbox3"
                              value="option3" checked
                              
                            /></td>
                              <td>Rs 49</td>
                              <td>
                                  <a href="#" class="btn btn-sm btn-info" title="View"><i class="fa fa-eye"></i></a>
                                  <a href="#" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                            <!-- end row -->
                            <!-- start row -->
                            
                            <!-- end row -->
                          
                          </tbody>
                          <tfoot>
                            <!-- start row -->
                            <tr>
                              <th>No</th>
                              <th>Operation</th>
                              <th>Workstation</th>
                              <th>Operation Time</th>
                              <th>Fixed Timing</th>
                              <th>Operation Cost</th>
                              <th>Action</th>
                            </tr>
                            <!-- end row -->
                          </tfoot>
                        </table>
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
                              <h5 class="mb-0">Materials</h5>
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
  
                            <div  class="position-relative">
                              <button type="button" data-bs-toggle="modal" data-bs-target="#samedata-modal1" data-bs-whatever="@mdo" class=" btn  btn-rounded btn-primary  align-items-center">
                                <i class="ti ti-plus fs-4 me-2"></i>
                                Add Operation
                            </button>
                            </div >
                        </div>



                     



                      <div class="table-responsive">
                        <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                          <thead>
                            <!-- start row -->
                            <tr>
                              <th>No</th>
                              <th>Item Code</th>
                              <th>Quantity</th>
                              <th>Unit of Measure</th>
                              <th>Rate (INR)</th>
                              <th>Amount (INR)</th>
                          
                              <th>Action</th>
                            </tr>
                            <!-- end row -->
                          </thead>
                          <tbody>
                            <!-- start row -->
                            <tr>
                              <td>Glass</td>
                              <td>5</td>
                              <td>Nos</td>
                              <td>5</td>
                              <td>Rs 25</td>
                              <td>
                                  <a href="#" class="btn btn-sm btn-info" title="View"><i class="fa fa-eye"></i></a>
                                  <a href="#" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>
                              </td>
                          </tr>
                          <tr>
                            <td>Plastic</td>
                            <td>7</td>
                            <td>Nos</td>
                            <td>5</td>
                            <td>Rs 25</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info" title="View"><i class="fa fa-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                            <!-- end row -->
                            <!-- start row -->
                            
                            <!-- end row -->
                          
                          </tbody>
                          <tfoot>
                            <!-- start row -->
                            <tr>
                              <th>No</th>
                              <th>Item Code</th>
                              <th>Quantity</th>
                              <th>Unit of Measure</th>
                              <th>Rate (INR)</th>
                              <th>Amount (INR)</th>
                          
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
                  <label for="recipient-name" class="control-label">Operation Name</label>
                  <input type="text" class="form-control" id="recipient-name1" />
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="control-label">Workstation</label>
                  <input type="text" class="form-control" id="recipient-name1" />
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="control-label">Operation Time</label>
                  <input type="text" class="form-control" id="recipient-name1" />
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="control-label">Fixed Timing</label> &nbsp;
                  <input
                  class="form-check-input"
                  type="checkbox"
                  id="inlineCheckbox3"
                  value="option3"
                  
                />
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="control-label">Operation Cost (INR)</label>
                  <input type="number" class="form-control" id="recipient-name1" />
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
      <div class="modal fade" id="samedata-modal2" tabindex="-1" aria-labelledby="exampleModalLabel1">
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
                  <label for="recipient-name" class="control-label">Operation Name</label>
                  <input type="text" class="form-control" id="recipient-name1" />
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="control-label">Workstation</label>
                  <input type="text" class="form-control" id="recipient-name1" />
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="control-label">Operation Time</label>
                  <input type="text" class="form-control" id="recipient-name1" />
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="control-label">Fixed Timing</label> &nbsp;
                  <input
                  class="form-check-input"
                  type="checkbox"
                  id="inlineCheckbox3"
                  value="option3"
                  
                />
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="control-label">Operation Cost (INR)</label>
                  <input type="number" class="form-control" id="recipient-name1" />
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



</x-app-layout>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/xml/xml.min.js"></script>
<script src="../assets/libs/summernote/dist/summernote-lite.min.js"></script>
<script src="../assets/js/forms/summernote-init.js"></script>
v
<script src="../assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
<script src="../assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="../assets/js/forms/repeater-init.js"></script>



<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/datatable/datatable-advanced.init.js"></script>



<script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/datatable/datatable-basic.init.js"></script>
