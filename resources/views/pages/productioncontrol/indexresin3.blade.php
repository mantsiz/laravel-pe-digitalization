@extends('layouts.app')

@section('content')
<div class="full-background">
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <img src="{{ asset('images/sugitylogo.png') }}" alt="Company Logo" class="company-logo">
        <h1 class="kpi-title">Improvement Activity</h1>
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

        <!-- KPI Charts -->
        <div class="charts-container">
            <div class="chart-row">
                <div class="chart-box">
                    <h5>Efficiency Total</h5>
                    <canvas id="efficiencyTotalChart"></canvas>
                </div>
                <div class="chart-box">
                    <h5>Efficiency per-Tonase</h5>
                    <canvas id="efficiencyTonaseChart"></canvas>
                </div>
            </div>

            <!-- Tabel Improvement Activity -->
            <div class="improvement-activity">
                <button class="submit-button" onclick="openForm()">+ Submit Improvement</button>

                <table>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pengajuan</th>
                        <th>NIK</th>
                        <th>Nama Karyawan</th>
                        <th>Jumlah</th>
                        <th>Dari Tanggal</th>
                        <th>Sampai Tanggal</th>
                        <th>Reason</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($improvementActivities as $activity)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $activity->tanggal_pengajuan }}</td>
                        <td>{{ $activity->nik }}</td>
                        <td>{{ $activity->nama_karyawan }}</td>
                        <td>{{ $activity->jumlah }}</td>
                        <td>{{ $activity->dari_tanggal }}</td>
                        <td>{{ $activity->sampai_tanggal }}</td>
                        <td>{{ $activity->reason }}</td>
                        <td>
                            <button onclick="editImprovement({{ $activity->id }})">Edit</button>
                            <form action="{{ route('productionresin3.destroy', $activity->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

                <div class="pagination">
                    {{ $improvementActivities->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js for Graphs -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function openForm() {
        Swal.fire({
            title: 'Submit Improvement',
            width: '600px',
            padding: '30px',
            html: `
                <form id="improvementForm">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" id="nik" name="nik" class="swal-input" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_karyawan">Nama Karyawan</label>
                        <input type="text" id="nama_karyawan" name="nama_karyawan" class="swal-input" required>
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" id="jumlah" name="jumlah" class="swal-input" required>
                    </div>

                    <div class="form-group">
                        <label for="dari_tanggal">Dari Tanggal</label>
                        <input type="date" id="dari_tanggal" name="dari_tanggal" class="swal-input" required>
                    </div>

                    <div class="form-group">
                        <label for="sampai_tanggal">Sampai Tanggal</label>
                        <input type="date" id="sampai_tanggal" name="sampai_tanggal" class="swal-input" required>
                    </div>

                    <div class="form-group">
                        <label for="reason">Reason</label>
                        <textarea id="reason" name="reason" class="swal-input" required></textarea>
                    </div>

                    <button type="button" id="submitImprovementBtn" class="swal2-confirm swal2-styled">Submit</button>
                </form>
            `,
            showConfirmButton: false,
            didOpen: () => {
                const submitBtn = document.getElementById("submitImprovementBtn");
                if (submitBtn) {
                    submitBtn.addEventListener("click", function () {
                        submitImprovement(); // panggil fungsi untuk proses simpan & tambah baris
                        Swal.close(); // tutup popup setelah submit
                    });
                } else {
                    console.error("Tombol Submit tidak ditemukan dalam popup!");
                }
            }
        });
    }
    
    // Fungsi untuk mengirim data ke Laravel
    function submitImprovement() {
        let formData = new FormData();
        formData.append("_token", "{{ csrf_token() }}");
        formData.append("nik", document.querySelector("input[name='nik']").value);
        formData.append("nama_karyawan", document.querySelector("input[name='nama_karyawan']").value);
        formData.append("jumlah", document.querySelector("input[name='jumlah']").value);
        formData.append("dari_tanggal", document.querySelector("input[name='dari_tanggal']").value);
        formData.append("sampai_tanggal", document.querySelector("input[name='sampai_tanggal']").value);
        formData.append("reason", document.querySelector("textarea[name='reason']").value);

        fetch("{{ route('productionresin3.store') }}", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            Swal.fire("Berhasil!", "Improvement berhasil disimpan!", "success");

            // Menambahkan data ke tabel tanpa reload
            const table = document.getElementById("improvementTable").getElementsByTagName("tbody")[0];

            // Buat baris baru
            const newRow = table.insertRow();

            // Isi kolom-kolomnya (sesuaikan urutan dengan tabel HTML kamu)
            newRow.innerHTML = `
                <td>${data.nik}</td>
                <td>${data.nama_karyawan}</td>
                <td>${data.jumlah}</td>
                <td>${data.dari_tanggal}</td>
                <td>${data.sampai_tanggal}</td>
                <td>${data.reason}</td>
                <td>
                    <button onclick="editImprovement(${data.id})">Edit</button>
                    <button onclick="deleteImprovement(${data.id})">Hapus</button>
                </td>
            `;

            // Tutup popup SweetAlert
            Swal.close();
        })
        .catch(error => {
            console.error("Error:", error);
            Swal.fire("Error!", "Terjadi kesalahan, coba lagi.", "error");
        });
    }

    function editImprovement(id) {
        fetch(`/improvement-activity/${id}/edit`)
            .then(response => response.json())
            .then(data => {
                Swal.fire({
                    title: 'Edit Improvement',
                    width: '600px',
                    padding: '30px',
                    html: `
                        <form id="editForm">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="text" name="nik" class="swal-input" value="${data.nik}" required>
                            <input type="text" name="nama_karyawan" class="swal-input" value="${data.nama_karyawan.replace(/"/g, '&quot;')}" required>
                            <input type="number" name="jumlah" class="swal-input" value="${data.jumlah}" required>
                            <input type="date" name="dari_tanggal" class="swal-input" value="${data.dari_tanggal}" required>
                            <input type="date" name="sampai_tanggal" class="swal-input" value="${data.sampai_tanggal}" required>
                            <textarea name="reason" class="swal-input">${data.reason.replace(/"/g, '&quot;')}</textarea>
                            <button type="button" class="swal2-confirm swal2-styled" onclick="updateImprovement(${id})">Update</button>
                        </form>
                    `,
                    showConfirmButton: false,
                });
            });
    }

    function updateImprovement(id) {
        let formData = new FormData(document.getElementById("editForm"));

        fetch(`/productionresin3/${id}`, {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            Swal.fire("Berhasil!", "Data berhasil diperbarui!", "success").then(() => {
                location.reload();
            });
        })
        .catch(error => {
            console.error("Error:", error);
            Swal.fire("Error!", "Terjadi kesalahan saat mengupdate data.", "error");
        });
    }

    function deleteImprovement(id) {
        Swal.fire({
            title: 'Hapus data?',
            text: "Data tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/productionresin3/${id}`, {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    Swal.fire("Dihapus!", "Data berhasil dihapus.", "success").then(() => {
                        location.reload();
                    });
                })
                .catch(error => {
                    console.error("Error:", error);
                    Swal.fire("Error!", "Gagal menghapus data.", "error");
                });
            }
        });
    }
    var ctx1 = document.getElementById('efficiencyTotalChart').getContext('2d');
    new Chart(ctx1, { type: 'line', data: { labels: Array.from({length: 31}, (_, i) => i + 1), datasets: [{ label: 'Efficiency (%)', data: Array.from({length: 31}, () => Math.floor(Math.random() * 100)), borderColor: 'blue', fill: false }]}, options: { responsive: true } });

    var ctx2 = document.getElementById('efficiencyTonaseChart').getContext('2d');
    new Chart(ctx2, { type: 'line', data: { labels: ['3500T', '2500T', '1600T', '1300T', '650T', '350T'], datasets: [{ label: 'Efficiency (%)', data: [90, 80, 70, 60, 50, 40], borderColor: 'green', fill: false }]}, options: { responsive: true } });

    document.addEventListener('DOMContentLoaded', function() {
    // Memastikan DOM sudah sepenuhnya ter-load sebelum menjalankan script
        const menuItems = document.querySelectorAll('.menu-item');
        if (menuItems.length > 0) {
            menuItems.forEach(item => {
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
                    menuItems.forEach(menu => {
                    menu.classList.remove('active');
                    });

                    // Tambahkan class 'active' ke menu yang diklik
                    this.classList.add('active');
                });
            });
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
    });

    document.getElementById('improvementForm').addEventListener('submit', function(e) {
    e.preventDefault();
    this.submit();
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
    .container {
        width: 90%;
        margin: auto;
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
    .content {
        display: flex;
        gap: 20px;
        align-items: start;
    }
    .chart-container, .plan-leave {
        background: white;
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
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
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: white;
    }
    th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }
    th {
        background-color: green;
        color: white;
    }
    td {
        padding: 12px 10px; /* Menambah padding atas dan bawah */
    }
    /* Memberikan jarak antar label dan input dalam form Swal */
    .form-group label {
        display: block;
        margin-bottom: 5px; /* Menambah jarak antara label dan input */
        font-weight: bold;
    }
    .form-group input,
    .form-group textarea {
        margin-top: 5px; /* Menambah sedikit jarak antar elemen form */
    }
    .submit-button {
        background-color: #E67E22;
        color: white;
        padding: 10px;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
        margin-top: 10px;
        cursor: pointer;
    }
    .swal-input {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }
    .swal-textarea {
        width: 100%;
        height: 120px; /* Lebih besar dari default */
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        resize: none;
    }
    .swal-button {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }
    .swal-button:hover {
        background-color: #45a049;
    }
    .swal-popup-custom {
        border-radius: 10px;
        padding: 20px;
    }   
    .custom-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        border-radius: 10px;
        overflow: hidden;
        background-color: white;
    }
    .custom-table th {
        background-color: #2E4F35;
        color: white;
        text-align: center;
        padding: 10px;
    }
    .custom-table td {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }
    .custom-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .custom-table tr:hover {
        background-color: #ddd;
    }
    .btn-submit {
        background-color: #D18642;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 5px;
        font-weight: bold;
    }
    .btn-submit:hover {
        background-color: #b06a37;
    }
</style>
@endsection