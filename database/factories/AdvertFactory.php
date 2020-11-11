<?php

namespace Database\Factories;

use App\Models\Advert;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advert::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Add a faker provider to give us fake vehicle data.
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));

        // We do this here as we want to have consistent vehicle info for each record.
        $v = $this->faker->vehicleArray;

        // This is not a particularly efficient factory implementation.
        return [
            'title' => $v['brand'] . ' ' . $v['model'] . ' | ' . $this->faker->sentence(),
            'subtitle' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'registration' => $this->faker->vehicleRegistration,
            'make' => $v['brand'],
            'model' => $v['model'],
            'trim' => null,
            'price' => '£' . rand(1000, 10000),
            'mileage' => rand(0, 100000),
            'engine_size' => rand(1000, 5000) . 'cc',
            'doors' => $this->faker->vehicleDoorCount,
            'body_style' => $this->faker->vehicleType,
            'transmission' => $this->faker->vehicleGearBoxType,
            'fuel_type' => $this->faker->vehicleFuelType,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
