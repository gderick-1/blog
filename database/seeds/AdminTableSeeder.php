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
        //
        $admin = new App\Admin();
        $admin->username = "admin";
        $admin->password = bcrypt('gad_1994');
        $admin->save();
    }
}
