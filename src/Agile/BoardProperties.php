<?php

namespace Hive\Jira\Agile;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/properties
 */
class BoardProperties extends AbstractJira
{
    
    /**
     * Get properties keys
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/properties
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/properties-getPropertiesKeys
     *
     * @param int $boardId
     * @return false|mixed|null
     */
    public function getPropertiesKeys(int $boardId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/properties";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete property
     *
     * API:
     * DELETE /rest/agile/1.0/board/{boardId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/properties-deleteProperty
     *
     * @param int $boardId
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function deleteProperty(int $boardId, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/properties/$propertyKey";

        return $this->request->delete($apiUrl);
    }

    /**
     * Set property
     *
     * API:
     * PUT /rest/agile/1.0/board/{boardId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/properties-setProperty
     *
     * @param int $boardId
     * @param string $propertyKey
     * @param array $data
     * @return false|mixed|null
     */
    public function setProperty(int $boardId, string $propertyKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/properties/$propertyKey";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get property
     *
     * API:
     * GET /rest/agile/1.0/board/{boardId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/jira-software/REST/7.3.1/#agile/1.0/board/{boardId}/properties-getProperty
     *
     * @param int $boardId
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function getProperty(int $boardId, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/agile/1.0/board/$boardId/properties/$propertyKey";

        return $this->request->get($apiUrl);
    }
}
