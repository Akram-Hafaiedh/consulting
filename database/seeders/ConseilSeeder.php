<?php

namespace Database\Seeders;

use App\Models\Conseil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConseilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['santé', 'education', 'relation'];
        $typeImages = ['sante', 'livre-ouvert', 'main'];

        foreach ($types as $index => $type) {
            Conseil::factory()->count(9)->create([
                'type' => $type,
                'icon' => $typeImages[$index],
            ]);
        }
    }
}
