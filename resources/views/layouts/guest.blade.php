<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
  <!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Favicon icon-->
<link
  rel="shortcut icon"
  type="image/png"
  href="../assets/images/logos/favicon.png"
/>

<!-- Core Css -->
<link rel="stylesheet" href="../assets/css/styles.css" />

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Skale.AI') }}</title>
</head>

<body>
        {{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div> --}}

        {{ $slot }}
        <div class="dark-transparent sidebartoggler"></div>
        <!-- Import Js Files -->
      
      <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
      <script src="../assets/js/app.min.js"></script>
      <script src="../assets/js/app.init.js"></script>
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
      
      <script src="../assets/js/sidebarmenu.js"></script>
      <script src="../assets/js/theme.js"></script>
      
      </body>
      
      </html>
