<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $password="alquran";
        DB::table('users')->insert([
            'name'=>'Alquran',
            'email'=>"alquran@gmail.com",
            'password'=>Hash::make($password),
            'remember_token'=>'0JemwnVaVcGvYZ2lHQlPAfvYQatRzokPnjfd3XKMo3GiUpjWtOqjzGq3qNWx',
        ]);
        User::factory(4)->create();
    }
}
