<?php

namespace Hackathon\Translationstorage\Model;

class ValueRepositoryModel implements \Hackathon\Translationstorage\Api\ValueRepositoryInterface
{
    protected $valueResource;

    public function __construct(
        \Hackathon\Translationstorage\Model\Resource\Value $valueResource
    )
    {
        $this->valueResource = $valueResource;
    }

    /**
     * Save value data.
     */
    public function save(\Hackathon\Translationstorage\Api\Data\ValuesInterface $value)
    {
        $this->valueResource->save($value);
    }

    /**
     * Retrieve value data.
     */
    public function getById($valueId)
    {
        // @todo implement registry based on token

        return $this->valueResource->load($valueId);
    }

    /**
     * Delete value.
     */
    public function delete(\Hackathon\Translationstorage\Api\Data\ValuesInterface $value)
    {
        $this->valueResource->delete($value);
    }

    /**
     * Delete value by value ID.
     */
    public function deleteById($valueId)
    {
        return $this->valueResource->load($valueId)->delete();
    }
}