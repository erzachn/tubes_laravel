<!DOCTYPE html>  
<html lang="id">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Sistem Perpustakaan</title>  
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
            <h2>Sistem Perpustakaan Universitas Mandan Koding</h2>  
            <p>Status: Admin</p>  
        </div>  
        
        <h3>Peminjaman</h3>  
        <div class="mb-3">  
            <button class="btn btn-primary">Tambah Peminjaman</button>  
        </div>  

        <table class="table table-bordered">  
            <thead class="thead-light">  
                <tr>  
                    <th>No</th>  
                    <th>Kode Peminjaman</th>  
                    <th>Tanggal</th>  
                    <th>No Kartu</th>  
                    <th>Nama Anggota</th>  
                    <th>Action</th>  
                </tr>  
            </thead>  
            <tbody>  
                <tr>  
                    <td>1</td>  
                    <td>PS1-1-180223</td>  
                    <td>19-02-2023</td>  
                    <td>23072623</td>  
                    <td>Nurul Saputri</td>  
                    <td>  
                        <button class="btn btn-info btn-sm">Detail</button>  
                        <button class="btn btn-danger btn-sm">Hapus</button>  
                    </td>  
                </tr>  
                <tr>  
                    <td>2</td>  
                    <td>PS1-2-180223</td>  
                    <td>16-02-2023</td>  
                    <td>23072624</td>  
                    <td>Firman</td>  
                    <td>  
                        <button class="btn btn-info btn-sm">Detail</button>  
                        <button class="btn btn-danger btn-sm">Hapus</button>  
                    </td>  
                </tr>  
                <tr>  
                    <td>3</td>  
                    <td>PS1-3-180223</td>  
                    <td>18-02-2023</td>  
                    <td>23072625</td>  
                    <td>Komar</td>  
                    <td>  
                        <button class="btn btn-info btn-sm">Detail</button>  
                        <button class="btn btn-danger btn-sm">Hapus</button>  
                    </td>  
                </tr>  
                <tr>  
                    <td>4</td>  
                    <td>PS1-4-180223</td>  
                    <td>20-02-2023</td>  
                    <td>23072626</td>  
                    <td>Safrin</td>  
                    <td>  
                        <button class="btn btn-info btn-sm">Detail</button>  
                        <button class="btn btn-danger btn-sm">Hapus</button>  
                    </td>  
                </tr>  
                <tr>  
                    <td>5</td>  
                    <td>PS1-5-180223</td>  
                    <td>22-02-2023</td>  
                    <td>23072627</td>  
                    <td>Fadias</td>  
                    <td>  
                        <button class="btn btn-info btn-sm">Detail</button>  
                        <button class="btn btn-danger btn-sm">Hapus</button>  
                    </td>  
                </tr>  
            </tbody>  
        </table>  
    </div>  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>  
</html>