@extends('layouts.template')
@section('content')
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .profile-card {
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 20px;
            text-align: center;
        }

        .profile-card img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        .profile-card h4 {
            margin-top: 15px;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .profile-card p {
            font-size: 1rem;
            margin-bottom: 10px;
            color: #666;
        }

        .profile-footer {
            font-size: 0.9rem;
            color: #666;
            margin-top: 20px;
            text-align: center;
        }

        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: white;
        }

        .tab-content {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="profile-header text-center">
                    Profil Pengguna
                </div>
                <div class="profile-card">
                    <!-- Gambar Foto Profil -->
                    <img src="https://via.placeholder.com/100" alt="Foto Profil">
                    <h4>admin ganti</h4>
                    <p>Username: adminnew</p>
                    <p>Password: ********</p>

                    <!-- Tabs untuk Edit Profil dan Ganti Password -->
                    <ul class="nav nav-tabs" id="profileTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit-profile" role="tab"
                                aria-controls="edit-profile" aria-selected="true">Edit Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="change-password-tab" data-toggle="tab" href="#change-password" role="tab"
                                aria-controls="change-password" aria-selected="false">Ganti Password</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="profileTabContent">
                        <!-- Form Edit Profil -->
                        <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                            <form id="form-edit-profile">
                                <div class="form-group text-left">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="adminnew">
                                </div>
                                <div class="form-group text-left">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="admin@example.com">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                            </form>
                        </div>

                        <!-- Form Ganti Password -->
                        <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                            <form id="form-change-password">
                                <div class="form-group text-left">
                                    <label for="current-password">Password Saat Ini</label>
                                    <input type="password" class="form-control" id="current-password" name="current_password" required>
                                </div>
                                <div class="form-group text-left">
                                    <label for="new-password">Password Baru</label>
                                    <input type="password" class="form-control" id="new-password" name="new_password" required>
                                </div>
                                <div class="form-group text-left">
                                    <label for="confirm-password">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control" id="confirm-password" name="confirm_password" required>
                                </div>
                                <button type="submit" class="btn btn-warning btn-block">Ganti Password</button>
                            </form>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Placeholder untuk handling form edit profil
        $('#form-edit-profile').on('submit', function (e) {
            e.preventDefault();
            alert('Profil berhasil diubah!');
        });

        // Placeholder untuk handling form ganti password
        $('#form-change-password').on('submit', function (e) {
            e.preventDefault();
            alert('Password berhasil diganti!');
        });
    </script>
@endsection