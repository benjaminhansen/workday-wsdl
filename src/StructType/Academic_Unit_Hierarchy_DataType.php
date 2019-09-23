<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Academic_Unit_Hierarchy_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Wrapper element for Academic Unit Hierarchy attributes and relationships.
 * @subpackage Structs
 */
class Academic_Unit_Hierarchy_DataType extends AbstractStructBase
{
    /**
     * The Academic_Unit_Hierarchy_ID
     * Meta information extracted from the WSDL
     * - documentation: Reference ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Academic_Unit_Hierarchy_ID;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Descriptive name
     * - maxOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Code or abbreviation
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Include_Code_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the Code should be included in the display name
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Code_in_Name;
    /**
     * The Include_Leadership_Role_Incumbent_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the name of the person assigned to the leadership role should be included in the display name
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Leadership_Role_Incumbent_in_Name;
    /**
     * The Include_Subtype_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the subtype should be included in the display name
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Subtype_in_Name;
    /**
     * The Type_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the subtype
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType
     */
    public $Type_Reference;
    /**
     * The External_URL_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to an external URL
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\External_URLObjectType
     */
    public $External_URL_Reference;
    /**
     * The Superior_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the superior or parent Academic Unit Hierarchy
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType
     */
    public $Superior_Reference;
    /**
     * The Subordinate_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference to the subordinate Academic Unit Hierarchies. This is for display only. The superior-subordinate relationship is set by using the superior reference
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType[]
     */
    public $Subordinate_Reference;
    /**
     * The Academic_Unit_Reference
     * Meta information extracted from the WSDL
     * - documentation: Reference(s) to the Academic Unit included in this Academic Unit Hierarchy
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\Academic_UnitObjectType[]
     */
    public $Academic_Unit_Reference;
    /**
     * The Inactive
     * Meta information extracted from the WSDL
     * - documentation: Indicates the Academic Unit Hierarchy is not active.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Inactive;
    /**
     * Constructor method for Academic_Unit_Hierarchy_DataType
     * @uses Academic_Unit_Hierarchy_DataType::setAcademic_Unit_Hierarchy_ID()
     * @uses Academic_Unit_Hierarchy_DataType::setName()
     * @uses Academic_Unit_Hierarchy_DataType::setCode()
     * @uses Academic_Unit_Hierarchy_DataType::setInclude_Code_in_Name()
     * @uses Academic_Unit_Hierarchy_DataType::setInclude_Leadership_Role_Incumbent_in_Name()
     * @uses Academic_Unit_Hierarchy_DataType::setInclude_Subtype_in_Name()
     * @uses Academic_Unit_Hierarchy_DataType::setType_Reference()
     * @uses Academic_Unit_Hierarchy_DataType::setExternal_URL_Reference()
     * @uses Academic_Unit_Hierarchy_DataType::setSuperior_Reference()
     * @uses Academic_Unit_Hierarchy_DataType::setSubordinate_Reference()
     * @uses Academic_Unit_Hierarchy_DataType::setAcademic_Unit_Reference()
     * @uses Academic_Unit_Hierarchy_DataType::setInactive()
     * @param string $academic_Unit_Hierarchy_ID
     * @param string $name
     * @param string $code
     * @param bool $include_Code_in_Name
     * @param bool $include_Leadership_Role_Incumbent_in_Name
     * @param bool $include_Subtype_in_Name
     * @param \WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType $type_Reference
     * @param \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference
     * @param \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType $superior_Reference
     * @param \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType[] $subordinate_Reference
     * @param \WorkdayWsdl\\StructType\Academic_UnitObjectType[] $academic_Unit_Reference
     * @param bool $inactive
     */
    public function __construct($academic_Unit_Hierarchy_ID = null, $name = null, $code = null, $include_Code_in_Name = null, $include_Leadership_Role_Incumbent_in_Name = null, $include_Subtype_in_Name = null, \WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType $type_Reference = null, \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference = null, \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType $superior_Reference = null, array $subordinate_Reference = array(), array $academic_Unit_Reference = array(), $inactive = null)
    {
        $this
            ->setAcademic_Unit_Hierarchy_ID($academic_Unit_Hierarchy_ID)
            ->setName($name)
            ->setCode($code)
            ->setInclude_Code_in_Name($include_Code_in_Name)
            ->setInclude_Leadership_Role_Incumbent_in_Name($include_Leadership_Role_Incumbent_in_Name)
            ->setInclude_Subtype_in_Name($include_Subtype_in_Name)
            ->setType_Reference($type_Reference)
            ->setExternal_URL_Reference($external_URL_Reference)
            ->setSuperior_Reference($superior_Reference)
            ->setSubordinate_Reference($subordinate_Reference)
            ->setAcademic_Unit_Reference($academic_Unit_Reference)
            ->setInactive($inactive);
    }
    /**
     * Get Academic_Unit_Hierarchy_ID value
     * @return string|null
     */
    public function getAcademic_Unit_Hierarchy_ID()
    {
        return $this->Academic_Unit_Hierarchy_ID;
    }
    /**
     * Set Academic_Unit_Hierarchy_ID value
     * @param string $academic_Unit_Hierarchy_ID
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function setAcademic_Unit_Hierarchy_ID($academic_Unit_Hierarchy_ID = null)
    {
        // validation for constraint: string
        if (!is_null($academic_Unit_Hierarchy_ID) && !is_string($academic_Unit_Hierarchy_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($academic_Unit_Hierarchy_ID, true), gettype($academic_Unit_Hierarchy_ID)), __LINE__);
        }
        $this->Academic_Unit_Hierarchy_ID = $academic_Unit_Hierarchy_ID;
        return $this;
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
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
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
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Include_Code_in_Name value
     * @return bool|null
     */
    public function getInclude_Code_in_Name()
    {
        return $this->Include_Code_in_Name;
    }
    /**
     * Set Include_Code_in_Name value
     * @param bool $include_Code_in_Name
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function setInclude_Code_in_Name($include_Code_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Code_in_Name) && !is_bool($include_Code_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Code_in_Name, true), gettype($include_Code_in_Name)), __LINE__);
        }
        $this->Include_Code_in_Name = $include_Code_in_Name;
        return $this;
    }
    /**
     * Get Include_Leadership_Role_Incumbent_in_Name value
     * @return bool|null
     */
    public function getInclude_Leadership_Role_Incumbent_in_Name()
    {
        return $this->Include_Leadership_Role_Incumbent_in_Name;
    }
    /**
     * Set Include_Leadership_Role_Incumbent_in_Name value
     * @param bool $include_Leadership_Role_Incumbent_in_Name
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function setInclude_Leadership_Role_Incumbent_in_Name($include_Leadership_Role_Incumbent_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Leadership_Role_Incumbent_in_Name) && !is_bool($include_Leadership_Role_Incumbent_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Leadership_Role_Incumbent_in_Name, true), gettype($include_Leadership_Role_Incumbent_in_Name)), __LINE__);
        }
        $this->Include_Leadership_Role_Incumbent_in_Name = $include_Leadership_Role_Incumbent_in_Name;
        return $this;
    }
    /**
     * Get Include_Subtype_in_Name value
     * @return bool|null
     */
    public function getInclude_Subtype_in_Name()
    {
        return $this->Include_Subtype_in_Name;
    }
    /**
     * Set Include_Subtype_in_Name value
     * @param bool $include_Subtype_in_Name
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function setInclude_Subtype_in_Name($include_Subtype_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Subtype_in_Name) && !is_bool($include_Subtype_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Subtype_in_Name, true), gettype($include_Subtype_in_Name)), __LINE__);
        }
        $this->Include_Subtype_in_Name = $include_Subtype_in_Name;
        return $this;
    }
    /**
     * Get Type_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType|null
     */
    public function getType_Reference()
    {
        return $this->Type_Reference;
    }
    /**
     * Set Type_Reference value
     * @param \WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType $type_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function setType_Reference(\WorkdayWsdl\\StructType\Academic_Unit_SubtypeObjectType $type_Reference = null)
    {
        $this->Type_Reference = $type_Reference;
        return $this;
    }
    /**
     * Get External_URL_Reference value
     * @return \WorkdayWsdl\\StructType\External_URLObjectType|null
     */
    public function getExternal_URL_Reference()
    {
        return $this->External_URL_Reference;
    }
    /**
     * Set External_URL_Reference value
     * @param \WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function setExternal_URL_Reference(\WorkdayWsdl\\StructType\External_URLObjectType $external_URL_Reference = null)
    {
        $this->External_URL_Reference = $external_URL_Reference;
        return $this;
    }
    /**
     * Get Superior_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType|null
     */
    public function getSuperior_Reference()
    {
        return $this->Superior_Reference;
    }
    /**
     * Set Superior_Reference value
     * @param \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType $superior_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function setSuperior_Reference(\WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType $superior_Reference = null)
    {
        $this->Superior_Reference = $superior_Reference;
        return $this;
    }
    /**
     * Get Subordinate_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType[]|null
     */
    public function getSubordinate_Reference()
    {
        return $this->Subordinate_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setSubordinate_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubordinate_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubordinate_ReferenceForArrayConstraintsFromSetSubordinate_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Unit_Hierarchy_DataTypeSubordinate_ReferenceItem) {
            // validation for constraint: itemType
            if (!$academic_Unit_Hierarchy_DataTypeSubordinate_ReferenceItem instanceof \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType) {
                $invalidValues[] = is_object($academic_Unit_Hierarchy_DataTypeSubordinate_ReferenceItem) ? get_class($academic_Unit_Hierarchy_DataTypeSubordinate_ReferenceItem) : sprintf('%s(%s)', gettype($academic_Unit_Hierarchy_DataTypeSubordinate_ReferenceItem), var_export($academic_Unit_Hierarchy_DataTypeSubordinate_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Subordinate_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Subordinate_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType[] $subordinate_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function setSubordinate_Reference(array $subordinate_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($subordinate_ReferenceArrayErrorMessage = self::validateSubordinate_ReferenceForArrayConstraintsFromSetSubordinate_Reference($subordinate_Reference))) {
            throw new \InvalidArgumentException($subordinate_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Subordinate_Reference = $subordinate_Reference;
        return $this;
    }
    /**
     * Add item to Subordinate_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType $item
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function addToSubordinate_Reference(\WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType) {
            throw new \InvalidArgumentException(sprintf('The Subordinate_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_Unit_HierarchyObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Subordinate_Reference[] = $item;
        return $this;
    }
    /**
     * Get Academic_Unit_Reference value
     * @return \WorkdayWsdl\\StructType\Academic_UnitObjectType[]|null
     */
    public function getAcademic_Unit_Reference()
    {
        return $this->Academic_Unit_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setAcademic_Unit_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcademic_Unit_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcademic_Unit_ReferenceForArrayConstraintsFromSetAcademic_Unit_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $academic_Unit_Hierarchy_DataTypeAcademic_Unit_ReferenceItem) {
            // validation for constraint: itemType
            if (!$academic_Unit_Hierarchy_DataTypeAcademic_Unit_ReferenceItem instanceof \WorkdayWsdl\\StructType\Academic_UnitObjectType) {
                $invalidValues[] = is_object($academic_Unit_Hierarchy_DataTypeAcademic_Unit_ReferenceItem) ? get_class($academic_Unit_Hierarchy_DataTypeAcademic_Unit_ReferenceItem) : sprintf('%s(%s)', gettype($academic_Unit_Hierarchy_DataTypeAcademic_Unit_ReferenceItem), var_export($academic_Unit_Hierarchy_DataTypeAcademic_Unit_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Academic_Unit_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_UnitObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Academic_Unit_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_UnitObjectType[] $academic_Unit_Reference
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function setAcademic_Unit_Reference(array $academic_Unit_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($academic_Unit_ReferenceArrayErrorMessage = self::validateAcademic_Unit_ReferenceForArrayConstraintsFromSetAcademic_Unit_Reference($academic_Unit_Reference))) {
            throw new \InvalidArgumentException($academic_Unit_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Academic_Unit_Reference = $academic_Unit_Reference;
        return $this;
    }
    /**
     * Add item to Academic_Unit_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\Academic_UnitObjectType $item
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function addToAcademic_Unit_Reference(\WorkdayWsdl\\StructType\Academic_UnitObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\Academic_UnitObjectType) {
            throw new \InvalidArgumentException(sprintf('The Academic_Unit_Reference property can only contain items of type \WorkdayWsdl\\StructType\Academic_UnitObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Academic_Unit_Reference[] = $item;
        return $this;
    }
    /**
     * Get Inactive value
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->Inactive;
    }
    /**
     * Set Inactive value
     * @param bool $inactive
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
     */
    public function setInactive($inactive = null)
    {
        // validation for constraint: boolean
        if (!is_null($inactive) && !is_bool($inactive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inactive, true), gettype($inactive)), __LINE__);
        }
        $this->Inactive = $inactive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Academic_Unit_Hierarchy_DataType
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
