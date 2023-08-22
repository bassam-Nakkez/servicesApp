<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ArrayOptions;
use App\Models\CategoryPhoto;
use App\Models\Line;
use App\Models\LineOptions;
use App\Models\Multiprice;
use App\Models\MultipricesIncludesTax;
use App\Models\MultipricesTaxRate;
use App\Models\Order;
use App\Models\Product;
use App\Models\Report;
use App\Models\ReportPhoto;
use App\Models\Sub_Faq;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // CategoryPhoto::factory(15)->create();
        // User::factory(560)->create();
        // Product::factory(25)->create();
        // Multiprice::factory(1)->create();
        // MultipricesTaxRate::factory(1)->create();
        // MultipricesIncludesTax::factory(1)->create();
        // Sub_Faq::factory(5)->create();
        // ArrayOptions::factory(3)->create();
        // Order::factory(70)->create();
        // Line::factory(180)->create();
        // LineOptions::factory()->create();
        Report::factory(19)->create();
        ReportPhoto::factory(50)->create();

    }
}
