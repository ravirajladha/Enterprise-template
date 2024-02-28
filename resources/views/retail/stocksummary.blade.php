<x-app-layout>
    <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Datatable Basic</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="../main/index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Datatable Basic</li>
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

            
            <div class="datatables">
                <!-- language options -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center mb-3">
                                    <div class="col">
                                        <h5 class="mb-2">Stock Details</h5>
                                        <p class="card-subtitle">
                                            Stock Summary of the products
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn bg-info-subtle text-info font-weight-medium ">
                                            <i class="ti ti-printer"></i>&nbsp;Print
                                        </button>
                                        <button type="submit" class="btn bg-info-subtle text-info font-weight-medium">
                                            <i class="ti ti-square-check"></i>&nbsp;Submit
                                        </button>
                                    </div>
                                </div>
                            <form class="mt-2">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <input type="text" class="form-control" id="exampleInputname1"
                                            placeholder="" value="Air Fryer"/>
                                            <small id="name" class="form-text text-muted">Product Name</small>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="date" class="form-control" value="2023-01-07">
                                        <small id="name" class="form-text text-muted">Start Date</small>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="date" class="form-control" value="2023-11-25">
                                        <small id="name" class="form-text text-muted">End Date</small>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option selected>Daily</option>
                                            <option value="1">Daily</option>
                                            <option value="2">Weekly</option>
                                            <option value="3">Monthly</option>
                                            <option value="3">Yearly</option>
                                        </select>
                                        <small id="name" class="form-text text-muted">Sort by</small>
                                    </div>
                                    
                                </div>
                            </form>
                        <!-- ---------------------
                                        start Language Options
                                    ---------------- -->
                        
                            
                                <div class="table-responsive">
                                    <table id="lang_opt"
                                        class="table border table-striped table-bordered display text-nowrap"
                                        style="width: 100%">
                                        <thead>
                                            <!-- start row -->
                                            <tr>
                                                <th>Sl. No</th>
                                                <th>Category</th>
                                                <th>Sub-Category</th>
                                                <th>Product</th>
                                                <th>Product Name</th>
                                                <th>Stocks</th>
                                                <th>Action</th>
                                                <th>Price</th>
                                            </tr>
                                            <!-- end row -->
                                        </thead>
                                        <tbody>
                                            <!-- start row -->
                                            <tr>
                                                <td>1</td>
                                                <td>Electronics</td>
                                                <td>Laptop & Computers</td>
                                                <td>Laptop</td>
                                                <td>Alienware Area51m</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar text-bg-danger" role="progressbar" style="width: 35%" aria-valuenow="15"
                                                          aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar text-bg-cyan" role="progressbar" style="width: 65%" aria-valuenow="30"
                                                          aria-valuemin="0" aria-valuemax="100"></div>
                                                      </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Qty" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        <button class="btn bg-secondary-subtle text-secondary font-medium" type="button">Add</button>
                                                    </div>
                                                </td>
                                                <td>Rs. 320,800</td>
                                            </tr>
                                            <!-- end row -->
                                            <!-- start row -->
                                            <tr>
                                                <td>2</td>
                                                <td>Clothing</td>
                                                <td>Torso</td>
                                                <td>Shirt</td>
                                                <td>Calvin Klein Drip</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar text-bg-danger" role="progressbar" style="width: 67%" aria-valuenow="15"
                                                          aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar text-bg-cyan" role="progressbar" style="width: 33%" aria-valuenow="30"
                                                          aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Qty" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                        <button class="btn bg-secondary-subtle text-secondary font-medium" type="button">Add</button>
                                                    </div>
                                                </td>
                                                <td>Rs. 12,800</td>
                                            </tr>
                                            <!-- end row -->


                                        </tbody>
                                        {{-- <tfoot>
                                            <!-- start row -->
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                            <!-- end row -->
                                        </tfoot> --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ---------------------
                                        end Language Options
                                    ---------------- -->
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
<script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/datatable/datatable-basic.init.js"></script>
