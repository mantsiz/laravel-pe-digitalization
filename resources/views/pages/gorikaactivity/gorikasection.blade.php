@extends('layouts.app')

@section('content')
<div class="gorika-dashboard">
    <!-- Header dengan animasi -->
    <div class="dashboard-header">
        <div class="header-content">
            <img src="{{ asset('images/sugitylogo.png') }}" alt="Sugity Logo" class="logo">
            <div class="title-container">
                <h1 class="main-title">Gorika Activity</h1>
                <p class="subtitle">Good Kaizen Activity - Continuous Improvement Excellence</p>
            </div>
        </div>
        <div class="header-stats">
            <div class="stat-item">
                <div class="stat-value">127</div>
                <div class="stat-label">Ide Kaizen</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">85</div>
                <div class="stat-label">Implementasi</div>
            </div>
            <div class="stat-item">
                <div class="stat-value">12<span class="percent">%</span></div>
                <div class="stat-label">Efisiensi</div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="dashboard-content">
        <!-- Baris 1: Ringkasan dan Timeline -->
        <div class="content-row">
            <!-- Ringkasan Gorika -->
            <div class="content-card summary-card">
                <div class="card-header">
                    <i class="fas fa-lightbulb"></i>
                    <h2>Tentang Gorika</h2>
                </div>
                <div class="card-body">
                    <div class="summary-content">
                        <div class="definition-section">
                            <h3>a. Definisi</h3>
                            <p>Istilah "gorika" (合理化) dalam bahasa Jepang berarti "rasionalisasi" atau "efisiensi". Kata ini digunakan dalam konteks bisnis, industri, dan manajemen untuk menggambarkan upaya meningkatkan efisiensi, mengurangi pemborosan, dan menyederhanakan proses untuk mencapai hasil yang lebih baik dengan biaya yang lebih rendah.</p>
                        </div>
                        
                        <div class="implementation-section">
                            <h3>b. Penerapan Gorika di Industri Otomotif</h3>
                            <p>Dalam industri otomotif, "gorika" (合理化) diterapkan melalui berbagai cara untuk meningkatkan efisiensi dan mengurangi pemborosan. Beberapa contoh penerapannya adalah:</p>
                            
                            <div class="implementation-item">
                                <div class="icon">🚗</div>
                                <div class="content">
                                    <h4>1. Just-in-Time (JIT) Production</h4>
                                    <p>Produksi suku cadang dan komponen hanya ketika diperlukan, sehingga mengurangi stok berlebih dan biaya penyimpanan. Toyota adalah pelopor metode ini dengan sistem "Toyota Production System" (TPS).</p>
                                </div>
                            </div>
                            
                            <div class="implementation-item">
                                <div class="icon">🔄</div>
                                <div class="content">
                                    <h4>2. Lean Manufacturing</h4>
                                    <p>Menerapkan prinsip produksi ramping (lean) untuk mengidentifikasi dan menghilangkan aktivitas yang tidak memberikan nilai tambah, seperti waktu tunggu, proses yang berulang, dan transportasi tidak efisien.</p>
                                </div>
                            </div>
                            
                            <div class="implementation-item">
                                <div class="icon">🔧</div>
                                <div class="content">
                                    <h4>3. Automation and Robotics</h4>
                                    <p>Memanfaatkan teknologi otomatisasi untuk meningkatkan konsistensi dan akurasi dalam proses produksi, mengurangi kesalahan manusia, dan meningkatkan kecepatan produksi.</p>
                                </div>
                            </div>
                            
                            <div class="implementation-item">
                                <div class="icon">⚙️</div>
                                <div class="content">
                                    <h4>4. Quality Control Optimization</h4>
                                    <p>Memperbaiki proses pengendalian kualitas dengan metode seperti "Kaizen" (perbaikan berkelanjutan) dan "Poka-Yoke" (mekanisme anti-kesalahan) untuk meminimalisir produk cacat.</p>
                                </div>
                            </div>
                            
                            <div class="implementation-item">
                                <div class="icon">♻️</div>
                                <div class="content">
                                    <h4>5. Energy and Resource Efficiency</h4>
                                    <p>Mengurangi konsumsi energi dan bahan baku melalui teknologi hemat energi dan daur ulang material. Penerapan "gorika" ini bertujuan untuk mencapai hasil maksimal dengan biaya minimal dan waktu yang lebih singkat, tanpa mengorbankan kualitas produk.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="principles">
                            <h3>5 Prinsip Utama</h3>
                            <div class="principle-items">
                                <div class="principle-item">
                                    <div class="principle-icon">
                                        <i class="fas fa-sync-alt"></i>
                                    </div>
                                    <div class="principle-text">Continuous Improvement</div>
                                </div>
                                <div class="principle-item">
                                    <div class="principle-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="principle-text">Respect for People</div>
                                </div>
                                <div class="principle-item">
                                    <div class="principle-icon">
                                        <i class="fas fa-hands-helping"></i>
                                    </div>
                                    <div class="principle-text">Teamwork</div>
                                </div>
                                <div class="principle-item">
                                    <div class="principle-icon">
                                        <i class="fas fa-trash-alt"></i>
                                    </div>
                                    <div class="principle-text">Elimination of Waste</div>
                                </div>
                                <div class="principle-item">
                                    <div class="principle-icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="principle-text">Quality First</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Timeline Proyek -->
            <div class="content-card timeline-card">
                <div class="card-header">
                    <i class="fas fa-stream"></i>
                    <h2>Timeline Proyek</h2>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item completed">
                            <div class="timeline-point"></div>
                            <div class="timeline-content">
                                <div class="timeline-date">10 Mei 2025</div>
                                <h4>Optimasi Line Assembly A3</h4>
                                <p>Peningkatan output produksi sebesar 15% melalui reorganisasi workstation dan optimasi alur kerja.</p>
                                <div class="timeline-tags">
                                    <span class="tag tag-success">Completed</span>
                                    <span class="tag tag-primary">Assembly</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item active">
                            <div class="timeline-point"></div>
                            <div class="timeline-content">
                                <div class="timeline-date">Ongoing (75%)</div>
                                <h4>Reduksi Defect Painting</h4>
                                <p>Implementasi sistem deteksi dini untuk mengurangi cacat pengecatan pada body kendaraan.</p>
                                <div class="timeline-tags">
                                    <span class="tag tag-warning">On Progress</span>
                                    <span class="tag tag-primary">Painting</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-point"></div>
                            <div class="timeline-content">
                                <div class="timeline-date">Mulai 15 Juli 2025</div>
                                <h4>Standarisasi Proses QC</h4>
                                <p>Pengembangan standar baru untuk proses quality control dengan target reduksi waktu inspeksi 20%.</p>
                                <div class="timeline-tags">
                                    <span class="tag tag-info">Planning</span>
                                    <span class="tag tag-primary">Quality</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Baris 2: Metrik dan Pencapaian -->
        <div class="content-row">
            <!-- Metrik Departemen -->
            <div class="content-card metrics-card">
                <div class="card-header">
                    <i class="fas fa-chart-bar"></i>
                    <h2>Metrik Departemen</h2>
                </div>
                <div class="card-body">
                    <div class="metrics-container">
                        <div class="metrics-item">
                            <div class="metrics-header">
                                <h4>SC1 Resin</h4>
                                <div class="metrics-value">85%</div>
                            </div>
                            <div class="metrics-bar">
                                <div class="metrics-fill" style="width: 85%; background-color: #4e73df;"></div>
                            </div>
                            <div class="metrics-detail">
                                <span>32 Ide Kaizen</span>
                                <span>27 Implementasi</span>
                            </div>
                        </div>
                        <div class="metrics-item">
                            <div class="metrics-header">
                                <h4>SC1 Painting</h4>
                                <div class="metrics-value">65%</div>
                            </div>
                            <div class="metrics-bar">
                                <div class="metrics-fill" style="width: 65%; background-color: #1cc88a;"></div>
                            </div>
                            <div class="metrics-detail">
                                <span>28 Ide Kaizen</span>
                                <span>18 Implementasi</span>
                            </div>
                        </div>
                        <div class="metrics-item">
                            <div class="metrics-header">
                                <h4>SC1 Packing</h4>
                                <div class="metrics-value">75%</div>
                            </div>
                            <div class="metrics-bar">
                                <div class="metrics-fill" style="width: 75%; background-color: #36b9cc;"></div>
                            </div>
                            <div class="metrics-detail">
                                <span>36 Ide Kaizen</span>
                                <span>27 Implementasi</span>
                            </div>
                        </div>
                        <div class="metrics-item">
                            <div class="metrics-header">
                                <h4>SC1 PC</h4>
                                <div class="metrics-value">45%</div>
                            </div>
                            <div class="metrics-bar">
                                <div class="metrics-fill" style="width: 45%; background-color: #f6c23e;"></div>
                            </div>
                            <div class="metrics-detail">
                                <span>31 Ide Kaizen</span>
                                <span>14 Implementasi</span>
                            </div>
                        </div>
                        <div class="metrics-item">
                            <div class="metrics-header">
                                <h4>SC1 Quality</h4>
                                <div class="metrics-value">75%</div>
                            </div>
                            <div class="metrics-bar">
                                <div class="metrics-fill" style="width: 75%; background-color: #36b9cc;"></div>
                            </div>
                            <div class="metrics-detail">
                                <span>36 Ide Kaizen</span>
                                <span>27 Implementasi</span>
                            </div>
                        </div>
                        <div class="metrics-item">
                            <div class="metrics-header">
                                <h4>SC2 Resin</h4>
                                <div class="metrics-value">75%</div>
                            </div>
                            <div class="metrics-bar">
                                <div class="metrics-fill" style="width: 75%; background-color: #4e73df;"></div>
                            </div>
                            <div class="metrics-detail">
                                <span>36 Ide Kaizen</span>
                                <span>27 Implementasi</span>
                            </div>
                        </div>
                        <div class="metrics-item">
                            <div class="metrics-header">
                                <h4>SC2 Painting</h4>
                                <div class="metrics-value">75%</div>
                            </div>
                            <div class="metrics-bar">
                                <div class="metrics-fill" style="width: 75%; background-color: #1cc88a;"></div>
                            </div>
                            <div class="metrics-detail">
                                <span>36 Ide Kaizen</span>
                                <span>27 Implementasi</span>
                            </div>
                        </div>
                        <div class="metrics-item">
                            <div class="metrics-header">
                                <h4>SC2 PC</h4>
                                <div class="metrics-value">75%</div>
                            </div>
                            <div class="metrics-bar">
                                <div class="metrics-fill" style="width: 75%; background-color: #f6c23e;"></div>
                            </div>
                            <div class="metrics-detail">
                                <span>36 Ide Kaizen</span>
                                <span>27 Implementasi</span>
                            </div>
                        </div>
                        <a href="{{ route('gorika.index') }}" class="submit-button">Detail Activity</a>
                    </div>
                </div>
            </div>

            <!-- Pencapaian -->
            <div class="content-card achievements-card">
                <div class="card-header">
                    <i class="fas fa-trophy"></i>
                    <h2>Pencapaian Terbaru</h2>
                </div>
                <div class="card-body">
                    <div class="achievements-container">
                        <div class="achievement-item">
                            <div class="achievement-icon">
                                <i class="fas fa-medal"></i>
                            </div>
                            <div class="achievement-content">
                                <h4>Best Kaizen Award 2023</h4>
                                <p>Penghargaan dari Toyota Motor Corporation untuk proyek reduksi waktu setup dies</p>
                                <div class="achievement-date">Juni 2023</div>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <div class="achievement-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="achievement-content">
                                <h4>Efisiensi Energi</h4>
                                <p>Pengurangan konsumsi energi sebesar 8.5% melalui optimasi sistem pneumatik</p>
                                <div class="achievement-date">Mei 2023</div>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <div class="achievement-icon">
                                <i class="fas fa-recycle"></i>
                            </div>
                            <div class="achievement-content">
                                <h4>Zero Waste Initiative</h4>
                                <p>Implementasi sistem daur ulang material yang mengurangi limbah produksi hingga 30%</p>
                                <div class="achievement-date">April 2023</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Baris 3: Aktivitas Terbaru dan Quick Links -->
        <div class="content-row">
            <!-- Aktivitas Terbaru -->
            <div class="content-card activities-card">
                <div class="card-header">
                    <i class="fas fa-clipboard-list"></i>
                    <h2>Aktivitas Terbaru</h2>
                </div>
                <div class="card-body">
                    <div class="activities-list">
                        <div class="activity-item">
                            <div class="activity-icon bg-success">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Implementasi 5S di Area Stamping</div>
                                <div class="activity-info">
                                    <span><i class="fas fa-user"></i> Rudi Hartono</span>
                                    <span><i class="fas fa-clock"></i> 2 jam yang lalu</span>
                                </div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon bg-primary">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Proposal Kaizen: Optimasi Alur Material</div>
                                <div class="activity-info">
                                    <span><i class="fas fa-user"></i> Siti Nurhaliza</span>
                                    <span><i class="fas fa-clock"></i> 5 jam yang lalu</span>
                                </div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon bg-warning">
                                <i class="fas fa-comments"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Diskusi Tim: Reduksi Waktu Setup</div>
                                <div class="activity-info">
                                    <span><i class="fas fa-users"></i> 8 Peserta</span>
                                    <span><i class="fas fa-clock"></i> 1 hari yang lalu</span>
                                </div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon bg-info">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Evaluasi Hasil: Proyek Reduksi Defect</div>
                                <div class="activity-info">
                                    <span><i class="fas fa-user"></i> Budi Santoso</span>
                                    <span><i class="fas fa-clock"></i> 2 hari yang lalu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links & Resources -->
            <div class="content-card resources-card">
                <div class="card-header">
                    <i class="fas fa-link"></i>
                    <h2>Resources & Tools</h2>
                </div>
                <div class="card-body">
                    <div class="resources-container">
                        <div class="resource-group">
                            <h4><i class="fas fa-file-pdf"></i> Dokumen Penting</h4>
                            <ul class="resource-list">
                                <li><a href="#"><i class="fas fa-file-alt"></i> Panduan Implementasi Kaizen</a></li>
                                <li><a href="#"><i class="fas fa-file-alt"></i> Template A3 Problem Solving</a></li>
                                <li><a href="#"><i class="fas fa-file-alt"></i> SOP Pengajuan Ide Kaizen</a></li>
                            </ul>
                        </div>
                        <div class="resource-group">
                            <h4><i class="fas fa-tools"></i> Tools</h4>
                            <ul class="resource-list">
                                <li><a href="#"><i class="fas fa-calculator"></i> Kalkulator ROI Kaizen</a></li>
                                <li><a href="#"><i class="fas fa-tasks"></i> Tracker Implementasi</a></li>
                                <li><a href="#"><i class="fas fa-chart-pie"></i> Dashboard Analytics</a></li>
                            </ul>
                        </div>
                        <div class="resource-group">
                            <h4><i class="fas fa-calendar-alt"></i> Upcoming Events</h4>
                            <ul class="resource-list">
                                <li><a href="#"><i class="fas fa-users"></i> Kaizen Workshop (20 Juli)</a></li>
                                <li><a href="#"><i class="fas fa-award"></i> Kompetisi Ide Inovatif (5 Agustus)</a></li>
                                <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> Training 5S (15 Agustus)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Base Styles */
    :root {
        --primary: #4e73df;
        --success: #1cc88a;
        --info: #36b9cc;
        --warning: #f6c23e;
        --danger: #e74a3b;
        --dark: #5a5c69;
        --light: #f8f9fc;
        --card-bg: rgba(255, 255, 255, 0.95);
        --shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
        --border-radius: 0.35rem;
        --transition: all 0.3s ease;
    }
    /* Dashboard Layout */
    .gorika-dashboard {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url('{{ asset("images/sugitybuilding.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh;
        padding: 1.5rem;
        font-family: 'Nunito', sans-serif;
    }
    /* Header Styles */
    .dashboard-header {
        background: linear-gradient(90deg, var(--primary), var(--info));
        border-radius: var(--border-radius);
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        color: white;
        box-shadow: var(--shadow);
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    .header-content {
        display: flex;
        align-items: center;
        gap: 1.5rem;
    }
    .logo {
        width: 100px;
        height: auto;
        filter: drop-shadow(0 0 5px rgba(0, 0, 0, 0.3));
    }
    .title-container {
        flex-grow: 1;
    }
    .main-title {
        font-size: 2.5rem;
        font-weight: 800;
        margin: 0;
        letter-spacing: 2px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }
    .subtitle {
        font-size: 1rem;
        opacity: 0.9;
        margin: 0.5rem 0 0;
    }
    .header-stats {
        display: flex;
        gap: 1.5rem;
        justify-content: space-around;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
    }
    .stat-item {
        text-align: center;
    }
    .stat-value {
        font-size: 2.5rem;
        font-weight: 700;
        line-height: 1;
    }
    .percent {
        font-size: 1.5rem;
    }
    .stat-label {
        font-size: 0.9rem;
        opacity: 0.9;
        margin-top: 0.25rem;
    }
    /* Content Layout */
    .dashboard-content {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }
    .content-row {
        display: flex;
        gap: 1.5rem;
        flex-wrap: wrap;
    }
    .content-card {
        background: var(--card-bg);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
        flex: 1;
        min-width: 300px;
        overflow: hidden;
        transition: var(--transition);
    }
    .content-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 2rem 0 rgba(58, 59, 69, 0.2);
    }
    .card-header {
        background: linear-gradient(90deg, var(--dark), #3a3b45);
        color: white;
        padding: 1rem 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .card-header i {
        font-size: 1.25rem;
    }
    .card-header h2 {
        margin: 0;
        font-size: 1.25rem;
        font-weight: 700;
    }
    .card-body {
        padding: 1.5rem;
    }
    /* Summary Card */
    .highlight-text {
        font-size: 1.1rem;
        line-height: 1.6;
        color: var(--dark);
        border-left: 4px solid var(--primary);
        padding-left: 1rem;
        margin-bottom: 1.5rem;
    }
    .principles h3 {
        font-size: 1.1rem;
        color: var(--dark);
        margin-bottom: 1rem;
        text-align: center;
    }
    .principle-items {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: center;
    }
    .principle-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: calc(20% - 1rem);
        min-width: 80px;
    }
    .principle-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--light);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.5rem;
        color: var(--primary);
        font-size: 1.25rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        transition: var(--transition);
    }
    .principle-item:hover .principle-icon {
        background: var(--primary);
        color: white;
        transform: scale(1.1);
    }
    .principle-text {
        font-size: 0.8rem;
        text-align: center;
        color: var(--dark);
    }
    /* Timeline Card */
    .timeline {
        position: relative;
        padding-left: 2rem;
    }
    .timeline:before {
        content: '';
        position: absolute;
        left: 7px;
        top: 0;
        height: 100%;
        width: 2px;
        background: #e9ecef;
    }
    .timeline-item {
        position: relative;
        padding-bottom: 1.5rem;
    }
    .timeline-item:last-child {
        padding-bottom: 0;
    }
    .timeline-point {
        position: absolute;
        left: -2rem;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #e9ecef;
        border: 2px solid white;
        top: 0;
    }
    .timeline-item.completed .timeline-point {
        background: var(--success);
    }
    .timeline-item.active .timeline-point {
        background: var(--warning);
    }
    .timeline-date {
        font-size: 0.8rem;
        color: var(--dark);
        opacity: 0.7;
        margin-bottom: 0.25rem;
    }
    .timeline-content h4 {
        margin: 0 0 0.5rem;
        font-size: 1.1rem;
        color: var(--dark);
    }
    .timeline-content p {
        margin: 0 0 0.75rem;
        font-size: 0.9rem;
        color: var(--dark);
    }
    .timeline-tags {
        display: flex;
        gap: 0.5rem;
    }
    .tag {
        font-size: 0.7rem;
        padding: 0.2rem 0.5rem;
        border-radius: 50px;
        color: white;
    }
    .tag-success {
        background: var(--success);
    }
    .tag-warning {
        background: var(--warning);
    }
    .tag-info {
        background: var(--info);
    }
    .tag-primary {
        background: var(--primary);
    }
    /* Metrics Card */
    .metrics-container {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }
    .metrics-item {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .metrics-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .metrics-header h4 {
        margin: 0;
        font-size: 1rem;
        color: var(--dark);
    }
    .metrics-value {
        font-weight: 700;
        color: var(--dark);
    }
    .metrics-bar {
        height: 10px;
        background: #e9ecef;
        border-radius: 5px;
        overflow: hidden;
    }
    .metrics-fill {
        height: 100%;
        border-radius: 5px;
    }
    .metrics-detail {
        display: flex;
        justify-content: space-between;
        font-size: 0.8rem;
        color: var(--dark);
        opacity: 0.7;
    }
    /* Achievements Card */
    .achievements-container {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }
    .achievement-item {
        display: flex;
        gap: 1rem;
        padding-bottom: 1.25rem;
        border-bottom: 1px solid #e9ecef;
    }
    .achievement-item:last-child {
        padding-bottom: 0;
        border-bottom: none;
    }
    .achievement-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--light);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--warning);
        font-size: 1.25rem;
        flex-shrink: 0;
    }
    .achievement-content h4 {
        margin: 0 0 0.5rem;
        font-size: 1.1rem;
        color: var(--dark);
    }
    .achievement-content p {
        margin: 0 0 0.5rem;
        font-size: 0.9rem;
        color: var(--dark);
    }
    .achievement-date {
        font-size: 0.8rem;
        color: var(--dark);
        opacity: 0.7;
    }
    /* Activities Card */
    .activities-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .activity-item {
        display: flex;
        gap: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #e9ecef;
    }
    .activity-item:last-child {
        padding-bottom: 0;
        border-bottom: none;
    }
    .activity-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1rem;
        flex-shrink: 0;
    }
    .activity-title {
        font-weight: 600;
        color: var(--dark);
        margin-bottom: 0.25rem;
    }
    .activity-info {
        display: flex;
        gap: 1rem;
        font-size: 0.8rem;
        color: var(--dark);
        opacity: 0.7;
    }
    .activity-info i {
        margin-right: 0.25rem;
    }
    /* Resources Card */
    .resources-container {
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }
    .resource-group h4 {
        font-size: 1rem;
        color: var(--dark);
        margin: 0 0 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .resource-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .resource-list li a {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--primary);
        text-decoration: none;
        font-size: 0.9rem;
        padding: 0.5rem;
        border-radius: var(--border-radius);
        transition: var(--transition);
    }
    .resource-list li a:hover {
        background: var(--light);
        transform: translateX(5px);
    }
    .submit-button {
            background-color: #E67E22;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
    }
    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .content-card {
            flex: 100%;
        }
        .principle-item {
            width: calc(33.33% - 1rem);
        }
    }
    @media (max-width: 768px) {
        .header-content {
            flex-direction: column;
            text-align: center;
        }
        .header-stats {
            flex-wrap: wrap;
        }
        .principle-item {
            width: calc(50% - 1rem);
        }
    }
    @media (max-width: 576px) {
        .dashboard-header {
            padding: 1rem;
        }
        .main-title {
            font-size: 1.75rem;
        }
        .card-body {
            padding: 1rem;
        }
        .principle-item {
            width: 100%;
        }
    }
</style>
@endsection