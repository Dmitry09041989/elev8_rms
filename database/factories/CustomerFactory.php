<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'surname'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'street'=>$this->faker->streetAddress(),
            'city'=>$this->faker->city(),
            'postcode'=>$this->faker->postcode(),
            'phone_number'=>$this->faker->phoneNumber(),
            'height'=> $this->faker->numberBetween(140, 250),
            'weight'=> $this->faker->numberBetween(30, 200),
        ];
    }
}
