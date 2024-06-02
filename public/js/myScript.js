// Hak Akses
const level_user = document.getElementById('level-user')
const hak_akses_pengaturan = document.getElementById('hak_akses_pengaturan')
const hak_akses_utilities = document.getElementById('hak_akses_utilities')
const hak_akses_tabel = document.getElementById('hak_akses_tabel')
const hak_akses_jenis_layanan = document.getElementById(
  'hak_akses_jenis_layanan',
)
const hak_akses_manajemen_user = document.getElementById(
  'hak_akses_manajemen_user',
)
const hak_akses_klasifikasi_golongan = document.getElementById(
  'hak_akses_klasifikasi_golongan',
)
const hak_akses_tanda_tangan_jr = document.getElementById(
  'hak_akses_tanda_tangan_jr',
)
const hak_akses_manajemen = document.getElementById('hak_akses_manajemen')
const hak_akses_formulir_spopd = document.getElementById(
  'hak_akses_formulir_spopd',
)
const hak_akses_verval = document.getElementById('hak_akses_verval')
const hak_akses_perbaikan_data_verifikasi = document.getElementById(
  'hak_akses_perbaikan_data_verifikasi',
)
const hak_akses_verifikasi_jr = document.getElementById(
  'hak_akses_verifikasi_jr',
)
const hak_akses_penetapan = document.getElementById('hak_akses_penetapan')
const hak_akses_penetapan_pajak = document.getElementById(
  'hak_akses_penetapan_pajak',
)
const hak_akses_penetapan_tambahan_pajak = document.getElementById(
  'hak_akses_penetapan_tambahan_pajak',
)
const hak_akses_laporan = document.getElementById('hak_akses_laporan')
const hak_akses_pengeluaran_spopd = document.getElementById(
  'hak_akses_pengeluaran_spopd',
)
const hak_akses_perubahan_data = document.getElementById(
  'hak_akses_perubahan_data',
)
const hak_akses_perubahan_biaya = document.getElementById(
  'hak_akses_perubahan_biaya',
)
const hak_akses_laporan_harian = document.getElementById(
  'hak_akses_laporan_harian',
)
const hak_akses_laporan_bulanan = document.getElementById(
  'hak_akses_laporan_bulanan',
)
const hak_akses_laporan_pd = document.getElementById('hak_akses_laporan_pd')
const hak_akses_laporan_online = document.getElementById(
  'hak_akses_laporan_online',
)
const hak_akses_laporan_pembebasan = document.getElementById(
  'hak_akses_laporan_pembebasan',
)
const hak_akses_form_khusus = document.getElementById('hak_akses_form_khusus')
const hak_akses_form_fiskal = document.getElementById('hak_akses_form_fiskal')
const hak_akses_blokir_kendaraan = document.getElementById(
  'hak_akses_blokir_kendaraan',
)
const hak_akses_informasi_kendaraan = document.getElementById(
  'hak_akses_informasi_kendaraan',
)
const hak_akses_admin_progresif = document.getElementById(
  'hak_akses_admin_progresif',
)
const hak_akses_split_jr = document.getElementById('hak_akses_split_jr')
const hak_akses_status_transaksi = document.getElementById(
  'hak_akses_status_transaksi',
)
const hak_akses_perbaikan_data_sjo = document.getElementById(
  'hak_akses_perbaikan_data_sjo',
)
const hak_akses_hapus_transaksi_kepala_uppd = document.getElementById(
  'hak_akses_hapus_transaksi_kepala_uppd',
)
const hak_akses_permohonan_keringanan = document.getElementById(
  'hak_akses_permohonan_keringanan',
)
const hak_akses_pembayaran_keringanan = document.getElementById(
  'hak_akses_pembayaran_keringanan',
)
const hak_akses_manajemen_menu = document.getElementById(
  'hak_akses_manajemen_menu',
)
const hak_akses_perbaikan_data_verifikasi_valbin = document.getElementById(
  'hak_akses_perbaikan_data_verifikasi_valbin',
)

