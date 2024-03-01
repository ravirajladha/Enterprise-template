<x-app-layout>

    <style>
       .product-tree {
  font-family: Arial, sans-serif;
  line-height: 1.5;
}

.tree {
  list-style-type: none;
}

.tree .toggle {
  cursor: pointer;
  font-weight: bold;
  margin-right: 5px;
}

.tree .quantity {
  float: right;
  margin-right: 10px;
}

.nested {
  display: block; /* set children to be visible by default */
  margin-left: 20px;
}


    </style>


    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Treeview</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="../main/index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Treeview</li>
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

            {{-- <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <h4 class="card-title">Warehouse Tree</h4>
                                    <div id="treeview1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}


            <div class="product-tree">
                <ul class="tree">
                    <li>
                        <span class="toggle px-3">+</span> Manufacturing
                        
                        <ul class="nested">
                            <li>
                                <span class="toggle px-4 pt-3">+</span> Arena Two
                                <ul class="nested">
                                    <li class="px-5 ">Product A<span class="quantity">₹ 0.00</span></li>
                                    <li class="px-5">Product B<span class="quantity">₹ 0.00</span></li>
                                    <li class="px-5">Product C<span class="quantity">₹ 0.00</span></li>
                                    <li class="px-5">Product D<span class="quantity">₹ 0.00</span></li>
                                    <!-- Add more rooms and shelves as needed -->
                                </ul>
                            </li>
                            
                            
                            <!-- Repeat for other arenas, manufacturing, etc. -->
                        </ul>
                        <span class="toggle px-3">+</span> Manufacturing
                        
                        <ul class="nested">
                            <li>
                                <span class="toggle px-4 pt-3">+</span> Arena Two
                                <ul class="nested">
                                    <li class="px-5 ">Product A<span class="quantity">₹ 0.00</span></li>
                                    <li class="px-5">Product B<span class="quantity">₹ 0.00</span></li>
                                    <li class="px-5">Product C<span class="quantity">₹ 0.00</span></li>
                                    <li class="px-5">Product D<span class="quantity">₹ 0.00</span></li>
                                    <!-- Add more rooms and shelves as needed -->
                                </ul>
                            </li>
                            
                            
                            <!-- Repeat for other arenas, manufacturing, etc. -->
                        </ul>
                        <span class="toggle px-3">+</span> Manufacturing
                        
                        <ul class="nested">
                            <li>
                                <span class="toggle px-4 pt-3">+</span> Arena Two
                                <ul class="nested">
                                    <li class="px-5 ">Product A<span class="quantity">₹ 0.00</span></li>
                                    <li class="px-5">Product B<span class="quantity">₹ 0.00</span></li>
                                    <li class="px-5">Product C<span class="quantity">₹ 0.00</span></li>
                                    <li class="px-5">Product D<span class="quantity">₹ 0.00</span></li>
                                    <!-- Add more rooms and shelves as needed -->
                                </ul>
                            </li>
                            
                            
                            <!-- Repeat for other arenas, manufacturing, etc. -->
                        </ul>

                        
                    </li>
                    <!-- Repeat for other main categories -->
                </ul>
            </div>


        </div>
    </div>
    

</x-app-layout>

<script src="../assets/libs/bootstrap-tree/dist/bootstrap-treeview.min.js"></script>
<script src="../assets/js/plugins/bootstrap-treeview-init.js"></script>

<script>
   document.addEventListener('DOMContentLoaded', function() {
    var toggles = document.querySelectorAll('.toggle');
    toggles.forEach(function(toggle) {
        // Set default toggle text to "[-]" since lists are expanded
        toggle.textContent = '[-]';
        toggle.addEventListener('click', function() {
            this.textContent = this.textContent === '-' ? '+' : '-';
            var nestedList = this.nextElementSibling;
            while(nestedList && nestedList.tagName !== 'UL') {
                nestedList = nestedList.nextElementSibling;
            }
            if (nestedList) {
                nestedList.style.display = nestedList.style.display === 'block' ? 'none' : 'block';
            }
        });
    });
});


</script>