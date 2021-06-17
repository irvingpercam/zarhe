<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/distribuidores">Distribuidores</a></li>
            <li><a href="/niveles">Niveles</a></li>
            <li><a href="/reembolsos">Reembolsos</a></li>
            <li><a href="/productos">Productos</a></li>
            <li><a href="/tipos">Tipos</a></li>
            <li><a href="/ventas">Ventas</a></li>
            <li><a href="/asignaciones">Asignaciones</a></li>
            <li><a href="/operaciones">Operaciones</a></li>
            <li><a href="/usuarios">Usuarios</a></li>
            <li><a href="/roles">Roles</a></li>
            <li><a href="/privilegios">Privilegios</a></li>
            <li><a href="/redes-distribuidores">Redes de distribuidores</a></li>
            <li><a href="/historial-ventas">Historial de ventas</a></li>
            <li><a href="/reportes-mensuales">Reportes mensuales</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>