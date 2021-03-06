<?php

namespace Database\Factories;

use App\Models\Book;
use Carbon\Carbon;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $year = $this->faker->date('Y');

        return [
            'name' => $this->faker->name,
            'year' => $year,
        ];
    }
}
