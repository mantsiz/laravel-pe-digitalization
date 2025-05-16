@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Edit Data Gorika Improvement</h1>
    </div>

    <div class="container-fluid">
        <div class="card custom-card shadow-lg">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0 text-white">Form Edit Data Gorika Improvement</h3>
                <a href="{{ route('gorika-improvement.index') }}" class="btn btn-light btn-sm">
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

                <form action="{{ route('gorika-improvement.update', $improvement->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $improvement->type) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $improvement->category) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="rank" class="form-label">Rank</label>
                            <input type="text" class="form-control" id="rank" name="rank" value="{{ old('rank', $improvement->rank) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="field_division" class="form-label">Field Division</label>
                            <input type="text" class="form-control" id="field_division" name="field_division" value="{{ old('field_division', $improvement->field_division) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="division" class="form-label">Division</label>
                            <input type="text" class="form-control" id="division" name="division" value="{{ old('division', $improvement->division) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="gm" class="form-label">GM</label>
                            <input type="text" class="form-control" id="gm" name="gm" value="{{ old('gm', $improvement->gm) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="department" class="form-label">Department</label>
                            <input type="text" class="form-control" id="department" name="department" value="{{ old('department', $improvement->department) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="manager" class="form-label">Manager</label>
                            <input type="text" class="form-control" id="manager" name="manager" value="{{ old('manager', $improvement->manager) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="pic" class="form-label">PIC</label>
                            <input type="text" class="form-control" id="pic" name="pic" value="{{ old('pic', $improvement->pic) }}" required>
                        </div>
                        
                        <div class="col-md-12 mb-3">
                            <label for="detail_activity" class="form-label">Detail Activity</label>
                            <textarea class="form-control" id="detail_activity" name="detail_activity" rows="4" required>{{ old('detail_activity', $improvement->detail_activity) }}</textarea>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="month" class="form-label">Month</label>
                            <input type="text" class="form-control" id="month" name="month" value="{{ old('month', $improvement->month) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="monthly" class="form-label">Monthly</label>
                            <input type="number" step="0.01" class="form-control" id="monthly" name="monthly" value="{{ old('monthly', $improvement->monthly) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="effect_period" class="form-label">Effect Period</label>
                            <input type="text" class="form-control" id="effect_period" name="effect_period" value="{{ old('effect_period', $improvement->effect_period) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="yearly" class="form-label">Yearly</label>
                            <input type="number" step="0.01" class="form-control" id="yearly" name="yearly" value="{{ old('yearly', $improvement->yearly) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="category_pl_impact" class="form-label">Category PL Impact</label>
                            <input type="text" class="form-control" id="category_pl_impact" name="category_pl_impact" value="{{ old('category_pl_impact', $improvement->category_pl_impact) }}" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="c" class="form-label">C</label>
                            <input type="text" class="form-control" id="c" name="c" value="{{ old('c', $improvement->c) }}">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="continue_current_model" name="continue_current_model" value="1" {{ old('continue_current_model', $improvement->continue_current_model) ? 'checked' : '' }}>
                                <label class="form-check-label" for="continue_current_model">
                                    Continue Current Model
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="continue_new_model" name="continue_new_model" value="1" {{ old('continue_new_model', $improvement->continue_new_model) ? 'checked' : '' }}>
                                <label class="form-check-label" for="continue_new_model">
                                    Continue New Model
                                </label>
                            </div>
                        </div>
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
    
    .form-control, .form-select {
        border-radius: 8px;
        padding: 12px 15px;
        border: 1px solid #ced4da;
        transition: all 0.3s;
    }
    
    .form-control:focus, .form-select:focus {
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