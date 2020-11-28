<?php

use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            'name' => "Classic Pepperoni",
            'price' => 75000,
            'stock' => 25,
            'description' => "The best pizza in the town with Premium mozzarella and high quality meat.",
            'image' => "pz1.jpg"
        ]);

        DB::table('pizzas')->insert([
            'name' => "Lamb and Onion",
            'price' => 85000,
            'stock' => 25,
            'description' => "Pizza with lamb meat, some onion and cheese on top, coated with our special sauce.",
            'image' => "pz2.jpg"
        ]);

        DB::table('pizzas')->insert([
            'name' => "Cheese Bomb",
            'price' => 80000,
            'stock' => 25,
            'description' => "Amazing Pepperoni Pizza Bombs explode with flavor with every bite! They are loaded with pepperoni, cheese, and sauce to create and delicious POP of flavor in your mouth-hence the name!",
            'image' => "pz3.jpg"
        ]);

        DB::table('pizzas')->insert([
            'name' => "Tuna Man",
            'price' => 80000,
            'stock' => 25,
            'description' => "Pizza with Tuna mixed with mayonaise spread over the crust. Topped with cheese and all your other favorite toppings such as tomatoes, black olives, peppers, etc.",
            'image' => "pz4.jpg"
        ]);

        DB::table('pizzas')->insert([
            'name' => "American Favourite",
            'price' => 85000,
            'stock' => 25,
            'description' => "San Marzano tomato sauce, fresh mozzarella, grated parmesan and pepperoni from Il Mondo Vecchio",
            'image' => "pz5.jpg"
        ]);

        DB::table('pizzas')->insert([
            'name' => "Margherita",
            'price' => 65000,
            'stock' => 85,
            'description' => "Pizza with double mozzarella and original tomato sauce from Naples. The most cheapest pizza in the planet!",
            'image' => "pz6.jpg"
        ]);

        DB::table('pizzas')->insert([
            'name' => "NewYork Mushroom Buffalo",
            'price' => 120000,
            'stock' => 20,
            'description' => "Pizza with Mushroom mixed with mayonaise spread over the crust. Topped with cheese and all your other favorite toppings such as tomatoes, black olives, peppers, etc.",
            'image' => "pz7.jpg"
        ]);

        DB::table('pizzas')->insert([
            'name' => "Super Supreme",
            'price' => 90000,
            'stock' => 35,
            'description' => "Pizza with garlic infused olive oil, goat cheese from Jumpin’ Good Goat Dairy, mozzarella fior di latte and organic, locally raised Shitake mushrooms from Hazel Dell",
            'image' => "pz8.jpg"
        ]);

        DB::table('pizzas')->insert([
            'name' => "Supreme",
            'price' => 75000,
            'stock' => 30,
            'description' => "Pizza with premium cheese and high quality chicken from India.",
            'image' => "pz9.jpg"
        ]);

        DB::table('pizzas')->insert([
            'name' => "Italian Sausage",
            'price' => 100000,
            'stock' => 25,
            'description' => "San Marzano tomato sauce, fresh mozzarella fior di latte, fresh organic basil",
            'image' => "pz10.jpg"
        ]);
    }
}
