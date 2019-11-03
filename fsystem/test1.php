<?php
use PHPUnit\Framework\TestCase;

class testMetad extends TestCase{
    /**
     * @dataProvider additionProvider
     */
    public function testimt($mass,$rost,$expected){       //МЕТОД ИНДЕКСА МАССЫ ТЕЛА
	      $m=(boolean)$mass;
		  $r=$rost;
          $res=$m/($r*$r);
        $this->assertSame($expected,$res);
    }
    public function additionProvider(){
        return [
            [1.80,50,0.0004],
            [1.60,79,0.00016023073225445],
            [1.70,90,0.00012345679012346]
        ];

    }
}
/* РЕЗУЛЬТАТ ТЕСТА

function imt($mass,$rost){
        $res=$mass/($rost*$rost);
       return $res;
    }
     echo imt($mass,$rost);
	 
C:\OSPanel\domains\fsystem>phpunit test.php
PHPUnit 6.0.0 by Sebastian Bergmann and contributors.

...                                                                3 / 3 (100%)

Time: 129 ms, Memory: 4.00MB

OK (3 tests, 3 assertions)

C:\OSPanel\domains\fsystem>

*/
?>