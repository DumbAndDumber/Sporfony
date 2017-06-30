<?php

namespace SporFonyBundle\Entity;

/**
 * Lesson
 */
class Lesson
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $recurrence;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \SporFonyBundle\Entity\User
     */
    private $coach;

    /**
     * @var \SporFonyBundle\Entity\Room
     */
    private $room;

    /**
     * @var \SporFonyBundle\Entity\Slot
     */
    private $slot;


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
     * Set name
     *
     * @param string $name
     *
     * @return Lesson
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set recurrence
     *
     * @param string $recurrence
     *
     * @return Lesson
     */
    public function setRecurrence($recurrence)
    {
        $this->recurrence = $recurrence;

        return $this;
    }

    /**
     * Get recurrence
     *
     * @return string
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Lesson
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set coach
     *
     * @param \SporFonyBundle\Entity\User $coach
     *
     * @return Lesson
     */
    public function setCoach(\SporFonyBundle\Entity\User $coach = null)
    {
        $this->coach = $coach;

        return $this;
    }

    /**
     * Get coach
     *
     * @return \SporFonyBundle\Entity\User
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * Set room
     *
     * @param \SporFonyBundle\Entity\Room $room
     *
     * @return Lesson
     */
    public function setRoom(\SporFonyBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \SporFonyBundle\Entity\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set slot
     *
     * @param \SporFonyBundle\Entity\Slot $slot
     *
     * @return Lesson
     */
    public function setSlot(\SporFonyBundle\Entity\Slot $slot = null)
    {
        $this->slot = $slot;

        return $this;
    }

    /**
     * Get slot
     *
     * @return \SporFonyBundle\Entity\Slot
     */
    public function getSlot()
    {
        return $this->slot;
    }
}
