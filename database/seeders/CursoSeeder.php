<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $curso = new Curso();
        $curso->name = 'Laravel';
        $curso->descripcion = 'El mejor framework de PHP';
        $curso->categoria = 'Desarrollo web';
        $curso->save();

        $curso2 = new Curso();
        $curso2->name = 'React';
        $curso2->descripcion = 'El mejor framework de Javascript';
        $curso2->categoria = 'Desarrollo web';
        $curso2->save();

        $curso3 = new Curso();
        $curso3->name = 'Django';
        $curso3->descripcion = 'El mejor framework de Python';
        $curso3->categoria = 'Desarrollo web';
        $curso3->save();
    }
}
