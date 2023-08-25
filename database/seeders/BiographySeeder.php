<?php

namespace Database\Seeders;

use App\Models\Biography;
use Illuminate\Database\Seeder;

class BiographySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $biography = [
            [
                'title' => 'An emotional healing advocate and a soulful story teller',
                'description' => "Hey, I'm Lysiane Byukusenge, an emotional healing advocate and a soulful storyteller. Welcome to Soul Lift, where hope, healing, and a closer bond with God await.
                Through stories of resilience and growth, Soul Lift offers a safe space to explore emotions and embrace personal growth. I believe that our relationship with God is vital for healing, guiding us through prayer and spiritual insights.",
                'author_id' => 1,

            ],
        ];

        Biography::insert($biography);
    }
}
