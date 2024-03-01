<x-app-layout>



    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Retail Campaign</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="/services">Retail</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Campaign</li>
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
                            <div class="border-bottom title-part-padding">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-title mb-0">Add Campaign</h4>
                                    </div>
                                    <div class="col-6">
                                        <div class="row justify-content-end">
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-primary"> <i
                                                        class="ti ti-device-floppy fs-5"></i> Save Draft</button>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-success"><i
                                                        class="ti ti-check fs-5"></i> Submit</button>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-danger"><i
                                                        class="ti ti-trash fs-5"></i>Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="card-body">
                                <form>
                                    <div class="row">

                                        <div class="col-6 p-2">
                                            <div class="form-group">

                                                <label for="campaignname" placeholder="Enter campaign name">Campaign
                                                    Name</label>
                                                <input class="form-control" type="text"
                                                    placeholder="Enter campaign name"></input>

                                            </div>
                                        </div>


                                        <div class="col-6 p-2">
                                            <div class="form-group">
                                                <label for="campaignimg" placeholder="">Campaign Image</label>
                                                <input class="form-control" type="file"></input>

                                            </div>
                                        </div>


                                        <div class="col-6 p-2">
                                            <div class="form-group">
                                                <label for="campaigndate" placeholder="">Campaign Start Date</label>
                                                <input class="form-control" type="date"></input>

                                            </div>
                                        </div>

                                        <div class="col-6 p-2">
                                            <div class="form-group">
                                                <label for="campaigndate" placeholder="">Campaign End Date</label>
                                                <input class="form-control" type="date"></input>

                                            </div>
                                        </div>


                                        <div class="col-6 p-2">
                                            <div class="form-group">
                                                <label for="campaigndesc" placeholder="Enter campaign name">Campaign
                                                    Description</label>
                                                <textarea class="form-control" rows="2" width="100" placeholder="Enter campaign description"></textarea>

                                            </div>
                                        </div>


                                        <div class="col-6 p-2 py-4">
                                            <div class="form-group">
                                                <label for="campaignstatus">Status:</label>
                                                <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected>Active</option>
                                                    <option value="1">Expired</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>



                    <div class="card card-body">
                        <div class="border-bottom title-part-padding">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title mb-0">Campaign Table</h4>
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
                                    <th>Campaign Name</th>

                                    <th>Start Date</th>
                                    <th>End Date</th>


                                    <th>Discount</th>
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
                                                        <h6 class="user-name mb-0" data-name="Emma Adams">Black Friday
                                                            is here</h6>
                                                        <span class="user-work fs-3"
                                                            data-occupation="Web Developer">Discount on
                                                            Electronics</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <span class="usr-location" data-location="Boston, USA"> 13:45:22 on 28 Feb
                                                2024</span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Boston, USA"> 13:45:22 on 28 Feb
                                                2024</span>
                                        </td>





                                        <td>
                                            <span class="usr-location" data-location="Boston, USA"> <input
                                                    class="form-control w-50" type="number" placeholder="%"></span>
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
                                                        <h6 class="user-name mb-0" data-name="Olivia Allen">Great
                                                            CLoth Festival</h6>
                                                        <span class="user-work fs-3"
                                                            data-occupation="Web Designer">Cloth Sale</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <span class="usr-location" data-location="Sydney, Australia"> 13:45:22 on
                                                28 Feb 2024</span>
                                        </td>
                                        <td>
                                            <span class="usr-location" data-location="Sydney, Australia"> 13:45:22 on
                                                28 Feb 2024</span>
                                        </td>





                                        <td>
                                            <span class="usr-location" data-location="Boston, USA"> <input
                                                    class="form-control w-50" type="number" placeholder="%"></span>
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
