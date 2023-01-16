<?php

class SavedClasses
{
    private $_token;
    private $_fallClass1;
    private $_fallClass2;
    private $_fallClass3;
    private $_fallNotes;
    private $_winterClass1;
    private $_winterClass2;
    private $_winterClass3;
    private $_winterNotes;
    private $_springClass1;
    private $_springClass2;
    private $_springClass3;
    private $_springNotes;
    private $_summerClass1;
    private $_summerClass2;
    private $_summerClass3;
    private $_summerNotes;

    /**
     * @param string $token
     * @param string $fallClass1
     * @param string $fallClass2
     * @param string $fallClass3
     * @param string $fallNotes
     * @param string $winterClass1
     * @param string $winterClass2
     * @param string $winterClass3
     * @param string $winterNotes
     * @param string $springClass1
     * @param string $springClass2
     * @param string $springClass3
     * @param string $springNotes
     * @param string $summerClass1
     * @param string $summerClass2
     * @param string $summerClass3
     * @param string $summerNotes
     */
    public function __construct($token="", $fallClass1="", $fallClass2="", $fallClass3="",
                                $fallNotes="", $winterClass1="", $winterClass2="", $winterClass3="",
                                $winterNotes="", $springClass1="", $springClass2="", $springClass3="",
                                $springNotes="", $summerClass1="", $summerClass2="", $summerClass3="", $summerNotes="")
    {
        $this->_token = $token;
        $this->_fallClass1 = $fallClass1;
        $this->_fallClass2 = $fallClass2;
        $this->_fallClass3 = $fallClass3;
        $this->_fallNotes = $fallNotes;
        $this->_winterClass1 = $winterClass1;
        $this->_winterClass2 = $winterClass2;
        $this->_winterClass3 = $winterClass3;
        $this->_winterNotes = $winterNotes;
        $this->_springClass1 = $springClass1;
        $this->_springClass2 = $springClass2;
        $this->_springClass3 = $springClass3;
        $this->_springNotes = $springNotes;
        $this->_summerClass1 = $summerClass1;
        $this->_summerClass2 = $summerClass2;
        $this->_summerClass3 = $summerClass3;
        $this->_summerNotes = $summerNotes;
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

    /**
     * @return mixed
     */
    public function getWinterClass1()
    {
        return $this->_winterClass1;
    }

    /**
     * @param mixed $winterClass1
     */
    public function setWinterClass1($winterClass1)
    {
        $this->_winterClass1 = $winterClass1;
    }

    /**
     * @return mixed
     */
    public function getWinterClass2()
    {
        return $this->_winterClass2;
    }

    /**
     * @param mixed $winterClass2
     */
    public function setWinterClass2($winterClass2)
    {
        $this->_winterClass2 = $winterClass2;
    }

    /**
     * @return mixed
     */
    public function getWinterClass3()
    {
        return $this->_winterClass3;
    }

    /**
     * @param mixed $winterClass3
     */
    public function setWinterClass3($winterClass3)
    {
        $this->_winterClass3 = $winterClass3;
    }

    /**
     * @return mixed
     */
    public function getWinterNotes()
    {
        return $this->_winterNotes;
    }

    /**
     * @param mixed $winterNotes
     */
    public function setWinterNotes($winterNotes)
    {
        $this->_winterNotes = $winterNotes;
    }

    /**
     * @return mixed
     */
    public function getSpringClass1()
    {
        return $this->_springClass1;
    }

    /**
     * @param mixed $springClass1
     */
    public function setSpringClass1($springClass1)
    {
        $this->_springClass1 = $springClass1;
    }

    /**
     * @return mixed
     */
    public function getSpringClass2()
    {
        return $this->_springClass2;
    }

    /**
     * @param mixed $springClass2
     */
    public function setSpringClass2($springClass2)
    {
        $this->_springClass2 = $springClass2;
    }

    /**
     * @return mixed
     */
    public function getSpringClass3()
    {
        return $this->_springClass3;
    }

    /**
     * @param mixed $springClass3
     */
    public function setSpringClass3($springClass3)
    {
        $this->_springClass3 = $springClass3;
    }

    /**
     * @return mixed
     */
    public function getSpringNotes()
    {
        return $this->_springNotes;
    }

    /**
     * @param mixed $springNotes
     */
    public function setSpringNotes($springNotes)
    {
        $this->_springNotes = $springNotes;
    }

    /**
     * @return mixed
     */
    public function getSummerClass1()
    {
        return $this->_summerClass1;
    }

    /**
     * @param mixed $summerClass1
     */
    public function setSummerClass1($summerClass1)
    {
        $this->_summerClass1 = $summerClass1;
    }

    /**
     * @return mixed
     */
    public function getSummerClass2()
    {
        return $this->_summerClass2;
    }

    /**
     * @param mixed $summerClass2
     */
    public function setSummerClass2($summerClass2)
    {
        $this->_summerClass2 = $summerClass2;
    }

    /**
     * @return mixed
     */
    public function getSummerClass3()
    {
        return $this->_summerClass3;
    }

    /**
     * @param mixed $summerClass3
     */
    public function setSummerClass3($summerClass3)
    {
        $this->_summerClass3 = $summerClass3;
    }

    /**
     * @return mixed
     */
    public function getSummerNotes()
    {
        return $this->_summerNotes;
    }

    /**
     * @param mixed $summerNotes
     */
    public function setSummerNotes($summerNotes)
    {
        $this->_summerNotes = $summerNotes;
    }
}