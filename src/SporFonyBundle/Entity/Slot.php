<?php

namespace SporFonyBundle\Entity;

/**
 * Slot
 */
class Slot
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $startTime;


    /**
     * Get id
     *
     * @return int
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

