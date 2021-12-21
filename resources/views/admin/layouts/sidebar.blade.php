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

{{--                        <a href="{{route('admin.admin.index')}}"--}}
{{--                           class="nav-link {{Route::currentRouteName()=='admin.admin.index'?'active':''}}">--}}
{{--                            <i class="nav-item fa fa-dashboard"></i>--}}
{{--                            پنل مدیریت</a>--}}
                    </li>
{{--                    @can('show-users')--}}
{{--                        <li class="nav-item has-treeview  {{isActive(['admin.users.index','admin.users.index','admin.users.index'],'menu-open')}}">--}}
{{--                            <a href="#" class="nav-link {{isActive('admin.users.index')}}">--}}
{{--                                <i class="nav-icon fa fa-users"></i>--}}
{{--                                <p>--}}
{{--                                    کاربران--}}
{{--                                    <i class="right fa fa-angle-left"></i>--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                            <ul class="nav nav-treeview">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="{{route('admin.users.index')}}"--}}
{{--                                       class="nav-link {{isActive('admin.users.index')}}">--}}
{{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
{{--                                        <p> لیست کاربران</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    @endcan--}}
{{--                    @can('show-news')--}}
{{--                        <li class="nav-item has-treeview  {{isActive(['admin.news.index','admin.news.index','admin.news.index'],'menu-open')}}">--}}
{{--                            <a href="#" class="nav-link {{isActive('admin.news.index')}}">--}}
{{--                                <i class="fa fa-envelope"></i>--}}
{{--                                <p>--}}
{{--                                    اخبار--}}
{{--                                    <i class="right fa fa-angle-left"></i>--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                            <ul class="nav nav-treeview">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="{{route('admin.news.index')}}"--}}
{{--                                       class="nav-link {{isActive('admin.news.index')}}">--}}
{{--                                        <i class="fa fa-circle-o nav-icon"></i>--}}
{{--                                        <p> لیست اخبار</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    @endcan--}}
{{--                    @can('show-category')--}}
{{--                        <li class="nav-item has-treeview  {{isActive(['admin.category.index','admin.category.index','admin.category.index'],'menu-open')}}">--}}
{{--                            <a href="#" class="nav-link {{isActive('admin.category.index')}}">--}}
{{--                                <i class="fa fa-list-alt" aria-hidden="true"></i>--}}
{{--                                <p>--}}
{{--                                    دسته بندی--}}
{{--                                    <i class="right fa fa-angle-left"></i>--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                            <ul class="nav nav-treeview">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="{{route('admin.category.index')}}"--}}
{{--                                       class="nav-link {{isActive('admin.category.index')}}">--}}
{{--                                        <i class="fa fa-list-alt" aria-hidden="true"></i>--}}
{{--                                        <p> لیست دسته بندی</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    @endcan--}}
{{--                    @can('manager-comment-list')--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route('admin.comment.index')}}"--}}
{{--                               class="nav-link {{isActive('admin.comment.index')}}">--}}
{{--                                <i class="fa fa-comment"></i>--}}
{{--                                <p>--}}
{{--                                    نظرات--}}
{{--                                    <i class="right fa fa-angle-left"></i>--}}

{{--                                </p>--}}

{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endcan--}}
                    <i class="fas fa-comment-alt"></i>



                    @can('show-category')
                        <li class="nav-item has-treeview  {{isActive(['admin.messages.index ','admin.category.index','admin.category.index'],'menu-open')}}">
                            <a href="#" class="nav-link {{isActive('admin.messages.index ')}}">
                                <i class="fa fa-comment-alt"></i>
                                <p>
                                    پیام ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.messages.index')}}"
                                       class="nav-link {{isActive('admin.messages.index')}}">
                                        <i class="fa fa-comment-alt"></i>
                                        <p> لیست پیام ها</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan


                   @can('manager-file-uploader')--}}
                   <li class="nav-item">
                       <a href="{{route('admin.file.index',auth()->user()->id)}}"
                          class="nav-link {{isActive('admin.file.index')}}">
                           <i class="fa fa-upload" aria-hidden="true"></i>
                           <p>
                               فایل آپلودر
                               <i class="right fa fa-angle-left"></i>
                           </p>

                       </a>
                   </li>
                                       @endcan
                    @can('manager-permissions-list')
                        <li class="nav-item has-treeview  {{isActive(['admin.permission.index','admin.roles.index'],'menu-open')}}">
                            <a href="#" class="nav-link {{isActive('admin.permission.index')}}">
                                {{--                            <i class="nav-icon fa fa-newspaper-o"></i>--}}
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:v="https://vecta.io/nano" width="24"

              height="24" fill="#fff">
                                    <path
                                        d="M16.768 7.949a.937 1.287 0 0 0-1.324-1.819l-5.582 7.671-2.46-3.381a.937 1.287 0 0 0-1.324 1.819l3.122 4.29a.937 1.287 0 0 0 1.324 0l6.244-8.58z"/>
                                    <path
                                        d="M12.576.637a1.75 1.75 0 0 0-1.08 0l-8.25 2.675a1.75 1.75 0 0 0-1.21 1.664V10c0 6.19 3.77 10.705 9.401 12.83.386.145.812.145 1.198 0 5.63-2.126 9.401-6.64 9.401-12.83V4.976a1.75 1.75 0 0 0-1.21-1.664L12.576.637zm-.617 1.426a.25.25 0 0 1 .154 0l8.25 2.676a.25.25 0 0 1 .173.237V10c0 5.461-3.28 9.483-8.43 11.426a.2.2 0 0 1-.14 0C6.816 19.483 3.536 15.46 3.536 10V4.976c0-.108.069-.203.173-.237l8.25-2.676z"
                                        fill-rule="evenodd"/>
                                </svg>

                                <p>
                                    اجازه دسترسی ها
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @can('manager-roles-list')
                                    <li class="nav-item">
                                        <a href="{{route('admin.roles.index')}}"
                                           class="nav-link {{isActive('admin.roles.index')}}">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p> همه مقام ها </p>
                                        </a>
                                    </li>
                                @endcan

                                @can('show-permissions')
                                    <li class="nav-item">
                                        <a href="{{route('admin.permissions.index')}}"
                                           class="nav-link {{isActive('admin.roles.index')}}">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p> همه دسترسی ها </p>
                                        </a>
                                    </li>

                                @endcan



                            </ul>

                    @endcan
                    <li class="nav-item">
                        <a href="{{route('admin.users.profile',auth()->user()->id)}}"
                           class="nav-link {{isActive('admin.users.profile')}}">
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            <p> پروفایل</p>
                        </a>
                    </li>

{{--                                @can('manager_comment')--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="{{route('admin.comment.index')}}"--}}
{{--                                           class="nav-link {{isActive('admin.comment.index ')}}">--}}
{{--                                            <i class="fa fa-circle-o nav-icon"></i>--}}
{{--                                            <p> نظرات تایید نشده </p>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                @endcan--}}


                            </ul>
                        </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
