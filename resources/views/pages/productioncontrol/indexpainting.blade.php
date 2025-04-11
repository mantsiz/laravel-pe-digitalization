@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">OK Ratio Painting</h1>
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

        <!-- OK Ratio Painting Charts -->
        <div class="charts-container">
            <div class="chart-row">
                <div class="chart-box">
                    <h5>OK Ratio Main Booth F4</h5>
                    <canvas id="efficiencyTotalChart"></canvas>
                </div>
                <div class="chart-box">
                    <h5>OK Ratio Small Booth F3</h5>
                    <canvas id="efficiencyTonaseChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
</div>

<!-- Chart.js for Graphs -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx1 = document.getElementById('efficiencyTotalChart').getContext('2d');
    new Chart(ctx1, { type: 'line', data: { labels: Array.from({length: 31}, (_, i) => i + 1), datasets: [{ label: 'Efficiency (%)', data: Array.from({length: 31}, () => Math.floor(Math.random() * 100)), borderColor: 'blue', fill: false }]}, options: { responsive: true } });

    var ctx2 = document.getElementById('efficiencyTonaseChart').getContext('2d');
    new Chart(ctx2, { type: 'line', data: { labels: ['3500T', '2500T', '1600T', '1300T', '650T', '350T'], datasets: [{ label: 'Efficiency (%)', data: [90, 80, 70, 60, 50, 40], borderColor: 'green', fill: false }]}, options: { responsive: true } });

    var ctxLossMaterial = document.getElementById('lossMaterialChart').getContext('2d');
    new Chart(ctxLossMaterial, {
        type: 'line',
        data: {
            labels: Array.from({length: 31}, (_, i) => i + 1), // Label tanggal 1-31
            datasets: [{
                label: 'Loss Material (%)',
                data: Array.from({length: 31}, () => Math.floor(Math.random() * 15)), 
                borderColor: 'purple',
                fill: false
            }]
        },
        options: { responsive: true }
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

    .chart-box {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        width: 48%;
    }

    .chart-box h5 {
        color: black; 
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
    
</style>
@endsection