<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Preferred_Name_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the preferred name for a person. If no preferred name is returned then the legal name is assumed to be the preferred name. If a preferred name is not provided in a request then the legal name is assumed to be the preferred
 * name.
 * @subpackage Structs
 */
class Preferred_Name_DataType extends AbstractStructBase
{
    /**
     * The Name_Detail_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the components of a name, such as the First Name and Last Name.
     * @var \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public $Name_Detail_Data;
    /**
     * Constructor method for Preferred_Name_DataType
     * @uses Preferred_Name_DataType::setName_Detail_Data()
     * @param \WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Detail_Data
     */
    public function __construct(\WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Detail_Data = null)
    {
        $this
            ->setName_Detail_Data($name_Detail_Data);
    }
    /**
     * Get Name_Detail_Data value
     * @return \WorkdayWsdl\\StructType\Person_Name_Detail_DataType|null
     */
    public function getName_Detail_Data()
    {
        return $this->Name_Detail_Data;
    }
    /**
     * Set Name_Detail_Data value
     * @param \WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Detail_Data
     * @return \WorkdayWsdl\\StructType\Preferred_Name_DataType
     */
    public function setName_Detail_Data(\WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Detail_Data = null)
    {
        $this->Name_Detail_Data = $name_Detail_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Preferred_Name_DataType
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
