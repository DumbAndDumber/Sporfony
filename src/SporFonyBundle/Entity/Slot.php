<?php

namespace SporFonyBundle\Entity;

/**
 * Slot
 */
class Slot
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $startTime;

    public function __toString() {
        return strval($this->id);
    }

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
     * Set startTime
     *
     * @param \DateTime $startTime
     *
     * @return Slot
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
}
