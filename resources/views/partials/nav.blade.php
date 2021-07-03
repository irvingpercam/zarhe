<nav>
    <ul>
        <li class="{{setActive('home')}}"><a href=" {{ route('home') }} ">Home</a></li>
        <li class="{{setActive('distribuidores')}}"><a href=" {{ route('distribuidores') }} ">Distribuidores</a></li>
        <li class="{{setActive('nrequerido.*')}}"><a href=" {{ route('nrequerido.index') }} ">Niveles</a></li>
        <li class="{{setActive('reembolsos')}}"><a href=" {{ route('reembolsos') }} ">Reembolsos</a></li>
        <li class="{{setActive('productos')}}"><a href=" {{ route('productos') }} ">Productos</a></li>
        <li class="{{setActive('tipos.*')}}"><a href=" {{ route('tipos.index') }} ">Tipos</a></li>
        <li class="{{setActive('ventas')}}"><a href=" {{ route('ventas') }} ">Ventas</a></li>
        <li class="{{setActive('asignaciones')}}"><a href=" {{ route('asignaciones') }} ">Asignaciones</a></li>
        <li class="{{setActive('operaciones')}}"><a href=" {{ route('operaciones') }} ">Operaciones</a></li>
        <li class="{{setActive('usuarios')}}"><a href=" {{ route('usuarios') }} ">Usuarios</a></li>
        <li class="{{setActive('roles.*')}}"><a href=" {{ route('roles.index') }} ">Roles</a></li>
        <li class="{{setActive('privilegios')}}"><a href=" {{ route('privilegios') }} ">Privilegios</a></li>
        <li class="{{setActive('redes-distribuidores')}}"><a href=" {{ route('redes-distribuidores') }} ">Redes de distribuidores</a></li>
        <li class="{{setActive('historial-ventas')}}"><a href=" {{ route('historial-ventas') }} ">Historial de ventas</a></li>
        <li class="{{setActive('reportes-mensuales')}}"><a href=" {{ route('reportes-mensuales') }} ">Reportes mensuales</a></li>
        <li class="{{setActive('contacto')}}"><a href=" {{ route('contacto') }} ">Contacto</a></li>
    </ul>
</nav>