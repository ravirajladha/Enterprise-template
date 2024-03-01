<x-app-layout>


    <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Transaction</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="../main/index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Distrubitional Transaction</li>
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
                                        <h5 class="mb-2">Transaction Details</h5>
                                        <p class="card-subtitle">
                                            Transaction Summary
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
                                        <div class="col-md-4 mb-3">
                                            <label for="productCode" class="form-label fw-semibold">Product Code</label>
                                            <input type="text" class="form-control" id="productCode"
                                                placeholder="Product Code" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="productName" class="form-label fw-semibold">Product Name</label>
                                            <input type="text" class="form-control" id="productName"
                                                placeholder="Product Name" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="quantity" class="form-label fw-semibold">Quantity</label>
                                            <input type="number" class="form-control" id="quantity"
                                                placeholder="Quantity" required>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="bookingDate" class="form-label fw-semibold">Booking
                                                    Date</label>
                                                <input type="date" class="form-control" id="bookingDate" required>

                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="bookingDate" class="form-label fw-semibold">Delivery
                                                    Date</label>
                                                <input type="date" class="form-control" id="bookingDate" required>

                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="bookingDate" class="form-label fw-semibold">Transaction
                                                    Date</label>
                                                <input type="date" class="form-control" id="bookingDate" required>

                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <label for="bookingDate" class="form-label fw-semibold">Payment
                                                    Method</label>
                                                <select class="form-select" id="paymentMethod" required>
                                                    <option selected>Select Payment Method</option>
                                                    <option value="cash">Cash</option>
                                                    <option value="credit">Credit</option>
                                                    <option value="online">Online</option>
                                                </select>

                                            </div>


                                            <div class="col-md-4 mb-3">
                                                <label for="productCode" class="form-label fw-semibold">Paid
                                                    Amount</label>
                                                <input type="text" class="form-control" id="productCode"
                                                    placeholder="Product Code" required>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <label for="productCode"
                                                    class="form-label fw-semibold">Outstanding</label>
                                                <input type="text" class="form-control" id="productCode"
                                                    placeholder="Product Code" required>
                                            </div>

                                            <div class="col-12 d-flex-row">
                                                <div class="d-flex align-items-center justify-content-end gap-3 ml-auto">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                    <button class="btn btn-secondary" type="reset">Reset</button>
                                                </div>
                                            </div>
                                        </div>





                                </form>

                                <!-- ---------------------
                                            start Language Options
                                        ---------------- -->


                                <div class="table-responsive">
                                    <table id="scroll_ver_hor"
                                        class="table border table-striped table-bordered display nowrap"
                                        style="width: 100%">
                                        <thead>
                                            <!-- start row -->
                                            <tr>
                                                <th>Sl. No</th>
                                                <th>Product Code</th>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Booking Date</th>
                                                <th>Delivery Date</th>
                                                <th>Transaction Date</th>
                                                <th>Payment Method</th>
                                                <th>Paid Amount</th>
                                                <th>Outstanding</th>
                                                <th>Credit</th>
                                                <th>Debit</th>
                                            </tr>
                                            <!-- end row -->
                                        </thead>
                                        <tbody>
                                            <!-- start row -->
                                            <tr>
                                                <td>1</td>
                                                <td>#7567</td>
                                                <td>Dell Inspiron 7567</td>
                                                <td>115</td>
                                                <td>20-02-2024</td>
                                                <td>23-02-2024</td>
                                                <td>20-02-2024</td>
                                                <td>Cheque</td>
                                                <td>Rs. 21,254,302</td>
                                                <td>Rs. 0.00</td>
                                                <td><span style="color: green">Rs. 0.00</span></td>
                                                <td><span style="color: red">Rs. 21,254,302</span></td>

                                            </tr>
                                            <!-- end row -->
                                            <!-- start row -->
                                            <tr>
                                                <td>1</td>
                                                <td>#0567</td>
                                                <td>Dell Inspiron 7567</td>
                                                <td>115</td>
                                                <td>20-02-2024</td>
                                                <td>23-02-2024</td>
                                                <td>20-02-2024</td>
                                                <td>Cheque</td>
                                                <td>Rs. 21,254,302</td>
                                                <td>Rs. 0.00</td>
                                                <td><span style="color: green">Rs. 0.00</span></td>
                                                <td><span style="color: red">Rs. 21,254,302</span></td>

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
