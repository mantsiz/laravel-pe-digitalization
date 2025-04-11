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
                <li><a href="{{ url('/productionresin2') }}" class="menu-item">Process Control</a></li>
                <li><a href="{{ url('/productionresin3') }}" class="menu-item">Improve</a></li>
            </ul>
        </div>
        <div class="chapter-box">
            <h4>Painting</h4>
            <ul>
                <li><a href="{{ url('/productionpainting') }}" class="menu-item">OK Ratio</a></li>
                <li><a href="{{ url('/productionpainting2') }}" class="menu-item">TE (%)</a></li>
                <li class="menu-item" data-section="painting-te">Gentan-l</li>
            </ul>
        </div>
        <div class="chapter-box">
            <h4>S/A</h4>
            <ul>
                <li class="menu-item" data-section="sa-efficiency">Efficiency</li>
                <li class="menu-item" data-section="sa-ok">OK Ratio</li>
            </ul>
        </div>
    </div>
    
    <!-- F Machine Chapter -->
    <div class="flex-grow">
    <!-- Machine Sections Container -->
    <div class="grid grid-cols-2 gap-6 px-8">
    <!-- F2 Section -->
    <div class="flex items-start gap-4">
        <div class="w-full px-10 mx-auto mb-16">
            <div class="w-full border-2 border-gray-400 rounded-xl p-6 bg-gray-100 shadow-xl">
                <h2 class="text-lg font-bold mb-2 text-center text-black p-2 rounded-lg">F2</h2>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-red-500"></div> <span>MC #8 2500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #7 2500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #6 2500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #5 3500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #4 2500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #3 3500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #2 3500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #1 2500T</span>
                    </div>
                </div>
            </div>
            <div class="mt-6 px-4">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Update Data
                </button>
            </div>
        </div>
    </div>
    <!-- F3 Section -->
    <div class="flex items-start gap-4">
        <div class="w-full px-10 mx-auto mb-16">
            <div class="w-full border-2 border-gray-400 rounded-xl p-6 bg-gray-100 shadow-xl">
                <h2 class="text-lg font-bold mb-2 text-center text-black p-2 rounded-lg">F3</h2>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #5 2500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #4 1050T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #3 1300T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #2 1300T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #1 1300T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #6 1600T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #7 2500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #8 2500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #9 1600T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #10 1600T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #10 650T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #13 650T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #14 650T</span>
                    </div>
                </div>
            </div>
            <div class="mt-6 px-4">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Update Data
                </button>
            </div>
        </div>
    </div>
    <!-- F4 Section -->
    <div class="flex items-start gap-4">
        <div class="w-full px-10 mx-auto mb-16">
            <div class="w-full border-2 border-gray-400 rounded-xl p-6 bg-gray-100 shadow-xl">
                <h2 class="text-lg font-bold mb-2 text-center text-black p-2 rounded-lg">F4</h2>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #1 350T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #8 350T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #B3 3500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #B2 3500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-gray-500 border border-gray-700"></div> <span>MC #B1 3500T</span>
                    </div>
                </div>
            </div>
            <div class="mt-6 px-4">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Update Data
                </button>
            </div>
        </div>
    </div>
    <!-- Plant-2 Krw Section -->
    <div class="flex items-start gap-4">
        <div class="w-full px-10 mx-auto mb-16">
            <div class="w-full border-2 border-gray-400 rounded-xl p-6 bg-gray-100 shadow-xl">
                <h2 class="text-lg font-bold mb-2 text-center text-black p-2 rounded-lg">Plant-2 Krw</h2>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #5 2500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #4 2500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #3 2500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #2 2500T</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-5 h-5 rounded-full bg-green-500"></div> <span>MC #1 2500T</span>
                    </div>
                </div>
            </div>
            <div class="mt-6 px-4">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Update Data
                </button>
            </div>
        </div>     
    </div>
                                                            
    <div class="mt-12 flex justify-center">
        <div class="w-3/4 bg-white p-4 shadow-md rounded-lg">
            <h2 class="text-lg font-bold mb-2 text-center">Abnormality Report</h2>
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border p-2">No</th>
                        <th class="border p-2">MC No.</th>
                        <th class="border p-2">Part Name</th>
                        <th class="border p-2">Abnormal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-2 text-center">1</td>
                        <td class="border p-2 text-center">MC-101</td>
                        <td class="border p-2 text-center">Part A</td>
                        <td class="border p-2 text-center text-red-500">Overheating</td>
                    </tr>
                    <tr>
                        <td class="border p-2 text-center">2</td>
                        <td class="border p-2 text-center">MC-202</td>
                        <td class="border p-2 text-center">Part B</td>
                        <td class="border p-2 text-center text-yellow-500">Vibration Issue</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

    </div>
    <div class="row">
</div>

<!-- Chart.js for Graphs -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener('click', function() {
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
    });

    document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener('click', function() {
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
        });
    });
});
</script>

<!-- Styles -->
<style>
    .full-background {
        background: url('{{ asset("images/sugitybuilding.jpg") }}') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        overflow: auto;
        padding: 20px;
    }

    .header {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding: 10px;
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
        gap: 2rem; /* Adds 2rem (32px) space between sidebar and content */
        box-align: center;
    }

    .chapter-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 250px;
    }

    .chapter-container {
        width: 250px;
        background-color: #f8f9fa;
        padding: 15px;
        border-right: 1px solid #ddd;
    }

    .charts-container {
        flex-grow: 1;
        padding-left: 30px;
    }
    
    .chapter-box {
        background: green;
        color: white;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
    }

    .chapter-box h4 {
        margin-bottom: 10px;
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

    .charts-container {
        flex-grow: 1;
        padding-left: 30px;
    }

    .chart-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .menu-item {
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

    /* Styling untuk konten */
    .content-container {
        flex-grow: 1;
        padding: 20px;
    }

    .content-section {
        display: none;
        padding: 15px;
        border: 1px solid #ddd;
        background-color: #ffffff;
        margin-top: 10px;
    }

    .menu-item.active {
        font-weight: bold;
        color: white;
        background-color: #007bff;
        padding: 5px;
        border-radius: 5px;
    }

    .container {
        display: flex;
        flex-direction: column; /* Susun elemen ke bawah */
        gap: 20px; /* Beri jarak antar elemen */
    }

    .features {
        display: flex;
        gap: 10px; /* Beri jarak antar F2, F3, F4 */
    }

    .feature-box {
        flex: 1; /* Agar F2, F3, F4 punya lebar yang sama */
        padding: 10px;
        border: 1px solid #ccc;
        text-align: center;
    }

    .abnormal-table {
        width: 100%;
        border-collapse: collapse;
    }

    .abnormal-table th, .abnormal-table td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    
</style>
@endsection