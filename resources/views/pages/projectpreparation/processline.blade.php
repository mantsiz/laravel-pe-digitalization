@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Process Line</h1>
    </div>

    <div class="container-fluid d-flex">
        <!-- Sidebar Chapter -->
        <div class="chapter-container">
            <div class="chapter-box">
                <h4>Project Preparation</h4>
                <ul>
                    <li><a href="{{ url('/projectpreparation/addproject') }}" class="menu-item">Add Project</a></li>
                    <li><a href="{{ url('/projectpreparation/masterschedule') }}" class="menu-item">Master Schedule</a></li>
                    <li><a href="{{ url('/projectpreparation/documents') }}" class="menu-item">Documents</a></li>
                    <li><a href="{{ url('/projectpreparation/tooling') }}" class="menu-item">Tooling</a></li>
                    <li><a href="{{ url('/projectpreparation/processline') }}" class="menu-item active">Process Line</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="content-area">
            <!-- Project Selector -->
            <div class="project-selector-container mb-4">
                <select class="form-select" id="projectSelector">
                    <option value="">Pilih Project</option>
                    <option value="1">Project A - Toyota</option>
                    <option value="2">Project B - Honda</option>
                    <option value="3">Project C - Daihatsu</option>
                </select>
            </div>

            <!-- Process Line Status -->
            <div class="process-status-container mb-4">
                <div class="process-status-header">
                    <h3>Status Proses Lanjutan dari Tooling</h3>
                    <span class="process-date">Update Terakhir: <span id="lastUpdate">15 Juni 2023</span></span>
                </div>
                <div class="process-status-progress">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 65%;">65%</div>
                    </div>
                </div>
            </div>

            <div class="document-cards">
                <!-- Tooling Information Card -->
                <div class="doc-card">
                    <h2 class="doc-title">Informasi Tooling</h2>
                    <div class="doc-content">
                        <div class="info-item">
                            <span class="info-label">Nama Tooling:</span>
                            <span class="info-value" id="toolingName">Injection Mold T-001</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Status Tooling:</span>
                            <span class="info-value status-complete" id="toolingStatus">Selesai</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Tanggal Selesai:</span>
                            <span class="info-value" id="toolingDate">10 Juni 2023</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">PIC:</span>
                            <span class="info-value" id="toolingPIC">Ahmad Sulaiman</span>
                        </div>
                    </div>
                </div>

                <!-- Process Line Setup Card -->
                <div class="doc-card">
                    <h2 class="doc-title">Setup Process Line</h2>
                    <div class="doc-content">
                        <div class="doc-item">
                            <div class="doc-header">
                                <span class="bullet">•</span>
                                <span class="item-title">List Part</span>
                                <div class="doc-actions">
                                    <input type="checkbox" class="doc-checkbox" checked>
                                    <button class="btn-upload">Upload Doc</button>
                                    <button class="btn-preview">Preview</button>
                                </div>
                            </div>
                        </div>

                        <div class="doc-item">
                            <div class="doc-header">
                                <span class="bullet">•</span>
                                <span class="item-title">SOP Produksi</span>
                                <div class="doc-actions">
                                    <input type="checkbox" class="doc-checkbox" checked>
                                    <button class="btn-upload">Upload Doc</button>
                                    <button class="btn-preview">Preview</button>
                                </div>
                            </div>
                            <div class="doc-subitems">
                                <div class="doc-subitem">
                                    <span class="bullet">•</span>
                                    <span class="subitem-title">Setup Mesin</span>
                                    <div class="doc-actions">
                                        <input type="checkbox" class="doc-checkbox" checked>
                                    </div>
                                </div>
                                <div class="doc-subitem">
                                    <span class="bullet">•</span>
                                    <span class="subitem-title">Proses Produksi</span>
                                    <div class="doc-actions">
                                        <input type="checkbox" class="doc-checkbox" checked>
                                    </div>
                                </div>
                                <div class="doc-subitem">
                                    <span class="bullet">•</span>
                                    <span class="subitem-title">Quality Check</span>
                                    <div class="doc-actions">
                                        <input type="checkbox" class="doc-checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="doc-item">
                            <div class="doc-header">
                                <span class="bullet">•</span>
                                <span class="item-title">Layout Process Line</span>
                                <div class="doc-actions">
                                    <input type="checkbox" class="doc-checkbox">
                                    <button class="btn-upload">Upload Doc</button>
                                    <button class="btn-preview">Preview</button>
                                </div>
                            </div>
                        </div>

                        <div class="doc-item">
                            <div class="doc-header">
                                <span class="bullet">•</span>
                                <span class="item-title">Checklist Persiapan</span>
                                <div class="doc-actions">
                                    <input type="checkbox" class="doc-checkbox">
                                    <button class="btn-upload">Upload Doc</button>
                                    <button class="btn-preview">Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Process Line Progress Card -->
                <div class="doc-card large-card">
                    <h2 class="doc-title">Kemajuan Process Line</h2>
                    <div class="doc-content">
                        <div class="timeline-container">
                            <div class="timeline-item completed">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h4>Persiapan Tooling</h4>
                                    <p>Tooling telah selesai dan siap digunakan untuk proses produksi</p>
                                    <span class="timeline-date">10 Juni 2023</span>
                                </div>
                            </div>
                            <div class="timeline-item completed">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h4>Setup Process Line</h4>
                                    <p>Pengaturan lini produksi sesuai dengan spesifikasi tooling</p>
                                    <span class="timeline-date">12 Juni 2023</span>
                                </div>
                            </div>
                            <div class="timeline-item active">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h4>Trial Production</h4>
                                    <p>Uji coba produksi dengan tooling baru</p>
                                    <span class="timeline-date">Sedang Berlangsung</span>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h4>Quality Approval</h4>
                                    <p>Persetujuan kualitas produk dari departemen QC</p>
                                    <span class="timeline-date">Menunggu</span>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-marker"></div>
                                <div class="timeline-content">
                                    <h4>Mass Production</h4>
                                    <p>Mulai produksi massal</p>
                                    <span class="timeline-date">Menunggu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="action-buttons mt-4">
                <button class="btn-primary">Simpan Perubahan</button>
                <button class="btn-secondary">Cetak Laporan</button>
            </div>
        </div>
    </div>
