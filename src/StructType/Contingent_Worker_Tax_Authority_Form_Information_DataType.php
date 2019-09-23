<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contingent_Worker_Tax_Authority_Form_Information_DataType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Contingent Worker Tax Authority Form Information
 * @subpackage Structs
 */
class Contingent_Worker_Tax_Authority_Form_Information_DataType extends AbstractStructBase
{
    /**
     * The Tax_Authority_Form_Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: This is the Tax Authority Form Type for the Contingent Worker
     * - minOccurs: 0
     * @var \StructType\Tax_Authority_Form_TypeObjectType
     */
    public $Tax_Authority_Form_Type_Reference;
    /**
     * Constructor method for Contingent_Worker_Tax_Authority_Form_Information_DataType
     * @uses Contingent_Worker_Tax_Authority_Form_Information_DataType::setTax_Authority_Form_Type_Reference()
     * @param \StructType\Tax_Authority_Form_TypeObjectType $tax_Authority_Form_Type_Reference
     */
    public function __construct(\StructType\Tax_Authority_Form_TypeObjectType $tax_Authority_Form_Type_Reference = null)
    {
        $this
            ->setTax_Authority_Form_Type_Reference($tax_Authority_Form_Type_Reference);
    }
    /**
     * Get Tax_Authority_Form_Type_Reference value
     * @return \StructType\Tax_Authority_Form_TypeObjectType|null
     */
    public function getTax_Authority_Form_Type_Reference()
    {
        return $this->Tax_Authority_Form_Type_Reference;
    }
    /**
     * Set Tax_Authority_Form_Type_Reference value
     * @param \StructType\Tax_Authority_Form_TypeObjectType $tax_Authority_Form_Type_Reference
     * @return \StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType
     */
    public function setTax_Authority_Form_Type_Reference(\StructType\Tax_Authority_Form_TypeObjectType $tax_Authority_Form_Type_Reference = null)
    {
        $this->Tax_Authority_Form_Type_Reference = $tax_Authority_Form_Type_Reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Contingent_Worker_Tax_Authority_Form_Information_DataType
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
