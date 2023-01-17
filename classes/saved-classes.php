<?php

class SavedClasses
{
    private $_token;
    private $_fallClass1;
    private $_fallClass2;
    private $_fallClass3;
    private $_fallNotes;

    /**
     * @param string $token
     * @param string $fallClass1
     * @param string $fallClass2
     * @param string $fallClass3
     * @param string $fallNotes
     */
    public function __construct($token="", $fallClass1="", $fallClass2="", $fallClass3="", $fallNotes="")
    {
        $this->_token = $token;
        $this->_fallClass1 = $fallClass1;
        $this->_fallClass2 = $fallClass2;
        $this->_fallClass3 = $fallClass3;
        $this->_fallNotes = $fallNotes;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->_token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->_token = $token;
    }


    /**
     * @return string
     */
    public function getFallClass1()
    {
        return $this->_fallClass1;
    }

    /**
     * @param mixed $fallClass1
     */
    public function setFallClass1($fallClass1)
    {
        $this->_fallClass1 = $fallClass1;
    }

    /**
     * @return mixed
     */
    public function getFallClass2()
    {
        return $this->_fallClass2;
    }

    /**
     * @param mixed $fallClass2
     */
    public function setFallClass2($fallClass2)
    {
        $this->_fallClass2 = $fallClass2;
    }

    /**
     * @return mixed
     */
    public function getFallClass3()
    {
        return $this->_fallClass3;
    }

    /**
     * @param mixed $fallClass3
     */
    public function setFallClass3($fallClass3)
    {
        $this->_fallClass3 = $fallClass3;
    }

    /**
     * @return mixed
     */
    public function getFallNotes()
    {
        return $this->_fallNotes;
    }

    /**
     * @param mixed $fallNotes
     */
    public function setFallNotes($fallNotes)
    {
        $this->_fallNotes = $fallNotes;
    }


}