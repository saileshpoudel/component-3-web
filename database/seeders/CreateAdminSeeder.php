<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user = User::where('email','admin@admin.com')->first();

        if(!$user)
        {   
                $user = User::create([
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('password')
                ]);


                return $user;

        }else {
            return $user;
        }
    }
}
