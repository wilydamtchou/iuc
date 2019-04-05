<?php
/**
 * Student class
 *
 * (c) IUC <willy.damtchou@gmail.com>
 *
 * PHP version 7.2.16
 *
 * @category  class
 *
 * @package   iuc\Good
 *
 * @author    Willy DAMTCHOU <willydamtchou@gmail.com>
 *
 * @copyright 2019 IUC
 *
 * @license   IUC
 *
 * @link      https://www.iuc-univ.net
 */
namespace iuc\Good;

/**
 * This class is used to design a student
 *
 */
class Student
{
    const DEFAULT_SCHOOL = "Unknown";
    const DEFAULT_LEVEL = 0;

    /**
     * name
     *
     * The name of the student
     *
     * @var string
     */
    public $name;

    /**
     * class
     *
     * The class of the Student ex : Computer Software Engineering
     *
     * @var string
     */
    public $class;

    /**
     * school
     *
     * The school of the student ex : 3IL
     *
     * @var string
     */
    public $school = "Unknown";

    /**
     * level
     *
     * The school of the student ex : 3
     *
     * @var int
     */
    public $level = 0;

    /**
     * getName
     *
     * Get the value of name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * setName
     *
     * Get the value of name
     * The name is required, bad name will throw Exception
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        if (!$name) {
            throw new \Exception("Name value is required");
        }
        $this->name = $name;

        return $this;
    }

    /**
     * getClass
     *
     * Get the value of the class
     *
     * @return string
     */
    public function getClass() : string
    {
        return $this->class;
    }

    /**
     * setClass
     *
     * Get the value of name
     *
     * @param string $class
     *
     * @return self
     */
    public function setClass(string $class) : self
    {
        if (!$class) {
            throw new \Exception("Class value is required");
        }
        $this->class = $class;

        return $this;
    }

    /**
     * getSchool
     *
     * Get the value of the school
     *
     * The school will be returned with capital Letter First
     *
     * @return string
     */
    public function getSchool() : string
    {
        return ucfirst($this->school);
    }

    /**
     * setSchool
     *
     * set the value of school
     *
     * @param string $school
     *
     * @return self
     */
    public function setSchool(string $school = "Unknown") : self
    {
        $this->school = $school;

        return $this;
    }

    /**
     * getLevel
     *
     * Get the value of the level
     *
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }

    /**
     * setLevel
     *
     * set the value of level
     *
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level = 0) : self
    {
        $this->level = $level;

        return $this;
    }
}
