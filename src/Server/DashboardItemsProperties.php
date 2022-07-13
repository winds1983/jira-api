<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/dashboard/{dashboardId}/items/{itemId}/properties
 */
class DashboardItemsProperties extends AbstractJira
{
    
    /**
     * Get properties keys
     *
     * API:
     * GET /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/dashboard/{dashboardId}/items/{itemId}/properties-getPropertiesKeys
     *
     * @param int $dashboardId
     * @param int $itemId
     * @return false|mixed|null
     */
    public function getPropertiesKeys(int $dashboardId, int $itemId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/dashboard/$dashboardId/items/$itemId/properties";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete property
     *
     * API:
     * DELETE /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/dashboard/{dashboardId}/items/{itemId}/properties-deleteProperty
     *
     * @param int $dashboardId
     * @param int $itemId
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function deleteProperty(int $dashboardId, int $itemId, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/dashboard/$dashboardId/items/$itemId/properties/$propertyKey";

        return $this->request->delete($apiUrl);
    }

    /**
     * Set property
     *
     * API:
     * PUT /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/dashboard/{dashboardId}/items/{itemId}/properties-setProperty
     *
     * @param int $dashboardId
     * @param int $itemId
     * @param string $propertyKey
     * @param array $data
     * @return false|mixed|null
     */
    public function setProperty(int $dashboardId, int $itemId, string $propertyKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/dashboard/$dashboardId/items/$itemId/properties/$propertyKey";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get property
     *
     * API:
     * GET /rest/api/2/dashboard/{dashboardId}/items/{itemId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/dashboard/{dashboardId}/items/{itemId}/properties-getProperty
     *
     * @param int $dashboardId
     * @param int $itemId
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function getProperty(int $dashboardId, int $itemId, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/dashboard/$dashboardId/items/$itemId/properties/$propertyKey";

        return $this->request->get($apiUrl);
    }
}
