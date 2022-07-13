<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectIdOrKey}/properties
 */
class ProjectProperties extends AbstractJira
{
    
    /**
     * Get properties keys
     *
     * API:
     * GET /rest/api/2/project/{projectIdOrKey}/properties
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectIdOrKey}/properties-getPropertiesKeys
     *
     * @param string $projectIdOrKey
     * @return false|mixed|null
     */
    public function getPropertiesKeys(string $projectIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/properties";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete property
     *
     * API:
     * DELETE /rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectIdOrKey}/properties-deleteProperty
     *
     * @param string $projectIdOrKey
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function deleteProperty(string $projectIdOrKey, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/properties/$propertyKey";

        return $this->request->delete($apiUrl);
    }

    /**
     * Set property
     *
     * API:
     * PUT /rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectIdOrKey}/properties-setProperty
     *
     * @param string $projectIdOrKey
     * @param string $propertyKey
     * @param array $data
     * @return false|mixed|null
     */
    public function setProperty(string $projectIdOrKey, string $propertyKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/properties/$propertyKey";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get property
     *
     * API:
     * GET /rest/api/2/project/{projectIdOrKey}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/project/{projectIdOrKey}/properties-getProperty
     *
     * @param string $projectIdOrKey
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function getProperty(string $projectIdOrKey, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/project/$projectIdOrKey/properties/$propertyKey";

        return $this->request->get($apiUrl);
    }
}
