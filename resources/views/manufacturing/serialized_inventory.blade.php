<x-app-layout>
    <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Seralized Inventory</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="../services">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Seralized Inventory</li>
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
                                        <h5 class="mb-2">Seralized Inventory</h5>
                                        <p class="card-subtitle">
                                            Summary of individual products
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
                                                placeholder="" value="Laptop" />
                                            <small id="name" class="form-text text-muted">Product Id</small>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Delivered</option>
                                                <option value="1">In warehouse</option>
                                                <option value="2">Damanged</option>

                                            </select>
                                            <small id="name" class="form-text text-muted">Sort by</small>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <input type="date" class="form-control" value="2023-11-25">
                                            <small id="name" class="form-text text-muted">Product Code</small>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <input type="date" class="form-control" value="2023-11-25">
                                            <small id="name" class="form-text text-muted">Batch Id</small>
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
                                                <th>Product Id</th>
                                                <th>Product Name</th>
                                                <th>Status</th>
                                                <th>Batch Id</th>
                                                <th>Manufacture Date</th>
                                                <th>View Invoice</th>

                                            </tr>
                                            <!-- end row -->
                                        </thead>
                                        <tbody>
                                            <!-- start row -->
                                            <tr>
                                                <td>1</td>
                                                <td>P123</td>
                                                <td>Laptop</td>
                                                <td> <span
                                                        class="mb-1 badge font-medium bg-success-subtle text-success">Delivered</span>
                                                </td>
                                                <td>B123</td>
                                                <td>24th Jan., 2024</td>
                                                <td>
                                                    <a href="/invoice" class="btn btn-sm btn-info" title="View"><i
                                                            class="fa fa-eye"></i></a>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>P124</td>
                                                <td>Laptop</td>
                                                <td> <span class="mb-1 badge font-medium bg-success-subtle text-info">In
                                                        warehouse</span></td>
                                                <td>B123</td>
                                                <td>24th Jan., 2024</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-info" title="View"><i
                                                            class="fa fa-eye-slash"></i></a>

                                                </td>
                                            </tr>
                                            <!-- end row -->
                                            <!-- start row -->

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
