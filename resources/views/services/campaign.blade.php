<x-app-layout>

  <link rel="stylesheet" href="../assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
  <link rel="stylesheet" href="../assets/libs/ckeditor/samples/css/samples.css">

  <div class="body-wrapper">
    <div class="container-fluid">
      <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
<div class="card-body px-4 py-3">
<div class="row align-items-center">
  <div class="col-9">
    <h4 class="fw-semibold mb-8">Contact</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="../main/index.html"
            >Home</a
          >
        </li>
        <li class="breadcrumb-item" aria-current="page">Contact</li>
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
            <div class="card">
              <div class="border-bottom title-part-padding">
                <h4 class="card-title mb-0">Basic Preset Ck Editor</h4>
              </div>
              <div class="card-body">
                <textarea cols="80" id="testedit" name="testedit" rows="10" data-sample="1" data-sample-short>
                                  &lt;p&gt;The &lt;strong&gt;Basic&lt;/strong&gt; package is perfect for short text fields that require little formatting, such as:&lt;/p&gt;

                                  &lt;ul&gt;
                                      &lt;li&gt;&lt;a href="https://ckeditor.com/blog/"&gt;Blog&lt;/a&gt; comments.&lt;/li&gt;
                                      &lt;li&gt;Contact forms.&lt;/li&gt;
                                      &lt;li&gt;Short text snippets.&lt;/li&gt;
                                  &lt;/ul&gt;
                              </textarea>
              </div>
            </div>
          </div>


        <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog"
          aria-labelledby="addContactModalTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header d-flex align-items-center">
                <h5 class="modal-title">Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="add-contact-box">
                  <div class="add-contact-content">
                    <form id="addContactModalTitle">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3 contact-name">
                            <input type="text" id="c-name" class="form-control" placeholder="Name" />
                            <span class="validation-text text-danger"></span>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3 contact-email">
                            <input type="text" id="c-email" class="form-control" placeholder="Email" />
                            <span class="validation-text text-danger"></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3 contact-occupation">
                            <input type="text" id="c-occupation" class="form-control" placeholder="Occupation" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3 contact-phone">
                            <input type="text" id="c-phone" class="form-control" placeholder="Phone" />
                            <span class="validation-text text-danger"></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="mb-3 contact-location">
                            <input type="text" id="c-location" class="form-control" placeholder="Location" />
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button id="btn-add" class="btn btn-success rounded-pill px-4">Add</button>
                <button id="btn-edit" class="btn btn-success rounded-pill px-4">Save</button>
                <button class="btn btn-danger rounded-pill px-4" data-bs-dismiss="modal"> Discard </button>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-body">
          <div class="table-responsive">
            <table class="table search-table align-middle text-nowrap">
              <thead class="header-item">
                <th>
                  <div class="n-chk align-self-center text-center">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input primary" id="contact-check-all" />
                      <label class="form-check-label" for="contact-check-all"></label>
                      <span class="new-control-indicator"></span>
                    </div>
                  </div>
                </th>
                <th>Name</th>
                <th>Email</th>
                <th>Location</th>
                <th>Phone</th>
                <th>Action</th>
              </thead>
              <tbody>
                <!-- start row -->
                <tr class="search-items">
                  <td>
                    <div class="n-chk align-self-center text-center">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox1" />
                        <label class="form-check-label" for="checkbox1"></label>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../assets/images/profile/user-1.jpg" alt="avatar" class="rounded-circle"
                        width="35" />
                      <div class="ms-3">
                        <div class="user-meta-info">
                          <h6 class="user-name mb-0" data-name="Emma Adams">Emma Adams</h6>
                          <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="usr-email-addr" data-email="adams@mail.com">adams@mail.com</span>
                  </td>
                  <td>
                    <span class="usr-location" data-location="Boston, USA">Boston, USA</span>
                  </td>
                  <td>
                    <span class="usr-ph-no" data-phone="+1 (070) 123-4567">+91 (070) 123-4567</span>
                  </td>
                  <td>
                    <div class="action-btn">
                      <a href="javascript:void(0)" class="text-info edit">
                        <i class="ti ti-eye fs-5"></i>
                      </a>
                      <a href="javascript:void(0)" class="text-dark delete ms-2">
                        <i class="ti ti-trash fs-5"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <!-- end row -->
                <!-- start row -->
                <tr class="search-items">
                  <td>
                    <div class="n-chk align-self-center text-center">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox2" />
                        <label class="form-check-label" for="checkbox2"></label>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../assets/images/profile/user-2.jpg" alt="avatar" class="rounded-circle"
                        width="35" />
                      <div class="ms-3">
                        <div class="user-meta-info">
                          <h6 class="user-name mb-0" data-name="Olivia Allen">Olivia Allen</h6>
                          <span class="user-work fs-3" data-occupation="Web Designer">Web Designer</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="usr-email-addr" data-email="allen@mail.com">allen@mail.com</span>
                  </td>
                  <td>
                    <span class="usr-location" data-location="Sydney, Australia">Sydney, Australia</span>
                  </td>
                  <td>
                    <span class="usr-ph-no" data-phone="+91 (125) 450-1500">+91 (125) 450-1500</span>
                  </td>
                  <td>
                    <div class="action-btn">
                      <a href="javascript:void(0)" class="text-info edit">
                        <i class="ti ti-eye fs-5"></i>
                      </a>
                      <a href="javascript:void(0)" class="text-dark delete ms-2">
                        <i class="ti ti-trash fs-5"></i>
                      </a>
                    </div>
                  </td>
                </tr>
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
      </x-app-layout>

      <script src="../assets/libs/fullcalendar/index.global.min.js"></script>
      <script src="../assets/js/apps/contact.js"></script>

      <script src="../assets/libs/ckeditor/ckeditor.js"></script>
      <script src="../assets/libs/ckeditor/samples/js/sample.js"></script>
      <script src="../assets/js/plugins/ckeditor-init.js"></script>
