@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Master Schedule</h1>
    </div>

    <div class="container-fluid d-flex">
        <!-- Sidebar Chapter -->
        <div class="chapter-container">
            <div class="chapter-box">
                <h4>Project Preparation</h4>
                <ul>
                    <li><a href="{{ url('/projectpreparation/addproject') }}" class="menu-item">Add Project</a></li>
                    <li><a href="{{ url('/projectpreparation/masterschedule') }}" class="menu-item active">Master Schedule</a></li>
                    <li><a href="{{ url('/projectpreparation/documents') }}" class="menu-item">Documents</a></li>
                    <li><a href="{{ url('/projectpreparation/tooling') }}" class="menu-item">Tooling</a></li>
                    <li><a href="{{ url('/projectpreparation/processline') }}" class="menu-item">Process Line</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="content-area">
            <div class="schedule-card">
                <div class="schedule-header">
                    <h2>Master Schedule</h2>
                    <div class="schedule-filters">
                        <select class="form-select" id="projectSelector">
                            <option value="">Pilih Project</option>
                            @foreach($projects ?? [] as $project)
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                        </select>
                        <div class="filter-buttons">
                            <button class="btn-filter" id="btnFilter">
                                <i class="fas fa-filter"></i> Filter
                            </button>
                            <button class="btn-export">
                                <i class="fas fa-file-export"></i> Export
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-content">
                    <div class="schedule-summary">
                        <div class="summary-card">
                            <div class="summary-icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div class="summary-info">
                                <h3 id="totalActivities">0</h3>
                                <p>Total Aktivitas</p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <div class="summary-icon completed">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="summary-info">
                                <h3 id="completedActivities">0</h3>
                                <p>Selesai</p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <div class="summary-icon in-progress">
                                <i class="fas fa-spinner"></i>
                            </div>
                            <div class="summary-info">
                                <h3 id="inProgressActivities">0</h3>
                                <p>Dalam Proses</p>
                            </div>
                        </div>
                        <div class="summary-card">
                            <div class="summary-icon pending">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="summary-info">
                                <h3 id="pendingActivities">0</h3>
                                <p>Belum Dimulai</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="gantt-chart-container">
                        <h3>Timeline Project</h3>
                        <div id="ganttChart" class="gantt-chart">
                            <!-- Gantt chart akan ditampilkan di sini -->
                        </div>
                    </div>
                    
                    <table class="schedule-table">
                        <thead>
                            <tr>
                                <th>Aktivitas</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Progress</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="scheduleTableBody">
                            <!-- Data akan diisi melalui JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Update Status -->
