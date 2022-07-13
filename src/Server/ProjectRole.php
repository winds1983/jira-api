<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectIdOrKey}/role
 */
class ProjectRole extends AbstractJira
{
    
    /**
     * Get project roles
     *
     * API:
     * GET /rest/api/2/project/{projectIdOrKey}/role
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectIdOrKey}/role-getProjectRoles
     *
     * @param string $projectIdOrKey
     * @return false|mixed|null
     */
    public function getProjectRoles(string $projectIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/role";

        return $this->request->get($apiUrl);
    }

    /**
     * Get project role
     *
     * API:
     * GET /rest/api/2/project/{projectIdOrKey}/role/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectIdOrKey}/role-getProjectRole
     *
     * @param string $projectIdOrKey
     * @param int $id
     * @return false|mixed|null
     */
    public function getProjectRole(string $projectIdOrKey, int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/role/$id";

        return $this->request->get($apiUrl);
    }

    /**
     * Set actors
     *
     * API:
     * PUT /rest/api/2/project/{projectIdOrKey}/role/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectIdOrKey}/role-setActors
     *
     * @param string $projectIdOrKey
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function setActors(string $projectIdOrKey, int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/role/$id";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Add actor users
     *
     * API:
     * POST /rest/api/2/project/{projectIdOrKey}/role/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectIdOrKey}/role-addActorUsers
     *
     * @param string $projectIdOrKey
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function addActorUsers(string $projectIdOrKey, int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/role/$id";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Delete actor
     *
     * API:
     * DELETE /rest/api/2/project/{projectIdOrKey}/role/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectIdOrKey}/role-deleteActor
     *
     * @param string $projectIdOrKey
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteActor(string $projectIdOrKey, int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/role/$id";

        return $this->request->delete($apiUrl);
    }
}
