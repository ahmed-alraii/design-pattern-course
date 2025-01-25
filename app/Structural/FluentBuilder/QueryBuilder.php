<?php

namespace App\Structural\FluentBuilder;

class QueryBuilder implements QueryBuilderInterface
{

    private array $fields;
    private string $table;
    private string $alias;
    private array $conditions;


    public function select(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function from(string $table, string $alias): self
    {
        $this->table = $table;
        $this->alias = $alias;
        return $this;
    }

    public function where(array $conditions): self
    {
        $this->conditions = $conditions;
        return $this;
    }

    public function getSql(): string
    {
        $fields = implode(' , ', $this->fields);
        $conditions = implode(' AND ', $this->conditions);
        return "SELECT $fields FROM $this->table AS $this->alias WHERE $conditions";
    }
}