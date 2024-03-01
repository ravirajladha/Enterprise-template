<x-app-layout>


    <style>
        /* Article - https://bitsofco.de/github-contribution-graph-css-grid/ */

        /* Grid-related CSS */

        :root {
            --square-size: 15px;
            --square-gap: 5px;
            --week-width: calc(var(--square-size) + var(--square-gap));
        }

        .months {
            grid-area: months;
        }

        .days {
            grid-area: days;
        }

        .squares {
            grid-area: squares;
        }

        .graph {
            display: inline-grid;
            grid-template-areas: "empty months"
                "days squares";
            grid-template-columns: auto 1fr;
            grid-gap: 10px;
        }

        .months {
            display: grid;
            grid-template-columns: calc(var(--week-width) * 4)
                /* Jan */
                calc(var(--week-width) * 4)
                /* Feb */
                calc(var(--week-width) * 4)
                /* Mar */
                calc(var(--week-width) * 5)
                /* Apr */
                calc(var(--week-width) * 4)
                /* May */
                calc(var(--week-width) * 4)
                /* Jun */
                calc(var(--week-width) * 5)
                /* Jul */
                calc(var(--week-width) * 4)
                /* Aug */
                calc(var(--week-width) * 4)
                /* Sep */
                calc(var(--week-width) * 5)
                /* Oct */
                calc(var(--week-width) * 4)
                /* Nov */
                calc(var(--week-width) * 5)
                /* Dec */
            ;
        }

        .days,
        .squares {
            display: grid;
            grid-gap: var(--square-gap);
            grid-template-rows: repeat(7, var(--square-size));
        }

        .squares {
            grid-auto-flow: column;
            grid-auto-columns: var(--square-size);
        }


        /* Other styling */

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 12px;
        }

        .graph {
            padding: 20px;
            border: 1px #e1e4e8 solid;
            margin: 20px;
        }

        .days li:nth-child(odd) {
            visibility: hidden;
        }

        .squares li {
            background-color: #ebedf0;
        }

        .squares li[data-level="1"] {
            background-color: #ebedf0;
        }

        .squares li[data-level="2"] {
            background-color: #7bc96f;
        }

        .squares li[data-level="3"] {
            background-color: #ebedf0;
        }
    </style>


    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Customer Details</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="/services">Retail</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Customer Details</li>
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
    

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                        </div>
                    </div>

                    <div class="card card-body">
                        <div class="border-bottom title-part-padding">

                            <div class="row d-flex justify-content-between">
                                <div class="col-11">
                                    <h4 class="card-title mb-0">Customer Order Month-Day Progression</h4>
                                </div>
                                
                            </div>
                        </div>

                        <div>
                            <div class="graph">
                                <ul class="months">
                                    <li>Jan</li>
                                    <li>Feb</li>
                                    <li>Mar</li>
                                    <li>Apr</li>
                                    <li>May</li>
                                    <li>Jun</li>
                                    <li>Jul</li>
                                    <li>Aug</li>
                                    <li>Sep</li>
                                    <li>Oct</li>
                                    <li>Nov</li>
                                    <li>Dec</li>
                                </ul>
                                <ul class="days">
                                    <li>Sun</li>
                                    <li>Mon</li>
                                    <li>Tue</li>
                                    <li>Wed</li>
                                    <li>Thu</li>
                                    <li>Fri</li>
                                    <li>Sat</li>
                                </ul>
                                <ul class="squares">
                                    <!-- added via javascript -->
                                </ul>
                            </div>
                        </div>

                            <div class="border-bottom title-part-padding">
    
                                <div class="row d-flex justify-content-between">
                                    <div class="col-11">
                                        <h4 class="card-title mb-0">Details</h4>
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
                                        <th>Sl No.</th>
                                        <th>Order Name</th>
                                        <th>Order Amount</th>
                                        <th>Order Date</th>
                                        <th>Invoice</th>
                                        <th>View Checkout</th>
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
                                                <span class="usr-location"
                                                    data-location="Boston, USA">1</span>
                                            </td>
                                            <td>
                                                <span class="usr-location"
                                                    data-location="Boston, USA">MacBook Air Pro</span>
                                            </td>
                                            <td>
                                                <span class="usr-location"
                                                    data-location="Boston, USA">₹ 1,14,900</span>
                                            </td>
       
    
                                            <td>
                                                <span class="usr-location" data-location="Boston, USA"> 13:45:22 on 28 Feb
                                                    2024</span>
                                            </td>
    
                                            <td>
                                                <a href="/invoice">
                                                    <button type="button"
                                                    class="justify-content-center w-100 btn mb-1 bg-primary-subtle text-primary font-medium d-flex align-items-center">
                                                    <i class="ti ti-eye fs-4 me-2"></i>
                                                    Invoice
                                                </button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="/checkout">
                                                    <button type="button"
                                                    class="justify-content-center w-100 btn mb-1 bg-primary-subtle text-primary font-medium d-flex align-items-center">
                                                    <i class="ti ti-eye fs-4 me-2"></i>
                                                    Checkout
                                                </button>
                                                </a>
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
                                                            id="checkbox1" />
                                                        <label class="form-check-label" for="checkbox1"></label>
                                                    </div>
                                                </div>
                                            </td>
                                            
    
                                            <td>
                                                <span class="usr-location"
                                                    data-location="Boston, USA">2</span>
                                            </td>
                                            <td>
                                                <span class="usr-location"
                                                    data-location="Boston, USA">Logitech Gamepad</span>
                                            </td>
                                            <td>
                                                <span class="usr-location"
                                                    data-location="Boston, USA">₹ 4,590</span>
                                            </td>
       
    
                                            <td>
                                                <span class="usr-location" data-location="Boston, USA"> 02:45:22 on 02 Feb
                                                    2024</span>
                                            </td>
    
                                            <td>
                                                <a href="/invoice">
                                                    <button type="button"
                                                    class="justify-content-center w-100 btn mb-1 bg-primary-subtle text-primary font-medium d-flex align-items-center">
                                                    <i class="ti ti-eye fs-4 me-2"></i>
                                                    Invoice
                                                </button>
                                                </a>
                                            </td>

                                            <td>
                                                <a href="/checkout">
                                                    <button type="button"
                                                    class="justify-content-center w-100 btn mb-1 bg-primary-subtle text-primary font-medium d-flex align-items-center">
                                                    <i class="ti ti-eye fs-4 me-2"></i>
                                                    Checkout
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





    <!-- /.modal -->


</x-app-layout>

<script>
    // Add squares

    const squares = document.querySelector('.squares');
    for (var i = 1; i < 365; i++) {
        const level = Math.floor(Math.random() * 3);
        squares.insertAdjacentHTML('beforeend', `<li data-level="${level}"></li>`);
    }
</script>