</div>

<style>
    .full-background {
        background: url('{{ asset("images/sugitybuilding.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh;
        overflow: auto;
        padding: 20px;
    }
    .header {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }
    .company-logo {
        width: 120px;
        margin-right: 20px;
    }
    .kpi-title {
        font-size: 40px;
        font-weight: bold;
        color: #006D77;
        flex-grow: 1;
        text-align: center;
    }
    .container-fluid {
        display: flex;
        align-items: flex-start;
    }
    .chapter-container {
        width: 250px;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
    }
    .chapter-box {
        background: #006D77;
        color: white;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
    }
    .chapter-box h4 {
        margin-bottom: 15px;
        font-weight: bold;
    }
    .chapter-box ul {
        list-style-type: none;
        padding: 0;
    }
    .chapter-box ul li {
        background: rgba(255, 255, 255, 0.2);
        padding: 8px;
        margin-bottom: 5px;
        border-radius: 3px;
    }
    .menu-item {
        color: white;
        text-decoration: none;
        display: block;
    }
    .menu-item.active {
        font-weight: bold;
        background-color: rgba(255, 255, 255, 0.3);
    }
    .content-area {
        flex-grow: 1;
        padding: 20px;
        margin-left: 20px;
    }
    .document-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .doc-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 20px;
        min-width: 300px;
        flex: 1;
    }
    .large-card {
        flex-basis: 100%;
        margin-top: 20px;
    }
    .doc-title {
        color: #006D77;
        margin-bottom: 20px;
        font-size: 24px;
        border-bottom: 2px solid #eaeaea;
        padding-bottom: 10px;
    }
    .doc-content {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .doc-item {
        margin-bottom: 15px;
    }
    .doc-header {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .bullet {
        color: #006D77;
        font-size: 18px;
    }
    .item-title {
        font-weight: 500;
        color: #006D77;
    }
    .doc-actions {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-left: auto;
    }
    .doc-checkbox {
        width: 18px;
        height: 18px;
    }
    .btn-upload,
    .btn-preview {
        padding: 5px 10px;
        border: 1px solid #006D77;
        border-radius: 5px;
        background: white;
        color: #006D77;
        cursor: pointer;
        transition: all 0.3s;
    }
    .btn-upload:hover,
    .btn-preview:hover {
        background: #006D77;
        color: white;
    }
    .doc-subitems {
        margin-left: 20px;
        margin-top: 10px;
    }
    .doc-subitem {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 8px;
    }
    .subitem-title {
        font-size: 14px;
        color: #333;
    }
    .project-selector-container {
        margin-bottom: 20px;
    }
    .form-select {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 16px;
    }
    .process-status-container {
        background: white;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        margin-bottom: 20px;
    }
    .process-status-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }
    .process-status-header h3 {
        color: #006D77;
        margin: 0;
    }
    .process-date {
        color: #666;
        font-size: 14px;
    }
    .progress-bar {
        height: 25px;
        background: #eaeaea;
        border-radius: 15px;
        overflow: hidden;
    }
    .progress-fill {
        height: 100%;
        background: linear-gradient(90deg, #006D77, #83C5BE);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
    }
    .info-item {
        display: flex;
        margin-bottom: 10px;
        border-bottom: 1px solid #eaeaea;
        padding-bottom: 10px;
    }
    .info-label {
        font-weight: bold;
        width: 150px;
        color: #555;
    }
    .info-value {
        flex: 1;
    }
    .status-complete {
        color: green;
        font-weight: bold;
    }
    .timeline-container {
        position: relative;
        padding: 20px 0;
    }
    .timeline-container:before {
        content: '';
        position: absolute;
        top: 0;
        left: 15px;
        height: 100%;
        width: 2px;
        background: #ddd;
    }
    .timeline-item {
        position: relative;
        margin-bottom: 30px;
        padding-left: 40px;
    }
    .timeline-marker {
        position: absolute;
        left: 0;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #eaeaea;
        border: 2px solid #ddd;
        top: 0;
        z-index: 1;
    }
    .timeline-item.completed .timeline-marker {
        background: #006D77;
        border-color: #006D77;
    }
    .timeline-item.active .timeline-marker {
        background: #83C5BE;
        border-color: #006D77;
        animation: pulse 1.5s infinite;
    }
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(0, 109, 119, 0.4);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(0, 109, 119, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(0, 109, 119, 0);
        }
    }
    .timeline-content {
        background: #f9f9f9;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .timeline-content h4 {
        margin-top: 0;
        color: #006D77;
    }
    .timeline-date {
        display: block;
        font-size: 12px;
        color: #666;
        margin-top: 5px;
    }
    .action-buttons {
        display: flex;
        gap: 10px;
        justify-content: flex-end;
    }
    .btn-primary, .btn-secondary {
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s;
    }
    .btn-primary {
        background: #006D77;
        color: white;
        border: none;
    }
    .btn-secondary {
        background: white;
        color: #006D77;
        border: 1px solid #006D77;
    }
    .btn-primary:hover {
        background: #005a63;
    }
    .btn-secondary:hover {
        background: #f0f0f0;
    }
    .save-button-container {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }
    .btn-save {
        background: #006D77;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }
    .btn-save:hover {
        background: #005a63;
    }
</style>

<script>
    // Script untuk menghubungkan dengan data tooling
    document.addEventListener('DOMContentLoaded', function() {
        const projectSelector = document.getElementById('projectSelector');
        
        projectSelector.addEventListener('change', function() {
            const selectedProject = this.value;
            if (selectedProject) {
                // Di sini bisa ditambahkan AJAX request untuk mengambil data tooling
                // berdasarkan project yang dipilih
                fetchToolingData(selectedProject);
            }
        });
        
        function fetchToolingData(projectId) {
            // Simulasi data dari tooling
            const toolingData = {
                '1': {
                    name: 'Injection Mold T-001',
                    status: 'Selesai',
                    date: '10 Juni 2023',
                    pic: 'Ahmad Sulaiman'
                },
                '2': {
                    name: 'Press Die P-002',
                    status: 'Selesai',
                    date: '5 Juni 2023',
                    pic: 'Budi Santoso'
                },
                '3': {
                    name: 'Cutting Tool C-003',
                    status: 'Dalam Proses',
                    date: 'Estimasi 20 Juni 2023',
                    pic: 'Citra Dewi'
                }
            };
            
            // Update informasi tooling
            if (toolingData[projectId]) {
                document.getElementById('toolingName').textContent = toolingData[projectId].name;
                document.getElementById('toolingStatus').textContent = toolingData[projectId].status;
                document.getElementById('toolingDate').textContent = toolingData[projectId].date;
                document.getElementById('toolingPIC').textContent = toolingData[projectId].pic;
                
                // Update status class
                if (toolingData[projectId].status === 'Selesai') {
                    document.getElementById('toolingStatus').className = 'info-value status-complete';
                } else {
                    document.getElementById('toolingStatus').className = 'info-value';
                }
            }
        }
    });
</script>
@endsection