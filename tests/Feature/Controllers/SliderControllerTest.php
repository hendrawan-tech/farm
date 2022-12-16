<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Slider;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SliderControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_sliders()
    {
        $sliders = Slider::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('sliders.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.sliders.index')
            ->assertViewHas('sliders');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_slider()
    {
        $response = $this->get(route('sliders.create'));

        $response->assertOk()->assertViewIs('app.sliders.create');
    }

    /**
     * @test
     */
    public function it_stores_the_slider()
    {
        $data = Slider::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('sliders.store'), $data);

        $this->assertDatabaseHas('sliders', $data);

        $slider = Slider::latest('id')->first();

        $response->assertRedirect(route('sliders.edit', $slider));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_slider()
    {
        $slider = Slider::factory()->create();

        $response = $this->get(route('sliders.show', $slider));

        $response
            ->assertOk()
            ->assertViewIs('app.sliders.show')
            ->assertViewHas('slider');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_slider()
    {
        $slider = Slider::factory()->create();

        $response = $this->get(route('sliders.edit', $slider));

        $response
            ->assertOk()
            ->assertViewIs('app.sliders.edit')
            ->assertViewHas('slider');
    }

    /**
     * @test
     */
    public function it_updates_the_slider()
    {
        $slider = Slider::factory()->create();

        $data = [
            'badge' => $this->faker->text(255),
            'title' => $this->faker->sentence(10),
            'button' => $this->faker->text(255),
            'link' => $this->faker->text(255),
        ];

        $response = $this->put(route('sliders.update', $slider), $data);

        $data['id'] = $slider->id;

        $this->assertDatabaseHas('sliders', $data);

        $response->assertRedirect(route('sliders.edit', $slider));
    }

    /**
     * @test
     */
    public function it_deletes_the_slider()
    {
        $slider = Slider::factory()->create();

        $response = $this->delete(route('sliders.destroy', $slider));

        $response->assertRedirect(route('sliders.index'));

        $this->assertDeleted($slider);
    }
}
