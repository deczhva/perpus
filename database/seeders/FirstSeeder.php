<?php

namespace Database\Seeders;
use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Kategori;
use App\Models\Pemberitahuan;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pesan;
use App\Models\User;



use Illuminate\Database\Seeder;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create ([
            'kode' => 'C1',
            'nis' => null,
            'fullname' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('123456'),
            'kelas' => null,
            'alamat' => null,
            'verif' => 'verified',
            'role' => 'admin',
            'join_date' => '2023-06-05',
            'terakhir_login' => '2023-06-05',
            'foto' => null,
        ]);
        User::create ([
            'kode' => 'C2',
            'nis' => 1234567890,
            'fullname' => 'Revalia',
            'username' => 'revalia',
            'password' => bcrypt('123457'),
            'kelas' => 'XII RPL',
            'alamat' => 'jl jalan',
            'verif' => 'verified',
            'role' => 'user',
            'join_date' => '2023-06-01',
            'terakhir_login' => '2023-06-01',
            'foto' => null,
        ]);
        User::create ([
            'kode' => 'C3',
            'nis' => 1234567891,
            'fullname' => 'Zhevanya',
            'username' => 'zhevanya',
            'password' => bcrypt('123458'),
            'kelas' => 'X BDP',
            'alamat' => 'Jl. satu',
            'verif' => 'verified',
            'role' => 'user',
            'join_date' => '2023-06-02',
            'terakhir_login' => '2023-06-02',
            'foto' => null,
        ]);


        Kategori::create([
            'kode' => 'A1',
            'nama' => 'Umum'
        ]);
        Kategori::create([
            'kode' => 'A2',
            'nama' => 'Fiksi'
        ]);
        Kategori::create([
            'kode' => 'A3',
            'nama' => 'Sejarah'
        ]);

        Penerbit::create([
            'kode' => 'B1',
            'nama' => 'Bukoo',
            'verif' => 'verified',
        ]);
        Penerbit::create([
            'kode' => 'B2',
            'nama' => 'Fiksie',
            'verif' => 'verified',
        ]);
        Penerbit::create([
            'kode' => 'B3',
            'nama' => 'Sejarah',
            'verif' => 'verified',
        ]);



        Buku::create([
            'judul' => 'Matematika',
            'kategori_id' => '1',
            'penerbit_id' => '1',
            'pengarang' => 'Jeffrey',
            'tahun_terbit' => '2017',
            'isbn' => '1245676878',
            'j_buku_baik' => '10',
            'j_buku_rusak' => '1',
            'foto' => null,
        ]);
        Buku::create([
            'judul' => 'Nowhere',
            'kategori_id' => '2',
            'penerbit_id' => '2',
            'pengarang' => 'Mark',
            'tahun_terbit' => '2022',
            'isbn' => '1245676879',
            'j_buku_baik' => '10',
            'j_buku_rusak' => '1',
            'foto' => null,
        ]);
        Buku::create([
            'judul' => 'SKI',
            'kategori_id' => '3',
            'penerbit_id' => '3',
            'pengarang' => 'Andy',
            'tahun_terbit' => '2017',
            'isbn' => '1245676870',
            'j_buku_baik' => '10',
            'j_buku_rusak' => '1',
            'foto' => null,
        ]);



        Pesan::create([
            'penerima_id' => '3',
            'pengirim_id' => '1',
            'judul' => 'buku sedang dipinjam',
            'isi' => 'maaf, buku sedang dipinjam',
            'status' => 'terkirim',
            'tanggal_kirim' => '2023-06-02'
        ]);
        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul' => 'Libur',
            'isi' => 'maaf, perpus sedang libur',
            'status' => 'dibaca',
            'tanggal_kirim' => '2023-06-02'
        ]);
        Pesan::create([
            'penerima_id' => '2',
            'pengirim_id' => '1',
            'judul' => 'Denda',
            'isi' => 'anda harus membayar denda, karena telah menghilangkan buku',
            'status' => 'terkirim',
            'tanggal_kirim' => '2023-06-02'
        ]);

        
        Pemberitahuan::create([
            'isi' => 'di Perpustakaan SMKN 10 Jakarta',
            'level_user' => null,
            'status' => 'aktif'
        ]);

        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '1',
            'tanggal_peminjaman' => '2023-06-02',
            'tanggal_pengembalian' => '2023-06-02',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dipinjam' => 'rusak'
        ]);
        Peminjaman::create([
            'user_id' => '3',
            'buku_id' => '3',
            'tanggal_peminjaman' => '2023-06-02',
            'tanggal_pengembalian' => '2023-06-02',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dipinjam' => 'baik'
        ]);
        Peminjaman::create([
            'user_id' => '2',
            'buku_id' => '2',
            'tanggal_peminjaman' => '2023-06-02',
            'tanggal_pengembalian' => '2023-06-02',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dipinjam' => 'baik'
        ]);

        Identitas::create([
            'nama_app' => 'Aplikasi Perpustakaan',
            'alamat_app' => 'Jl. Mayjen Sutoyo, Daerah Khusus Ibukota Jakarta 13630',
            'email_app' => 'smean6@perpus.com',
            'nomor_hp' => '082837464737'
        ]);
    }
}