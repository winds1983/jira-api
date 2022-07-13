<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetypescheme
 */
class Issuetypescheme extends AbstractJira
{
    
    /**
     * Create issue type scheme
     *
     * API:
     * POST /rest/api/2/issuetypescheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetypescheme-createIssueTypeScheme
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createIssueTypeScheme(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetypescheme";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get all issue type schemes
     *
     * API:
     * GET /rest/api/2/issuetypescheme
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetypescheme-getAllIssueTypeSchemes
     *
     * @return false|mixed|null
     */
    public function getAllIssueTypeSchemes()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetypescheme";

        return $this->request->get($apiUrl);
    }

    /**
     * Get issue type scheme
     *
     * API:
     * GET /rest/api/2/issuetypescheme/{schemeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetypescheme-getIssueTypeScheme
     *
     * @param int $schemeId
     * @return false|mixed|null
     */
    public function getIssueTypeScheme(int $schemeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetypescheme/$schemeId";

        return $this->request->get($apiUrl);
    }

    /**
     * Update issue type scheme
     *
     * API:
     * PUT /rest/api/2/issuetypescheme/{schemeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetypescheme-updateIssueTypeScheme
     *
     * @param int $schemeId
     * @param array $data
     * @return false|mixed|null
     */
    public function updateIssueTypeScheme(int $schemeId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetypescheme/$schemeId";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete issue type scheme
     *
     * API:
     * DELETE /rest/api/2/issuetypescheme/{schemeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetypescheme-deleteIssueTypeScheme
     *
     * @param int $schemeId
     * @return false|mixed|null
     */
    public function deleteIssueTypeScheme(int $schemeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetypescheme/$schemeId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Add project associations to scheme
     *
     * API:
     * POST /rest/api/2/issuetypescheme/{schemeId}/associations
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetypescheme-addProjectAssociationsToScheme
     *
     * @param int $schemeId
     * @param array $data
     * @return false|mixed|null
     */
    public function addProjectAssociationsToScheme(int $schemeId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetypescheme/$schemeId/associations";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get associated projects
     *
     * API:
     * GET /rest/api/2/issuetypescheme/{schemeId}/associations
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetypescheme-getAssociatedProjects
     *
     * @param int $schemeId
     * @return false|mixed|null
     */
    public function getAssociatedProjects(int $schemeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetypescheme/$schemeId/associations";

        return $this->request->get($apiUrl);
    }

    /**
     * Set project associations for scheme
     *
     * API:
     * PUT /rest/api/2/issuetypescheme/{schemeId}/associations
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetypescheme-setProjectAssociationsForScheme
     *
     * @param int $schemeId
     * @param array $data
     * @return false|mixed|null
     */
    public function setProjectAssociationsForScheme(int $schemeId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetypescheme/$schemeId/associations";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Remove all project associations
     *
     * API:
     * DELETE /rest/api/2/issuetypescheme/{schemeId}/associations
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetypescheme-removeAllProjectAssociations
     *
     * @param int $schemeId
     * @return false|mixed|null
     */
    public function removeAllProjectAssociations(int $schemeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetypescheme/$schemeId/associations";

        return $this->request->delete($apiUrl);
    }

    /**
     * Remove project association
     *
     * API:
     * DELETE /rest/api/2/issuetypescheme/{schemeId}/associations/{projIdOrKey}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/issuetypescheme-removeProjectAssociation
     *
     * @param int $schemeId
     * @param string $projIdOrKey
     * @return false|mixed|null
     */
    public function removeProjectAssociation(int $schemeId, string $projIdOrKey)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/issuetypescheme/$schemeId/associations/$projIdOrKey";

        return $this->request->delete($apiUrl);
    }
}
