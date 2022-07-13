<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project
 */
class Project extends AbstractJira
{
    
    /**
     * Get all projects
     *
     * API:
     * GET /rest/api/2/project
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-getAllProjects
     *
     * @return false|mixed|null
     */
    public function getAllProjects()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project";

        return $this->request->get($apiUrl);
    }

    /**
     * Create project
     *
     * API:
     * POST /rest/api/2/project
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-createProject
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createProject(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get project
     *
     * API:
     * GET /rest/api/2/project/{projectIdOrKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-getProject
     *
     * @param string $projectIdOrKey
     * @return false|mixed|null
     */
    public function getProject(string $projectIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey";

        return $this->request->get($apiUrl);
    }

    /**
     * Update project
     *
     * API:
     * PUT /rest/api/2/project/{projectIdOrKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-updateProject
     *
     * @param string $projectIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function updateProject(string $projectIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete project
     *
     * API:
     * DELETE /rest/api/2/project/{projectIdOrKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-deleteProject
     *
     * @param string $projectIdOrKey
     * @return false|mixed|null
     */
    public function deleteProject(string $projectIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey";

        return $this->request->delete($apiUrl);
    }

    /**
     * Archive project
     *
     * API:
     * PUT /rest/api/2/project/{projectIdOrKey}/archive
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-archiveProject
     *
     * @param string $projectIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function archiveProject(string $projectIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/archive";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Create avatar from temporary
     *
     * API:
     * POST /rest/api/2/project/{projectIdOrKey}/avatar
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-createAvatarFromTemporary
     *
     * @param string $projectIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function createAvatarFromTemporary(string $projectIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/avatar";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Update project avatar
     *
     * API:
     * PUT /rest/api/2/project/{projectIdOrKey}/avatar
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-updateProjectAvatar
     *
     * @param string $projectIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function updateProjectAvatar(string $projectIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/avatar";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete avatar
     *
     * API:
     * DELETE /rest/api/2/project/{projectIdOrKey}/avatar/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-deleteAvatar
     *
     * @param string $projectIdOrKey
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteAvatar(string $projectIdOrKey, int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/avatar/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Store temporary avatar
     *
     * API:
     * POST /rest/api/2/project/{projectIdOrKey}/avatar/temporary
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-storeTemporaryAvatar
     *
     * @param string $projectIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function storeTemporaryAvatar(string $projectIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/avatar/temporary";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Store temporary avatar using multi part
     *
     * API:
     * POST /rest/api/2/project/{projectIdOrKey}/avatar/temporary
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-storeTemporaryAvatarUsingMultiPart
     *
     * @param string $projectIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function storeTemporaryAvatarUsingMultiPart(string $projectIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/avatar/temporary";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get all avatars
     *
     * API:
     * GET /rest/api/2/project/{projectIdOrKey}/avatars
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-getAllAvatars
     *
     * @param string $projectIdOrKey
     * @return false|mixed|null
     */
    public function getAllAvatars(string $projectIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/avatars";

        return $this->request->get($apiUrl);
    }

    /**
     * Get project components
     *
     * API:
     * GET /rest/api/2/project/{projectIdOrKey}/components
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-getProjectComponents
     *
     * @param string $projectIdOrKey
     * @return false|mixed|null
     */
    public function getProjectComponents(string $projectIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/components";

        return $this->request->get($apiUrl);
    }

    /**
     * Restore project
     *
     * API:
     * PUT /rest/api/2/project/{projectIdOrKey}/restore
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-restoreProject
     *
     * @param string $projectIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function restoreProject(string $projectIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/restore";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get all statuses
     *
     * API:
     * GET /rest/api/2/project/{projectIdOrKey}/statuses
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-getAllStatuses
     *
     * @param string $projectIdOrKey
     * @return false|mixed|null
     */
    public function getAllStatuses(string $projectIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/statuses";

        return $this->request->get($apiUrl);
    }

    /**
     * Update project type
     *
     * API:
     * PUT /rest/api/2/project/{projectIdOrKey}/type/{newProjectTypeKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-updateProjectType
     *
     * @param string $projectIdOrKey
     * @param string $newProjectTypeKey
     * @param array $data
     * @return false|mixed|null
     */
    public function updateProjectType(string $projectIdOrKey, string $newProjectTypeKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/type/$newProjectTypeKey";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get project versions paginated
     *
     * API:
     * GET /rest/api/2/project/{projectIdOrKey}/version
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-getProjectVersionsPaginated
     *
     * @param string $projectIdOrKey
     * @return false|mixed|null
     */
    public function getProjectVersionsPaginated(string $projectIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/version";

        return $this->request->get($apiUrl);
    }

    /**
     * Get project versions
     *
     * API:
     * GET /rest/api/2/project/{projectIdOrKey}/versions
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project-getProjectVersions
     *
     * @param string $projectIdOrKey
     * @return false|mixed|null
     */
    public function getProjectVersions(string $projectIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/versions";

        return $this->request->get($apiUrl);
    }
}
