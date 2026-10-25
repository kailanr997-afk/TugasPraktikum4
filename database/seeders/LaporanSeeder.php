<?php

namespace Database\Seeders;

use App\Models\Laporan;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LaporanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Daftar kecamatan di Kabupaten Bandung
        $kecamatanBandung = [
            'Dayeuhkolot',
            'Baleendah',
            'Bojongsoang',
            'Rancaekek',
            'Majalaya',
            'Cileunyi',
            'Ciparaye',
            'Margahayu'
        ];

        for ($i = 0; $i < 15; $i++) {
            Laporan::create([
                'nama_pelapor' => $faker->name(),
                'lokasi' => 'Kec. ' . $faker->randomElement($kecamatanBandung),
                'tinggi_genangan' => $faker->numberBetween(10, 150),
                'tanggal_kejadian' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            ]);
        }
    }
}