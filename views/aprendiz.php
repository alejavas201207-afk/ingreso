<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        Portal Académico | Dashboard del Aprendiz
    </title>


    <!-- =====================================================
         BOOTSTRAP
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">


    <!-- =====================================================
         BOOTSTRAP ICONS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


    <style>

        /* =====================================================
           VARIABLES - COLORIMETRÍA SENA
        ====================================================== */

        :root {

            /* COLORES INSTITUCIONALES */

            --sena-green: #39A900;
            --sena-green-dark: #007832;

            --sena-blue: #00304D;
            --sena-purple: #71277A;
            --sena-cyan: #50E5F9;
            --sena-yellow: #FDC300;


            /* FONDOS */

            --bg-dark: #0B1110;
            --card-dark: #101817;
            --input-bg: #17221F;


            /* BORDES */

            --border-dark: rgba(57, 169, 0, 0.20);
            --border-focus: rgba(57, 169, 0, 0.60);


            /* TEXTOS */

            --text-white: #FFFFFF;
            --text-light: #F6F6F6;
            --text-muted: #A7B2AD;
            --text-secondary: #7F8D87;


            /* BOTONES */

            --primary: #39A900;
            --primary-hover: #007832;

            --success: #39A900;
        }


        /* =====================================================
           RESET
        ====================================================== */

        * {
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {

            margin: 0;

            min-height: 100vh;

            background: var(--bg-dark);

            color: var(--text-light);

            font-family:
                "Segoe UI",
                system-ui,
                -apple-system,
                BlinkMacSystemFont,
                sans-serif;
        }


        button,
        input,
        select,
        textarea {

            font-family: inherit;
        }


        /* =====================================================
           SCROLLBAR
        ====================================================== */

        ::-webkit-scrollbar {
            width: 7px;
            height: 7px;
        }


        ::-webkit-scrollbar-track {
            background: var(--bg-dark);
        }


        ::-webkit-scrollbar-thumb {

            background: var(--sena-green-dark);

            border-radius: 20px;
        }


        ::-webkit-scrollbar-thumb:hover {

            background: var(--sena-green);
        }


        /* =====================================================
           SIDEBAR
        ====================================================== */

        .sidebar {

            position: fixed;

            top: 20px;
            left: 20px;
            bottom: 20px;

            width: 82px;

            background: var(--card-dark);

            border: 1px solid var(--border-dark);

            border-radius: 28px;

            padding: 18px 12px;

            display: flex;

            flex-direction: column;

            align-items: center;

            z-index: 1000;

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.25);
        }


        /* =====================================================
           LOGO SIDEBAR
        ====================================================== */

        .sidebar-logo {

            width: 48px;
            height: 48px;

            background: var(--sena-green);

            border-radius: 16px;

            display: flex;

            align-items: center;
            justify-content: center;

            color: var(--text-white);

            font-size: 22px;

            margin-bottom: 28px;

            box-shadow:
                0 8px 20px rgba(57, 169, 0, 0.20);
        }


        /* =====================================================
           MENU SIDEBAR
        ====================================================== */

        .sidebar-nav {

            width: 100%;

            display: flex;

            flex-direction: column;

            align-items: center;

            gap: 10px;
        }


        .sidebar-btn {

            width: 48px;
            height: 48px;

            border: none;

            border-radius: 16px;

            background: transparent;

            color: var(--text-muted);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 18px;

            cursor: pointer;

            transition: all 0.25s ease;
        }


        .sidebar-btn:hover {

            background: var(--input-bg);

            color: var(--text-white);

            transform: translateY(-2px);
        }


        .sidebar-btn.active {

            background: var(--sena-green);

            color: var(--text-white);

            box-shadow:
                0 8px 20px rgba(57, 169, 0, 0.25);
        }


        /* =====================================================
           PARTE INFERIOR SIDEBAR
        ====================================================== */

        .sidebar-bottom {

            margin-top: auto;

            display: flex;

            flex-direction: column;

            align-items: center;

            gap: 12px;
        }


        .sidebar-avatar {

            width: 42px;
            height: 42px;

            border-radius: 50%;

            background: var(--sena-purple);

            color: var(--text-white);

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 700;

            font-size: 14px;
        }


        /* =====================================================
           CONTENIDO PRINCIPAL
        ====================================================== */

        .main-content {

            margin-left: 124px;

            padding: 28px 30px 40px;

            min-height: 100vh;
        }


        /* =====================================================
           HEADER
        ====================================================== */

        .dashboard-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 20px;

            margin-bottom: 28px;
        }


        .welcome-title {

            margin: 0;

            color: var(--text-white);

            font-size: 28px;

            font-weight: 700;
        }


        .welcome-title span {

            color: var(--sena-green);
        }


        .welcome-subtitle {

            margin: 6px 0 0;

            color: var(--text-muted);

            font-size: 13px;
        }


        /* =====================================================
           USUARIO HEADER
        ====================================================== */

        .user-area {

            display: flex;

            align-items: center;

            gap: 14px;
        }


        .notification-btn {

            width: 45px;
            height: 45px;

            border: 1px solid var(--border-dark);

            border-radius: 14px;

            background: var(--card-dark);

            color: var(--text-muted);

            position: relative;

            cursor: pointer;

            transition: 0.25s;
        }


        .notification-btn:hover {

            color: var(--sena-green);

            border-color: var(--border-focus);
        }


        .notification-dot {

            position: absolute;

            top: 8px;
            right: 8px;

            width: 7px;
            height: 7px;

            background: var(--sena-green);

            border-radius: 50%;
        }


        .user-info {

            display: flex;

            align-items: center;

            gap: 10px;
        }


        .user-avatar {

            width: 45px;
            height: 45px;

            border-radius: 15px;

            background: var(--sena-green-dark);

            color: var(--text-white);

            display: flex;

            align-items: center;

            justify-content: center;

            font-weight: 700;
        }


        .user-name {

            color: var(--text-white);

            font-size: 13px;

            font-weight: 600;
        }


        .user-role {

            color: var(--text-secondary);

            font-size: 11px;

            margin-top: 2px;
        }


        /* =====================================================
           CARDS
        ====================================================== */

        .dashboard-card {

            height: 100%;

            padding: 22px;

            background: var(--card-dark);

            border: 1px solid var(--border-dark);

            border-radius: 22px;

            box-shadow:
                0 12px 35px rgba(0, 0, 0, 0.16);

            transition: border-color 0.25s ease,
                        transform 0.25s ease;
        }


        .dashboard-card:hover {

            border-color: var(--border-focus);
        }


        .card-title {

            color: var(--text-white);

            font-size: 16px;

            font-weight: 700;

            margin-bottom: 4px;
        }


        .card-subtitle {

            color: var(--text-secondary);

            font-size: 11px;

            margin-bottom: 18px;
        }


        /* =====================================================
           ESTADÍSTICAS
        ====================================================== */

        .stat-card {

            position: relative;

            overflow: hidden;
        }


        .stat-icon {

            width: 48px;
            height: 48px;

            border-radius: 15px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 15px;

            font-size: 20px;
        }


        .stat-green {

            background: rgba(57, 169, 0, 0.14);

            color: var(--sena-green);
        }


        .stat-blue {

            background: rgba(0, 48, 77, 0.35);

            color: var(--sena-cyan);
        }


        .stat-purple {

            background: rgba(113, 39, 122, 0.20);

            color: var(--sena-purple);
        }


        .stat-yellow {

            background: rgba(253, 195, 0, 0.13);

            color: var(--sena-yellow);
        }


        .stat-number {

            color: var(--text-white);

            font-size: 27px;

            font-weight: 700;

            line-height: 1;
        }


        .stat-label {

            color: var(--text-muted);

            font-size: 11px;

            margin-top: 6px;
        }


        /* =====================================================
           PROGRESO
        ====================================================== */

        .progress {

            height: 8px;

            background: var(--input-bg);

            border-radius: 20px;

            overflow: hidden;
        }


        .progress-bar {

            background: var(--sena-green);

            border-radius: 20px;
        }


        /* =====================================================
           BADGES
        ====================================================== */

        .status-badge {

            display: inline-flex;

            align-items: center;

            gap: 5px;

            border-radius: 20px;

            padding: 6px 10px;

            font-size: 9px;

            font-weight: 600;

            white-space: nowrap;
        }


        .status-success {

            background: rgba(57, 169, 0, 0.13);

            color: var(--sena-green);
        }


        .status-warning {

            background: rgba(253, 195, 0, 0.12);

            color: var(--sena-yellow);
        }


        .status-danger {

            background: rgba(113, 39, 122, 0.15);

            color: #c58bd0;
        }


        .status-info {

            background: rgba(80, 229, 249, 0.10);

            color: var(--sena-cyan);
        }


        /* =====================================================
           ACCIONES RÁPIDAS
        ====================================================== */

        .quick-grid {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 11px;
        }


        .quick-action {

            background: var(--input-bg);

            border: 1px solid var(--border-dark);

            border-radius: 17px;

            padding: 16px 10px;

            text-align: center;

            cursor: pointer;

            transition: 0.25s;
        }


        .quick-action:hover {

            border-color: var(--sena-green);

            transform: translateY(-2px);
        }


        .quick-action i {

            display: block;

            color: var(--sena-green);

            font-size: 20px;

            margin-bottom: 7px;
        }


        .quick-action span {

            color: var(--text-muted);

            font-size: 10px;
        }


        /* =====================================================
           ACTIVIDAD
        ====================================================== */

        .notification-item {

            display: flex;

            gap: 12px;

            padding: 14px 0;

            border-bottom: 1px solid var(--border-dark);
        }


        .notification-item:last-child {

            border-bottom: none;
        }


        .notification-icon {

            min-width: 38px;
            height: 38px;

            border-radius: 12px;

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .notification-icon.green {

            background: rgba(57, 169, 0, 0.13);

            color: var(--sena-green);
        }


        .notification-icon.yellow {

            background: rgba(253, 195, 0, 0.12);

            color: var(--sena-yellow);
        }


        .notification-icon.cyan {

            background: rgba(80, 229, 249, 0.10);

            color: var(--sena-cyan);
        }


        .notification-title {

            color: var(--text-white);

            font-size: 12px;

            font-weight: 600;

            margin-bottom: 3px;
        }


        .notification-text {

            color: var(--text-secondary);

            font-size: 10px;

            line-height: 1.5;

            margin: 0;
        }


        /* =====================================================
           TABS
        ====================================================== */

        .dashboard-tabs {

            display: flex;

            gap: 7px;

            padding: 7px;

            margin-bottom: 22px;

            background: var(--card-dark);

            border: 1px solid var(--border-dark);

            border-radius: 18px;

            overflow-x: auto;
        }


        .dashboard-tabs .nav-link {

            color: var(--text-muted);

            background: transparent;

            border-radius: 13px;

            padding: 10px 15px;

            font-size: 11px;

            font-weight: 600;

            white-space: nowrap;

            border: none;
        }


        .dashboard-tabs .nav-link:hover {

            background: var(--input-bg);

            color: var(--text-white);
        }


        .dashboard-tabs .nav-link.active {

            background: var(--sena-green);

            color: var(--text-white);

            box-shadow:
                0 5px 15px rgba(57, 169, 0, 0.18);
        }


        /* =====================================================
           TABLA ASISTENCIA
        ====================================================== */

        .table {

            --bs-table-bg: transparent;

            --bs-table-color: var(--text-light);

            margin-bottom: 0;
        }


        .table thead th {

            color: var(--text-secondary);

            border-bottom: 1px solid var(--border-dark);

            padding: 13px;

            font-size: 10px;

            font-weight: 600;

            text-transform: uppercase;
        }


        .table tbody td {

            color: var(--text-muted);

            border-bottom: 1px solid rgba(57, 169, 0, 0.08);

            padding: 14px 13px;

            font-size: 11px;
        }


        .table tbody tr:hover {

            background: rgba(57, 169, 0, 0.035);
        }


        /* =====================================================
           CALENDARIO
        ====================================================== */

        .calendar-grid {

            display: grid;

            grid-template-columns: repeat(7, 1fr);

            gap: 8px;
        }


        .calendar-day-header {

            color: var(--text-secondary);

            text-align: center;

            padding: 8px;

            font-size: 10px;

            font-weight: 600;
        }


        .calendar-day {

            min-height: 75px;

            padding: 8px;

            background: var(--input-bg);

            border: 1px solid var(--border-dark);

            border-radius: 12px;

            color: var(--text-muted);

            font-size: 10px;

            transition: 0.2s;
        }


        .calendar-day:hover {

            border-color: var(--sena-green);
        }


        .calendar-day.today {

            border-color: var(--sena-green);

            color: var(--text-white);

            box-shadow:
                inset 0 0 0 1px var(--sena-green);
        }


        .event-badge {

            display: block;

            margin-top: 8px;

            padding: 4px;

            border-radius: 6px;

            font-size: 7px;

            white-space: nowrap;

            overflow: hidden;

            text-overflow: ellipsis;
        }


        .event-green {

            background: rgba(57, 169, 0, 0.17);

            color: var(--sena-green);
        }


        .event-yellow {

            background: rgba(253, 195, 0, 0.14);

            color: var(--sena-yellow);
        }


        .event-purple {

            background: rgba(113, 39, 122, 0.18);

            color: #c58bd0;
        }


        /* =====================================================
           FORMULARIOS
        ====================================================== */

        .form-label {

            color: var(--text-muted);

            font-size: 11px;

            font-weight: 600;
        }


        .form-control,
        .form-select {

            background: var(--input-bg);

            color: var(--text-light);

            border: 1px solid var(--border-dark);

            border-radius: 12px;

            padding: 11px 13px;

            font-size: 11px;
        }


        .form-control:focus,
        .form-select:focus {

            background: var(--input-bg);

            color: var(--text-white);

            border-color: var(--border-focus);

            box-shadow:
                0 0 0 3px rgba(57, 169, 0, 0.08);
        }


        .form-control::placeholder {

            color: var(--text-secondary);
        }


        .form-select option {

            background: var(--input-bg);

            color: var(--text-white);
        }


        /* =====================================================
           BOTONES
        ====================================================== */

        .btn-sena {

            background: var(--primary);

            color: var(--text-white);

            border: none;

            border-radius: 12px;

            padding: 11px 18px;

            font-size: 11px;

            font-weight: 600;

            transition: 0.25s;
        }


        .btn-sena:hover {

            background: var(--primary-hover);

            color: var(--text-white);

            transform: translateY(-1px);
        }


        .btn-outline-sena {

            background: transparent;

            color: var(--sena-green);

            border: 1px solid var(--sena-green);

            border-radius: 10px;

            padding: 7px 11px;

            font-size: 11px;

            transition: 0.2s;
        }


        .btn-outline-sena:hover {

            background: var(--sena-green);

            color: var(--text-white);
        }


        /* =====================================================
           COMPETENCIAS
        ====================================================== */

        .competency-card {

            height: 100%;

            padding: 18px;

            background: var(--input-bg);

            border: 1px solid var(--border-dark);

            border-radius: 17px;

            transition: 0.25s;
        }


        .competency-card:hover {

            border-color: var(--border-focus);

            transform: translateY(-2px);
        }


        .competency-icon {

            width: 40px;
            height: 40px;

            border-radius: 12px;

            background: rgba(57, 169, 0, 0.13);

            color: var(--sena-green);

            display: flex;

            align-items: center;

            justify-content: center;

            margin-bottom: 13px;
        }


        .competency-title {

            color: var(--text-white);

            font-size: 12px;

            font-weight: 600;

            margin: 10px 0 6px;
        }


        .competency-description {

            color: var(--text-secondary);

            font-size: 9px;

            line-height: 1.5;

            margin-bottom: 15px;
        }


        /* =====================================================
           INFORMACIÓN DEL PROGRAMA
        ====================================================== */

        .info-label {

            color: var(--text-secondary);

            font-size: 10px;

            margin-bottom: 4px;
        }


        .info-value {

            color: var(--text-white);

            font-size: 11px;

            font-weight: 600;
        }


        /* =====================================================
           RESPONSIVE TABLET
        ====================================================== */

        @media (max-width: 1000px) {

            .sidebar {

                width: 70px;

                left: 14px;

                top: 14px;

                bottom: 14px;

                border-radius: 22px;

                padding: 15px 8px;
            }


            .sidebar-logo {

                width: 43px;

                height: 43px;
            }


            .sidebar-btn {

                width: 43px;

                height: 43px;
            }


            .main-content {

                margin-left: 98px;

                padding: 22px;
            }

        }


        /* =====================================================
           RESPONSIVE MÓVIL
        ====================================================== */

        @media (max-width: 700px) {

            body {

                padding-bottom: 95px;
            }


            .sidebar {

                position: fixed;

                top: auto;

                left: 15px;

                right: 15px;

                bottom: 15px;

                width: auto;

                height: 65px;

                padding: 8px 12px;

                flex-direction: row;

                border-radius: 20px;
            }


            .sidebar-logo {

                width: 43px;

                height: 43px;

                margin: 0 8px 0 0;
            }


            .sidebar-nav {

                flex-direction: row;

                justify-content: center;

                gap: 4px;
            }


            .sidebar-btn {

                width: 42px;

                height: 42px;

                border-radius: 13px;
            }


            .sidebar-nav .sidebar-btn:nth-child(n+5) {

                display: none;
            }


            .sidebar-bottom {

                margin: 0 0 0 auto;

                flex-direction: row;
            }


            .sidebar-bottom .sidebar-btn {

                display: none;
            }


            .sidebar-avatar {

                width: 38px;

                height: 38px;
            }


            .main-content {

                margin-left: 0;

                padding: 20px 15px;

                padding-bottom: 95px;
            }


            .dashboard-header {

                align-items: flex-start;
            }


            .welcome-title {

                font-size: 21px;
            }


            .welcome-subtitle {

                font-size: 11px;
            }


            .user-info > div {

                display: none;
            }


            .dashboard-card {

                padding: 17px;

                border-radius: 18px;
            }


            .calendar-grid {

                gap: 4px;
            }


            .calendar-day {

                min-height: 55px;

                padding: 5px;

                font-size: 9px;
            }


            .event-badge {

                font-size: 6px;
            }

        }


        /* =====================================================
           MÓVIL PEQUEÑO
        ====================================================== */

        @media (max-width: 450px) {

            .notification-btn {

                width: 40px;

                height: 40px;
            }


            .user-avatar {

                width: 40px;

                height: 40px;
            }


            .sidebar {

                left: 8px;

                right: 8px;

                bottom: 8px;
            }


            .sidebar-logo {

                display: none;
            }


            .sidebar-nav {

                width: 100%;
            }


            .sidebar-btn {

                width: 39px;

                height: 39px;
            }

        }

    </style>

</head>


<body>


<!-- =========================================================
     SIDEBAR
========================================================== -->

<aside class="sidebar">


    <!-- LOGO -->

    <div class="sidebar-logo">

        <i class="bi bi-mortarboard-fill"></i>

    </div>


    <!-- MENÚ -->

    <nav class="sidebar-nav">


        <!-- INICIO -->

        <button
            class="sidebar-btn active"
            id="side-home"
            title="Inicio"
            onclick="activarTab('notes-tab', this)">

            <i class="bi bi-grid-1x2-fill"></i>

        </button>


        <!-- CALENDARIO -->

        <button
            class="sidebar-btn"
            title="Calendario"
            onclick="activarTab('calendar-tab', this)">

            <i class="bi bi-calendar3"></i>

        </button>


        <!-- ASISTENCIA -->

        <button
            class="sidebar-btn"
            title="Asistencia"
            onclick="activarTab('attendance-tab', this)">

            <i class="bi bi-person-check"></i>

        </button>


        <!-- COMPETENCIAS -->

        <button
            class="sidebar-btn"
            title="Competencias"
            onclick="activarTab('competencies-tab', this)">

            <i class="bi bi-award"></i>

        </button>


        <!-- DOCUMENTOS -->

        <button
            class="sidebar-btn"
            title="Documentos">

            <i class="bi bi-folder2"></i>

        </button>


        <!-- MENSAJES -->

        <button
            class="sidebar-btn"
            title="Mensajes">

            <i class="bi bi-chat-dots"></i>

        </button>

    </nav>


    <!-- PARTE INFERIOR -->

    <div class="sidebar-bottom">


        <button
            class="sidebar-btn"
            title="Configuración">

            <i class="bi bi-gear"></i>

        </button>


        <div class="sidebar-avatar">
            P
        </div>


    </div>

</aside>



<!-- =========================================================
     CONTENIDO
========================================================== -->

<main class="main-content">


    <!-- =====================================================
         HEADER
    ====================================================== -->

    <header class="dashboard-header">


        <div>

            <h1 class="welcome-title">

                Hola,
                <span>Paula</span>

            </h1>


            <p class="welcome-subtitle">

                Aquí tienes un resumen de tu actividad académica.

            </p>

        </div>


        <!-- USUARIO -->

        <div class="user-area">


            <!-- NOTIFICACIONES -->

            <button
                class="notification-btn"
                title="Notificaciones">

                <i class="bi bi-bell"></i>

                <span class="notification-dot"></span>

            </button>


            <!-- PERFIL -->

            <div class="user-info">


                <div class="user-avatar">

                    P

                </div>


                <div>

                    <div class="user-name">

                        Paula Duque

                    </div>


                    <div class="user-role">

                        Aprendiz ADSO

                    </div>

                </div>


            </div>


        </div>

    </header>



    <!-- =====================================================
         ESTADÍSTICAS
    ====================================================== -->

    <div class="row g-3 mb-4">


        <!-- ASISTENCIA -->

        <div class="col-6 col-xl-3">

            <div class="dashboard-card stat-card">


                <div class="stat-icon stat-green">

                    <i class="bi bi-person-check"></i>

                </div>


                <div class="stat-number">

                    92%

                </div>


                <div class="stat-label">

                    Asistencia

                </div>


            </div>

        </div>



        <!-- COMPETENCIAS -->

        <div class="col-6 col-xl-3">

            <div class="dashboard-card stat-card">


                <div class="stat-icon stat-blue">

                    <i class="bi bi-book"></i>

                </div>


                <div class="stat-number">

                    8

                </div>


                <div class="stat-label">

                    Competencias

                </div>


            </div>

        </div>



        <!-- APROBADAS -->

        <div class="col-6 col-xl-3">

            <div class="dashboard-card stat-card">


                <div class="stat-icon stat-purple">

                    <i class="bi bi-award"></i>

                </div>


                <div class="stat-number">

                    2

                </div>


                <div class="stat-label">

                    Competencias aprobadas

                </div>


            </div>

        </div>



        <!-- NOTIFICACIONES -->

        <div class="col-6 col-xl-3">

            <div class="dashboard-card stat-card">


                <div class="stat-icon stat-yellow">

                    <i class="bi bi-bell"></i>

                </div>


                <div class="stat-number">

                    2

                </div>


                <div class="stat-label">

                    Notificaciones nuevas

                </div>


            </div>

        </div>


    </div>



    <!-- =====================================================
         PROGRESO + ACCIONES
    ====================================================== -->

    <div class="row g-3 mb-4">


        <!-- PROGRESO -->

        <div class="col-lg-7">

            <div class="dashboard-card">


                <div class="d-flex justify-content-between align-items-start mb-4">


                    <div>

                        <div class="card-title">

                            Progreso académico

                        </div>


                        <div class="card-subtitle">

                            Seguimiento de tu formación

                        </div>

                    </div>


                    <span class="status-badge status-success">

                        ● En formación

                    </span>


                </div>



                <!-- BARRA -->

                <div class="mb-4">


                    <div class="d-flex justify-content-between mb-2">


                        <span class="stat-label">

                            Progreso general

                        </span>


                        <strong
                            class="small"
                            style="color:var(--text-white);">

                            68%

                        </strong>


                    </div>


                    <div class="progress">

                        <div
                            class="progress-bar"
                            style="width:68%;">

                        </div>

                    </div>


                </div>



                <!-- INFORMACIÓN -->

                <div class="row g-4">


                    <div class="col-6">

                        <div class="info-label">

                            Programa

                        </div>


                        <div class="info-value">

                            Análisis y Desarrollo
                            de Software

                        </div>

                    </div>


                    <div class="col-6">

                        <div class="info-label">

                            Fase actual

                        </div>


                        <div class="info-value">

                            Desarrollo

                        </div>

                    </div>


                    <div class="col-6">

                        <div class="info-label">

                            Estado

                        </div>


                        <div class="info-value">

                            Activo

                        </div>

                    </div>


                    <div class="col-6">

                        <div class="info-label">

                            Modalidad

                        </div>


                        <div class="info-value">

                            Formación

                        </div>

                    </div>


                </div>


            </div>

        </div>



        <!-- ACCIONES RÁPIDAS -->

        <div class="col-lg-5">

            <div class="dashboard-card">


                <div class="card-title">

                    Acciones rápidas

                </div>


                <div class="card-subtitle">

                    Accede rápidamente a tus opciones

                </div>


                <div class="quick-grid">


                    <div
                        class="quick-action"
                        onclick="activarTab('attendance-tab')">

                        <i class="bi bi-person-check"></i>

                        <span>
                            Asistencia
                        </span>

                    </div>


                    <div
                        class="quick-action"
                        onclick="activarTab('calendar-tab')">

                        <i class="bi bi-calendar-event"></i>

                        <span>
                            Calendario
                        </span>

                    </div>


                    <div
                        class="quick-action"
                        onclick="activarTab('competencies-tab')">

                        <i class="bi bi-award"></i>

                        <span>
                            Competencias
                        </span>

                    </div>


                    <div
                        class="quick-action"
                        onclick="mostrarMensaje('Documentos')">

                        <i class="bi bi-file-earmark-text"></i>

                        <span>
                            Documentos
                        </span>

                    </div>


                </div>

            </div>

        </div>


    </div>



    <!-- =====================================================
         TABS
    ====================================================== -->

    <ul
        class="nav nav-pills dashboard-tabs"
        id="mainTab"
        role="tablist">


        <!-- RESUMEN -->

        <li class="nav-item">

            <button
                class="nav-link active"
                id="notes-tab"
                data-bs-toggle="tab"
                data-bs-target="#notes-view"
                type="button"
                role="tab">

                <i class="bi bi-grid me-2"></i>

                Resumen

            </button>

        </li>


        <!-- CALENDARIO -->

        <li class="nav-item">

            <button
                class="nav-link"
                id="calendar-tab"
                data-bs-toggle="tab"
                data-bs-target="#calendar-view"
                type="button"
                role="tab">

                <i class="bi bi-calendar3 me-2"></i>

                Calendario

            </button>

        </li>


        <!-- ASISTENCIA -->

        <li class="nav-item">

            <button
                class="nav-link"
                id="attendance-tab"
                data-bs-toggle="tab"
                data-bs-target="#attendance-view"
                type="button"
                role="tab">

                <i class="bi bi-person-check me-2"></i>

                Asistencia y Excusas

            </button>

        </li>


        <!-- COMPETENCIAS -->

        <li class="nav-item">

            <button
                class="nav-link"
                id="competencies-tab"
                data-bs-toggle="tab"
                data-bs-target="#competencies-view"
                type="button"
                role="tab">

                <i class="bi bi-award me-2"></i>

                Competencias

            </button>

        </li>


    </ul>



    <!-- =====================================================
         CONTENIDO DE LAS PESTAÑAS
    ====================================================== -->

    <div
        class="tab-content"
        id="mainTabContent">



        <!-- =================================================
             1. RESUMEN
        ================================================== -->

        <div
            class="tab-pane fade show active"
            id="notes-view"
            role="tabpanel">


            <div class="row g-3">


                <!-- ACTIVIDAD -->

                <div class="col-lg-7">

                    <div class="dashboard-card">


                        <div class="card-title">

                            Actividad reciente

                        </div>


                        <div class="card-subtitle">

                            Últimos acontecimientos de tu formación

                        </div>



                        <!-- ACTIVIDAD 1 -->

                        <div class="notification-item">


                            <div class="notification-icon green">

                                <i class="bi bi-check-circle"></i>

                            </div>


                            <div>

                                <div class="notification-title">

                                    Excusa aprobada

                                </div>


                                <p class="notification-text">

                                    Tu excusa correspondiente al
                                    20/09 fue validada correctamente.

                                </p>

                            </div>


                        </div>



                        <!-- ACTIVIDAD 2 -->

                        <div class="notification-item">


                            <div class="notification-icon cyan">

                                <i class="bi bi-award"></i>

                            </div>


                            <div>

                                <div class="notification-title">

                                    Nueva competencia evaluada

                                </div>


                                <p class="notification-text">

                                    Se registró una nueva evaluación
                                    en Bases de Datos.

                                </p>

                            </div>


                        </div>



                        <!-- ACTIVIDAD 3 -->

                        <div class="notification-item">


                            <div class="notification-icon yellow">

                                <i class="bi bi-calendar-event"></i>

                            </div>


                            <div>

                                <div class="notification-title">

                                    Sesión sincrónica

                                </div>


                                <p class="notification-text">

                                    La reunión de revisión de sprint
                                    se realizará el viernes a las 8:00 AM.

                                </p>

                            </div>


                        </div>


                    </div>

                </div>



                <!-- RECORDATORIOS -->

                <div class="col-lg-5">

                    <div class="dashboard-card">


                        <div class="card-title">

                            Recordatorios

                        </div>


                        <div class="card-subtitle">

                            Actividades pendientes

                        </div>



                        <!-- RECORDATORIO -->

                        <div class="notification-item">


                            <div class="notification-icon yellow">

                                <i class="bi bi-exclamation-triangle"></i>

                            </div>


                            <div>

                                <div class="notification-title">

                                    Subir evidencias

                                </div>


                                <p class="notification-text">

                                    Caso de estudio pendiente.

                                </p>

                            </div>


                        </div>



                        <!-- RECORDATORIO -->

                        <div class="notification-item">


                            <div class="notification-icon green">

                                <i class="bi bi-check"></i>

                            </div>


                            <div>

                                <div class="notification-title">

                                    Guía 3 revisada

                                </div>


                                <p class="notification-text">

                                    Actividad completada correctamente.

                                </p>

                            </div>


                        </div>


                    </div>

                </div>


            </div>


        </div>



        <!-- =================================================
             2. CALENDARIO
        ================================================== -->

        <div
            class="tab-pane fade"
            id="calendar-view"
            role="tabpanel">


            <div class="dashboard-card">


                <div
                    class="d-flex justify-content-between align-items-center mb-4">


                    <div>

                        <div class="card-title">

                            Calendario de actividades

                        </div>


                        <div class="card-subtitle">

                            Septiembre 2026

                        </div>

                    </div>


                    <div>


                        <button
                            class="btn-outline-sena">

                            <i class="bi bi-chevron-left"></i>

                        </button>


                        <button
                            class="btn-outline-sena">

                            <i class="bi bi-chevron-right"></i>

                        </button>


                    </div>


                </div>



                <div class="calendar-grid">


                    <!-- DÍAS -->

                    <div class="calendar-day-header">
                        Lun
                    </div>

                    <div class="calendar-day-header">
                        Mar
                    </div>

                    <div class="calendar-day-header">
                        Mié
                    </div>

                    <div class="calendar-day-header">
                        Jue
                    </div>

                    <div class="calendar-day-header">
                        Vie
                    </div>

                    <div class="calendar-day-header">
                        Sáb
                    </div>

                    <div class="calendar-day-header">
                        Dom
                    </div>



                    <div class="calendar-day"></div>

                    <div class="calendar-day"></div>


                    <div class="calendar-day">
                        1
                    </div>


                    <div class="calendar-day">
                        2
                    </div>


                    <div class="calendar-day">

                        3

                        <span class="event-badge event-green">

                            Entrega Guía 1

                        </span>

                    </div>


                    <div class="calendar-day">
                        4
                    </div>


                    <div class="calendar-day">
                        5
                    </div>


                    <div class="calendar-day">
                        6
                    </div>


                    <div class="calendar-day">
                        7
                    </div>


                    <div class="calendar-day">
                        8
                    </div>


                    <div class="calendar-day">
                        9
                    </div>


                    <div class="calendar-day">

                        10

                        <span class="event-badge event-yellow">

                            Examen SQL

                        </span>

                    </div>


                    <div class="calendar-day">
                        11
                    </div>


                    <div class="calendar-day">
                        12
                    </div>


                    <div class="calendar-day">
                        13
                    </div>


                    <div class="calendar-day">
                        14
                    </div>


                    <div class="calendar-day">
                        15
                    </div>


                    <div class="calendar-day">
                        16
                    </div>


                    <div class="calendar-day">
                        17
                    </div>


                    <div class="calendar-day">
                        18
                    </div>


                    <div class="calendar-day">
                        19
                    </div>


                    <div class="calendar-day">

                        20

                        <span class="event-badge event-purple">

                            Falta registrada

                        </span>

                    </div>


                    <div class="calendar-day">
                        21
                    </div>


                    <div class="calendar-day">
                        22
                    </div>


                    <div class="calendar-day">
                        23
                    </div>


                    <div class="calendar-day">

                        24

                        <span class="event-badge event-green">

                            Sincronía 8 AM

                        </span>

                    </div>


                    <div class="calendar-day today">

                        25

                    </div>


                    <div class="calendar-day">
                        26
                    </div>


                    <div class="calendar-day">
                        27
                    </div>


                    <div class="calendar-day">
                        28
                    </div>


                    <div class="calendar-day">
                        29
                    </div>


                    <div class="calendar-day">
                        30
                    </div>


                </div>


            </div>


        </div>



        <!-- =================================================
             3. ASISTENCIA
        ================================================== -->

        <div
            class="tab-pane fade"
            id="attendance-view"
            role="tabpanel">


            <div class="row g-3">


                <!-- HISTORIAL -->

                <div class="col-lg-7">

                    <div class="dashboard-card">


                        <div
                            class="d-flex justify-content-between align-items-start mb-4">


                            <div>

                                <div class="card-title">

                                    Historial de asistencia

                                </div>


                                <div class="card-subtitle">

                                    Registro de tus sesiones académicas

                                </div>

                            </div>


                            <span class="status-badge status-success">

                                92% asistencia

                            </span>


                        </div>



                        <div class="table-responsive">


                            <table class="table">


                                <thead>

                                    <tr>

                                        <th>
                                            Fecha
                                        </th>

                                        <th>
                                            Sesión
                                        </th>

                                        <th>
                                            Estado
                                        </th>

                                        <th>
                                            Soporte
                                        </th>

                                    </tr>

                                </thead>


                                <tbody>


                                    <!-- REGISTRO 1 -->

                                    <tr>

                                        <td>
                                            24/09/2026
                                        </td>

                                        <td>
                                            Front-End Avanzado
                                        </td>

                                        <td>

                                            <span
                                                class="status-badge status-success">

                                                ● Asistió

                                            </span>

                                        </td>

                                        <td>
                                            N/A
                                        </td>

                                    </tr>


                                    <!-- REGISTRO 2 -->

                                    <tr>

                                        <td>
                                            20/09/2026
                                        </td>

                                        <td>
                                            Bases de Datos MySQL
                                        </td>

                                        <td>

                                            <span
                                                class="status-badge status-danger">

                                                ● Inasistencia

                                            </span>

                                        </td>

                                        <td>

                                            <span
                                                class="status-badge status-info">

                                                Excusa aprobada

                                            </span>

                                        </td>

                                    </tr>


                                    <!-- REGISTRO 3 -->

                                    <tr>

                                        <td>
                                            15/09/2026
                                        </td>

                                        <td>
                                            Lógica de Programación
                                        </td>

                                        <td>

                                            <span
                                                class="status-badge status-success">

                                                ● Asistió

                                            </span>

                                        </td>

                                        <td>
                                            N/A
                                        </td>

                                    </tr>


                                </tbody>


                            </table>


                        </div>


                    </div>

                </div>



                <!-- EXCUSA -->

                <div class="col-lg-5">

                    <div class="dashboard-card">


                        <div class="card-title">

                            Adjuntar excusa

                        </div>


                        <div class="card-subtitle">

                            Envía el soporte de tu inasistencia

                        </div>



                        <form id="excuseForm">


                            <!-- FECHA -->

                            <div class="mb-3">


                                <label class="form-label">

                                    Fecha de inasistencia

                                </label>


                                <input
                                    type="date"
                                    class="form-control"
                                    required>


                            </div>



                            <!-- MOTIVO -->

                            <div class="mb-3">


                                <label class="form-label">

                                    Motivo de la falta

                                </label>


                                <select
                                    class="form-select"
                                    required>


                                    <option
                                        selected
                                        disabled>

                                        Seleccione una opción...

                                    </option>


                                    <option>

                                        Incapacidad médica

                                    </option>


                                    <option>

                                        Calamidad doméstica / laboral

                                    </option>


                                    <option>

                                        Otra razón justificada

                                    </option>


                                </select>


                            </div>



                            <!-- ARCHIVO -->

                            <div class="mb-3">


                                <label class="form-label">

                                    Adjuntar documento

                                </label>


                                <input
                                    type="file"
                                    class="form-control"
                                    accept=".pdf,.png,.jpg,.jpeg"
                                    required>


                            </div>



                            <!-- OBSERVACIONES -->

                            <div class="mb-3">


                                <label class="form-label">

                                    Observaciones

                                </label>


                                <textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Escribe una observación..."></textarea>


                            </div>



                            <!-- BOTÓN -->

                            <button
                                type="submit"
                                class="btn-sena w-100">


                                <i class="bi bi-send me-2"></i>

                                Enviar justificación


                            </button>


                        </form>


                    </div>

                </div>


            </div>


        </div>



        <!-- =================================================
             4. COMPETENCIAS
        ================================================== -->

        <div
            class="tab-pane fade"
            id="competencies-view"
            role="tabpanel">


            <div class="dashboard-card">


                <div
                    class="d-flex justify-content-between align-items-center mb-4">


                    <div>

                        <div class="card-title">

                            Progreso de competencias

                        </div>


                        <div class="card-subtitle">

                            Consulta el estado de tus competencias

                        </div>

                    </div>


                    <span class="status-badge status-success">

                        2 aprobadas

                    </span>


                </div>



                <div class="row g-3">


                    <!-- COMPETENCIA 1 -->

                    <div class="col-md-6 col-lg-3">

                        <div class="competency-card">


                            <div class="competency-icon">

                                <i class="bi bi-check-lg"></i>

                            </div>


                            <span
                                class="status-badge status-success">

                                Aprobado

                            </span>


                            <div class="competency-title">

                                Análisis de Requerimientos

                            </div>


                            <div class="competency-description">

                                Fase 1 - Definición y modelado
                                de software.

                            </div>


                            <small class="text-secondary">

                                Resultado:

                                <strong style="color:var(--text-white);">

                                    A

                                </strong>

                            </small>


                        </div>

                    </div>



                    <!-- COMPETENCIA 2 -->

                    <div class="col-md-6 col-lg-3">

                        <div class="competency-card">


                            <div class="competency-icon">

                                <i class="bi bi-database-check"></i>

                            </div>


                            <span
                                class="status-badge status-success">

                                Aprobado

                            </span>


                            <div class="competency-title">

                                Diseño de Bases de Datos

                            </div>


                            <div class="competency-description">

                                Fase 2 - Normalización y
                                modelado ER.

                            </div>


                            <small class="text-secondary">

                                Resultado:

                                <strong style="color:var(--text-white);">

                                    A

                                </strong>

                            </small>


                        </div>

                    </div>



                    <!-- COMPETENCIA 3 -->

                    <div class="col-md-6 col-lg-3">

                        <div class="competency-card">


                            <div
                                class="competency-icon"
                                style="
                                    background:rgba(253,195,0,.12);
                                    color:var(--sena-yellow);
                                ">

                                <i class="bi bi-clock"></i>

                            </div>


                            <span
                                class="status-badge status-warning">

                                En curso

                            </span>


                            <div class="competency-title">

                                Desarrollo Web Front-End

                            </div>


                            <div class="competency-description">

                                Fase 3 - Maquetación,
                                HTML, CSS y JavaScript.

                            </div>


                            <small class="text-secondary">

                                Resultado:

                                <strong style="color:var(--text-white);">

                                    Pendiente

                                </strong>

                            </small>


                        </div>

                    </div>



                    <!-- COMPETENCIA 4 -->

                    <div class="col-md-6 col-lg-3">

                        <div
                            class="competency-card"
                            style="opacity:.65;">


                            <div
                                class="competency-icon"
                                style="
                                    background:rgba(113,39,122,.16);
                                    color:var(--sena-purple);
                                ">

                                <i class="bi bi-dash"></i>

                            </div>


                            <span
                                class="status-badge status-danger">

                                Por ver

                            </span>


                            <div class="competency-title">

                                Pruebas e Implantación

                            </div>


                            <div class="competency-description">

                                Fase 4 - Despliegue y
                                pruebas unitarias.

                            </div>


                            <small class="text-secondary">

                                Resultado:

                                <strong style="color:var(--text-white);">

                                    Sin iniciar

                                </strong>

                            </small>


                        </div>

                    </div>


                </div>


            </div>


        </div>


    </div>


</main>



<!-- =========================================================
     BOOTSTRAP JS
========================================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>



<script>

    /* =====================================================
       CAMBIAR ENTRE SECCIONES
    ====================================================== */

    function activarTab(tabId, botonSidebar = null) {


        const tab = document.getElementById(tabId);


        if (!tab) {
            return;
        }


        /* Activar Bootstrap Tab */

        const bootstrapTab =
            new bootstrap.Tab(tab);


        bootstrapTab.show();



        /* Quitar active del sidebar */

        document
            .querySelectorAll('.sidebar-btn')
            .forEach(function(btn) {

                btn.classList.remove('active');

            });



        /* Activar botón seleccionado */

        if (botonSidebar) {

            botonSidebar.classList.add('active');

        }

        else {

            const botones =
                document.querySelectorAll('.sidebar-btn');


            if (tabId === 'notes-tab') {

                botones[0].classList.add('active');

            }

            else if (tabId === 'calendar-tab') {

                botones[1].classList.add('active');

            }

            else if (tabId === 'attendance-tab') {

                botones[2].classList.add('active');

            }

            else if (tabId === 'competencies-tab') {

                botones[3].classList.add('active');

            }

        }

    }



    /* =====================================================
       SINCRONIZAR TABS CON SIDEBAR
    ====================================================== */

    document
        .querySelectorAll('#mainTab .nav-link')
        .forEach(function(tab) {


            tab.addEventListener(
                'shown.bs.tab',
                function() {


                    const tabId =
                        this.id;


                    const botones =
                        document.querySelectorAll('.sidebar-btn');


                    botones.forEach(function(btn) {

                        btn.classList.remove('active');

                    });


                    if (tabId === 'notes-tab') {

                        botones[0].classList.add('active');

                    }


                    if (tabId === 'calendar-tab') {

                        botones[1].classList.add('active');

                    }


                    if (tabId === 'attendance-tab') {

                        botones[2].classList.add('active');

                    }


                    if (tabId === 'competencies-tab') {

                        botones[3].classList.add('active');

                    }

                }
            );

        });



    /* =====================================================
       FORMULARIO DE EXCUSA
    ====================================================== */

    document
        .getElementById('excuseForm')
        .addEventListener('submit', function(e) {


            e.preventDefault();


            alert(
                '¡Excusa y soporte enviados correctamente para revisión del instructor!'
            );


            this.reset();

        });



    /* =====================================================
       MENSAJE PARA OPCIONES FUTURAS
    ====================================================== */

    function mostrarMensaje(nombre) {

        alert(
            nombre +
            ' estará disponible próximamente.'
        );

    }

</script>


</body>

</html>