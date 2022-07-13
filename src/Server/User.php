<?php

namespace Hive\Jira\Server;

use Hive\Jira\AbstractJira;

/**
 * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user
 */
class User extends AbstractJira
{
    
    /**
     * Get user
     *
     * API:
     * GET /rest/api/2/user
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-getUser
     *
     * @return false|mixed|null
     */
    public function getUser()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user";

        return $this->request->get($apiUrl);
    }

    /**
     * Create user
     *
     * API:
     * POST /rest/api/2/user
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-createUser
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createUser(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Update user
     *
     * API:
     * PUT /rest/api/2/user
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-updateUser
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function updateUser(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Remove user
     *
     * API:
     * DELETE /rest/api/2/user
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-removeUser
     *
     * @return false|mixed|null
     */
    public function removeUser()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user";

        return $this->request->delete($apiUrl);
    }

    /**
     * Add user to application
     *
     * API:
     * POST /rest/api/2/user/application
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-addUserToApplication
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function addUserToApplication(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/application";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Remove user from application
     *
     * API:
     * DELETE /rest/api/2/user/application
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-removeUserFromApplication
     *
     * @return false|mixed|null
     */
    public function removeUserFromApplication()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/application";

        return $this->request->delete($apiUrl);
    }

    /**
     * Find bulk assignable users
     *
     * API:
     * GET /rest/api/2/user/assignable/multiProjectSearch
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-findBulkAssignableUsers
     *
     * @return false|mixed|null
     */
    public function findBulkAssignableUsers()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/assignable/multiProjectSearch";

        return $this->request->get($apiUrl);
    }

    /**
     * Find assignable users
     *
     * API:
     * GET /rest/api/2/user/assignable/search
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-findAssignableUsers
     *
     * @return false|mixed|null
     */
    public function findAssignableUsers()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/assignable/search";

        return $this->request->get($apiUrl);
    }

    /**
     * Create avatar from temporary
     *
     * API:
     * POST /rest/api/2/user/avatar
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-createAvatarFromTemporary
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function createAvatarFromTemporary(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/avatar";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Update project avatar
     *
     * API:
     * PUT /rest/api/2/user/avatar
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-updateProjectAvatar
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function updateProjectAvatar(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/avatar";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Delete avatar
     *
     * API:
     * DELETE /rest/api/2/user/avatar/{id}
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-deleteAvatar
     *
     * @param int $id
     * @return false|mixed|null
     */
    public function deleteAvatar(int $id)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/avatar/$id";

        return $this->request->delete($apiUrl);
    }

    /**
     * Store temporary avatar
     *
     * API:
     * POST /rest/api/2/user/avatar/temporary
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-storeTemporaryAvatar
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function storeTemporaryAvatar(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/avatar/temporary";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Store temporary avatar using multi part
     *
     * API:
     * POST /rest/api/2/user/avatar/temporary
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-storeTemporaryAvatarUsingMultiPart
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function storeTemporaryAvatarUsingMultiPart(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/avatar/temporary";

        return $this->request->post($apiUrl, $data);
    }

    /**
     * Get all avatars
     *
     * API:
     * GET /rest/api/2/user/avatars
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-getAllAvatars
     *
     * @return false|mixed|null
     */
    public function getAllAvatars()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/avatars";

        return $this->request->get($apiUrl);
    }

    /**
     * Default columns
     *
     * API:
     * GET /rest/api/2/user/columns
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-defaultColumns
     *
     * @return false|mixed|null
     */
    public function defaultColumns()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/columns";

        return $this->request->get($apiUrl);
    }

    /**
     * Set columns
     *
     * API:
     * PUT /rest/api/2/user/columns
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-setColumns
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function setColumns(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/columns";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Reset columns
     *
     * API:
     * DELETE /rest/api/2/user/columns
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-resetColumns
     *
     * @return false|mixed|null
     */
    public function resetColumns()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/columns";

        return $this->request->delete($apiUrl);
    }

    /**
     * Change user password
     *
     * API:
     * PUT /rest/api/2/user/password
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-changeUserPassword
     *
     * @param array $data
     * @return false|mixed|null
     */
    public function changeUserPassword(array $data)
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/password";

        return $this->request->put($apiUrl, $data);
    }

    /**
     * Find users with all permissions
     *
     * API:
     * GET /rest/api/2/user/permission/search
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-findUsersWithAllPermissions
     *
     * @return false|mixed|null
     */
    public function findUsersWithAllPermissions()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/permission/search";

        return $this->request->get($apiUrl);
    }

    /**
     * Find users for picker
     *
     * API:
     * GET /rest/api/2/user/picker
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-findUsersForPicker
     *
     * @return false|mixed|null
     */
    public function findUsersForPicker()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/picker";

        return $this->request->get($apiUrl);
    }

    /**
     * Find users
     *
     * API:
     * GET /rest/api/2/user/search
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-findUsers
     *
     * @return false|mixed|null
     */
    public function findUsers()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/search";

        return $this->request->get($apiUrl);
    }

    /**
     * Find users with browse permission
     *
     * API:
     * GET /rest/api/2/user/viewissue/search
     *
     * @link https://docs.atlassian.com/software/jira/docs/api/REST/8.5.4/#api/2/user-findUsersWithBrowsePermission
     *
     * @return false|mixed|null
     */
    public function findUsersWithBrowsePermission()
    {
        $apiUrl = $this->baseApiUrl . "/rest/api/2/user/viewissue/search";

        return $this->request->get($apiUrl);
    }
}
