  <aside class="main-sidebar sidebar-light-primary elevation-4">
     <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{ asset('assets/admin/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/admin/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         @can('user_management_access')
           <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-lock"></i>
              <p>
               إدارة المستخدمين            
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>المستخدمين</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('permissions.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>الصلاحيات</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('roles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>الرولز</p>
                </a>
              </li>
            </ul>
          </li>
         @endcan
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                إعدادات النظام
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('initial.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>رصيد أول الفترة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('monthlyprice.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>الإسعار</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li> --}}
            </ul>
          </li> 
           <li class="nav-item">
            <a href="{{route('petrol91.index')}}" class="nav-link">
              <i class="nav-icon fas fa-expand-arrows-alt"></i>
              <p>
                91                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('diesel.index')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                الديزل                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('petrol95.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th-large"></i>
              <p>
                95                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('kaz.index')}}" class="nav-link">
              <i class="nav-icon fa fa-lightbulb"></i>
              <p>
                كاز                  
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('water.index')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                ماء                 
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               إدارة البنوك            
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('banks.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>جميع البنوك</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('transaction_bank.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>تقارير البنوك</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-lightbulb"></i>
              <p>
              المخزون              
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('repository91.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>بنزين 91</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('repositorydiesel.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ديزل</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('repository95.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>بنزين 95</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('repositorykaz.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>كاز </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
               <p>
               إدارة الإنشطة            
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('actitvity.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>جميع الإنشطة</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('transaction_actitvity.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>تقارير الإنشطة</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('box.index')}}" class="nav-link">
              <i class="nav-icon fa fa-circle"></i>
              <p>
                الصندوق                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-lightbulb"></i>
               <p>
               إدارة نقاط البيع            
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sellingpoints.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>جميع نقاط البيع</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sellingpoints.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>تقارير نقاط البيع</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('readings.index')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                القراءات                 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('meran.index')}}" class="nav-link">
              <i class="nav-icon fa fa-lightbulb"></i>
              <p>
                الميزان                 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('hesnya.index')}}" class="nav-link">
              <i class="nav-icon fa fa-lightbulb"></i>
              <p>
                حصينة                 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('delayed.index')}}" class="nav-link">
              <i class="nav-icon fa fa-lightbulb"></i>
              <p>
                أجلة                 
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{route('claims.index')}}" class="nav-link">
              <i class="nav-icon fa fa-lightbulb"></i>
              <p>
                مطالبات                  
              </p>
            </a>
          </li>
          <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>
                </li>
      {{--  @can('repository')
           <li class="nav-item">
            <a href="{{route('repository.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               مستودعات الفروع  
                
              </p>
            </a>
          </li>
        @endcan
        @can('reports')
           <li class="nav-item">
            <a href="{{route('reports.index')}}" class="nav-link">
              <i class="nav-icon fa fa-id-card"></i>
              <p>
               التقارير 
                
              </p>
            </a>
          </li>
        @endcan --}}
          {{-- <li class="nav-item">
            <a href="{{route('reports.index')}}" class="nav-link">
              <i class="nav-icon fa fa-id-card"></i>
              <p>
               المرفقات 
                
              </p>
            </a>
          </li> --}}
          {{-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                المصاريف والمخالفات
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('spending.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> المصاريف</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('car.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> المركبات</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route(ribution.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> توزيع المركبات اليومي</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('violation.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> مخالفات المركبات</p>
                </a>
              </li>
            </ul>
          </li> --}}
 
         {{--      <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e_commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project_add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project_edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project_detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>