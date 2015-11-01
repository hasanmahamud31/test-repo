<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
         DB::table('admins')->insert([
            'admin_name' => 'Admin',
            'admin_email' =>'admin@admin.com',
            'password' => bcrypt('admin'),
            'admin_priority' => 1,
            'admin_status' => 1,
            'created_at'=>touch(AdminTableSeeder::class),
             
        ]);
    }
}
