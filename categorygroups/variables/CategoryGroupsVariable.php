<?php
namespace Craft;

class CategoryGroupsVariable
{
    /**
     * Returns all category groups.
     *
     * @param string|null $indexBy
     * @return array
     */
    public function getAllGroups($indexBy = null)
    {
        return craft()->categories->getAllGroups($indexBy);
    }

    /**
     * Returns all editable category groups.
     *
     * @param string|null $indexBy
     * @return array
     */
    public function getEditableGroups($indexBy = null)
    {
        return craft()->categories->getEditableGroups($indexBy);
    }

    /**
     * Gets the total number of category groups.
     *
     * @return int
     */
    public function getTotalGroups()
    {
        return craft()->categories->getTotalGroups();
    }

    /**
     * Returns a category group by its ID.
     *
     * @param int $groupId
     * @return CategoryGroupModel|null
     */
    public function getGroupById($groupId)
    {
        return craft()->categories->getGroupById($groupId);
    }

    /**
     * Returns a category group by its handle.
     *
     * @param string $handle
     * @return CategoryGroupModel|null
     */
    public function getGroupByHandle($handle)
    {
        return craft()->categories->getGroupByHandle($handle);
    }

}