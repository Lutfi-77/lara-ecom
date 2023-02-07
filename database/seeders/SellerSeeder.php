<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'	=> "Seller Test",
            'email'	=> 'seller@example.com',
            'email_verified_at'	=> Carbon::now(),
            'is_verified'	=> 1,
            'verif_code'	=> 123123,
            'password'	=> Hash::make('12345'),
        ]);
    }
}
