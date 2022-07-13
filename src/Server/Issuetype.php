<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype
 */
class Issuetype extends AbstractJira
{
    
    /**
     * Get issue all types
     *
     * API:
     * GET /rest/api/2/issuetype
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype-getIssueAllTypes
     *
     * @return false|mixed|null
     */
    public function getIssueAllTypes()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype";

        return $this->request->get($apiUrl);
    }

    /**
     * Create issue type
     *
     * API:
     * POST /rest/api/2/issuetype
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype-createIssueType
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createIssueType(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get issue type
     *
     * API:
     * GET /rest/api/2/issuetype/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype-getIssueType
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getIssueType(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype/$id";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete issue type
     *
     * API:
     * DELETE /rest/api/2/issuetype/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype-deleteIssueType
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteIssueType(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Update issue type
     *
     * API:
     * PUT /rest/api/2/issuetype/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype-updateIssueType
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateIssueType(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype/$id";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get alternative issue types
     *
     * API:
     * GET /rest/api/2/issuetype/{id}/alternatives
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype-getAlternativeIssueTypes
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getAlternativeIssueTypes(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype/$id/alternatives";

        return $this->request->get($apiUrl);
    }

    /**
     * Create avatar from temporary
     *
     * API:
     * POST /rest/api/2/issuetype/{id}/avatar
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype-createAvatarFromTemporary
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function createAvatarFromTemporary(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype/$id/avatar";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Store temporary avatar
     *
     * API:
     * POST /rest/api/2/issuetype/{id}/avatar/temporary
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype-storeTemporaryAvatar
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function storeTemporaryAvatar(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype/$id/avatar/temporary";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Store temporary avatar using multi part
     *
     * API:
     * POST /rest/api/2/issuetype/{id}/avatar/temporary
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetype-storeTemporaryAvatarUsingMultiPart
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function storeTemporaryAvatarUsingMultiPart(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetype/$id/avatar/temporary";

        return $this->request->post($apiUrl, $data);
    }
}
