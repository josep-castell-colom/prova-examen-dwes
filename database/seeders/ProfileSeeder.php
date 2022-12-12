<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Database\Factories\ProfileFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for($i=0;$i<5;$i++){
        $user = User::factory()->create();
        
        Profile::factory()->for($user)->create();
      }
    }
}
