@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Edit Data Gorika</h1>
    </div>

    <div class="container-fluid">
        <div class="card custom-card shadow-lg">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0 text-white">Form Edit Data Gorika</h3>
                <a href="{{ route('gorika.index') }}" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('gorika.update', $gorika->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="departemen" class="form-label">Departemen</label>
                        <input type="text" class="form-control" id="departemen" name="departemen" value="{{ old('departemen', $gorika->departemen) }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="total_activity" class="form-label">Total Activity</label>
                        <input type="number" class="form-control" id="total_activity" name="total_activity" value="{{ old('total_activity', $gorika->total_activity) }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="implementasi" class="form-label">Implementasi</label>
                        <input type="text" class="form-control" id="implementasi" name="implementasi" value="{{ old('implementasi', $gorika->implementasi) }}" required>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
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
    
    .form-label {
        font-weight: 600;
        color: #495057;
    }
    
    .form-control {
        border-radius: 8px;
        padding: 12px 15px;
        border: 1px solid #ced4da;
        transition: all 0.3s;
    }
    
    .form-control:focus {
        border-color: #83C5BE;
        box-shadow: 0 0 0 0.25rem rgba(131, 197, 190, 0.25);
    }
    
    .btn-primary {
        background-color: #006D77;
        border-color: #006D77;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s;
    }
    
    .btn-primary:hover {
        background-color: #005a63;
        border-color: #005a63;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }
    
    .btn-light {
        background-color: #f8f9fa;
        border-color: #f8f9fa;
        color: #495057;
        padding: 8px 15px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s;
    }
    
    .btn-light:hover {
        background-color: #e2e6ea;
        border-color: #dae0e5;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    @media (max-width: 768px) {
        .kpi-title {
            font-size: 28px;
        }
        
        .card-body {
            padding: 15px;
        }
    }
</style>
@endsection