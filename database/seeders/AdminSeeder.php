<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name'=>'Adminisrator',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('123456'),
                'created_at'=>Carbon::now('Asia/Jakarta')
            ]
            ]);
    }
}
