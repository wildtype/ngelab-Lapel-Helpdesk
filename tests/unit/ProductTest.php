<?php


class ProductTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
        $product = new App\Product;
        $product->name = "Nama produk ada duluan";
        $product->code = "NP05";
        $product->description = "Produk udah ada duluan berikutnya ngga boleh sama";
        $product->save();
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {

    }

    public function testInsert()
    {
        $product = new App\Product;
        $product->name = "Nama produk tester";
        $product->code = "NP01";
        $product->description = "Produk dummy aja buat ngetes";
        $product->save();
        $this->tester->seeRecord('products', [
            'code' => 'NP01',
        ]);
    }

    public function testWontInsert()
    {   
        try {
            $product = new App\Product;
            $product->name = "Nama produk ada duluan";
            $product->code = "NP05";
            $product->description = "Produk udah ada duluan berikutnya ngga boleh sama lagi";
            $product->save();
            $this->fail('Failed: inserted');
        } catch(Illuminate\Database\QueryException $e) {
            //
        } catch(Exception $e) {
            $this->fail('Wrong Exception' . $e);
        }
    }
}
