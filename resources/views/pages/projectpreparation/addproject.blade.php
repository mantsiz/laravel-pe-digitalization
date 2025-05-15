@extends('layouts.app')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Add Project</h1>
    </div>

    <!-- Add Button -->
    <div class="add-button-container">
        <button class="btn-add" onclick="openModal()">
            <i class="fas fa-plus"></i> Add New Project
        </button>
    </div>

    <div class="container-fluid d-flex">
        <!-- Sidebar Chapter -->
        <div class="chapter-container">
            <div class="chapter-box">
                <h4>Project Preparation</h4>
                <ul>
                    <li><a href="{{ url('/projectpreparation/addproject') }}" class="menu-item active">Add Project</a></li>
                    <li><a href="{{ url('/projectpreparation/masterschedule') }}" class="menu-item">Master Schedule</a></li>
                    <li><a href="{{ url('/projectpreparation/documents') }}" class="menu-item">Documents</a></li>
                    <li><a href="{{ url('/projectpreparation/tooling') }}" class="menu-item">Tooling</a></li>
                    <li><a href="{{ url('/projectpreparation/processline') }}" class="menu-item">Process Line</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Main Content Area -->
        <div class="content-area">
            <div class="card">
                <div class="card-body">
                    <h2>Daftar Project</h2>
                    <!-- Tabel project akan ditampilkan di sini -->
                    <table class="project-table">
                        <thead>
                            <tr>
                                <th>Nama Project</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data project akan ditampilkan di sini -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Form -->
<div id="projectModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2 class="modal-title">Add Project</h2>
        <form id="projectForm" method="POST" action="{{ route('project.store') }}">
            @csrf
            <!-- Master Schedule Section -->
            <div class="schedule-section">
                <h3 class="section-title">• Master Schedule</h3>
                
                <div class="schedule-item">
                    <div class="item-name">Loading Capacity</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="loading_capacity_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="loading_capacity_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Calculate Mold Space</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="calculate_mold_space_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="calculate_mold_space_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Idea Open Space</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="idea_open_space_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="idea_open_space_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Re-Lay Out Current</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="relay_out_current_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="relay_out_current_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Mold Store & Addressing</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="mold_store_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="mold_store_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Calculation Tanki & Dryer</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="calculation_tanki_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="calculation_tanki_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Idea Material dan Tanki</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="idea_material_tanki_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="idea_material_tanki_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Re-Lay Out Tanki</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="relay_out_tanki_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="relay_out_tanki_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Addressing</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="addressing_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="addressing_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Material Output From Tank vs Injection Calc.</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="material_output_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="material_output_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Hot Runner & Calculation</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="hot_runner_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="hot_runner_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Chiller</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="chiller_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="chiller_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="schedule-item">
                    <div class="item-name">Store Chuck & Address</div>
                    <div class="date-fields">
                        <div class="date-field">
                            <label>• Start Date</label>
                            <div class="date-input-container">
                                <input type="date" name="store_chuck_start" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                        <div class="date-field">
                            <label>• End Date</label>
                            <div class="date-input-container">
                                <input type="date" name="store_chuck_end" class="form-input">
                                <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- List Part Section -->
            <div class="part-section">
                <h3 class="section-title">• List Part</h3>
                <div class="part-input">
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="FR BUMPER [D-STD]">
                        <label>FR BUMPER [D-STD]</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="FR BUMPER [T-HI]">
                        <label>FR BUMPER [T-HI]</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="RR BUMPER [STD]">
                        <label>RR BUMPER [STD]</label>
                    </div>
                    <div class="part-item">
                    <input type="checkbox" name="parts[]" value="RR BUMPER [T-HI]">
                        <label>RR BUMPER [T-HI]</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="COVER FR BUMPER [T-STD]">
                        <label>COVER FR BUMPER [T-STD]</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="MOULDING, BODY ROCKER PANEL RH/LH [T-HI]">
                        <label>MOULDING, BODY ROCKER PANEL RH/LH [T-HI]</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="GUARD, FR BUMPER (AERO)">
                        <label>GUARD, FR BUMPER (AERO)</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="GUARD, RR BUMPER (AERO)">
                        <label>GUARD, RR BUMPER (AERO)</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="PLATE, RR BUMPER RH (AERO)">
                        <label>PLATE, RR BUMPER RH (AERO)</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="MOULDING, QUARTER WINDOW, OUTSIDE">
                        <label>MOULDING, QUARTER WINDOW, OUTSIDE</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="MOULDING, QUARTER WINDOW, OUTSIDE [T-HI]">
                        <label>MOULDING, QUARTER WINDOW, OUTSIDE [T-HI]</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="MOULDING, FR BUMPER SIDE, RH/LH [T-STD]">
                        <label>MOULDING, FR BUMPER SIDE, RH/LH [T-STD]</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="MOULDING, FR BUMPER SIDE, RH/LH [T-HI]">
                        <label>MOULDING, FR BUMPER SIDE, RH/LH [T-HI]</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="MOULDING, FR BUMPER EXTENSION, RH/LH (AERO)">
                        <label>MOULDING, FR BUMPER EXTENSION, RH/LH (AERO)</label>
                    </div>
                    <div class="part-item">
                        <input type="checkbox" name="parts[]" value="GARNISH S/A RADIATOR GRILLE">
                        <label>GARNISH S/A RADIATOR GRILLE</label>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="form-actions">
                <button type="submit" class="btn-submit">• Submit</button>
            </div>
        </form>
    </div>
