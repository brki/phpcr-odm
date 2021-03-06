<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Doctrine\Tests\Models\CMS;

/**
 * @Document(alias="cms_group")
 */
class CmsGroup
{
    /** @Id */
    public $id;
    /** @String */
    public $name;

    /** @ReferenceMany(targetDocument="CmsUser", mappedBy="groups") */
    public $users;

    /** @String(multivalue=true) */
    public $values;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function addUser(CmsUser $user) {
        $this->users[] = $user;
    }

    public function getUsers() {
        return $this->users;
    }

    public function addValues($value) {
        $this->values[] = $value;
    }

    public function getValues() {
        return $this->values;
    }
}

