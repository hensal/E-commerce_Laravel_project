<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Product([
            'imagePath' => 'http://t3.gstatic.com/images?q=tbn:ANd9GcSn876Py_Iq_kwB9DT1Vnq59yECDDLgdCkvSzDidgR-0CF6qHcs',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child.',
            'price' => 10
        ]);
       $product->save();

       $product = new \App\Product([
        'imagePath' => 'http://t3.gstatic.com/images?q=tbn:ANd9GcSn876Py_Iq_kwB9DT1Vnq59yECDDLgdCkvSzDidgR-0CF6qHcs',
        'title' => 'Harry Potter',
        'description' => 'Super cool - at least as a child.',
        'price' => 10
    ]);
   $product->save();

   $product = new \App\Product([
    'imagePath' => 'http://t3.gstatic.com/images?q=tbn:ANd9GcSn876Py_Iq_kwB9DT1Vnq59yECDDLgdCkvSzDidgR-0CF6qHcs',
    'title' => 'Harry Potter',
    'description' => 'Super cool - at least as a child.',
    'price' => 10
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'http://t3.gstatic.com/images?q=tbn:ANd9GcSn876Py_Iq_kwB9DT1Vnq59yECDDLgdCkvSzDidgR-0CF6qHcs',
    'title' => 'Harry Potter',
    'description' => 'Super cool - at least as a child.',
    'price' => 10
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'http://t3.gstatic.com/images?q=tbn:ANd9GcSn876Py_Iq_kwB9DT1Vnq59yECDDLgdCkvSzDidgR-0CF6qHcs',
    'title' => 'Harry Potter',
    'description' => 'Super cool - at least as a child.',
    'price' => 10
]);
$product->save();
    }
}
