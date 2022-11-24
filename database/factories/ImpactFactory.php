<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Impact>
 */
class ImpactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $image = Str::random(12).'.jpg';

        Storage::disk('public')->put($image, file_get_contents(public_path('website/img/causes-'.rand(1, 3).'.jpg')));

        return [
            'title' => $title = str($this->faker->unique()->realText(50))->title(),
            'slug' => str($title)->kebab(),
            'excerpt' => $this->faker->realText,
            'cover_image' =>  $image,
            'content' => $this->faker->realText(1000),
            'published_at' => now(),
        ];
    }
}
