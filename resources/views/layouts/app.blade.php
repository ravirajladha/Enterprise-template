<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">
  <head>
    <!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Favicon icon-->
<link
  rel="shortcut icon"
  type="image/png"
  href="../assets/images/logos/favicon.png"
/>

<!-- Core Css -->
<link rel="stylesheet" href="../assets/css/styles.css" />

<title>{{ config('app.name', 'Skale.AI') }}</title>
    <!-- Owl Carousel  -->
    <link
      rel="stylesheet"
      href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css"
    />
  </head>

  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img
        src="../assets/images/logos/favicon.png"
        alt="loader"
        class="lds-ripple img-fluid"
      />
    </div>
    <div id="main-wrapper">
      <!-- Sidebar Start -->
     
          <!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->


@include('modules.sidebar')

<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->

      <!--  Sidebar End -->
      <div class="page-wrapper">
        <!--  Header Start -->
    
        @include('modules.mainheader')
        @include('modules.leftsidebar')
      
            <main>
                {{ $slot }}
            </main>
            @include('modules.settings')
 
        </div>
  
        <!--  Search Bar -->
        @include('modules.searchBar')
  
  
        <!--  Shopping Cart -->
        @include('modules.shoppingCart')
  
  
      </div>
      @include('modules.footer')