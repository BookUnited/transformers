<?php

namespace BookUnited\Transformers;

use Doctrine\Common\Collections\Collection;

class CollectionTransformer implements CollectionTransformerInterface
{
    /** @var Collection */
    protected $collection;

    /** @var TransformerInterface */
    protected $transformer;

    /**
     * @param Collection $collection
     * @param TransformerInterface $transformer
     */
    public function __construct(
        Collection $collection,
        TransformerInterface $transformer
    )
    {
        $this->collection = $collection;
        $this->transformer = $transformer;
    }

    /**
     * @inheritdoc
     */
    public function transform(): array
    {
        return $this->collection->map(function ($object) {
            return $this->transformer->transform($object);
        })->toArray();
    }
}
