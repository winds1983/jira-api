<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/cluster
 */
class Cluster extends AbstractJira
{
    
    /**
     * Get all nodes
     *
     * API:
     * GET /rest/api/2/cluster/nodes
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/cluster-getAllNodes
     *
     * @return false|mixed|null
     */
    public function getAllNodes()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/cluster/nodes";

        return $this->request->get($apiUrl);
    }

    /**
     * Delete node
     *
     * API:
     * DELETE /rest/api/2/cluster/node/{nodeId}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/cluster-deleteNode
     *
     * @param int $nodeId
     * @return false|mixed|null
     */
    public function deleteNode(int $nodeId)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/cluster/node/$nodeId";

        return $this->request->delete($apiUrl);
    }

    /**
     * Change node state to offline
     *
     * API:
     * PUT /rest/api/2/cluster/node/{nodeId}/offline
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/cluster-changeNodeStateToOffline
     *
     * @param int $nodeId
     * @param array $data
     * @return false|mixed|null
     */
    public function changeNodeStateToOffline(int $nodeId, array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/cluster/node/$nodeId/offline";

        return $this->request->put($apiUrl, $data);
    }
}
