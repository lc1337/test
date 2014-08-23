<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 23.8.2014
 * Time: 11:43
 */

namespace Database\Table;

use Database\Column\IColumn;


/**
 *
 * qweqwe
 * Interface ITable
 * @package Database\Table
 */
interface ITable
{
    /**
     * @return IColumn[]
     */
    public function getColumns();
} 