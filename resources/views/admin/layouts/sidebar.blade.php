<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!--<a href="index3.html" class="brand-link">-->
    <!--    <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"-->
    <!--         style="opacity: .8">-->
    <!--    <span class="brand-text font-weight-light">پنل مدیریت</span>-->
    <!--</a>-->

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{auth()->user()->avatar}}"
                         class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{auth()->user()->username}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route("articles.index")}}"
                           class="nav-link {{Route::currentRouteName()=='articles.index'?'active':''}}">
                            <i class="nav-item fa fa-dashboard"></i>
                            مقالات
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category.index')}}"
                           class="nav-link {{Route::currentRouteName()=='category.index'?'active':''}}">
                            <i class="nav-item fa fa-dashboard"></i>
                            دسته بندی ها
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('comment.index')}}"
                           class="nav-link {{Route::currentRouteName()=='comment.index'?'active':''}}">
                            <i class="nav-item fa fa-dashboard"></i>
                              نظرات و پیشنهادات
                        </a>
                    </li>
                </ul>
                </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
