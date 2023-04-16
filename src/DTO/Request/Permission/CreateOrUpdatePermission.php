<?php

declare(strict_types=1);

namespace Mailtrap\DTO\Request\Permission;

/**
 * Class CreateOrUpdatePermission
 */
final class CreateOrUpdatePermission implements PermissionInterface
{
    public const TYPE_ACCOUNT = 'account';
    public const TYPE_BILLING = 'billing';
    public const TYPE_PROJECT = 'project';
    public const TYPE_INBOX = 'inbox';
    public const TYPE_MAILSEND_DOMAIN = 'mailsend_domain';

    private string $resourceId;
    private string $resourceType;
    private string $accessLevel;

    /**
     * @param string|int $resourceId
     * @param string     $resourceType
     * @param string|int $accessLevel
     */
    public function __construct($resourceId, string $resourceType, $accessLevel)
    {
        $this->resourceId = (string) $resourceId;
        $this->resourceType = $resourceType;
        $this->accessLevel = (string) $accessLevel;
    }

    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    public function getResourceType(): string
    {
        return $this->resourceType;
    }

    public function getAccessLevel(): string
    {
        return $this->accessLevel;
    }

    public function toArray(): array
    {
        return [
            'resource_id' => $this->getResourceId(),
            'resource_type' => $this->getResourceType(),
            'access_level' => $this->getAccessLevel(),
        ];
    }
}
