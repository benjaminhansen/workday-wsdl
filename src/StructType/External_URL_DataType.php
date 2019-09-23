<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_URL_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: This element contains the details of an external URL.
 * @subpackage Structs
 */
class External_URL_DataType extends AbstractStructBase
{
    /**
     * The URL_Name
     * Meta information extracted from the WSDL
     * - documentation: Name of external URL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URL_Name;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: Value of external URL (hyperlink)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * Constructor method for External_URL_DataType
     * @uses External_URL_DataType::setURL_Name()
     * @uses External_URL_DataType::setURL()
     * @param string $uRL_Name
     * @param string $uRL
     */
    public function __construct($uRL_Name = null, $uRL = null)
    {
        $this
            ->setURL_Name($uRL_Name)
            ->setURL($uRL);
    }
    /**
     * Get URL_Name value
     * @return string|null
     */
    public function getURL_Name()
    {
        return $this->URL_Name;
    }
    /**
     * Set URL_Name value
     * @param string $uRL_Name
     * @return \StructType\External_URL_DataType
     */
    public function setURL_Name($uRL_Name = null)
    {
        // validation for constraint: string
        if (!is_null($uRL_Name) && !is_string($uRL_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL_Name, true), gettype($uRL_Name)), __LINE__);
        }
        $this->URL_Name = $uRL_Name;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \StructType\External_URL_DataType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\External_URL_DataType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
