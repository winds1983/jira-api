<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue
 */
class Issue extends AbstractJira
{
    
    /**
     * Create issue
     *
     * API:
     * POST /rest/api/2/issue
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-createIssue
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createIssue(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Create issues
     *
     * API:
     * POST /rest/api/2/issue/bulk
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-createIssues
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createIssues(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/bulk";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get issue
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getIssue
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getIssue(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete issue
     *
     * API:
     * DELETE /rest/api/2/issue/{issueIdOrKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-deleteIssue
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function deleteIssue(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey";

        return $this->request->delete($apiUrl);
    }

    /**
     * Edit issue
     *
     * API:
     * PUT /rest/api/2/issue/{issueIdOrKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-editIssue
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function editIssue(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Archive issue
     *
     * API:
     * PUT /rest/api/2/issue/{issueIdOrKey}/archive
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-archiveIssue
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function archiveIssue(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/archive";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Assign
     *
     * API:
     * PUT /rest/api/2/issue/{issueIdOrKey}/assignee
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-assign
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function assign(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/assignee";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get comments
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/comment
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getComments
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getComments(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/comment";

        return $this->request->get($apiUrl);
    }

    /**
     * Add comment
     *
     * API:
     * POST /rest/api/2/issue/{issueIdOrKey}/comment
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-addComment
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function addComment(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/comment";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get comment
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/comment/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getComment
     *
     * @param string $issueIdOrKey
     * @param int $id
     * @return false|mixed|null
     */
    public function getComment(string $issueIdOrKey, int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/comment/$id";

        return $this->request->get($apiUrl);
    }

    /**
     * Update comment
     *
     * API:
     * PUT /rest/api/2/issue/{issueIdOrKey}/comment/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-updateComment
     *
     * @param string $issueIdOrKey
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateComment(string $issueIdOrKey, int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/comment/$id";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete comment
     *
     * API:
     * DELETE /rest/api/2/issue/{issueIdOrKey}/comment/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-deleteComment
     *
     * @param string $issueIdOrKey
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteComment(string $issueIdOrKey, int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/comment/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get edit issue meta
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/editmeta
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getEditIssueMeta
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getEditIssueMeta(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/editmeta";

        return $this->request->get($apiUrl);
    }

    /**
     * Notify
     *
     * API:
     * POST /rest/api/2/issue/{issueIdOrKey}/notify
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-notify
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function notify(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/notify";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get remote issue links
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/remotelink
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getRemoteIssueLinks
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getRemoteIssueLinks(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/remotelink";

        return $this->request->get($apiUrl);
    }

    /**
     * Create or update remote issue link
     *
     * API:
     * POST /rest/api/2/issue/{issueIdOrKey}/remotelink
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-createOrUpdateRemoteIssueLink
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function createOrUpdateRemoteIssueLink(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/remotelink";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Delete remote issue link by global id
     *
     * API:
     * DELETE /rest/api/2/issue/{issueIdOrKey}/remotelink
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-deleteRemoteIssueLinkByGlobalId
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function deleteRemoteIssueLinkByGlobalId(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/remotelink";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get remote issue link by id
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getRemoteIssueLinkById
     *
     * @param string $issueIdOrKey
     * @param int $linkId
     * @return false|mixed|null
     */
    public function getRemoteIssueLinkById(string $issueIdOrKey, int $linkId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/remotelink/$linkId";

        return $this->request->get($apiUrl);
    }

