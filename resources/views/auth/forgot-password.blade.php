<x-guest-layout>

  <!-- Preloader -->
  <div class="preloader">
    <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100">
      <div class="position-relative z-index-5">
        <div class="row">
          <div class="col-lg-6 col-xl-8 col-xxl-9">
            <a href="../main/index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
              <img src="../assets/images/logos/dark-logo.svg" class="dark-logo" alt="Logo-Dark" />
              <img src="../assets/images/logos/light-logo.png" class="light-logo" alt="Logo-light" />
            </a>
            <div class="d-none d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
              <img src="../assets/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
            </div>
          </div>
          <div class="col-lg-6 col-xl-4 col-xxl-3">
            <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
              <div class="d-flex align-items-center w-100 h-100">
                <div class="card-body">
                  <div class="mb-5">
                    <h2 class="fw-bolder fs-7 mb-3">Forgot your password?</h2>
                    <p class="mb-0 ">   
                      Please enter the email address associated with your account and We will email you a link to reset your password.                
                    </p>
                  </div>
                  <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" :value="old('email')" required autofocus class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-8 mb-3">Forgot Password</button>
                    <a href="/login" class="btn bg-primary-subtle text-primary w-100 py-8">Back to Login</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</x-guest-layout>
