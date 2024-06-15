<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID'); // Atur bahasa Indonesia

        // Daftar jabatan yang akan digunakan
        $jabatan = ['Manager', 'Developer', 'Designer', 'Administrator', 'HR', 'Marketing', 'Finance', 'Sales', 'Customer Service'];

        $data = [];

        // Data untuk 3 pegawai pertama
        for ($i = 0; $i < 3; $i++) {
            $data[] = [
                'pegawai_nama' => $faker->name,
                'pegawai_jabatan' => $jabatan[$i],
                'pegawai_umur' => 35,
                'pegawai_alamat' => $faker->address, // Menghasilkan alamat secara acak dengan bahasa Indonesia
            ];
        }

        // Tambahkan 47 record lainnya dengan jabatan acak
        for ($i = 3; $i < 50; $i++) {
            $data[] = [
                'pegawai_nama' => $faker->name,
                'pegawai_jabatan' => $jabatan[array_rand($jabatan)],
                'pegawai_umur' => rand(20, 50),
                'pegawai_alamat' => $faker->address, // Menghasilkan alamat secara acak dengan bahasa Indonesia
            ];
        }

        DB::table('pegawai')->insert($data);
    }
}
