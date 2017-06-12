<nav id="sidebar-left" class="sidebar mcs-overflow">
    <ul class="sb-header m-b-20" >
        <li class="dp-trigger" data-dp-action="left-sidebar-toggle" data-dp-target="#sidebar-left">
            <a href=""><span class="header-logo m-r-20">betagro compare</span><i class="menu-icon zmdi zmdi-arrow-left"></i></a>
        </li>
    </ul>
    <div class="nav-menu-wrapper mcs-overflow1">
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="<?php echo site_url('dashboard/home');?>"><i class="zmdi zmdi-palette"></i>&nbsp;<span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a href="<?php echo site_url('compare/choose_menu1_page');?>"><i class="zmdi zmdi-apps"></i>&nbsp;<span>Compare Food</span></a>

            </li>

            <li class="nav-item">
                <a href="" class="mega-menu-toggle" data-dp-action="submenu-toggle"><i class="multi-level zmdi zmdi-border-color"></i>&nbsp;<span>Setting</span></a>
                <ul class="mega-menu">
                    <li><a href="<?php echo site_url('food/food_page');?>">Foods</a></li>
                    <li><a href="<?php echo site_url('material/raw_page');?>">Materials</a></li>
                    <li><a href="<?php echo site_url('product/product_page');?>">Betagro Products</a></li>
                    <li><a href="<?php echo site_url('man/man_page');?>">Man & Equipments</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
