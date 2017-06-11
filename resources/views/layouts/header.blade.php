        <header class="main-header">
            <!-- Logo -->
            <a href="{{url('/')}}" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>SPK</b></span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>SPK MAPRES 2014</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-envelope-o"> <span class="badge" id="totalNotif">7</span></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">Anda memiliki komentar baru</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu" id="notif">
                        </ul>

                      </li>
                    </ul>
                  </li>

                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src="https://ieboost.com/wp-content/uploads/2015/11/hassanmir.png" class="user-image" alt="User Image">
                      <span>{{Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="https://ieboost.com/wp-content/uploads/2015/11/hassanmir.png" class="img-circle" alt="User Image">
                      </li>
                      <!-- Menu Body -->
                      <li class="user-body">
                        <div class="col-xs-4 text-center">
                          <a href="{{ url('profile/timeline') }}">Timeline</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="{{ url('profile/edit') }}">Edit Profile</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="{{ url('profile/password') }}">Change Password</a>
                        </div>
                      </li>
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="{{ url('profile') }}" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                              Logout
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
            <input type="hidden" name="" id="statusUser" value="{{Auth::user()->id_role}}">

          </header>
