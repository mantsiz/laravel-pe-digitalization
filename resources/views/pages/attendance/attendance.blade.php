<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance - Production Control</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #1D3B34;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }
        .chart-container {
            width: 400px;
            height: 400px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #2D5C49;
            color: white;
        }
        .submit-button {
            background-color: #E67E22;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Attendance</h2>
        <div class="chart-container">
            <canvas id="attendanceChart"></canvas>
        </div>

        <h2>Plan Leave</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Tanggal Pengajuan</th>
                <th>NIK</th>
                <th>Nama Karyawan</th>
                <th>Jumlah Cuti</th>
                <th>Dari Tanggal</th>
                <th>Sampai Tanggal</th>
                <th>Reason</th>
            </tr>
            @foreach ($planLeave as $leave)
            <tr>
                <td>{{ $leave['no'] }}</td>
                <td>{{ $leave['tanggal_pengajuan'] }}</td>
                <td>{{ $leave['nik'] }}</td>
                <td>{{ $leave['nama'] }}</td>
                <td>{{ $leave['jumlah_cuti'] }}</td>
                <td>{{ $leave['dari_tanggal'] }}</td>
                <td>{{ $leave['sampai_tanggal'] }}</td>
                <td>{{ $leave['reason'] }}</td>
            </tr>
            @endforeach
        </table>

        <a href="#" class="submit-button">+ Submit Leave / Permit</a>
    </div>

    <script>
        const ctx = document.getElementById('attendanceChart').getContext('2d');
        const data = {
            labels: ["Hadir", "Sakit", "Izin", "Alpha"],
            datasets: [{
                data: [{{ $attendanceData['Hadir'] }}, {{ $attendanceData['Sakit'] }}, {{ $attendanceData['Izin'] }}, {{ $attendanceData['Alpha'] }}],
                backgroundColor: ['#3B82F6', '#F59E0B', '#9CA3AF', '#E11D48']
            }]
        };

        new Chart(ctx, {
            type: 'doughnut',
            data: data
        });
    </script>
</body>
</html>