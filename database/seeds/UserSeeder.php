<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'firstname' => '吳冠興',
            'username' => 'xeee',
            'email'    => 'xeaiow@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '0911709837',
            'qq_id' => '0911709837',
            'wechat_id' => '0911709837',
            'line_id' => 'xeeee',
            'point' => 100,
        ]);
    }
}
