<?php

namespace Database\Factories;

use App\Models\Testimony;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends Factory
 */
class TestimonyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $image = Str::random(12).'.jpg';

        Storage::disk('public')->put($image, file_get_contents(public_path('website/img/profile.jpeg')));

        return [
            'name' =>  $this->faker->name,
            'title' => $this->faker->jobTitle,
            'image' => $image,
            'content' => $this->faker->realText(150),
        ];
    }
}
