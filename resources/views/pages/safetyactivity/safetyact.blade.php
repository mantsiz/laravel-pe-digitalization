@extends('layouts.app')

@section('content')
<div class="automotive-safety-background">
    <!-- Header -->
    <div class="header-automotive">
        <div class="header-accent"></div>
        <div class="d-flex align-items-center position-relative z-index-1">
            <img src="{{ asset('images/sugitylogo.png') }}" alt="Sugity Kreasi" class="company-logo">
            <h1 class="safety-title">Safety Activity</h1>
        </div>
    </div>

    <!-- Summary Stats -->
    <div class="container-fluid">
        <div class="row dashboard-summary mb-4">
            <div class="col-md-4 mb-3">
                <div class="summary-card d-flex align-items-center">
                    <div class="safety-indicator success pulse">
                        <span>365</span>
                        <div class="indicator-ring"></div>
                    </div>
                    <div class="ms-3">
                        <h3 class="summary-number mb-0">365 Hari</h3>
                        <p class="summary-label">Tanpa Kecelakaan Kerja</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="summary-card d-flex align-items-center">
                    <div class="safety-indicator primary">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <div class="ms-3">
                        <h3 class="summary-number mb-0">100%</h3>
                        <p class="summary-label">Kepatuhan APD</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="summary-card d-flex align-items-center">
                    <div class="safety-indicator warning">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <div class="ms-3">
                        <h3 class="summary-number mb-0">98%</h3>
                        <p class="summary-label">Audit Keselamatan</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Dashboard Keselamatan -->
            <div class="col-md-6 mb-4">
                <div class="card automotive-card">
                    <div class="card-header automotive-header">
                        <h4 class="mb-0 fw-bold"><i class="fas fa-tachometer-alt me-2"></i>Statistik Keselamatan</h4>
                    </div>
                    <div class="card-body">
                        <div class="safety-trend mb-4">
                            <h5 class="text-center mb-3">Tren Insiden 2023</h5>
                            <div class="trend-chart">
                                <div class="chart-column">
                                    <div class="chart-bar">
                                        <div class="chart-fill q1" style="height: 80%;" data-bs-toggle="tooltip" title="Q1: 12 Insiden"></div>
                                    </div>
                                    <span class="chart-label">Q1</span>
                                </div>
                                <div class="chart-column">
                                    <div class="chart-bar">
                                        <div class="chart-fill q2" style="height: 60%;" data-bs-toggle="tooltip" title="Q2: 8 Insiden"></div>
                                    </div>
                                    <span class="chart-label">Q2</span>
                                </div>
                                <div class="chart-column">
                                    <div class="chart-bar">
                                        <div class="chart-fill q3" style="height: 40%;" data-bs-toggle="tooltip" title="Q3: 5 Insiden"></div>
                                    </div>
                                    <span class="chart-label">Q3</span>
                                </div>
                                <div class="chart-column">
                                    <div class="chart-bar">
                                        <div class="chart-fill q4" style="height: 20%;" data-bs-toggle="tooltip" title="Q4: 3 Insiden"></div>
                                    </div>
                                    <span class="chart-label">Q4</span>
                                </div>
                            </div>
                        </div>
                        <div class="safety-stats">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Q1</th>
                                            <th>Q2</th>
                                            <th>Q3</th>
                                            <th>Q4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Near Miss</td>
                                            <td>12</td>
                                            <td>8</td>
                                            <td>5</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>First Aid</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Medical Treatment</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program Keselamatan -->
            <div class="col-md-6 mb-4">
                <div class="card automotive-card">
                    <div class="card-header automotive-header">
                        <h4 class="mb-0 fw-bold"><i class="fas fa-shield-alt me-2"></i>Program Keselamatan</h4>
                    </div>
                    <div class="card-body">
                        <div class="program-grid">
                            <div class="program-card">
                                <div class="program-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="program-info">
                                    <h5>Safety Patrol</h5>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                                    </div>
                                    <p class="program-desc">Inspeksi harian area produksi</p>
                                </div>
                            </div>
                            <div class="program-card">
                                <div class="program-icon">
                                    <i class="fas fa-fire-extinguisher"></i>
                                </div>
                                <div class="program-info">
                                    <h5>Tanggap Darurat</h5>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                    </div>
                                    <p class="program-desc">Simulasi evakuasi & pemadaman</p>
                                </div>
                            </div>
                            <div class="program-card">
                                <div class="program-icon">
                                    <i class="fas fa-bullhorn"></i>
                                </div>
                                <div class="program-info">
                                    <h5>Kampanye Safety</h5>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                    </div>
                                    <p class="program-desc">Poster & briefing keselamatan</p>
                                </div>
                            </div>
                            <div class="program-card">
                                <div class="program-icon">
                                    <i class="fas fa-user-check"></i>
                                </div>
                                <div class="program-info">
                                    <h5>Behavior Based Safety</h5>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                    </div>
                                    <p class="program-desc">Observasi perilaku aman</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jadwal Pelatihan Keselamatan -->
            <div class="col-md-6 mb-4">
                <div class="card automotive-card">
                    <div class="card-header automotive-header">
                        <h4 class="mb-0 fw-bold"><i class="fas fa-calendar-alt me-2"></i>Jadwal Pelatihan</h4>
                    </div>
                    <div class="card-body">
                        <div class="training-timeline">
                            <div class="training-item">
                                <div class="training-date">
                                    <span class="day">15</span>
                                    <span class="month">JUN</span>
                                </div>
                                <div class="training-info">
                                    <h5>Pelatihan P3K</h5>
                                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>Training Room Lt. 1</p>
                                    <p class="mb-1"><i class="fas fa-users me-2"></i>Tim Produksi (25 orang)</p>
                                    <span class="badge bg-danger">Segera</span>
                                </div>
                                <div class="training-action">
                                    <button class="btn btn-outline-danger rounded-circle"><i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                            <div class="training-item">
                                <div class="training-date">
                                    <span class="day">22</span>
                                    <span class="month">JUN</span>
                                </div>
                                <div class="training-info">
                                    <h5>Pelatihan APAR</h5>
                                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>Area Parkir</p>
                                    <p class="mb-1"><i class="fas fa-users me-2"></i>Semua Departemen (50 orang)</p>
                                    <span class="badge bg-warning">1 Minggu Lagi</span>
                                </div>
                                <div class="training-action">
                                    <button class="btn btn-outline-warning rounded-circle"><i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                            <div class="training-item">
                                <div class="training-date">
                                    <span class="day">29</span>
                                    <span class="month">JUN</span>
                                </div>
                                <div class="training-info">
                                    <h5>Pelatihan Evakuasi</h5>
                                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>Seluruh Pabrik</p>
                                    <p class="mb-1"><i class="fas fa-users me-2"></i>Seluruh Karyawan</p>
                                    <span class="badge bg-info">2 Minggu Lagi</span>
                                </div>
                                <div class="training-action">
                                    <button class="btn btn-outline-info rounded-circle"><i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Laporan Insiden -->
            <div class="col-md-6 mb-4">
                <div class="card automotive-card">
                    <div class="card-header automotive-header">
                        <h4 class="mb-0 fw-bold"><i class="fas fa-exclamation-triangle me-2"></i>Laporan Insiden</h4>
                    </div>
                    <div class="card-body">
                        <div class="incident-grid">
                            <div class="incident-card">
                                <div class="incident-status resolved">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="incident-info">
                                    <div class="d-flex justify-content-between">
                                        <h5>Near Miss - Area Painting</h5>
                                        <span class="incident-date">5 Mei</span>
                                    </div>
                                    <p>Tumpahan cat di lantai yang hampir menyebabkan terpeleset.</p>
                                    <div class="incident-tags">
                                        <span class="incident-tag slip">Terpeleset</span>
                                        <span class="incident-tag area">Painting</span>
                                    </div>
                                </div>
                            </div>
                            <div class="incident-card">
                                <div class="incident-status resolved">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="incident-info">
                                    <div class="d-flex justify-content-between">
                                        <h5>Near Miss - Area Welding</h5>
                                        <span class="incident-date">12 Apr</span>
                                    </div>
                                    <p>Percikan api dari proses pengelasan yang hampir mengenai material mudah terbakar.</p>
                                    <div class="incident-tags">
                                        <span class="incident-tag fire">Api</span>
                                        <span class="incident-tag area">Welding</span>
                                    </div>
                                </div>
                            </div>
                            <div class="incident-card">
                                <div class="incident-status resolved">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="incident-info">
                                    <div class="d-flex justify-content-between">
                                        <h5>First Aid - Area Assembly</h5>
                                        <span class="incident-date">28 Mar</span>
                                    </div>
                                    <p>Luka gores ringan saat menangani komponen dengan tepi tajam.</p>
                                    <div class="incident-tags">
                                        <span class="incident-tag cut">Luka Gores</span>
                                        <span class="incident-tag area">Assembly</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .automotive-safety-background {
        background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset("images/sugitybuilding.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh;
        overflow: auto;
        padding: 20px;
        color: #333;
    }
    .header-automotive {
        background: linear-gradient(90deg, #d32f2f, #f44336);
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    .header-accent {
        position: absolute;
        top: 0;
        right: 0;
        width: 150px;
        height: 100%;
        background: repeating-linear-gradient(
            45deg,
            rgba(255, 255, 255, 0.1),
            rgba(255, 255, 255, 0.1) 10px,
            rgba(255, 255, 255, 0.2) 10px,
            rgba(255, 255, 255, 0.2) 20px
        );
    }
    .company-logo {
        width: 120px;
        margin-right: 20px;
        z-index: 2;
    }
    .safety-title {
        font-size: 36px;
        font-weight: 800;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        margin: 0;
        letter-spacing: 2px;
        z-index: 2;
    }
    .dashboard-summary {
        margin-top: -10px;
    }
    .summary-card {
        background: white;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }
    .summary-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }
    .safety-indicator {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: bold;
        color: white;
        position: relative;
    }
    .safety-indicator.success {
        background: #2ecc71;
    }
    .safety-indicator.primary {
        background: #3498db;
    }
    .safety-indicator.warning {
        background: #f39c12;
    }
    .safety-indicator.pulse {
        animation: pulse 2s infinite;
    }
    .indicator-ring {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 3px solid #2ecc71;
        animation: ring-pulse 2s infinite;
    }
    .summary-number {
        font-size: 28px;
        font-weight: bold;
        color: #333;
    }
    .summary-label {
        color: #666;
        font-size: 16px;
    }
    .automotive-card {
        background-color: white;
        border: none;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
        height: 100%;
    }
    .automotive-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    .automotive-header {
        background: linear-gradient(90deg, #d32f2f, #f44336);
        color: white;
        border: none;
        padding: 15px 20px;
    }
    .trend-chart {
        display: flex;
        justify-content: space-around;
        align-items: flex-end;
        height: 200px;
        padding: 0 20px;
    }
    .chart-column {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 60px;
    }
    .chart-bar {
        width: 40px;
        height: 150px;
        background-color: #f5f5f5;
        border-radius: 4px;
        position: relative;
        overflow: hidden;
    }
    .chart-fill {
        position: absolute;
        bottom: 0;
        width: 100%;
        border-radius: 4px 4px 0 0;
        transition: height 1s ease-in-out;
    }
    .chart-fill.q1 {
        background: linear-gradient(to top, #e74c3c, #c0392b);
    }
    .chart-fill.q2 {
        background: linear-gradient(to top, #e67e22, #d35400);
    }
    .chart-fill.q3 {
        background: linear-gradient(to top, #f1c40f, #f39c12);
    }
    .chart-fill.q4 {
        background: linear-gradient(to top, #2ecc71, #27ae60);
    }
    .chart-label {
        margin-top: 10px;
        font-weight: bold;
        color: #555;
    }
    .program-grid, .incident-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }
    .program-card, .incident-card {
        background: #f9f9f9;
        border-radius: 8px;
        padding: 15px;
        display: flex;
        transition: all 0.3s;
    }
    .program-card:hover, .incident-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    .program-icon, .incident-status {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        color: white;
        margin-right: 15px;
        flex-shrink: 0;
    }
    .program-icon {
        background: linear-gradient(135deg, #3498db, #2980b9);
    }
    .incident-status.resolved {
        background: linear-gradient(135deg, #2ecc71, #27ae60);
    }
    .program-info, .incident-info {
        flex-grow: 1;
    }
    .program-info h5, .incident-info h5 {
        font-size: 16px;
        margin-bottom: 10px;
        font-weight: 600;
    }
    .program-desc {
        font-size: 14px;
        color: #666;
        margin-top: 5px;
    }
    .incident-date {
        font-size: 12px;
        color: #888;
    }
    .incident-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
        margin-top: 10px;
    }
    .incident-tag {
        font-size: 12px;
        padding: 3px 8px;
        border-radius: 12px;
        color: white;
    }
    .incident-tag.slip {
        background: #e74c3c;
    }
    .incident-tag.fire {
        background: #e67e22;
    }
    .incident-tag.cut {
        background: #9b59b6;
    }
    .incident-tag.area {
        background: #34495e;
    }
    .training-timeline {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .training-item {
        display: flex;
        background: #f9f9f9;
        border-radius: 8px;
        padding: 15px;
        align-items: center;
        transition: all 0.3s;
    }
    .training-item:hover {
        transform: translateX(5px);
        background: #f5f5f5;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    .training-date {
        width: 60px;
        height: 60px;
        background: #d32f2f;
        color: white;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
    }
    .training-date .day {
        font-size: 24px;
        font-weight: bold;
        line-height: 1;
    }
    .training-date .month {
        font-size: 14px;
    }
    .training-info {
        flex-grow: 1;
    }
    .training-info h5 {
        font-size: 16px;
        margin-bottom: 5px;
        font-weight: 600;
    }
    .training-action {
        margin-left: 10px;
    }
    .table-responsive {
        max-height: 200px;
        overflow-y: auto;
    }
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(46, 204, 113, 0.4);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(46, 204, 113, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(46, 204, 113, 0);
        }
    }
    @keyframes ring-pulse {
        0% {
            opacity: 1;
            transform: scale(1);
        }
        100% {
            opacity: 0;
            transform: scale(1.5);
        }
    }
    @media (max-width: 768px) {
        .safety-title {
            font-size: 24px;
        }
        .program-grid, .incident-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
        
        // Animate chart bars on load
        setTimeout(function() {
            document.querySelectorAll('.chart-fill').forEach(function(el) {
                el.style.height = el.style.height;
            });
        }, 500);
    });
</script>
@endpush
@endsection