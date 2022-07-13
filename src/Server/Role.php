<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/role
 */
class Role extends AbstractJira
{
    
    /**
     * Get project roles
     *
     * API:
     * GET /rest/api/2/role
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/role-getProjectRoles
     *
     * @return false|mixed|null
     */
    public function getProjectRoles()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/role";

        return $this->request->get($apiUrl);
    }

    /**
     * Create project role
     *
     * API:
     * POST /rest/api/2/role
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/role-createProjectRole
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createProjectRole(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/role";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get project roles by id
     *
     * API:
     * GET /rest/api/2/role/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/role-getProjectRolesById
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getProjectRolesById(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/role/$id";

        return $this->request->get($apiUrl);
    }

    /**
     * Partial update project role
     *
     * API:
     * POST /rest/api/2/role/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/role-partialUpdateProjectRole
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function partialUpdateProjectRole(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/role/$id";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Fully update project role
     *
     * API:
     * PUT /rest/api/2/role/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/role-fullyUpdateProjectRole
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function fullyUpdateProjectRole(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/role/$id";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete project role
     *
     * API:
     * DELETE /rest/api/2/role/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/role-deleteProjectRole
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteProjectRole(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/role/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get project role actors for role
     *
     * API:
     * GET /rest/api/2/role/{id}/actors
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/role-getProjectRoleActorsForRole
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getProjectRoleActorsForRole(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/role/$id/actors";

        return $this->request->get($apiUrl);
    }

    /**
     * Add project role actors to role
     *
     * API:
     * POST /rest/api/2/role/{id}/actors
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/role-addProjectRoleActorsToRole
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function addProjectRoleActorsToRole(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/role/$id/actors";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Delete project role actors from role
     *
     * API:
     * DELETE /rest/api/2/role/{id}/actors
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/role-deleteProjectRoleActorsFromRole
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteProjectRoleActorsFromRole(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/role/$id/actors";

        return $this->request->delete($apiUrl);
    }
}
