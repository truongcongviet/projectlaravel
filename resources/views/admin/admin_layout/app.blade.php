<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="/admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="/admin/css/theme.css" rel="stylesheet">
        <link type="text/css" href="/admin/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        @include('admin.admin_layout.header')
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Thống kê
                                </a></li>
                                <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>Tin mới </a>
                                </li>
        
                                <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tạo bài viết <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Bảng Data </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>BIểu đồ</a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>Thêm Thông Tin </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.html"><i class="icon-inbox"></i>Đăng Nhập</a></li>
                                        <li><a href="other-user-profile.html"><i class="icon-inbox"></i>Thông Tin cá nhân </a></li>
                                        <li><a href="other-user-listing.html"><i class="icon-inbox"></i>Tất cả người dùng </a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="menu-icon icon-signout"></i>Đăng xuất </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>

                    @yield('content')

                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        @include('admin.admin_layout.footer')
        @include('admin.admin_layout.script')
       
      
    </body>
