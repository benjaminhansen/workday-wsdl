<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for External_Form_I-9_Section_2_List_A_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The request element containing all necessary information for Form I-9 Section 2 List A to assign to the worker.
 * @subpackage Structs
 */
class External_Form_I_9_Section_2_List_A_DataType extends AbstractStructBase
{
    /**
     * The External_Form_I_9_Section_2_List_A_Doc_1_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\External_Form_I_9_Section_2_List_A_Doc_1_DataType
     */
    public $External_Form_I_9_Section_2_List_A_Doc_1_Data;
    /**
     * The External_Form_I_9_Section_2_List_A_Doc_2_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\External_Form_I_9_Section_2_List_A_Doc_2_DataType
     */
    public $External_Form_I_9_Section_2_List_A_Doc_2_Data;
    /**
     * The External_Form_I_9_Section_2_List_A_Doc_3_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\External_Form_I_9_Section_2_List_A_Doc_3_DataType
     */
    public $External_Form_I_9_Section_2_List_A_Doc_3_Data;
    /**
     * Constructor method for External_Form_I-9_Section_2_List_A_DataType
     * @uses External_Form_I_9_Section_2_List_A_DataType::setExternal_Form_I_9_Section_2_List_A_Doc_1_Data()
     * @uses External_Form_I_9_Section_2_List_A_DataType::setExternal_Form_I_9_Section_2_List_A_Doc_2_Data()
     * @uses External_Form_I_9_Section_2_List_A_DataType::setExternal_Form_I_9_Section_2_List_A_Doc_3_Data()
     * @param \StructType\External_Form_I_9_Section_2_List_A_Doc_1_DataType $external_Form_I_9_Section_2_List_A_Doc_1_Data
     * @param \StructType\External_Form_I_9_Section_2_List_A_Doc_2_DataType $external_Form_I_9_Section_2_List_A_Doc_2_Data
     * @param \StructType\External_Form_I_9_Section_2_List_A_Doc_3_DataType $external_Form_I_9_Section_2_List_A_Doc_3_Data
     */
    public function __construct(\StructType\External_Form_I_9_Section_2_List_A_Doc_1_DataType $external_Form_I_9_Section_2_List_A_Doc_1_Data = null, \StructType\External_Form_I_9_Section_2_List_A_Doc_2_DataType $external_Form_I_9_Section_2_List_A_Doc_2_Data = null, \StructType\External_Form_I_9_Section_2_List_A_Doc_3_DataType $external_Form_I_9_Section_2_List_A_Doc_3_Data = null)
    {
        $this
            ->setExternal_Form_I_9_Section_2_List_A_Doc_1_Data($external_Form_I_9_Section_2_List_A_Doc_1_Data)
            ->setExternal_Form_I_9_Section_2_List_A_Doc_2_Data($external_Form_I_9_Section_2_List_A_Doc_2_Data)
            ->setExternal_Form_I_9_Section_2_List_A_Doc_3_Data($external_Form_I_9_Section_2_List_A_Doc_3_Data);
    }
    /**
     * Get external_Form_I_Section_List_A_Doc_Data value
     * @return external_Form_I_Section_List_A_Doc_Data
     */
    public function getExternal_Form_I_9_Section_2_List_A_Doc_1_Data()
    {
        return $this->{'External_Form_I-9_Section_2_List_A_Doc_1_Data'};
    }
    /**
     * Set external_Form_I_Section_List_A_Doc_Data value
     * @param external_Form_I_Section_List_A_Doc_Data $external_Form_I_Section_List_A_Doc_Data
     * @return \StructType\External_Form_I_9_Section_2_List_A_DataType
     */
    public function setExternal_Form_I_9_Section_2_List_A_Doc_1_Data(\StructType\External_Form_I_9_Section_2_List_A_Doc_1_DataType $external_Form_I_9_Section_2_List_A_Doc_1_Data = null)
    {
        $this->External_Form_I_9_Section_2_List_A_Doc_1_Data = $this->{'External_Form_I-9_Section_2_List_A_Doc_1_Data'} = $external_Form_I_9_Section_2_List_A_Doc_1_Data;
        return $this;
    }
    /**
     * Get external_Form_I_Section_List_A_Doc_Data value
     * @return external_Form_I_Section_List_A_Doc_Data
     */
    public function getExternal_Form_I_9_Section_2_List_A_Doc_2_Data()
    {
        return $this->{'External_Form_I-9_Section_2_List_A_Doc_2_Data'};
    }
    /**
     * Set external_Form_I_Section_List_A_Doc_Data value
     * @param external_Form_I_Section_List_A_Doc_Data $external_Form_I_Section_List_A_Doc_Data
     * @return \StructType\External_Form_I_9_Section_2_List_A_DataType
     */
    public function setExternal_Form_I_9_Section_2_List_A_Doc_2_Data(\StructType\External_Form_I_9_Section_2_List_A_Doc_2_DataType $external_Form_I_9_Section_2_List_A_Doc_2_Data = null)
    {
        $this->External_Form_I_9_Section_2_List_A_Doc_2_Data = $this->{'External_Form_I-9_Section_2_List_A_Doc_2_Data'} = $external_Form_I_9_Section_2_List_A_Doc_2_Data;
        return $this;
    }
    /**
     * Get external_Form_I_Section_List_A_Doc_Data value
     * @return external_Form_I_Section_List_A_Doc_Data
     */
    public function getExternal_Form_I_9_Section_2_List_A_Doc_3_Data()
    {
        return $this->{'External_Form_I-9_Section_2_List_A_Doc_3_Data'};
    }
    /**
     * Set external_Form_I_Section_List_A_Doc_Data value
     * @param external_Form_I_Section_List_A_Doc_Data $external_Form_I_Section_List_A_Doc_Data
     * @return \StructType\External_Form_I_9_Section_2_List_A_DataType
     */
    public function setExternal_Form_I_9_Section_2_List_A_Doc_3_Data(\StructType\External_Form_I_9_Section_2_List_A_Doc_3_DataType $external_Form_I_9_Section_2_List_A_Doc_3_Data = null)
    {
        $this->External_Form_I_9_Section_2_List_A_Doc_3_Data = $this->{'External_Form_I-9_Section_2_List_A_Doc_3_Data'} = $external_Form_I_9_Section_2_List_A_Doc_3_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\External_Form_I_9_Section_2_List_A_DataType
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
