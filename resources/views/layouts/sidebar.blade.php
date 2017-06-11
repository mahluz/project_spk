		          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="https://ieboost.com/wp-content/uploads/2015/11/hassanmir.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p></p>
                  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
              </div>
              <!-- search form -->
              <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="q" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              </form>
              <!-- /.search form -->
              <!-- sidebar menu: : style can be found in sidebar.less -->
              <ul class="sidebar-menu">
                  <li class="header">MAIN NAVIGATION</li>

                  <li class="treeview">
                    <a href="{{url('Beranda')}}">
                      <i class="fa fa-desktop"></i> <span>Beranda</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li>
                  <li class="treeview">
                    <a href="{{url('dataSiswa')}}">
                      <i class="fa fa-male"></i> <span>Data Siswa</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li>
                  <li class="treeview">
                    <a href="{{url('statistik')}}">
                      <i class="fa fa-bar-chart-o"></i> <span>Statistik Data Siswa</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li>
                  <li class="treeview">
                    <a href="{{url('pencarian')}}">
                      <i class="fa fa-search"></i> <span>Pencarian Rekomendasi</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                  </li>
                  <li class="">
                    <a href="">
                      <i class="fa fa-user"></i>
                       <span>Profile</span>
                    </a>
                  </li>
              </ul>
            </section>
            <!-- /.sidebar -->
          </aside>
