<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::factory(10)->create();

        DB::table('products')->insert([
            'name'=>'Estée Lauder',
            'description'=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
             when an unknown printer took a galley of type and scrambled it to make a type specimen book",
            'price'=>'500',
            'stockQuantity'=>'5',
            'userId'=>'1',
        ]);
        DB::table('products')->insert([
            'name'=>'Loreal',
            'description'=>" It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum",
            'price'=>'1000',
            'stockQuantity'=>'2',
            'userId'=>'2',

        ]);
        DB::table('products')->insert([
            'name'=>'Maybeline',
            'description'=>"Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,",
            'price'=>'700',
            'stockQuantity'=>'3',
            'userId'=>'1',

        ]);
        DB::table('products')->insert([
            'name'=>'Revalon',
            'description'=>"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. ",
            'price'=>'800',
            'stockQuantity'=>'2',
            'userId'=>'1',

        ]);
        DB::table('products')->insert([
            'name'=>'Barry M',
            'description'=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.",
            'price'=>'300',
            'stockQuantity'=>'1',
            'userId'=>'3',

        ]);
    }
}
