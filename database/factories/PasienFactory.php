<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PasienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pasien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name'          => $this->faker->name,
            'jenis_kelamin' => $this->faker->randomElements(['L', 'P']),
            'tanggal_lahir' => $this->faker->dateTime(),
            'usia'          => $this->faker->numberBetween(18, 60),
            'status'        => $this->faker->randomElements(['L', 'B']),
            'poli'          => $this->faker->randomElements(['U', 'G', 'A']),
            'icd'           => $this->faker->bothify('??-##'),
            'diagnosa'      => $this->faker->sentence(),
            'terapi'        => $this->faker->sentence(),

        ];
    }
}
