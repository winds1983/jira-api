<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue/{issueIdOrKey}/properties
 */
class IssueProperties extends AbstractJira
{
    
    /**
     * Get properties keys
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/properties
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue/{issueIdOrKey}/properties-getPropertiesKeys
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getPropertiesKeys(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/properties";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete property
     *
     * API:
     * DELETE /rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue/{issueIdOrKey}/properties-deleteProperty
     *
     * @param string $issueIdOrKey
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function deleteProperty(string $issueIdOrKey, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/properties/$propertyKey";

        return $this->request->delete($apiUrl);
    }

    /**
     * Set property
     *
     * API:
     * PUT /rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue/{issueIdOrKey}/properties-setProperty
     *
     * @param string $issueIdOrKey
     * @param string $propertyKey
     * @param array $data
     * @return false|mixed|null
     */
    public function setProperty(string $issueIdOrKey, string $propertyKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/properties/$propertyKey";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get property
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue/{issueIdOrKey}/properties-getProperty
     *
     * @param string $issueIdOrKey
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function getProperty(string $issueIdOrKey, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/properties/$propertyKey";

        return $this->request->get($apiUrl);
    }
}
