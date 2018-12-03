<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/storage/imagens/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{Auth::user()->name}}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
              </ul>
            </li> -->
            <li class="treeview">
                <a href="#">
                  <i class="fa fa-barcode"></i>
                  <span>Produtos</span>
                  <span class="pull-right-container">
                    <span class="label label-success pull-right">2</span>
                  </span>
                </a>
                <ul class="treeview-menu">
                   
                  <li><a href="/category"><i class="glyphicon glyphicon-list-alt"></i> Categorias</a></li>
                  <li><a href="/product"><i class="fa fa-shopping-basket"></i> Produtos</a></li>
                </ul>
              </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Pedidos</span>
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">4</span>
                </span>
              </a>
              <ul class="treeview-menu">
               
                <li><a href="#"><i class="glyphicon glyphicon-list"></i> Pedidos</a></li>
                <li><a href="/calendar"><i class="fa fa-calendar"></i> Calendario</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-address-book"></i>
                <span>Painel</span>
                <span class="pull-right-container">
                  <span class="label label-warning pull-right">2</span>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/"><i class="fa fa-user"></i> Usuarios</a></li>
                <li><a href="/professions"><i class="fa fa-id-card"></i> Profissões</a></li>
              </ul>
            </li>
            
            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Graficos</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li> -->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>