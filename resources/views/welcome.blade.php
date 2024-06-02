<?php 

\Carbon\Carbon::setLocale('id')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{url("/css/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{url("/css/style.css")}}>
    {{-- <link rel="stylesheet" href={{url("/css/select2.css")}}> --}}
    

    <script src={{url("/js/bootstrap.bundle.min.js")}}></script>
    {{-- <script src={{url("/js/select2.min.min.js")}}></script>
     --}}
    
    <title>Document</title>
</head>
<body>
    <header>
        {{-- Toggle Menu --}}
        <div id="logo">
            <img src="/assets/img/logo.png"/>
        </div>
        <div id="toggle-sidebar">
            <img src="/assets/icons/list.svg"/>
        </div>
       
        <div id="date-time" class="d-flex">
            <div id="hari"></div>&nbsp;

            <div id="jam"></div>
        </div>
        <div id="user-menu" class="me-4">
            <div class="dropdown">
                <button class="btn dropdown-toggle dropdown-toggle-user" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
        </div>
        
    </header>
    <aside>
        <nav>
            <ul>
                <li>
                    <a href="#">
                        <img src="/assets/icons/house.svg"/>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="/user">
                        <img src="/assets/icons/gear.svg"/>
                        <span>User Management</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
    <main>
        <div class="card p-5">
            <div class="card-body">
                <div class="row d-flex justify-content-sm-between align-items-center">
                    <div class="col-lg-6">
                        DATA PENGGUNA
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahUser">
                            <img src="/assets/icons/plus.svg" class="text-white" style="font-size: 2rem; color: cornflowerblue;"/>
                            Tambah
                        </button>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">Username</th>
                                <th scope="col" class="text-center">Nama Pengguna</th>
                                <th scope="col" class="text-center">Aktif</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </main>
    <footer>
        test
    </footer>
  <!-- Modal -->
<div class="modal fade" id="tambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" >
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Tambah Data Pengguna</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <span class="fw-semibold mb-3">
                            DATA PERSONAL
                        </span>
                        <div class="mb-3 row">
                            <label for="level-user" class="col-sm-3 col-form-label ms-2 ">Level User</label>
                            <div class="col-sm-8">
                                <select class="form-select form-control-sm" aria-label="Default select example" id="level-user">
                                    <option></option>
                                    <option value="1">Admin BAPENDA</option>
                                    <option value="2">Kepala UPPD</option>
                                    <option value="3">SPOPD</option>
                                  </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="uppd-user" class="col-sm-3 col-form-label ms-2">Nama User</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama-user" name="nama_user">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="uppd-user" class="col-sm-3 col-form-label ms-2">UPPD</label>
                            <div class="col-sm-8">
                                <select class="form-select select" aria-label="Default select example" id="uppd_user">
                                    <option selected>Pilih UPPD</option>
                                  </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="lokasi-user" class="col-sm-3 col-form-label ms-2">Lokasi</label>
                            <div class="col-sm-8">
                                <select class="form-select" aria-label="Default select example" id="lokasi-user">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <span class="fw-semibold mb-3">
                        DATA LOGIN / AKSES APLIKASI
                        </span>
                        <div class="mb-3 row">
                            <label for="user-login" class="col-sm-3 col-form-label ms-2">User Login</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="user-login" name="user_login">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-3 col-form-label ms-2">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="confirm-password" class="col-sm-3 col-form-label ms-2 col-form-label-sm">Ulangi Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="confirm-password" name="confirm_password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6" >
                    {{-- Hak Akses Admin Bapenda --}}
                    <div id="admin_bapenda" style="display: none;">
                        <div class="row">
                            <div class="col-6">
                                <span class="fw-semibold"   >
                                    Silahkan Pilih Hak Akses
                                </span>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check_all_admin_bapenda">
                                    <label class="form-check-label fw-semibold" for="check_all_admin_bapenda">
                                    Pilih semua?  
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="hak_akses_admin_bapenda">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="Pengaturan" name="pengaturan">
                                    <label class="form-check-label " for="Pengaturan">
                                        Pengaturan  
                                    </label>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="utilities" name="utilities">
                                        <label class="form-check-label" for="utilities">
                                            Utilities  
                                        </label>
                                    </div>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="tabel" name="tabel">
                                        <label class="form-check-label" for="tabel">
                                            Tabel  
                                        </label>
                                        <div class="ms-4">
                                            <input class="form-check-input" type="checkbox" value="" id="jenis_layanan" name="jenis_layanan">
                                            <label class="form-check-label" for="jenis_layanan">
                                                Jenis Layanan  
                                            </label>
                                        </div>
                                        <div class="ms-4">
                                            <input class="form-check-input" type="checkbox" value="" id="manajemen_user" name="manajemen_user">
                                            <label class="form-check-label" for="manajemen_user">
                                                Manajemen User  
                                            </label>
                                        </div>
                                        <div class="ms-4">
                                            <input class="form-check-input" type="checkbox" value="" id="klasifikasi_golongan" name="klasifikasi_golongan">
                                            <label class="form-check-label" for="klasifikasi_golongan">
                                                Klasifikasi Golongan  
                                            </label>
                                        </div>
                                        <div class="ms-4">
                                            <label class="form-check-label">
                                                Jasa Raharja  
                                            </label>
                                        </div>
                                        <div class="ms-4">
                                            <input class="form-check-input" type="checkbox" value="" id="tanda_tangan_jr" name="tanda_tangan_jr">
                                            <label class="form-check-label" for="tanda_tangan_jr">
                                                Tanda Tangan  
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="manajemen" name="manajemen">
                                    <label class="form-check-label" for="manajemen">
                                        Manajemen  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="formulir_spopd" name="formulir_spopd">
                                    <label class="form-check-label" for="formulir_spopd">
                                        Formulir / SPOPD  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="verval" name="verval">
                                    <label class="form-check-label" for="verval">
                                        Verifikasi & Validasi  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="perbaikan_data_verifikasi" name="perbaikan_data_verifikasi">
                                    <label class="form-check-label" for="perbaikan_data_verifikasi">
                                        Perbaikan Data Verifikasi  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="verifikasi_jr" name="verifikasi_jr">
                                    <label class="form-check-label" for="verifikasi_jr">
                                        Verifikasi Jasa Raharja  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="penetapan" name="penetapan">
                                    <label class="form-check-label" for="penetapan">
                                        Penetapan  
                                    </label>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="penetapan_pajak" name="penetapan_pajak">
                                        <label class="form-check-label" for="penetapan_pajak">
                                            Penetapan Pajak
                                        </label>
                                    </div>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="penetapan_tambahan_pajak" name="penetapan_tambahan_pajak">
                                        <label class="form-check-label" for="penetapan_tambahan_pajak">
                                            Penetapan Tambahan Pajak
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="laporan" name="laporan">
                                    <label class="form-check-label" for="laporan">
                                        Laporan  
                                    </label>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="pengeluaran_spopd" name="pengeluaran_spopd">
                                        <label class="form-check-label" for="pengeluaran_spopd">
                                            Pengeluaran SPOPD  
                                        </label>
                                    </div>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="perubahan_data" name="perubahan_data">
                                        <label class="form-check-label" for="perubahan_data">
                                            Perubahan Data  
                                        </label>
                                    </div>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="perubahan_biaya" name="perubahan_biaya">
                                        <label class="form-check-label" for="perubahan_biaya">
                                            Perubahan Biaya  
                                        </label>
                                    </div>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="laporan_harian" name="laporan_harian">
                                        <label class="form-check-label" for="laporan_harian">
                                            Laporan Harian  
                                        </label>
                                    </div>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="laporan_bulanan" name="laporan_bulanan">
                                        <label class="form-check-label" for="laporan_bulanan">
                                            Laporan Bulanan  
                                        </label>
                                    </div>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="laporan_pd" name="laporan_pd">
                                        <label class="form-check-label" for="laporan_pd">
                                            Laporan PD  
                                        </label>
                                    </div>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="laporan_online" name="laporan_online">
                                        <label class="form-check-label" for="laporan_online">
                                            Laporan Online  
                                        </label>
                                    </div>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="laporan_pembebasan" name="laporan_pembebasan">
                                        <label class="form-check-label" for="laporan_pembebasan">
                                            Laporan Pembebasan  
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="form_khusus" name="form_khusus">
                                    <label class="form-check-label" for="form_khusus">
                                        Form Khusus  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="form_fiskal" name="form_fiskal">
                                    <label class="form-check-label" for="form_fiskal">
                                        Form Fiskal  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="blokir_kendaraan" name="blokir_kendaraan">
                                    <label class="form-check-label" for="blokir_kendaraan">
                                        Blokir Kendaraan  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="informasi_kendaraan" name="informasi_kendaraan">
                                    <label class="form-check-label" for="informasi_kendaraan">
                                        Blokir Kendaraan  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="admin_progresif" name="admin_progresif">
                                    <label class="form-check-label" for="admin_progresif">
                                        Admin Progresif  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="split_jr" name="split_jr">
                                    <label class="form-check-label" for="split_jr">
                                        Split Jasa Raharja  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="status_transaksi" name="status_transaksi">
                                    <label class="form-check-label" for="status_transaksi">
                                        Status Transaksi 
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="perbaikan_data_sjo" name="perbaikan_data_sjo">
                                    <label class="form-check-label" for="perbaikan_data_sjo">
                                        Perbaikan Data SJO 
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="hapus_transaksi_kepala_uppd" name="hapus_transaksi_kepala_uppd">
                                    <label class="form-check-label" for="hapus_transaksi_kepala_uppd">
                                        Hapus Transaksi Kepala UPPD
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="keringanan" name="keringanan">
                                    <label class="form-check-label" for="keringanan">
                                        Keringanan
                                    </label>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="permohonan_keringanan" name="permohonan_keringanan">
                                        <label class="form-check-label" for="permohonan_keringanan">
                                            Permohonan Keringanan
                                        </label>
                                    </div>
                                    <div class="ms-4">
                                        <input class="form-check-input" type="checkbox" value="" id="pembayaran_keringanan" name="pembayaran_keringanan">
                                        <label class="form-check-label" for="pembayaran_keringanan">
                                            Pembayaran Keringanan
                                        </label>
                                    </div>
                                </div>                               
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="manajemen_menu" name="manajemen_menu">
                                <label class="form-check-label" for="manajemen_menu">
                                    Manajemen Menu
                                </label>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="perbaikan_data_verifikasi" name="perbaikan_data_verifikasi">
                                <label class="form-check-label" for="perbaikan_data_verifikasi">
                                    Perbaikan Data Verifikasi (Valbin)
                                </label>
                            </div>
                        </div>      
                    </div>
                    {{-- Akhir Hak Akses Admin Bapenda --}}

                    {{-- Hak Akses SPOPD --}}
                    <div id="spopd" style="display: none;">
                        <div class="row">
                            <div class="col-6">
                                <span class="fw-semibold"   >
                                    Silahkan Pilih Hak Akses
                                </span>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check_all_spopd">
                                    <label class="form-check-label fw-semibold" for="check_all_spopd">
                                    Pilih semua?  
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="hak-akses-spopd">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="formulir_spopd">
                                    <label class="form-check-label" for="formulir_spopd">
                                        Formulir / SPOPD  
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="laporan_spopd">
                                    <label class="form-check-label" for="laporan_spopd">
                                        Laporan  
                                    </label>
                                </div>
                                <div class="ms-4">
                                    <input class="form-check-input" type="checkbox" value="" id="pengeluaran_spopd">
                                    <label class="form-check-label fw-semibold" for="pengeluaran_spopd">
                                        Pengeluaran  
                                    </label>
                                </div>
                            </div>
                        </div>      
                    </div>
                    {{-- Akhir Hak Akses SPOPD --}}

                    {{-- Hak Akses Kepala UPPD --}}
                    <div id="kepala_uppd" style="display: none;">
                        <div class="row">
                            <div class="col-6">
                                <span class="fw-semibold"   >
                                    Silahkan Pilih Hak Akses
                                </span>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check_all_kepala_uppd">
                                    <label class="form-check-label fw-semibold" for="check_all_kepala_uppd">
                                    Pilih semua?  
                                    </label>
                                </div>
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="hapus_transaksi_kepala_uppd">
                                <label class="form-check-label" for="hapus_transaksi_kepala_uppd">
                                    Hapus Transakasi Kepala UPPD  
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src={{url("/js/myScript.js")}}></script>
  <script>
    
  </script>
</body>
</html>