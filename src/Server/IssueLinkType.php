<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issueLinkType
 */
class IssueLinkType extends AbstractJira
{
    
    /**
     * Get issue link types
     *
     * API:
     * GET /rest/api/2/issueLinkType
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issueLinkType-getIssueLinkTypes
     *
     * @return false|mixed|null
     */
    public function getIssueLinkTypes()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issueLinkType";

        return $this->request->get($apiUrl);
    }

    /**
     * Create issue link type
     *
     * API:
     * POST /rest/api/2/issueLinkType
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issueLinkType-createIssueLinkType
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createIssueLinkType(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issueLinkType";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get issue link type
     *
     * API:
     * GET /rest/api/2/issueLinkType/{issueLinkTypeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issueLinkType-getIssueLinkType
     *
     * @param int $issueLinkTypeId
     * @return false|mixed|null
     */
    public function getIssueLinkType(int $issueLinkTypeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issueLinkType/$issueLinkTypeId";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete issue link type
     *
     * API:
     * DELETE /rest/api/2/issueLinkType/{issueLinkTypeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issueLinkType-deleteIssueLinkType
     *
     * @param int $issueLinkTypeId
     * @return false|mixed|null
     */
    public function deleteIssueLinkType(int $issueLinkTypeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issueLinkType/$issueLinkTypeId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Update issue link type
     *
     * API:
     * PUT /rest/api/2/issueLinkType/{issueLinkTypeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issueLinkType-updateIssueLinkType
     *
     * @param int $issueLinkTypeId
     * @param array $data
     * @return false|mixed|null
     */
    public function updateIssueLinkType(int $issueLinkTypeId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issueLinkType/$issueLinkTypeId";

        return $this->request->put($apiUrl, $data);
    }
}