<div id="updateStatusModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeUpdateModal()">&times;</span>
        <h2 class="modal-title">Update Status Aktivitas</h2>
        <form id="updateStatusForm">
            <input type="hidden" id="activityId" name="activity_id">
            
            <div class="form-group">
                <label for="activityName">Aktivitas:</label>
                <input type="text" id="activityName" class="form-input" readonly>
            </div>
            
            <div class="form-group">
                <label for="statusSelect">Status:</label>
                <select id="statusSelect" name="status" class="form-select">
                    <option value="pending">Belum Dimulai</option>
                    <option value="in-progress">Dalam Proses</option>
                    <option value="completed">Selesai</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="progressSlider">Progress (%):</label>
                <input type="range" id="progressSlider" name="progress" min="0" max="100" class="progress-slider">
                <span id="progressValue">0%</span>
            </div>
            
            <div class="form-group">
                <label for="notes">Catatan:</label>
                <textarea id="notes" name="notes" class="form-textarea"></textarea>
            </div>
            
            <div class="form-buttons">
                <button type="submit" class="btn-save">Simpan</button>
                <button type="button" class="btn-cancel" onclick="closeUpdateModal()">Batal</button>
            </div>
        </form>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    .full-background {
        background: url('{{ asset("images/sugitybuilding.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
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
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 250px;
    }
    .chapter-box {
        background: green;
        color: white;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
    }
    .chapter-box h4 {
        margin-bottom: 15px;
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
        cursor: pointer;
        padding: 5px;
        display: block;
        color: white;
        text-decoration: none;
        transition: background 0.3s;
    }
    .menu-item:hover, .menu-item.active {
        background-color: #007bff;
        color: white;
        border-radius: 5px;
    }
    .content-area {
        flex-grow: 1;
        padding: 20px;
        margin-left: 20px;
    }
    
    .schedule-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 20px;
    }
    
    .schedule-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }
    
    .schedule-header h2 {
        color: #006D77;
        margin: 0;
        font-size: 24px;
    }
    
    .schedule-filters {
        display: flex;
        gap: 15px;
        align-items: center;
        flex-wrap: wrap;
    }
    
    .form-select {
        padding: 8px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        min-width: 200px;
    }
    
    .filter-buttons {
        display: flex;
        gap: 10px;
    }
    
    .btn-filter, .btn-export {
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .btn-filter {
        background-color: #007bff;
        color: white;
    }
    
    .btn-export {
        background-color: #28a745;
        color: white;
    }
    
    .schedule-summary {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        flex-wrap: wrap;
        gap: 15px;
    }
    
    .summary-card {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 15px;
        display: flex;
        align-items: center;
        gap: 15px;
        flex: 1;
        min-width: 200px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    
    .summary-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #007bff;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }
    
    .summary-icon.completed {
        background-color: #28a745;
    }
    
    .summary-icon.in-progress {
        background-color: #ffc107;
    }
    
    .summary-icon.pending {
        background-color: #6c757d;
    }
    
    .summary-info h3 {
        margin: 0;
        font-size: 24px;
        font-weight: bold;
    }
    
    .summary-info p {
        margin: 5px 0 0;
        color: #6c757d;
    }
    
    .gantt-chart-container {
        margin-bottom: 20px;
        background: #f8f9fa;
        border-radius: 8px;
        padding: 15px;
    }
    
    .gantt-chart-container h3 {
        margin-top: 0;
        color: #343a40;
        margin-bottom: 15px;
    }
    
    .gantt-chart {
        height: 200px;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    
    .schedule-table {
        width: 100%;
        border-collapse: collapse;
    }
    
    .schedule-table th, .schedule-table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    .schedule-table th {
        background-color: #f8f9fa;
        font-weight: bold;
        color: #343a40;
    }
    
    .schedule-table tr:hover {
        background-color: #f8f9fa;
    }
    
    .status-badge {
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: bold;
        display: inline-block;
    }
    
    .status-pending {
        background-color: #e9ecef;
        color: #495057;
    }
    
    .status-in-progress {
        background-color: #fff3cd;
        color: #856404;
    }
    
    .status-completed {
        background-color: #d4edda;
        color: #155724;
    }
    
    .progress-bar-container {
        width: 100%;
        background-color: #e9ecef;
        border-radius: 5px;
        height: 8px;
    }
    
    .progress-bar {
        height: 100%;
        border-radius: 5px;
        background-color: #007bff;
    }
    
    .action-buttons {
        display: flex;
        gap: 5px;
    }
    
    .btn-edit, .btn-delete {
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 12px;
    }
    
    .btn-edit {
        background-color: #ffc107;
        color: #212529;
    }
    
    .btn-delete {
        background-color: #dc3545;
        color: white;
    }
    
    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
    }
    
    .modal-content {
        background-color: white;
        margin: 10% auto;
        padding: 20px;
        border-radius: 10px;
        width: 50%;
        max-width: 600px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }
    
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
    
    .close:hover {
        color: black;
    }
    
    .modal-title {
        margin-top: 0;
        color: #006D77;
    }
    
    .form-group {
        margin-bottom: 15px;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    
    .form-input, .form-select, .form-textarea {
        width: 100%;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    
    .form-textarea {
        min-height: 100px;
        resize: vertical;
    }
    
    .progress-slider {
        width: 100%;
        margin-right: 10px;
    }
    
    .form-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 20px;
    }
    
    .btn-save, .btn-cancel {
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    
    .btn-save {
        background-color: #28a745;
        color: white;
    }
    
    .btn-cancel {
        background-color: #6c757d;
        color: white;
    }
    
    /* Responsive Styles */
    @media (max-width: 992px) {
        .container-fluid {
            flex-direction: column;
        }
        
        .chapter-container {
            width: 100%;
            margin-bottom: 20px;
        }
        
        .content-area {
            margin-left: 0;
        }
        
        .summary-card {
            min-width: 45%;
        }
        
        .modal-content {
            width: 80%;
        }
    }
    
    @media (max-width: 768px) {
        .schedule-header {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .schedule-filters {
            margin-top: 15px;
            width: 100%;
        }
        
        .summary-card {
            min-width: 100%;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Menandai menu aktif
    document.querySelectorAll('.menu-item').forEach(item => {
        if (item.getAttribute('href') === '{{ url('/projectpreparation/masterschedule') }}') {
            item.classList.add('active');
        }
    });
    
    // Inisialisasi data dummy untuk demo
    const dummyActivities = [
        {
            id: 1,
            name: 'Loading Capacity',
            start_date: '2023-10-01',
            end_date: '2023-10-15',
            status: 'completed',
            progress: 100
        },
        {
            id: 2,
            name: 'Calculate Mold Space',
            start_date: '2023-10-10',
            end_date: '2023-10-25',
            status: 'in-progress',
            progress: 60
        },
        {
            id: 3,
            name: 'Idea Open Space',
            start_date: '2023-10-20',
            end_date: '2023-11-05',
            status: 'in-progress',
            progress: 30
        },
        {
            id: 4,
            name: 'Re-Lay Out Current',
            start_date: '2023-11-01',
            end_date: '2023-11-15',
            status: 'pending',
            progress: 0
        },
        {
            id: 5,
            name: 'Mold Store & Addressing',
            start_date: '2023-11-10',
            end_date: '2023-11-25',
            status: 'pending',
            progress: 0
        },
        {
            id: 6,
            name: 'Calculation Tanki & Dryer',
            start_date: '2023-11-20',
            end_date: '2023-12-05',
            status: 'pending',
            progress: 0
        }
    ];
    
    // Fungsi untuk memuat data ke tabel
    function loadScheduleData(activities) {
        const tableBody = document.getElementById('scheduleTableBody');
        tableBody.innerHTML = '';
        
        activities.forEach(activity => {
            const row = document.createElement('tr');
            
            // Status badge class
            let statusClass = '';
            let statusText = '';
            
            switch(activity.status) {
                case 'pending':
                    statusClass = 'status-pending';
                    statusText = 'Belum Dimulai';
                    break;
                case 'in-progress':
                    statusClass = 'status-in-progress';
                    statusText = 'Dalam Proses';
                    break;
                case 'completed':
                    statusClass = 'status-completed';
                    statusText = 'Selesai';
                    break;
            }
            
            row.innerHTML = `
                <td>${activity.name}</td>
                <td>${formatDate(activity.start_date)}</td>
                <td>${formatDate(activity.end_date)}</td>
                <td><span class="status-badge ${statusClass}">${statusText}</span></td>
                <td>
                    <div class="progress-bar-container">
                        <div class="progress-bar" style="width: ${activity.progress}%"></div>
                    </div>
                    <div class="progress-text">${activity.progress}%</div>
                </td>
                <td>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="openUpdateModal(${activity.id}, '${activity.name}', '${activity.status}', ${activity.progress})">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                </td>
            `;
            
            tableBody.appendChild(row);
        });
        
        // Update summary
        updateSummary(activities);
    }
    
    // Fungsi untuk memformat tanggal
    function formatDate(dateString) {
        const options = { year: 'numeric', month: 'short', day: 'numeric' };
        return new Date(dateString).toLocaleDateString('id-ID', options);
    }
    
    // Fungsi untuk mengupdate summary
    function updateSummary(activities) {
        const totalActivities = activities.length;
        const completedActivities = activities.filter(a => a.status === 'completed').length;
        const inProgressActivities = activities.filter(a => a.status === 'in-progress').length;
        const pendingActivities = activities.filter(a => a.status === 'pending').length;
        
        document.getElementById('totalActivities').textContent = totalActivities;
        document.getElementById('completedActivities').textContent = completedActivities;
        document.getElementById('inProgressActivities').textContent = inProgressActivities;
        document.getElementById('pendingActivities').textContent = pendingActivities;
    }
    
    // Load data awal
    loadScheduleData(dummyActivities);
    
    // Event listener untuk filter button
    document.getElementById('btnFilter').addEventListener('click', function() {
        // Di implementasi nyata, ini akan mengambil data dari server berdasarkan project yang dipilih
        // Untuk demo, kita hanya reload data dummy
        loadScheduleData(dummyActivities);
    });
    
    // Inisialisasi slider progress
    const progressSlider = document.getElementById('progressSlider');
    const progressValue = document.getElementById('progressValue');
    
    progressSlider.addEventListener('input', function() {
        progressValue.textContent = this.value + '%';
    });
    
    // Expose fungsi untuk modal ke global scope
    window.openUpdateModal = function(id, name, status, progress) {
        document.getElementById('activityId').value = id;
        document.getElementById('activityName').value = name;
        document.getElementById('statusSelect').value = status;
        document.getElementById('progressSlider').value = progress;
        document.getElementById('progressValue').textContent = progress + '%';
        
        document.getElementById('updateStatusModal').style.display = 'block';
    };
    
    window.closeUpdateModal = function() {
        document.getElementById('updateStatusModal').style.display = 'none';
    };
    
    // Handle form submission
    document.getElementById('updateStatusForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const activityId = document.getElementById('activityId').value;
        const status = document.getElementById('statusSelect').value;
        const progress = document.getElementById('progressSlider').value;
        
        // Di implementasi nyata, ini akan mengirim data ke server
        // Untuk demo, kita update data dummy
        const activityIndex = dummyActivities.findIndex(a => a.id == activityId);
        if (activityIndex !== -1) {
            dummyActivities[activityIndex].status = status;
            dummyActivities[activityIndex].progress = parseInt(progress);
            
            // Reload data
            loadScheduleData(dummyActivities);
        }
        
        closeUpdateModal();
    });
});
</script>
@endsection