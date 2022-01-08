<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- search form -->

            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                        <!-- <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>Examples</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>

                        </ul>
                        </li> -->

                    <li><a href="{{ route('admin.company.index') }}"><i class="fa fa-user"></i> <span>COMPANY</span></a></li>
                    <li><a href="{{ route('admin.employe.index') }}"><i class="fa fa-book"></i> <span>EMPLOYEES</span></a></li>

                    <li><a href="{{ route('admin.author.index') }}"><i class="fa fa-user"></i> <span>PENULIS BUKU</span></a></li>
                    <li><a href="{{ route('admin.book.index') }}"><i class="fa fa-book"></i> <span>DAFTAR BUKU</span></a></li>
                    <li><a href="{{ route('admin.borrow.index') }}"><i class="fa fa-book"></i> <span>DAFTAR BUKU DI PINJAM</span></a></li>

                    <li class="treeview">
                        <a href="#">
                          <i class="fa fa-pie-chart"></i>
                          <span>Laporan</span>
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('admin.report.top-user')}}"><i class="fa fa-circle-o"></i> DATA USER </a></li>
                          <li><a href="{{ route('admin.report.top-book')}}"><i class="fa fa-circle-o"></i> LAPORAN DATA BUKU </a></li>

                        </ul>
                      </li>
                    {{--  <li><a href="#"><i class="fa fa-users"></i> <span>USER</span></a></li>
                    <li><a href="#"><i class="fa fa-book"></i> <span>INFORMASI</span></a></li>  --}}

                <li class="header">LABELS</li>
                    {{--  <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>  --}}
            </ul>
    </section>
    <!-- /.sidebar -->
  </aside>























