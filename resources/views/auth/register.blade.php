<x-guest-layout>
  <!-- Preloader -->
  <div class="preloader">
    <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
      <div class="position-relative z-index-5">
        <div class="row">
          <div class="col-xl-7 col-xxl-8">
            <a href="../main/index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
              <img src="../assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
              <img src="../assets/images/logos/light-logo.png" class="light-logo" alt="Logo-light" />
            </a>
            <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
              <img src="../assets/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
            </div>
          </div>
          <div class="col-xl-5 col-xxl-4">
            <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
              <div class="col-sm-8 col-md-6 col-xl-9">
                <h2 class="mb-3 fs-7 fw-bolder">Welcome to Skale.AI</h2>
                <p class=" mb-9">Your Admin Dashboard</p>
                <div class="row">
                  <div class="col-6 mb-2 mb-sm-0">
                    <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
                      href="javascript:void(0)" role="button">
                      <img src="../assets/images/svgs/google-icon.svg" alt="" class="img-fluid me-2" width="18"
                        height="18">
                      <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>Google
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
                      href="javascript:void(0)" role="button">
                      <img src="../assets/images/svgs/facebook-icon.svg" alt="" class="img-fluid me-2" width="18"
                        height="18">
                      <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>FB
                    </a>
                  </div>
                </div>
                <div class="position-relative text-center my-4">
                  <p class="mb-0 fs-4 px-3 d-inline-block text-bg-white text-dark z-index-5 position-relative">or sign Up
                    with</p>
                  <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name"  :value="old('name')" required autofocus  class="form-control" id="exampleInputtext"  autocomplete="name" aria-describedby="textHelp">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email"  name="email" :value="old('email')" required autocomplete="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input  type="password"
                    name="password"
                    required autocomplete="new-password" class="form-control" id="exampleInputPassword1">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input  type="password"
                    name="password_confirmation" required autocomplete="new-password" class="form-control" id="exampleInputPassword1">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign Up</button>
                  <div class="d-flex align-items-center">
                    <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                    <a class="text-primary fw-medium ms-2" href="{{ route('login') }}">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-guest-layout>