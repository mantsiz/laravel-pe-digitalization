@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Budget Management</h1>
    </div>

    <div class="content-wrapper">
        <!-- Filter dan Pencarian -->
        <div class="filter-container">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="filterDepartment">Departemen</label>
                        <select id="filterDepartment" class="form-select">
                            <option value="">Semua Departemen</option>
                            <option value="Production">Production</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Quality Control">Quality Control</option>
                            <option value="Finance">Finance</option>
                            <option value="HR">HR</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="filterPeriod">Periode</label>
                        <select id="filterPeriod" class="form-select">
                            <option value="">Semua Periode</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="searchBudget">Pencarian</label>
                        <input type="text" id="searchBudget" class="form-control" placeholder="Cari anggaran...">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="d-block">&nbsp;</label>
                        <button class="btn btn-primary w-100" data-modal-target="addBudgetModal" data-modal-toggle="addBudgetModal">
                            <i class="fas fa-plus-circle me-1"></i> Tambah Anggaran
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ringkasan Anggaran -->
        <div class="budget-summary">
            <div class="row">
                <div class="col-md-3">
                    <div class="summary-card bg-primary">
                        <div class="summary-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div class="summary-info">
                            <h3>Total Anggaran</h3>
                            <h2>Rp {{ number_format($budgets->sum('budget_amount'), 2, ',', '.') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary-card bg-success">
                        <div class="summary-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="summary-info">
                            <h3>Rata-rata per Dept</h3>
                            <h2>Rp {{ number_format($budgets->avg('budget_amount'), 2, ',', '.') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary-card bg-info">
                        <div class="summary-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="summary-info">
                            <h3>Jumlah Departemen</h3>
                            <h2>{{ $budgets->pluck('department')->unique()->count() }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary-card bg-warning">
                        <div class="summary-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="summary-info">
                            <h3>Periode Aktif</h3>
                            <h2>{{ now()->format('M Y') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Anggaran -->
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-header">
                        <tr>
                            <th class="sortable" data-sort="department">
                                <div class="d-flex align-items-center">
                                    Departemen <i class="fas fa-sort ms-1"></i>
                                </div>
                            </th>
                            <th class="sortable" data-sort="budget_amount">
                                <div class="d-flex align-items-center">
                                    Jumlah Anggaran <i class="fas fa-sort ms-1"></i>
                                </div>
                            </th>
                            <th>Keterangan</th>
                            <th class="sortable" data-sort="period">
                                <div class="d-flex align-items-center">
                                    Periode <i class="fas fa-sort ms-1"></i>
                                </div>
                            </th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($budgets as $budget)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="dept-icon me-2">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    {{ $budget->department }}
                                </div>
                            </td>
                            <td>
                                <div class="budget-amount">
                                    Rp {{ number_format($budget->budget_amount, 2, ',', '.') }}
                                </div>
                            </td>
                            <td>
                                <div class="description-text">
                                    {{ $budget->description }}
                                </div>
                            </td>
                            <td>
                                <div class="period-badge">
                                    {{ $budget->period->format('M Y') }}
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn btn-sm btn-info edit-btn" 
                                            data-modal-target="editBudgetModal" 
                                            data-modal-toggle="editBudgetModal"
                                            data-budget-id="{{ $budget->id }}"
                                            data-budget-department="{{ $budget->department }}"
                                            data-budget-amount="{{ $budget->budget_amount }}"
                                            data-budget-description="{{ $budget->description }}"
                                            data-budget-period="{{ $budget->period->format('Y-m-d') }}">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <form class="d-inline" method="POST" action="{{ route('budget.destroy', $budget->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger delete-btn" 
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus anggaran ini?')">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="pagination-container">
                {{ $budgets->links() }}
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Anggaran -->
<div id="addBudgetModal" tabindex="-1" aria-hidden="true" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">
                    <i class="fas fa-plus-circle me-2"></i> Tambah Anggaran Baru
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('budget.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="department" class="form-label">Departemen</label>
                        <select name="department" id="department" class="form-select" required>
                            <option value="">Pilih Departemen</option>
                            <option value="Production">Production</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Quality Control">Quality Control</option>
                            <option value="Finance">Finance</option>
                            <option value="HR">HR</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="budget_amount" class="form-label">Jumlah Anggaran</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" step="0.01" name="budget_amount" id="budget_amount" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Keterangan</label>
                        <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="period" class="form-label">Periode</label>
                        <input type="month" name="period" id="period" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Anggaran -->
<div id="editBudgetModal" tabindex="-1" aria-hidden="true" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">
                    <i class="fas fa-edit me-2"></i> Edit Anggaran
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editBudgetForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit_department" class="form-label">Departemen</label>
                        <select name="department" id="edit_department" class="form-select" required>
                            <option value="">Pilih Departemen</option>
                            <option value="Production">Production</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Quality Control">Quality Control</option>
                            <option value="Finance">Finance</option>
                            <option value="HR">HR</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="edit_budget_amount" class="form-label">Jumlah Anggaran</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" step="0.01" name="budget_amount" id="edit_budget_amount" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="edit_description" class="form-label">Keterangan</label>
                        <textarea name="description" id="edit_description" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="edit_period" class="form-label">Periode</label>
                        <input type="month" name="period" id="edit_period" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Perbarui
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
    .full-background {
        background: url('{{ asset("images/sugitybuilding.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh;
        padding: 20px;
        position: relative;
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
        height: auto;
        margin-right: 20px;
    }
    .kpi-title {
        font-size: 36px;
        font-weight: bold;
        color: #006D77;
        margin: 0;
        text-align: center;
        flex-grow: 1;
    }
    .content-wrapper {
        background-color: rgba(255, 255, 255, 0.95);
        border-radius: 8px;
        padding: 20px;
        margin-top: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .filter-container {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }
    .budget-summary {
        margin-bottom: 20px;
    }
    .summary-card {
        display: flex;
        align-items: center;
        border-radius: 8px;
        padding: 15px;
        color: white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        height: 100%;
        transition: transform 0.3s ease;
    }
    .summary-card:hover {
        transform: translateY(-5px);
    }
    .bg-primary {
        background: linear-gradient(135deg, #006D77, #83C5BE);
    }
    .bg-success {
        background: linear-gradient(135deg, #2A9D8F, #57CC99);
    }
    .bg-info {
        background: linear-gradient(135deg, #118AB2, #73C2FB);
    }
    .bg-warning {
        background: linear-gradient(135deg, #EE9B00, #FFCB69);
    }
    .summary-icon {
        font-size: 2.5rem;
        margin-right: 15px;
        opacity: 0.8;
    }
    .summary-info h3 {
        font-size: 14px;
        margin: 0;
        opacity: 0.8;
    }
    .summary-info h2 {
        font-size: 20px;
        margin: 5px 0 0;
        font-weight: bold;
    }
    .table-container {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-top: 20px;
    }
    .table {
        margin-bottom: 0;
    }
    .table-header {
        background-color: #f8f9fa;
    }
    .table th {
        font-weight: 600;
        color: #495057;
        border-bottom: 2px solid #e9ecef;
    }
    .table td {
        vertical-align: middle;
        border-bottom: 1px solid #e9ecef;
    }
    .sortable {
        cursor: pointer;
    }
    .dept-icon {
        width: 30px;
        height: 30px;
        background-color: #e9ecef;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #006D77;
    }
    .budget-amount {
        font-weight: 600;
        color: #006D77;
    }
    .description-text {
        max-width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .period-badge {
        display: inline-block;
        padding: 5px 10px;
        background-color: #e9ecef;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }
    .action-buttons {
        display: flex;
        gap: 5px;
        justify-content: center;
    }
    .edit-btn, .delete-btn {
        display: flex;
        align-items: center;
        gap: 5px;
    }
    .pagination-container {
        padding: 15px;
        display: flex;
        justify-content: center;
    }
    .modal-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #e9ecef;
    }
    .modal-title {
        color: #006D77;
        font-weight: 600;
    }
    .form-label {
        font-weight: 500;
        color: #495057;
    }
    .btn-primary {
        background-color: #006D77;
        border-color: #006D77;
    }

    .btn-primary:hover {
        background-color: #005a63;
        border-color: #005a63;
    }
    .btn-info {
        background-color: #83C5BE;
        border-color: #83C5BE;
        color: white;
    }
    .btn-info:hover {
        background-color: #70b2ab;
        border-color: #70b2ab;
        color: white;
    }
    @media (max-width: 768px) {
        .kpi-title {
            font-size: 28px;
        }
        .summary-card {
            margin-bottom: 15px;
        }
        .action-buttons {
            flex-direction: column;
        }
    }
</style>

<!-- Scripts -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Script untuk mengisi form edit
        const editButtons = document.querySelectorAll('[data-modal-target="editBudgetModal"]');
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const budgetId = this.getAttribute('data-budget-id');
                const department = this.getAttribute('data-budget-department');
                const amount = this.getAttribute('data-budget-amount');
                const description = this.getAttribute('data-budget-description');
                const period = this.getAttribute('data-budget-period');

                // Mengubah format tanggal dari YYYY-MM-DD menjadi YYYY-MM untuk input type="month"
                const periodMonth = period.substring(0, 7);

                document.getElementById('edit_department').value = department;
                document.getElementById('edit_budget_amount').value = amount;
                document.getElementById('edit_description').value = description;
                document.getElementById('edit_period').value = periodMonth;

                const form = document.getElementById('editBudgetForm');
                form.action = `/budget/${budgetId}`;
            });
        });

        // Script untuk filter dan pencarian
        const filterDepartment = document.getElementById('filterDepartment');
        const filterPeriod = document.getElementById('filterPeriod');
        const searchBudget = document.getElementById('searchBudget');
        
        function applyFilters() {
            const departmentValue = filterDepartment.value.toLowerCase();
            const periodValue = filterPeriod.value;
            const searchValue = searchBudget.value.toLowerCase();
            
            const rows = document.querySelectorAll('tbody tr');
            
            rows.forEach(row => {
                const department = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
                const period = row.querySelector('td:nth-child(4)').textContent;
                const description = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                
                const matchDepartment = !departmentValue || department.includes(departmentValue);
                const matchPeriod = !periodValue || period.includes(periodValue);
                const matchSearch = !searchValue || 
                                    department.includes(searchValue) || 
                                    description.includes(searchValue);
                
                if (matchDepartment && matchPeriod && matchSearch) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
        
        if (filterDepartment) filterDepartment.addEventListener('change', applyFilters);
        if (filterPeriod) filterPeriod.addEventListener('change', applyFilters);
        if (searchBudget) searchBudget.addEventListener('input', applyFilters);
        
        // Script untuk sorting tabel
        const sortableHeaders = document.querySelectorAll('.sortable');
        
        sortableHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const sortBy = this.getAttribute('data-sort');
                const tbody = document.querySelector('tbody');
                const rows = Array.from(tbody.querySelectorAll('tr'));
                
                // Toggle sort direction
                const currentDirection = this.getAttribute('data-direction') || 'asc';
                const newDirection = currentDirection === 'asc' ? 'desc' : 'asc';
                
                // Reset all headers
                sortableHeaders.forEach(h => h.setAttribute('data-direction', ''));
                
                // Set new direction
                this.setAttribute('data-direction', newDirection);
                
                // Update sort icon
                const icon = this.querySelector('i');
                icon.className = newDirection === 'asc' ? 'fas fa-sort-up ms-1' : 'fas fa-sort-down ms-1';
                
                // Sort rows
                rows.sort((a, b) => {
                    let aValue, bValue;
                    
                    if (sortBy === 'department') {
                        aValue = a.querySelector('td:nth-child(1)').textContent.trim();
                        bValue = b.querySelector('td:nth-child(1)').textContent.trim();
                    } else if (sortBy === 'budget_amount') {
                        aValue = parseFloat(a.querySelector('td:nth-child(2)').textContent.replace(/[^\d.-]/g, ''));
                        bValue = parseFloat(b.querySelector('td:nth-child(2)').textContent.replace(/[^\d.-]/g, ''));
                    } else if (sortBy === 'period') {
                        aValue = new Date(a.querySelector('td:nth-child(4)').textContent);
                        bValue = new Date(b.querySelector('td:nth-child(4)').textContent);
                    }
                    
                    if (newDirection === 'asc') {
                        return aValue > bValue ? 1 : -1;
                    } else {
                        return aValue < bValue ? 1 : -1;
                    }
                });
                
                // Reappend rows in new order
                rows.forEach(row => tbody.appendChild(row));
            });
        });
    });
</script>
@endsection