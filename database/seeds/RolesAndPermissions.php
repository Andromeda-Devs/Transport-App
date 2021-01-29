<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'ver requerimientos']);
        Permission::create(['name' => 'recepcionar requerimiento']);
        Permission::create(['name' => 'ver programaciones']);
        Permission::create(['name' => 'preparar programacion']);
        Permission::create(['name' => 'aprobar programacion']);
        Permission::create(['name' => 'generar programacion']);
        Permission::create(['name' => 'ver documento 01']);
        Permission::create(['name' => 'ver documento 02']);
        Permission::create(['name' => 'ver documento 03']);
        Permission::create(['name' => 'ver documento 04']);
        Permission::create(['name' => 'ver documento 05']);
        Permission::create(['name' => 'ver documento 06']);
        Permission::create(['name' => 'ver documento 07']);
        Permission::create(['name' => 'ver documento 08']);
        Permission::create(['name' => 'ver documento 09']);
        Permission::create(['name' => 'ver documento 10']);
        Permission::create(['name' => 'ver documento 11']);
        Permission::create(['name' => 'ver documento 12']);
        Permission::create(['name' => 'ver documento 13']);
        Permission::create(['name' => 'ver documento 14']);
        Permission::create(['name' => 'ver documento 15']);
        Permission::create(['name' => 'ver documento 16']);
        Permission::create(['name' => 'ver documento 17']);
        Permission::create(['name' => 'ver documento 18']);
        Permission::create(['name' => 'llenar documento 01']);
        Permission::create(['name' => 'llenar documento 02']);
        Permission::create(['name' => 'llenar documento 03']);
        Permission::create(['name' => 'llenar documento 04']);
        Permission::create(['name' => 'llenar documento 05']);
        Permission::create(['name' => 'llenar documento 06']);
        Permission::create(['name' => 'llenar documento 07']);
        Permission::create(['name' => 'llenar documento 08']);
        Permission::create(['name' => 'llenar documento 09']);
        Permission::create(['name' => 'llenar documento 10']);
        Permission::create(['name' => 'llenar documento 11']);
        Permission::create(['name' => 'llenar documento 12']);
        Permission::create(['name' => 'llenar documento 13']);
        Permission::create(['name' => 'llenar documento 14']);
        Permission::create(['name' => 'llenar documento 15']);
        Permission::create(['name' => 'llenar documento 16']);
        Permission::create(['name' => 'llenar documento 17']);
        Permission::create(['name' => 'llenar documento 18']);
        Permission::create(['name' => 'autorizar inicio conduccion']);
        Permission::create(['name' => 'informe observaciones mecanicas']);
        Permission::create(['name' => 'informe observaciones documentales']);

        Permission::create(['name' => 'crear rol']);
        Permission::create(['name' => 'leer roles']);
        Permission::create(['name' => 'actualizar rol']);
        Permission::create(['name' => 'eliminar rol']);

        Permission::create(['name' => 'crear permiso']);
        Permission::create(['name' => 'leer permisos']);
        Permission::create(['name' => 'actualizar permiso']);
        Permission::create(['name' => 'eliminar permiso']);

        $role = Role::create(['name' => 'jefe operaciones'])
            ->givePermissionTo([
                'ver requerimientos',
                'recepcionar requerimiento',
                'ver programaciones',
                'aprobar programacion',
                'ver documento 01',
                'ver documento 02',
                'ver documento 03',
                'ver documento 04',
                'ver documento 05',
                'ver documento 06',
                'ver documento 07',
                'ver documento 08',
                'ver documento 09',
                'ver documento 10',
                'ver documento 11',
                'ver documento 12',
                'ver documento 13',
                'ver documento 14',
                'ver documento 15',
                'ver documento 16',
                'ver documento 17',
                'ver documento 18',
                'llenar documento 01',
                'llenar documento 02',
                'llenar documento 03',
                'llenar documento 04',
                'llenar documento 05',
                'llenar documento 06',
                'llenar documento 07',
                'llenar documento 08',
                'llenar documento 09',
                'llenar documento 10',
                'llenar documento 11',
                'llenar documento 12',
                'llenar documento 13',
                'llenar documento 14',
                'llenar documento 15',
                'llenar documento 16',
                'llenar documento 17',
                'llenar documento 18',
            ]);

        $role = Role::create(['name' => 'supervisor'])
            ->givePermissionTo([
                'ver programaciones',
                'ver requerimientos',
                'preparar programacion',
                'generar programacion',
                'autorizar inicio conduccion',
                'ver documento 01',
                'ver documento 02',
                'ver documento 03',
                'ver documento 04',
                'ver documento 05',
                'ver documento 06',
                'ver documento 07',
                'ver documento 08',
                'ver documento 09',
                'ver documento 10',
                'ver documento 11',
                'ver documento 12',
                'ver documento 13',
                'ver documento 14',
                'ver documento 15',
                'ver documento 16',
                'ver documento 17',
                'ver documento 18',
                'llenar documento 01',
                'llenar documento 02',
                'llenar documento 03',
                'llenar documento 04',
                'llenar documento 05',
                'llenar documento 06',
                'llenar documento 07',
                'llenar documento 08',
                'llenar documento 09',
                'llenar documento 10',
                'llenar documento 11',
                'llenar documento 12',
                'llenar documento 13',
                'llenar documento 14',
                'llenar documento 15',
                'llenar documento 16',
                'llenar documento 17',
                'llenar documento 18',
            ]);

        $role = Role::create(['name' => 'administrador contrato'])
            ->givePermissionTo([
                'recepcionar requerimiento',
            ]);

        $role = Role::create(['name' => 'conductor'])
            ->givePermissionTo([
                'ver requerimientos',
                'ver programaciones',
                'ver documento 01',
                'ver documento 02',
                'ver documento 03',
                'ver documento 04',
                'ver documento 05',
                'ver documento 06',
                'ver documento 07',
                'ver documento 08',
                'ver documento 10',
                'ver documento 12',
                'ver documento 13',
                'ver documento 16',
                'ver documento 18',
                'llenar documento 01',
                'llenar documento 02',
                'llenar documento 03',
                'llenar documento 04',
                'llenar documento 05',
                'llenar documento 06',
                'llenar documento 07',
                'llenar documento 08',
                'llenar documento 10',
                'llenar documento 12',
                'llenar documento 13',
                'llenar documento 16',
                'llenar documento 18',
            ]);

        $role = Role::create(['name' => 'auxiliar'])
            ->givePermissionTo([
                'ver requerimientos',
                'ver programaciones',
                'ver documento 10',
                'ver documento 11',
                'ver documento 12',
                'ver documento 18',
                'llenar documento 10',
                'llenar documento 11',
                'llenar documento 12',
                'llenar documento 18',
            ]);

        $role = Role::create(['name' => 'sertec'])
            ->givePermissionTo([
                'informe observaciones mecanicas',
            ]);

        $role = Role::create(['name' => 'acreditacion'])
            ->givePermissionTo([
                'informe observaciones documentales',
            ]);

        $role = Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());


        // create roles and assign created permissions

        // this can be done as separate statements
        // $role = Role::create(['name' => 'writer']);
        // $role->givePermissionTo('update raffles');

        // or may be done by chaining
        // $role = Role::create(['name' => 'moderator'])
        //     ->givePermissionTo(['publish articles', 'unpublish articles']);

        // $role = Role::create(['name' => 'super-admin']);
        // $role->givePermissionTo(Permission::all());
    }
}
