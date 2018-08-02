<?php

use App\User;
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
        $admin_user = new User();
        $admin_user->name = 'Admin';
        $admin_user->email = 'admin@rightbizbd.com';
        $admin_user->mobile_no = '01620152200';
        $admin_user->password = bcrypt('admin');
        $admin_user->role = "admin";
        $admin_user->status = 1;
        $admin_user->save();
    }
}
