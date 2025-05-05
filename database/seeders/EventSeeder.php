<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'title' => 'Fun Run 5K',
            'description' => 'Event lari santai sejauh 5 km untuk semua kalangan.',
            'location' => 'Lapangan Merdeka',
            'date' => now()->addDays(7)->toDateString(), // sesuai dengan tipe 'date'
            'quota' => 100,
            'poster' => null, // belum ada poster
        ]);

        Event::create([
            'title' => 'Sepeda Santai',
            'description' => 'Gowes bersama komunitas sepeda lokal.',
            'location' => 'Car Free Day Sudirman',
            'date' => now()->addDays(14)->toDateString(),
            'quota' => 50,
            'poster' => null,
        ]);
    }
}