level_user.addEventListener('change', function () {
  if (this.value == 1) {
    hak_akses_pengaturan.style.display = 'block'
    hak_akses_hapus_transaksi_kepala_uppd.style.display = 'block'
    hak_akses_manajemen.style.display = 'block'
    hak_akses_formulir_spopd.style.display = 'block'
    hak_akses_verval.style.display = 'block'
    hak_akses_perbaikan_data_verifikasi.style.display = 'block'
    hak_akses_verifikasi_jr.style.display = 'block'
    hak_akses_penetapan.style.display = 'block'
    hak_akses_laporan.style.display = 'block'
    hak_akses_form_khusus.style.display = 'block'
    hak_akses_form_fiskal.style.display = 'block'
    hak_akses_blokir_kendaraan.style.display = 'block'
    hak_akses_informasi_kendaraan.style.display = 'block'
    hak_akses_admin_progresif.style.display = 'block'
    hak_akses_split_jr.style.display = 'block'
    hak_akses_status_transaksi.style.display = 'block'
    hak_akses_perbaikan_data_sjo.style.display = 'block'
    hak_akses_keringanan.style.display = 'block'
    hak_akses_manajemen_menu.style.display = 'block'
    hak_akses_perbaikan_data_verifikasi_valbin.style.display = 'block'
  } else if (this.value == 2) {
    hak_akses_pengaturan.style.display = 'none'
    hak_akses_hapus_transaksi_kepala_uppd.style.display = 'block'
    hak_akses_manajemen.style.display = 'none'
    hak_akses_formulir_spopd.style.display = 'none'
    hak_akses_verval.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi.style.display = 'none'
    hak_akses_verifikasi_jr.style.display = 'none'
    hak_akses_penetapan.style.display = 'none'
    hak_akses_laporan.style.display = 'none'
    hak_akses_form_khusus.style.display = 'none'
    hak_akses_form_fiskal.style.display = 'none'
    hak_akses_blokir_kendaraan.style.display = 'none'
    hak_akses_informasi_kendaraan.style.display = 'none'
    hak_akses_admin_progresif.style.display = 'none'
    hak_akses_split_jr.style.display = 'none'
    hak_akses_status_transaksi.style.display = 'none'
    hak_akses_perbaikan_data_sjo.style.display = 'none'
    hak_akses_keringanan.style.display = 'none'
    hak_akses_manajemen_menu.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi_valbin.style.display = 'none'
  } else if (this.value == 3) {
    hak_akses_pengaturan.style.display = 'none'
    hak_akses_hapus_transaksi_kepala_uppd.style.display = 'none'
    hak_akses_manajemen.style.display = 'none'
    hak_akses_formulir_spopd.style.display = 'block'
    hak_akses_verval.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi.style.display = 'none'
    hak_akses_verifikasi_jr.style.display = 'none'
    hak_akses_penetapan.style.display = 'none'
    hak_akses_laporan.style.display = 'block'
    hak_akses_pengeluaran_spopd.style.display = 'block'
    hak_akses_perubahan_data.style.display = 'none'
    hak_akses_perubahan_biaya.style.display = 'none'
    hak_akses_laporan_harian.style.display = 'none'
    hak_akses_laporan_bulanan.style.display = 'none'
    hak_akses_laporan_pd.style.display = 'none'
    hak_akses_laporan_online.style.display = 'none'
    hak_akses_laporan_pembebasan.style.display = 'none'
    hak_akses_form_khusus.style.display = 'none'
    hak_akses_form_fiskal.style.display = 'none'
    hak_akses_blokir_kendaraan.style.display = 'none'
    hak_akses_informasi_kendaraan.style.display = 'none'
    hak_akses_admin_progresif.style.display = 'none'
    hak_akses_split_jr.style.display = 'none'
    hak_akses_status_transaksi.style.display = 'none'
    hak_akses_perbaikan_data_sjo.style.display = 'none'
    hak_akses_keringanan.style.display = 'none'
    hak_akses_manajemen_menu.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi_valbin.style.display = 'none'
  } else if (this.value == 4) {
    hak_akses_pengaturan.style.display = 'none'
    hak_akses_hapus_transaksi_kepala_uppd.style.display = 'none'
    hak_akses_manajemen.style.display = 'none'
    hak_akses_formulir_spopd.style.display = 'none'
    hak_akses_verval.style.display = 'block'
    hak_akses_perbaikan_data_verifikasi.style.display = 'block'
    hak_akses_verifikasi_jr.style.display = 'none'
    hak_akses_penetapan.style.display = 'none'
    hak_akses_laporan.style.display = 'block'
    hak_akses_perubahan_data.style.display = 'block'
    hak_akses_pengeluaran_spopd.style.display = 'none'
    hak_akses_perubahan_biaya.style.display = 'none'
    hak_akses_laporan_harian.style.display = 'none'
    hak_akses_laporan_bulanan.style.display = 'none'
    hak_akses_laporan_pd.style.display = 'none'
    hak_akses_laporan_online.style.display = 'none'
    hak_akses_laporan_pembebasan.style.display = 'none'
    hak_akses_form_khusus.style.display = 'none'
    hak_akses_form_fiskal.style.display = 'none'
    hak_akses_blokir_kendaraan.style.display = 'none'
    hak_akses_informasi_kendaraan.style.display = 'block'
    hak_akses_admin_progresif.style.display = 'none'
    hak_akses_split_jr.style.display = 'none'
    hak_akses_status_transaksi.style.display = 'none'
    hak_akses_perbaikan_data_sjo.style.display = 'none'
    hak_akses_keringanan.style.display = 'none'
    hak_akses_manajemen_menu.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi_valbin.style.display = 'none'
  } else if (this.value == 5) {
    hak_akses_pengaturan.style.display = 'none'
    hak_akses_hapus_transaksi_kepala_uppd.style.display = 'none'
    hak_akses_manajemen.style.display = 'block'
    hak_akses_formulir_spopd.style.display = 'block'
    hak_akses_verval.style.display = 'block'
    hak_akses_perbaikan_data_verifikasi.style.display = 'block'
    hak_akses_verifikasi_jr.style.display = 'none'
    hak_akses_penetapan.style.display = 'none'
    hak_akses_laporan.style.display = 'block'
    hak_akses_form_khusus.style.display = 'block'
    hak_akses_form_fiskal.style.display = 'block'
    hak_akses_blokir_kendaraan.style.display = 'block'
    hak_akses_informasi_kendaraan.style.display = 'block'
    hak_akses_admin_progresif.style.display = 'block'
    hak_akses_split_jr.style.display = 'none'
    hak_akses_status_transaksi.style.display = 'block'
    hak_akses_perbaikan_data_sjo.style.display = 'block'
    hak_akses_keringanan.style.display = 'none'
    hak_akses_manajemen_menu.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi_valbin.style.display = 'none'
  } else if (this.value == 6 || this.value == 7) {
    hak_akses_pengaturan.style.display = 'none'
    hak_akses_hapus_transaksi_kepala_uppd.style.display = 'none'
    hak_akses_manajemen.style.display = 'none'
    hak_akses_formulir_spopd.style.display = 'none'
    hak_akses_verval.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi.style.display = 'none'
    hak_akses_verifikasi_jr.style.display = 'block'
    hak_akses_penetapan.style.display = 'none'
    hak_akses_laporan.style.display = 'block'
    hak_akses_perubahan_data.style.display = 'none'
    hak_akses_pengeluaran_spopd.style.display = 'none'
    hak_akses_perubahan_biaya.style.display = 'none'
    hak_akses_laporan_harian.style.display = 'none'
    hak_akses_laporan_bulanan.style.display = 'none'
    hak_akses_laporan_pd.style.display = 'none'
    hak_akses_laporan_online.style.display = 'none'
    hak_akses_laporan_pembebasan.style.display = 'block'
    hak_akses_form_khusus.style.display = 'none'
    hak_akses_form_fiskal.style.display = 'none'
    hak_akses_blokir_kendaraan.style.display = 'none'
    hak_akses_informasi_kendaraan.style.display = 'none'
    hak_akses_admin_progresif.style.display = 'none'
    hak_akses_split_jr.style.display = 'block'
    hak_akses_status_transaksi.style.display = 'none'
    hak_akses_perbaikan_data_sjo.style.display = 'none'
    hak_akses_keringanan.style.display = 'none'
    hak_akses_manajemen_menu.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi_valbin.style.display = 'none'
  } else if (this.value == 8) {
    hak_akses_pengaturan.style.display = 'none'
    hak_akses_hapus_transaksi_kepala_uppd.style.display = 'none'
    hak_akses_manajemen.style.display = 'none'
    hak_akses_formulir_spopd.style.display = 'none'
    hak_akses_verval.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi.style.display = 'none'
    hak_akses_verifikasi_jr.style.display = 'none'
    hak_akses_penetapan.style.display = 'none'
    hak_akses_laporan.style.display = 'none'
    hak_akses_laporan_pembebasan.style.display = 'none'
    hak_akses_form_khusus.style.display = 'none'
    hak_akses_form_fiskal.style.display = 'block'
    hak_akses_blokir_kendaraan.style.display = 'none'
    hak_akses_informasi_kendaraan.style.display = 'none'
    hak_akses_admin_progresif.style.display = 'none'
    hak_akses_split_jr.style.display = 'none'
    hak_akses_status_transaksi.style.display = 'none'
    hak_akses_perbaikan_data_sjo.style.display = 'none'
    hak_akses_keringanan.style.display = 'none'
    hak_akses_manajemen_menu.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi_valbin.style.display = 'none'
  } else if (this.value == 9 || this.value == 10) {
    hak_akses_pengaturan.style.display = 'none'
    hak_akses_hapus_transaksi_kepala_uppd.style.display = 'none'
    hak_akses_manajemen.style.display = 'none'
    hak_akses_formulir_spopd.style.display = 'none'
    hak_akses_verval.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi.style.display = 'none'
    hak_akses_verifikasi_jr.style.display = 'none'
    hak_akses_penetapan.style.display = 'none'
    hak_akses_laporan.style.display = 'none'
    hak_akses_laporan_pembebasan.style.display = 'none'
    hak_akses_form_khusus.style.display = 'none'
    hak_akses_form_fiskal.style.display = 'none'
    hak_akses_blokir_kendaraan.style.display = 'none'
    hak_akses_informasi_kendaraan.style.display = 'none'
    hak_akses_admin_progresif.style.display = 'none'
    hak_akses_split_jr.style.display = 'none'
    hak_akses_status_transaksi.style.display = 'none'
    hak_akses_perbaikan_data_sjo.style.display = 'none'
    hak_akses_keringanan.style.display = 'none'
    hak_akses_manajemen_menu.style.display = 'none'
    hak_akses_perbaikan_data_verifikasi_valbin.style.display = 'none'
  }
})

