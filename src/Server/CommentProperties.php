<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/comment/{commentId}/properties
 */
class CommentProperties extends AbstractJira
{
    
    /**
     * Get properties keys
     *
     * API:
     * GET /rest/api/2/comment/{commentId}/properties
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/comment/{commentId}/properties-getPropertiesKeys
     *
     * @param int $commentId
     * @return false|mixed|null
     */
    public function getPropertiesKeys(int $commentId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/comment/$commentId/properties";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete property
     *
     * API:
     * DELETE /rest/api/2/comment/{commentId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/comment/{commentId}/properties-deleteProperty
     *
     * @param int $commentId
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function deleteProperty(int $commentId, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/comment/$commentId/properties/$propertyKey";

        return $this->request->delete($apiUrl);
    }

    /**
     * Set property
     *
     * API:
     * PUT /rest/api/2/comment/{commentId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/comment/{commentId}/properties-setProperty
     *
     * @param int $commentId
     * @param string $propertyKey
     * @param array $data
     * @return false|mixed|null
     */
    public function setProperty(int $commentId, string $propertyKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/comment/$commentId/properties/$propertyKey";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get property
     *
     * API:
     * GET /rest/api/2/comment/{commentId}/properties/{propertyKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/comment/{commentId}/properties-getProperty
     *
     * @param int $commentId
     * @param string $propertyKey
     * @return false|mixed|null
     */
    public function getProperty(int $commentId, string $propertyKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/comment/$commentId/properties/$propertyKey";

        return $this->request->get($apiUrl);
    }
}
