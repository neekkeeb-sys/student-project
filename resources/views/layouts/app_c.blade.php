<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f0f2f5;
        }
        .navbar {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            padding: 15px 0;
        }
        .navbar-brand {
            font-size: 22px;
            font-weight: 700;
            color: #fff !important;
            letter-spacing: 1px;
        }
        .navbar-brand span {
            color: #e94560;
        }
        .nav-link {
            color: #ccc !important;
            font-weight: 500;
            margin: 0 5px;
        }
        .nav-link:hover, .nav-link.active {
            color: #e94560 !important;
        }
        .nav-link i {
            margin-right: 6px;
        }
        .page-title {
            font-size: 24px;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 20px;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        .card-body {
            padding: 30px;
        }
        .form-label {
            font-weight: 600;
            color: #333;
        }
        .form-control, .form-select {
            border-radius: 8px;
            border: 1px solid #dde1e7;
            padding: 10px 14px;
            font-size: 14px;
        }
        .form-control:focus, .form-select:focus {
            border-color: #e94560;
            box-shadow: 0 0 0 3px rgba(233,69,96,0.15);
        }
        .btn-add {
            background: linear-gradient(135deg, #e94560, #c73652);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 9px 20px;
            font-weight: 600;
            font-size: 14px;
        }
        .btn-add:hover {
            background: linear-gradient(135deg, #c73652, #a62b43);
            color: #fff;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(233,69,96,0.4);
        }
        .btn-edit {
            background: linear-gradient(135deg, #0ea5e9, #0284c7);
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 5px 12px;
            font-size: 13px;
            font-weight: 500;
        }
        .btn-edit:hover {
            background: linear-gradient(135deg, #0284c7, #0369a1);
            color: #fff;
        }
        .btn-delete {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 5px 12px;
            font-size: 13px;
            font-weight: 500;
        }
        .btn-delete:hover {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            color: #fff;
        }
        .table thead th {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            padding: 14px 16px;
            border: none;
        }
        .table tbody td {
            padding: 12px 16px;
            vertical-align: middle;
            font-size: 14px;
            color: #444;
        }
        .table-hover tbody tr:hover {
            background-color: #f8f9ff;
        }
        .alert-success {
            border-radius: 8px;
            border-left: 4px solid #22c55e;
            background-color: #f0fdf4;
            color: #166534;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-graduation-cap me-2"></i>Student<span>Project</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('students.*') ? 'active' : '' }}" href="{{ route('students.index') }}">
                            <i class="fas fa-user-graduate"></i>Students
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('country.*') ? 'active' : '' }}" href="{{ route('country.index') }}">
                            <i class="fas fa-globe"></i>Countries
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('district.*') ? 'active' : '' }}" href="{{ route('district.index') }}">
                            <i class="fas fa-map-marker-alt"></i>Districts
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>