<?php

namespace Hive\Jira\Agile;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint/{sprintId}/properties
 */
class SprintProperties extends AbstractJira
{
    
    /**
     * Get properties keys
     *
     * API:
     * GET /rest/agile/1.0/sprint/{sprintId}/properties
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint/{sprintId}/properties-getPropertiesKeys
     *
     * @param int $sprintId
     * @return false|mixed|null
     */
    public function getPropertiesKeys(int $sprintId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint/$sprintId/properties";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete property
     *
     * API:
     * DELETE /rest/agile/1.0/sprint/{sprintId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint/{sprintId}/properties-deleteProperty
     *
     * @param int $sprintId
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function deleteProperty(int $sprintId, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint/$sprintId/properties/$propertyKey";

        return $this->request->delete($apiUrl);
    }

    /**
     * Set property
     *
     * API:
     * PUT /rest/agile/1.0/sprint/{sprintId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint/{sprintId}/properties-setProperty
     *
     * @param int $sprintId
     * @param string $propertyKey
     * @param array $data
     * @return false|mixed|null
     */
    public function setProperty(int $sprintId, string $propertyKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint/$sprintId/properties/$propertyKey";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get property
     *
     * API:
     * GET /rest/agile/1.0/sprint/{sprintId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/sprint/{sprintId}/properties-getProperty
     *
     * @param int $sprintId
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function getProperty(int $sprintId, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/sprint/$sprintId/properties/$propertyKey";

        return $this->request->get($apiUrl);
    }
}
