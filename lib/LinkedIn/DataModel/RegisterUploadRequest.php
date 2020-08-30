<?php

declare(strict_types=1);

namespace SMarT\LinkedIn\DataModel;

class RegisterUploadRequest
{
    /**
     * @var string
     */
    private $owner;

    /**
     * @var string[]
     */
    private $recipes;

    /**
     * @var ServiceRelationship[]
     */
    private $serviceRelationships;

    /**
     * @var string[]
     */
    private $supportedUploadMechanism;

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     * @return RegisterUploadRequest
     */
    public function setOwner(string $owner): RegisterUploadRequest
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getRecipes(): array
    {
        return $this->recipes;
    }

    /**
     * @param string[] $recipes
     * @return RegisterUploadRequest
     */
    public function setRecipes(array $recipes): RegisterUploadRequest
    {
        $this->recipes = $recipes;

        return $this;
    }

    /**
     * @return ServiceRelationship[]
     */
    public function getServiceRelationships(): array
    {
        return $this->serviceRelationships;
    }

    /**
     * @param ServiceRelationship[] $serviceRelationships
     * @return RegisterUploadRequest
     */
    public function setServiceRelationships(array $serviceRelationships): RegisterUploadRequest
    {
        $this->serviceRelationships = $serviceRelationships;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getSupportedUploadMechanism(): array
    {
        return $this->supportedUploadMechanism;
    }

    /**
     * @param string[] $supportedUploadMechanism
     * @return RegisterUploadRequest
     */
    public function setSupportedUploadMechanism(array $supportedUploadMechanism): RegisterUploadRequest
    {
        $this->supportedUploadMechanism = $supportedUploadMechanism;

        return $this;
    }
}
