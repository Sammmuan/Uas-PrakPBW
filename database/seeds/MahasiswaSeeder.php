<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $gender = $faker->randomElement(['male', 'female']);
        $jurusan = $faker->randomElement(['Biologi', 'Akutansi','Teologi','Arsitektur','Komputer',
        'Sistem Informasi']);
        $minat = $faker->randomElement(['Tenis Meja', 'Futsal','Sepak Bola','Atletik','Menyanyi']);
        for($i = 41; $i <= 50; $i++)
        {
        DB::table('mahasiswa')->insert([
            'nim' => $faker->nik(),
            'nama' => $faker->name($gender),
            'gender' => $gender,
            'jurusan' => $jurusan,
            'bidang_minat' => $minat
        ]);
        }
    }
}
