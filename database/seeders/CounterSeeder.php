<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counter = Counter::find(1);

        if (!$counter) {
            Counter::create(['counter' => 0]);
        }
    }
}
