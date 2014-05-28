<?php

namespace BionicUniversity\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cafedra
 */
class Cafedra
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $roomNumber;

    /**
     * @var Faculty
     */
    private $faculty;

    /**
     * @var Students
     */
    private $students;

    /**
     * @return mixed
     */
    public function getStudent()
    {
        return $this->students;
    }
    /**
     * @return mixed
     */
    public function getFaculty()
    {
        return $this->faculty;
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
     * Set roomNumber
     *
     * @param integer $roomNumber
     * @return Cafedra
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * Get roomNumber
     *
     * @return integer 
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }
}
