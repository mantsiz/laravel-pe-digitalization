@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Process Control</h1>
    </div>

    <div class="container-fluid d-flex">
    <!-- Sidebar Chapter -->
    <div class="chapter-container">
        <div class="chapter-box">
            <h4>Resin</h4>
            <ul>
                <li><a href="{{ url('/productionresin') }}" class="menu-item">KPI</a></li>
                <li><a href="{{ url('/productionresin2') }}" class="menu-item active">Process Control</a></li>
                <li><a href="{{ url('/productionresin3') }}" class="menu-item">Improve</a></li>
            </ul>
        </div>
        <div class="chapter-box">
            <h4>Painting</h4>
            <ul>
                <li><a href="{{ url('/productionpainting') }}" class="menu-item">OK Ratio</a></li>
                <li><a href="{{ url('/productionpainting2') }}" class="menu-item">TE (%)</a></li>
                <li><a href="#" class="menu-item" data-section="painting-gentan">Gentan-I</a></li>
            </ul>
        </div>
        <div class="chapter-box">
            <h4>S/A</h4>
            <ul>
                <li><a href="#" class="menu-item" data-section="sa-efficiency">Efficiency</a></li>
                <li><a href="#" class="menu-item" data-section="sa-ok">OK Ratio</a></li>
            </ul>
        </div>
        
        <!-- Status Legend -->
        <div class="status-legend mt-4 p-3 bg-white rounded-lg shadow">
            <h5 class="font-bold text-center mb-2">Status Indikator</h5>
            <div class="flex items-center space-x-2 mb-2">
                <div class="w-4 h-4 rounded-full bg-green-500"></div>
                <span>Operasional</span>
            </div>
            <div class="flex items-center space-x-2 mb-2">
                <div class="w-4 h-4 rounded-full bg-red-500"></div>
                <span>Bermasalah</span>
            </div>
            <div class="flex items-center space-x-2">
                <div class="w-4 h-4 rounded-full bg-gray-500 border border-gray-700"></div>
                <span>Tidak Aktif</span>
            </div>
        </div>
        
        <!-- Last Updated -->
        <div class="mt-4 p-3 bg-white rounded-lg shadow">
            <p class="text-sm text-center">Terakhir diperbarui: <br><span id="last-updated">{{ date('d M Y H:i:s') }}</span></p>
        </div>
    </div>
    
    <!-- F Machine Chapter -->
    <div class="flex-grow">
    <!-- Machine Sections Container -->
    <div class="grid grid-cols-2 gap-6 px-8">
    <!-- F2 Section -->
    <div class="flex items-start gap-4">
        <div class="w-full px-10 mx-auto mb-16">
            <div class="w-full border-2 border-gray-400 rounded-xl p-6 bg-white shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <h2 class="text-lg font-bold mb-4 text-center text-white p-2 rounded-lg bg-blue-600">F2</h2>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-red-500 pulse-animation"></div> 
                            <span class="font-medium">MC #8 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F2-MC8">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #7 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F2-MC7">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #6 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F2-MC7">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #5 3500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F2-MC7">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #4 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F2-MC7">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #3 3500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F2-MC7">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #2 3500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F2-MC7">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #1 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F2-MC7">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <!-- ... existing code ... -->
                </div>
            </div>
            <div class="mt-6 px-4 flex justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow update-data" data-section="F2">
                    <i class="fas fa-sync-alt mr-2"></i> Update Data
                </button>
                <button class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded shadow view-report" data-section="F2">
                    <i class="fas fa-chart-line mr-2"></i> Lihat Laporan
                </button>
            </div>
        </div>
    </div>
    <!-- F3 Section -->
    <div class="flex items-start gap-4">
        <div class="w-full px-10 mx-auto mb-16">
            <div class="w-full border-2 border-gray-400 rounded-xl p-6 bg-white shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <h2 class="text-lg font-bold mb-4 text-center text-white p-2 rounded-lg bg-purple-600">F3</h2>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #5 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #4 1050T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #3 1300T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #2 1300T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #1 1300T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #6 1600T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #7 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #8 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #9 1600T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #10 1600T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #10 650T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #13 650T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #14 650T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <!-- ... existing code ... -->
                </div>
            </div>
            <div class="mt-6 px-4 flex justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow update-data" data-section="F3">
                    <i class="fas fa-sync-alt mr-2"></i> Update Data
                </button>
                <button class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded shadow view-report" data-section="F3">
                    <i class="fas fa-chart-line mr-2"></i> Lihat Laporan
                </button>
            </div>
        </div>
    </div>
    <!-- F4 Section -->
    <div class="flex items-start gap-4">
        <div class="w-full px-10 mx-auto mb-16">
            <div class="w-full border-2 border-gray-400 rounded-xl p-6 bg-white shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <h2 class="text-lg font-bold mb-4 text-center text-white p-2 rounded-lg bg-green-600">F4</h2>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #1 350T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #8 350T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #B3 3500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #B2 3500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-gray-500"></div> 
                            <span class="font-medium">MC #B1 3500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                </div>
                <!-- ... existing code ... -->
            </div>
            <div class="mt-6 px-4 flex justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow update-data" data-section="F4">
                    <i class="fas fa-sync-alt mr-2"></i> Update Data
                </button>
                <button class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded shadow view-report" data-section="F4">
                    <i class="fas fa-chart-line mr-2"></i> Lihat Laporan
                </button>
            </div>
        </div>
    </div>
    <!-- Plant-2 Krw Section -->
    <div class="flex items-start gap-4">
        <div class="w-full px-10 mx-auto mb-16">
            <div class="w-full border-2 border-gray-400 rounded-xl p-6 bg-white shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <h2 class="text-lg font-bold mb-4 text-center text-white p-2 rounded-lg bg-yellow-600">Plant-2 Krw</h2>
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #5 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #4 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #3 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #2 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                    <div class="flex items-center justify-between p-2 rounded-lg hover:bg-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-5 h-5 rounded-full bg-green-500"></div> 
                            <span class="font-medium">MC #1 2500T</span>
                        </div>
                        <button class="text-blue-500 hover:text-blue-700 details-btn" data-machine="F3-MC5">
                            <i class="fas fa-info-circle"></i> Detail
                        </button>
                    </div>
                </div>
                <!-- ... existing code ... -->
            </div>
            <div class="mt-6 px-4 flex justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded shadow update-data" data-section="Plant2">
                    <i class="fas fa-sync-alt mr-2"></i> Update Data
                </button>
                <button class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded shadow view-report" data-section="Plant2">
                    <i class="fas fa-chart-line mr-2"></i> Lihat Laporan
                </button>
            </div>
        </div>     
    </div>
                                                            
    <div class="mt-12 flex justify-center">
        <div class="w-3/4 bg-white p-6 shadow-lg rounded-lg">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Laporan Abnormalitas</h2>
                <div class="flex space-x-2">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-3 rounded shadow text-sm">
                        <i class="fas fa-download mr-1"></i> Ekspor
                    </button>
                    <button class="bg-green-500 hover:bg-green-700 text-white font-semibold py-1 px-3 rounded shadow text-sm">
                        <i class="fas fa-print mr-1"></i> Cetak
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-2">No</th>
                            <th class="border p-2">MC No.</th>
                            <th class="border p-2">Part Name</th>
                            <th class="border p-2">Abnormal</th>
                            <th class="border p-2">Status</th>
                            <th class="border p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border p-2 text-center">1</td>
                            <td class="border p-2 text-center">MC-101</td>
                            <td class="border p-2 text-center">Part A</td>
                            <td class="border p-2 text-center text-red-500">Overheating</td>
                            <td class="border p-2 text-center"><span class="bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs">Belum Ditangani</span></td>
                            <td class="border p-2 text-center">
                                <button class="bg-yellow-500 hover:bg-yellow-700 text-white px-2 py-1 rounded text-xs">Tangani</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="border p-2 text-center">2</td>
                            <td class="border p-2 text-center">MC-202</td>
                            <td class="border p-2 text-center">Part B</td>
                            <td class="border p-2 text-center text-yellow-500">Vibration Issue</td>
                            <td class="border p-2 text-center"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Dalam Proses</span></td>
                            <td class="border p-2 text-center">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white px-2 py-1 rounded text-xs">Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>
