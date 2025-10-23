<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/ucsc_icon.png') }}" type="image/x-icon">
    <title>UCSC - HabilProf</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .ucsc-header {
            background-color: #b30600ff;
            color: white;
        }
        .sidebar {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .stats-card {
            border-left: 4px solid #0056b3;
        }
        .sync-status {
            font-size: 0.8rem;
        }
        .nav-link {
            color: #495057;
        }
        .nav-link:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="ucsc-header py-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col">
                    <h4 class="mb-0"><a href=""><img src="{{ asset('images/ucsc_logo.png') }}" alt="Logo" width=180></a></h4>
                </div>
                <div class="col-auto">
                    <span class="me-3"><i class="bi bi-person-circle"></i> Admin_DINF</span>
                    <button class="btn btn-sm btn-outline-light">Salir</button>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4>Gestión de Habilitaciones Profesionales</h4>
                    <div class="sync-status text-success">
                        <i class="bi bi-check-circle-fill"></i> Sincronizado hace 30s
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 mb-3">
                        <div class="card stats-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">📊 45</h5>
                                <p class="card-text">Habilitaciones Activas</p>
                                <small class="text-success">+5 este semestre</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stats-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">🔧 25</h5>
                                <p class="card-text">Proyecto Ingeniería</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stats-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">📚 12</h5>
                                <p class="card-text">Proyecto Investigación</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card stats-card h-100">
                            <div class="card-body">
                                <h5 class="card-title">👥 8</h5>
                                <p class="card-text">Práctica Tutelada</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Search and Actions -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar por RUT alumno...">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option>Todas las modalidades</option>
                            <option>Proyecto Ingeniería</option>
                            <option>Proyecto Investigación</option>
                            <option>Práctica Tutelada</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary w-100">
                            <i class="bi bi-plus-circle"></i> Nueva Habilitación
                        </button>
                    </div>
                </div>

                <!-- Table -->
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0"><i class="bi bi-table me-2"></i>Habilitaciones Registradas</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>RUT Alumno</th>
                                        <th>Nombre Alumno</th>
                                        <th>Modalidad</th>
                                        <th>Profesor Guía</th>
                                        <th>Semestre</th>
                                        <th>Nota</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12.345.678-9</td>
                                        <td>María González</td>
                                        <td><span class="badge bg-primary">PrIng</span></td>
                                        <td>Dr. Pérez</td>
                                        <td>2025-1</td>
                                        <td><strong>6.5</strong></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>23.456.789-0</td>
                                        <td>Carlos López</td>
                                        <td><span class="badge bg-success">PrTut</span></td>
                                        <td>Dra. Ríos</td>
                                        <td>2025-1</td>
                                        <td>-</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>34.567.890-1</td>
                                        <td>Ana Silva</td>
                                        <td><span class="badge bg-warning">PrInv</span></td>
                                        <td>Dr. Muñoz</td>
                                        <td>2025-1</td>
                                        <td><strong>5.8</strong></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
