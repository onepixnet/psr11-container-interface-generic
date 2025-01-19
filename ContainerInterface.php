<?php

namespace Psr\Container;

/**
 * @template-covariant T
 */
interface ContainerInterface
{
    /**
     * @return T
     */
    public function get(string $id);

    public function has(string $id): bool;
}
