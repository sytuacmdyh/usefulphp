<?php
namespace Dyh;

trait Arrays
{
    /**
     * 二维数组根据字段进行排序
     *
     * @param array $array 需要排序的数组
     * @param string $field 排序的字段
     * @param string $sort 排序顺序标志 SORT_DESC 降序；SORT_ASC 升序
     * @return mixed
     */
    public function arraySort(&$array, $field, $sort = 'SORT_DESC')
    {
        $arrSort = array();
        foreach ($array as $uniqid => $row) {
            $arrSort[$field][$uniqid] = $row[$field];
        }
        array_multisort($arrSort[$field], constant($sort), $array);
        return $array;
    }
}