<?php
/**
 * Created by PhpStorm.
 * User: dyh
 * Date: 17-11-14
 * Time: 下午10:00
 */

namespace Dyh;

use PHPUnit\Framework\TestCase;

class ArraysTest extends TestCase
{
    use Arrays;

    public function testSort()
    {
        $arr = [
            [
                'name' => 'dyh',
                'age'  => '18',
            ],
        ];
        $this->arraySort($arr, 'age');
        self::assertEquals(
            [
                [
                    'name' => 'dyh',
                    'age'  => '18',
                ]
            ],
            $arr);
    }
}
