@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Documents</h1>
    </div>

    <div class="container-fluid d-flex">
        <!-- Sidebar Chapter -->
        <div class="chapter-container">
            <div class="chapter-box">
                <h4>Project Preparation</h4>
                <ul>
                    <li><a href="{{ url('/projectpreparation/addproject') }}" class="menu-item">Add Project</a></li>
                    <li><a href="{{ url('/projectpreparation/masterschedule') }}" class="menu-item">Master Schedule</a></li>
                    <li><a href="{{ url('/projectpreparation/documents') }}" class="menu-item active">Documents</a></li>
                    <li><a href="{{ url('/projectpreparation/tooling') }}" class="menu-item">Tooling</a></li>
                    <li><a href="{{ url('/projectpreparation/processline') }}" class="menu-item">Process Line</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="content-area">
            <!-- Project Selector -->
            <div class="project-selector-container">
                <select class="form-select" id="projectSelector">
                    <option value="">Pilih Project</option>
                    @foreach($projects ?? [] as $project)
                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                    @endforeach
                </select>
                <div class="document-stats">
                    <div class="stat-item">
                        <span class="stat-label">Total Dokumen:</span>
                        <span class="stat-value" id="totalDocuments">0</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Dokumen Selesai:</span>
                        <span class="stat-value" id="completedDocuments">0</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-label">Progress:</span>
                        <div class="progress-container">
                            <div class="progress-bar" id="documentProgress" style="width: 0%"></div>
                        </div>
                        <span class="stat-value" id="progressPercentage">0%</span>
                    </div>
                </div>
            </div>

            <div class="document-container">
                <!-- Document Categories -->
                <div class="document-categories">
                    <div class="category-item active" data-category="all">
                        <i class="fas fa-folder"></i>
                        <span>Semua Dokumen</span>
                    </div>
                    <div class="category-item" data-category="technical">
                        <i class="fas fa-file-alt"></i>
                        <span>Dokumen Teknis</span>
                    </div>
                    <div class="category-item" data-category="sop">
                        <i class="fas fa-clipboard-list"></i>
                        <span>SOP</span>
                    </div>
                    <div class="category-item" data-category="quality">
                        <i class="fas fa-check-square"></i>
                        <span>Quality Control</span>
                    </div>
                    <div class="category-item" data-category="approval">
                        <i class="fas fa-stamp"></i>
                        <span>Approval</span>
                    </div>
                </div>

                <!-- Document List -->
                <div class="document-list">
                    <div class="document-header">
                        <div class="doc-col doc-name">Nama Dokumen</div>
                        <div class="doc-col doc-category">Kategori</div>
                        <div class="doc-col doc-deadline">Deadline</div>
                        <div class="doc-col doc-status">Status</div>
                        <div class="doc-col doc-actions">Aksi</div>
                    </div>
                    
                    <div id="documentItems" class="document-items">
                        <!-- Documents will be loaded here dynamically -->
                    </div>
                </div>
            </div>

            <!-- Document Preview Modal -->
            <div class="modal fade" id="documentPreviewModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="previewDocumentTitle">Preview Dokumen</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="document-preview-container">
                                <iframe id="documentPreviewFrame" src="" width="100%" height="500px"></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary" id="downloadDocument">Download</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upload Document Modal -->
            <div class="modal fade" id="uploadDocumentModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uploadDocumentTitle">Upload Dokumen</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="documentUploadForm">
                                <div class="mb-3">
                                    <label for="documentName" class="form-label">Nama Dokumen</label>
                                    <input type="text" class="form-control" id="documentName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="documentCategory" class="form-label">Kategori</label>
                                    <select class="form-select" id="documentCategory" required>
                                        <option value="">Pilih Kategori</option>
                                        <option value="technical">Dokumen Teknis</option>
                                        <option value="sop">SOP</option>
                                        <option value="quality">Quality Control</option>
                                        <option value="approval">Approval</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="documentDeadline" class="form-label">Deadline</label>
                                    <input type="date" class="form-control" id="documentDeadline" required>
                                </div>
                                <div class="mb-3">
                                    <label for="documentFile" class="form-label">File Dokumen</label>
                                    <input type="file" class="form-control" id="documentFile" required>
                                </div>
                                <div class="mb-3">
                                    <label for="documentNotes" class="form-label">Catatan (Opsional)</label>
                                    <textarea class="form-control" id="documentNotes" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="saveDocument">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        width: 250px;
        background-color: #f8f9fa;
        padding: 15px;
        border-right: 1px solid #ddd;
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
        color: white;
        text-decoration: none;
        display: block;
        transition: all 0.3s ease;
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
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    /* Project Selector Styles */
    .project-selector-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .form-select {
        width: 300px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ced4da;
    }
    .document-stats {
        display: flex;
        gap: 20px;
    }
    .stat-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .stat-label {
        font-weight: 500;
        color: #495057;
    }
    .stat-value {
        font-weight: 600;
        color: #006D77;
    }
    .progress-container {
        width: 100px;
        height: 10px;
        background-color: #e9ecef;
        border-radius: 5px;
        overflow: hidden;
    }
    .progress-bar {
        height: 100%;
        background-color: #006D77;
        transition: width 0.3s ease;
    }
    
    /* Document Categories Styles */
    .document-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    .document-categories {
        display: flex;
        gap: 15px;
        padding: 10px 0;
        border-bottom: 1px solid #dee2e6;
    }
    .category-item {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 15px;
        border-radius: 20px;
        background-color: #f8f9fa;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    .category-item.active {
        background-color: #006D77;
        color: white;
    }
    .category-item i {
        font-size: 14px;
    }
    
    /* Document List Styles */
    .document-list {
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .document-header {
        display: flex;
        background-color: #f8f9fa;
        padding: 12px 15px;
        font-weight: 600;
        color: #495057;
        border-bottom: 2px solid #dee2e6;
    }
    .document-items {
        max-height: 500px;
        overflow-y: auto;
    }
    .document-item {
        display: flex;
        padding: 12px 15px;
        border-bottom: 1px solid #dee2e6;
        transition: background-color 0.2s ease;
    }
    .document-item:hover {
        background-color: #f8f9fa;
    }
    .doc-col {
        padding: 0 10px;
    }
    .doc-name {
        flex: 3;
        font-weight: 500;
    }
    .doc-category {
        flex: 1;
    }
    .doc-deadline {
        flex: 1;
    }
    .doc-status {
        flex: 1;
    }
    .doc-actions {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        gap: 5px;
    }
    .status-badge {
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 500;
    }
    .status-pending {
        background-color: #ffeeba;
        color: #856404;
    }
    .status-in-progress {
        background-color: #b8daff;
        color: #004085;
    }
    .status-completed {
        background-color: #c3e6cb;
        color: #155724;
    }
    .status-overdue {
        background-color: #f5c6cb;
        color: #721c24;
    }
    .btn-action {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .btn-preview {
        background-color: #e9ecef;
        color: #495057;
    }
    .btn-upload {
        background-color: #006D77;
        color: white;
    }
    .btn-delete {
        background-color: #f8d7da;
        color: #721c24;
    }
    .btn-action:hover {
        transform: scale(1.1);
    }
    
    /* Modal Styles */
    .modal-content {
        border-radius: 8px;
        border: none;
    }
    .modal-header {
        background-color: #006D77;
        color: white;
        border-radius: 8px 8px 0 0;
    }
    .modal-title {
        font-weight: 600;
    }
    .btn-close {
        color: white;
    }
    .document-preview-container {
        padding: 10px;
        background-color: #f8f9fa;
        border-radius: 5px;
    }
    
    /* Add Document Button */
    .add-document-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #006D77;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
    }
    .add-document-btn:hover {
        transform: scale(1.1);
        background-color: #005a63;
    }
    
    /* Empty State */
    .empty-state {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 50px 20px;
        text-align: center;
    }
    .empty-state i {
        font-size: 48px;
        color: #dee2e6;
        margin-bottom: 15px;
    }
    .empty-state h3 {
        color: #6c757d;
        margin-bottom: 10px;
    }
    .empty-state p {
        color: #adb5bd;
        max-width: 400px;
        margin-bottom: 20px;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Dummy data untuk dokumen
    const dummyDocuments = [
        {
            id: 1,
            name: 'Spesifikasi Teknis Produk',
            category: 'technical',
            categoryName: 'Dokumen Teknis',
            deadline: '2023-12-15',
            status: 'completed',
            progress: 100,
            activityId: 1
        },
        {
            id: 2,
            name: 'SOP Proses Produksi',
            category: 'sop',
            categoryName: 'SOP',
            deadline: '2023-12-20',
            status: 'in-progress',
            progress: 60,
            activityId: 2
        },
        {
            id: 3,
            name: 'Checklist Quality Control',
            category: 'quality',
            categoryName: 'Quality Control',
            deadline: '2023-12-25',
            status: 'pending',
            progress: 0,
            activityId: 3
        },
        {
            id: 4,
            name: 'Dokumen Approval Desain',
            category: 'approval',
            categoryName: 'Approval',
            deadline: '2023-12-10',
            status: 'overdue',
            progress: 80,
            activityId: 4
        },
        {
            id: 5,
            name: 'Manual Penggunaan Produk',
            category: 'technical',
            categoryName: 'Dokumen Teknis',
            deadline: '2023-12-30',
            status: 'in-progress',
            progress: 45,
            activityId: 5
        }
    ];
    
    // Fungsi untuk memuat dokumen
    function loadDocuments(category = 'all') {
        const documentItems = document.getElementById('documentItems');
        documentItems.innerHTML = '';
        
        let filteredDocuments = dummyDocuments;
        
        if (category !== 'all') {
            filteredDocuments = dummyDocuments.filter(doc => doc.category === category);
        }
        
        if (filteredDocuments.length === 0) {
            documentItems.innerHTML = `
                <div class="empty-state">
                    <i class="fas fa-file-alt"></i>
                    <h3>Tidak ada dokumen</h3>
                    <p>Belum ada dokumen dalam kategori ini. Klik tombol tambah untuk menambahkan dokumen baru.</p>
                    <button class="btn btn-primary" onclick="openUploadModal()">
                        <i class="fas fa-plus"></i> Tambah Dokumen
                    </button>
                </div>
            `;
            return;
        }
        
        filteredDocuments.forEach(doc => {
            const item = document.createElement('div');
            item.className = 'document-item';
            
            let statusClass = '';
            let statusText = '';
            
            switch(doc.status) {
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
                case 'overdue':
                    statusClass = 'status-overdue';
                    statusText = 'Terlambat';
                    break;
            }
            
            const deadlineDate = new Date(doc.deadline);
            const formattedDeadline = deadlineDate.toLocaleDateString('id-ID', {
                year: 'numeric',
                month: 'short',
                day: 'numeric'
            });
            
            item.innerHTML = `
                <div class="doc-col doc-name">${doc.name}</div>
                <div class="doc-col doc-category">${doc.categoryName}</div>
                <div class="doc-col doc-deadline">${formattedDeadline}</div>
                <div class="doc-col doc-status">
                    <span class="status-badge ${statusClass}">${statusText}</span>
                </div>
                <div class="doc-col doc-actions">
                    <button class="btn-action btn-preview" onclick="previewDocument(${doc.id})">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="btn-action btn-upload" onclick="openUploadModal(${doc.id})">
                        <i class="fas fa-upload"></i>
                    </button>
                    <button class="btn-action btn-delete" onclick="deleteDocument(${doc.id})">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            `;
            
            documentItems.appendChild(item);
        });
        
        // Update statistik dokumen
        updateDocumentStats(filteredDocuments);
    }
    
    // Fungsi untuk mengupdate statistik dokumen
    function updateDocumentStats(documents) {
        const totalDocuments = documents.length;
        const completedDocuments = documents.filter(doc => doc.status === 'completed').length;
        const progressPercentage = totalDocuments > 0 ? Math.round((completedDocuments / totalDocuments) * 100) : 0;
        
        document.getElementById('totalDocuments').textContent = totalDocuments;
        document.getElementById('completedDocuments').textContent = completedDocuments;
        document.getElementById('documentProgress').style.width = `${progressPercentage}%`;
        document.getElementById('progressPercentage').textContent = `${progressPercentage}%`;
    }
    
    // Event listener untuk kategori dokumen
    document.querySelectorAll('.category-item').forEach(item => {
        item.addEventListener('click', function() {
            // Hapus class active dari semua item
            document.querySelectorAll('.category-item').forEach(el => {
                el.classList.remove('active');
            });
            
            // Tambahkan class active ke item yang diklik
            this.classList.add('active');
            
            // Load dokumen berdasarkan kategori
            const category = this.getAttribute('data-category');
            loadDocuments(category);
        });
    });
    
    // Fungsi untuk preview dokumen
    window.previewDocument = function(documentId) {
        const document = dummyDocuments.find(doc => doc.id === documentId);
        
        if (document) {
            // Dalam implementasi nyata, ini akan menampilkan dokumen yang sebenarnya
            // Untuk demo, kita hanya menampilkan placeholder
            document.getElementById('previewDocumentTitle').textContent = `Preview: ${document.name}`;
            document.getElementById('documentPreviewFrame').src = 'about:blank';
            
            // Tampilkan modal
            const modal = new bootstrap.Modal(document.getElementById('documentPreviewModal'));
            modal.show();
        }
    };
    
    // Fungsi untuk membuka modal upload
    window.openUploadModal = function(documentId = null) {
        let modalTitle = 'Upload Dokumen Baru';
        let document = null;
        
        if (documentId) {
            document = dummyDocuments.find(doc => doc.id === documentId);
            if (document) {
                modalTitle = `Update Dokumen: ${document.name}`;
                
                // Isi form dengan data dokumen
                document.getElementById('documentName').value = document.name;
                document.getElementById('documentCategory').value = document.category;
                document.getElementById('documentDeadline').value = document.deadline;
            }
        } else {
            // Reset form untuk dokumen baru
            document.getElementById('documentUploadForm').reset();
        }
        
        document.getElementById('uploadDocumentTitle').textContent = modalTitle;
        
        // Tampilkan modal
        const modal = new bootstrap.Modal(document.getElementById('uploadDocumentModal'));
        modal.show();
    };
    
    // Fungsi untuk menghapus dokumen
    window.deleteDocument = function(documentId) {
        if (confirm('Apakah Anda yakin ingin menghapus dokumen ini?')) {
            // Dalam implementasi nyata, ini akan menghapus dokumen dari database
            // Untuk demo, kita hanya memfilter array
            const index = dummyDocuments.findIndex(doc => doc.id === documentId);
            
            if (index !== -1) {
                dummyDocuments.splice(index, 1);
                
                // Reload dokumen
                const activeCategory = document.querySelector('.category-item.active').getAttribute('data-category');
                loadDocuments(activeCategory);
            }
        }
    };
    
    // Event listener untuk tombol simpan dokumen
    document.getElementById('saveDocument').addEventListener('click', function() {
        const form = document.getElementById('documentUploadForm');
        
        // Validasi form sederhana
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }
        
        // Dalam implementasi nyata, ini akan menyimpan dokumen ke database
        // Untuk demo, kita hanya menambahkan ke array
        const newDocument = {
            id: dummyDocuments.length + 1,
            name: document.getElementById('documentName').value,
            category: document.getElementById('documentCategory').value,
            categoryName: document.getElementById('documentCategory').options[document.getElementById('documentCategory').selectedIndex].text,
            deadline: document.getElementById('documentDeadline').value,
            status: 'pending',
            progress: 0
        };
        
        dummyDocuments.push(newDocument);
        
        // Tutup modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('uploadDocumentModal'));
        modal.hide();
        
        // Reload dokumen
        const activeCategory = document.querySelector('.category-item.active').getAttribute('data-category');
        loadDocuments(activeCategory);
    });
    
    // Tambahkan tombol untuk menambah dokumen baru
    const addButton = document.createElement('button');
    addButton.className = 'add-document-btn';
    addButton.innerHTML = '<i class="fas fa-plus"></i>';
    addButton.onclick = function() {
        openUploadModal();
    };
    document.body.appendChild(addButton);
    
    // Integrasi dengan Master Schedule
    document.getElementById('projectSelector').addEventListener('change', function() {
        const projectId = this.value;
        
        if (projectId) {
            // Dalam implementasi nyata, ini akan memuat dokumen berdasarkan project
            // Untuk demo, kita hanya memuat semua dokumen
            loadDocuments('all');
        } else {
            // Kosongkan daftar dokumen jika tidak ada project yang dipilih
            document.getElementById('documentItems').innerHTML = `
                <div class="empty-state">
                    <i class="fas fa-project-diagram"></i>
                    <h3>Pilih Project</h3>
                    <p>Silakan pilih project untuk melihat dokumen terkait.</p>
                </div>
            `;
            
            // Reset statistik
            document.getElementById('totalDocuments').textContent = '0';
            document.getElementById('completedDocuments').textContent = '0';
            document.getElementById('documentProgress').style.width = '0%';
            document.getElementById('progressPercentage').textContent = '0%';
        }
    });
    
    // Load dokumen awal
    loadDocuments('all');
});
</script>
@endsection