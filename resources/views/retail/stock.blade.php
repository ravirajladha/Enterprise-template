<x-app-layout>
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Product Details</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="../main/index.html">Retail</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Product Details/#7567/TOLPBKWL0210</li>
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


            <div class="form-with-tabs">
                <h5 class="card-title fw-semibold mb-4">Product Details Table</h5>
                <div class="card">
                    <ul class="nav nav-pills user-profile-tab border-bottom" id="pills-tab" role="tablist">

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-personal-info-tab" data-bs-toggle="pill" data-bs-target="#pills-personal-info"
                                type="button" role="tab" aria-controls="pills-personal-info" aria-selected="true">
                                Details
                            </button>
                        </li>


                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-account-details-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-account-details" type="button" role="tab"
                                aria-controls="pills-account-details" aria-selected="false">
                                Dashboard
                            </button>
                        </li>


                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-social-links-tab" data-bs-toggle="pill" data-bs-target="#pills-social-links"
                                type="button" role="tab" aria-controls="pills-social-links" aria-selected="false">
                                Inventory
                            </button>
                        </li>


                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-accounting-tab" data-bs-toggle="pill" data-bs-target="#pills-accounting"
                                type="button" role="tab" aria-controls="pills-accounting" aria-selected="false">
                                Accounting
                            </button>
                        </li>


                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-purchasing-tab" data-bs-toggle="pill" data-bs-target="#pills-purchasing"
                                type="button" role="tab" aria-controls="pills-purchasing" aria-selected="false">
                                Purchasing
                            </button>
                        </li>


                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-sales-tab" data-bs-toggle="pill" data-bs-target="#pills-sales" type="button"
                                role="tab" aria-controls="pills-sales" aria-selected="false">
                                Sales
                            </button>
                        </li>


                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-tax-tab" data-bs-toggle="pill" data-bs-target="#pills-tax" type="button"
                                role="tab" aria-controls="pills-tax" aria-selected="false">
                                Tax
                            </button>
                        </li>


                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-quality-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-quality" type="button" role="tab"
                                aria-controls="pills-quality" aria-selected="false">
                                Quality
                            </button>
                        </li>


                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-6 fw-bold"
                                id="pills-manufacturing-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-manufacturing" type="button" role="tab"
                                aria-controls="pills-manufacturing" aria-selected="false">
                                Manufacturing
                            </button>
                        </li>


                    </ul>


                    <div class="card-body p-4">
                        <div class="tab-content" id="pills-tabContent">


                            <div class="tab-pane fade show active" id="pills-personal-info" role="tabpanel"
                                aria-labelledby="pills-personal-info-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Item
                                                Code</label>
                                            <input type="text" class="form-control" id="exampleInputtext"
                                                placeholder="Enter item code">
                                        </div>

                                        <div class="mb-4">
                                            <label for="exampleInputPassword1"
                                                class="form-label fw-semibold">Barcode</label>
                                            <input type="text" class="form-control" id="exampleInputtext"
                                                placeholder="Enter barcode">
                                        </div>



                                        <div class="mb-4">
                                            <label for="exampleInputPassword1"
                                                class="form-label fw-semibold">Category</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Select category</option>
                                                <option value="1">Electronics</option>
                                                <option value="2">Home Appliances</option>
                                                <option value="2">Foods</option>
                                                <option value="2">Accessories</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Sub
                                                Category</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Select sub-category</option>
                                                <option value="1">Laptops</option>
                                                <option value="2">Mobiles</option>
                                                <option value="2">T-shirts</option>
                                                <option value="2">Jeans</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1"
                                                class="form-label fw-semibold">Brand</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Select brand</option>
                                                <option value="1">Dell</option>
                                                <option value="2">Apple</option>
                                                <option value="2">Samsung</option>
                                            </select>
                                        </div>

                                    </div>


                                    <div class="col-lg-6">


                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Item
                                                Description</label>
                                            <textarea class="form-control" rows="1" placeholder="Enter description"></textarea>
                                        </div>


                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Item
                                                Image</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>

                                        <div class="mb-4">
                                            <label for="exampleInputPassword1"
                                                class="form-label fw-semibold">Weight</label>
                                            <input type="number" class="form-control" value=""
                                                placeholder="Enter weight (in Kgs)">
                                        </div>

                                        <div class="mb-4">
                                            <label for="exampleInputPassword1"
                                                class="form-label fw-semibold">Dimension</label>
                                            <input type="text" class="form-control" id="exampleInputtext"
                                                placeholder="Enter dimension (in L×B×H)">
                                        </div>

                                    </div>
                                    <div class="col-12 d-flex-row">
                                        <div class="d-flex align-items-center justify-content-end gap-3 ml-auto">
                                            <button class="btn btn-primary">Submit</button>
                                            <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-account-details" role="tabpanel"
                                aria-labelledby="pills-account-details-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Current
                                                Stock</label>
                                            <input type="text" class="form-control" id="exampleInputtext"
                                                placeholder="Enter current stock">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Total
                                                Sold</label>
                                            <input type="text" class="form-control" id="exampleInputtext"
                                                placeholder="Enter total items sold">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Average
                                                Sales</label>
                                            <input type="text" class="form-control" id="exampleInputtext"
                                                placeholder="Enter average sales">
                                        </div>
                                    </div>

                                    {{-- <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Low
                                                Stock Alert</label>
                                            <input type="number" class="form-control" value=""
                                                placeholder="Enter low stock quantity">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Total
                                                Purchased</label>
                                            <input type="text" class="form-control" id="exampleInputtext"
                                                placeholder="Enter total stocks purchased">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Trend
                                                Graph</label>

                                            <!-- Start Dinut Pie Chart -->

                                            <div class="card">
                                                <div class="card-body">
                                                    <div id="chart-pie-donut"></div>
                                                </div>

                                            </div>
                                            <!-- End Dinut Pie Chart -->
                                        </div>
                                    </div> --}}

                                    <div class="col-12 d-flex-row">
                                        <div class="d-flex align-items-center justify-content-end gap-3 ml-auto">
                                            <button class="btn btn-primary">Submit</button>
                                            <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-social-links" role="tabpanel"
                                aria-labelledby="pills-social-links-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1"
                                                class="form-label fw-semibold">Warehouse Location</label>
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Choose location</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Stock on
                                                Hand</label>
                                            <input type="number" class="form-control" id="exampleInputtext"
                                                placeholder="Enter in-hand stock amount">

                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Safety
                                                Stock</label>
                                            <input type="number" class="form-control" id="exampleInputtext"
                                                placeholder="Enter safety stock amount">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1"
                                                class="form-label fw-semibold">Asile/Rack/Bin</label>
                                            <input type="text" class="form-control" id="exampleInputtext"
                                                placeholder="Enter position">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Reorder
                                                Level</label>
                                            <input type="number" class="form-control" id="exampleInputtext"
                                                placeholder="Enter level of reorder">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1"
                                                class="form-label fw-semibold">Inventory Valuation Method</label>
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Choose valuation method</option>
                                                <option value="1">LIFO</option>
                                                <option value="2">FIFO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex-row">
                                        <div class="d-flex align-items-center justify-content-end gap-3 ml-auto">
                                            <button class="btn btn-primary">Submit</button>
                                            <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-accounting" role="tabpanel"
                                aria-labelledby="pills-accounting-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Expense
                                                Account</label>
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Select expense account</option>
                                                <option value="1">Current</option>
                                                <option value="2">Savings</option>
                                                <option value="3">Hybird</option>
                                            </select>
                                        </div>

                                        <div class="mb-4">
                                            <label for="exampleInputPassword1"
                                                class="form-label fw-semibold">Inventory Account</label>
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Select inventory account</option>
                                                <option value="1">Current</option>
                                                <option value="2">Savings</option>
                                                <option value="3">Hybird</option>
                                            </select>
                                        </div>


                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Tax
                                                Code</label>
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Select tax code</option>
                                                <option value="1">101</option>
                                                <option value="2">201</option>
                                                <option value="3">404</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Income
                                                Account</label>
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Select income account</option>
                                                <option value="1">Current</option>
                                                <option value="2">Savings</option>
                                                <option value="3">Hybird</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">COGS
                                                Account</label>
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Select COGS account</option>
                                                <option value="1">Current</option>
                                                <option value="2">Savings</option>
                                                <option value="3">Hybird</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-12 d-flex-row">
                                        <div class="d-flex align-items-center justify-content-end gap-3 ml-auto">
                                            <button class="btn btn-primary">Submit</button>
                                            <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-purchasing" role="tabpanel"
                                aria-labelledby="pills-purchasing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Default
                                                Supplier</label>
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Choose default supplier</option>
                                                <option value="1">Apario Retail</option>
                                                <option value="2">Gaps</option>
                                                <option value="3">Hybird</option>
                                            </select>
                                        </div>

                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Purchase
                                                UOM</label>
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Select UOM</option>
                                                <option value="1">Default</option>
                                                <option value="2">UOM 1</option>
                                                <option value="3">UOM 2</option>
                                            </select>
                                        </div>


                                        <div class="mb-4">
                                            <label for="exampleInputPassword1"
                                                class="form-label fw-semibold">Currency</label>
                                            <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                <option selected>Select currency</option>
                                                <option value="1">₹ INR</option>
                                                <option value="2">$ Dollar</option>
                                                <option value="3">€ Euro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Lead
                                                Time</label>
                                            <input type="number" class="form-control" value=""
                                                placeholder="Enter lead time">
                                        </div>

                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Purchase
                                                Price</label>
                                            <input type="number" class="form-control" value=""
                                                placeholder="Enter purchase price">
                                        </div>


                                    </div>
                                    <div class="col-12 d-flex-row">
                                        <div class="d-flex align-items-center justify-content-end gap-3 ml-auto">
                                            <button class="btn btn-primary">Submit</button>
                                            <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-sales" role="tabpanel"
                                aria-labelledby="pills-sales-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Sales
                                                UOM</label>
                                            <select class="form-select mr-sm-2" id="salesUOM">
                                                <option selected>Select sales UOM</option>
                                                <option value="1">Default</option>
                                                <option value="2">UOM 1</option>
                                                <option value="3">UOM 2</option>
                                            </select>
                                        </div>


                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Customer
                                                Tax Code</label>
                                            <select class="form-select mr-sm-2" id="customerTaxCode">
                                                <option selected>Select customer tax code</option>
                                                <option value="1">Tax Code 1</option>
                                                <option value="2">Tax Code 2</option>
                                                <option value="3">Tax Code 3</option>
                                            </select>
                                        </div>


                                    </div>

                                    <div class="col-lg-6">
                                        <!-- Other existing fields remain unchanged -->

                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Sales
                                                Price</label>
                                            <input type="number" class="form-control" id="salesPrice"
                                                placeholder="Enter sales price">
                                        </div>

                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Discount
                                                Policy</label>
                                            <select class="form-select mr-sm-2" id="discountPolicy">
                                                <option selected>Select discount policy</option>
                                                <option value="none">None</option>
                                                <option value="fixed">Fixed</option>
                                                <option value="percentage">Percentage</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-12 d-flex-row">
                                        <div class="d-flex align-items-center justify-content-end gap-3 ml-auto">
                                            <button class="btn btn-primary">Submit</button>
                                            <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-tax" role="tabpanel"
                                aria-labelledby="pills-tax-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Tax
                                                Category</label>
                                            <select class="form-select mr-sm-2" id="taxCategory">
                                                <option selected>Select tax category</option>
                                                <option value="1">Category 1</option>
                                                <option value="2">Category 2</option>
                                                <option value="3">Category 3</option>
                                            </select>
                                        </div>

                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">HSN/SAC Code</label>
                                            <input type="text" class="form-control" id="salesPrice"
                                                placeholder="Enter tax rate">
                                        </div>
                                       
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Tax Rate</label>
                                            <input type="number" class="form-control" id="salesPrice"
                                                placeholder="Enter tax rate">
                                        </div>

                                        
                                    </div>

                                    <div class="col-12 d-flex-row">
                                        <div class="d-flex align-items-center justify-content-end gap-3 ml-auto">
                                            <button class="btn btn-primary">Submit</button>
                                            <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-manufacturing" role="tabpanel" aria-labelledby="pills-manufacturing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Production Item</label>
                                           

                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="productionItem">
                                                    Check if production started
                                                </label>
                                              </div>
                                        </div>
                            
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Bill of Materials</label>
                                            <select class="form-select mr-sm-2" id="billOfMaterials">
                                                <option selected>Select bill of materials</option>
                                                <option value="1">BOM 1</option>
                                                <option value="2">BOM 2</option>
                                                <option value="3">BOM 3</option>
                                            </select>
                                        </div>
                            
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Operations</label>
                                            <textarea class="form-control" id="operations" rows="3" placeholder="Enter manufacturing operations"></textarea>
                                        </div>
                                    </div>
                            
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Manufacturing Lead Time</label>
                                            <input type="number" class="form-control" id="manufacturingLeadTime" placeholder="Enter manufacturing lead time">
                                        </div>
                            
                                        <div class="mb-4">
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Batch Number</label>
                                                <input type="text" class="form-control" id="batchNumber" placeholder="Enter batch number">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Manufacture Date</label>
                                                <input type="date" class="form-control" id="manufactureDate">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Expiration Date</label>
                                                <input type="date" class="form-control" id="expirationDate">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label">Lot Size</label>
                                                <input type="number" class="form-control" id="lotSize" placeholder="Enter lot size">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="col-12 d-flex-row">
                                        <div class="d-flex align-items-center justify-content-end gap-3 ml-auto">
                                            <button class="btn btn-primary">Submit</button>
                                            <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Manufacturing Tab Code... -->
                            
                            <div class="tab-pane fade" id="pills-quality" role="tabpanel" aria-labelledby="pills-quality-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Quality Inspection Required</label>
                                            
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="qualityInspectionRequired">
                                                    Check if quality inspection is required
                                                </label>                                              </div>

                                        </div>
                            
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Quality Parameters</label>
                                            <textarea class="form-control" id="qualityParameters" rows="3" placeholder="Enter quality parameters"></textarea>
                                        </div>
                                    </div>
                            
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <label for="exampleInputPassword1" class="form-label fw-semibold">Inspection Template</label>
                                            <select class="form-select mr-sm-2" id="inspectionTemplate">
                                                <option selected>Select inspection template</option>
                                                <option value="1">Template 1</option>
                                                <option value="2">Template 2</option>
                                                <option value="3">Template 3</option>
                                            </select>
                                        </div>
                                    </div>
                            
                                    <div class="col-12 d-flex-row">
                                        <div class="d-flex align-items-center justify-content-end gap-3 ml-auto"> 
                                            <button class="btn btn-primary">Submit</button>
                                            <button class="btn bg-danger-subtle text-danger">Cancel</button>
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

<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../assets/js/apex-chart/apex.pie.init.js"></script>
