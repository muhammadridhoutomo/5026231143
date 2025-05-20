<html>
    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <style>     
        .sidebar {
            width: 250px;
            background: #007bff;
            min-height: 100vh;
            padding: 20px;
            transition: all 0.3s ease;
            float: left;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s ease;
        }

        #toggle {
            display: none;
        }

        .toggle-label {
            font-size: 1.5rem;
            background: #007bff;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-right: 15px;
        }

        #toggle:checked ~ .sidebar {
            margin-left: -250px;
        }

        #toggle:checked ~ .main-content {
            margin-left: 0;
        }

        .nav-link:hover {
            background-color: #0d3b66;
            transition: 0.3s;
            border-radius: 8px;
        }
        .header-toggle {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <input type="checkbox" id="toggle">
    <div class="sidebar text-white">
        <div class="d-flex align-items-center mb-4 mt-3">
            <img src="image/mario1.jpg" class="rounded-circle img-fluid ml-3 mr-2" style="width: 50px" alt="User">
            <div>
                <h6 class="text-white mb-1">User</h6>
                <p class="mb-0 small text-white">user@mail.com</p>
            </div>
        </div>
        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Helperlog</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Helperfind</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Helperassist</a>
            </li>
        </ul>
        <a href="#" class="btn btn-light mt-auto d-flex align-items-center justify-content-center" style="margin-top: auto;">
            <img src="image/logouticon.png" alt="Logout" style="width: 16px; height: 16px;" class="mr-3">
            Log Out
        </a>
    </div>

    <div class="main-content">
        <div class="header-toggle">
            <label for="toggle" class="toggle-label">&#9776;</label>
            <h4 class="mb-0 font-weight-bold">Helperlog Dashboard</h4>
        </div>

        <div class="card mb-3 shadow-sm p-3" style="border-radius: 10px;">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="image/image-4.png" class="rounded-circle mr-3" style="width: 80px" alt="Intan Permata">
                    <div>
                        <h6 class="mb-0 font-weight-bold">Intan Permata</h6>
                        <small class="text-muted">Baby Sitter</small><br>
                        <small class="text-muted">Masa Kontrak: 12 bulan</small>
                    </div>
                </div>
                <div class="text-right">
                    <div>
                        <span class="text-muted" style="font-size: 1.8rem;">&#9734;</span>
                        <span class="text-muted" style="font-size: 1.8rem;">&#9734;</span>
                        <span class="text-muted" style="font-size: 1.8rem;">&#9734;</span>
                        <span class="text-muted" style="font-size: 1.8rem;">&#9734;</span>
                        <span class="text-muted" style="font-size: 1.8rem;">&#9734;</span>
                    </div>
                    <small class="text-muted">Beri Penilaian untuk Intan 🤗</small>
                </div>                            
            </div>
        </div>

        <div class="card mb-3 shadow-sm p-3"style="border-radius: 10px;">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="image/Frame 40792-1.png" class="mr-3" style="width: 80px" alt="Budi Dorami">
                    <div>
                        <h6 class="mb-0 font-weight-bold">Budi Dorami</h6>
                        <small class="text-muted">Satpam</small><br>
                        <small class="text-muted">Masa Kontrak: 6 bulan</small>
                    </div>
                </div>
                <div class="text-right">
                    <div class="d-flex align-items-center justify-content-end">
                        <strong class="mr-2 text-primary" style="font-size: 1.3rem;">4.3</strong>
                        <span class="text-warning mr-1" style="font-size: 1.8rem;">&#9733;</span>
                        <span class="text-warning mr-1" style="font-size: 1.8rem;">&#9733;</span>
                        <span class="text-warning mr-1" style="font-size: 1.8rem;">&#9733;</span>
                        <span class="text-warning mr-1" style="font-size: 1.8rem;">&#9733;</span>
                        <span class="text-muted" style="font-size: 1.8rem;">&#9734;</span>
                    </div>
                    <small class="text-muted">Sudah diberi Penilaian 👍🏻</small>
                </div>                            
            </div>
        </div>
    </div>
</body>
</html>