<?php

namespace Hackathon\Translationstorage\Api\Data;

interface ValuesRepositoryInterface
{
    /**
     * Create or update a data
     */
    public function save(Hackathon\Translationstorage\Api\Data\TestInterface $test);

    public function getById($testId);

    /**
     * Delete test.
     */
    public function delete(Hackathon\Translationstorage\Api\Data\TestInterface $test);

    /**
     * Delete test by ID.
     */
    public function deleteById($testId);
}