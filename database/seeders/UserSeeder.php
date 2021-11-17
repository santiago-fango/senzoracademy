<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
                    'name' => 'Santiago Fandiño',
                    'email' => 'santiago.fango@gmail.com',
                    'password' => bcrypt('12345')
                ]);

        $user->assignRole('Administrador');

        User::create([
            'name' => 'Otro Santiago',
            'email' => 'asdf@asdf.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(98)->create();
    }
}
