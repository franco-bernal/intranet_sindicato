@extends('layouts.dashboard')
@section('title_page')
<title>Solicitudes</title>
@endsection

@section('content')
<div class="fbg_home">
    <div class="fbg_instruction-space">
        <h4>Solicitudes de incorporación</h4>
        <p>En esta sección podrá ver en la lista todas las
            personas que han enviado solicitudes.
        </p>
        <h4>Cambiar estado</h4>
        <p>El estado de cada solicitud puede ser cambiado a
            visto, rechazado y archivado; en la lista en la sección de
            cada solicitud a la derecha
        </p>
    </div>
    <div class="fbg_content-space">
        <h2>Solicitudes Pendientes</h2>
        <div id="fbg_res_tab" class="section-pendientes">
            <!-- Item -->
            @forelse($solicitudes as $solicitud)
            @if($solicitud->status=='pendiente')
            <div class="fbg_item_tab" id="item{{ $solicitud->rut }}{{ $solicitud->id }}">
                <div class="fbg_itemtabdisplay">
                    <span>id:{{ $solicitud->id }}</span>
                    <span>{{ $solicitud->fec_ingreso }}</span>
                    <span>{{ $solicitud->nombre }}</span>
                    <span><a onclick="openItemTable('{{ $solicitud->rut }}{{ $solicitud->id }}')">ver completo</a></span>
                </div>
                <!-- Rut+id -->
                <div id="{{ $solicitud->rut }}{{ $solicitud->id }}" class="fbg_itemtabhidden">
                    <span><strong>Nombre: </strong> {{ $solicitud->nombre }} {{ $solicitud->apellido }}</span>
                    <span><strong>Rut: </strong>{{ $solicitud->rut }}</span>
                    <span><strong>Fecha ingreso: </strong>{{ $solicitud->fec_ingreso }}</span>
                    <span><strong>Area: </strong>{{ $solicitud->area }}</span>
                    <span><strong>Contacto: </strong>{{ $solicitud->tel }}</span>
                    <span id="fbg_statusSolicitud" class="status_{{ $solicitud->status }}">Estado: <a onclick="">{{ $solicitud->status }}</a></span>
                    <div class="fbg_cambioStatus">
                        <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 2,'{{ $solicitud->rut }}')" class="en-espera">en espera</a>
                        <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 1,'{{ $solicitud->rut }}')" class="aprobar">aprobar</a>
                        <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 0,'{{ $solicitud->rut }}')" class="rechazar">rechazar</a>
                    </div>
                </div>
            </div>
            @endif
            @empty
            <p>Vacío</p>
            @endforelse
            <!-- /Item -->
        </div>

        <h2>En Revision</h2>
        <div id="fbg_res_tab" class="section-revision">
            <!-- Item -->
            @forelse($solicitudes as $solicitud)
            @if($solicitud->status=='revision')
            <div class="fbg_item_tab" id="item{{ $solicitud->rut }}{{ $solicitud->id }}">
                <div class="fbg_itemtabdisplay">
                    <span>id:{{ $solicitud->id }}</span>
                    <span>{{ $solicitud->fec_ingreso }}</span>
                    <span>{{ $solicitud->nombre }}</span>
                    <span><a onclick="openItemTable('{{ $solicitud->rut }}{{ $solicitud->id }}')">ver completo</a></span>
                </div>
                <!-- Rut+id -->
                <div id="{{ $solicitud->rut }}{{ $solicitud->id }}" class="fbg_itemtabhidden">
                    <span><strong>Nombre: </strong> {{ $solicitud->nombre }} {{ $solicitud->apellido }}</span>
                    <span><strong>Rut: </strong>{{ $solicitud->rut }}</span>
                    <span><strong>Fecha ingreso: </strong>{{ $solicitud->fec_ingreso }}</span>
                    <span><strong>Area: </strong>{{ $solicitud->area }}</span>
                    <span><strong>Contacto: </strong>{{ $solicitud->tel }}</span>
                    <span id="fbg_statusSolicitud" class="status_{{ $solicitud->status }}">Estado: <a onclick="">{{ $solicitud->status }}</a></span>
                    <div class="fbg_cambioStatus">
                        <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 1,'{{ $solicitud->rut }}')" class="aprobar">aprobar</a>
                        <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 0,'{{ $solicitud->rut }}')" class="rechazar">rechazar</a>
                    </div>
                </div>
            </div>
            @endif
            @empty
            <p>Vacío</p>
            @endforelse
            <!-- /Item -->
        </div>


    </div>

    <h2>Reintentos</h2>
    <div id="fbg_res_tab" class="section-reintentos">
        <!-- Item -->
        @forelse($solicitudes as $solicitud)
        @if($solicitud->status=='reintento')
        <div class="fbg_item_tab" id="item{{ $solicitud->rut }}{{ $solicitud->id }}">
            <div class="fbg_itemtabdisplay">
                <span>id:{{ $solicitud->id }}</span>
                <span>{{ $solicitud->fec_ingreso }}</span>
                <span>{{ $solicitud->nombre }}</span>
                <span><a onclick="openItemTable('{{ $solicitud->rut }}{{ $solicitud->id }}')">ver completo</a></span>
            </div>
            <!-- Rut+id -->
            <div id="{{ $solicitud->rut }}{{ $solicitud->id }}" class="fbg_itemtabhidden">
                <span><strong>Nombre: </strong> {{ $solicitud->nombre }} {{ $solicitud->apellido }}</span>
                <span><strong>Rut: </strong>{{ $solicitud->rut }}</span>
                <span><strong>Fecha ingreso: </strong>{{ $solicitud->fec_ingreso }}</span>
                <span><strong>Area: </strong>{{ $solicitud->area }}</span>
                <span><strong>Contacto: </strong>{{ $solicitud->tel }}</span>
                <span id="fbg_statusSolicitud" class="status_{{ $solicitud->status }}">Estado: <a onclick="">{{ $solicitud->status }}</a></span>
                <div class="fbg_cambioStatus">
                    <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 2,'{{ $solicitud->rut }}')" class="en-espera">en espera</a>
                    <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 1,'{{ $solicitud->rut }}')" class="aprobar">aprobar</a>
                    <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 0,'{{ $solicitud->rut }}')" class="rechazar">rechazar</a>
                </div>
            </div>
        </div>
        @endif
        @empty

        <p>Vacío</p>
        @endforelse
        <!-- /Item -->
    </div>
    <h2>Solicitudes Aprobadas</h2>
    <div id="fbg_res_tab" class="section-aprobados">
        <!-- Item -->
        @forelse($solicitudes as $solicitud)
        @if($solicitud->status=='aprobado')
        <div class="fbg_item_tab" id="item{{ $solicitud->rut }}{{ $solicitud->id }}">
            <div class="fbg_itemtabdisplay">
                <span>id:{{ $solicitud->id }}</span>
                <span>{{ $solicitud->fec_ingreso }}</span>
                <span>{{ $solicitud->nombre }}</span>
                <span><a onclick="openItemTable('{{ $solicitud->rut }}{{ $solicitud->id }}')">ver completo</a></span>
            </div>
            <!-- Rut+id -->
            <div id="{{ $solicitud->rut }}{{ $solicitud->id }}" class="fbg_itemtabhidden">
                <span><strong>Nombre: </strong> {{ $solicitud->nombre }} {{ $solicitud->apellido }}</span>
                <span><strong>Rut: </strong>{{ $solicitud->rut }}</span>
                <span><strong>Fecha ingreso: </strong>{{ $solicitud->fec_ingreso }}</span>
                <span><strong>Area: </strong>{{ $solicitud->area }}</span>
                <span><strong>Contacto: </strong>{{ $solicitud->tel }}</span>
                <span id="fbg_statusSolicitud" class="status_{{ $solicitud->status }}">Estado: <a onclick="">{{ $solicitud->status }}</a></span>
                <div class="fbg_cambioStatus">
                    <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 2,'{{ $solicitud->rut }}')" class="en-espera">en espera</a>
                    <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 0,'{{ $solicitud->rut }}')" class="rechazar">rechazar</a>
                </div>
            </div>
        </div>
        @endif
        @empty

        <p>Vacío</p>
        @endforelse
        <!-- /Item -->
    </div>
    <h2>Solicitudes Rechazadas</h2>
    <div id="fbg_res_tab" class="section-rechazados">
        <!-- Item -->
        @forelse($solicitudes as $solicitud)
        @if($solicitud->status=='rechazado')
        <div class="fbg_item_tab" id="item{{ $solicitud->rut }}{{ $solicitud->id }}">
            <div class="fbg_itemtabdisplay">
                <span>id:{{ $solicitud->id }}</span>
                <span>{{ $solicitud->fec_ingreso }}</span>
                <span>{{ $solicitud->nombre }}</span>
                <span><a onclick="openItemTable('{{ $solicitud->rut }}{{ $solicitud->id }}')">ver completo</a></span>
            </div>
            <!-- Rut+id -->
            <div id="{{ $solicitud->rut }}{{ $solicitud->id }}" class="fbg_itemtabhidden">
                <span><strong>Nombre: </strong> {{ $solicitud->nombre }} {{ $solicitud->apellido }}</span>
                <span><strong>Rut: </strong>{{ $solicitud->rut }}</span>
                <span><strong>Fecha ingreso: </strong>{{ $solicitud->fec_ingreso }}</span>
                <span><strong>Area: </strong>{{ $solicitud->area }}</span>
                <span><strong>Contacto: </strong>{{ $solicitud->tel }}</span>
                <span id="fbg_statusSolicitud" class="status_{{ $solicitud->status }}">Estado: <a onclick="">{{ $solicitud->status }}</a></span>
                <div class="fbg_cambioStatus">
                    <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 2,'{{ $solicitud->rut }}')" class="en-espera">en espera</a>
                    <a onclick="changeStatus('item{{ $solicitud->rut }}{{ $solicitud->id }}','{{ $solicitud->id }}', 1,'{{ $solicitud->rut }}')" class="aprobar">aprobar</a>
                </div>
            </div>
        </div>
        @endif
        @empty

        <p>Vacío</p>
        @endforelse
        <!-- /Item -->
    </div>
</div>
<script src="{{ asset('js/dashboard/res-table.js') }}"></script>
<script src="{{ asset('js/dashboard/incorporacion.js') }}"></script>
<script>
    function changeStatus(elemId, id, status, rut) {
        elemId = "#" + elemId;
        let status_section;

        if (status == 0 || status == 1 || status == 2) {
            if (status == 0) {
                status_section = "section-rechazados";
            }
            if (status == 1) {
                status_section = "section-aprobados";
            }
            if (status == 2) {
                status_section = "section-revision";
            }


            changeStatusAjax(elemId, id, status, status_section, "{{ route('solicitud.status') }}", rut);
        }
    }
</script>

@endsection