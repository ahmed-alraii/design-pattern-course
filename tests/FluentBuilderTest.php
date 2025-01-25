<?php

namespace Tests;

use App\Structural\FluentBuilder\QueryBuilder;
use PHPUnit\Framework\TestCase;

class FluentBuilderTest extends TestCase
{


    public function test_can_get_sql_from_query_builder()
    {

        $queryBuilder = new QueryBuilder();
        $sql = $queryBuilder
            ->select(['name', 'email'])
            ->from('users', 'u')
            ->where(['id = 50', 'email = test@gmail.com'])
            ->getSql();
        $this->assertEquals('SELECT name , email FROM users AS u WHERE id = 50 AND email = test@gmail.com', $sql);

    }


}