<?php

class ProductSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('products')->insert(
			array(
					'name' => 'product-one',
					'price' => 90,
					'image' => "http://placehold.it/200x200",
					'info' => "infomartion of product-one"
			));
		DB::table('products')->insert(
			array(
					'name' => 'product-two',
					'price' => 100,
					'image' => "http://placehold.it/200x200",
					'info' => "infomartion of product-two"
			));
		DB::table('products')->insert(
			array(
					'name' => 'product-three',
					'price' => 120,
					'image' => "http://placehold.it/200x200",
					'info' => "infomartion of product-three"
			));
		DB::table('products')->insert(
			array(
					'name' => 'product-four',
					'price' => 250,
					'image' => "http://placehold.it/200x200",
					'info' => "infomartion of product-four"
			));
		DB::table('products')->insert(
			array(
					'name' => 'product-five',
					'price' => 240,
					'image' => "http://placehold.it/200x200",
					'info' => "infomartion of product-five"
			));
		DB::table('products')->insert(
			array(
					'name' => 'product-six',
					'price' => 200,
					'image' => "http://placehold.it/200x200",
					'info' => "infomartion of product-six"
			));
		DB::table('products')->insert(
			array(
					'name' => 'product-seven',
					'price' => 170,
					'image' => "http://placehold.it/200x200",
					'info' => "infomartion of product-seven"
			));
		DB::table('products')->insert(
			array(
					'name' => 'product-eight',
					'price' => 100,
					'image' => "http://placehold.it/200x200",
					'info' => "infomartion of product-eight"
			));
	}

}
