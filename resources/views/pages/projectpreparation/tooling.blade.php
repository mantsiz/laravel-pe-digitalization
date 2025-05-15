@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Tooling</h1>
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
                    <li><a href="{{ url('/projectpreparation/tooling') }}" class="menu-item active">Tooling</a></li>
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
                    <option value="project1">Project A - Toyota</option>
                    <option value="project2">Project B - Honda</option>
                    <option value="project3">Project C - Daihatsu</option>
                </select>
            </div>

            <!-- Tooling Progress Cards -->
            <div class="tooling-cards">
                <!-- Tooling Design Card -->
                <div class="tooling-card">
                    <div class="card-header">
                        <h2 class="card-title">Tooling Design</h2>
                        <div class="progress-indicator">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="tooling-item">
                            <div class="item-header">
                                <span class="item-icon"><i class="fas fa-file-alt"></i></span>
                                <span class="item-title">Design Drawing</span>
                                <div class="item-actions">
                                    <input type="checkbox" class="item-checkbox" id="design-drawing">
                                    <button class="btn-upload" data-item="design-drawing"><i class="fas fa-upload"></i> Upload</button>
                                    <button class="btn-preview" data-item="design-drawing"><i class="fas fa-eye"></i> Preview</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tooling-item">
                            <div class="item-header">
                                <span class="item-icon"><i class="fas fa-tools"></i></span>
                                <span class="item-title">Material Specification</span>
                                <div class="item-actions">
                                    <input type="checkbox" class="item-checkbox" id="material-spec">
                                    <button class="btn-upload" data-item="material-spec"><i class="fas fa-upload"></i> Upload</button>
                                    <button class="btn-preview" data-item="material-spec"><i class="fas fa-eye"></i> Preview</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tooling-item">
                            <div class="item-header">
                                <span class="item-icon"><i class="fas fa-cogs"></i></span>
                                <span class="item-title">Design Review</span>
                                <div class="item-actions">
                                    <input type="checkbox" class="item-checkbox" id="design-review">
                                    <button class="btn-upload" data-item="design-review"><i class="fas fa-upload"></i> Upload</button>
                                    <button class="btn-preview" data-item="design-review"><i class="fas fa-eye"></i> Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tooling Manufacturing Card -->
                <div class="tooling-card">
                    <div class="card-header">
                        <h2 class="card-title">Tooling Manufacturing</h2>
                        <div class="progress-indicator">
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="tooling-item">
                            <div class="item-header">
                                <span class="item-icon"><i class="fas fa-industry"></i></span>
                                <span class="item-title">Manufacturing Plan</span>
                                <div class="item-actions">
                                    <input type="checkbox" class="item-checkbox" id="manufacturing-plan">
                                    <button class="btn-upload" data-item="manufacturing-plan"><i class="fas fa-upload"></i> Upload</button>
                                    <button class="btn-preview" data-item="manufacturing-plan"><i class="fas fa-eye"></i> Preview</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tooling-item">
                            <div class="item-header">
                                <span class="item-icon"><i class="fas fa-calendar-alt"></i></span>
                                <span class="item-title">Production Schedule</span>
                                <div class="item-actions">
                                    <input type="checkbox" class="item-checkbox" id="production-schedule">
                                    <button class="btn-upload" data-item="production-schedule"><i class="fas fa-upload"></i> Upload</button>
                                    <button class="btn-preview" data-item="production-schedule"><i class="fas fa-eye"></i> Preview</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tooling-item">
                            <div class="item-header">
                                <span class="item-icon"><i class="fas fa-check-square"></i></span>
                                <span class="item-title">Quality Control</span>
                                <div class="item-actions">
                                    <input type="checkbox" class="item-checkbox" id="quality-control">
                                    <button class="btn-upload" data-item="quality-control"><i class="fas fa-upload"></i> Upload</button>
                                    <button class="btn-preview" data-item="quality-control"><i class="fas fa-eye"></i> Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tooling Testing Card -->
                <div class="tooling-card">
                    <div class="card-header">
                        <h2 class="card-title">Tooling Testing</h2>
                        <div class="progress-indicator">
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="tooling-item">
                            <div class="item-header">
                                <span class="item-icon"><i class="fas fa-vial"></i></span>
                                <span class="item-title">Test Procedure</span>
                                <div class="item-actions">
                                    <input type="checkbox" class="item-checkbox" id="test-procedure">
                                    <button class="btn-upload" data-item="test-procedure"><i class="fas fa-upload"></i> Upload</button>
                                    <button class="btn-preview" data-item="test-procedure"><i class="fas fa-eye"></i> Preview</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tooling-item">
                            <div class="item-header">
                                <span class="item-icon"><i class="fas fa-clipboard-check"></i></span>
                                <span class="item-title">Test Results</span>
                                <div class="item-actions">
                                    <input type="checkbox" class="item-checkbox" id="test-results">
                                    <button class="btn-upload" data-item="test-results"><i class="fas fa-upload"></i> Upload</button>
                                    <button class="btn-preview" data-item="test-results"><i class="fas fa-eye"></i> Preview</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tooling-item">
                            <div class="item-header">
                                <span class="item-icon"><i class="fas fa-thumbs-up"></i></span>
                                <span class="item-title">Final Approval</span>
                                <div class="item-actions">
                                    <input type="checkbox" class="item-checkbox" id="final-approval">
                                    <button class="btn-upload" data-item="final-approval"><i class="fas fa-upload"></i> Upload</button>
                                    <button class="btn-preview" data-item="final-approval"><i class="fas fa-eye"></i> Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="action-buttons">
                <button class="btn-save"><i class="fas fa-save"></i> Simpan Perubahan</button>
                <button class="btn-next" onclick="window.location.href='{{ url('/projectpreparation/processline') }}'"><i class="fas fa-arrow-right"></i> Lanjut ke Process Line</button>
            </div>
            
            <!-- Document Preview Modal -->
            <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="previewModalLabel">Preview Dokumen</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="document-preview">
                                <img src="{{ asset('images/document-placeholder.jpg') }}" alt="Document Preview" class="img-fluid">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="button" class="btn btn-primary">Unduh</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Upload Document Modal -->
            <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uploadModalLabel">Upload Dokumen</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="documentTitle" class="form-label">Judul Dokumen</label>
                                    <input type="text" class="form-control" id="documentTitle">
                                </div>
                                <div class="mb-3">
                                    <label for="documentFile" class="form-label">File Dokumen</label>
                                    <input type="file" class="form-control" id="documentFile">
                                </div>
                                <div class="mb-3">
                                    <label for="documentDescription" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="documentDescription" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Upload</button>
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
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .company-logo {
        width: 120px;
        margin-right: 20px;
    }
    
    .kpi-title {
        font-size: 36px;
        font-weight: bold;
        color: #006D77;
        flex-grow: 1;
        text-align: center;
        margin: 0;
    }
    
    .container-fluid {
        display: flex;
        align-items: flex-start;
        gap: 20px;
    }
    
    .chapter-container {
        width: 250px;
        flex-shrink: 0;
    }
    
    .chapter-box {
        background: linear-gradient(135deg, #00796B, #009688);
        color: white;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .chapter-box h4 {
        margin-bottom: 15px;
        font-size: 18px;
        font-weight: 600;
    }
    
    .chapter-box ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    
    .chapter-box ul li {
        background: rgba(255, 255, 255, 0.2);
        padding: 10px;
        margin-bottom: 8px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }
    
    .chapter-box ul li:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateX(5px);
    }
    
    .menu-item {
        color: white;
        text-decoration: none;
        display: block;
        font-weight: 500;
    }
    
    .menu-item.active {
        font-weight: bold;
    }
    
    .content-area {
        flex-grow: 1;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .project-selector-container {
        margin-bottom: 20px;
    }
    
    .form-select {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ddd;
        font-size: 16px;
    }
    
    .tooling-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 20px;
    }
    
    .tooling-card {
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .tooling-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }
    
    .card-header {
        background-color: #f8f9fa;
        padding: 15px;
        border-bottom: 1px solid #eee;
    }
    
    .card-title {
        margin: 0;
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }
    
    .progress-indicator {
        margin-top: 10px;
    }
    
    .progress {
        height: 10px;
        border-radius: 5px;
    }
    
    .card-content {
        padding: 15px;
    }
    
    .tooling-item {
        margin-bottom: 15px;
        border-bottom: 1px solid #f0f0f0;
        padding-bottom: 15px;
    }
    
    .tooling-item:last-child {
        margin-bottom: 0;
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .item-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .item-icon {
        margin-right: 10px;
        color: #006D77;
        font-size: 18px;
    }
    
    .item-title {
        flex-grow: 1;
        font-weight: 500;
    }
    
    .item-actions {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .item-checkbox {
        width: 18px;
        height: 18px;
    }
    
    .btn-upload, .btn-preview {
        background-color: #f0f0f0;
        border: none;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 12px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .btn-upload {
        background-color: #e3f2fd;
        color: #1976d2;
    }
    
    .btn-preview {
        background-color: #e8f5e9;
        color: #388e3c;
    }
    
    .btn-upload:hover {
        background-color: #bbdefb;
    }
    
    .btn-preview:hover {
        background-color: #c8e6c9;
    }
    
    .action-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 15px;
        margin-top: 20px;
    }
    
    .btn-save, .btn-next {
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        font-weight: 500;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.3s ease;
    }
    
    .btn-save {
        background-color: #4caf50;
        color: white;
    }
    
    .btn-next {
        background-color: #2196f3;
        color: white;
    }
    
    .btn-save:hover {
        background-color: #43a047;
        transform: translateY(-2px);
    }
    
    .btn-next:hover {
        background-color: #1e88e5;
        transform: translateY(-2px);
    }
    
    /* Modal Styles */
    .modal-content {
        border-radius: 8px;
        border: none;
    }
    
    .modal-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #eee;
    }
    
    .modal-title {
        font-weight: 600;
        color: #333;
    }
    
    .document-preview {
        text-align: center;
    }
    
    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .container-fluid {
            flex-direction: column;
        }
        
        .chapter-container {
            width: 100%;
            margin-bottom: 20px;
        }
        
        .tooling-cards {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    // JavaScript untuk menangani interaksi
    document.addEventListener('DOMContentLoaded', function() {
        // Menangani klik pada tombol preview
        const previewButtons = document.querySelectorAll('.btn-preview');
        previewButtons.forEach(button => {
            button.addEventListener('click', function() {
                const itemId = this.getAttribute('data-item');
                const itemTitle = this.closest('.item-header').querySelector('.item-title').textContent;
                
                // Set judul modal
                document.getElementById('previewModalLabel').textContent = 'Preview: ' + itemTitle;
                
                // Tampilkan modal preview
                const previewModal = new bootstrap.Modal(document.getElementById('previewModal'));
                previewModal.show();
            });
        });
        
        // Menangani klik pada tombol upload
        const uploadButtons = document.querySelectorAll('.btn-upload');
        uploadButtons.forEach(button => {
            button.addEventListener('click', function() {
                const itemId = this.getAttribute('data-item');
                const itemTitle = this.closest('.item-header').querySelector('.item-title').textContent;
                
                // Set judul modal
                document.getElementById('uploadModalLabel').textContent = 'Upload: ' + itemTitle;
                
                // Tampilkan modal upload
                const uploadModal = new bootstrap.Modal(document.getElementById('uploadModal'));
                uploadModal.show();
            });
        });
        
        // Menangani perubahan pada project selector
        const projectSelector = document.getElementById('projectSelector');
        if (projectSelector) {
            projectSelector.addEventListener('change', function() {
                // Di sini bisa ditambahkan kode untuk memuat data tooling berdasarkan project yang dipilih
                console.log('Project selected:', this.value);
            });
        }
    });
</script>
@endsection