<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Provisioning_GroupType StructType
 * Meta information extracted from the WSDL
 * - documentation: Encapsulating element containing all provisioning group data.
 * @subpackage Structs
 */
class Provisioning_GroupType extends AbstractStructBase
{
    /**
     * The Provisioning_Group_Reference
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier used to reference a provisioning group.
     * - minOccurs: 0
     * @var \StructType\Provisioning_GroupObjectType
     */
    public $Provisioning_Group_Reference;
    /**
     * The Provisioning_Group_Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Provisioning_Group_DataType
     */
    public $Provisioning_Group_Data;
    /**
     * Constructor method for Provisioning_GroupType
     * @uses Provisioning_GroupType::setProvisioning_Group_Reference()
     * @uses Provisioning_GroupType::setProvisioning_Group_Data()
     * @param \StructType\Provisioning_GroupObjectType $provisioning_Group_Reference
     * @param \StructType\Provisioning_Group_DataType $provisioning_Group_Data
     */
    public function __construct(\StructType\Provisioning_GroupObjectType $provisioning_Group_Reference = null, \StructType\Provisioning_Group_DataType $provisioning_Group_Data = null)
    {
        $this
            ->setProvisioning_Group_Reference($provisioning_Group_Reference)
            ->setProvisioning_Group_Data($provisioning_Group_Data);
    }
    /**
     * Get Provisioning_Group_Reference value
     * @return \StructType\Provisioning_GroupObjectType|null
     */
    public function getProvisioning_Group_Reference()
    {
        return $this->Provisioning_Group_Reference;
    }
    /**
     * Set Provisioning_Group_Reference value
     * @param \StructType\Provisioning_GroupObjectType $provisioning_Group_Reference
     * @return \StructType\Provisioning_GroupType
     */
    public function setProvisioning_Group_Reference(\StructType\Provisioning_GroupObjectType $provisioning_Group_Reference = null)
    {
        $this->Provisioning_Group_Reference = $provisioning_Group_Reference;
        return $this;
    }
    /**
     * Get Provisioning_Group_Data value
     * @return \StructType\Provisioning_Group_DataType|null
     */
    public function getProvisioning_Group_Data()
    {
        return $this->Provisioning_Group_Data;
    }
    /**
     * Set Provisioning_Group_Data value
     * @param \StructType\Provisioning_Group_DataType $provisioning_Group_Data
     * @return \StructType\Provisioning_GroupType
     */
    public function setProvisioning_Group_Data(\StructType\Provisioning_Group_DataType $provisioning_Group_Data = null)
    {
        $this->Provisioning_Group_Data = $provisioning_Group_Data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Provisioning_GroupType
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
