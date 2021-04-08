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
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'usuario.listar',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Creación de usuarios',
            'slug'          => 'agregarUsuario',
            'description'   => 'Podría crear nuevos usuarios en el sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'usuario.detalle',
            'description'   => 'Ve en detalle cada usuario del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'usuario.editar',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'usuario.habilitacion',
            'description'   => 'Podría eliminar cualquier usuario del sistema',      
        ]);
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'usuario.inhabilitacion',
            'description'   => 'Podría eliminar cualquier usuario del sistema',      
        ]);



        Permission::create([
            'name'=>'Navegar categorías',
            'slug'=>'categoria.listar',
            'description'=>'Lista y navega por todos los categorías del sistema.',
        ]);
        Permission::create([
            'name'=>'Ver detalle de categoría',
            'slug'=>'categorias.detalle',
            'description'=>'Ver en detalle cada categoría del sistema.',
        ]);
        Permission::create([
            'name'=>'Edición de categorías',
            'slug'=>'categorias.editar',
            'description'=>'Editar cualquier dato de un categoría del sistema.',
        ]);
        Permission::create([
            'name'=>'Creación de categorías',
            'slug'=>'agregarCategoria',
            'description'=>'Crea cualquier dato de una categoría del sistema.',
        ]);
        Permission::create([
            'name'=>'Eliminar categorías',
            'slug'=>'categoria.habilitacion',
            'description'=>'Eliminar cualquier dato de una categoría del sistema.',
        ]);
        Permission::create([
            'name'=>'Eliminar categorías',
            'slug'=>'categoria.inhabilitacion',
            'description'=>'Eliminar cualquier dato de una categoría del sistema.',
        ]);



        Permission::create([
            'name'=>'Navegar por clientes',
            'slug'=>'cliente.listar',
            'description'=>'Lista y navega por todos los clientes del sistema.',
        ]);
        Permission::create([
            'name'=>'Ver detalle de cliente',
            'slug'=>'cliente.detalle',
            'description'=>'Ver en detalle cada cliente del sistema.',
        ]);
        Permission::create([
            'name'=>'Edición de clientes',
            'slug'=>'cliente.editar',
            'description'=>'Editar cualquier dato de un cliente del sistema.',
        ]);
        Permission::create([
            'name'=>'Creación de clientes',
            'slug'=>'agregarCliente',
            'description'=>'Crea cualquier dato de un cliente del sistema.',
        ]);
        Permission::create([
            'name'=>'Eliminar clientes',
            'slug'=>'cliente.destroy',
            'description'=>'Eliminar cualquier dato de un cliente del sistema.',
        ]);



        Permission::create([
            'name'=>'Navegar por productos',
            'slug'=>'producto.listar',
            'description'=>'Lista y navega por todos los productos del sistema.',
        ]);
        Permission::create([
            'name'=>'Ver detalle de producto',
            'slug'=>'producto.detalle',
            'description'=>'Ver en detalle cada producto del sistema.',
        ]);
        Permission::create([
            'name'=>'Edición de productos',
            'slug'=>'producto.editar',
            'description'=>'Editar cualquier dato de un producto del sistema.',
        ]);
        Permission::create([
            'name'=>'Creación de productos',
            'slug'=>'agregarProducto',
            'description'=>'Crea cualquier dato de un producto del sistema.',
        ]);
        Permission::create([
            'name'=>'Habilitacion productos',
            'slug'=>'producto.habilitacion',
            'description'=>'Eliminar cualquier dato de un producto del sistema.',
        ]);
        Permission::create([
            'name'=>'Inhabilitacion productos',
            'slug'=>'producto.inhabilitacion',
            'description'=>'Eliminar cualquier dato de un producto del sistema.',
        ]);



        Permission::create([
            'name'=>'Navegar por compras',
            'slug'=>'compras.index',
            'description'=>'Lista y navega por todos los compras del sistema.',
        ]);
        Permission::create([
            'name'=>'Ver detalle de compra',
            'slug'=>'compras.show',
            'description'=>'Ver en detalle cada compra del sistema.',
        ]);
        Permission::create([
            'name'=>'Creación de compras',
            'slug'=>'compras.create',
            'description'=>'Crea cualquier dato de un compra del sistema.',
        ]);



        Permission::create([
            'name'=>'Navegar por ventas',
            'slug'=>'ventas.index',
            'description'=>'Lista y navega por todos los ventas del sistema.',
        ]);
        Permission::create([
            'name'=>'Ver detalle de venta',
            'slug'=>'ventas.show',
            'description'=>'Ver en detalle cada venta del sistema.',
        ]);
        Permission::create([
            'name'=>'Creación de ventas',
            'slug'=>'ventas.create',
            'description'=>'Crea cualquier dato de un venta del sistema.',
        ]);



        Permission::create([
            'name'=>'Cambiar estado de compra',
            'slug'=>'change.status.compras',
            'description'=>'Permite cambiar el estado de un compra.',
        ]);

        Permission::create([
            'name'=>'Cambiar estado de venta',
            'slug'=>'ventas.habilitacion',
            'description'=>'Permite cambiar el estado de un venta.',
        ]);
        Permission::create([
            'name'=>'Cambiar estado de venta',
            'slug'=>'ventas.inhabilitacion',
            'description'=>'Permite cambiar el estado de un venta.',
        ]);
    }
}
