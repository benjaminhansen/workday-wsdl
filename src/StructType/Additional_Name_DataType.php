<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Additional_Name_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the additional names for a person, other than their legal and preferred names. Additional names are not valid for applicants.
 * @subpackage Structs
 */
class Additional_Name_DataType extends AbstractStructBase
{
    /**
     * The Name_Detail_Data
     * Meta information extracted from the WSDL
     * - documentation: Contains the components of a name, such as the First Name and Last Name.
     * @var \WorkdayWsdl\\StructType\Person_Name_Detail_DataType
     */
    public $Name_Detail_Data;
    /**
     * The Name_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: The type of Additional Name that the name is.
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Additional_Name_TypeObjectType
     */
    public $Name_Type_Reference;
    /**
     * Constructor method for Additional_Name_DataType
     * @uses Additional_Name_DataType::setName_Detail_Data()
     * @uses Additional_Name_DataType::setName_Type_Reference()
     * @param \WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Detail_Data
     * @param \WorkdayWsdl\\StructType\Additional_Name_TypeObjectType $name_Type_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Detail_Data = null, \WorkdayWsdl\\StructType\Additional_Name_TypeObjectType $name_Type_Reference = null)
    {
        $this
            ->setName_Detail_Data($name_Detail_Data)
            ->setName_Type_Reference($name_Type_Reference);
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
     * @return \WorkdayWsdl\\StructType\Additional_Name_DataType
     */
    public function setName_Detail_Data(\WorkdayWsdl\\StructType\Person_Name_Detail_DataType $name_Detail_Data = null)
    {
        $this->Name_Detail_Data = $name_Detail_Data;
        return $this;
    }
    /**
     * Get Name_Type_Reference value
     * @return \WorkdayWsdl\\StructType\Additional_Name_TypeObjectType|null
     */
    public function getName_Type_Reference()
    {
        return $this->Name_Type_Reference;
    }
    /**
     * Set Name_Type_Reference value
     * @param \WorkdayWsdl\\StructType\Additional_Name_TypeObjectType $name_Type_Reference
     * @return \WorkdayWsdl\\StructType\Additional_Name_DataType
     */
    public function setName_Type_Reference(\WorkdayWsdl\\StructType\Additional_Name_TypeObjectType $name_Type_Reference = null)
    {
        $this->Name_Type_Reference = $name_Type_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Additional_Name_DataType
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
