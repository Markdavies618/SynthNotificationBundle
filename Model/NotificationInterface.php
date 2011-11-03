<?php

/**
 * This file is part of the Synth Notification Bundle.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Dom Udall <dom@synthmedia.co.uk>
 */

namespace Synth\NotificationBundle\Model;

interface NotificationInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    function getId();

    /**
     * Set message
     *
     * @param text $message
     */
    function setMessage($message);

    /**
     * Get message
     *
     * @return text
     */
    function getMessage();

    /**
     * Set read
     *
     * @param boolean $read
     */
    function setRead($read);

    /**
     * Get read
     *
     * @return boolean
     */
    function getRead();

    /**
     * Set createdAt
     *
     * @param datetimetz $createdAt
     */
    function setCreatedAt($createdAt);

    /**
     * Get createdAt
     *
     * @return datetimetz
     */
    function getCreatedAt();
}