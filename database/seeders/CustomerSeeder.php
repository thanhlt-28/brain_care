<?php

namespace Database\Seeders;

use App\Models\UserCustomer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => "BrainCare",
                'email' => 'braincare@gmail.com',
                'is_admin' => 0,
                'password' => Hash::make('12345'),
            ],
            [
                'name' => "Lò Tiến Thành",
                'email' => 'brc@gmail.com',
                'is_admin' => 0,
                'password' => Hash::make('12345'),
            ],
            [
                'name' => "Adminstrator",
                'email' => 'admin@gmail.com',
                'is_admin' => 1,
                'password' => Hash::make('123456'),
            ],
        ];
        foreach ($data as $item) {
            $model = new UserCustomer();
            $model->fill($item);
            $model->save();
        }
    }
}
