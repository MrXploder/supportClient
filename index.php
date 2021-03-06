<?php require $_SERVER['DOCUMENT_ROOT'] . '/app/php/functions/versionControll.php'; ?>
<!DOCTYPE html>
<html ng-app="angularApp" ng-controller="mainController as mc" ng-strict-di>

<head>
  <title>supportApp</title>
  <!--META-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <base href="http://www.tecnomixtura.cl/app/" target="_blank">
  <!--NOSCRIPT-->
  <noscript>
    <meta http-equiv="Refresh" content="0; URL=./nojs.html"></noscript>
  <link rel="manifest" href="/app/manifest.json">
  <!--No descuidar el orden de los archivos CCS y JS-->
  <!--CSS DEPENDENCIES-->
  <link rel="stylesheet" href="/app/css/materialize.css">
  <link rel="stylesheet" href="/app/css/materialize-stickyfooter.css">
  <link rel='stylesheet' href="/app/css/loading-bar.css">
  <link rel="stylesheet" href="/app/css/spinkit.css">
  <link rel="stylesheet" href="/app/css/fontawesome.css">
  <link rel="stylesheet" href="/app/css/webfont.css">
  <!--JAVASCRIPT DEPENDENCIES-->
  <script src="/app/js/dependencies/jquery.js"></script>
  <script src="/app/js/dependencies/angular.js"></script>
  <script src="/app/js/dependencies/materialize.js"></script>
  <script src="/app/js/dependencies/angular-html5storage.js"></script>
  <script src="/app/js/dependencies/angular-loadingBar.js?v=<?php echo $versionControll ?>"></script>
  <script src="/app/js/dependencies/angular-dirPagination.js"></script>
  <script src="/app/js/dependencies/angular-materialize.js"></script>
  <script src="/app/js/dependencies/FileSaver.js"></script>
  <script src="/app/js/dependencies/xlsx.full.min.js"></script>
  <!--ANGULARJS-APP-->
  <!--ANGULAR MODULES-->
  <script src="/app/js/modules/appMixtura.js?v=<?php echo $versionControll ?>"></script>
  <!--ANGULAR FILTERS-->
  <script src="/app/js/filters/datealt.js"></script>
  <script src="/app/js/filters/myFullDateFormat.js"></script>
  <script src="/app/js/filters/myFullDateFormatAlt.js"></script>
  <script src="/app/js/filters/myShortDateFormatAlt.js"></script>
  <!--ANGULAR RUNS-->
  <script src="/app/js/runs/navigatorOnline.js"></script>
  <!--ANGULAR DIRECTIVES-->
  <script src="/app/js/directives/stringToNumber.js"></script>
  <!--ANGULAR CONTROLLERS-->
  <script src="/app/js/controllers/apps.js?v=<?php echo $versionControll ?>"></script>
  <!--CUSTOM STYLES -->
  <style>
    nav ul li a {
      color: black;
    }

    nav a {
      color: black;
    }

    html {
      /*font-family: 'Alegreya Sans SC';*/
      font-family: 'Ubuntu Condensed', sans-serif;
      font-weight: 1000;
    }

    th {
      text-align: center !important;
      vertical-align: middle !important;
    }

    .clickable {
      cursor: pointer;
    }

    .condensed-table tr th {
      line-height: 0px;
    }

    .condensed-table td {
      padding: 6px 5px;
    }

    .trunkated-table {
      width: 100%;
      table-layout: fixed;
    }

    .colored-table th {
      background-color: #4caf50;
      color: white;
    }

    .colored-table-green th {
      background-color: #4caf50;
      color: white;
    }

    .colored-table-amber th {
      background-color: #ffc107;
      color: black;
    }

    .colored-table-deeporange th {
      background-color: #ff5722;
      color: black;
    }

    .colored-table-blue th {
      background-color: #2196f3;
      color: black;
    }

    .btn-small {
      height: 100%;
      width: 100%;
      line-height: 25px;
      padding: 0 0.5rem;
    }

    .btn {
      width: 100%;
    }

    .btnForTable {
      padding: 0 0rem !important;
    }

    .modal-topbordered {
      border-top-style: solid;
      border-top-width: 10px;
    }

    .green-topbordered {
      border-top-color: #4CAF50;
    }

    .purple-topbordered {
      border-top-color: #9c27b0;
    }

    .red-topbordered {
      border-top-color: #f44336;
    }

    .screenCentered {
      position: fixed;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    .modalEditableInput {
      color: #2196f3;
    }

    .vMiddle {
      vertical-align: middle;
    }

    .hCenter {
      text-align: center;
    }

    .sortedColumn {
      background-color: #ff9800 !important;
      color: #000000 !important;
    }

    .input-field label {
      color: black !important;
    }

    .underlined {
      border-bottom: solid 1px black !important;
    }

    [ng\:cloak],
    [ng-cloak],
    [data-ng-cloak],
    [x-ng-cloak],
    .ng-cloak,
    .x-ng-cloak {
      display: none !important;
    }

    @media only screen and (max-width: 992px) {
      table.responsive-table td {
        text-align: center !important;
      }
    }
  </style>
</head>

<body>
  <header>
    <div class="navbar">
      <nav class="white">
        <div class="nav-wrapper">
          <a href="#"><img src="/app/img/mixtura-logo.png" style="width: 150px; height: 63px"></img></a>
        </div>
        </li>
        <ng-form name="lg">
          <li>
            <div input-field class="container row">
              <i class="fas fa-user-tie prefix"></i>
              <label for="userName" class="active">Nombre de Usuario</label>
              <input type="text" id="userName" ng-model="mc.form.name" required>
            </div>
          </li>
          <li>
            <div input-field class="container row">
              <i class="fas fa-key prefix"></i>
              <label for="userPass" class="active">Contraseña</label>
              <input type="password" id="userPass" ng-model="mc.form.pass" required>
            </div>
          </li>
          <li>
            <div class="container">
              <a class="btn waves-effect waves-light blue" ng-click="mc.logIn()" ng-disabled="!lg.$valid">LogIn</a>
            </div>
          </li>
        </ng-form>
        </ul>
        <ul id="apps-side-nav" class="side-nav fixed grey darken-4">
          <li>
            <div class="user-view">
              <div class="background">
                <img src="/app/img/sidenav-background.jpg">
              </div>
              <a><img class="circle center" ng-src="/app/img/avatar{{$storage.currentUser.avatar}}.png"></a>
              <br>
            </div>
          </li>
          <li><a href="#!/createTickets" class="white-text"><i class="fas fa-ticket-alt white-text"></i>Crear Tickets</a></li>
          <li><a href="#!/viewTickets" class="white-text"><i class="fas fa-toolbox white-text"></i>Administrar Tickets</a></li>
          <li><a href="#!/billTickets" class="white-text"><i class="fas fa-money-bill-alt white-text"></i>Facturar Tickets</a></li>
          <li>
            <div class="divider"></div>
          </li>
          <li><a href="#!/exit" class="white-text"><i class="fas fa-search white-text"></i>LogOut</a></li>
        </ul>
        <a class="btn-floating btn-large btn-flat waves-effect waves-light button-collapse hide-on-med-and-up" data-activates="apps-side-nav"><i class="fas fa-plus"></i></a>

  </header>
  <main>
    <div class="row">
      <div class="col l12 s12">
        <ng-include src="'/app/src/module/support/include/loader/template.html'" ng-show="mc.isRouteLoading"></ng-include>
        <ng-view ng-show="!mc.isRouteLoading"></ng-view>
      </div>
      <!-- END - MODAL - PROYECTOS -->

      <!-- START - MODAL - CLIENTES -->
      <div id="detalleClienteModal" class="modal modal-fixed-footer">
        <div class="modal-content modal-topbordered red-topbordered">

        </div>
        <div class="modal-footer">
          <div class="fixed-action-btn">
            <button ng-show="detalleClienteDisabled" ng-click="detalleClienteCheckDisabled()" type="button" class="btn-floating btn-large waves-effect waves-light blue"><i class="prefix fas fa-pencil-alt"></i></button>
            <button ng-show="detalleClienteDisabled" ng-click="closeModal('detalleClienteModal')" type="button" class="btn-floating btn-large waves-effect waves-light red"><i class="prefix fas fa-sign-out-alt"></i></button>
            <button ng-show="!detalleClienteDisabled" ng-click="guardarDetalleCliente()" type="button" class="btn-floating btn-large waves-effect waves-light green"><i class="prefix fas fa-check"></i></button>
            <button ng-show="!detalleClienteDisabled" ng-click="detalleClienteCheckDisabled()" type="button" class="btn-floating btn-large waves-effect waves-light red"><i class="prefix fas fa-times"></i></button>
          </div>
        </div>
      </div>
      <!-- END - MODAL - CLIENTES -->

      <!-- START - MODAL - TECHDATA SERVIDOR -->
      <div id="detalleTechDataServidorModal" class="modal modal-fixed-footer">
        <div class="modal-content modal-topbordered blue-topbordered">
          <div class="row">
            <div class="input-field">
              <i class="prefix fas fa-server" ng-class="modalEditableInput ? '':'modalEditableInput'"></i>
              <label for="detalletechdataservidorNombreServidor">Nombre del Servidor</label>
              <input type="text" id="detalletechdataservidorNombreServidor" ng-model="selectedTechDataServidor.nom_servidor" ng-disabled="modalEditableInput">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="fixed-action-btn">
            <button class="btn-floating btn-large waves-effect waves-light" ng-click="modalEditableInput ? editModalData():saveModalData('Servidores')" ng-class="modalEditableInput ? 'blue':'green'"><i ng-class="modalEditableInput ? 'fas fa-pencil-alt':'fas fa-save'"></i></button>
            <button class="btn-floating btn-large waves-effect waves-light red" ng-click="modalEditableInput ? exitModal('Servidores'):undoModalData('Servidores')"><i ng-class="modalEditableInput ? 'fas fa-eject':'fas fa-undo'"></i></button>
          </div>
        </div>
      </div>
      <!-- END - MODAL- TECHDATA SERVIDOR -->

      <!-- START - MODAL - TECHDATA EQUIPO -->

      <!-- END - MODAL - TECHDATA EQUIPOS -->

      <!-- START - APPCONTAINER -->
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l12">
            <ul class="collapsible popout" data-collapsible="accordion">
              <!-- START - ENCABEZADO ACORDEON -->
              <li ng-show="(isClient.status || isAdmin.status)">
                <div style="display: block" class="collapsible-header" ng-class="online ? 'green':'red'">
                  <div ng-class="online ? 'white-text':'black-text'">
                    <p style="text-align: left; font-size: 2.28rem;">{{isAdmin.status ? isAdmin.name : isClient.name}}<span style="float:right;"><i class="fas fa-times" ng-if="isAdmin.status" ng-click="logOut()"></i></span>
                    </p>
                  </div>
                </div>
              </li>
              <!-- END - ENCABEZADO ACORDEON -->

              <!-- START - CREAR TICKETS-->
              <li ng-show="(isClient.status || isAdmin.status)">
                <div class="collapsible-header" ng-class="online ? 'red':'white'"><i class="fas fa-ticket-alt"></i>Crear Ticket</div>
                <div class="collapsible-body">
                  <div class="container">
                    <ng-form name="ct_form">
                      <div class="row">
                        <h5 class="underlined">Rellena con tus datos personales</h5>
                      </div>
                      <div ng-show="isAdmin.status" class="row">
                        <div class="input-field">
                          <label for="newticketSelectCliente" ng-class="(newTicket.id_cliente != '') ? 'active' : ''">Nombre del Cliente</label>
                          <select id="newticketSelectCliente" class="validate" ng-model="newTicket.id_cliente" ng-options="cliente.id_cliente as cliente.nom_cliente for cliente in clientes" required material-select watch></select>
                        </div>
                      </div>
                      <div ng-show="isAdmin.status" class="row">
                        <div class="input-field">
                          <label for="newticketSelectPrioridad" ng-class="(newTicket.prioridad_tarea != '') ? 'active' : ''">Prioridad del Ticket</label>
                          <select id="newticketSelectPrioridad" class="validate" ng-model="newTicket.prioridad_tarea" required novalidate material-select watch>
                            <option value="0">Baja</option>
                            <option value="1">Normal</option>
                            <option value="2">Alta</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col l6 s12">
                          <div class="input-field">
                            <input id="newticketNombre" class="validate" ng-model="newTicket.nom_solicitante" type="text" required="required" placeholder="Escribe aqui tu nombre y apellido">
                            <label for="newticketNombre" ng-class="'active'">Tu Nombre</label>
                          </div>
                        </div>
                        <div class="col l6 s12">
                          <div class="input-field">
                            <input id="newticketEmail" class="validate" ng-model="newTicket.email_solicitante" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" required="required" placeholder="Escribe aqui tu correo de empresa">
                            <label for="newticketEmail" ng-class="'active'">Tu Email</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field">
                          <textarea id="newticketTextArea" ng-model="newTicket.desc_tarea" class="materialize-textarea validate" required="required" placeholder="Escribe aqui lo que necesitas que resolvamos por ti"></textarea>
                          <label for="newticketTextArea" ng-class="'active'">Tu Solicitud</label>
                        </div>
                      </div>
                      <div class="row">
                        <h5 class="underlined">Elige el tipo de Solicitud que mas se asemeje a tu problema</h5>
                      </div>
                      <div class="row">
                        <input id="newticketRadioSistema" ng-model="newTicket.tipo" type="radio" required="required" value="SISTEMA" />
                        <label for="newticketRadioSistema" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Sistema operativo, programas, etc.">SISTEMA</label>
                      </div>
                      <div class="row">
                        <input id="newticketRadioTecnica" ng-model="newTicket.tipo" type="radio" required="required" value="TECNICA" />
                        <label for="newticketRadioTecnica" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Mouse, teclado, piezas fisicas, desconexion intermitente, etc">TECNICA</label>
                      </div>
                      <div class="row">
                        <input id="newticketRadioSantiago" ng-model="newTicket.tipo" type="radio" required="required" value="SANTIAGO" />
                        <label for="newticketRadioSantiago" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Especifico para Santiago">SANTIAGO</label>
                      </div>
                      <div class="row">
                        <input id="newticketRadioOtro" ng-model="newTicket.tipo" type="radio" required="required" value="OTRO" />
                        <label for="newticketRadioOtro" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Si no sabe, eliga esta opción.">OTRO</label>
                      </div>
                      <div class="divider"></div>
                      <div class="row">
                        <div class="col l5 s6">
                          <button class="btn waves-effect waves-light green" type="submit" ng-disabled="ct_form.$invalid" ng-click="formSubmit('crearTicket')">Enviar<i class="fas fa-share right"></i></button>
                        </div>
                        <div class="col l5 offset-l2 s6">
                          <button class="btn waves-effect waves-light red" type="reset" ng-disabled="!newTicket" ng-click="newTicket = null">Reset<i class="fas fa-eraser right"></i></button>
                        </div>
                      </div>
                    </ng-form>
                  </div>
                </div>
              </li>
              <!-- END - CREAR TICKETS -->

              <!-- START - ADMINISTRAR TICKETS-->
              <li ng-show="(isClient.status || isAdmin.status)">
                <div class="collapsible-header" ng-class="online ? 'pink':'white'"><i class="fas fa-search"></i>Administrar Tickets</div>
                <div class="collapsible-body">
                  <div class="row">
                    <div class="input-field">
                      <i class="prefix fas fa-search"></i>
                      <input id="icon_prefix" ng-model="searchTermTickets" type="search">
                      <label for="icon_prefix">Buscar</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col l2 s12">
                      <label class="black-text">Solo mostrar Incompletos</label>
                      <div class="switch">
                        <label>Off<input type="checkbox" ng-model="notShowCompletedTicketSwitch"><span class="lever"></span>On</label>
                      </div>
                    </div>
                    <div class="col l3 offset-l2 s12">
                      <div class="input-field">
                        <label for="selectClienteForTicketFilter" ng-class="'active'">Solo Mostrar Tickets de:</label>
                        <select id="selectClienteForTicketFilter" ng-model="selectClienteForTicketFilter" ng-init="selectClienteForTicketFilter = '-1'" material-select watch>
                          <option value="-1">Todos</option>
                          <option ng-repeat="cliente in clientes" value="{{cliente.id_cliente}}">{{cliente.nom_cliente}}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col l3 offset-l2 s12">
                      <div class="input-field">
                        <label for="selectCantidadPaginasTicket" ng-class="'active'">Tareas por Pagina</label>
                        <select id="selectCantidadPaginasTicket" ng-model="selectCantidadPaginasTicket" ng-init="selectCantidadPaginasTicket = 5" material-select>
                          <option ng-value="5">5</option>
                          <option ng-value="10">10</option>
                          <option ng-value="25">25</option>
                          <option ng-value="50">50</option>
                          <option ng-value="100">100</option>
                          <option ng-value="250">250</option>
                          <option ng-value="500">500</option>
                          <option ng-value="1000">1000</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <table class="bordered highlight responsive-table trunkated-table colored-table">
                      <thead>
                        <tr>
                          <th ng-click="sortTypeTickets = '1*id_tarea'; sortReverseTickets = !sortReverseTickets" ng-class="sortTypeTickets == '1*id_tarea' ? 'sortedColumn':''" class="clickable">#</th>
                          <th>Nombre Solicitante</th>
                          <th ng-if="isAdmin.status">Cliente</th>
                          <th ng-if="isAdmin.status">Fecha de Creación</th>
                          <th>Fecha de Ejecución</th>
                          <th>Descripcion</th>
                          <th ng-click="sortTypeTickets = '1*cant_horas'; sortReverseTickets = !sortReverseTickets" ng-class="sortTypeTickets == '1*cant_horas' ? 'sortedColumn':''" class="clickable">Horas</th>
                          <th ng-click="sortTypeTickets = '1*porcentaje_avance'; sortReverseTickets = !sortReverseTickets" ng-class="sortTypeTickets == '1*porcentaje_avance' ? 'sortedColumn':''" class="clickable">Avance</th>
                          <th ng-if="isAdmin.status">Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr dir-paginate="ticket in filteredTickets = (tickets | filter: ((selectClienteForTicketFilter >= 0) || undefined) && {id_cliente : selectClienteForTicketFilter} | filter:(notShowCompletedTicketSwitch || undefined) && (porcentaje_avance = '!100') | filter:searchTermTickets | orderBy:sortTypeTickets:sortReverseTickets) | itemsPerPage: selectCantidadPaginasTicket track by ticket.id_tarea" pagination-id="ticketsPaginationId">
                          <td><a ng-click="isAdmin.status ? openModal('Tickets', ticket):''" class="btn btnForTable waves-effect waves-light blue">{{ticket.id_tarea}}</a></td>
                          <td class="vMiddle hCenter">{{ticket.nom_solicitante}}</td>
                          <td ng-if="isAdmin.status">{{ticket.nom_cliente}}</td>
                          <td ng-if="isAdmin.status">{{ticket.timestamp_ingreso | myFullDateFormat}}</td>
                          <td>{{ticket.timestamp_ejecucion ? ticket.timestamp_ejecucion:'No Disponible'}}</td>
                          <td class="vMiddle hCenter description tooltipped" data-position="right" data-delay="50" data-tooltip="{{ticket.desc_tarea}}" ng-class="isAdmin.status ? 'truncate' : ''">{{ticket.desc_tarea}}</td>
                          <td class="hCenter">{{ticket.cant_horas}}</td>
                          <td class="hCenter" ng-class="ticket.porcentaje_avance < 50 ? 'red-text text-accent-4':(ticket.porcentaje_avance < 99 ? 'yellow-text text-accent-4':'green-text text-accent-4')"><i ng-class="ticket.porcentaje_avance < 99 ? 'fa fa-exclamation-circle':'fa fa-thumbs-up'"></i>{{ticket.porcentaje_avance}}%</td>
                          <td ng-click="eliminarDatos('Ticket', ticket)" ng-if="isAdmin.status"><a class="btn btnForTable waves-effect waves-light red"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr ng-if="filteredTickets.length == 0">
                          <td colspan="2">Sin Coincidencias...</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  &nbsp;
                  <div class="row">
                    <dir-pagination-controls boundary-links="true" template-url="dirPagination.tpl.html" pagination-id="ticketsPaginationId" on-page-change="reloadToolTip()"></dir-pagination-controls>
                  </div>
                </div>
              </li>
              <!-- END - ADMINISTRAR TICKETS -->

              <!-- START FACTURAR TICKETS-->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'purple':'white'"><i class="fas fa-money-bill-alt"></i>Facturar Tickets</div>
                <div class="collapsible-body">
                  <div class="container">
                    <div class="row">
                      <div class="col l5 s12">
                        <div class="input-field">
                          <label for="select_facturarmes" class="active">Mes</label>
                          <select id="select_facturarmes" ng-model="facturar.m" material-select watch>
                            <option value="1">Enero</option>
                            <option value="2">Febrero</option>
                            <option value="3">Marzo</option>
                            <option value="4">Abril</option>
                            <option value="5">Mayo</option>
                            <option value="6">Junio</option>
                            <option value="7">Julio</option>
                            <option value="8">Agosto</option>
                            <option value="9">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                          </select>
                        </div>
                      </div>
                      <div class="col l2 s12">
                        <p class="vMiddle hCenter">de</p>
                      </div>
                      <div class="col l5 s12">
                        <div class="input-field">
                          <label for="select_facturaraño" class="active">Año</label>
                          <select id="select_facturaraño" ng-model="facturar.y" material-select watch>
                            <option value="17">2017</option>
                            <option value="18">2018</option>
                            <option value="19">2019</option>
                            <option value="20">2020</option>
                            <option value="21">2021</option>
                            <option value="22">2022</option>
                            <option value="23">2023</option>
                            <option value="24">2024</option>
                            <option value="25">2025</option>
                            <option value="26">2026</option>
                            <option value="27">2027</option>
                            <option value="28">2028</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field">
                        <label for="facturarSelectCliente" class="active">Nombre del Cliente</label>
                        <select id="facturarSelectCliente" ng-model="facturar.id_cliente" ng-init="facturar.id_cliente = '-1'" ng-options="cliente.id_cliente as cliente.nom_cliente for cliente in clientes.slice(1)" material-select watch></select>
                      </div>
                    </div>
                    <div class="row">
                      <div ng-repeat="cliente in clientes | filter:{id_cliente:facturar.id_cliente} as results" class="hCenter">
                        <table class="bordered highlight colored-table" style="border: 1px solid #e0e0e0;">
                          <tr>
                            <th>
                              <h5>{{cliente.nom_cliente}}</h5>
                            </th>
                          </tr>
                          <tr>
                            <td>Horas Pactadas: {{cliente.horas_pactadas}}hrs</td>
                          </tr>
                          <tr>
                            <td>Horas Ejecutadas: {{arr[facturar.y][facturar.m][cliente.id_cliente].toFixed(2)}}hrs</td>
                          </tr>
                          <tr>
                            <td>Horas Adicionales: {{calculateAfterHours(cliente.horas_pactadas, arr[facturar.y][facturar.m][cliente.id_cliente])}}hrs</td>
                          </tr>
                          <tr>
                            <td class="vMiddle hCenter"><button class="btn-floating btn-large waves-effect waves-light blue" ng-click="downloadReport(facturar.y, facturar.m, cliente.id_cliente, cliente.nom_cliente)"><i class="fas fa-download"></i></button></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- END - FACTURAR TICKETS -->

              <!-- START - CREAR PROYECTOS -->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'deep-purple':'white'"><i class="fas fa-newspaper"></i>Crear Proyecto</div>
                <div class="collapsible-body">
                  <div class="container">
                    <ng-form name="cp_form">
                      <div class="row">
                        <div class="input-field">
                          <label for="newproyectSelectCliente" ng-class="(newProyect.id_cliente != '') ? 'active' : ''">Nombre del Cliente</label>
                          <select id="newproyectSelectCliente" ng-model="newProyect.id_cliente" material-select watch ng-options="cliente.id_cliente as cliente.nom_cliente for cliente in clientes" ng-required="true"></select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field">
                          <textarea id="newproyectDescripcionProyecto" type="text" ng-model="newProyect.desc_proyecto" class="materialize-textarea" ng-required="true"></textarea>
                          <label for="newproyectDescripcionProyecto" ng-class="(newProyect.desc_proyecto != '') ? 'active' : ''">Descripción del Proyecto</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field">
                          <input id="newproyectFec_formalizacion" type="text" class="datepicker" ng-model="newProyect.fec_formalizacion" ng-required="true">
                          <label for="newproyectFec_formalizacion" ng-class="(newProyect.fec_formalizacion != '') ? 'active' : ''">Fecha de Formalización</label>
                        </div>
                      </div>
                      &nbsp;
                      <div class="divider"></div>
                      &nbsp;
                      <div class="row">
                        <div class="col l5 s6">
                          <button class="btn waves-effect waves-light green" type="submit" ng-disabled="cp_form.$invalid" ng-click="formSubmit('crearProyecto')">Enviar<i class="fas fa-share right"></i></button>
                        </div>
                        <div class="col l5 offset-l2 s6">
                          <button class="btn waves-effect waves-light red" type="reset" ng-click="formReset('crearProyecto')">Reset<i class="fas fa-eraser right"></i></button>
                        </div>
                      </div>
                    </ng-form>
                  </div>
                </div>
              </li>
              <!-- END - CREAR PROYECTOS -->

              <!-- START - ADMINISTRAR PROYECTOS-->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'indigo':'white'"><i class="fas fa-search"></i>Administrar Proyectos</div>
                <div class="collapsible-body">
                  <div class="row">
                    <div class="input-field">
                      <i class="prefix fas fa-search"></i>
                      <input id="icon_prefix" ng-model="searchTermProyects" type="search">
                      <label for="icon_prefix">Buscar</label>
                    </div>
                  </div>
                  &nbsp;
                  <div class="row">
                    <table class="bordered highlight responsive-table clickable-table trunkated-table colored-table">
                      <thead>
                        <tr>
                          <th>Codigo</th>
                          <th>Cliente</th>
                          <th>Nomre Solicitante</th>
                          <th>Descripción</th>
                          <th>Fecha Ingreso</th>
                          <th>Fecha Formalización</th>
                          <th>Avance</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr dir-paginate="proyect in proyects | filter:searchTermProyects | itemsPerPage: 5" pagination-id="proyectsPaginationId">
                          <td><a ng-click="isAdmin.status ? openModal('Proyectos', proyect):''" class="btn btnForTable waves-effect waves-light blue">{{proyect.cod_proyecto}}</a></td>
                          <td class="vMiddle">{{proyect.nom_cliente}}</td>
                          <td class="vMiddle">{{proyect.nom_solicitante}}</td>
                          <td class="vMiddle description" ng-class="isAdmin.status ? 'truncate' : ''">{{proyect.desc_proyecto}}</td>
                          <td class="vMiddle">{{proyect.fec_ingreso | myFullDateFormat}}</td>
                          <td class="vMiddle hCenter">{{proyect.fec_formalizacion}}</td>
                          <td class="vMiddle hCenter" ng-class="proyect.porcentaje_avance < 50 ? 'red-text text-accent-4':(proyect.porcentaje_avance < 99 ? 'yellow-text text-accent-4':'green-text text-accent-4')"><i ng-class="proyect.porcentaje_avance < 99 ? 'fa fa-exclamation-circle':'fa fa-thumbs-up'"></i> {{proyect.porcentaje_avance}}%</td>
                          <td ng-click="eliminarDatos('Proyectos', proyect)" ng-if="isAdmin.status"><a class="btn btnForTable waves-effect waves-light red"><i class="fas fa-trash"></i></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  &nbsp;
                  <div class="row">
                    <dir-pagination-controls boundary-links="true" template-url="dirPagination.tpl.html" pagination-id="proyectsPaginationId"></dir-pagination-controls>
                  </div>
                </div>
              </li>
              <!-- END - ADMINISTRAR PROYECTOS -->

              <!-- START - CREAR TICKETS PROGRAMADOS-->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'blue':'white'"><i class="fas fa-calendar-alt"></i>Crear Ticket Programado</div>
                <div class="collapsible-body">
                  <div class="container">
                    <ng-form name="ctp_form">
                      <div class="row">
                        <h5 class="underlined">Datos Personales</h5>
                      </div>
                      <div class="row" ng-show="isAdmin.status">
                        <div class="input-field">
                          <label for="newticketscheduledSelectCliente" ng-class="(newScheduledTicket.id_cliente != '') ? 'active' : ''">Nombre del Cliente</label>
                          <select id="newticketscheduledSelectCliente" class="validate" ng-model="newScheduledTicket.id_cliente" ng-options="cliente.id_cliente as cliente.nom_cliente for cliente in clientes" required material-select watch></select>
                        </div>
                      </div>
                      <div ng-show="isAdmin.status" class="row">
                        <div class="input-field">
                          <label for="newticketscheduledSelectPrioridad" ng-class="(newScheduledTicket.prioridad_tarea != '') ? 'active' : ''">Prioridad del Ticket</label>
                          <select id="newticketscheduledSelectPrioridad" class="validate" ng-model="newScheduledTicket.prioridad_tarea" required novalidate material-select watch>
                            <option value="0">Baja</option>
                            <option value="1">Normal</option>
                            <option value="2">Alta</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col l6 s12">
                          <div class="input-field">
                            <input id="newticketscheduledNombre" class="validate" ng-model="newScheduledTicket.nom_solicitante" type="text" required="required" placeholder="Nombre y Apellido que la Tarea Programada">
                            <label for="newticketscheduledNombre" ng-class="'active'">Nombre</label>
                          </div>
                        </div>
                        <div class="col l6 s12">
                          <div class="input-field">
                            <input id="newticketscheduledEmail" class="validate" ng-model="newScheduledTicket.email_solicitante" ng-value="newTicket.email_solicitante" type="email" required="required" placeholder="Correo de la Tarea Programada">
                            <label for="newticketscheduledEmail" ng-class="'active'">Email</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field">
                          <textarea id="newticketscheduledDescTarea" ng-model="newScheduledTicket.desc_tarea" class="materialize-textarea validate" required="required" placeholder="Motivo de la Tarea Programada"></textarea>
                          <label for="newticketscheduledDescTarea" ng-class="'active'">Solicitud</label>
                        </div>
                      </div>
                      <div class="row">
                        <h5 class="underlined">Tipo de Solicitud</h5>
                      </div>
                      <div class="row">
                        <input id="newticketscheduledRadioSistema" ng-model="newScheduledTicket.tipo" type="radio" required="required" value="SISTEMA" />
                        <label for="newticketscheduledRadioSistema" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Sistema operativo, programas, etc.">SISTEMA</label>
                      </div>
                      <div class="row">
                        <input id="newticketscheduledRadioTecnica" ng-model="newScheduledTicket.tipo" type="radio" required="required" value="TECNICA" />
                        <label for="newticketscheduledRadioTecnica" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Mouse, teclado, piezas fisicas, desconexion intermitente, etc">TECNICA</label>
                      </div>
                      <div class="row">
                        <input id="newticketscheduledRadioSantiago" ng-model="newScheduledTicket.tipo" type="radio" required="required" value="SANTIAGO" />
                        <label for="newticketscheduledRadioSantiago" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Especifico para Santiago">SANTIAGO</label>
                      </div>
                      <div class="row">
                        <input id="newticketscheduledRadioOtro" ng-model="newScheduledTicket.tipo" type="radio" required="required" value="OTRO" />
                        <label for="newticketscheduledRadioOtro" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Si no sabe, eliga esta opción.">OTRO</label>
                      </div>
                      &nbsp;
                      <div class="row">
                        <h5 class="underlined">Programar</h5>
                      </div>
                      &nbsp;
                      <div class="row">
                        <div class="input-field">
                          <label for="newticketscheduledModo" ng-class="(newScheduledTicket.modo != '') ? 'active' : ''">Elegir la frecuencia con la que la Tarea Programada se agregará a la lista de Tareas</label>
                          <select id="newticketscheduledModo" ng-model="newScheduledTicket.modo" required novalidate material-select watch>
                            <option value="1">Solo una vez</option>
                            <option value="2">Una vez al Día</option>
                            <option value="3">Una vez por Semana</option>
                            <option value="4">Una vez al Mes</option>
                          </select>
                        </div>
                      </div>
                      <div class="row" ng-show="newScheduledTicket.modo === '1'">
                        <div class="input-field">
                          <input id="newticketscheduledFec_calendarizacion" type="text" class="datepicker" ng-model="newScheduledTicket.fec_calendarizacion">
                          <label for="newticketscheduledFec_calendarizacion">Fecha de Calendarización</label>
                        </div>
                      </div>
                      <div class="row" ng-show="newScheduledTicket.modo === '4'">
                        <div class="col l5 s12">
                          <div class="input-field">
                            <label for="newticketscheduledPeriodo_semana" ng-class="(newScheduledTicket.periodo_semana != '') ? 'active' : ''">El</label>
                            <select id="newticketscheduledPeriodo_semana" ng-model="newScheduledTicket.periodo_semana" novalidate material-select watch>
                              <option value="1">Primer</option>
                              <option value="2">Segundo</option>
                              <option value="3">Tercer</option>
                              <option value="4">Cuarto</option>
                            </select>
                          </div>
                        </div>
                        <div class="col l5 offset-l2 s12">
                          <div class="input-field">
                            <select id="newticketscheduledPeriodo_dia" ng-model="newScheduledTicket.periodo_dia" novalidate material-select watch>
                              <option value="1">Lunes</option>
                              <option value="2">Martes</option>
                              <option value="3">Miercoles</option>
                              <option value="4">Jueves</option>
                              <option value="5">Viernes</option>
                              <option value="6">Sábado</option>
                              <option value="7">Domingo</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row" ng-show="newScheduledTicket.modo === '3'">
                        <div class="input-field">
                          <label for="newticketscheduledPeriodo_dia" ng-class="(newScheduledTicket.periodo_dia != '') ? 'active' : ''">Todos los: </label>
                          <select id="newticketscheduledPeriodo_dia" ng-model="newScheduledTicket.periodo_dia" novalidate material-select watch>
                            <option value="1">Lunes</option>
                            <option value="2">Martes</option>
                            <option value="3">Miercoles</option>
                            <option value="4">Jueves</option>
                            <option value="5">Viernes</option>
                            <option value="6">Sábado</option>
                            <option value="7">Domingo</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <label ng-if="newScheduledTicket.modo == 1">Obs: La Tarea Programada se agregará a la "lista de tareas" solo una vez y se borrará automaticamente de la "lista de tareas programadas"</label>
                        <label ng-if="newScheduledTicket.modo == 2">Obs: La Tarea Programada se agregará a la "lista de tareas" todos los dias hasta que la borre de la "lista de tareas programadas" en el menu de "Administrar Tickets Programados"</label>
                        <label ng-if="newScheduledTicket.modo == 3">Obs: La Tarea Programada se agregará a la "lista de tareas" todas las semanas hasta que la borre de la "lista de tareas programadas" en el menu de "Administrar Tickets Programados"</label>
                        <label ng-if="newScheduledTicket.modo == 4">Obs: La Tarea Programada se agregará a la "lista de tareas" todos los meses hasta que la borre de la "lista de tareas programadas" en el menu de "Administrar Tickets Programados"</label>
                      </div>
                      &nbsp;
                      <div class="divider"></div>
                      &nbsp;
                      <div class="row">
                        <div class="col l5 s6">
                          <button class="btn waves-effect waves-light green" type="submit" ng-disabled="ctp_form.$invalid" ng-click="formSubmit('crearTicketProgramado')">Enviar<i class="fas fa-share right"></i></button>
                        </div>
                        <div class="col l5 offset-l2 s6">
                          <button class="btn waves-effect waves-light red" type="reset" ng-click="formReset('crearTicketProgramado')">Reset<i class="fas fa-eraser right"></i></button>
                        </div>
                      </div>
                    </ng-form>
                  </div>
                </div>
              </li>
              <!-- END - CREAR TICKETS PROGRAMADOS -->

              <!-- START - ADMINISTRAR TICKETS PROGRAMADOS-->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'light-blue':'white'"><i class="fas fa-search"></i>Administrar Tickets Programados</div>
                <div class="collapsible-body">
                  <div class="row">
                    <div class="input-field">
                      <i class="prefix fas fa-search"></i>
                      <input id="icon_prefix" ng-model="searchTermScheduledTickets" type="search">
                      <label for="icon_prefix">Buscar</label>
                    </div>
                  </div>
                  &nbsp;
                  <div class="row">
                    <table class="bordered highlight responsive-table condensed-table trunkated-table colored-table">
                      <thead>
                        <tr>
                          <th ng-click="sortTypeScheduledTickets = 'id_tareaprogramada'; sortReverseScheduledTickets = !sortReverseScheduledTickets">Codigo</th>
                          <th>Nombre Cliente</th>
                          <th>Nombre Solicitante</th>
                          <th>Descripcion</th>
                          <th>Programada</th>
                          <th>Borrar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr dir-paginate="scheduled_ticket in scheduled_tickets | filter:searchTermScheduledTickets | itemsPerPage: 5 | orderBy:sortTypeScheduledTickets:sortReverseScheduledTickets" pagination-id="scheduledticketsPaginationId">
                          <td>{{scheduled_ticket.id_tareaprogramada}}</td>
                          <td>{{scheduled_ticket.nom_cliente}}</td>
                          <td>{{scheduled_ticket.nom_solicitante}}</td>
                          <td>{{scheduled_ticket.desc_tarea}}</td>
                          <td>{{resolveColumn(scheduled_ticket.modo, scheduled_ticket.fec_calendarizacion, scheduled_ticket.periodo_semana, scheduled_ticket.periodo_dia)}}</td>
                          <td><button class="btn-floating waves-effect waves-light red" ng-click="suprimirTareaProgramada(scheduled_ticket)"><i class="prefix fas fa-times"></i></button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  &nbsp;
                  <div class="row">
                    <dir-pagination-controls boundary-links="true" template-url="dirPagination.tpl.html" pagination-id="scheduledticketsPaginationId"></dir-pagination-controls>
                  </div>
                </div>
              </li>
              <!-- END - ADMINISTRAR TICKETS PROGRAMADOS -->

              <!-- START - CREAR TECHDATA-->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'cyan':'white'"><i class="fas fa-database"></i>Crear TechData</div>
                <div class="collapsible-body">
                  <div class="container">
                    <ng-form name="ctd_form">
                      <div class="row">
                        <h5 class="underlined" ">Elige para continuar...</h5></div>
                      <div class=" row">
                          <div class="input-field">
                            <label for="newtechdataTipoTechdata" ng-class="(newTechData.tipo_techdata != '') ? 'active' : ''">TechData</label>
                            <select id="newtechdataTipoTechdata" class="validate" ng-model="newTechData.tipo_techdata" material-select watch required>
                              <option value="servidor">Servidor</option>
                              <option value="equipo">Equipo</option>
                              <option value="ups">UPS</option>
                              <option value="dvr">DVR</option>
                            </select>
                          </div>
                      </div>
                      <div ng-if="newTechData.tipo_techdata == 'servidor'">
                        <div class="row">
                          <h5 class="underlined">Datos Personales</h5>
                        </div>
                        <div class="row">
                          <div class="input-field">
                            <label for="newtechdataCliente" ng-class="newTechData.id_cliente ? 'active' : ''">Elige un Cliente</label>
                            <select id="newtechdataCliente" ng-model="newTechData.id_cliente" ng-options="cliente.id_cliente as cliente.nom_cliente for cliente in clientes" required material-select watch></select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field">
                            <label for="newtechdataSucursal" ng-class="newTechData.id_sucursal ? 'active' : ''">Elige una Sucursal</label>
                            <select id="newtechdataSucursal" ng-model="newTechData.id_sucursal" ng-options="sucursal.id_sucursal as sucursal.nom_sucursal for sucursal in sucursales | filter:{id_cliente: newTechData.id_cliente}" required material-select watch></select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field">
                            <label for="newtechdataNomServidor" ng-class="'active'">Nombre del Servidor</label>
                            <input name="newtechdataNomServidor" class="validate" type="text" ng-model="newTechData.nom_servidor" placeholder="Nombre del Equipo con Windows" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field">
                            <label for="newtechdataSistemaOperativo" ng-class="newTechData.sistema_operativo ? 'active' : ''">Sistema Operativo</label>
                            <select id="newtechdataSistemaOperativo" class="validate" ng-model="newTechData.sistema_operativo" required material-select>
                              <option selected default value="Windows Server 2003">Windows Server 2003</option>
                              <option value="Windows Server 2008">Windows Server 2008</option>
                              <option value="Windows Server 2012R2">Windows Server 2012R2</option>
                              <option value="Windows 7 Professional - 64Bits">Windows 7 Professional - 64Bits</option>
                              <option value="Windows 7 Ultimate - 64Bits">Windows 7 Ultimate - 64Bits</option>
                              <option value="Windows 10 Professional - 64Bits">Windows 10 Professional - 64Bits</option>
                              <option value="Windows 10 Ultimate - 64Bits">Windows 10 Ultimate - 64Bits</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l5 s12">
                            <div class="input-field">
                              <label for="newtechdataTipoServidor" ng-class="newTechData.tipo ? 'active' : ''">Tipo de Servidor</label>
                              <select id="newtechdataTipoServidor" ng-model="newTechData.tipo" required material-select>
                                <option selected="selected" value="Fisico Dedicado">Fisico Dedicado</option>
                                <option value="Virtualizado Compartido">Virtualizado Compartido</option>
                                <option value="Virtualizado Dedicado">Virtualizado Dedicado</option>
                              </select>
                            </div>
                          </div>
                          <div class="col l5 offset-l2 s12">
                            <div class="input-field">
                              <label for="newtechdataModeloServidor" class="active">Modelo de Equipo</label>
                              <input name="newtechdataModeloServidor" class="validate" type="text" ng-model="newTechData.modelo" placeholder="Nombre del Modelo Fisico de Servidor" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field">
                            <label for="newtechdataUtilidad" class="active">Utilidad del Servidor</label>
                            <textarea name="newtechdataUtilidad" type="text" ng-model="newTechData.utilidad" class="materialize-textarea validate" placeholder="Describe cual es el uso y razón del Servidor. Aqui deben ir datos utiles para mantener una documentación clara del equipo" required></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l5 s12">
                            <div class="input-field">
                              <label for="newtechdataUsuarioDominio" class="active">Nombre de Usuario en el Dominio</label>
                              <input name="newtechdataUsuarioDominio" list="newtechdataUsuariosList" type="text" class="validate" ng-model="newTechData.usuario_dominio" placeholder="Usuario con privilegios de Administrador" required>
                              <datalist id="newtechdataUsuariosList">
                                <option value="Administrador"></option>
                              </datalist>
                            </div>
                          </div>
                          <div class="col l5 offset-l2 s12">
                            <div class="input-field">
                              <label for="newtechdataClaveDominio" class="active">Clave de Usuario en el Dominio</label>
                              <input name="newtechdataClaveDominio" type="text" class="validate" ng-model="newTechData.clave_dominio" placeholder="Clave de AD en Windows" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l5 s12">
                            <div class="input-field">
                              <select id="newtechdataTipoIpPublica" ng-model="newTechData.estado_ip" ng-init="newTechData.estado_ip = '1'" material-select>
                                <option value="1">Fija</option>
                                <option value="0">Dinamica</option>
                              </select>
                              <label for="newtechdataTipoIpPublica">Tipo de IP Publica</label>
                            </div>
                          </div>
                          <div class="col l2 hide-on-med-and-down hCenter vMiddle">
                            <i class="fas fa-caret-right fa-4x" ng-class="(newTechData.estado_ip == '1') ? 'blue-text':''"></i>
                          </div>
                          <div class="col l5 s12">
                            <div class="input-field">
                              <label for="newtechdataIpPublica" class="active">IP Publica</label>
                              <input name="newtechdataIpPublica" type="text" class="validate" placeholder="IP Publica Principal de tu ISP" ng-model="newTechData.ip_publica" ng-required="newTechData.estado_ip == '1'" ng-disabled="newTechData.estado_ip == '0'">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l5 s12">
                            <div class="input-field">
                              <select id="newtechdataAccesoRemoto" ng-model="newTechData.acceso_remoto" ng-init="newTechData.acceso_remoto = '0'" material-select>
                                <option value="1">Habilitado</option>
                                <option value="0">Deshabilitado</option>
                              </select>
                              <label for="newtechdataAccesoRemoto">Acceso Remoto</label>
                            </div>
                          </div>
                          <div class="col l2 hide-on-med-and-down hCenter vMiddle">
                            <i class="fas fa-caret-right fa-4x" ng-class="(newTechData.acceso_remoto == '1') ? 'blue-text':''"></i>
                          </div>
                          <div class="col l5 s12">
                            <div class="input-field">
                              <label for="newtechdataPuertoRemoto">Puerto Remoto</label>
                              <input name="newtechdataPuertoRemoto" type="number" class="validate" ng-model="newTechData.puerto_remoto" ng-required="newTechData.acceso_remoto == '1'" ng-disabled="newTechData.acceso_remoto == '0'">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div ng-if="newTechData.tipo_techdata == 'equipo'">
                        <div class="row">
                          <h5 class="underlined">Datos Personales</h5>
                        </div>
                        <div class="row">
                          <div class="input-field">
                            <label for="newtechdataCliente" ng-class="newTechData.id_cliente ? 'active' : ''">Elige un Cliente</label>
                            <select id="newtechdataCliente" class="validate" ng-model="newTechData.id_cliente" ng-options="cliente.id_cliente as cliente.nom_cliente for cliente in clientes" required material-select watch></select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field">
                            <label for="newtechdataSucursal" ng-class="newTechData.id_sucursal ? 'active' : ''">Elige una Sucursal</label>
                            <select id="newtechdataSucursal" class="validate" ng-model="newTechData.id_sucursal" ng-options="sucursal.id_sucursal as sucursal.nom_sucursal for sucursal in sucursales | filter:{id_cliente: newTechData.id_cliente}" required material-select watch></select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field">
                            <label for="newtechdataSelectServidor" ng-class="newTechData.id_tds ? 'active' : ''">Elige un Servidor</label>
                            <select id="newtechdataSelectServidor" ng-model="newTechData.id_tds" ng-options="servidor.id_tds as servidor.nom_servidor for servidor in techdata_servidores | filter:{id_cliente: newTechData.id_cliente}" required material-select watch></select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field">
                            <label for="newtechdataResponsable" ng-class="'active'">Responsable</label>
                            <input id="newtechdataResponsable" type="text" class="validate" ng-model="newTechData.responsable" required placeholder="Nombre del Responsable en el Cargo" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field">
                            <label for="newtechdataCargo" ng-class="'active'">Cargo</label>
                            <input id="newtechdataCargo" type="text" class="validate" ng-model="newTechData.cargo" required placeholder="Nombre del Cargo que Desempeña" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l5 s12">
                            <div class="input-field">
                              <label for="newtechdataEmailName" ng-class="'active'">Correo</label>
                              <input id="newtechdataEmailName" class="validate" type="text" ng-model="newTechData.nom_correo" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" placeholder="Nombre de Correo Empresarial">
                            </div>
                          </div>
                          <div class="col l5 offset-l2 s12">
                            <div class="input-field">
                              <label for="newtechdataEmailPass" ng-class="'active'">Contraseña</label>
                              <input id="newtechdataEmailPass" class="validate" type="text" ng-model="newTechData.clave_correo" required placeholder="Clave de Correo Empresarial">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <h5 class="underlined">Datos de Software</h5>
                        </div>
                        <div class="row">
                          <div class="col l6 s12">
                            <div class="input-field">
                              <label for="newtechdataUsuarioDominio" ng-class="'active'">Nombre de Usuario en el Dominio de Windows</label>
                              <input id="newtechdataUsuarioDominio" class="validate" type="text" ng-model="newTechData.usuario_dominio" required placeholder="Nombre de Usuario de Active Directory">
                            </div>
                          </div>
                          <div class="col l6 s12">
                            <div class="input-field">
                              <label for="newtechdataClaveDominio" ng-class="'active'">Contraseña de Usuario en el Dominio de Windows</label>
                              <input id="newtechdataClaveDominio" class="validate" type="text" ng-model="newTechData.clave_dominio" required placeholder="Contraseña del Usuario de Active Directory">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l6 s12">
                            <div class="input-field">
                              <label for="newtechdataIpEquipo" ng-class="'active'">Ip Privada del Equipo</label>
                              <input id="newtechdataIpEquipo" class="validate" type="text" ng-model="newTechData.ip_equipo" required pattern="(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)_*(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)_*){3}" placeholder="Ejemplo: 192.168.0.1">
                            </div>
                          </div>
                          <div class="col l6 s12">
                            <div class="input-field">
                              <label for="newtechdataMacEquipo" ng-class="'active'">MAC del Equipo</label>
                              <input id="newtechdataMacEquipo" class="validate" type="text" ng-model="newTechData.mac_equipo" required pattern="^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$" placeholder="Ejemplo: AA-BB-CC-DD-EE-FF-GG">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l3 s12">
                            <div class="input-field">
                              <select id="newtechdataAccesoRemoto" class="validate" ng-model="newTechData.acceso_remoto" required material-select>
                                <option selected="selected" value="0">Deshabilitado</option>
                                <option value="1">Habilitado</option>
                              </select>
                              <label for="newtechdataAccesoRemoto">Acceso Escritorio Remoto</label>
                            </div>
                          </div>
                          <div class="col l4 offset-l1 s12">
                            <div class="input-field">
                              <select id="newtechdataSesionMulticuenta" class="validate" ng-model="newTechData.sesion_multicuenta" required material-select>
                                <option selected="selected" value="0">Deshabilitado</option>
                                <option value="1">Habilitado</option>
                              </select>
                              <label for="newtechdataSesionMulticuenta">Estado Windows Multicuenta</label>
                            </div>
                          </div>
                          <div class="col l3 offset-l1 s12">
                            <div class="input-field">
                              <select id="newtechdataRespaldoAcronis" class="validate" ng-model="newTechData.respaldo_acronis" required material-select>
                                <option selected="selected" value="0">Deshabilitado</option>
                                <option value="1">Habilitado</option>
                              </select>
                              <label for="newtechdataRespaldoAcronis">Respaldo Acronis</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l3 s12">
                            <div class="input-field">
                              <select id="newtechdataNomAntivirus" class="validate" ng-model="newTechData.nom_antivirus" required material-select>
                                <option value="Ninguno">Ninguno</option>
                                <option value="Avast Free" data-icon="/app/img/logos/avast-logo.png">Avast Free</option>
                              </select>
                              <label for="newtechdataNomAntivirus">Antivirus Instalado</label>
                            </div>
                          </div>
                          <div class="col l3 s12">
                            <div class="input-field">
                              <select id="newtechdataNomCcleaner" class="validate" ng-model="newTechData.nom_ccleaner" required material-select>
                                <option value="Ninguno">Ninguno</option>
                                <option value="Ccleaer" data-icon="/app/img/logos/ccleaner-logo.png">Ccleaner</option>
                              </select>
                              <label for="newtechdataNomCcleaner">PC Cleaner Instalado</label>
                            </div>
                          </div>
                          <div class="col l3 s12">
                            <div class="input-field">
                              <select id="newtechdataNomMalware" class="validate" ng-model="newTechData.nom_malware" required material-select>
                                <option value="Ninguno">Ninguno</option>
                                <option value="MalwareBytes Free" data-icon="/app/img/logos/malwarebytes-logo.png">MalwareBytes Free</option>
                              </select>
                              <label for="newtechdataNomMalware">Malware Instalado</label>
                            </div>
                          </div>
                          <div class="col l3 s12">
                            <div class="input-field">
                              <select id="newtechdataNomAntispyware" class="validate" ng-model="newTechData.nom_antispyware" required material-select>
                                <option value="Ninguno">Ninguno</option>
                                <option value="SuperAntiSpyware" data-icon="/app/img/logos/superantispyware-logo.png">SuperAntiSpyware</option>
                              </select>
                              <label for="newtechdataNomAntispyware">AntiSpyware Instalado</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l5 s12">
                            <div class="input-field">
                              <label for="newtechdataIdAnydesk">Id de Anydesk</label>
                              <input id="newtechdataIdAnydesk" class="validate" type="text" ng-model="newTechData.id_anydesk">
                            </div>
                          </div>
                          <div class="col l5 offset-l2 s12">
                            <div class="input-field">
                              <label for="newtechdataClaveAnydesk">Clave de Usuario Anydesk</label>
                              <input id="newtechdataClaveAnydesk" class="validate" type="text" ng-model="newTechData.clave_anydesk">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l5 s12">
                            <div class="input-field">
                              <label for="newtechdataIdTeamviewer">Id de TeamViewer</label>
                              <input id="newtechdataIdTeamviewer" class="validate" type="text" ng-model="newTechData.id_teamviewer">
                            </div>
                          </div>
                          <div class="col l5 offset-l2 s12">
                            <div class="input-field">
                              <label for="newtechdataClaveTeamviewer">Clave de Usuario TeamViewer</label>
                              <input id="newtechdataClaveTeamviewer" class="validate" type="text" ng-model="newTechData.clave_teamviewer">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <h5 class="underlined">Datos de Hardware</h5>
                        </div>
                        <div class="row">
                          <div class="col l5 s12">
                            <div class="input-field">
                              <label for="newtechdataNomProcesador" ng-class="'active'">Nombre del Procesador</label>
                              <input id="newtechdataNomProcesador" class="validate" type="text" ng-model="newTechData.nom_procesador" required placeholder="Nombre y Modelo de Procesador">
                            </div>
                          </div>
                          <div class="col l5 offset-l2 s12">
                            <div class="input-field">
                              <select id="newtechdataSistemaOperativo" class="validate" ng-model="newTechData.sistema_operativo" required material-select>
                                <option selected="selected" value="Windows XP Professional SP3 - 32Bits">Windows XP Professional SP3 - 32Bits</option>
                                <option value="Windows 7 Professional - 32Bits">Windows 7 Professional - 32Bits</option>
                                <option value="Windows 7 Professional - 64Bits">Windows 7 Professional - 64Bits</option>
                                <option value="Windows 7 Ultimate - 32Bits">Windows 7 Ultimate - 32Bits</option>
                                <option value="Windows 7 Ultimate - 64Bits">Windows 7 Ultimate - 64Bits</option>
                                <option value="Windows 10 Home - 32Bits">Windows 10 Home - 32Bits</option>
                                <option value="Windows 10 Home - 64Bits">Windows 10 Home - 64Bits</option>
                                <option value="Windows 10 Professional - 32Bits">Windows 10 Professional - 32Bits</option>
                                <option value="Windows 10 Professional - 64Bits">Windows 10 Professional - 64Bits</option>
                                <option value="Windows 10 Ultimate - 32Bits">Windows 10 Ultimate - 32Bits</option>
                                <option value="Windows 10 Ultimate - 64Bits">Windows 10 Ultimate - 64Bits</option>
                              </select>
                              <label for="newtechdataSistemaOperativo">Sistema Operativo</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col l5 s12">
                            <div class="input-field">
                              <select id="newtechdataCapRam" class="validate" ng-model="newTechData.cap_ram" required material-select>
                                <option selected="selected" value="1GB">1GB</option>
                                <option value="2GB">2GB</option>
                                <option value="4GB">4GB</option>
                                <option value="6GB">6GB</option>
                                <option value="8GB">8GB</option>
                                <option value="10GB">10GB</option>
                                <option value="12GB">12GB</option>
                                <option value="14GB">14GB</option>
                                <option value="16GB">16GB</option>
                              </select>
                              <label for="newtechdataCapRam">Capacidad de la RAM</label>
                            </div>
                          </div>
                          <div class="col l5 offset-l2 s12">
                            <div class="input-field">
                              <select id="newtechdataCapAlmacenamiento" class="validate" ng-model="newTechData.cap_almacenamiento" required material-select>
                                <option selected="selected" value="120GB">120GB</option>
                                <option value="160GB">160GB</option>
                                <option value="320GB">320GB</option>
                                <option value="500GB">500GB</option>
                                <option value="1TB">1TB</option>
                              </select>
                              <label for="newtechdataCapAlmacenamiento">Capacidad de Almacenamiento</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field">
                            <textarea id="newtechdataObsGenerales" class="materialize-textarea validate" ng-model="newTechData.obs_generales"></textarea>
                            <label for="newtechdataObsGenerales">Observaciones Generales del Equipo y Usuario</label>
                          </div>
                        </div>
                      </div>
                      &nbsp;
                      <div class="divider"></div>
                      &nbsp;
                      <div class="row">
                        <div class="col l5 s6">
                          <button class="btn waves-effect waves-light green" type="submit" ng-disabled="ctd_form.$invalid" ng-click="formSubmit('crearTechData')">Enviar<i class="fas fa-share right"></i></button>
                        </div>
                        <div class="col l5 offset-l2 s6">
                          <button class="btn waves-effect waves-light red" type="reset" ng-click="newTechData = {}">Reset<i class="fas fa-eraser right"></i></button>
                        </div>
                      </div>
                    </ng-form>
                  </div>
                </div>
              </li>
              <!-- END - CREAR TECHDATA-->

              <!--START - ADMINISTRAR TECHDATA -->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'teal':'white'"><i class="fas fa-desktop"></i>Administrar TechData</div>
                <div class="collapsible-body">
                  <div class="row">
                    <div class="col l5 s12">
                      <div class="input-field">
                        <i class="prefix fas fa-search"></i>
                        <input id="icon_prefix" ng-model="searchTermTechData" type="search">
                        <label for="icon_prefix">Buscar en Todos los TechData</label>
                      </div>
                    </div>
                    <div class="col l5 offset-l2 s12">
                      <div class="input-field">
                        <label for="selectClienteForTechDataFilter" ng-class="'active'">Solo Mostrar TechData de:</label>
                        <select id="selectClienteForTechDataFilter" ng-model="selectClienteForTechDataFilter" ng-init="selectClienteForTechDataFilter = '-1'" material-select watch>
                          <option value="-1">Todos</option>
                          <option ng-repeat="cliente in clientes" ng-value="cliente.id_cliente" ng-if="cliente.id_cliente != 0">{{cliente.nom_cliente}}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <table>
                      <thead>
                        <tr>
                          <th>SERVIDORES</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="row">
                    <table class="bordered highlight responsive-table trunkated-table colored-table-blue">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>UPS</th>
                          <th>Cliente</th>
                          <th>Sucursal</th>
                          <th>Nombre Servidor</th>
                          <th>Utilidad</th>
                          <th>Clave Dominio</th>
                          <th>IP Publica</th>
                          <th>Puerto Acceso Remoto</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr dir-paginate="servidor in filteredServidores = (techdata_servidores | filter:searchTermTechData | filter: ((selectClienteForTechDataFilter >= 0) || undefined) && {id_cliente : selectClienteForTechDataFilter}) | itemsPerPage: 5 track by servidor.id_tds" pagination-id="tdServidoresPaginationId">
                          <td class="vMiddle hCenter"><a ng-click="openModal('Servidores', servidor)" class="btn btnForTable waves-effect waves-light blue">{{servidor.id_tds}}</a></td>
                          <td class="vMiddle hCenter"><a ng-click="servidor.id_ups > 0 ? openModal('UPS', servidor.id_ups):''" class="btn btnForTable waves-effect waves-light" ng-class="servidor.id_ups > 0 ? 'blue' : 'disabled'">{{servidor.id_ups > 0 ? servidor.id_ups : 'N/A'}}</a></td>
                          <td class="vMiddle">{{servidor.nom_cliente}}</td>
                          <td class="vMiddle hCenter">{{servidor.nom_sucursal}}</td>
                          <td class="vMiddle hCenter">{{servidor.nom_servidor}}</td>
                          <td class="vMiddle hCenter description truncate tooltipped" data-position="right" data-delay="50" data-tooltip="{{servidor.utilidad}}">{{servidor.utilidad}}</td>
                          <td class="vMiddle hCenter">{{servidor.clave_dominio}}</td>
                          <td class="vMiddle hCenter">{{servidor.ip_publica ? servidor.ip_publica : 'IP Dinamica'}}</td>
                          <td class="vMiddle hCenter">{{servidor.puerto_remoto}}</td>
                          <td ng-click="eliminarDatos('Servidores', servidor)"><a class="btn btnForTable waves-effect waves-light red"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr ng-if="filteredServidores.length == 0">
                          <td colspan="10">Sin Coincidencias...</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <br><br>
                  <div class="row">
                    <table>
                      <thead>
                        <tr>
                          <th>EQUIPOS</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                  <div class="row">
                    <table class="bordered highlight responsive-table trunkated-table colored-table-green">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>UPS</th>
                          <th>Cliente</th>
                          <th>Sucursal</th>
                          <th>Nombre Responsable</th>
                          <th>Dirección Correo</th>
                          <th>Contraseña Correo</th>
                          <th>Usuario Dominio</th>
                          <th>Contraseña Dominio</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr dir-paginate="equipo in filteredEquipos = (techdata_equipos | filter:searchTermTechData | filter: ((selectClienteForTechDataFilter >= 0) || undefined) && {id_cliente : selectClienteForTechDataFilter}) | itemsPerPage: 5 track by equipo.id_tde" pagination-id="tdEquiposPaginationId">
                          <td class="vMiddle hCenter"><a ng-click="openModal('Equipos', equipo)" class="btn btnForTable waves-effect waves-light blue">{{equipo.id_tde}}</a></td>
                          <td class="vMiddle hCenter"><a ng-click="equipo.id_ups > 0 ? openModal('UPS', equipo.id_ups):''" class="btn btnForTable waves-effect waves-light" ng-class="equipo.id_ups > 0 ? 'blue' : 'disabled'">{{equipo.id_ups > 0 ? equipo.id_ups : 'N/A'}}</a></td>
                          <td class="vMiddle">{{equipo.nom_cliente}}</td>
                          <td class="vMiddle hCenter">{{equipo.nom_sucursal}}</td>
                          <td class="vMiddle hCenter">{{equipo.responsable}}</td>
                          <td class="vMiddle hCenter" style="word-break: break-all;">{{equipo.nom_correo}}</td>
                          <td class="vMiddle hCenter">{{equipo.clave_correo}}</td>
                          <td class="vMiddle hCenter" style="word-break: break-all;">{{equipo.usuario_dominio}}</td>
                          <td class="vMiddle hCenter">{{equipo.clave_dominio}}</td>
                          <td ng-click="eliminarDatos('Equipos', equipo)"><a class="btn btnForTable waves-effect waves-light red"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        <tr ng-if="filteredEquipos.length == 0">
                          <td colspan="10">Sin Coincidencias...</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row">
                    <dir-pagination-controls boundary-links="true" template-url="dirPagination.tpl.html" pagination-id="tdEquiposPaginationId"></dir-pagination-controls>
                  </div>
                </div>
              </li>
              <!-- END - ADMINISTRAR TECHDATA -->

              <!-- START - CREAR CLIENTES -->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'green':'white'"><i class="fas fa-users"></i></i>Crear Clientes</div>
                <div class="collapsible-body">
                  <div class="container">
                    <ng-form name="cc_form">
                      <div class="row">
                        <h5 class="underlined">Datos del Cliente</h5>
                      </div>
                      <div class="row">
                        <div class="input-field">
                          <input id="newclientNom_cliente" type="text" ng-model="newClient.nom_cliente" required>
                          <label for="newclientNom_cliente">Nombre Completo del Cliente</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field">
                          <input id="newclientRut_cliente" type="text" ng-model="newClient.rut_cliente" pattern="\d{3,8}-[\d|kK]{1}" required>
                          <label for="newclientRut_cliente">R.U.T. del Cliente</label>
                        </div>
                      </div>
                      <div class="row">
                        <h5 class="underlined">Sucursales</h5>
                      </div>
                      <div class="row" ng-repeat="sucursal in newClient.sucursales">
                        <div class="col l5 s5">
                          <div class="input-field">
                            <input id="{{'newclienteNomSucursal'+$index}}" type="text" ng-model="sucursal.nom_sucursal" required>
                            <label for="{{'newclientNomSucursal'+$index}}">Nombre de la Sucursal</label>
                          </div>
                        </div>
                        <div class="col l5 offset-l1 s5 offset-s1">
                          <div class="input-field">
                            <input id="{{'newclientDirSucursal'+$index}}" type="text" ng-model="sucursal.dir_sucursal" required>
                            <label for="{{'newclientDirSucursal'+$index}}">Dirección de la Sucursal</label>
                          </div>
                        </div>
                        <div ng-if="$index > 0" class="col l1 s2">
                          <button class="btn waves-effect waves-light red" ng-click="quitarCampoSucursal(newClient, $index)"><i class="fas fa-times"></i></button>
                        </div>
                      </div>
                      <div class="row">
                        <button class="btn waves-effect waves-light blue" ng-click="agregarCampoSucursal(newClient)"><i class="fas fa-plus"></i></button>
                      </div>
                      &nbsp;
                      <div class="row">
                        <h5 class="underlined">Datos Internos</h5>
                      </div>
                      <div class="row">
                        <div class="input-field">
                          <input id="newclientSigla_cliente" type="text" ng-model="newClient.sigla_cliente" maxlength="5" required>
                          <label for="newclientSigla_cliente">Sigla del Cliente</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field">
                          <input id="newclientDns" type="text" ng-model="newClient.dns" required>
                          <label for="newclientDns">DNS de Desarrollo para el Cliente</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field">
                          <input id="newclientHoras_pactadas" type="number" min="0" max="45" step="1" ng-model="newClient.horas_pactadas" required>
                          <label for="newclientHoras_pactadas" ng-class="newClient.horas_pactadas ? 'active':''">Horas de Soporte Contratadas</label>
                        </div>
                      </div>
                      &nbsp;
                      <div class="divider"></div>
                      &nbsp;
                      <div class="row">
                        <div class="col l5 s6">
                          <button class="btn waves-effect waves-light green" type="submit" ng-disabled="cc_form.$invalid" ng-click="formSubmit('crearCliente')">Enviar<i class="fas fa-share right"></i></button>
                        </div>
                        <div class="col l5 offset-l2 s6">
                          <button class="btn waves-effect waves-light red" type="reset" ng-click="formReset('crearCliente')">Reset<i class="fas fa-eraser right"></i></button>
                        </div>
                      </div>
                    </ng-form>
                  </div>
                </div>
              </li>
              <!-- END - CREAR CLIENTES -->

              <!-- START - ADMINISTRAR CLIENTES -->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'light-green':'white'"><i class="fas fa-cogs"></i>Administrar Clientes</div>
                <div class="collapsible-body">
                  <table class="bordered highlight responsive-table clickable-table trunkated-table colored-table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="cliente in clientes" ng-if="$index > 0" ng-click="verDetalleCliente()">
                        <td>{{cliente.id_cliente}}</td>
                        <td>{{cliente.nom_cliente}}</td>
                        <td><button class="btn waves-effect waves-light red"><i class="fas fa-times"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </li>
              <!-- END - ADMINISTRAR CLIENTES -->

              <!-- START - CREAR OPERADORES-->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'lime':'white'"><i class="fas fa-user-md"></i>Crear Operadores</div>
                <div class="collapsible-body">
                  <div class="container">
                    <ng-form name="co_form">
                      <div class="row">
                        <div class="input-field">
                          <input id="newoperatorNom_cliente" type="text" ng-model="newOperator.nom_operador" required>
                          <label for="newoperatorNom_cliente">Nombre Completo del Operador</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field">
                          <input id="newoperatorRut_cliente" type="text" ng-model="newOperator.rut_operador" pattern="\d{3,8}-[\d|kK]{1}" required>
                          <label for="newoperatorRut_cliente">R.U.T. del Operador</label>
                        </div>
                      </div>
                      &nbsp;
                      <div class="divider"></div>
                      &nbsp;
                      <div class="row">
                        <div class="col l5 s6">
                          <button class="btn waves-effect waves-light green" type="submit" ng-disabled="co_form.$invalid" ng-click="formSubmit('crearOperador')">Enviar<i class="fas fa-share right"></i></button>
                        </div>
                        <div class="col l5 offset-l2 s6">
                          <button class="btn waves-effect waves-light red" type="reset" ng-click="formReset('crearOperador')">Reset<i class="fas fa-eraser right"></i></button>
                        </div>
                      </div>
                    </ng-form>
                  </div>
                </div>
              </li>
              <!-- END - CREAR OPERADORES -->

              <!-- START - ADMINISTRAR OPERADORES -->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'yellow':'white'"><i class="fas fa-search"></i>Administrar Operadores</div>
                <div class="collapsible-body">
                </div>
              </li>
              <!-- END - ADMINISTRAR OPERADORES -->

              <!-- START - ADMINISTRAR MI CUENTA -->
              <li ng-show="isAdmin.status">
                <div class="collapsible-header" ng-class="online ? 'amber':'white'"><i class="fas fa-user"></i>Administrar Mi Cuenta</div>
                <div class="collapsible-body">
                </div>
              </li>
              <!-- END - ADMINISTRAR MI CUENTA -->

              <!-- START - SUPERADMINISTRADOR -->
              <li ng-show="!isAdmin.status">
                <div class="collapsible-header blue-grey"><i class="fab fa-hotjar"></i>Menu de SuperAdministrador</div>
                <div class="collapsible-body">
                  <div class="container">
                    <ng-form name="ra_form">
                      <div class="row">
                        <h5 class="underlined">Ingresar como Administrador</h5>
                      </div>
                      <div class="row">
                        <div class="col l5 s12">
                          <div class="input-field">
                            <input id="superadmin_pass" type="password" class="validate" ng-model="newAdministrator.superadmin_pass" required="required">
                            <label for="superadmin_pass">Contraseña de SuperAdministrador</label>
                          </div>
                        </div>
                        <div class="col l5 offset-l2 s12">
                          <div class="input-field">
                            <input id="admin_id" name="admin_id" type="password" class="validate" ng-model="newAdministrator.admin_id" required="required">
                            <label for="admin_id">ID de Operador</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col l5 s6">
                          <button class="btn waves-effect waves-light green" type="submit" ng-disabled="ra_form.$invalid" ng-click="formSubmit('registrarAdministrador')">Enviar<i class="fas fa-share right"></i></button>
                        </div>
                        <div class="col l5 offset-l2 s6">
                          <button class="btn waves-effect waves-light red" type="reset" ng-click="formReset('registrarAdministrador')">Reset<i class="fas fa-eraser right"></i></button>
                        </div>
                      </div>
                    </ng-form>
                  </div>
                </div>
              </li>
              <!-- END - SUPERADMINISTRADOR -->
            </ul>
          </div>
        </div>
      </div>
  </main>
  <footer class="footer grey darken-3" style="padding-top: 10px; padding-bottom: 10px;">
    <div class="container">
      <div class="footer-copyright grey darken-3 right">
        <a class="grey-text text-lighten-4" href="mailto: l.arancibiaf@gmail.com">© <?php echo constant("envAuthor") ?> AngularJS Dev</a><br>
        <a class="grey-text text-lighten-4" href="#!/">Compilación: <?php echo constant("envShortSHA") ?></a><br>
        <a class="gre-text text-lighten-4" href="#!/">Modo: <?php echo constant("envBranch") ?></a>
      </div>
    </div>
  </footer>
</body>
<!--
<script>
  if('serviceWorker' in navigator) {
    navigator.serviceWorker
    .register('/app/serviceWorker.js')
    .then(function() { console.log("Service Worker Registered"); });
  }
</script>
-->

</html>

</html>