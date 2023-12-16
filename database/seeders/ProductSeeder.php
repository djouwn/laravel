<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class ProductSeeder extends Seeder
{
    public function run()
    {
    
       $sellerUserIds = User::where('role', 'seller')->pluck('id')->toArray();

      
        foreach ($sellerUserIds as $userId) {
            Product::factory()->count(5)->create([
                'user_id' => $userId,
            ]);
        }
    }
       
}

