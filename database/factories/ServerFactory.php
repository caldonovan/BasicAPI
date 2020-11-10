<?php

namespace Database\Factories;

use App\Models\Server;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Server::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $games = ['Garry\'s Mod', 'Half-Life 2', 'ArmA 3', 'ArmA 2', 'Rust', 'ARK'];
        return [
            'server_name' => 'Test Game Server',
            'server_description' => $this->faker->paragraph(),
            'server_slots' => rand(0, 50),
            'server_game' => $this->faker->randomElement($games),
            'server_ip' => $this->faker->ipv4,
            'user_id' => User::inRandomOrder()->pluck('id')->first(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
