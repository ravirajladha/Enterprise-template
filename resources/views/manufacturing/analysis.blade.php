<x-app-layout>
    <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Production Analysis</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="../services">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Production Analysis</li>
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

            <!-- Start Basic Line Chart -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form class="p-4">
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <input type="text" class="form-control" id="exampleInputname1"
                                        placeholder="" value="Air Fryer"/>
                                        <small id="name" class="form-text text-muted">Product Name</small>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <input type="date" class="form-control" value="2023-01-07">
                                    <small id="name" class="form-text text-muted">Start Date</small>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <input type="date" class="form-control" value="2023-11-25">
                                    <small id="name" class="form-text text-muted">End Date</small>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>Daily</option>
                                        <option value="1">Daily</option>
                                        <option value="2">Weekly</option>
                                        <option value="3">Monthly</option>
                                        <option value="3">Yearly</option>
                                    </select>
                                    <small id="name" class="form-text text-muted">Sort by</small>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit"
                                        class="btn bg-info-subtle text-info font-weight-medium d-block">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="card-body">
                            <h5>Activity Graph</h5>
                            <div id="chart-line-basic"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Basic Line Chart -->

            {{-- Database Table --}}
          <div class="datatables">
            
            <div class="row">
                <div class="col-12">
                  <!-- ---------------------
                                        start Zero Configuration
                                    ---------------- -->
                  <div class="card">
                    <div class="card-body">
                      <div class="mb-2">
                        <h5 class="mb-0">Zero Configuration</h5>
                      </div>
                      <p class="card-subtitle mb-3">
                        DataTables has most features enabled by default, so all
                        you need to do to use it with your own tables is to call
                        the construction function:<code> $().DataTable();</code>.
                        You can refer full documentation from here
                        <a href="https://datatables.net/">Datatables</a>
                      </p>
                      <div class="table-responsive">
                        <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
                          <thead>
                            <!-- start row -->
                            <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                            </tr>
                            <!-- end row -->
                          </thead>
                          <tbody>
                            <!-- start row -->
                            <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td>$170,750</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Ashton Cox</td>
                              <td>Junior Technical Author</td>
                              <td>San Francisco</td>
                              <td>66</td>
                              <td>2009/01/12</td>
                              <td>$86,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Cedric Kelly</td>
                              <td>Senior Javascript Developer</td>
                              <td>Edinburgh</td>
                              <td>22</td>
                              <td>2012/03/29</td>
                              <td>$433,060</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Brielle Williamson</td>
                              <td>Integration Specialist</td>
                              <td>New York</td>
                              <td>61</td>
                              <td>2012/12/02</td>
                              <td>$372,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Herrod Chandler</td>
                              <td>Sales Assistant</td>
                              <td>San Francisco</td>
                              <td>59</td>
                              <td>2012/08/06</td>
                              <td>$137,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Rhona Davidson</td>
                              <td>Integration Specialist</td>
                              <td>Tokyo</td>
                              <td>55</td>
                              <td>2010/10/14</td>
                              <td>$327,900</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Colleen Hurst</td>
                              <td>Javascript Developer</td>
                              <td>San Francisco</td>
                              <td>39</td>
                              <td>2009/09/15</td>
                              <td>$205,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Sonya Frost</td>
                              <td>Software Engineer</td>
                              <td>Edinburgh</td>
                              <td>23</td>
                              <td>2008/12/13</td>
                              <td>$103,600</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Jena Gaines</td>
                              <td>Office Manager</td>
                              <td>London</td>
                              <td>30</td>
                              <td>2008/12/19</td>
                              <td>$90,560</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Quinn Flynn</td>
                              <td>Support Lead</td>
                              <td>Edinburgh</td>
                              <td>22</td>
                              <td>2013/03/03</td>
                              <td>$342,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Charde Marshall</td>
                              <td>Regional Director</td>
                              <td>San Francisco</td>
                              <td>36</td>
                              <td>2008/10/16</td>
                              <td>$470,600</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Haley Kennedy</td>
                              <td>Senior Marketing Designer</td>
                              <td>London</td>
                              <td>43</td>
                              <td>2012/12/18</td>
                              <td>$313,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Tatyana Fitzpatrick</td>
                              <td>Regional Director</td>
                              <td>London</td>
                              <td>19</td>
                              <td>2010/03/17</td>
                              <td>$385,750</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Michael Silva</td>
                              <td>Marketing Designer</td>
                              <td>London</td>
                              <td>66</td>
                              <td>2012/11/27</td>
                              <td>$198,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Paul Byrd</td>
                              <td>Chief Financial Officer (CFO)</td>
                              <td>New York</td>
                              <td>64</td>
                              <td>2010/06/09</td>
                              <td>$725,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Gloria Little</td>
                              <td>Systems Administrator</td>
                              <td>New York</td>
                              <td>59</td>
                              <td>2009/04/10</td>
                              <td>$237,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Bradley Greer</td>
                              <td>Software Engineer</td>
                              <td>London</td>
                              <td>41</td>
                              <td>2012/10/13</td>
                              <td>$132,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Dai Rios</td>
                              <td>Personnel Lead</td>
                              <td>Edinburgh</td>
                              <td>35</td>
                              <td>2012/09/26</td>
                              <td>$217,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Jenette Caldwell</td>
                              <td>Development Lead</td>
                              <td>New York</td>
                              <td>30</td>
                              <td>2011/09/03</td>
                              <td>$345,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Yuri Berry</td>
                              <td>Chief Marketing Officer (CMO)</td>
                              <td>New York</td>
                              <td>40</td>
                              <td>2009/06/25</td>
                              <td>$675,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Caesar Vance</td>
                              <td>Pre-Sales Support</td>
                              <td>New York</td>
                              <td>21</td>
                              <td>2011/12/12</td>
                              <td>$106,450</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Doris Wilder</td>
                              <td>Sales Assistant</td>
                              <td>Sidney</td>
                              <td>23</td>
                              <td>2010/09/20</td>
                              <td>$85,600</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Angelica Ramos</td>
                              <td>Chief Executive Officer (CEO)</td>
                              <td>London</td>
                              <td>47</td>
                              <td>2009/10/09</td>
                              <td>$1,200,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Gavin Joyce</td>
                              <td>Developer</td>
                              <td>Edinburgh</td>
                              <td>42</td>
                              <td>2010/12/22</td>
                              <td>$92,575</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Jennifer Chang</td>
                              <td>Regional Director</td>
                              <td>Singapore</td>
                              <td>28</td>
                              <td>2010/11/14</td>
                              <td>$357,650</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Brenden Wagner</td>
                              <td>Software Engineer</td>
                              <td>San Francisco</td>
                              <td>28</td>
                              <td>2011/06/07</td>
                              <td>$206,850</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Fiona Green</td>
                              <td>Chief Operating Officer (COO)</td>
                              <td>San Francisco</td>
                              <td>48</td>
                              <td>2010/03/11</td>
                              <td>$850,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Shou Itou</td>
                              <td>Regional Marketing</td>
                              <td>Tokyo</td>
                              <td>20</td>
                              <td>2011/08/14</td>
                              <td>$163,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Michelle House</td>
                              <td>Integration Specialist</td>
                              <td>Sidney</td>
                              <td>37</td>
                              <td>2011/06/02</td>
                              <td>$95,400</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Suki Burks</td>
                              <td>Developer</td>
                              <td>London</td>
                              <td>53</td>
                              <td>2009/10/22</td>
                              <td>$114,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Prescott Bartlett</td>
                              <td>Technical Author</td>
                              <td>London</td>
                              <td>27</td>
                              <td>2011/05/07</td>
                              <td>$145,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Gavin Cortez</td>
                              <td>Team Leader</td>
                              <td>San Francisco</td>
                              <td>22</td>
                              <td>2008/10/26</td>
                              <td>$235,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Martena Mccray</td>
                              <td>Post-Sales support</td>
                              <td>Edinburgh</td>
                              <td>46</td>
                              <td>2011/03/09</td>
                              <td>$324,050</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Unity Butler</td>
                              <td>Marketing Designer</td>
                              <td>San Francisco</td>
                              <td>47</td>
                              <td>2009/12/09</td>
                              <td>$85,675</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Howard Hatfield</td>
                              <td>Office Manager</td>
                              <td>San Francisco</td>
                              <td>51</td>
                              <td>2008/12/16</td>
                              <td>$164,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Hope Fuentes</td>
                              <td>Secretary</td>
                              <td>San Francisco</td>
                              <td>41</td>
                              <td>2010/02/12</td>
                              <td>$109,850</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Vivian Harrell</td>
                              <td>Financial Controller</td>
                              <td>San Francisco</td>
                              <td>62</td>
                              <td>2009/02/14</td>
                              <td>$452,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Timothy Mooney</td>
                              <td>Office Manager</td>
                              <td>London</td>
                              <td>37</td>
                              <td>2008/12/11</td>
                              <td>$136,200</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Jackson Bradshaw</td>
                              <td>Director</td>
                              <td>New York</td>
                              <td>65</td>
                              <td>2008/09/26</td>
                              <td>$645,750</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Olivia Liang</td>
                              <td>Support Engineer</td>
                              <td>Singapore</td>
                              <td>64</td>
                              <td>2011/02/03</td>
                              <td>$234,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Bruno Nash</td>
                              <td>Software Engineer</td>
                              <td>London</td>
                              <td>38</td>
                              <td>2011/05/03</td>
                              <td>$163,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Sakura Yamamoto</td>
                              <td>Support Engineer</td>
                              <td>Tokyo</td>
                              <td>37</td>
                              <td>2009/08/19</td>
                              <td>$139,575</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Thor Walton</td>
                              <td>Developer</td>
                              <td>New York</td>
                              <td>61</td>
                              <td>2013/08/11</td>
                              <td>$98,540</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Finn Camacho</td>
                              <td>Support Engineer</td>
                              <td>San Francisco</td>
                              <td>47</td>
                              <td>2009/07/07</td>
                              <td>$87,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Serge Baldwin</td>
                              <td>Data Coordinator</td>
                              <td>Singapore</td>
                              <td>64</td>
                              <td>2012/04/09</td>
                              <td>$138,575</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Zenaida Frank</td>
                              <td>Software Engineer</td>
                              <td>New York</td>
                              <td>63</td>
                              <td>2010/01/04</td>
                              <td>$125,250</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Zorita Serrano</td>
                              <td>Software Engineer</td>
                              <td>San Francisco</td>
                              <td>56</td>
                              <td>2012/06/01</td>
                              <td>$115,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Jennifer Acosta</td>
                              <td>Junior Javascript Developer</td>
                              <td>Edinburgh</td>
                              <td>43</td>
                              <td>2013/02/01</td>
                              <td>$75,650</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Cara Stevens</td>
                              <td>Sales Assistant</td>
                              <td>New York</td>
                              <td>46</td>
                              <td>2011/12/06</td>
                              <td>$145,600</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Hermione Butler</td>
                              <td>Regional Director</td>
                              <td>London</td>
                              <td>47</td>
                              <td>2011/03/21</td>
                              <td>$356,250</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Lael Greer</td>
                              <td>Systems Administrator</td>
                              <td>London</td>
                              <td>21</td>
                              <td>2009/02/27</td>
                              <td>$103,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Jonas Alexander</td>
                              <td>Developer</td>
                              <td>San Francisco</td>
                              <td>30</td>
                              <td>2010/07/14</td>
                              <td>$86,500</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Shad Decker</td>
                              <td>Regional Director</td>
                              <td>Edinburgh</td>
                              <td>51</td>
                              <td>2008/11/13</td>
                              <td>$183,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Michael Bruce</td>
                              <td>Javascript Developer</td>
                              <td>Singapore</td>
                              <td>29</td>
                              <td>2011/06/27</td>
                              <td>$183,000</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                              <td>Donna Snider</td>
                              <td>Customer Support</td>
                              <td>New York</td>
                              <td>27</td>
                              <td>2011/01/25</td>
                              <td>$112,000</td>
                            </tr>
                            <!-- end row -->
                          </tbody>
                          <tfoot>
                            <!-- start row -->
                            <tr>
                              <th>Name</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                            </tr>
                            <!-- end row -->
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- ---------------------
                                        end Zero Configuration
                                    ---------------- -->
                </div>
              </div>
            </div>
            {{-- END Database Table --}}

        </div>
    </div>

</x-app-layout>

<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../assets/js/apex-chart/apex.line.init.js"></script>


