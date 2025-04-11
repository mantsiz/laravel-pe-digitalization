<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance - Production Control</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('/images/sugitybuilding.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #1D3B34;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            width: 150px;
            height: auto;
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #2D5C49;
            color: white;
            padding: 15px 10px; /* Menambah padding atas dan bawah */
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
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Attendance</h2>
            <img src="/images/sugitylogo.png" alt="Company Logo" class="logo">
        </div>

        <div class="content">
            <div class="chart-container">
                <canvas id="attendanceChart"></canvas>
            </div>
            <div class="org-structure">
                <img src="/images/strukturPE.jpg" alt="Struktur Organisasi" width="100%">
            </div>
        </div>

        <div class="plan-leave">
            <h2>Leave Plan</h2>
            <button class="submit-button" onclick="openForm()">+ Submit Leave / Permit</button>
            
            <table>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Karyawan</th>
                    <th>Jumlah Cuti</th>
                    <th>Dari Tanggal</th>
                    <th>Sampai Tanggal</th>
                    <th>Alasan</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($planLeaves as $leave)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $leave->nik }}</td>
                    <td>{{ $leave->employee_name }}</td>
                    <td>{{ $leave->jumlah_cuti }}</td>
                    <td>{{ $leave->dari_tanggal }}</td>
                    <td>{{ $leave->sampai_tanggal }}</td>
                    <td>{{ $leave->reason }}</td>
                    <td>
                        <button onclick="editLeave({{ $leave->id }})">Edit</button>
                        <button onclick="deleteLeave({{ $leave->id }})">Delete</button>
                    </td>
                </tr>
                @endforeach
            </table>

            <div class="pagination">
                {{ $planLeaves->links() }}
            </div>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('attendanceChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Hadir", "Sakit", "Izin", "Alpha"],
                datasets: [{
                    data: [{{ $attendanceData['Hadir'] }}, {{ $attendanceData['Sakit'] }}, {{ $attendanceData['Izin'] }}, {{ $attendanceData['Alpha'] }}],
                    backgroundColor: ['#3B82F6', '#F59E0B', '#9CA3AF', '#E11D48']
                }]
            }
        });

        function openForm() {
            Swal.fire({
                title: 'Submit Leave',
                width: '600px',
                padding: '30px',
                html: `
                    <form id="leaveForm" method="POST" action="{{ route('attendance.store') }}" style="width: 100%;">
                        @csrf
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="swal-input" placeholder="Nomor Induk Karyawan" required>
                        </div>

                        <div class="form-group">
                            <label for="employee_name">Nama Karyawan</label>
                            <input type="text" name="employee_name" class="swal-input" placeholder="Nama Lengkap" required>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_cuti">Jumlah Cuti</label>
                            <input type="number" name="jumlah_cuti" class="swal-input" placeholder="Jumlah Hari" required>
                        </div>

                        <div class="form-group">
                            <label for="dari_tanggal">Dari Tanggal</label>
                            <input type="date" name="dari_tanggal" class="swal-input" required>
                        </div>

                        <div class="form-group">
                            <label for="sampai_tanggal">Sampai Tanggal</label>
                            <input type="date" name="sampai_tanggal" class="swal-input" required>
                        </div>

                        <div class="form-group">
                            <label for="reason">Alasan</label>
                            <textarea name="reason" class="swal-textarea" placeholder="Jelaskan secara detail alasan cuti..." required></textarea>
                        </div>

                        <button type="submit" class="swal-button">Submit</button>
                    </form>
                `,
                showConfirmButton: false,
                customClass: {
                    popup: 'swal-popup-custom'
                }
            });
        }

        function editLeave(id) {
            $.ajax({
                url: `/attendance/${id}/edit`,
                type: 'GET',
                success: function(response) {
                    Swal.fire({
                        title: 'Edit Leave',
                        width: '600px',
                        padding: '30px',
                        html: `
                            <form id="editLeaveForm" method="POST" action="/attendance/${id}" style="width: 100%;">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" name="nik" class="swal-input" value="${response.nik}" required>
                                </div>

                                <div class="form-group">
                                    <label for="employee_name">Nama Karyawan</label>
                                    <input type="text" name="employee_name" class="swal-input" value="${response.employee_name}" required>
                                </div>

                                <div class="form-group">
                                    <label for="jumlah_cuti">Jumlah Cuti</label>
                                    <input type="number" name="jumlah_cuti" class="swal-input" value="${response.jumlah_cuti}" required>
                                </div>

                                <div class="form-group">
                                    <label for="dari_tanggal">Dari Tanggal</label>
                                    <input type="date" name="dari_tanggal" class="swal-input" value="${response.dari_tanggal}" required>
                                </div>

                                <div class="form-group">
                                    <label for="sampai_tanggal">Sampai Tanggal</label>
                                    <input type="date" name="sampai_tanggal" class="swal-input" value="${response.sampai_tanggal}" required>
                                </div>

                                <div class="form-group">
                                    <label for="reason">Alasan</label>
                                    <textarea name="reason" class="swal-textarea" required>${response.reason}</textarea>
                                </div>

                                <button type="submit" class="swal-button">Update</button>
                            </form>
                        `,
                        showConfirmButton: false,
                        customClass: {
                            popup: 'swal-popup-custom'
                        }
                    });

                    // Menangani submit form edit
                    $(document).on("submit", "#editLeaveForm", function(e) {
                        e.preventDefault();
                        $.ajax({
                            url: `/attendance/${id}`,
                            type: 'PUT',
                            data: $(this).serialize(),
                            success: function() {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: 'Data telah diperbarui',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    location.reload();
                                });
                            }
                        });
                    });
                }
            });
        }

        function deleteLeave(id) {
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
                    $.ajax({
                        url: `/attendance/${id}`,
                        type: 'DELETE',
                        data: { _token: '{{ csrf_token() }}' },
                        success: function(response) {
                            location.reload();
                        }
                    });
                }
            });
        }
    </script>
</body>
</html>