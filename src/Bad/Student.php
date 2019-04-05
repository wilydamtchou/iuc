<?php

namespace iuc\Bad;
class Student
{
public $name;
public $Class;
public $school;
public $level;
    CONST $DEFAULT_SCHOOL = "Unknown";
    const DEFAULT_LEVEL = 0;

    

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->Name;
    }

    public function setName(string $name = "Anonymous")
    {
        if(!$name) {
            throw new \Exception("Name value is required");
        }
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Class
     */
    public function getClass() : string
    {
        return $this->Class;
    }

    /**
     * Set the value of Class
     *
     * @return  self
     */
    public function setClass(string $Class)
    {
        if (!$Class) {
            throw new \Exception("Class value is required");
        } else {
            $this->Class = $Class;
        }
        

        return $this;
    }

    /**
     * Get the value of school
     */ 
    public function getSchool() : string 
    {
        return ucfirst($this->school);
    }

    /**
     * Set the value of school
     *
     * @return  self
     */ 
    public function setSchool(string $school)
    {
        $this->school = $school;
                 
        return $this;
    }

    /**
     * Get the value of level
     */ 
    public function getLevel():int
    {
        return $this->level;
    }

    /**
     * Set the value of level
     *
     * @return  self
     */ 
    public function setLevel(int $level=0)
    {
        $this->level = $level;
        return $this;
    }
}