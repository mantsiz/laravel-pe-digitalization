@extends('layouts.app')

@section('content')
<div class="automotive-background">
    <!-- Header dengan desain otomotif -->
    <div class="header-automotive d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="pd-title">People Development</h1>
        <div class="header-accent"></div>
    </div>

    <!-- Dashboard Summary -->
    <div class="dashboard-summary mb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="summary-card text-center">
                        <div class="summary-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h2 class="summary-number">1,250</h2>
                        <p class="summary-label">Total Karyawan Terlatih</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary-card text-center">
                        <div class="summary-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h2 class="summary-number">35</h2>
                        <p class="summary-label">Program Aktif</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary-card text-center">
                        <div class="summary-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h2 class="summary-number">24</h2>
                        <p class="summary-label">Jam/Karyawan</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary-card text-center">
                        <div class="summary-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h2 class="summary-number">95%</h2>
                        <p class="summary-label">Tingkat Kehadiran</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Roadmap Pengembangan Karyawan -->
            <div class="col-md-8 mb-4">
                <div class="card automotive-card h-100">
                    <div class="card-header automotive-header">
                        <h4 class="mb-0 fw-bold"><i class="fas fa-road me-2"></i>Roadmap Pengembangan Karyawan</h4>
                    </div>
                    <div class="card-body">
                        <div class="roadmap-container">
                            <div class="roadmap-timeline">
                                <div class="roadmap-item active">
                                    <div class="roadmap-dot"></div>
                                    <div class="roadmap-content">
                                        <h5>Orientasi & Dasar Manufaktur</h5>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Pengenalan proses produksi otomotif, 5S, dan keselamatan kerja</p>
                                        <span class="badge bg-success">Selesai</span>
                                    </div>
                                </div>
                                <div class="roadmap-item active">
                                    <div class="roadmap-dot"></div>
                                    <div class="roadmap-content">
                                        <h5>Technical Skill Enhancement</h5>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Pelatihan teknis spesifik sesuai departemen (Produksi, QC, Engineering)</p>
                                        <span class="badge bg-primary">Berlangsung</span>
                                    </div>
                                </div>
                                <div class="roadmap-item">
                                    <div class="roadmap-dot"></div>
                                    <div class="roadmap-content">
                                        <h5>Leadership Academy</h5>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Pengembangan kepemimpinan dan manajemen tim untuk supervisor</p>
                                        <span class="badge bg-warning">Berlangsung</span>
                                    </div>
                                </div>
                                <div class="roadmap-item">
                                    <div class="roadmap-dot"></div>
                                    <div class="roadmap-content">
                                        <h5>Quality Mindset & Kaizen</h5>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Penanaman budaya kualitas dan continuous improvement</p>
                                        <span class="badge bg-info">Berlangsung</span>
                                    </div>
                                </div>
                                <div class="roadmap-item">
                                    <div class="roadmap-dot"></div>
                                    <div class="roadmap-content">
                                        <h5>Sertifikasi Industri</h5>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p>Persiapan dan sertifikasi standar industri otomotif internasional</p>
                                        <span class="badge bg-secondary">Berlangsung</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Distribusi Kompetensi -->
            <div class="col-md-4 mb-4">
                <div class="card automotive-card h-100">
                    <div class="card-header automotive-header">
                        <h4 class="mb-0 fw-bold"><i class="fas fa-chart-pie me-2"></i>Distribusi Kompetensi</h4>
                    </div>
                    <div class="card-body">
                        <div class="competency-chart">
                            <div class="competency-item">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Technical Skills</span>
                                    <span>85%</span>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="competency-item">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Quality Management</span>
                                    <span>78%</span>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="competency-item">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Leadership</span>
                                    <span>65%</span>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="competency-item">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Problem Solving</span>
                                    <span>72%</span>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="competency-item">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Lean Manufacturing</span>
                                    <span>80%</span>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="competency-item">
                                <div class="d-flex justify-content-between mb-1">
                                    <span>Digital Skills</span>
                                    <span>58%</span>
                                </div>
                                <div class="progress mb-3">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jadwal Pelatihan -->
            <div class="col-md-6 mb-4">
                <div class="card automotive-card">
                    <div class="card-header automotive-header">
                        <h4 class="mb-0 fw-bold"><i class="fas fa-calendar-alt me-2"></i>Jadwal Pelatihan Mendatang</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="training-schedule">
                            <div class="training-item">
                                <div class="training-date">
                                    <span class="day">15</span>
                                    <span class="month">JUN</span>
                                </div>
                                <div class="training-info">
                                    <h5>Kaizen & 5S Workshop</h5>
                                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>Training Center Lt. 2</p>
                                    <p class="mb-1"><i class="fas fa-users me-2"></i>25 Peserta (Produksi)</p>
                                    <span class="badge bg-danger">3 Hari Lagi</span>
                                </div>
                                <div class="training-action">
                                    <button class="btn btn-outline-danger rounded-circle"><i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                            <div class="training-item">
                                <div class="training-date">
                                    <span class="day">20</span>
                                    <span class="month">JUN</span>
                                </div>
                                <div class="training-info">
                                    <h5>Quality Control Advanced</h5>
                                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>QC Lab</p>
                                    <p class="mb-1"><i class="fas fa-users me-2"></i>15 Peserta (QC)</p>
                                    <span class="badge bg-primary">1 Minggu Lagi</span>
                                </div>
                                <div class="training-action">
                                    <button class="btn btn-outline-primary rounded-circle"><i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                            <div class="training-item">
                                <div class="training-date">
                                    <span class="day">27</span>
                                    <span class="month">JUN</span>
                                </div>
                                <div class="training-info">
                                    <h5>Leadership for Supervisors</h5>
                                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>Meeting Room A</p>
                                    <p class="mb-1"><i class="fas fa-users me-2"></i>12 Peserta (Supervisor)</p>
                                    <span class="badge bg-success">2 Minggu Lagi</span>
                                </div>
                                <div class="training-action">
                                    <button class="btn btn-outline-success rounded-circle"><i class="fas fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sertifikasi & Prestasi -->
            <div class="col-md-6 mb-4">
                <div class="card automotive-card">
                    <div class="card-header automotive-header">
                        <h4 class="mb-0 fw-bold"><i class="fas fa-award me-2"></i>Sertifikasi & Prestasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="achievements-grid">
                            <div class="achievement-card">
                                <div class="achievement-icon">
                                    <i class="fas fa-medal"></i>
                                </div>
                                <div class="achievement-info">
                                    <h5>ISO/TS 16949</h5>
                                    <p>35 karyawan tersertifikasi</p>
                                </div>
                            </div>
                            <div class="achievement-card">
                                <div class="achievement-icon">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="achievement-info">
                                    <h5>Best Kaizen Team</h5>
                                    <p>Tim Produksi Line-A</p>
                                </div>
                            </div>
                            <div class="achievement-card">
                                <div class="achievement-icon">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="achievement-info">
                                    <h5>Zero Accident</h5>
                                    <p>1.000.000 jam kerja</p>
                                </div>
                            </div>
                            <div class="achievement-card">
                                <div class="achievement-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="achievement-info">
                                    <h5>IATF 16949:2016</h5>
                                    <p>Sertifikasi Perusahaan</p>
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
    .automotive-background {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset("images/sugitybuilding.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh;
        overflow: auto;
        padding: 20px;
        color: #333;
    }
    .header-automotive {
        background: linear-gradient(90deg, #1a237e, #283593, #303f9f);
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
    .pd-title {
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
    .summary-icon {
        font-size: 28px;
        color: #1a237e;
        margin-bottom: 10px;
    }
    .summary-number {
        font-size: 32px;
        font-weight: bold;
        margin: 0;
        color: #1a237e;
    }
    .summary-label {
        color: #666;
        margin: 0;
    }
    .automotive-card {
        background-color: white;
        border: none;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
    }
    .automotive-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    .automotive-header {
        background: linear-gradient(90deg, #1a237e, #303f9f);
        color: white;
        border: none;
        padding: 15px 20px;
    }
    .roadmap-container {
        padding: 20px 10px;
    }
    .roadmap-timeline {
        position: relative;
    }
    .roadmap-timeline:before {
        content: '';
        position: absolute;
        top: 0;
        left: 20px;
        height: 100%;
        width: 4px;
        background: #e0e0e0;
    }
    .roadmap-item {
        position: relative;
        padding-left: 50px;
        margin-bottom: 30px;
    }
    .roadmap-dot {
        position: absolute;
        left: 12px;
        top: 5px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #e0e0e0;
        border: 4px solid white;
        z-index: 1;
    }
    .roadmap-item.active .roadmap-dot {
        background: #1a237e;
    }
    .roadmap-content {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }
    .competency-item {
        margin-bottom: 15px;
    }
    .training-schedule {
        display: flex;
        flex-direction: column;
    }
    .training-item {
        display: flex;
        align-items: center;
        padding: 15px 20px;
        border-bottom: 1px solid #eee;
        transition: all 0.2s;
    }
    .training-item:hover {
        background-color: #f8f9fa;
    }
    .training-date {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        background: #1a237e;
        color: white;
        border-radius: 8px;
        margin-right: 15px;
    }
    .training-date .day {
        font-size: 22px;
        font-weight: bold;
        line-height: 1;
    }
    .training-date .month {
        font-size: 14px;
    }
    .training-info {
        flex: 1;
    }
    .training-info h5 {
        margin-bottom: 5px;
        color: #1a237e;
    }
    .training-action {
        margin-left: 15px;
    }
    .achievements-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }
    .achievement-card {
        display: flex;
        align-items: center;
        background: #f8f9fa;
        border-radius: 8px;
        padding: 15px;
        transition: all 0.3s;
    }
    .achievement-card:hover {
        transform: scale(1.03);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .achievement-icon {
        width: 50px;
        height: 50px;
        background: #1a237e;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        margin-right: 15px;
    }
    .achievement-info h5 {
        margin-bottom: 5px;
        color: #1a237e;
    }
    .achievement-info p {
        margin: 0;
        color: #666;
        font-size: 14px;
    }
    @media (max-width: 768px) {
        .pd-title {
            font-size: 28px;
        }
        .achievements-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection