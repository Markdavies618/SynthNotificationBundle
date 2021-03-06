<?php

/**
 * This file is part of the Synth Notification Bundle.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Dom Udall <dom@synthmedia.co.uk>
 */

namespace Synth\NotificationBundle\Entity;

use FOS\UserBundle\Entity\User;
use Synth\NotificationBundle\Model as BaseNotification;

class Notification extends BaseNotification
{
    /**
     * Set the owner of the notification (who the notification is to)
     *
     * @param User $owner
     */
    public function setOwner(User $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Get the owner of the notification
     *
     * @return User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the sender of the notification (who the notification is from)
     *
     * @param User $fromUser
     */
    public function setFromUser(User $fromUser)
    {
        $this->fromUser = $fromUser;
    }

    /**
     * Get the sender of the notification
     *
     * @return User
     */
    public function getFromUser()
    {
        return $this->fromUser;
    }

    /**
     * Set the notification type
     *
     * @param integer $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get the notification type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }
}