// Menampilkan Jam
function showTime() {
  let today = new Date()
  let j = today.getHours()
  let m = today.getMinutes()
  let d = today.getSeconds()
  j = checkTime(j)
  m = checkTime(m)
  d = checkTime(d)
  document.getElementById('jam').innerHTML = j + ':' + m + ':' + d
}

function checkTime(i) {
  if (i < 10) {
    i = '0' + i
  }
  return i
}
setInterval(showTime, 500)
// Akhir menapilkan Jam

// Menampilkan hari
var months = [
  'Januari',
  'Februari',
  'Maret',
  'April',
  'Mei',
  'Juni',
  'Juli',
  'Agustus',
  'September',
  'Oktober',
  'November',
  'Desember',
]
var myDays = [
  'Minggu',
  'Senin',
  'Selasa',
  'Rabu',
  'Kamis',
  'Jum&#39;at',
  'Sabtu',
]
var date = new Date()
var day = date.getDate()
var month = date.getMonth()
var thisDay = date.getDay(),
  thisDay = myDays[thisDay]
var yy = date.getYear()
var year = yy < 1000 ? yy + 1900 : yy
if (day < 10) {
  document.getElementById('hari').innerHTML =
    thisDay + ', ' + '0' + day + ' ' + months[month] + ' ' + year + ' '
} else {
  document.getElementById('hari').innerHTML =
    thisDay + ', ' + day + ' ' + months[month] + ' ' + year + ' '
}

