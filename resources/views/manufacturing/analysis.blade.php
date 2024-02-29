<x-app-layout>

  <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body px-4 py-3">
    <div class="row align-items-center">
      <div class="col-9">
        <h4 class="fw-semibold mb-8">Production Analytics</h4>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="../main/index.html"
                >Home</a
              >
            </li>
            <li class="breadcrumb-item" aria-current="page">Production Analytics</li>
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

        
          <div class="row">
            <div class="col-12">
              <!-- ---------------------
                                                    start Spline Area Chart
                                                ---------------- -->
              <div class="card">
                <div class="card-body">
                  <h5>Production Analytics</h5>
                  <div id="chart-area-spline"></div>
                </div>
              </div>
              <!-- ---------------------
                                                    end Spline Area Chart
                                                ---------------- -->
            </div>
          </div>
        
        </div>
      </div>


      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="mb-2">
                <h5 class="mb-0">Scroll - Vertical</h5>
              </div>
         
              <div class="table-responsive">
                <table id="scroll_ver" class="table border table-striped table-bordered display text-nowrap"
                  style="width: 100%">
                  <thead>
                    <!-- start row -->
                    <tr>
                      <th>Week</th>
                      <th>All Work Orders</th>
                      <th>Not Started</th>
                      <th>Overdue</th>
                      <th>Pending</th>
                      <th>Completed</th>
                  </tr>
                    <!-- end row -->
                  </thead>
                  <tbody>
                    <!-- start row -->
                    <tr>
                      <td>Week 1</td>
                      <td>31</td>
                      <td>20</td>
                      <td>5</td>
                      <td>10</td>
                      <td>10</td>
                  </tr>
                  <tr>
                      <td>Week 2</td>
                      <td>40</td>
                      <td>15</td>
                      <td>8</td>
                      <td>12</td>
                      <td>5</td>
                  </tr>
                  <tr>
                      <td>Week 3</td>
                      <td>28</td>
                      <td>10</td>
                      <td>15</td>
                      <td>18</td>
                      <td>5</td>
                  </tr>
                  <tr>
                      <td>Week 4</td>
                      <td>51</td>
                      <td>8</td>
                      <td>20</td>
                      <td>25</td>
                      <td>8</td>
                  </tr>
                  <tr>
                      <td>Week 5</td>
                      <td>42</td>
                      <td>5</td>
                      <td>25</td>
                      <td>30</td>
                      <td>12</td>
                  </tr>
                  <tr>
                      <td>Week 6</td>
                      <td>109</td>
                      <td>3</td>
                      <td>30</td>
                      <td>35</td>
                      <td>41</td>
                  </tr>
                  <tr>
                      <td>Week 7</td>
                      <td>100</td>
                      <td>2</td>
                      <td>35</td>
                      <td>30</td>
                      <td>33</td>
                  </tr>
                  <tr>
                      <td>Week 8</td>
                      <td>120</td>
                      <td>0</td>
                      <td>40</td>
                      <td>25</td>
                      <td>55</td>
                  </tr>
                  <tr>
                      <td>Week 9</td>
                      <td>90</td>
                      <td>0</td>
                      <td>45</td>
                      <td>20</td>
                      <td>25</td>
                  </tr>
                  <tr>
                      <td>Week 10</td>
                      <td>110</td>
                      <td>0</td>
                      <td>50</td>
                      <td>15</td>
                      <td>25</td>
                  </tr>
                    <!-- end row -->
                  </tbody>
                  <tfoot>
                    <!-- start row -->
                    <tr>
                      <th>Week</th>
                      <th>All Work Orders</th>
                      <th>Not Started</th>
                      <th>Overdue</th>
                      <th>Pending</th>
                      <th>Completed</th>
                    </tr>
                    <!-- end row -->
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
          </div>
          </div>
          <!-- ---------------------
                                end Scroll - Vertical
                            ---------------- -->

    </x-app-layout>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    {{-- <script src="../assets/js/apex-chart/apex.area.init.js"></script> --}}
<script>
        var options_spline = {
            series: [
                {
                    name: "All Work Orders",
                    data: [31, 40, 28, 51, 42, 109, 100, 120, 90, 110]
                },
                {
                    name: "Not Started",
                    data: [20, 15, 10, 8, 5, 3, 2, 0, 0, 0]
                },
                {
                    name: "Overdue",
                    data: [5, 8, 15, 20, 25, 30, 35, 40, 45, 50]
                },
                {
                    name: "Pending",
                    data: [10, 12, 18, 25, 30, 35, 30, 25, 20, 15]
                },
                {
                    name: "Completed",
                    data: [10, 5, 5, 8, 12, 41, 33, 55, 25, 25]
                }
            ],
            chart: {
                height: 350,
                type: "line"
            },
            xaxis: {
                categories: ["Week 1", "Week 2", "Week 3", "Week 4", "Week 5", "Week 6", "Week 7", "Week 8", "Week 9", "Week 10"]
            },
            yaxis: {
                title: {
                    text: "Number of Work Orders"
                }
            },
            legend: {
                position: "top"
            },
            colors: ["#615dff", "#3dd9eb", "#ff4560", "#28a745", "#ffc107"]
        };

        var chart_area_spline = new ApexCharts(
        document.querySelector("#chart-area-spline"),
        options_spline
    );
    chart_area_spline.render();
    </script>

<script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/datatable/datatable-basic.init.js"></script>
