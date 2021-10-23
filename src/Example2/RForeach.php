<?php
namespace Dojo\Example2;

class RForeach
{
    private array $elements;
    private array $callables;

    public function __construct(iterable $elements)
    {
        $this->elements = (array) $elements;
    }

    public function getElements(): array
    {
        return $this->elements;
    }

    public function doThis(callable $action): self
    {
        $this->callables['action'] = $action;
        return $this;
    }

    public function run(): void
    {
        $keys = array_keys($this->elements);
        $action = $this->callables['action'];
        $for = new RFor([
            'index' => 0,
            'key' => $keys[0],
        ]);
        $for->whileTrue(fn ($loop) => $loop->index < count($keys))
            ->doThis(fn ($loop) => $action($this->elements[$loop->key]))
            ->andThen(fn ($loop) => $loop->key = $keys[++$loop->index % count($keys)]);
        $for->run();
    }
}
