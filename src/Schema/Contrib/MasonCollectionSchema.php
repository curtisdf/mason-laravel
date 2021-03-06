<?php
namespace Phonedotcom\Mason\Schema\Contrib;

use Phonedotcom\Mason\Schema\DocumentSchema;
use Phonedotcom\Mason\Schema\JsonSchema;

class MasonCollectionSchema extends DocumentSchema
{
    public function __construct($properties = [])
    {
        parent::__construct($properties);

        $this->setRequiredProperty('total', 'integer', ['title' => 'Total number of items in the result set']);
    }

    /**
     * @param array|JsonSchema $schema
     * @return $this
     */
    public function setItemSchema($schema)
    {
        return $this->setRequiredProperty('items', 'array', ['items' => $schema]);
    }
}
