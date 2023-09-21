<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dummyuserseadee extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata=[
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'voly',
                'email'=>'voly@gmail.com',
                'role'=>'voly',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'hadra',
                'email'=>'hadra@gmail.com',
                'role'=>'hadra',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Drumb_Band',
                'email'=>'Drumb_Band@gmail.com',
                'role'=>'Drumb_Band',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'basket',
                'email'=>'basket@gmail.com',
                'role'=>'basket',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Pramuka',
                'email'=>'Pramuka@gmail.com',
                'role'=>'Pramuka',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Pmr',
                'email'=>'Pmr@gmail.com',
                'role'=>'Pmr',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Panahan',
                'email'=>'Panahan@gmail.com',
                'role'=>'Panahan',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Sepak_Bola',
                'email'=>'Sepak_Bola@gmail.com',
                'role'=>'Sepak_Bola',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Tari',
                'email'=>'Tari@gmail.com',
                'role'=>'Tari',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Futsal',
                'email'=>'Futsal@gmail.com',
                'role'=>'Futsal',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Band_Musik',
                'email'=>'Band_Musik@gmail.com',
                'role'=>'Band_Musik',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Remas',
                'email'=>'Remas@gmail.com',
                'role'=>'Remas',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Silat',
                'email'=>'Silat@gmail.com',
                'role'=>'Silat',
                'password'=>bcrypt(123456)
            ],
            [
                'name'=>'Bulutangkis',
                'email'=>'Bulutangkis@gmail.com',
                'role'=>'Bulutangkis',
                'password'=>bcrypt(123456)
            ],
        ];
        foreach($userdata as $key => $val){
            User::create($val);
        }

    }
}
