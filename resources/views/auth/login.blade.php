<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
 
  <!-- Preloader -->
  <div class="preloader">
    <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="../main/index.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" style="width:174px;height:26px;" class="dark-logo" alt="Logo-Dark" />
                  <img src="../assets/images/logos/light-logo.png" style="width:174px;height:26px;" class="light-logo" alt="Logo-light" />
                </a>
                <div class="row">
                  <div class="col-6 mb-2 mb-sm-0">
                    <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="javascript:void(0)" role="button">
                      <img src="../assets/images/svgs/google-icon.svg" alt="" class="img-fluid me-2" width="18" height="18">
                      <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>Google
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="javascript:void(0)" role="button">
                      <img src="../assets/images/svgs/facebook-icon.svg" alt="" class="img-fluid me-2" width="18" height="18">
                      <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>FB
                    </a>
                  </div>
                </div>
                <div class="position-relative text-center my-4">
                  <p class="mb-0 fs-4 px-3 d-inline-block text-bg-white text-dark z-index-5 position-relative">or sign in with</p>
                  <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email"   class="form-control"  :value="old('email')" required  id="exampleInputEmail1"  autofocus aria-describedby="emailHelp">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input  type="password"
                    name="password"
                    required autocomplete="current-password"  class="form-control" id="exampleInputPassword1">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" name="remember"  id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device

                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        
                      </label>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="text-primary fw-medium" href="{{ route('password.request') }}">Forgot Password ?</a>
                    @endif
                  </div>
                 <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-medium">New to Skale.AI?</p>
                    <a class="text-primary fw-medium ms-2" href="/register">Create an account</a>
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