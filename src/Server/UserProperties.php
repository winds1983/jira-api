<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user/properties
 */
class UserProperties extends AbstractJira
{
    
    /**
     * Get properties keys
     *
     * API:
     * GET /rest/api/2/user/properties
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user/properties-getPropertiesKeys
     *
     * @return false|mixed|null
     */
    public function getPropertiesKeys()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/properties";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete property
     *
     * API:
     * DELETE /rest/api/2/user/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user/properties-deleteProperty
     *
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function deleteProperty(string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/properties/$propertyKey";

        return $this->request->delete($apiUrl);
    }

    /**
     * Set property
     *
     * API:
     * PUT /rest/api/2/user/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user/properties-setProperty
     *
     * @param string $propertyKey
     * @param array $data
     * @return false|mixed|null
     */
    public function setProperty(string $propertyKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/properties/$propertyKey";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get property
     *
     * API:
     * GET /rest/api/2/user/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user/properties-getProperty
     *
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function getProperty(string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/properties/$propertyKey";

        return $this->request->get($apiUrl);
    }
}
