<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Workteam_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Element containing all Team data.
 * @subpackage Structs
 */
class Workteam_DataType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Name
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: HTML-Encoded Workteam Description
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - documentation: ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Workteam_System_Source_Reference
     * Meta information extracted from the WSDL
     * - documentation: The source system in which the Workteam is/was created from
     * - minOccurs: 0
     * @var \StructType\External_Source_SystemObjectType
     */
    public $Workteam_System_Source_Reference;
    /**
     * The Organization_Subtype_Reference
     * Meta information extracted from the WSDL
     * - documentation: The Organization Subtype/s assigned to the Workteam
     * @var \StructType\Organization_SubtypeObjectType
     */
    public $Organization_Subtype_Reference;
    /**
     * The Workteam_Membership_Data
     * Meta information extracted from the WSDL
     * - documentation: Holds data for each individual member of the Workteam
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Workteam_Membership_DataType[]
     */
    public $Workteam_Membership_Data;
    /**
     * Constructor method for Workteam_DataType
     * @uses Workteam_DataType::setName()
     * @uses Workteam_DataType::setDescription()
     * @uses Workteam_DataType::setID()
     * @uses Workteam_DataType::setWorkteam_System_Source_Reference()
     * @uses Workteam_DataType::setOrganization_Subtype_Reference()
     * @uses Workteam_DataType::setWorkteam_Membership_Data()
     * @param string $name
     * @param string $description
     * @param string $iD
     * @param \StructType\External_Source_SystemObjectType $workteam_System_Source_Reference
     * @param \StructType\Organization_SubtypeObjectType $organization_Subtype_Reference
     * @param \StructType\Workteam_Membership_DataType[] $workteam_Membership_Data
     */
    public function __construct($name = null, $description = null, $iD = null, \StructType\External_Source_SystemObjectType $workteam_System_Source_Reference = null, \StructType\Organization_SubtypeObjectType $organization_Subtype_Reference = null, array $workteam_Membership_Data = array())
    {
        $this
            ->setName($name)
            ->setDescription($description)
            ->setID($iD)
            ->setWorkteam_System_Source_Reference($workteam_System_Source_Reference)
            ->setOrganization_Subtype_Reference($organization_Subtype_Reference)
            ->setWorkteam_Membership_Data($workteam_Membership_Data);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\Workteam_DataType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\Workteam_DataType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\Workteam_DataType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Workteam_System_Source_Reference value
     * @return \StructType\External_Source_SystemObjectType|null
     */
    public function getWorkteam_System_Source_Reference()
    {
        return $this->Workteam_System_Source_Reference;
    }
    /**
     * Set Workteam_System_Source_Reference value
     * @param \StructType\External_Source_SystemObjectType $workteam_System_Source_Reference
     * @return \StructType\Workteam_DataType
     */
    public function setWorkteam_System_Source_Reference(\StructType\External_Source_SystemObjectType $workteam_System_Source_Reference = null)
    {
        $this->Workteam_System_Source_Reference = $workteam_System_Source_Reference;
        return $this;
    }
    /**
     * Get Organization_Subtype_Reference value
     * @return \StructType\Organization_SubtypeObjectType|null
     */
    public function getOrganization_Subtype_Reference()
    {
        return $this->Organization_Subtype_Reference;
    }
    /**
     * Set Organization_Subtype_Reference value
     * @param \StructType\Organization_SubtypeObjectType $organization_Subtype_Reference
     * @return \StructType\Workteam_DataType
     */
    public function setOrganization_Subtype_Reference(\StructType\Organization_SubtypeObjectType $organization_Subtype_Reference = null)
    {
        $this->Organization_Subtype_Reference = $organization_Subtype_Reference;
        return $this;
    }
    /**
     * Get Workteam_Membership_Data value
     * @return \StructType\Workteam_Membership_DataType[]|null
     */
    public function getWorkteam_Membership_Data()
    {
        return $this->Workteam_Membership_Data;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkteam_Membership_Data method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkteam_Membership_Data method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkteam_Membership_DataForArrayConstraintsFromSetWorkteam_Membership_Data(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $workteam_DataTypeWorkteam_Membership_DataItem) {
            // validation for constraint: itemType
            if (!$workteam_DataTypeWorkteam_Membership_DataItem instanceof \StructType\Workteam_Membership_DataType) {
                $invalidValues[] = is_object($workteam_DataTypeWorkteam_Membership_DataItem) ? get_class($workteam_DataTypeWorkteam_Membership_DataItem) : sprintf('%s(%s)', gettype($workteam_DataTypeWorkteam_Membership_DataItem), var_export($workteam_DataTypeWorkteam_Membership_DataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workteam_Membership_Data property can only contain items of type \StructType\Workteam_Membership_DataType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workteam_Membership_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Workteam_Membership_DataType[] $workteam_Membership_Data
     * @return \StructType\Workteam_DataType
     */
    public function setWorkteam_Membership_Data(array $workteam_Membership_Data = array())
    {
        // validation for constraint: array
        if ('' !== ($workteam_Membership_DataArrayErrorMessage = self::validateWorkteam_Membership_DataForArrayConstraintsFromSetWorkteam_Membership_Data($workteam_Membership_Data))) {
            throw new \InvalidArgumentException($workteam_Membership_DataArrayErrorMessage, __LINE__);
        }
        $this->Workteam_Membership_Data = $workteam_Membership_Data;
        return $this;
    }
    /**
     * Add item to Workteam_Membership_Data value
     * @throws \InvalidArgumentException
     * @param \StructType\Workteam_Membership_DataType $item
     * @return \StructType\Workteam_DataType
     */
    public function addToWorkteam_Membership_Data(\StructType\Workteam_Membership_DataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Workteam_Membership_DataType) {
            throw new \InvalidArgumentException(sprintf('The Workteam_Membership_Data property can only contain items of type \StructType\Workteam_Membership_DataType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workteam_Membership_Data[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Workteam_DataType
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
