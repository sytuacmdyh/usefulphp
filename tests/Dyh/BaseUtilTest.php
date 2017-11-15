<?php
/**
 * Created by PhpStorm.
 * User: dyh
 * Date: 17-11-15
 * Time: 下午7:54
 */

namespace Dyh;

use PHPUnit\Framework\TestCase;

class BaseUtilTest extends TestCase
{
    public function testSortArray()
    {
        $arr = [
            [
                'name' => 'dyh',
                'age'  => '18',
            ],
            [
                'name' => 'dyh1',
                'age'  => '11',
            ],
            [
                'name' => 'dyh2',
                'age'  => '180',
            ],
            [
                'name' => 'dyh3',
                'age'  => '181',
            ],
        ];
        $obj = new BaseUtil();
        $obj->arraySort($arr, 'age','SORT_ASC');
        $this->assertEquals([
            [
                'name' => 'dyh1',
                'age'  => '11',
            ],
            [
                'name' => 'dyh',
                'age'  => '18',
            ],
            [
                'name' => 'dyh2',
                'age'  => '180',
            ],
            [
                'name' => 'dyh3',
                'age'  => '181',
            ],
        ], $arr);
    }
}
