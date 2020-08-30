<?php

declare(strict_types=1);

namespace SMarT\LinkedIn\DataModel;

class ServiceRelationship
{
    const RELATIONSHIP_TYPE_OWNER = 'OWNER';
    const RELATIONSHIP_TYPE_CREATOR = 'CREATOR';
    const RELATIONSHIP_TYPE_GENERIC = 'GENERIC';

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $relationshipType;

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return ServiceRelationship
     */
    public function setIdentifier(string $identifier): ServiceRelationship
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationshipType(): string
    {
        return $this->relationshipType;
    }

    /**
     * @param string $relationshipType
     * @return ServiceRelationship
     */
    public function setRelationshipType(string $relationshipType): ServiceRelationship
    {
        $this->relationshipType = $relationshipType;

        return $this;
    }
}
