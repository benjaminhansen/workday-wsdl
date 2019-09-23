<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Worker_Personal_Info_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all Personal Information for an Employee.
 * @subpackage Structs
 */
class Worker_Personal_Info_DataType extends AbstractStructBase
{
    /**
     * The External_Integration_ID_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\External_Integration_ID_DataType
     */
    public $External_Integration_ID_Data;
    /**
     * The Personal_Info_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Personal_Info_DataType
     */
    public $Personal_Info_Data;
    /**
     * Constructor method for Worker_Personal_Info_DataType
     * @uses Worker_Personal_Info_DataType::setExternal_Integration_ID_Data()
     * @uses Worker_Personal_Info_DataType::setPersonal_Info_Data()
     * @param \StructType\External_Integration_ID_DataType $external_Integration_ID_Data
     * @param \StructType\Personal_Info_DataType $personal_Info_Data
     */
    public function __construct(\StructType\External_Integration_ID_DataType $external_Integration_ID_Data = null, \StructType\Personal_Info_DataType $personal_Info_Data = null)
    {
        $this
            ->setExternal_Integration_ID_Data($external_Integration_ID_Data)
            ->setPersonal_Info_Data($personal_Info_Data);
    }
    /**
     * Get External_Integration_ID_Data value
     * @return \StructType\External_Integration_ID_DataType|null
     */
    public function getExternal_Integration_ID_Data()
    {
        return $this->External_Integration_ID_Data;
    }
    /**
     * Set External_Integration_ID_Data value
     * @param \StructType\External_Integration_ID_DataType $external_Integration_ID_Data
     * @return \StructType\Worker_Personal_Info_DataType
     */
    public function setExternal_Integration_ID_Data(\StructType\External_Integration_ID_DataType $external_Integration_ID_Data = null)
    {
        $this->External_Integration_ID_Data = $external_Integration_ID_Data;
        return $this;
    }
    /**
     * Get Personal_Info_Data value
     * @return \StructType\Personal_Info_DataType|null
     */
    public function getPersonal_Info_Data()
    {
        return $this->Personal_Info_Data;
    }
    /**
     * Set Personal_Info_Data value
     * @param \StructType\Personal_Info_DataType $personal_Info_Data
     * @return \StructType\Worker_Personal_Info_DataType
     */
    public function setPersonal_Info_Data(\StructType\Personal_Info_DataType $personal_Info_Data = null)
    {
        $this->Personal_Info_Data = $personal_Info_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Worker_Personal_Info_DataType
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
