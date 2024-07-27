<!DOCTYPE html>  
<html lang="id">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Data Buku</title>  
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
        
        <h3>Data Buku</h3>  
        <div class="mb-3">  
            <button class="btn btn-primary">Tambah Buku</button>  
            <button class="btn btn-success">Print</button>  
        </div>  

        <table class="table table-bordered">  
            <thead class="thead-light">  
                <tr>  
                    <th>No</th>  
                    <th>Judul Buku</th>  
                    <th>Kategori</th>  
                    <th>Penulis</th>  
                    <th>Penerbit</th>  
                    <th>Tahun</th>  
                    <th>Halaman</th>  
                </tr>  
            </thead>  
            <tbody>  
                <tr>  
                    <td>1</td>  
                    <td>Introduction to the Theory of Computation</td>  
                    <td>Pemrograman</td>  
                    <td>Michael Sipser</td>  
                    <td>Cengage Learning</td>  
                    <td>2006</td>  
                    <td>384</td>  
                </tr>  
                <tr>  
                    <td>2</td>  
                    <td>Clean Code: A Handbook of Agile Software</td>  
                    <td>Pemrograman</td>  
                    <td>Robert C. Martin</td>  
                    <td>Prentice Hall</td>  
                    <td>2008</td>  
                    <td>464</td>  
                </tr>  
                <tr>  
                    <td>3</td>  
                    <td>S Anak Singkong</td>  
                    <td>Cerita Anak</td>  
                    <td>Chaili Anwar</td>  
                    <td>Bentang Pustaka</td>  
                    <td>2017</td>  
                    <td>200</td>  
                </tr>  
                <tr>  
                    <td>4</td>  
                    <td>Si Kecil Lewat Tol</td>  
                    <td>Cerita Anak</td>  
                    <td>Donny Dhirgantoro</td>  
                    <td>Gagas Media</td>  
                    <td>2014</td>  
                    <td>150</td>  
                </tr>  
                <tr>  
                    <td>5</td>  
                    <td>Pohon-Pohon Tuhan</td>  
                    <td>Cerita Anak</td>  
                    <td>Mohammad</td>  
                    <td>Leutera</td>  
                    <td>2018</td>  
                    <td>300</td>  
                </tr>  
            </tbody>  
        </table>  
    </div>  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>  
</html>