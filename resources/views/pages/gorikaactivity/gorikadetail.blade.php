@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Gorika Detail</h1>
    </div>

    <div class="container-fluid">
        <div class="card custom-card shadow-lg">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0 text-white">Data Aktivitas Gorika</h3>
                <a href="{{ route('gorika.create') }}" class="btn btn-light btn-sm">
                    <i class="fas fa-plus-circle"></i> Tambah Data
                </a>
            </div>
            <div class="card-body">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                
                <div class="table-responsive">
                    <table class="table custom-table">
                        <thead>
                            <tr>
                                <th width="5%" class="text-center align-middle">Nomor</th>
                                <th width="30%"class="align-middle">Departemen</th>
                                <th width="20%" class="text-center align-middle">Total Activity</th>
                                <th width="25%" class="align-middle">Implementasi</th>
                                <th width="20%" class="text-center align-middle">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($gorikaDetails as $index => $detail)
                            <tr>
                                <td class="text-center align-middle">{{ $index + 1 }}</td>
                                <td class="align-middle">{{ $detail->departemen }}</td>
                                <td class="text-center align-middle">{{ $detail->total_activity }}</td>
                                <td class="align-middle">{{ $detail->implementasi }}</td>
                                <td>
                                    <div class="action-buttons">
                                        <a href="{{ route('gorika.edit', $detail->id) }}" class="btn btn-edit">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('gorika.destroy', $detail->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <div class="empty-state">
                                        <i class="fas fa-database fa-4x text-muted mb-3"></i>
                                        <p class="text-muted fs-5">Belum ada data Gorika tersedia</p>
                                        <a href="{{ route('gorika.create') }}" class="btn btn-primary mt-3">
                                            <i class="fas fa-plus-circle"></i> Tambah Data Baru
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
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
        border-radius: 10px;
        padding: 15px 25px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    
    .company-logo {
        width: 120px;
        margin-right: 20px;
    }
    
    .kpi-title {
        font-size: 36px;
        font-weight: 700;
        color: #006D77;
        flex-grow: 1;
        text-align: center;
        margin: 0;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }
    
    .custom-card {
        margin-bottom: 30px;
        border: none;
        border-radius: 12px;
        overflow: hidden;
        background-color: rgba(255, 255, 255, 0.95);
    }
    
    .card-header {
        background: linear-gradient(135deg, #006D77, #83C5BE);
        padding: 18px 25px;
        border-bottom: none;
    }
    
    .card-title {
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    
    .card-body {
        padding: 25px;
    }
    
    .custom-table {
        margin-bottom: 0;
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }
    
    .custom-table thead tr {
        background: linear-gradient(to right, #e6f3f5, #f0f9fa);
        border-bottom: 2px solid #83C5BE;
    }
    
    .custom-table th {
        font-weight: 600;
        color: #006D77;
        padding: 15px;
        text-transform: uppercase;
        font-size: 14px;
        letter-spacing: 0.5px;
        border: none;
        vertical-align: middle;
    }
    
    .custom-table td {
        padding: 15px;
        border: none;
        border-bottom: 1px solid #edf2f7;
        vertical-align: middle;
        color: #333;
        font-size: 15px;
    }
    
    .custom-table tbody tr:hover {
        background-color: rgba(131, 197, 190, 0.1);
        transition: all 0.2s ease;
    }
    
    .custom-table tbody tr:last-child td {
        border-bottom: none;
    }
    
    .action-buttons {
        display: flex;
        gap: 8px;
        justify-content: center;
    }
    
    .btn-edit, .btn-delete {
        padding: 6px 12px;
        font-size: 13px;
        border-radius: 6px;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .btn-edit {
        background-color: #006D77;
        border-color: #006D77;
        color: white;
    }
    
    .btn-edit:hover {
        background-color: #005a63;
        border-color: #005a63;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        color: white;
    }
    
    .btn-delete {
        background-color: #E29578;
        border-color: #E29578;
        color: white;
    }
    
    .btn-delete:hover {
        background-color: #d78369;
        border-color: #d78369;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        color: white;
    }
    
    .empty-state {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 30px 0;
        color: #6c757d;
    }
    
    .alert {
        border-radius: 8px;
        border-left: 4px solid #28a745;
    }
    
    @media (max-width: 768px) {
        .kpi-title {
            font-size: 28px;
        }
        
        .action-buttons {
            flex-direction: column;
            gap: 5px;
        }
        
        .card-body {
            padding: 15px;
        }
        
        .custom-table th, .custom-table td {
            padding: 10px;
        }
    }
</style>
@endsection