</div>

<form id="projectForm" method="POST" action="{{ route('project.store') }}">
    @csrf
    <!-- Nama Project -->
    <div class="form-group">
        <label>Nama Project</label>
        <input type="text" name="nama_project" class="form-input" required>
    </div>

    <!-- Master Schedule Section -->
    <div class="schedule-section">
        <h3 class="section-title">• Master Schedule</h3>
        
        <!-- Loading Capacity -->
        <div class="schedule-item">
            <div class="item-name">Loading Capacity</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="loading_capacity_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="loading_capacity_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Calculate Mold Space -->
        <div class="schedule-item">
            <div class="item-name">Calculate Mold Space</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="calculate_mold_space_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="calculate_mold_space_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Idea Open Space -->
        <div class="schedule-item">
            <div class="item-name">Idea Open Space</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="idea_open_space_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="idea_open_space_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Re-Lay Out Current -->
        <div class="schedule-item">
            <div class="item-name">Re-Lay Out Current</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="relay_out_current_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="relay_out_current_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mold Store & Addressing -->
        <div class="schedule-item">
            <div class="item-name">Mold Store & Addressing</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="mold_store_addressing_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="mold_store_addressing_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Calculation Tanki & Dryer -->
        <div class="schedule-item">
            <div class="item-name">Calculation Tanki & Dryer</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="calculation_tanki_drayer_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="calculation_tanki_dryer_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Idea Material dan Tanki -->
        <div class="schedule-item">
            <div class="item-name">Idea Material dan Tanki</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="idea_material_tanki_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="idea_material_tanki_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Re-Lay Out Tanki -->
        <div class="schedule-item">
            <div class="item-name">Re-Lay Out Tanki</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="relay_out_tanki_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="relay_out_tanki_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Addressing -->
        <div class="schedule-item">
            <div class="item-name">Addressing</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="addressing_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="addressing_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Material Output From Tank vs Injection Calc. -->
        <div class="schedule-item">
            <div class="item-name">Material Output From Tank vs Injection Calc.</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="material_output_from_tank_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="material_output_from_tank_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>

         <!-- Hot Runner & Calculation -->
         <div class="schedule-item">
            <div class="item-name">Hot Runner & Calculation</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="hot_runner_calculation_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="hot_runner_calculation_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>

         <!-- Chiller -->
         <div class="schedule-item">
            <div class="item-name">Chiller</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="chiller_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="chiller_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>

         <!-- Store Chuck & Address -->
         <div class="schedule-item">
            <div class="item-name">Store Chuck & Address</div>
            <div class="date-fields">
                <div class="date-field">
                    <label>• Start Date</label>
                    <div class="date-input-container">
                        <input type="date" name="store_chuck_address_start" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
                <div class="date-field">
                    <label>• End Date</label>
                    <div class="date-input-container">
                        <input type="date" name="store_chuck_address_end" class="form-input" required>
                        <span class="calendar-icon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- List Part Section -->
    <div class="part-section">
        <h3 class="section-title">• List Part</h3>
        <div class="part-input">
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="FR BUMPER [D-STD]">
                <label>FR BUMPER [D-STD]</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="FR BUMPER [T-HI]">
                <label>FR BUMPER [T-HI]</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="RR BUMPER [STD]">
                <label>RR BUMPER [STD]</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="RR BUMPER [T-HI]">
                <label>RR BUMPER [T-HI]</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="COVER FR BUMPER [T-STD]">
                <label>COVER FR BUMPER [T-STD]</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="MOULDING, BODY ROCKER PANEL RH/LH [T-HI]">
                <label>MOULDING, BODY ROCKER PANEL RH/LH [T-HI]</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="GUARD, FR BUMPER (AERO)">
                <label>GUARD, FR BUMPER (AERO)</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="GUARD, RR BUMPER (AERO)">
                <label>GUARD, RR BUMPER (AERO)</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="PLATE, RR BUMPER RH (AERO)">
                <label>PLATE, RR BUMPER RH (AERO)</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="MOULDING, QUARTER WINDOW, OUTSIDE">
                <label>MOULDING, QUARTER WINDOW, OUTSIDE</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="MOULDING, QUARTER WINDOW, OUTSIDE [T-HI]">
                <label>MOULDING, QUARTER WINDOW, OUTSIDE [T-HI]</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="MOULDING, FR BUMPER SIDE, RH/LH [T-STD]">
                <label>MOULDING, FR BUMPER SIDE, RH/LH [T-STD]</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="MOULDING, FR BUMPER SIDE, RH/LH [T-HI]">
                <label>MOULDING, FR BUMPER SIDE, RH/LH [T-HI]</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="MOULDING, FR BUMPER EXTENSION, RH/LH (AERO)">
                <label>MOULDING, FR BUMPER EXTENSION, RH/LH (AERO)</label>
            </div>
            <div class="part-item">
                <input type="checkbox" name="parts[]" value="GARNISH S/A RADIATOR GRILLE">
                <label>GARNISH S/A RADIATOR GRILLE</label>
            </div>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="form-actions">
        <button type="submit" class="btn-submit">• Submit</button>
    </div>
