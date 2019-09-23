<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Get_Search_Settings_RequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Get search settings
 * @subpackage Structs
 */
class Get_Search_Settings_RequestType extends AbstractStructBase
{
    /**
     * The Response_Filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Response_FilterType
     */
    public $Response_Filter;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - ref: wd:version
     * @var string
     */
    public $version;
    /**
     * Constructor method for Get_Search_Settings_RequestType
     * @uses Get_Search_Settings_RequestType::setResponse_Filter()
     * @uses Get_Search_Settings_RequestType::setVersion()
     * @param \StructType\Response_FilterType $response_Filter
     * @param string $version
     */
    public function __construct(\StructType\Response_FilterType $response_Filter = null, $version = null)
    {
        $this
            ->setResponse_Filter($response_Filter)
            ->setVersion($version);
    }
    /**
     * Get Response_Filter value
     * @return \StructType\Response_FilterType|null
     */
    public function getResponse_Filter()
    {
        return $this->Response_Filter;
    }
    /**
     * Set Response_Filter value
     * @param \StructType\Response_FilterType $response_Filter
     * @return \StructType\Get_Search_Settings_RequestType
     */
    public function setResponse_Filter(\StructType\Response_FilterType $response_Filter = null)
    {
        $this->Response_Filter = $response_Filter;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \StructType\Get_Search_Settings_RequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Get_Search_Settings_RequestType
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
