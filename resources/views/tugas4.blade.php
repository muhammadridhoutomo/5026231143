<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar Bootstrap</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
   .custom-table {
        border-radius: 15px;
        overflow: hidden;
        border: 1px solid black;

    }
    .custom-table th {
        background-color: #1E4976;
        color: white;
        text-align: center;
    }
    .custom-table td {
        vertical-align: middle;
        border: 1px solid #dcdcdc;
    }
    .badge-accepted {
        background-color: #E8FFF4;
        color: #50C878;
        border: 1px solid #50C878;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
    }
    .btn-detail {
        background-color: #2f00ff;
        color: white;
        border: 1px solid #2f00ff;
        padding: 5px 10px;
        border-radius: 5px;
    }

</style>
<body>
<!-- Sidebar -->
<input type="checkbox" id="toggleSidebarCheckbox" class="toggle-checkbox">
<div id="sidebar" class="sidebar">
    <div>
        <label for="toggleSidebarCheckbox" class="btn toggle-btn close-btn">
            <i class="fa fa-angle-double-left" style="color: white;"></i>
        </label>
        <div class="logo">
            <img src="image/mario2.jpg" class="profile-img">
            <div class="profile-info">
                <span class="profile-text">Admin</span>
                <span class="profile-email">admin@mail.com</span> <!-- Tambah Email -->
            </div>
        </div>
        <a href="#"><i class="fa fa-home"></i> Helperlog</a>
        <a href="#"class="active"><i class="fa-solid fa-magnifying-glass"></i> Helperfind</a>
    </div>
    <a href="#" class="text-white, active" style="align-self: center; margin-bottom: 160px;"><i class="fa fa-sign-out-alt"></i> Logout</a>
</div>
<!-- Buka Sidebar -->
<label for="toggleSidebarCheckbox" class="btn toggle-btn open-btn">
    <i class="fa fa-bars"></i> <!-- Iconnya -->
</label>

<div class="content">
    <h2><b>Helperlog Dashboard</b></h2>
    <br>
    <h5>Statistik Anda</h5>
    <br>
    <div class="row">
    <div class="col-md-3">
        <div class="card bg-white shadow rounded-4">
            <div class="text-left fw-bold p-3" style="color: grey;">Total Pendaftar</div>
            <div class="logo ps-3">
                <img src="image/iconpng.png" alt="Image" class="rounded-circle img-logo" style="max-width: 20%; height: auto; margin-bottom: 20px; margin-right: 10px;">
                <span class="fs-1 fw-bold" style="color: #1010f3;;">105</span>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-white shadow rounded-4">
            <div class="text-left fw-bold p-3" style="color: grey;">Perlu Review </div>
            <div class="logo ps-3">
                <img src="image/iconpetir.png" alt="Image" class="rounded-circle img-logo" style="max-width: 20%; height: auto; margin-bottom: 20px; margin-right: 10px;">
                <span class="fs-1 fw-bold" style="color: #bb46ff;;">49</span>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow rounded-4" style="background-color: #e4effc;">
            <div class="text-left fw-bold p-3" style="color: grey;">Diterima </div>
            <div class="logo ps-3">
                <img src="image/iconcek.png" alt="Image" class="rounded-circle img-logo" style="max-width: 20%; height: auto; margin-bottom: 20px; margin-right: 10px;">
                <span class="fs-1 fw-bold" style="color: #06ab3a;;">11</span>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow rounded-4">
            <div class="text-left fw-bold p-3" style="color: grey;">Ditolak </div>
            <div class="logo ps-3">
                <img src="image/iconreject.png" alt="Image" class="rounded-circle img-logo" style="max-width: 20%; height: auto; margin-bottom: 20px; margin-right: 10px;">
                <span class="fs-1 fw-bold" style="color: #ab1706;;">3</span>
            </div>
        </div>
    </div>
</div>
    <br>
    <h5>History Kontrak</h5>
    <div class="container mt-4">
        <div class="table-responsive">
            <table class="table custom-table">
                <thead>
                    <tr class>
                        <th>No.</th>
                        <th>Nama Pengaju</th>
                        <th>PRT Dibutuhkan</th>
                        <th>Durasi Kontrak</th>
                        <th>Asal Kota</th>
                        <th>Status</th>
                        <th>Total Pembayaran</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">Adhitya Pratama</td>
                        <td class="text-center">Sopir Pribadi</td>
                        <td class="text-center">12 Bulan</td>
                        <td class="text-center">Surabaya</td>
                        <td class="text-center"><span class="badge-accepted">Diterima</span></td>
                        <td class="text-center">Rp 5.500.000</td>
                        <td class="text-center"><button class="btn-detail">Selengkapnya</button></td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">Adhitya Pratama</td>
                        <td class="text-center">Sopir Pribadi</td>
                        <td class="text-center">12 Bulan</td>
                        <td class="text-center">Surabaya</td>
                        <td class="text-center"><span class="badge-accepted">Diterima</span></td>
                        <td class="text-center">Rp 5.500.000</td>
                        <td class="text-center"><button class="btn-detail">Selengkapnya</button></td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">Adhitya Pratama</td>
                        <td class="text-center">Sopir Pribadi</td>
                        <td class="text-center">12 Bulan</td>
                        <td class="text-center">Surabaya</td>
                        <td class="text-center"><span class="badge-accepted">Diterima</span></td>
                        <td class="text-center">Rp 5.500.000</td>
                        <td class="text-center"><button class="btn-detail">Selengkapnya</button></td>
                    </tr>
                    <tr>
                        <td class="text-center">1</td>
                        <td class="text-center">Adhitya Pratama</td>
                        <td class="text-center">Sopir Pribadi</td>
                        <td class="text-center">12 Bulan</td>
                        <td class="text-center">Surabaya</td>
                        <td class="text-center"><span class="badge-accepted">Diterima</span></td>
                        <td class="text-center">Rp 5.500.000</td>
                        <td class="text-center"><button class="btn-detail">Selengkapnya</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

            <br/>
        </div>
</body>
</html>
