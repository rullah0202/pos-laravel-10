    <div class="left-side-menu">

        <div class="h-100" data-simplebar>

            <!-- User box -->
            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul id="side-menu">

                    <li class="menu-title">Navigation</li>
                
                    <li>
                        <a href="{{ url('/dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                            <span> Dashboards </span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('pos') }}">
                            <span class="badge bg-pink float-end">Hot</span>
                        <i class="mdi mdi-view-dashboard-outline"></i>
                            <span> POS </span>
                        </a>
                    </li>

                    <li class="menu-title mt-2">Apps</li>

                    <li>
                        <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                            <i class="mdi mdi-cart-outline"></i>
                            <span> Employee Manage  </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="nav-second-level">
                                
                                <li>
                                    <a href="{{ route('all.employee') }}">All Employee</a>
                                </li>

                                <li>
                                    <a href="{{ route('add.employee') }}">Add Employee </a>
                                </li>

                            </ul>
                        </div>
                    </li>

            <li>
                <a href="#sidebarCrm" data-bs-toggle="collapse">
                    <i class="mdi mdi-account-multiple-outline"></i>
                    <span> Customer Manage   </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCrm">
                    <ul class="nav-second-level">

    <li>
        <a href="{{route('all.customer')}}">All Customer</a>
    </li>

    <li>
        <a href="{{route('all.customer')}}">Add Customer</a>
    </li>

                         
                    </ul>
                </div>
            </li>

        <li>
            <a href="#sidebarEmail" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Supplier Manage </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEmail">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{route('all.supplier')}}">All Supplier</a>
                    </li>                    
                    <li>
                        <a href="{{route('add.supplier')}}">Add Supplier</a>
                    </li>                    
                </ul>
            </div>
        </li>

        <li>
            <a href="#salary" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Employee Salary </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="salary">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('add.advance.salary') }}">Add Advance Salary</a>
                    </li>
                    <li>
                        <a href="{{ route('all.advance.salary') }}">All Advance Salary</a>
                    </li>

                     <li>
                        <a href="{{ route('pay.salary') }}">Pay Salary</a>
                    </li> 

                    <li>
                        <a href="{{ route('month.salary') }}">Last Month Salary</a>
                    </li>
                    
                </ul>
            </div>
        </li>



 
        <li>
            <a href="#attendence" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Employee Attendence </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="attendence">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('employee.attend.list') }}">Employee Attendence List </a>
                    </li>
                
                </ul>
            </div>
        </li>


        <li>
            <a href="#category" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Category </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="category">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{route('all.category')}}">All Category </a>
                    </li>
                
                </ul>
            </div>
        </li>

         <li>
            <a href="#product" data-bs-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Products  </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="product">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.product') }}">All Product </a>
                    </li>

                     <li>
                        <a href="{{ route('add.product') }}">Add Product </a>
                    </li>
                     <li>
                        <a href="{{ route('import.product') }}">Import Product </a>
                    </li>
                
                </ul>
            </div>
        </li>


 <li>
    <a href="#orders" data-bs-toggle="collapse">
        <i class="mdi mdi-email-multiple-outline"></i>
        <span> Orders  </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="orders">
        <ul class="nav-second-level">
            <li>
                <a href="{{ route('pending.order') }}">Pending Orders </a>
            </li>

             <li>
                <a href="{{ route('complete.order') }}">Complete Orders </a>
            </li>

            <li>
                <a href="{{ route('pending.due') }}">Pending Due </a>
            </li>
            
        
        </ul>
    </div>
</li>

 <li>
    <a href="#stock" data-bs-toggle="collapse">
        <i class="mdi mdi-email-multiple-outline"></i>
        <span> Stock Manage   </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="stock">
        <ul class="nav-second-level">
            <li>
                <a href="{{ route('stock.manage') }}">Stock </a>
            </li>
 
        
        </ul>
    </div>
</li>

 <li>
    <a href="#permission" data-bs-toggle="collapse">
        <i class="mdi mdi-email-multiple-outline"></i>
        <span> Roles And Permission    </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="permission">
        <ul class="nav-second-level">
            <li>
                <a href="">All Permission </a>
            </li>

            <li>
                <a href="">All Roles </a>
            </li>

             <li>
                <a href="">Roles in Permission </a>
            </li>

             <li>
                <a href="">All Roles in Permission </a>
            </li>
 
        
        </ul>
    </div>
</li>


 <li>
    <a href="#admin" data-bs-toggle="collapse">
        <i class="mdi mdi-email-multiple-outline"></i>
        <span> Setting Admin User    </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="admin">
        <ul class="nav-second-level">
            <li>
                <a href="">All Admin </a>
            </li>

            <li>
                <a href="">Add Admin </a>
            </li> 
        
        </ul>
    </div>
</li>
                            
                          

                            <li class="menu-title mt-2">Custom</li>

 
                        <li>
                            <a href="#sidebarAuth" data-bs-toggle="collapse">
                                <i class="mdi mdi-account-circle-outline"></i>
                                <span>Expense </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarAuth">
    <ul class="nav-second-level">
        <li>
            <a href="{{ route('add.expense') }}">Add Expense</a>
        </li>
        <li>
            <a href="{{ route('today.expense') }}">Today Expense</a>
        </li>
        <li>
            <a href="{{ route('month.expense') }}">Monthly Expense</a>
        </li>
        <li>
            <a href="{{ route('year.expense') }}">Yearly Expense</a>
        </li>
        
    </ul>
                            </div>
                        </li>


    <li>
                            <a href="#backup" data-bs-toggle="collapse">
                                <i class="mdi mdi-account-circle-outline"></i>
                                <span>Database Backup  </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="backup">
    <ul class="nav-second-level">
        <li>
            <a href="{{ route('database.backup') }}">Database Backup </a>
        </li> 
        
    </ul>
           </div>
          </li>



                         

                         
 
                          

                               
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>