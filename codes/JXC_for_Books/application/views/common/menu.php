            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-gear fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/setting"><i class="fa fa-gear fa-fw"></i> 设置</a>
                        </li>
                    </ul>
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> 登出</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav in" id="side-menu">
				        <li>
				            <a id="base" href="/base"><i class="fa fa-tachometer fa-fw"></i> 基础信息管理<span class="fa arrow"></span></a>
				            <ul class="nav nav-second-level collapse">
				                <li>
				                    <a id="base_users" href="/c_users">用户管理</a>
				                </li>
				                <li>
				                    <a id="base_goods" href="/c_goods">商品管理</a>
				                </li>
				                <li>
				                    <a id="base_suppliers" href="/c_suppliers">供应商管理</a>
				                </li>
				                <li>
				                    <a id="base_clientss" href="/c_clients">客户管理</a>
				                </li>
				            </ul>
				        </li>     
				        <li>
				            <a id="purchase" href="/purchase"><i class="fa fa-tachometer fa-fw"></i> 进货管理<span class="fa arrow"></span></a>
				            <ul class="nav nav-second-level collapse">
				                <li>
				                    <a id="purchase_typelists" href="/c_purchase/index">进货单管理</a>
				                </li>
				                <li>
				                </li>
				                <li>
				                </li>
				                <li>
				                </li>
				                <li>
				                </li>
				            </ul>
				        </li>				                       
				        <li>
				            <a id="stock" href="/stock"><i class="fa fa-tachometer fa-fw"></i> 库存管理<span class="fa arrow"></span></a>
				            <ul class="nav nav-second-level collapse">
				                <li>
				                    <a id="stock_users" href="/c_stock/stockcommodity">库存商品查询管理</a>
				                </li>
				                <li>
				                    <a id="stock_users" href="/c_stock/stockwarning">库存警告管理</a>
				                </li>
				                <li>
				                    <a id="stock_users" href="/c_stock/stockbill">库存单据查询管理</a>
				                </li>
				            </ul>
				        </li>    
				        <li>
				            <a id="sales" href="/sales"><i class="fa fa-tachometer fa-fw"></i> 销售管理<span class="fa arrow"></span></a>
				            <ul class="nav nav-second-level collapse">
				                <li>
				                    <a id="sales_users" href="/s_querys">前台销售</a>
				                </li>
				                <li>
				                    <a id="sales_users" href="/s_querys">库存盘点</a>
				                </li>
				            </ul>
				        </li> 
                    </ul>                                                
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>