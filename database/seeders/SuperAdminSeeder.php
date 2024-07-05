<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    public function run()
    {
        $user = User::updateOrCreate(
            ['email' => 'gteran@metropolitan-touring.com'],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('Hesoyam1999'), // Cambia 'password' por la contraseña deseada
                'is_super_admin' => true,
            ]
        );
    }
}
