<?php
namespace BookUnited\Transformers;

interface CollectionTransformerInterface
{
    /**
     * @return array
     */
    public function transform(): array;
}
