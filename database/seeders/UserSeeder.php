<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Administrator',
                'email' => 'thanhltph08395@fpt.edu.vn',
                'password' => Hash::make('123456')
            ],
            [
                'name' => 'Lò Tiến Thành',
                'email' => 'lothanh28.tl@gmail.com',
                'password' => Hash::make('123456')
            ]
        ];

        foreach ($users as $item) {
            $model = new User();
            $model->fill($item);
            $model->save();
        }
    }
}
