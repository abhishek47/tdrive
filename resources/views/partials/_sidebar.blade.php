 <!--sidebar start-->
            <aside id="aside" class="ui-aside" style="min-height: 1000px;">
                <ul class="nav" ui-nav>
                    <li class="nav-head">
                        <h5 class="nav-title text-uppercase light-txt">Navigation</h5>
                    </li>

                     <li class="{{ isset($page) ? ($page == 'home' ? 'active' : '') : ''   }}">
                        <a href="/branch:{{ $branch->id }}/home"><i class="fa fa-home"></i><span> Dashboard </span></a>
                        
                    </li>

                     <li class="{{ isset($page) ? ($page == 'vehicles' ? 'active' : '') : ''   }}">
                        <a href=""><i class="fa fa-car"></i><span>Vehicles</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="#"><a href="{{ route('vehicles', ['branch' => $branch->id]) }}"><span>All Vehicles<small class="label label-success">10</small></span></span></a></li>
                            <li><a href="{{ route('vehicles.create', ['branch' => $branch->id]) }}"><span>Add New Vehicle</span></a></li>
                            <li><a href="{{ route('vehicles', ['branch' => $branch->id]) }}"><span>Track Vehicles<small class="label label-primary">3 In Transit</small></span></a></li>
                           
                        </ul>
                    </li>

                     <li class="{{ isset($page) ? ($page == 'people' ? 'active' : '') : ''   }}">
                        <a href=""><i class="fa fa-users"></i><span>People</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="#"><a href=""><span>List People<small class="label label-success">10</small></span></span></a></li>
                            <li><a href="#"><span>Add New Person</span></a></li>
                            
                           
                        </ul>
                    </li>


                    


                    <li class="{{ isset($page) ? ($page == 'customers' ? 'active' : '') : ''   }}">
                        <a href=""><i class="fa fa-building"></i><span>Customers</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="#"><a href=""><span>Our Customers<small class="label label-success">10</small></span></span></a></li>
                            <li><a href="#"><span>Add New Customer</span></a></li>
                            
                           
                        </ul>
                    </li>


                    <li class="{{ isset($page) ? ($page == 'consignments' ? 'active' : '') : ''   }}">
                        <a href=""><i class="fa fa-th"></i><span>Consignments</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="#"><a href=""><span>Manage Consignments<small class="label label-success">10</small></span></span></a></li>
                            <li><a href="#"><span>Add New Consignment</span></a></li>
                            
                           
                        </ul>
                    </li class="{{ isset($page) ? ($page == 'home' ? 'active' : '') : ''   }}">


                     <li class="nav-head">
                        <h5 class="nav-title text-uppercase light-txt">Analytics</h5>
                    </li>


                    <li class="{{ isset($page) ? ($page == 'accounts' ? 'active' : '') : ''   }}">
                        <a href=""><i class="fa fa-money"></i><span>Accounts</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="#"><a href=""><span>Manage Sales<small class="label label-success">10</small></span></span></a></li>
                            <li class="#"><a href=""><span>Manage Purchases<small class="label label-danger">10</small></span></span></a></li>
                            <li><a href="#"><span>Manage Payrolls</span></a></li>
                            
                           
                        </ul>
                    </li>


                    <li class="{{ isset($page) ? ($page == 'reports' ? 'active' : '') : ''   }}">
                        <a href=""><i class="fa fa-bar-chart"></i><span>Reports</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub">
                            <li class="#"><a href=""><span>Profit &amp; Loss<small class="label label-success">10</small></span></span></a></li>
                            <li class="#"><a href=""><span>Company Stats<small class="label label-danger">10</small></span></span></a></li>
                            <li><a href="#"><span>Journey Reports</span></a></li>
                            
                           
                        </ul>
                    </li>


                     <li class="nav-head">
                        <h5 class="nav-title text-uppercase light-txt">Extras</h5>
                    </li>

                    <li class="{{ isset($page) ? ($page == 'quotes' ? 'active' : '') : ''   }}">
                        <a href="/home"><i class="fa fa-home"></i><span> Manage Quotations </span></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href="/home"><span>Manage Quotations</span></a></li>
                        </ul>
                    </li>

                    <li class="{{ isset($page) ? ($page == 'estimate' ? 'active' : '') : ''   }}">
                        <a href="/home"><i class="fa fa-truck"></i><span> Trip Estimation </span></a>
                        <ul class="nav nav-sub">
                            <li class="nav-sub-header"><a href="/home"><span>Trip Estimation</span></a></li>
                        </ul>
                    </li>


                   
                </ul>
            </aside>
            <!--sidebar end-->