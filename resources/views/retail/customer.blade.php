<x-app-layout>



    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Customers</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="/services">Retail</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Customers</li>
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

            <div class="widget-content searchable-container list">

                <!-- Modal -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">





                        </div>
                    </div>



                    <div class="card card-body">
                        <div class="border-bottom title-part-padding">

                            <div class="row d-flex justify-content-between">
                                <div class="col-11">
                                    <h4 class="card-title mb-0">Customer Data</h4>
                                </div>
                                <div class="col-1">
                                    <button type="button"
                                        class="d-inline-flex align-items-center justify-content-center btn btn-info btn-circle btn-lg">
                                        <i class="fs-5 ti ti-printer"></i>
                                    </button>
                                </div>
                            </div>


                        </div>
                        <div class="table-responsive">
                            <table class="table search-table align-middle text-nowrap">
                                <thead class="header-item">
                                    <th>
                                        <div class="n-chk align-self-center text-center">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input primary"
                                                    id="contact-check-all" />
                                                <label class="form-check-label" for="contact-check-all"></label>
                                                <span class="new-control-indicator"></span>
                                            </div>
                                        </div>
                                    </th>
                                    <th>Customers Name</th>

                                    <th>Customer Email</th>
                                    <th>Customer Contact Number</th>
                                    <th>Last Order Date</th>
                                    <th>Details</th>
                                </thead>
                                <tbody>
                                    <!-- start row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="form-check">
                                                    <input type="checkbox"
                                                        class="form-check-input contact-chkbox primary"
                                                        id="checkbox1" />
                                                    <label class="form-check-label" for="checkbox1"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/profile/user-1.jpg" alt="avatar"
                                                    class="rounded-circle" width="35" />
                                                <div class="ms-3">
                                                    <div class="user-meta-info">
                                                        <h6 class="user-name mb-0" data-name="Emma Adams">Sultan Khan
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <span class="usr-location"
                                                data-location="Boston, USA">sultankhan@gmail.com</span>
                                        </td>

                                        <td>
                                            <span class="usr-location" data-location="Boston, USA">+919856247514</span>
                                        </td>

                                        <td>
                                            <span class="usr-location" data-location="Boston, USA"> 13:45:22 on 28 Feb
                                                2024</span>
                                        </td>

                                        <td>
                                            <a href="/customerdetails">
                                                <button type="button"
                                                class="justify-content-center w-100 btn mb-1 bg-primary-subtle text-primary font-medium d-flex align-items-center">
                                                <i class="ti ti-eye fs-4 me-2"></i>
                                                View
                                            </button>
                                        </td>


                                    </tr>
                                    <!-- end row -->
                                    <!-- start row -->
                                    <tr class="search-items">
                                        <td>
                                            <div class="n-chk align-self-center text-center">
                                                <div class="form-check">
                                                    <input type="checkbox"
                                                        class="form-check-input contact-chkbox primary"
                                                        id="checkbox2" />
                                                    <label class="form-check-label" for="checkbox2"></label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/profile/user-2.jpg" alt="avatar"
                                                    class="rounded-circle" width="35" />
                                                <div class="ms-3">
                                                    <div class="user-meta-info">
                                                        <h6 class="user-name mb-0" data-name="Olivia Allen">John Kumar
                                                            Choubey</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <span class="usr-location"
                                                data-location="Boston, USA">johnchoub@hotmail.com</span>
                                        </td>

                                        <td>
                                            <span class="usr-location" data-location="Boston, USA">+916587458963</span>
                                        </td>

                                        <td>
                                            <span class="usr-location" data-location="Boston, USA"> 15:36:47 on 27 Feb
                                                2024</span>
                                        </td>

                                        <td>
                                            <a href="/customerdetails">
                                                <button type="button"
                                                class="justify-content-center w-100 btn mb-1 bg-primary-subtle text-primary font-medium d-flex align-items-center">
                                                <i class="ti ti-eye fs-4 me-2"></i>
                                                View
                                            </button>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
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
                        Add Campaign
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body">
                    <div class="col-12">

                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" type="text"
                                            placeholder="Text Here..."></input>
                                        <small id="textHelp" class="form-text text-muted">Campaign Name</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" type="file"></input>
                                        <small id="textHelp" class="form-text text-muted">Campaign Image</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Vendor1</option>
                                            <option value="1">Vendor2</option>

                                        </select>
                                        <small id="textHelp" class="form-text text-muted">Vendor Type</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" type="date"></input>
                                        <small id="textHelp" class="form-text text-muted">Expiry Date</small>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" width="100" placeholder="Text Here..."></textarea>
                                        <small id="textHelp" class="form-text text-muted">Description</small>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
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
    <!-- /.modal -->


</x-app-layout>
