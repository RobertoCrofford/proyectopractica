<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Proyecto();
        $curso->name = 'Roberto';
        $curso->descripcion = 'Aprendiendo laravel ';
        $curso->categoria = 'desarrollo web';

        $curso->save();

        $curso2= new Proyecto();
        $curso2->name = 'Roberto';
        $curso2->descripcion = 'Aprendiendo laravel ';
        $curso2->categoria = 'desarrollo web';

        $curso2->save();

        $curso3= new Proyecto();
        $curso3->name = 'Roberto';
        $curso3->descripcion = 'Aprendiendo laravel ';
        $curso3->categoria = 'desarrollo web';

        $curso3->save();

        $curso4= new Proyecto();
        $curso4->name = 'Roberto';
        $curso4->descripcion = 'Aprendiendo laravel ';
        $curso4->categoria = 'desarrollo web';

        $curso4->save();

        $curso5= new Proyecto();
        $curso5->name = 'Roberto';
        $curso5->descripcion = 'Aprendiendo laravel ';
        $curso5->categoria = 'desarrollo web';

        $curso5->save();

        $curso6= new Proyecto();
        $curso6->name = 'Roberto';
        $curso6->descripcion = 'Aprendiendo laravel ';
        $curso6->categoria = 'desarrollo web';

        $curso6->save();

        $curso7= new Proyecto();
        $curso7->name = 'Roberto';
        $curso7->descripcion = 'Aprendiendo laravel ';
        $curso7->categoria = 'desarrollo web';

        $curso7->save();

        $curso8= new Proyecto();
        $curso8->name = 'Roberto';
        $curso8->descripcion = 'Aprendiendo laravel ';
        $curso8->categoria = 'desarrollo web';

        $curso8->save();
    }
}
