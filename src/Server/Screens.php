<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens
 */
class Screens extends AbstractJira
{
    
    /**
     * Get all screens
     *
     * API:
     * GET /rest/api/2/screens
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-getAllScreens
     *
     * @return false|mixed|null
     */
    public function getAllScreens()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens";

        return $this->request->get($apiUrl);
    }

    /**
     * Get fields to add
     *
     * API:
     * GET /rest/api/2/screens/{screenId}/availableFields
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-getFieldsToAdd
     *
     * @param int $screenId
     * @return false|mixed|null
     */
    public function getFieldsToAdd(int $screenId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens/$screenId/availableFields";

        return $this->request->get($apiUrl);
    }

    /**
     * Add tab
     *
     * API:
     * POST /rest/api/2/screens/{screenId}/tabs
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-addTab
     *
     * @param int $screenId
     * @param array $data
     * @return false|mixed|null
     */
    public function addTab(int $screenId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens/$screenId/tabs";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get all tabs
     *
     * API:
     * GET /rest/api/2/screens/{screenId}/tabs
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-getAllTabs
     *
     * @param int $screenId
     * @return false|mixed|null
     */
    public function getAllTabs(int $screenId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens/$screenId/tabs";

        return $this->request->get($apiUrl);
    }

    /**
     * Rename tab
     *
     * API:
     * PUT /rest/api/2/screens/{screenId}/tabs/{tabId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-renameTab
     *
     * @param int $screenId
     * @param int $tabId
     * @param array $data
     * @return false|mixed|null
     */
    public function renameTab(int $screenId, int $tabId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens/$screenId/tabs/$tabId";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete tab
     *
     * API:
     * DELETE /rest/api/2/screens/{screenId}/tabs/{tabId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-deleteTab
     *
     * @param int $screenId
     * @param int $tabId
     * @return false|mixed|null
     */
    public function deleteTab(int $screenId, int $tabId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens/$screenId/tabs/$tabId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Get all fields
     *
     * API:
     * GET /rest/api/2/screens/{screenId}/tabs/{tabId}/fields
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-getAllFields
     *
     * @param int $screenId
     * @param int $tabId
     * @return false|mixed|null
     */
    public function getAllFields(int $screenId, int $tabId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens/$screenId/tabs/$tabId/fields";

        return $this->request->get($apiUrl);
    }

    /**
     * Add field
     *
     * API:
     * POST /rest/api/2/screens/{screenId}/tabs/{tabId}/fields
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-addField
     *
     * @param int $screenId
     * @param int $tabId
     * @param array $data
     * @return false|mixed|null
     */
    public function addField(int $screenId, int $tabId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens/$screenId/tabs/$tabId/fields";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Remove field
     *
     * API:
     * DELETE /rest/api/2/screens/{screenId}/tabs/{tabId}/fields/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-removeField
     *
     * @param int $screenId
     * @param int $tabId
     * @param int $id
     * @return false|mixed|null
     */
    public function removeField(int $screenId, int $tabId, int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens/$screenId/tabs/$tabId/fields/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Move field
     *
     * API:
     * POST /rest/api/2/screens/{screenId}/tabs/{tabId}/fields/{id}/move
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-moveField
     *
     * @param int $screenId
     * @param int $tabId
     * @param int $id
     * @param array $data
     * @return false|mixed|null
     */
    public function moveField(int $screenId, int $tabId, int $id, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens/$screenId/tabs/$tabId/fields/$id/move";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Move tab
     *
     * API:
     * POST /rest/api/2/screens/{screenId}/tabs/{tabId}/move/{pos}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-moveTab
     *
     * @param int $screenId
     * @param int $tabId
     * @param int $position
     * @param array $data
     * @return false|mixed|null
     */
    public function moveTab(int $screenId, int $tabId, int $position, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens/$screenId/tabs/$tabId/move/$pos";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Add field to default screen
     *
     * API:
     * POST /rest/api/2/screens/addToDefault/{fieldId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/screens-addFieldToDefaultScreen
     *
     * @param int $fieldId
     * @param array $data
     * @return false|mixed|null
     */
    public function addFieldToDefaultScreen(int $fieldId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/screens/addToDefault/$fieldId";

        return $this->request->post($apiUrl, $data);
    }
}
