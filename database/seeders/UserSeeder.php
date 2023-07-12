<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pengguna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(array(
            [
                'role' => '1',
                'name' => 'Gunawan',
                'email' => 'g@gmail.com',
                'phone' => '085159079010',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'),
                'nik' => '1234567890',
                'tempat_lahir' => 'Indramayu',
                'tanggal_lahir' => '2001-06-19',
                'jenis_kelamin' => 'L',
                'agama' => 'Islam',
                'alamat' => 'Jl. Raya Gelarmendala',
                'rt' => '004',
                'rw' => '002',
                'provinsi' => 'Jawa Barat',
                'kota' => 'Indramayu',
                'kecamatan' => 'Balongan',
                'desa' => 'Gelarmendala',
                'kode_pos' => '45285',
                'no_tlp_rumah' => '0234-123456',
                'remember_token' => random_int(100, 999),
            ],
        ))->each(function ($users) {
            $user =  User::create($users);

            Pengguna::create([
                'user_id' => $user['id'],
                'jabatan' => 'warga',
            ]);
        });
    }
}
