<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version
 */
class Version extends AbstractJira
{
    
    /**
     * Create version
     *
     * API:
     * POST /rest/api/2/version
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-createVersion
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createVersion(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Move version
     *
     * API:
     * POST /rest/api/2/version/{id}/move
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-moveVersion
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function moveVersion(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$id/move";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get version
     *
     * API:
     * GET /rest/api/2/version/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-getVersion
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getVersion(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$id";

        return $this->request->get($apiUrl);
    }

    /**
     * Update version
     *
     * API:
     * PUT /rest/api/2/version/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-updateVersion
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateVersion(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$id";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete
     *
     * API:
     * DELETE /rest/api/2/version/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-delete
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function delete(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Merge
     *
     * API:
     * PUT /rest/api/2/version/{id}/mergeto/{moveIssuesTo}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-merge
     *
     * @param int $id
     * @param string $moveIssuesTo
     * @param array $data
     * @return false|mixed|null
     */
    public function merge(int $id, string $moveIssuesTo, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$id/mergeto/$moveIssuesTo";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get version related issues
     *
     * API:
     * GET /rest/api/2/version/{id}/relatedIssueCounts
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-getVersionRelatedIssues
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getVersionRelatedIssues(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$id/relatedIssueCounts";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete
     *
     * API:
     * POST /rest/api/2/version/{id}/removeAndSwap
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-delete
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function delete(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$id/removeAndSwap";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get version unresolved issues
     *
     * API:
     * GET /rest/api/2/version/{id}/unresolvedIssueCount
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-getVersionUnresolvedIssues
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getVersionUnresolvedIssues(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$id/unresolvedIssueCount";

        return $this->request->get($apiUrl);
    }

    /**
     * Get remote version links by version id
     *
     * API:
     * GET /rest/api/2/version/{versionId}/remotelink
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-getRemoteVersionLinksByVersionId
     *
     * @param int $versionId
     * @return false|mixed|null
     */
    public function getRemoteVersionLinksByVersionId(int $versionId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$versionId/remotelink";

        return $this->request->get($apiUrl);
    }

    /**
     * Create or update remote version link
     *
     * API:
     * POST /rest/api/2/version/{versionId}/remotelink
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-createOrUpdateRemoteVersionLink
     *
     * @param int $versionId
     * @param array $data
     * @return false|mixed|null
     */
    public function createOrUpdateRemoteVersionLink(int $versionId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$versionId/remotelink";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Delete remote version links by version id
     *
     * API:
     * DELETE /rest/api/2/version/{versionId}/remotelink
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-deleteRemoteVersionLinksByVersionId
     *
     * @param int $versionId
     * @return false|mixed|null
     */
    public function deleteRemoteVersionLinksByVersionId(int $versionId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$versionId/remotelink";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get remote version link
     *
     * API:
     * GET /rest/api/2/version/{versionId}/remotelink/{globalId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-getRemoteVersionLink
     *
     * @param int $versionId
     * @param int $globalId
     * @return false|mixed|null
     */
    public function getRemoteVersionLink(int $versionId, int $globalId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$versionId/remotelink/$globalId";

        return $this->request->get($apiUrl);
    }

    /**
     * Create or update remote version link
     *
     * API:
     * POST /rest/api/2/version/{versionId}/remotelink/{globalId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-createOrUpdateRemoteVersionLink
     *
     * @param int $versionId
     * @param int $globalId
     * @param array $data
     * @return false|mixed|null
     */
    public function createOrUpdateRemoteVersionLink(int $versionId, int $globalId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$versionId/remotelink/$globalId";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Delete remote version link
     *
     * API:
     * DELETE /rest/api/2/version/{versionId}/remotelink/{globalId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-deleteRemoteVersionLink
     *
     * @param int $versionId
     * @param int $globalId
     * @return false|mixed|null
     */
    public function deleteRemoteVersionLink(int $versionId, int $globalId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/$versionId/remotelink/$globalId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get remote version links
     *
     * API:
     * GET /rest/api/2/version/remotelink
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/version-getRemoteVersionLinks
     *
     * @return false|mixed|null
     */
    public function getRemoteVersionLinks()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/version/remotelink";

        return $this->request->get($apiUrl);
    }
}
