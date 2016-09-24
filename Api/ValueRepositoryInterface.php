<?php

namespace Hackathon\Translationstorage\Api\Data;

interface ValueRepositoryInterface
{
    /**
     * Create or update a value
     */
    public function save(Hackathon\Translationstorage\Api\Data\ValuesInterface $value);

    public function getById($valueId);

    /**
     * Delete value.
     */
    public function delete(Hackathon\Translationstorage\Api\Data\ValuesInterface $value);

    /**
     * Delete value by ID.
     */
    public function deleteById($valueId);
}