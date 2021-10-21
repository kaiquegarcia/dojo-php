<?php

namespace Dojo\Example2;

class RFor
{
    private array $attributes;
    private array $callables = [];

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function __get($var)
    {
        return $this->attributes[$var] ?? null;
    }

    public function __set($var, $value)
    {
        $this->attributes[$var] = $value;
    }

    public function whileTrue(callable $condition): self
    {
        $this->callables['condition'] = $condition;
        return $this;
    }

    public function doThis(callable $action): self
    {
        $this->callables['action'] = $action;
        return $this;
    }

    public function andThen(callable $afterAction): self
    {
        $this->callables['afterAction'] = $afterAction;
        return $this;
    }

    public function run(): void
    {
        if (!$this->callables['condition']($this)) {
            return;
        }
        $this->callables['action']($this);
        $this->callables['afterAction']($this);
        $this->run();
    }
}
