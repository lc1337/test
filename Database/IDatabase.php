<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 23.8.2014
 * Time: 11:45
 */

namespace Database;

use Database\Table\ITable;


/**
 * Interface IDatabase
 * @package Database
 */
interface IDatabase
{
    /**
     * @return ITable[]
     */
    function getTables();
} 