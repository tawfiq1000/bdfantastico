<?php

use Illuminate\Database\Seeder;
use App\Product;
class Products_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'name'=>'macbook pro',
        	"slug"=>'macbook-pro',
        	'detail'=>'15 inch,1tb SSD,16GB RAM',
        	'price'=>90000,
        	'description'=>'"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        	

        ]);
        Product::create([
        	'name'=>'HP laptop',
        	"slug"=>'HP-laptop',
        	'detail'=>'17 inch,2tb SSD,32GB RAM',
        	'price'=>65000,
        	'description'=>'"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        	

        ]);
        Product::create([
        	'name'=>'Lenevo laptop',
        	"slug"=>'Lenevo-laptop',
        	'detail'=>'17 inch,2tb SSD,32GB RAM',
        	'price'=>50000,
        	'description'=>'"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        	

        ]);
        Product::create([
        	'name'=>'DELL laptop',
        	"slug"=>'DELL-laptop',
        	'detail'=>'19 inch,4tb SSD,64GB RAM',
        	'price'=>90000,
        	'description'=>'"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        	

        ]);
        Product::create([
        	'name'=>'DELL laptop2',
        	"slug"=>'DELL-laptop2',
        	'detail'=>'17 inch,4tb SSD,64GB RAM',
        	'price'=>85000,
        	'description'=>'"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        	

        ]);
        Product::create([
        	'name'=>'Lenevo laptop2',
        	"slug"=>'Lenevo-laptop2',
        	'detail'=>'19 inch,2tb SSD,32GB RAM',
        	'price'=>60000,
        	'description'=>'"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        	

        ]);
        Product::create([
        	'name'=>'macbook Air',
        	"slug"=>'macbook-Air',
        	'detail'=>'15 inch,1tb SSD,16GB RAM',
        	'price'=>85000,
        	'description'=>'"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        	

        ]);
        Product::create([
        	'name'=>'Acer laptop2',
        	"slug"=>'Acer-laptop2',
        	'detail'=>'19 inch,2tb SSD,32GB RAM',
        	'price'=>60000,
        	'description'=>'"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        	

        ]);
        Product::create([
        	'name'=>'Acer laptop',
        	"slug"=>'Acer-laptop',
        	'detail'=>'17 inch,2tb SSD,32GB RAM',
        	'price'=>55000,
        	'description'=>'"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        	

        ]);
        Product::create([
        	'name'=>'Fujitsu laptop',
        	"slug"=>'Fujitsu-laptop',
        	'detail'=>'17 inch,2tb SSD,32GB RAM',
        	'price'=>70000,
        	'description'=>'"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        	

        ]);
        Product::create([
        	'name'=>'Fujitsu laptop2',
        	"slug"=>'Fujitsu-laptop2',
        	'detail'=>'19 inch,2tb SSD,32GB RAM',
        	'price'=>80000,
        	'description'=>'"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
        	

        ]);



    }
}
