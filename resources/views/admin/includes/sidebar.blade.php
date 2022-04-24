<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <div class="sidebar">


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

            <li class="nav-item">
                <a href="{{route('admin')}}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.mark.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-car"></i>
                    <p>
                        Марка авто
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.car.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-car-side"></i>
                    <p>
                        Модель авто
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-archive"></i>
                    <p>
                       Категория заказа

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.subcategory.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-voicemail"></i>
                    <p>
                       Подкатегория

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.product.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Продукт

                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-user-cog"></i>
                    <p>
                        Кабинет админа

                    </p>
                </a>
            </li>

        </ul>
    </div>

</aside>
