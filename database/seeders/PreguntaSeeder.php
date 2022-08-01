<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('preguntas')->insert(array(
            array('pregunta' => '¿Cuál de las siguientes actividades, se parece más a las tareas que desempeña tu equipo comercial en su día a día?'),
            array('pregunta' => '¿Qué métodos utiliza para ejecutar los procesos comerciales de su equipo?'),
            array('pregunta' => '¿Cuál de los siguientes perfiles representa más a los colaboradores comerciales de tu empresa?'),
            array('pregunta' => '¿Qué método utilizas para medir a tus colaboradores comerciales?'),
            array('pregunta' => '¿Con cuál de estas situaciones podrías identificarte más?'),
            array('pregunta' => '¿De qué manera brindas feedback a tu equipo comercial?'),
         ));
    }
}
