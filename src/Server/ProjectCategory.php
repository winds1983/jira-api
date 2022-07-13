<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/projectCategory
 */
class ProjectCategory extends AbstractJira
{
    
    /**
     * Get all project categories
     *
     * API:
     * GET /rest/api/2/projectCategory
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/projectCategory-getAllProjectCategories
     *
     * @return false|mixed|null
     */
    public function getAllProjectCategories()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/projectCategory";

        return $this->request->get($apiUrl);
    }

    /**
     * Create project category
     *
     * API:
     * POST /rest/api/2/projectCategory
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/projectCategory-createProjectCategory
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createProjectCategory(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/projectCategory";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get project category by id
     *
     * API:
     * GET /rest/api/2/projectCategory/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/projectCategory-getProjectCategoryById
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getProjectCategoryById(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/projectCategory/$id";

        return $this->request->get($apiUrl);
    }

    /**
     * Remove project category
     *
     * API:
     * DELETE /rest/api/2/projectCategory/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/projectCategory-removeProjectCategory
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function removeProjectCategory(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/projectCategory/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Update project category
     *
     * API:
     * PUT /rest/api/2/projectCategory/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/projectCategory-updateProjectCategory
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateProjectCategory(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/projectCategory/$id";

        return $this->request->put($apiUrl, $data);
    }
}