</div>

<!-- Modal untuk Detail Mesin -->
<div id="machine-detail-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg w-11/12 md:w-2/3 lg:w-1/2 max-h-screen overflow-y-auto">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-bold" id="modal-title">Detail Mesin</h3>
            <button id="close-modal" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div id="modal-content">
            <!-- Konten detail mesin akan diisi melalui JavaScript -->
        </div>
        <div class="mt-6 flex justify-end">
            <button id="close-modal-btn" class="bg-gray-500 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded shadow">
                Tutup
            </button>
        </div>
    </div>
</div>

<!-- Font Awesome untuk ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Chart.js untuk Grafik -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Menangani klik pada menu item
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function(e) {
                if (this.getAttribute('data-section')) {
                    e.preventDefault();
                    let section = this.getAttribute('data-section');
                    
                    // Sembunyikan semua section
                    document.querySelectorAll('.content-section').forEach(sec => {
                        sec.style.display = 'none';
                    });
                    
                    // Tampilkan section yang dipilih
                    let targetSection = document.getElementById(section);
                    if (targetSection) {
                        targetSection.style.display = 'block';
                    }
                    
                    // Hapus class 'active' dari semua menu-item
                    document.querySelectorAll('.menu-item').forEach(menu => {
                        menu.classList.remove('active');
                    });
                    
                    // Tambahkan class 'active' ke menu yang diklik
                    this.classList.add('active');
                }
            });
        });
        
        // Menangani klik pada tombol Update Data
        document.querySelectorAll('.update-data').forEach(button => {
            button.addEventListener('click', function() {
                const section = this.getAttribute('data-section');
                updateMachineData(section);
            });
        });
        
        // Menangani klik pada tombol View Report
        document.querySelectorAll('.view-report').forEach(button => {
            button.addEventListener('click', function() {
                const section = this.getAttribute('data-section');
                showSectionReport(section);
            });
        });
        
        // Menangani klik pada tombol Detail
        document.querySelectorAll('.details-btn').forEach(button => {
            button.addEventListener('click', function() {
                const machine = this.getAttribute('data-machine');
                showMachineDetails(machine);
            });
        });
        
        // Menangani klik pada tombol Close Modal
        document.getElementById('close-modal').addEventListener('click', closeModal);
        document.getElementById('close-modal-btn').addEventListener('click', closeModal);
        
        // Fungsi untuk memperbarui data mesin
        function updateMachineData(section) {
            // Simulasi loading
            const updateBtn = document.querySelector(`.update-data[data-section="${section}"]`);
            const originalText = updateBtn.innerHTML;
            updateBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Memperbarui...';
            updateBtn.disabled = true;
            
            // Simulasi AJAX request
            setTimeout(() => {
                // Update timestamp
                document.getElementById('last-updated').textContent = new Date().toLocaleString('id-ID');
                
                // Reset button
                updateBtn.innerHTML = originalText;
                updateBtn.disabled = false;
                
                // Tampilkan notifikasi sukses
                showNotification(`Data ${section} berhasil diperbarui!`, 'success');
            }, 1500);
        }
        
        // Fungsi untuk menampilkan laporan section
        function showSectionReport(section) {
            // Implementasi untuk menampilkan laporan
            showNotification(`Menampilkan laporan untuk ${section}`, 'info');
            // Di sini bisa ditambahkan kode untuk membuka halaman laporan atau menampilkan modal laporan
        }
        
        // Fungsi untuk menampilkan detail mesin
        function showMachineDetails(machine) {
            const modal = document.getElementById('machine-detail-modal');
            const modalTitle = document.getElementById('modal-title');
            const modalContent = document.getElementById('modal-content');
            
            modalTitle.textContent = `Detail Mesin ${machine}`;
            
            // Simulasi data mesin
            let machineData = {
                'F2-MC8': {
                    status: 'Bermasalah',
                    statusClass: 'text-red-500',
                    lastMaintenance: '2023-05-15',
                    nextMaintenance: '2023-06-15',
                    operator: 'Ahmad Sulaiman',
                    uptime: '85%',
                    issue: 'Overheating pada motor utama',
                    parts: ['Motor Drive', 'Control Panel', 'Hydraulic System']
                },
                'F2-MC7': {
                    status: 'Operasional',
                    statusClass: 'text-green-500',
                    lastMaintenance: '2023-04-20',
                    nextMaintenance: '2023-07-20',
                    operator: 'Budi Santoso',
                    uptime: '98%',
                    issue: 'Tidak ada',
                    parts: ['Motor Drive', 'Control Panel', 'Hydraulic System']
                },
                'F3-MC5': {
                    status: 'Operasional',
                    statusClass: 'text-green-500',
                    lastMaintenance: '2023-05-05',
                    nextMaintenance: '2023-08-05',
                    operator: 'Dewi Lestari',
                    uptime: '97%',
                    issue: 'Tidak ada',
                    parts: ['Motor Drive', 'Control Panel', 'Hydraulic System']
                }
            };
            
            // Jika data mesin ditemukan
            if (machineData[machine]) {
                const data = machineData[machine];
                
                // Buat konten HTML untuk modal
                modalContent.innerHTML = `
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="mb-2"><strong>Status:</strong> <span class="${data.statusClass}">${data.status}</span></p>
                            <p class="mb-2"><strong>Operator:</strong> ${data.operator}</p>
                            <p class="mb-2"><strong>Uptime:</strong> ${data.uptime}</p>
                            <p class="mb-2"><strong>Masalah:</strong> ${data.issue}</p>
                        </div>
                        <div>
                            <p class="mb-2"><strong>Maintenance Terakhir:</strong> ${data.lastMaintenance}</p>
                            <p class="mb-2"><strong>Maintenance Berikutnya:</strong> ${data.nextMaintenance}</p>
                            <p class="mb-2"><strong>Komponen:</strong></p>
                            <ul class="list-disc pl-5">
                                ${data.parts.map(part => `<li>${part}</li>`).join('')}
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4 class="font-bold mb-2">Grafik Performa</h4>
                        <canvas id="performanceChart" width="400" height="200"></canvas>
                    </div>
                `;
                
                // Tampilkan modal
                modal.classList.remove('hidden');
                
                // Buat grafik performa
                setTimeout(() => {
                    const ctx = document.getElementById('performanceChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                            datasets: [{
                                label: 'Efisiensi (%)',
                                data: [85, 88, 92, 90, 95, 93],
                                borderColor: 'rgb(75, 192, 192)',
                                tension: 0.1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: false,
                                    min: 80,
                                    max: 100
                                }
                            }
                        }
                    });
                }, 100);
            } else {
                modalContent.innerHTML = `<p class="text-red-500">Data untuk mesin ${machine} tidak ditemukan.</p>`;
                modal.classList.remove('hidden');
            }
        }
        
        // Fungsi untuk menutup modal
        function closeModal() {
            document.getElementById('machine-detail-modal').classList.add('hidden');
        }
        
        // Fungsi untuk menampilkan notifikasi
        function showNotification(message, type = 'info') {
            // Buat elemen notifikasi
            const notification = document.createElement('div');
            notification.className = `fixed bottom-4 right-4 p-4 rounded-lg shadow-lg z-50 ${type === 'success' ? 'bg-green-500' : 'bg-blue-500'} text-white`;
            notification.innerHTML = message;
            
            // Tambahkan ke body
            document.body.appendChild(notification);
            
            // Hapus setelah 3 detik
            setTimeout(() => {
                notification.classList.add('opacity-0', 'transition-opacity', 'duration-500');
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 500);
            }, 3000);
        }
    });