// Akhir Menampilkan hari

// Data UPPD
var data_uppd = [
  {
    id_uppd: '01',
    nama_uppd: 'UPPD KOTA SEMARANG I',
    wilayah_kerja: 'KOTA SEMARANG I',
    kota: 'SEMARANG',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '02',
    nama_uppd: 'UPPD KOTA SEMARANG II',
    wilayah_kerja: 'KOTA SEMARANG II',
    kota: 'SEMARANG',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '03',
    nama_uppd: 'UPPD KOTA SEMARANG III',
    wilayah_kerja: 'KOTA SEMARANG III',
    kota: 'SEMARANG',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '04',
    nama_uppd: 'UPPD KOTA SALATIGA',
    wilayah_kerja: 'KOTA SALATIGA',
    kota: 'SALATIGA',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '05',
    nama_uppd: 'UPPD KAB. SEMARANG',
    wilayah_kerja: 'KAB. SEMARANG',
    kota: 'UNGARAN',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '06',
    nama_uppd: 'UPPD KAB. KENDAL',
    wilayah_kerja: 'KAB. KENDAL',
    kota: 'KENDAL',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '07',
    nama_uppd: 'UPPD KAB. DEMAK',
    wilayah_kerja: 'KAB. DEMAK',
    kota: 'DEMAK',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '08',
    nama_uppd: 'UPPD KAB. GROBOGAN',
    wilayah_kerja: 'KAB. GROBOGAN',
    kota: 'GROBOGAN',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '09',
    nama_uppd: 'UPPD KOTA SURAKARTA',
    wilayah_kerja: 'KOTA SURAKARTA',
    kota: 'SURAKARTA',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '10',
    nama_uppd: 'UPPD KAB. SUKOHARJO',
    wilayah_kerja: 'KAB. SUKOHARJO',
    kota: 'SUKOHARJO',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '11',
    nama_uppd: 'UPPD KAB. KLATEN',
    wilayah_kerja: 'KAB. KLATEN',
    kota: 'KLATEN',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '12',
    nama_uppd: 'UPPD KAB. BOYOLALI',
    wilayah_kerja: 'KAB. BOYOLALI',
    kota: 'BOYOLALI',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '13',
    nama_uppd: 'UPPD KAB. SRAGEN',
    wilayah_kerja: 'KAB. SRAGEN',
    kota: 'SRAGEN',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '14',
    nama_uppd: 'UPPD KAB. KARANGANYAR',
    wilayah_kerja: 'KAB. KARANGANYAR',
    kota: 'KARANGANYAR',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '15',
    nama_uppd: 'UPPD KAB. WONOGIRI',
    wilayah_kerja: 'KAB. WONOGIRI',
    kota: 'WONOGIRI',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '16',
    nama_uppd: 'UPPD KAB. PATI',
    wilayah_kerja: 'KAB. PATI',
    kota: 'PATI',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '17',
    nama_uppd: 'UPPD KAB. KUDUS',
    wilayah_kerja: 'KAB. KUDUS',
    kota: 'KUDUS',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '18',
    nama_uppd: 'UPPD KAB. JEPARA',
    wilayah_kerja: 'KAB. JEPARA',
    kota: 'JEPARA',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '19',
    nama_uppd: 'UPPD KAB. REMBANG',
    wilayah_kerja: 'KAB. REMBANG',
    kota: 'REMBANG',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '20',
    nama_uppd: 'UPPD KAB. BLORA',
    wilayah_kerja: 'KAB. BLORA',
    kota: 'BLORA',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '21',
    nama_uppd: 'UPPD KOTA PEKALONGAN',
    wilayah_kerja: 'KOTA PEKALONGAN',
    kota: 'PEKALONGAN',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '22',
    nama_uppd: 'UPPD KAB. PEKALONGAN',
    wilayah_kerja: 'KAB. PEKALONGAN',
    kota: 'KAJEN',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '23',
    nama_uppd: 'UPPD KAB. BATANG',
    wilayah_kerja: 'KAB. BATANG',
    kota: 'BATANG',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '24',
    nama_uppd: 'UPPD KAB. PEMALANG',
    wilayah_kerja: 'KAB. PEMALANG',
    kota: 'PEMALANG',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '25',
    nama_uppd: 'UPPD KOTA TEGAL',
    wilayah_kerja: 'KOTA TEGAL',
    kota: 'TEGAL',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '26',
    nama_uppd: 'UPPD KAB. TEGAL',
    wilayah_kerja: 'KAB. TEGAL',
    kota: 'SLAWI',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '27',
    nama_uppd: 'UPPD KAB. BREBES',
    wilayah_kerja: 'KAB. BREBES',
    kota: 'BREBES',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '28',
    nama_uppd: 'UPPD KAB. BANYUMAS',
    wilayah_kerja: 'KAB. BANYUMAS',
    kota: 'BANYUMAS',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '29',
    nama_uppd: 'UPPD KAB. CILACAP',
    wilayah_kerja: 'KAB. CILACAP',
    kota: 'CILACAP',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '30',
    nama_uppd: 'UPPD KAB. PURBALINGGA',
    wilayah_kerja: 'KAB. PURBALINGGA',
    kota: 'PURBALINGGA',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '31',
    nama_uppd: 'UPPD KAB. BANJARNEGARA',
    wilayah_kerja: 'KAB. BANJARNEGARA',
    kota: 'BANJARNEGARA',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '32',
    nama_uppd: 'UPPD KOTA MAGELANG',
    wilayah_kerja: 'KOTA MAGELANG',
    kota: 'MAGELANG',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '33',
    nama_uppd: 'UPPD KAB. MAGELANG',
    wilayah_kerja: 'KAB. MAGELANG',
    kota: 'MUNGKID',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '34',
    nama_uppd: 'UPPD KAB. PURWOREJO',
    wilayah_kerja: 'KAB. PURWOREJO',
    kota: 'PURWOREJO',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '35',
    nama_uppd: 'UPPD KAB. KEBUMEN',
    wilayah_kerja: 'KAB. KEBUMEN',
    kota: 'KEBUMEN',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '36',
    nama_uppd: 'UPPD KAB. TEMANGGUNG',
    wilayah_kerja: 'KAB. TEMANGGUNG',
    kota: 'TEMANGGUNG',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '37',
    nama_uppd: 'UPPD KAB. WONOSOBO',
    wilayah_kerja: 'KAB. WONOSOBO',
    kota: 'WONOSOBO',
    created_at: null,
    created_by: null,
  },
  {
    id_uppd: '99',
    nama_uppd: 'BAPENDA PROV JATENG',
    wilayah_kerja: 'KOTA SEMARANG',
    kota: 'SEMARANG',
    created_at: null,
    created_by: null,
  },
]

// Select UPPD
const uppd_user = document.getElementById('uppd_user')
data_uppd.forEach((item) => {
  const option = document.createElement('option')
  option.value = item.id_uppd
  option.textContent = `[${item.id_uppd}] ${item.nama_uppd}`
  uppd_user.appendChild(option)
})

// Akhir Select UPPD
