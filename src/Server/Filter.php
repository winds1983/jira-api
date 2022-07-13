<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter
 */
class Filter extends AbstractJira
{
    
    /**
     * Create filter
     *
     * API:
     * POST /rest/api/2/filter
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-createFilter
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createFilter(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get filter
     *
     * API:
     * GET /rest/api/2/filter/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-getFilter
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getFilter(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/$id";

        return $this->request->get($apiUrl);
    }

    /**
     * Edit filter
     *
     * API:
     * PUT /rest/api/2/filter/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-editFilter
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function editFilter(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/$id";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete filter
     *
     * API:
     * DELETE /rest/api/2/filter/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-deleteFilter
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteFilter(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Default columns
     *
     * API:
     * GET /rest/api/2/filter/{id}/columns
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-defaultColumns
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function defaultColumns(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/$id/columns";

        return $this->request->get($apiUrl);
    }

    /**
     * Set columns
     *
     * API:
     * PUT /rest/api/2/filter/{id}/columns
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-setColumns
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function setColumns(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/$id/columns";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Reset columns
     *
     * API:
     * DELETE /rest/api/2/filter/{id}/columns
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-resetColumns
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function resetColumns(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/$id/columns";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get share permissions
     *
     * API:
     * GET /rest/api/2/filter/{id}/permission
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-getSharePermissions
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getSharePermissions(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/$id/permission";

        return $this->request->get($apiUrl);
    }

    /**
     * Add share permission
     *
     * API:
     * POST /rest/api/2/filter/{id}/permission
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-addSharePermission
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function addSharePermission(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/$id/permission";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get share permission
     *
     * API:
     * GET /rest/api/2/filter/{id}/permission/{permissionId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-getSharePermission
     *
     * @param int $id
     * @param int $permissionId
     * @return false|mixed|null
     */
    public function getSharePermission(int $id, int $permissionId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/$id/permission/$permissionId";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete share permission
     *
     * API:
     * DELETE /rest/api/2/filter/{id}/permission/{permission-id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-deleteSharePermission
     *
     * @param int $id
     * @param int $permissionId
     * @return false|mixed|null
     */
    public function deleteSharePermission(int $id, int $permissionId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/$id/permission/$permission-id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get default share scope
     *
     * API:
     * GET /rest/api/2/filter/defaultShareScope
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-getDefaultShareScope
     *
     * @return false|mixed|null
     */
    public function getDefaultShareScope()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/defaultShareScope";

        return $this->request->get($apiUrl);
    }

    /**
     * Set default share scope
     *
     * API:
     * PUT /rest/api/2/filter/defaultShareScope
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-setDefaultShareScope
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function setDefaultShareScope(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/defaultShareScope";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get favourite filters
     *
     * API:
     * GET /rest/api/2/filter/favourite
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/filter-getFavouriteFilters
     *
     * @return false|mixed|null
     */
    public function getFavouriteFilters()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/filter/favourite";

        return $this->request->get($apiUrl);
    }
}
