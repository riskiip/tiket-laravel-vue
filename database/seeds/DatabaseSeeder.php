<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Categori\Categori;
use App\Model\Tiket\Tiket;
use App\Model\Transaksi\Transaksi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::Class, 20)->create();
        factory(Categori::Class, 20) -> create();
        factory(Tiket::Class, 20) -> create();
        factory(Transaksi::Class, 20) -> create();
    }
}
