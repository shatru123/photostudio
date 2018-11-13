<div class="sidebar-section">
<div class="sidebar-section__scroll">
    {{--<!--<div class="sidebar-section__user has-background">--}}
      {{--<img src="img/users/user-19.png" alt="" class="sidebar-section__user-avatar rounded-circle">--}}

      {{--<div class="dropdown sidebar-section__user-dropdown">--}}
        {{--<a class="dropdown-toggle sidebar-section__user-dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
          {{--Joyce Walsh--}}
        {{--</a>--}}
        {{--<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
          {{--<a class="dropdown-item" href="#">Settings</a>--}}
          {{--<a class="dropdown-item" href="#">Help</a>--}}
          {{--<a class="dropdown-item" href="#">Sign Out</a>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>-->--}}

    <div class="sidebar-user-a">
        <img src="{{asset('images/backend/img/users/user-19.png')}}" alt="" class="sidebar-user-a__avatar rounded-circle">
        <div class="sidebar-user-a__name">{{ Auth::user()->name }}</div>
        <div class="sidebar-user-a__desc">Product Manager</div>

        <a href="#" class="btn icon-left sidebar-user-a__link">
            Personal Account <span class="btn-icon ua-icon-user-solid"></span>
        </a>
    </div>

    <div>
        <div class="sidebar-section__separator">Main</div>
        <ul class="sidebar-section-nav">
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                    <span class="sidebar-section-nav__item-icon ua-icon-home"></span>
                    <span class="sidebar-section-nav__item-text">Dashboard</span>
                    <span class="badge sidebar-section-nav__badge">2</span>
                </a>
                <ul class="sidebar-section-subnav">
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="index.html">Default Dashboard</a></li>
                </ul>
            </li>
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="">
                    <span class="sidebar-section-nav__item-icon iconfont-control-panel"></span>
                    <span class="sidebar-section-nav__item-text">Photos</span>
                </a>
            </li>
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                    <span class="sidebar-section-nav__item-icon iconfont-layout"></span>
                    <span class="sidebar-section-nav__item-text">Custom Layouts</span>
                </a>
                <ul class="sidebar-section-subnav">
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../custom-layouts/simple/index.html" target="_blank">Simple</a></li>
                </ul>
            </li>
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                    <span class="sidebar-section-nav__item-icon iconfont-layout"></span>
                    <span class="sidebar-section-nav__item-text">Page Layouts</span>
                </a>
                <ul class="sidebar-section-subnav">
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sidebar-md.html">Medium Sidebar</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="container-md.html">Medium Container</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="boxed-layout.html">Boxed Layout</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="full-height-content.html">Full Height Content</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="menu-and-content.html">Menu and Content</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sidebar-a.html">Sidebar (a)</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="sidebar-b.html">Sidebar (b)</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="ecommerce-navbar.html">E-commerce Navbar</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="simple-navbar.html">Simple Navbar</a></li>
                </ul>
            </li>
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                    <span class="sidebar-section-nav__item-icon ua-icon-ui"></span>
                    <span class="sidebar-section-nav__item-text">UI Features</span>
                </a>
                <ul class="sidebar-section-subnav">
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="alerts.html">Alerts</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="breadcrumbs.html">Breadcrumbs</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="badges.html">Badges</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="collapse.html">Collapse</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="colors.html">Colors</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="pagination.html">Pagination</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="progress.html">Progress</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="modal.html">Modal</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tables.html">Tables</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tabs.html">Tabs</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="tooltips-and-popovers.html">Tooltips &amp; Popovers</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="typography.html">Typography</a></li>
                </ul>
            </li>
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                    <span class="sidebar-section-nav__item-icon ua-icon-grid"></span>
                    <span class="sidebar-section-nav__item-text">Widgets</span>
                </a>
                <ul class="sidebar-section-subnav">
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-cards.html">Card Widgets</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-social.html">Social Widgets</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-ecommerce.html">E-commerce Widgets</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="widgets-statistic.html">Statistic Widgets</a></li>
                </ul>
            </li>
        </ul>

        <div class="sidebar-section__separator">Apps</div>

        <ul class="sidebar-section-nav">
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="../apps/prototype/index.html" target="_blank">
                    <span class="sidebar-section-nav__item-icon ua-icon-navbar-open"></span>
                    <span class="sidebar-section-nav__item-text">Prototype</span>
                </a>
            </li>

            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                    <span class="mdi mdi-account-multiple sidebar-section-nav__item-icon"></span>
                    <span class="sidebar-section-nav__item-text">CRM</span>
                </a>
                <ul class="sidebar-section-subnav">
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/crm/index.html" target="_blank">Empty State</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="../apps/crm/dataset.html" target="_blank">Dataset</a></li>
                </ul>
            </li>
        </ul>

        <div class="sidebar-section__separator">Form</div>

        <ul class="sidebar-section-nav">
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                    <span class="mdi mdi-radiobox-marked sidebar-section-nav__item-icon"></span>
                    <span class="sidebar-section-nav__item-text">Basic Elements</span>
                </a>
                <ul class="sidebar-section-subnav">
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="inputs.html">Inputs</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="input-group.html">Input Group</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="buttons.html">Buttons</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="checkbox-radio.html">Checkbox &amp; Radio</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="select.html">Select</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-mask-input.html">Mask Input</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-float-labels.html">Float Labels</a></li>
                </ul>
            </li>
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="form-validation.html">
                    <span class="mdi mdi-format-pilcrow sidebar-section-nav__item-icon"></span>
                    <span class="sidebar-section-nav__item-text">Form Validation</span>
                </a>
            </li>
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                    <span class="mdi mdi-step-forward sidebar-section-nav__item-icon"></span>
                    <span class="sidebar-section-nav__item-text">Form Wizard</span>
                </a>
                <ul class="sidebar-section-subnav">
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard.html">Form Wizard</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-a.html">Form Wizard (a)</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-b.html">Form Wizard (b)</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-c.html">Form Wizard (c)</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-d.html">Form Wizard (d)</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="form-wizard-e.html">Form Wizard (e)</a></li>
                </ul>
            </li>
        </ul>

        <div class="sidebar-section__separator">Tables</div>

        <ul class="sidebar-section-nav">
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link sidebar-section-nav__link-dropdown" href="#">
                    <span class="mdi mdi-grid-large sidebar-section-nav__item-icon"></span>
                    <span class="sidebar-section-nav__item-text">Dataset</span>
                </a>
                <ul class="sidebar-section-subnav">
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="dataset-table.html">Table</a></li>
                    <li class="sidebar-section-subnav__item"><a class="sidebar-section-subnav__link" href="dataset-grid.html">Grid</a></li>
                </ul>
            </li>
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="tables.html">
                    <span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>
                    <span class="sidebar-section-nav__item-text">Static Tables</span>
                </a>
            </li>
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="datatables.html">
                    <span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>
                    <span class="sidebar-section-nav__item-text">DataTables</span>
                </a>
            </li>
            <li class="sidebar-section-nav__item">
                <a class="sidebar-section-nav__link" href="spreadsheet.html">
                    <span class="mdi mdi-view-grid sidebar-section-nav__item-icon"></span>
                    <span class="sidebar-section-nav__item-text">Spreadsheet</span>
                </a>
            </li>
        </ul>




    </div>



</div>
</div>
