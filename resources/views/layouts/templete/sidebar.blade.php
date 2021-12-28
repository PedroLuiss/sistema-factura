<div class="left-side-menu left-side-menu-detached" style="margin-top: 99px; position: fixed">
    <div class="leftbar-user">
        <a href="javascript: void(0);">
            <img src="{{ asset('img/placeholder.png') }}" alt="user-image" height="60" class="rounded-circle shadow-sm">
                 <span class="leftbar-user-name">{{ Auth::user()->name.' '.Auth::user()->apellido }}</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="metismenu side-nav side-nav-light">

        <li class="side-nav-title side-nav-item">Navegacion</li>
    @if(Auth::user()->rol == 'cliente')
        <li class="side-nav-item active">
            <a href="{{ url('usuarios') }}" class="side-nav-link">
                <i class="dripicons-user-group"></i>
                <span>Compra</span>
            </a>
        </li>
    @endif
    @if(Auth::user()->rol == 'admin')

        <li class="side-nav-item active">
            <a href="{{ route('user.index') }}" class="side-nav-link">
                <i class="dripicons-user-group"></i>
                <span>Lista Usuario</span>
            </a>
        </li>
        <li class="side-nav-item ">
            <a href="{{ route('producto.index')}}" class="side-nav-link">
                <i class="dripicons-archive"></i>
                <span>Productos</span>
            </a>
        </li>
        <li class="side-nav-item ">
            <a href="{{route('compra.index')}}" class="side-nav-link">
                <i class="dripicons-box"></i>
                <span>Compras Pendientes</span>
            </a>
        </li>
        <li class="side-nav-item ">
            <a href="{{ route('factura.index') }}" class="side-nav-link">
                <i class="dripicons-box"></i>
                <span>Facturas</span>
            </a>
        </li>

 
    @endif 
    </ul>
</div>