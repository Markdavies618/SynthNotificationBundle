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

use Doctrine\ORM\Mapping as ORM;

/**
 * Synth\NotificationBundle\Entity\Notification
 */
class Notification
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var text $message
     */
    private $message;

    /**
     * @var boolean $read
     */
    private $read;

    /**
     * @var datetimetz $createdAt
     */
    private $createdAt;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set message
     *
     * @param text $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Get message
     *
     * @return text
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set read
     *
     * @param boolean $read
     */
    public function setRead($read)
    {
        $this->read = $read;
    }

    /**
     * Get read
     *
     * @return boolean
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * Set createdAt
     *
     * @param datetimetz $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetimetz
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}