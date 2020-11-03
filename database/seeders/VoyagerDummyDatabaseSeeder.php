<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedersPath = database_path('seeders').'/';
        $this->seed('UsersTableSeeder');
        $this->seed('BlocksTableSeeder');
        $this->seed('ContactTableSeeder');
        $this->seed('TranslationsTableSeeder');
        $this->seed('PermissionRoleTableSeeder');
    }
}