</script>

<!-- Styles -->
<style>
    .full-background {
        background: url('{{ asset("images/sugitybuilding.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh;
        overflow: auto;
        padding: 20px;
    }
    .header {
        background-color: rgba(255, 255, 255, 0.95);
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
        font-size: 40px;
        font-weight: bold;
        color: #006D77;
        flex-grow: 1;
        text-align: center;
    }
    .container-fluid {
        display: flex;
        align-items: flex-start;
        gap: 2rem;
    }
    .chapter-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 250px;
        background-color: rgba(248, 249, 250, 0.9);
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .chapter-box {
        background: linear-gradient(135deg, #45a049, #009688);
        color: white;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    .chapter-box:hover {
        transform: translateY(-5px);
    }
    .chapter-box h4 {
        margin-bottom: 15px;
        font-size: 18px;
        font-weight: bold;
    }
    .chapter-box ul {
        list-style-type: none;
        padding: 0;
    }
    .chapter-box ul li {
        background: rgba(255, 255, 255, 0.2);
        padding: 8px;
        margin-bottom: 8px;
        border-radius: 4px;
        transition: background 0.3s;
    }
    .chapter-box ul li:hover {
        background: rgba(255, 255, 255, 0.3);
    }
    .menu-item {
        cursor: pointer;
        padding: 5px;
        list-style: none;
        transition: all 0.3s;
        display: block;
        text-decoration: none;
        color: inherit;
    }
    .menu-item:hover, .menu-item.active {
        background-color: #007bff;
        color: white;
        border-radius: 5px;
    }
    .content-section {
        display: none;
        padding: 15px;
        border: 1px solid #ddd;
        background-color: #ffffff;
        margin-top: 10px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }
    .pulse-animation {
        animation: pulse 1.5s infinite;
    }
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(220, 38, 38, 0.7);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(220, 38, 38, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(220, 38, 38, 0);
        }
    }
    /* Responsif untuk layar kecil */
    @media (max-width: 768px) {
        .container-fluid {
            flex-direction: column;
        }
        .chapter-container {
            width: 100%;
            margin-bottom: 20px;
        }
        .grid-cols-2 {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection