<x-app-layout>

<div class="body-wrapper">
    <div class="container-fluid">
      <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
<div class="card-body px-4 py-3">
<div class="row align-items-center">
  <div class="col-9">
    <h4 class="fw-semibold mb-8">Subadmin Setting</h4>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a class="text-muted text-decoration-none" href="../main/index.html"
            >Home</a
          >
        </li>
        <li class="breadcrumb-item" aria-current="page">Subadmin Setting</li>
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

      <div class="card">
        <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
              id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab"
              aria-controls="pills-account" aria-selected="true">
              <i class="ti ti-user-circle me-2 fs-6"></i>
              <span class="d-none d-md-block">Account</span>
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
              id="pills-notifications-tab" data-bs-toggle="pill" data-bs-target="#pills-notifications" type="button"
              role="tab" aria-controls="pills-notifications" aria-selected="false">
              <i class="ti ti-bell me-2 fs-6"></i>
              <span class="d-none d-md-block">Permissions</span>
            </button>
          </li>
         
          <li class="nav-item" role="presentation">
            <button
              class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
              id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button"
              role="tab" aria-controls="pills-security" aria-selected="false">
              <i class="ti ti-lock me-2 fs-6"></i>
              <span class="d-none d-md-block">Security</span>
            </button>
          </li>
        </ul>
        <div class="card-body">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-account" role="tabpanel"
              aria-labelledby="pills-account-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-6 d-flex align-items-stretch">
                  <div class="card w-100 position-relative overflow-hidden">
                    <div class="card-body p-4">
                      <h5 class="card-title fw-semibold">Change Profile</h5>
                      <p class="card-subtitle mb-4">Change your profile picture from here</p>
                      <div class="text-center">
                        <img src="../assets/images/profile/user-1.jpg" alt="" class="img-fluid rounded-circle"
                          width="120" height="120">
                        <div class="d-flex align-items-center justify-content-center my-4 gap-3">
                          <button class="btn btn-primary">Upload</button>
                          <button class="btn btn-outline-danger">Reset</button>
                        </div>
                        <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch">
                  <div class="card w-100 position-relative overflow-hidden">
                    <div class="card-body p-4">
                      <h5 class="card-title fw-semibold">Change Password</h5>
                      <p class="card-subtitle mb-4">To change your password please confirm here</p>
                      <form>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label fw-semibold">Current Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1"
                            value="12345678910">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword2" class="form-label fw-semibold">New Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword2"
                            value="12345678910">
                        </div>
                        <div class="">
                          <label for="exampleInputPassword3" class="form-label fw-semibold">Confirm Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword3"
                            value="12345678910">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card w-100 position-relative overflow-hidden mb-0">
                    <div class="card-body p-4">
                      <h5 class="card-title fw-semibold">Personal Details</h5>
                      <p class="card-subtitle mb-4">To change your personal detail , edit and save from here</p>
                      <form>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-4">
                              <label for="exampleInputtext" class="form-label fw-semibold">First Name</label>
                              <input type="text" class="form-control" id="exampleInputtext"
                                placeholder="Arun">
                            </div>
                            <div class="mb-4">
                              <label class="form-label fw-semibold">Location</label>
                              <select class="form-select" aria-label="Default select example">
                                <option selected>United Kingdom</option>
                                <option value="1">United States</option>
                                <option value="2">United Kingdom</option>
                                <option value="3">India</option>
                                <option value="3">Russia</option>
                              </select>
                            </div>
                            <div class="mb-4">
                              <label for="exampleInputtext1" class="form-label fw-semibold">Email</label>
                              <input type="email" class="form-control" id="exampleInputtext1"
                                placeholder="info@kods.com">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="mb-4">
                              <label for="exampleInputtext2" class="form-label fw-semibold">Last Name</label>
                              <input type="text" class="form-control" id="exampleInputtext2"
                                placeholder="Kumar">
                            </div>
                            <div class="mb-4">
                              <label class="form-label fw-semibold">Currency</label>
                              <select class="form-select" aria-label="Default select example">
                                <option selected>India (INR)</option>
                                <option value="1">US Dollar ($)</option>
                                <option value="2">United Kingdom (Pound)</option>
                                <option value="3">India (INR)</option>
                                <option value="3">Russia (Ruble)</option>
                              </select>
                            </div>
                            <div class="mb-4">
                              <label for="exampleInputtext3" class="form-label fw-semibold">Phone</label>
                              <input type="text" class="form-control" id="exampleInputtext3"
                                placeholder="+91 12345 65478">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="">
                              <label for="exampleInputtext4" class="form-label fw-semibold">Address</label>
                              <input type="text" class="form-control" id="exampleInputtext4"
                                placeholder="814 Howard Street, 120065, India">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                              <button class="btn btn-primary">Save</button>
                              <button class="btn bg-danger-subtle text-danger">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-notifications" role="tabpanel"
              aria-labelledby="pills-notifications-tab" tabindex="0">
              <div class="row justify-content-center">
                <div class="col-lg-9">
                  <div class="card">
                    <div class="card-body p-4">
                      <h4 class="fw-semibold mb-3">Permission Preferences</h4>
                      <p>
                        Select the permission you would like to allow for the subadmin according to the choices of the pages in the application.
                      </p>
                      <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Page Name</th>
                                <th scope="col">Create</th>
                                <th scope="col">Read</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Repeat this row for each page -->
                            <tr>
                                <td>Dashboard</td>
                                <td><input type="checkbox" id="dashboard-create"></td>
                                <td><input type="checkbox" id="dashboard-read"></td>
                                <td><input type="checkbox" id="dashboard-update"></td>
                                <td><input type="checkbox" id="dashboard-delete"></td>
                            </tr>
                            <!-- Add additional rows for other pages -->
                        </tbody>
                    </table>
                    
                    
                    </div>
                  </div>
                </div>
              
              
                <div class="col-12">
                  <div class="d-flex align-items-center justify-content-end gap-3">
                    <button class="btn btn-primary">Save</button>
                    <button class="btn bg-danger-subtle text-danger">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
         
            <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab"
              tabindex="0">
              <div class="row">
              
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body p-4">
                      <div
                        class="text-bg-light rounded-1 p-6 d-inline-flex align-items-center justify-content-center mb-3">
                        <i class="ti ti-device-laptop text-primary d-block fs-7" width="22" height="22"></i>
                      </div>
                      <h5 class="fs-5 fw-semibold mb-0">Devices</h5>
                      <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit Rem.</p>
                      <button class="btn btn-primary mb-4">Sign out from all devices</button>
                      <div class="d-flex align-items-center justify-content-between py-3 border-bottom">
                        <div class="d-flex align-items-center gap-3">
                          <i class="ti ti-device-mobile text-dark d-block fs-7" width="26" height="26"></i>
                          <div>
                            <h5 class="fs-4 fw-semibold mb-0">iPhone 14</h5>
                            <p class="mb-0">London UK, Oct 23 at 1:15 AM</p>
                          </div>
                        </div>
                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                          href="javascript:void(0)">
                          <i class="ti ti-dots-vertical"></i>
                        </a>
                      </div>
                      <div class="d-flex align-items-center justify-content-between py-3">
                        <div class="d-flex align-items-center gap-3">
                          <i class="ti ti-device-laptop text-dark d-block fs-7" width="26" height="26"></i>
                          <div>
                            <h5 class="fs-4 fw-semibold mb-0">Macbook Air</h5>
                            <p class="mb-0">Gujarat India, Oct 24 at 3:15 AM</p>
                          </div>
                        </div>
                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle"
                          href="javascript:void(0)">
                          <i class="ti ti-dots-vertical"></i>
                        </a>
                      </div>
                      <button class="btn bg-primary-subtle text-primary w-100 py-1">Need Help ?</button>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-flex align-items-center justify-content-end gap-3">
                    <button class="btn btn-primary">Save</button>
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

</x-app-layout>
