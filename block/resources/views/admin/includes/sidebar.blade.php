<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('admin.user') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Пользователи
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.post') }}" class="nav-link">
                    <i class="nav-icon far fa-clipboard"></i>
                    <p>
                        Посты
                    </p>
                </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.category') }}" class="nav-link">
                <i class="nav-icon fas fa-th-list"></i>
                <p>
                  Категории
                </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tag') }}" class="nav-link">
                  <i class="nav-icon fas fa-tags"></i>
                  <p>
                    Теги
                  </p>
                </a>
              </li>
        </ul>
    </div>
    <!-- /.sidebar -->
  </aside>
