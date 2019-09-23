<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workers_Compensation_Replacement_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing Workers' Compensation Code data for a Job Profile.
 * @subpackage Structs
 */
class Workers_Compensation_Replacement_DataType extends AbstractStructBase
{
    /**
     * The Workers_Compensation_Code_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an existing Workers' Compensation Code
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType
     */
    public $Workers_Compensation_Code_Reference;
    /**
     * Constructor method for Workers_Compensation_Replacement_DataType
     * @uses Workers_Compensation_Replacement_DataType::setWorkers_Compensation_Code_Reference()
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference
     */
    public function __construct(\WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference = null)
    {
        $this
            ->setWorkers_Compensation_Code_Reference($workers_Compensation_Code_Reference);
    }
    /**
     * Get Workers_Compensation_Code_Reference value
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType|null
     */
    public function getWorkers_Compensation_Code_Reference()
    {
        return $this->Workers_Compensation_Code_Reference;
    }
    /**
     * Set Workers_Compensation_Code_Reference value
     * @param \WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Replacement_DataType
     */
    public function setWorkers_Compensation_Code_Reference(\WorkdayWsdl\\StructType\Workers_Compensation_CodeObjectType $workers_Compensation_Code_Reference = null)
    {
        $this->Workers_Compensation_Code_Reference = $workers_Compensation_Code_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Workers_Compensation_Replacement_DataType
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