    /**
     * Update remote issue link
     *
     * API:
     * PUT /rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-updateRemoteIssueLink
     *
     * @param string $issueIdOrKey
     * @param int $linkId
     * @param array $data
     * @return false|mixed|null
     */
    public function updateRemoteIssueLink(string $issueIdOrKey, int $linkId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/remotelink/$linkId";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete remote issue link by id
     *
     * API:
     * DELETE /rest/api/2/issue/{issueIdOrKey}/remotelink/{linkId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-deleteRemoteIssueLinkById
     *
     * @param string $issueIdOrKey
     * @param int $linkId
     * @return false|mixed|null
     */
    public function deleteRemoteIssueLinkById(string $issueIdOrKey, int $linkId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/remotelink/$linkId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Restore issue
     *
     * API:
     * PUT /rest/api/2/issue/{issueIdOrKey}/restore
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-restoreIssue
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function restoreIssue(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/restore";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get transitions
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/transitions
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getTransitions
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getTransitions(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/transitions";

        return $this->request->get($apiUrl);
    }

    /**
     * Do transition
     *
     * API:
     * POST /rest/api/2/issue/{issueIdOrKey}/transitions
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-doTransition
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function doTransition(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/transitions";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Remove vote
     *
     * API:
     * DELETE /rest/api/2/issue/{issueIdOrKey}/votes
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-removeVote
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function removeVote(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/votes";

        return $this->request->delete($apiUrl);
    }

    /**
     * Add vote
     *
     * API:
     * POST /rest/api/2/issue/{issueIdOrKey}/votes
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-addVote
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function addVote(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/votes";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get votes
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/votes
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getVotes
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getVotes(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/votes";

        return $this->request->get($apiUrl);
    }

    /**
     * Get issue watchers
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/watchers
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getIssueWatchers
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getIssueWatchers(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/watchers";

        return $this->request->get($apiUrl);
    }

    /**
     * Add watcher
     *
     * API:
     * POST /rest/api/2/issue/{issueIdOrKey}/watchers
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-addWatcher
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function addWatcher(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/watchers";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Remove watcher
     *
     * API:
     * DELETE /rest/api/2/issue/{issueIdOrKey}/watchers
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-removeWatcher
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function removeWatcher(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/watchers";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get issue worklog
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/worklog
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getIssueWorklog
     *
     * @param string $issueIdOrKey
     * @return false|mixed|null
     */
    public function getIssueWorklog(string $issueIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/worklog";

        return $this->request->get($apiUrl);
    }

    /**
     * Add worklog
     *
     * API:
     * POST /rest/api/2/issue/{issueIdOrKey}/worklog
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-addWorklog
     *
     * @param string $issueIdOrKey
     * @param array $data
     * @return false|mixed|null
     */
    public function addWorklog(string $issueIdOrKey, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/worklog";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get worklog
     *
     * API:
     * GET /rest/api/2/issue/{issueIdOrKey}/worklog/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getWorklog
     *
     * @param string $issueIdOrKey
     * @param int $id
     * @return false|mixed|null
     */
    public function getWorklog(string $issueIdOrKey, int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/worklog/$id";

        return $this->request->get($apiUrl);
    }

    /**
     * Update worklog
     *
     * API:
     * PUT /rest/api/2/issue/{issueIdOrKey}/worklog/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-updateWorklog
     *
     * @param string $issueIdOrKey
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateWorklog(string $issueIdOrKey, int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/worklog/$id";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete worklog
     *
     * API:
     * DELETE /rest/api/2/issue/{issueIdOrKey}/worklog/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-deleteWorklog
     *
     * @param string $issueIdOrKey
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteWorklog(string $issueIdOrKey, int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/$issueIdOrKey/worklog/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Archive issues
     *
     * API:
     * POST /rest/api/2/issue/archive
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-archiveIssues
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function archiveIssues(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/archive";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get create issue meta
     *
     * API:
     * GET /rest/api/2/issue/createmeta
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getCreateIssueMeta
     *
     * @return false|mixed|null
     */
    public function getCreateIssueMeta()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/createmeta";

        return $this->request->get($apiUrl);
    }

    /**
     * Get create issue meta project issue types
     *
     * API:
     * GET /rest/api/2/issue/createmeta/{projectIdOrKey}/issuetypes
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getCreateIssueMetaProjectIssueTypes
     *
     * @param string $projectIdOrKey
     * @return false|mixed|null
     */
    public function getCreateIssueMetaProjectIssueTypes(string $projectIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/createmeta/$projectIdOrKey/issuetypes";

        return $this->request->get($apiUrl);
    }

    /**
     * Get create issue meta fields
     *
     * API:
     * GET /rest/api/2/issue/createmeta/{projectIdOrKey}/issuetypes/{issueTypeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getCreateIssueMetaFields
     *
     * @param string $projectIdOrKey
     * @param int $issueTypeId
     * @return false|mixed|null
     */
    public function getCreateIssueMetaFields(string $projectIdOrKey, int $issueTypeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/createmeta/$projectIdOrKey/issuetypes/$issueTypeId";

        return $this->request->get($apiUrl);
    }

    /**
     * Get issue picker resource
     *
     * API:
     * GET /rest/api/2/issue/picker
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issue-getIssuePickerResource
     *
     * @return false|mixed|null
     */
    public function getIssuePickerResource()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issue/picker";

        return $this->request->get($apiUrl);
    }
}
