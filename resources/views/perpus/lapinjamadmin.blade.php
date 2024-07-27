<!DOCTYPE html>  
<html lang="id">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Laporan Pinjaman</title>  
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">  
    <style>  
        body {  
            background-color: #f8f9fa;  
        }  
        .header {  
            background-color: #007bff;  
            color: white;  
            padding: 10px;  
        }  
    </style>  
</head>  
<body>  
    <div class="container mt-5">  
        <div class="header mb-4">  
            <h2>Sistem Manajemen Perpustakaan Universitas Mandan Koding</h2>  
            <p>Status: Admin</p>  
        </div>  
        
        <h3>Laporan Pinjaman</h3>  
        <div class="mb-3">  
            <label for="tglAwal">Tgl pinjam awal:</label>  
            <input type="date" id="tglAwal" class="form-control d-inline w-25" />  
            <label for="tglAkhir" class="ml-2">Tgl pinjam akhir:</label>  
            <input type="date" id="tglAkhir" class="form-control d-inline w-25" />  
            <button class="btn btn-primary ml-2">Filter</button>  
            <button class="btn btn-success ml-2">Print</button>  
        </div>  

        <table class="table table-bordered">  
            <thead class="thead-light">  
                <tr>  
                    <th>No</th>  
                    <th>Nama</th>  
                    <th>Anggota</th>  
                    <th>Judul Buku</th>  
                    <th>Tgl Pinjam</th>  
                    <th>Tgl Kembali</th>  
                    <th>Status</th>  
                </tr>  
            </thead>  
            <tbody>  
                <tr>  
                    <td>1</td>  
                    <td>Nazul</td>  
                    <td>12345</td>  
                    <td>Clean Code: A Handbook of Agile Software</td>  
                    <td>10-10-2023</td>  
                    <td>17-10-2023</td>  
                    <td>Pinjaman</td>  
                </tr>  
                <tr>  
                    <td>2</td>  
                    <td>Fitria</td>  
                    <td>12346</td>  
                    <td>Introduction to Algorithms</td>  
                    <td>12-10-2023</td>  
                    <td>19-10-2023</td>  
                    <td>Pinjaman</td>  
                </tr>  
                <tr>  
                    <td>3</td>  
                    <td>Rina</td>  
                    <td>12347</td>  
                    <td>The Theory of Computation</td>  
                    <td>15-10-2023</td>  
                    <td>22-10-2023</td>  
                    <td>Pinjaman</td>  
                </tr>  
            </tbody>  
        </table>  
    </div>  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>  
</html>