<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol1 = new Roles();
        $rol1->rol="ADMIN";
        $rol1->save();

        $rol2 = new Roles();
        $rol2->rol="AGREMIADO";
        $rol2->save();
    }
}
