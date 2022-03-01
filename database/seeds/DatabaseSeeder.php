<?php

use App\User;
use App\UserDomicilio;
use Database\Factories\UserDomicilioFactory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 100)->create()->each(function ($user) {
            $user->userDomicilio()->save(factory(UserDomicilio::class)->make());
        });
    }
}
