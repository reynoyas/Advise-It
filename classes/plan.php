<?php

class Plan
{
    private $_fall;
    private $_fallNotes;
    private $_winter;
    private $_winterNotes;
    private $_spring;
    private $_springNotes;
    private $_summer;
    private $_summerNotes;

    /**
     * @param $_fall
     * @param $_fallNotes
     * @param $_winter
     * @param $_winterNotes
     * @param $_spring
     * @param $_springNotes
     * @param $_summer
     * @param $_summerNotes
     */
    public function __construct($_fall, $_fallNotes="", $_winter="", $_winterNotes="",
                                $_spring="", $_springNotes="", $_summer="", $_summerNotes="")
    {
        $this->_fall = $_fall;
        $this->_fallNotes = $_fallNotes;
        $this->_winter = $_winter;
        $this->_winterNotes = $_winterNotes;
        $this->_spring = $_spring;
        $this->_springNotes = $_springNotes;
        $this->_summer = $_summer;
        $this->_summerNotes = $_summerNotes;
    }

    /**
     * @return mixed|string
     */
    public function getFall()
    {
        return $this->_fall;
    }

    /**
     * @param mixed|string $fall
     */
    public function setFall($fall)
    {
        $this->_fall = $fall;
    }

    /**
     * @return mixed|string
     */
    public function getFallNotes()
    {
        return $this->_fallNotes;
    }

    /**
     * @param mixed|string $fallNotes
     */
    public function setFallNotes($fallNotes)
    {
        $this->_fallNotes = $fallNotes;
    }

    /**
     * @return mixed|string
     */
    public function getWinter()
    {
        return $this->_winter;
    }

    /**
     * @param mixed|string $winter
     */
    public function setWinter($winter)
    {
        $this->_winter = $winter;
    }

    /**
     * @return mixed|string
     */
    public function getWinterNotes()
    {
        return $this->_winterNotes;
    }

    /**
     * @param mixed|string $winterNotes
     */
    public function setWinterNotes($winterNotes)
    {
        $this->_winterNotes = $winterNotes;
    }

    /**
     * @return mixed|string
     */
    public function getSpring()
    {
        return $this->_spring;
    }

    /**
     * @param mixed|string $spring
     */
    public function setSpring($spring)
    {
        $this->_spring = $spring;
    }

    /**
     * @return mixed|string
     */
    public function getSpringNotes()
    {
        return $this->_springNotes;
    }

    /**
     * @param mixed|string $springNotes
     */
    public function setSpringNotes($springNotes)
    {
        $this->_springNotes = $springNotes;
    }

    /**
     * @return mixed|string
     */
    public function getSummer()
    {
        return $this->_summer;
    }

    /**
     * @param mixed|string $summer
     */
    public function setSummer($summer)
    {
        $this->_summer = $summer;
    }

    /**
     * @return mixed|string
     */
    public function getSummerNotes()
    {
        return $this->_summerNotes;
    }

    /**
     * @param mixed|string $summerNotes
     */
    public function setSummerNotes($summerNotes)
    {
        $this->_summerNotes = $summerNotes;
    }



}