<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype/{issueTypeId}/properties
 */
class IssuetypeProperties extends AbstractJira
{
    
    /**
     * Get property keys
     *
     * API:
     * GET /rest/api/2/issuetype/{issueTypeId}/properties
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype/{issueTypeId}/properties-getPropertyKeys
     *
     * @param int $issueTypeId
     * @return false|mixed|null
     */
    public function getPropertyKeys(int $issueTypeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype/$issueTypeId/properties";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete property
     *
     * API:
     * DELETE /rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype/{issueTypeId}/properties-deleteProperty
     *
     * @param int $issueTypeId
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function deleteProperty(int $issueTypeId, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype/$issueTypeId/properties/$propertyKey";

        return $this->request->delete($apiUrl);
    }

    /**
     * Set property
     *
     * API:
     * PUT /rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype/{issueTypeId}/properties-setProperty
     *
     * @param int $issueTypeId
     * @param string $propertyKey
     * @param array $data
     * @return false|mixed|null
     */
    public function setProperty(int $issueTypeId, string $propertyKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype/$issueTypeId/properties/$propertyKey";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get property
     *
     * API:
     * GET /rest/api/2/issuetype/{issueTypeId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype/{issueTypeId}/properties-getProperty
     *
     * @param int $issueTypeId
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function getProperty(int $issueTypeId, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype/$issueTypeId/properties/$propertyKey";

        return $this->request->get($apiUrl);
    }
}
