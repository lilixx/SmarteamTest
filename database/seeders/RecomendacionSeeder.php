<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecomendacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recomendacions')->insert(array(
            array('pregunta_id' => '1', 'recomendacion' => 'Establecer una ruta diaria en ejecución de las tareas diarias.'),
            array('pregunta_id' => '1', 'recomendacion' => 'Procurar evitar tareas administrativas a los ejecutivos para que tengan más tiempo para prospectos y clientes.'),
            array('pregunta_id' => '2', 'recomendacion' => 'Utilizar herramientas digitales muy intuitivas, que se ajustan al proceso de su equipo y  permiten tener trazabilidad  y visibilidad en tiempo real, para la toma de decisiones.'),
            array('pregunta_id' => '2', 'recomendacion' => 'Definir funciones, procesos y mediciones le da claridad al equipo con respecto a sus actividades y objetivos.'),
            array('pregunta_id' => '3', 'recomendacion' => 'Crear un manual de puesto que permita definir indicadores de desempeño.'),
            array('pregunta_id' => '3', 'recomendacion' => 'Ejecutar un plan de capacitaciones recurrentes, que contemple el repaso de procesos, metas e indicadores.'),
            array('pregunta_id' => '4', 'recomendacion' => 'Implemente un CRM que te permita medir en tiempo real la dinámica y el seguimiento de tus ejecutivos.'),
            array('pregunta_id' => '4', 'recomendacion' => 'Monitorear de manera frecuente los indicadores y generar oportunidades de mejora.'),
            array('pregunta_id' => '5', 'recomendacion' => 'Documentar y estandarizar los procesos de venta, basándose en el contexto generado por los ejecutivos.'),
            array('pregunta_id' => '5', 'recomendacion' => 'Asegurarse de contar con mecanismos de trazabilidad en la venta,  que propicien la productividad y el buen desempeño del equipo de ventas.'),
            array('pregunta_id' => '6', 'recomendacion' => 'Definir rutinas mensuales de feedback, luego del corte de la evaluación de metas.'),
            array('pregunta_id' => '6', 'recomendacion' => 'Trabajar constantemente en la cultura de aceptación de feedback y su metodología, para que sea una buena experiencia para tus colaboradores.'),           
        ));
    }
}