</form>

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
        display: flex;
        flex-direction: column;
        gap: 15px;
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
        cursor: pointer;
        padding: 5px;
        list-style: none;
        transition: background 0.3s;
    }
    .menu-item:hover, .menu-item.active {
        background-color: #007bff;
        color: white;
        border-radius: 5px;
    }
    .add-button-container {
        padding: 20px;
        text-align: center;
        margin-left: 140px;
    }
    .btn-add {
        background-color: #2ecc71;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
        transition: background-color 0.3s;
    }
    .btn-add:hover {
        background-color: #27ae60;
    }
    .content-area {
        flex-grow: 1;
        padding: 20px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        margin-left: 20px;
    }
    .card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .card-body {
        padding: 20px;
    }
    /* Tabel Styles */
    .project-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    .project-table th, .project-table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .project-table th {
        background-color: #006D77;
        color: white;
    }
    .project-table tr:hover {
        background-color: #f5f5f5;
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
        background-color: rgba(0, 0, 0, 0.5);
        overflow-y: auto;
    }
    .modal-content {
        background-color: white;
        margin: 5% auto;
        padding: 30px;
        border-radius: 15px;
        width: 80%;
        max-width: 800px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        position: relative;
    }
    .close {
        position: absolute;
        top: 15px;
        right: 20px;
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
    .close:hover {
        color: black;
    }
    .modal-title {
        color: #006D77;
        font-size: 24px;
        margin-bottom: 20px;
        font-weight: bold;
    }
    .section-title {
        color: #006D77;
        font-size: 18px;
        margin-bottom: 15px;
        font-weight: bold;
    }
    .schedule-section, .part-section {
        margin-bottom: 20px;
    }
    .schedule-item {
        display: flex;
        margin-bottom: 10px;
        align-items: center;
    }
    .item-name {
        width: 30%;
        padding-left: 20px;
        color: #006D77;
    }
    .date-fields {
        display: flex;
        width: 70%;
        gap: 20px;
    }
    .date-field {
        display: flex;
        align-items: center;
        width: 50%;
    }
    .date-field label {
        color: #006D77;
        margin-right: 10px;
        white-space: nowrap;
    }
    .date-input-container {
        position: relative;
        width: 100%;
    }
    .calendar-icon {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #006D77;
    }
    .form-actions {
        display: flex;
        justify-content: flex-end;
        margin-top: 20px;
    }
    .btn-submit {
        background-color: #006D77;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-weight: 600;
        transition: background-color 0.3s;
    }
    .btn-submit:hover {
        background-color: #005a63;
    }
    .part-section {
        margin-top: 20px;
    }
    .part-input {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 10px;
        margin-top: 10px;
    }
    .part-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 5px;
        background: #f8f9fa;
        border-radius: 4px;
    }
    .part-item input[type="checkbox"] {
        width: 18px;
        height: 18px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #006D77;
    }
    .form-input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
</style>

@push('scripts')
<script>
    // Fungsi untuk membuka modal
    function openModal() {
        var modal = document.getElementById('projectModal');
        if (modal) {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden'; // Mencegah scrolling pada body
        } else {
            console.error('Modal element not found');
        }
    }
    
    // Fungsi untuk menutup modal
    function closeModal() {
        var modal = document.getElementById('projectModal');
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Mengaktifkan kembali scrolling pada body
        }
    }
    
    // Menutup modal ketika user mengklik di luar modal
    window.onclick = function(event) {
        var modal = document.getElementById('projectModal');
        if (modal && event.target == modal) {
            closeModal();
        }
    }
    
    // Pastikan DOM sudah dimuat sebelum menambahkan event listener
    document.addEventListener('DOMContentLoaded', function() {
        var addButton = document.querySelector('.btn-add');
        if (addButton) {
            addButton.addEventListener('click', openModal);
        }
        
        var closeButton = document.querySelector('.close');
        if (closeButton) {
            closeButton.addEventListener('click', closeModal);
        }
    });
</script>
@endpush
@endsection