<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/upgrade
 */
class Upgrade extends AbstractJira
{
    
    /**
     * Run upgrades now
     *
     * API:
     * POST /rest/api/2/upgrade
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/upgrade-runUpgradesNow
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function runUpgradesNow(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/upgrade";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get upgrade result
     *
     * API:
     * GET /rest/api/2/upgrade
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/upgrade-getUpgradeResult
     *
     * @return false|mixed|null
     */
    public function getUpgradeResult()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/upgrade";

        return $this->request->get($apiUrl);
    }
}
