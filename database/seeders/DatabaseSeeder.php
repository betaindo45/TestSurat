<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'username'=>'adminsemboro',
            'password'=>bcrypt('12semboroHebat3A'),
            'is_admin'=> true
        ]);
        User::create([
            'username'=>'adminsemboro2',
            'password'=>bcrypt('23DesaMandiri1B'),
            'is_admin'=> true
        ]);
        User::create([
            'username'=>'adminsemboro3',
            'password'=>bcrypt('PGsemboroJemberMandiri23Ac'),
            'is_admin'=> true
        ]);
        post::create([
            'name'=>'adminsemboro3',
            'nik'=>'21515',
            'kk'=> '21515',
            'keperluan'=>'Keperluan Nikah',
            'keterangan'=>'asd',
            'status'=>false,
            'nohp'=>'2151251',
            'email'=>'d@gmail.com'
        ]);
        post::create([
            'name'=>'budi',
            'nik'=>'21515',
            'kk'=> '21515',
            'keperluan'=>'Keperluan Nikah',
            'keterangan'=>'asd',
            'status'=>false,
            'nohp'=>'2151251',
            'email'=>'d@gmail.com'
        ]);
        post::create([
            'name'=>'siti',
            'nik'=>'21515',
            'kk'=> '21515',
            'keperluan'=>'Keperluan Nikah',
            'keterangan'=>'asd',
            'status'=>false,
            'nohp'=>'2151251',
            'email'=>'d@gmail.com'
        ]);
    }
}