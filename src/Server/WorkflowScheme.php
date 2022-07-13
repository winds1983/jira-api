<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme
 */
class WorkflowScheme extends AbstractJira
{
    
    /**
     * Create scheme
     *
     * API:
     * POST /rest/api/2/workflowscheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-createScheme
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createScheme(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get by id
     *
     * API:
     * GET /rest/api/2/workflowscheme/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-getById
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getById(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete scheme
     *
     * API:
     * DELETE /rest/api/2/workflowscheme/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-deleteScheme
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteScheme(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Update
     *
     * API:
     * PUT /rest/api/2/workflowscheme/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-update
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function update(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Create draft for parent
     *
     * API:
     * POST /rest/api/2/workflowscheme/{id}/createdraft
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-createDraftForParent
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function createDraftForParent(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/createdraft";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Delete default
     *
     * API:
     * DELETE /rest/api/2/workflowscheme/{id}/default
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-deleteDefault
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteDefault(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/default";

        return $this->request->delete($apiUrl);
    }

    /**
     * Update default
     *
     * API:
     * PUT /rest/api/2/workflowscheme/{id}/default
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-updateDefault
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateDefault(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/default";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get default
     *
     * API:
     * GET /rest/api/2/workflowscheme/{id}/default
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-getDefault
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getDefault(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/default";

        return $this->request->get($apiUrl);
    }

    /**
     * Get draft by id
     *
     * API:
     * GET /rest/api/2/workflowscheme/{id}/draft
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-getDraftById
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getDraftById(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete draft by id
     *
     * API:
     * DELETE /rest/api/2/workflowscheme/{id}/draft
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-deleteDraftById
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteDraftById(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft";

        return $this->request->delete($apiUrl);
    }

    /**
     * Update draft
     *
     * API:
     * PUT /rest/api/2/workflowscheme/{id}/draft
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-updateDraft
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateDraft(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get draft default
     *
     * API:
     * GET /rest/api/2/workflowscheme/{id}/draft/default
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-getDraftDefault
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getDraftDefault(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft/default";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete draft default
     *
     * API:
     * DELETE /rest/api/2/workflowscheme/{id}/draft/default
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-deleteDraftDefault
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteDraftDefault(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft/default";

        return $this->request->delete($apiUrl);
    }

    /**
     * Update draft default
     *
     * API:
     * PUT /rest/api/2/workflowscheme/{id}/draft/default
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-updateDraftDefault
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateDraftDefault(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft/default";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get draft issue type
     *
     * API:
     * GET /rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-getDraftIssueType
     *
     * @param int $id
     * @param string $issueType
     * @return false|mixed|null
     */
    public function getDraftIssueType(int $id, string $issueType)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft/issuetype/$issueType";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete draft issue type
     *
     * API:
     * DELETE /rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-deleteDraftIssueType
     *
     * @param int $id
     * @param string $issueType
     * @return false|mixed|null
     */
    public function deleteDraftIssueType(int $id, string $issueType)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft/issuetype/$issueType";

        return $this->request->delete($apiUrl);
    }

    /**
     * Set draft issue type
     *
     * API:
     * PUT /rest/api/2/workflowscheme/{id}/draft/issuetype/{issueType}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-setDraftIssueType
     *
     * @param int $id
     * @param string $issueType
     * @param array $data
     * @return false|mixed|null
     */
    public function setDraftIssueType(int $id, string $issueType, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft/issuetype/$issueType";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get draft workflow
     *
     * API:
     * GET /rest/api/2/workflowscheme/{id}/draft/workflow
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-getDraftWorkflow
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getDraftWorkflow(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft/workflow";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete draft workflow mapping
     *
     * API:
     * DELETE /rest/api/2/workflowscheme/{id}/draft/workflow
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-deleteDraftWorkflowMapping
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteDraftWorkflowMapping(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft/workflow";

        return $this->request->delete($apiUrl);
    }

    /**
     * Update draft workflow mapping
     *
     * API:
     * PUT /rest/api/2/workflowscheme/{id}/draft/workflow
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-updateDraftWorkflowMapping
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateDraftWorkflowMapping(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/draft/workflow";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get issue type
     *
     * API:
     * GET /rest/api/2/workflowscheme/{id}/issuetype/{issueType}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-getIssueType
     *
     * @param int $id
     * @param string $issueType
     * @return false|mixed|null
     */
    public function getIssueType(int $id, string $issueType)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/issuetype/$issueType";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete issue type
     *
     * API:
     * DELETE /rest/api/2/workflowscheme/{id}/issuetype/{issueType}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-deleteIssueType
     *
     * @param int $id
     * @param string $issueType
     * @return false|mixed|null
     */
    public function deleteIssueType(int $id, string $issueType)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/issuetype/$issueType";

        return $this->request->delete($apiUrl);
    }

    /**
     * Set issue type
     *
     * API:
     * PUT /rest/api/2/workflowscheme/{id}/issuetype/{issueType}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-setIssueType
     *
     * @param int $id
     * @param string $issueType
     * @param array $data
     * @return false|mixed|null
     */
    public function setIssueType(int $id, string $issueType, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/issuetype/$issueType";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Get workflow
     *
     * API:
     * GET /rest/api/2/workflowscheme/{id}/workflow
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-getWorkflow
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function getWorkflow(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/workflow";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete workflow mapping
     *
     * API:
     * DELETE /rest/api/2/workflowscheme/{id}/workflow
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-deleteWorkflowMapping
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteWorkflowMapping(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/workflow";

        return $this->request->delete($apiUrl);
    }

    /**
     * Update workflow mapping
     *
     * API:
     * PUT /rest/api/2/workflowscheme/{id}/workflow
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/workflowscheme-updateWorkflowMapping
     *
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function updateWorkflowMapping(int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/workflowscheme/$id/workflow";

        return $this->request->put($apiUrl, $data);
    }
}
