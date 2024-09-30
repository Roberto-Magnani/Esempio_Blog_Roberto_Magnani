<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $languages = ['comune','abissale','celestiale','draconico','elfico','gergo delle profondità','gigante','gnomesco','goblin','halfling','infernale','nanico','orchesco','primordiale','silvano','altro'];
        foreach ($languages as $language) {
            DB::table('languages')->insert(
                [
                    'name'=>$language,
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ]
            );
        }
    }
}
