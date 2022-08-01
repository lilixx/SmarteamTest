<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RepuestaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('repuestas')->insert(array(
            array('pregunta_id' => '1', 'respuesta' => 'Llamadas, cotizaciones y tareas administrativas.', 'correcta' => '0'),
            array('pregunta_id' => '1', 'respuesta' => 'Reuniones internas, seguimiento de ventas, revisión de canales digitales.', 'correcta' => '0'),
            array('pregunta_id' => '1', 'respuesta' => 'Seguimientos, llamadas, cotizaciones, prospección, evaluación de cartera, post venta.', 'correcta' => '1'),
            array('pregunta_id' => '2', 'respuesta' => 'Manuales de procesos, CRM de trazabilidad y KPI ́s en dashboards intuitivos.', 'correcta' => '1'),
            array('pregunta_id' => '2', 'respuesta' => 'No tengo trazabilidad en los seguimientos y utilizó un excel para graficar resultados.', 'correcta' => '0'),
            array('pregunta_id' => '2', 'respuesta' => 'Nos basamos únicamente en el cumplimiento de metas (De cualquier forma, con tal de llegar a la meta).', 'correcta' => '0'),
            array('pregunta_id' => '3', 'respuesta' => 'El que realiza las asignaciones tardías, siempre pregunta lo que tiene que hacer a pesar de contar con un plan de acción con orientaciones previamente señaladas.', 'correcta' => '0'),
            array('pregunta_id' => '3', 'respuesta' => 'El que realiza  sus asignaciones, tiene dudas en el proceso pero no consulta con el equipo.', 'correcta' => '0'),
            array('pregunta_id' => '3', 'respuesta' => 'El que tiene claras sus asignaciones, trabaja con puntualidad, planificación y consulta al equipo de ser necesario.', 'correcta' => '1'),
            array('pregunta_id' => '4', 'respuesta' => 'Cumplimiento de asignación es realizadas.', 'correcta' => '0'),
            array('pregunta_id' => '4', 'respuesta' => 'Cumplimiento de indicadores (KPI´s) y alcance de metas', 'correcta' => '0'),
            array('pregunta_id' => '4', 'respuesta' => 'Cumplimiento de indicadores diarios (KPI´s), alcance de metas y satisfacción de clientes por medio de encuestas.', 'correcta' => '1'),
            array('pregunta_id' => '5', 'respuesta' => 'Cumplimiento de asignación es realizadas.', 'correcta' => '0'),
            array('pregunta_id' => '5', 'respuesta' => 'Cumplimiento de indicadores (KPI´s) y alcance de metas', 'correcta' => '1'),
            array('pregunta_id' => '5', 'respuesta' => 'Cada uno de mis colaboradores tiene su propio proceso de venta, esto hace más buenos a unos que a otros.', 'correcta' => '0'),
            array('pregunta_id' => '6', 'respuesta' => 'Ejecutamos de forma periódica sesiones con el equipo o individuales para exponer mejoras en los procesos; en la cual se establecen soluciones y recursos para corto, mediano y largo plazo.', 'correcta' => '1'),
            array('pregunta_id' => '6', 'respuesta' => 'Envías correos electrónicos, llamadas o mensajes instantáneos solamente explicando la situación o problema.', 'correcta' => '0'),
            array('pregunta_id' => '6', 'respuesta' => 'Efectúas seguimientos constantes, comparaciones entre compañeros del equipo y esperas a dar el feedback cuando termina la estrategia.', 'correcta' => '0'),
         ));
    }
}
