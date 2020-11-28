<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => "1",
            'username' => "Reva",
            'email_address' => "reva@gmail.com",
            'password' => Hash::make('reva123'),
            'address' => "Jl. abc 123",
            'phone_number' => "082211873166",
            'gender' => "Male"
        ]);

        DB::table('users')->insert([
            'role_id' => "1",
            'username' => "Ardi",
            'email_address' => "ardi@gmail.com",
            'password' => Hash::make('ardi123'),
            'address' => "Jl. abc 123",
            'phone_number' => "082211873166",
            'gender' => "Male"
        ]);

        DB::table('users')->insert([
            'role_id' => "2",
            'username' => "Budi",
            'email_address' => "contact@budi.com",
            'password' => Hash::make('budi123'),
            'address' => "Jl. efg 123",
            'phone_number' => "081588923581",
            'gender' => "Male"
        ]);
    }
}
