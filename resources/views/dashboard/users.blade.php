@extends('layouts.dashboard')
@section('title_page')
<title>Usuarios</title>
@endsection

@section('content')
<div class="fbg_home">
    <div class="fbg_instruction-space">
        <p>Usuarios</p>
    </div>
    <div class="fbg_content-space">

        <h2>Solicitudes Pendientes</h2>
        <div id="fbg_res_tab" class="section-pendientes">

            <!-- Item -->
            @foreach($all_users as $user)
            <div class="fbg_item_tab" id="itemList{{ $user->id }}">
                <div class="fbg_itemtabdisplay">
                    <span>{{ $user->id }}</span>
                    <span>{{ $user->name }}</span>
                    <span><a onclick="openItemTable('userTable{{ $user->id }}')">ver completo</a></span>
                    <span><a onclick="deleteUser(`itemList{{ $user->id }}`,`{{ $user->id }}`,`{{ route('dashboard.deleteuser') }}`)">Eliminar</a></span>
                </div>
                <!-- Rut+id -->
                <div id="userTable{{ $user->id }}" class="fbg_itemtabhidden">
                    <span>{{ $user->email }}</span>
                    <div class="UserPermisos">
                        <form action="">
                            <input onchange="checkPrivate('id del usuario','checkInput+id del usuario+nombre permiso')" type="checkbox" value="valor del check actualmente" id="checkInput+id del usuario+nombre permiso" { { $blog->private==1 ? 'checked' : '' } } >
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /Item -->

        </div>
        <hr>
        <div>
            <h2>Crear Usuario</h2>
            <div>
                <input id="create-name" type="text" name="name" placeholder="nombre">
                <input id="create-email" type="text" name="email" placeholder="email">
                <input id="create-password" type="password" name="password" placeholder="contraseña">
                <input id="create-re-password" type="password" name="re-password" placeholder="contraseña">
                <input id="create-tipousuario" type="number" name="tipo_usuario" placeholder="tipo de usuario">
                <a onclick="createUser(`{{ route('dashboard.createuser') }}`)">Crear Usuario</a>
            </div>
        </div>
        <hr>
        <div>
            <h2>Registrar Permiso</h2>
            <form action="{{ route('dashboard.createpermiso') }}" method="post">
                {{ csrf_field() }}
                <input type="text" name="nombre" placeholder="nombre">
                <input type="text" name="estado" placeholder="estado">
                <button type="submit">Crear</button>
                @if (\Session::has('msg_crearpermiso'))
                <p>{{ Session::get('msg_crearpermiso') }}</p>
                @endif
            </form>
        </div>
        <h2>Permisos y páginas habilitadas</h2>
        <div id="fbg_res_tab" class="section-pendientes">

            <!-- Item -->
            @foreach($all_permisos as $permiso)
            <div class="fbg_item_tab" id="itemListPer{{ $permiso->id }}">
                <div class="fbg_itemtabdisplay">
                    <span>{{ $permiso->id }}</span>
                    <span>{{ $permiso->nombre }}</span>
                    <span>{{ $permiso->estado }}</span>
                    <span><a onclick="deleteUser(`itemList{{ $permiso->id }}`,`{{ $permiso->id }}`,`{{ route('dashboard.deleteuser') }}`)">Eliminar</a></span>
                </div>
                <!-- Rut+id -->
                <div id="userTablePer{{ $permiso->id }}" class="fbg_itemtabhidden">
                    <span>{{ $permiso->name }}</span>
                </div>
            </div>
            @endforeach
            <!-- /Item -->

        </div>

    </div>
</div>

<script>
    var routeDeleteUser = "{{ route('dashboard.deleteuser') }}";
</script>
<script src="{{ asset('js/dashboard/user-app.js') }}"></script>
@endsection