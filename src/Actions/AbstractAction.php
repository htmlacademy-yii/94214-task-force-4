<?php
namespace Taskforce\Actions;

abstract class AbstractAction
{
    protected string $name;
    protected string $title;

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    abstract public function checkRight(int $idCustomer, int $idExecutor, int $idCurrentUser): bool;
}
