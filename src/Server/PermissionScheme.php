<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme
 */
class PermissionScheme extends AbstractJira
{
    
    /**
     * Get permission schemes
     *
     * API:
     * GET /rest/api/2/permissionscheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme-getPermissionSchemes
     *
     * @return false|mixed|null
     */
    public function getPermissionSchemes()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissionscheme";

        return $this->request->get($apiUrl);
    }

    /**
     * Create permission scheme
     *
     * API:
     * POST /rest/api/2/permissionscheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme-createPermissionScheme
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createPermissionScheme(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissionscheme";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get scheme attribute
     *
     * API:
     * GET /rest/api/2/permissionscheme/{permissionSchemeId}/attribute/{attributeKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme-getSchemeAttribute
     *
     * @param int $permissionSchemeId
     * @param string $attributeKey
     * @return false|mixed|null
     */
    public function getSchemeAttribute(int $permissionSchemeId, string $attributeKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissionscheme/$permissionSchemeId/attribute/$attributeKey";

        return $this->request->get($apiUrl);
    }

    /**
     * Set scheme attribute
     *
     * API:
     * PUT /rest/api/2/permissionscheme/{permissionSchemeId}/attribute/{key}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme-setSchemeAttribute
     *
     * @param int $permissionSchemeId
     * @param string $key
     * @param array $data
     * @return false|mixed|null
     */
    public function setSchemeAttribute(int $permissionSchemeId, string $key, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissionscheme/$permissionSchemeId/attribute/$key";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get permission scheme
     *
     * API:
     * GET /rest/api/2/permissionscheme/{schemeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme-getPermissionScheme
     *
     * @param int $schemeId
     * @return false|mixed|null
     */
    public function getPermissionScheme(int $schemeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissionscheme/$schemeId";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete permission scheme
     *
     * API:
     * DELETE /rest/api/2/permissionscheme/{schemeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme-deletePermissionScheme
     *
     * @param int $schemeId
     * @return false|mixed|null
     */
    public function deletePermissionScheme(int $schemeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissionscheme/$schemeId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Update permission scheme
     *
     * API:
     * PUT /rest/api/2/permissionscheme/{schemeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme-updatePermissionScheme
     *
     * @param int $schemeId
     * @param array $data
     * @return false|mixed|null
     */
    public function updatePermissionScheme(int $schemeId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissionscheme/$schemeId";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get permission scheme grants
     *
     * API:
     * GET /rest/api/2/permissionscheme/{schemeId}/permission
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme-getPermissionSchemeGrants
     *
     * @param int $schemeId
     * @return false|mixed|null
     */
    public function getPermissionSchemeGrants(int $schemeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissionscheme/$schemeId/permission";

        return $this->request->get($apiUrl);
    }

    /**
     * Create permission grant
     *
     * API:
     * POST /rest/api/2/permissionscheme/{schemeId}/permission
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme-createPermissionGrant
     *
     * @param int $schemeId
     * @param array $data
     * @return false|mixed|null
     */
    public function createPermissionGrant(int $schemeId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissionscheme/$schemeId/permission";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Delete permission scheme entity
     *
     * API:
     * DELETE /rest/api/2/permissionscheme/{schemeId}/permission/{permissionId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme-deletePermissionSchemeEntity
     *
     * @param int $schemeId
     * @param int $permissionId
     * @return false|mixed|null
     */
    public function deletePermissionSchemeEntity(int $schemeId, int $permissionId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissionscheme/$schemeId/permission/$permissionId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get permission scheme grant
     *
     * API:
     * GET /rest/api/2/permissionscheme/{schemeId}/permission/{permissionId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/permissionscheme-getPermissionSchemeGrant
     *
     * @param int $schemeId
     * @param int $permissionId
     * @return false|mixed|null
     */
    public function getPermissionSchemeGrant(int $schemeId, int $permissionId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/permissionscheme/$schemeId/permission/$permissionId";

        return $this->request->get($apiUrl);
    }
}
