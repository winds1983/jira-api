<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/cluster/zdu
 */
class ClusterZdu extends AbstractJira
{
    
    /**
     * Approve upgrade
     *
     * API:
     * POST /rest/api/2/cluster/zdu/approve
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/cluster/zdu-approveUpgrade
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function approveUpgrade(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/cluster/zdu/approve";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Cancel upgrade
     *
     * API:
     * POST /rest/api/2/cluster/zdu/cancel
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/cluster/zdu-cancelUpgrade
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function cancelUpgrade(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/cluster/zdu/cancel";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Acknowledge errors
     *
     * API:
     * POST /rest/api/2/cluster/zdu/retryUpgrade
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/cluster/zdu-acknowledgeErrors
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function acknowledgeErrors(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/cluster/zdu/retryUpgrade";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Set ready to upgrade
     *
     * API:
     * POST /rest/api/2/cluster/zdu/start
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/cluster/zdu-setReadyToUpgrade
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function setReadyToUpgrade(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/cluster/zdu/start";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get state
     *
     * API:
     * GET /rest/api/2/cluster/zdu/state
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/cluster/zdu-getState
     *
     * @return false|mixed|null
     */
    public function getState()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/cluster/zdu/state";

        return $this->request->get($apiUrl);
    }
}
