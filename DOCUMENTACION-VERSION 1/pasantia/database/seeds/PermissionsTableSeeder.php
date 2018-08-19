<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permisos de Usuarios 
        Permission::create([
        	'name' 			=> 'Navegar usuarios',
        	'slug' 			=> 'users.index',
        	'description'	=> 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Ver detalle de usuario',
        	'slug' 			=> 'users.show',
        	'description'	=> 'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Creacion de usuarios',
        	'slug' 			=> 'users.create',
        	'description'	=> 'Crea un usuario del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Edicion de usuarios',
        	'slug' 			=> 'users.edit',
        	'description'	=> 'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar usuario',
        	'slug' 			=> 'users.destroy',
        	'description'	=> 'Eliminar cualquier usuario del sistema',
        ]);

        //Rol
        Permission::create([
        	'name' 			=> 'Navegar roles',
        	'slug' 			=> 'roles.index',
        	'description'	=> 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Ver detalle de rol',
        	'slug' 			=> 'roles.show',
        	'description'	=> 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Creacion de roles',
        	'slug' 			=> 'roles.create',
        	'description'	=> 'Creacion de un rol del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Edicion de roles',
        	'slug' 			=> 'roles.edit',
        	'description'	=> 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar rol',
        	'slug' 			=> 'roles.destroy',
        	'description'	=> 'Eliminar cualquier rol del sistema',
        ]);

        //Persona
        Permission::create([
        	'name' 			=> 'Navegar personas',
        	'slug' 			=> 'persona.index',
        	'description'	=> 'Lista y navega todos los personas del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Ver detalle de persona',
        	'slug' 			=> 'persona.show',
        	'description'	=> 'Ver en detalle cada persona del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Creacion de personas',
        	'slug' 			=> 'persona.create',
        	'description'	=> 'Creacion de un persona del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Edicion de personas',
        	'slug' 			=> 'persona.edit',
        	'description'	=> 'Editar cualquier dato de un persona del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar persona',
        	'slug' 			=> 'persona.destroy',
        	'description'	=> 'Eliminar cualquier persona del sistema',
        ]);
    }
}
