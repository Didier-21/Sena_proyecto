<?php

namespace Tests\Feature;

use App\Models\Proyecto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProyectoControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_proyectos()
    {
        // Crear algunos proyectos en la base de datos
        Proyecto::factory()->count(3)->create();

        // Enviar una solicitud GET al método index
        $response = $this->get(route('proyectos.index'));

        // Verificar que la respuesta sea exitosa
        $response->assertStatus(200);

        // Verificar que la vista contiene los proyectos
        $response->assertViewHas('proyectoa');
    }

    /** @test */
    public function it_can_create_a_new_proyecto()
    {
        // Simular datos para un proyecto
        $data = [
            'nombre' => 'Nuevo Proyecto',
            'tipo' => 'Tipo 1',
            'cantidad' => 10,
            'valor' => 1000
        ];

        // Enviar una solicitud POST al método store
        $response = $this->post(route('proyectos.store'), $data);

        // Verificar que el proyecto fue guardado en la base de datos
        $this->assertDatabaseHas('proyectos', ['nombre' => 'Nuevo Proyecto']);

        // Verificar que la respuesta sea exitosa
        $response->assertSee('Guardado con éxito el proyecto productivo del colegio San Jose en Ingreso');
    }

    /** @test */
    public function it_can_show_a_single_proyecto()
    {
        // Crear un proyecto en la base de datos
        $proyecto = Proyecto::factory()->create();

        // Enviar una solicitud GET al método show
        $response = $this->get(route('proyectos.show', $proyecto->id));

        // Verificar que la vista contiene el proyecto
        $response->assertViewHas('proyectoa');
        $response->assertStatus(200);
    }

    /** @test */
    public function it_can_update_a_proyecto()
    {
        // Crear un proyecto en la base de datos
        $proyecto = Proyecto::factory()->create();

        // Simular datos de actualización
        $data = [
            'nombre' => 'Proyecto Actualizado',
            'tipo' => 'Tipo 2',
            'cantidad' => 15,
            'valor' => 1500
        ];

        // Enviar una solicitud PUT al método update
        $response = $this->put(route('proyectos.update', $proyecto->id), $data);

        // Verificar que el proyecto fue actualizado en la base de datos
        $this->assertDatabaseHas('proyectos', ['nombre' => 'Proyecto Actualizado']);

        // Verificar que la respuesta sea exitosa
        $response->assertSee('LA MODIFICACION SE REALIZO CON EXITO AL PROYECTO PRODUCTIVO');
    }

    /** @test */
    public function it_can_delete_a_proyecto()
    {
        // Crear un proyecto en la base de datos
        $proyecto = Proyecto::factory()->create();

        // Enviar una solicitud DELETE al método destroy
        $response = $this->delete(route('proyectos.destroy', $proyecto->id));

        // Verificar que el proyecto fue eliminado de la base de datos
        $this->assertDatabaseMissing('proyectos', ['id' => $proyecto->id]);

        // Verificar que la respuesta sea exitosa
        $response->assertRedirect(route('proyectos.index'));
    }
}
