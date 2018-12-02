<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class)->times(40)->create();
        $products = factory(App\Product::class)->times(50)->create();
        $sizes = factory(App\Size::class)->times(4)->create();

        for ($i = 0; $i < count($products); $i++) {
    			$siz = $sizes[rand(0,3)];
    			$siz->products()->save($products[$i]);
          $products[$i]->user()->associate($users[rand(0,39)])->save();
    		}

        // foreach($products as $product) {
        //   $product->users()->sync($users->random(2));
        // }

    }

}
