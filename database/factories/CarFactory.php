<?php

namespace Database\Factories;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;
    private $engines = ['diesel', 'electric', 'petrol', 'hybrid'];
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' =>  $this->faker->word($minNbChar=2, $maxNbChars =20 ),
            'model' =>  $this->faker->word($minNbChar=2, $maxNbChars =20 ),
            'year'  =>  $this->faker->year($max = 'now'),
            'maxSpeed'  =>  $this->faker->numberBetween($min = 20, $max = 300),
            'isAutomatic'  =>  $this->faker->boolean(),
            'engine'  =>  $this->engines[random_int(0, 3)],
            'numberOfDoors' => $this->faker->numberBetween($min = 2, $max = 5),
        ];
    }
}
