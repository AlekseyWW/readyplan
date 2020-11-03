<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-10-31 13:08:58',
                'updated_at' => '2020-10-31 13:08:58',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-10-31 13:08:58',
                'updated_at' => '2020-10-31 13:08:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-10-31 13:08:58',
                'updated_at' => '2020-10-31 13:08:58',
            ),
            3 => 
            array (
                'id' => 10,
                'name' => 'block',
                'slug' => 'block',
                'display_name_singular' => 'Блок',
                'display_name_plural' => 'Блоки',
                'icon' => NULL,
                'model_name' => 'App\\Block',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-10-31 13:31:52',
                'updated_at' => '2020-10-31 13:31:52',
            ),
            4 => 
            array (
                'id' => 11,
                'name' => 'blocks',
                'slug' => 'blocks',
                'display_name_singular' => 'Блок',
                'display_name_plural' => 'Блоки',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\\Models\\Block',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\BlockController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-10-31 13:34:13',
                'updated_at' => '2020-11-01 12:22:52',
            ),
            5 => 
            array (
                'id' => 13,
                'name' => 'contacts',
                'slug' => 'contacts',
                'display_name_singular' => 'Контакт',
                'display_name_plural' => 'Контакты',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Contact',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-11-01 14:33:34',
                'updated_at' => '2020-11-01 14:35:07',
            ),
            6 => 
            array (
                'id' => 14,
                'name' => 'contact',
                'slug' => 'contact',
                'display_name_singular' => 'Контакт',
                'display_name_plural' => 'Контакты',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Contact',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-11-01 14:36:42',
                'updated_at' => '2020-11-02 13:57:44',
            ),
            7 => 
            array (
                'id' => 15,
                'name' => 'navbar',
                'slug' => 'navbar',
                'display_name_singular' => 'Пункт меню',
                'display_name_plural' => 'Пункты меню',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Navbar',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-11-02 13:09:09',
                'updated_at' => '2020-11-02 13:09:09',
            ),
            8 => 
            array (
                'id' => 16,
                'name' => 'navs',
                'slug' => 'navs',
                'display_name_singular' => 'Пункт меню',
                'display_name_plural' => 'Пункты меню',
                'icon' => 'voyager-list',
                'model_name' => 'App\\Models\\Nav',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"order","order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-11-02 13:11:41',
                'updated_at' => '2020-11-02 13:49:37',
            ),
        ));
        
        
    }
}