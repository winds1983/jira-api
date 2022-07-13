<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/monitoring/jmx
 */
class MonitoringJmx extends AbstractJira
{
    
    /**
     * Are metrics exposed
     *
     * API:
     * GET /rest/api/2/monitoring/jmx/areMetricsExposed
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/monitoring/jmx-areMetricsExposed
     *
     * @return false|mixed|null
     */
    public function areMetricsExposed()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/monitoring/jmx/areMetricsExposed";

        return $this->request->get($apiUrl);
    }

    /**
     * Get available metrics
     *
     * API:
     * GET /rest/api/2/monitoring/jmx/getAvailableMetrics
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/monitoring/jmx-getAvailableMetrics
     *
     * @return false|mixed|null
     */
    public function getAvailableMetrics()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/monitoring/jmx/getAvailableMetrics";

        return $this->request->get($apiUrl);
    }

    /**
     * Start
     *
     * API:
     * GET /rest/api/2/monitoring/jmx/startExposing
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/monitoring/jmx-start
     *
     * @return false|mixed|null
     */
    public function start()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/monitoring/jmx/startExposing";

        return $this->request->get($apiUrl);
    }

    /**
     * Stop
     *
     * API:
     * GET /rest/api/2/monitoring/jmx/stopExposing
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/monitoring/jmx-stop
     *
     * @return false|mixed|null
     */
    public function stop()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/monitoring/jmx/stopExposing";

        return $this->request->get($apiUrl);
    }
}
