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
        // $typeImages = ['sante', 'livre-ouvert', 'main'];


        // Santé
        Conseil::factory()->create([
            'type' => 'santé',
            'image' => 'assets/conseils/IMG-20240113-WA0008.jpg'
        ]);

        Conseil::factory()->create([
            'type' => 'santé',
            'image' => 'assets/conseils/IMG-20240111-WA0001.jpg'
        ]);

        // Education
        Conseil::factory()->create([
            'type' => 'education',
            'image' => 'assets/conseils/IMG-20240111-WA0006.jpg'
        ]);
        Conseil::factory()->create([
            'type' => 'education',
            'image' => 'assets/conseils/IMG-20240111-WA0005.jpg'
        ]);

        // Relation
        Conseil::factory()->create([
            'type' => 'relation',
            'image' => 'assets/conseils/IMG-20240113-WA0004.jpg'
        ]);

        Conseil::factory()->create([
            'type' => 'relation',
            'image' => 'assets/conseils/IMG-20240113-WA0003.jpg'
        ]);
    }
}
