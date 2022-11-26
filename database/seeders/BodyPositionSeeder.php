<?php

namespace Database\Seeders;

use App\Models\BodyPosition;
use Illuminate\Database\Seeder;

class BodyPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BodyPosition::query()->forceDelete();
        BodyPosition::insert([
            ['name' => '手太陰肺經'],
            ['name' => '手陽明大腸經'],
            ['name' => '足陽明胃經'],
            ['name' => '足太陰脾經'],
            ['name' => '手少陰心經'],
            ['name' => '手太陽小腸經'],
            ['name' => '足太陽膀胱經'],
            ['name' => '足少陰腎經'],
            ['name' => '手厥陰心包經'],
            ['name' => '手少陽三焦經'],
            ['name' => '足少陽膽經'],
            ['name' => '足厥陰肝經']
        ]);
    }
}
