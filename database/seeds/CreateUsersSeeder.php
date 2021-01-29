<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123123'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('admin');
        
        $user = User::create([
            'name' => 'jefe',
            'email' => 'jefe_operaciones@mail.com',
            'password' => bcrypt('123123'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('jefe operaciones');

        $user = User::create([
            'name' => 'supervisor',
            'email' => 'supervisor@mail.com',
            'password' => bcrypt('123123'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('supervisor');

        $user = User::create([
            'name' => 'administrador',
            'email' => 'administrador_contacto@mail.com',
            'password' => bcrypt('123123'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('administrador contrato');

        $user = User::create([
            'name' => 'Gonzalo Gonzalez',
            'email' => 'conductor1@mail.com',
            'password' => bcrypt('123123'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('conductor');

        $user = User::create([
            'name' => 'Fernando Fernandez',
            'email' => 'conductor2@mail.com',
            'password' => bcrypt('123123'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('conductor');

        $user = User::create([
            'name' => 'Rodrigo Rodriguez',
            'email' => 'conductor3@mail.com',
            'password' => bcrypt('123123'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('conductor');

        $user = User::create([
            'name' => 'Manuel Aguilar',
            'email' => 'auxiliar@mail.com',
            'password' => bcrypt('123123'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('auxiliar');

        $user = User::create([
            'name' => 'sertec',
            'email' => 'sertec@mail.com',
            'password' => bcrypt('123123'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('sertec');

        $user = User::create([
            'name' => 'acreditacion',
            'email' => 'acreditacion@mail.com',
            'password' => bcrypt('123123'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('acreditacion');

    }
}
