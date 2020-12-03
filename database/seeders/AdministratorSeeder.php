<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->username = "adierwanto";
        $admin->name = "Adi Erwanto";
        $admin->email = "adierwanto666@gmail.com";
        $admin->roles = json_encode(["ADMIN"]);
        $admin->password = Hash::make("123456");
        $admin->phone = "081123123123";
        $admin->avatar = "null";
        $admin->address = "Tangerang";
        $admin->save();

        $this->command->info("Admin User has been added");
    }
}
