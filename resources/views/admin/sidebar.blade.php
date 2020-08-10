<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{ url('assets/images/logo-misia.svg') }}" class="img-fluid">
        </div>

        <div class="user">
            
            <div class="name">
                {{ Auth::user()->name }}
                    <a href=" {{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Salir">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
            </div>
            <div class="email">{{ Auth::user()->email }}</div>

        </div>
    </div>

    <div class="main">
        <ul>
            <li>
                <a href="{{ url('/admin') }}">Administración</a>
            </li>
            <li>
                <a href="{{ url('/products') }}"><i class="fas fa-box"></i>Productos</a>
            </li>
            <li>
                <a href="{{ url('/admin/users') }}"><i class="fas fa-users"></i>Usuarios</a>
            </li>
        </ul>
    </div>
</div>
