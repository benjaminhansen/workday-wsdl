<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organization_Name_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: Organization Code is required If 'Include Organization Code in Name' is selected. | Contains information for Organization name data
 * @subpackage Structs
 */
class Organization_Name_DataType extends AbstractStructBase
{
    /**
     * The Effective_Date
     * Meta information extracted from the WSDL
     * - documentation: Effective Date
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Effective_Date;
    /**
     * The Organization_ID
     * Meta information extracted from the WSDL
     * - documentation: Integration Reference ID used for integration purposes; This is also the Organization ID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_ID;
    /**
     * The Organization_Name
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Organization Name.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Name;
    /**
     * The Phonetic_Name
     * Meta information extracted from the WSDL
     * - documentation: Phonetic Name
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Phonetic_Name;
    /**
     * The Include_Organization_ID_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether to include the Organization ID within the name (Display ID within Workday).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Organization_ID_in_Name;
    /**
     * The Organization_Code
     * Meta information extracted from the WSDL
     * - documentation: Text attribute identifying Organization Code.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Organization_Code;
    /**
     * The Include_Organization_Code_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether to include the Organization Code within the name (Display ID within Workday).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Organization_Code_in_Name;
    /**
     * The Include_Manager_Leader_in_Name
     * Meta information extracted from the WSDL
     * - documentation: Boolean attribute identifying whether to include the Manager/Leader Name within the name (Display ID in Workday).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Include_Manager_Leader_in_Name;
    /**
     * Constructor method for Organization_Name_DataType
     * @uses Organization_Name_DataType::setEffective_Date()
     * @uses Organization_Name_DataType::setOrganization_ID()
     * @uses Organization_Name_DataType::setOrganization_Name()
     * @uses Organization_Name_DataType::setPhonetic_Name()
     * @uses Organization_Name_DataType::setInclude_Organization_ID_in_Name()
     * @uses Organization_Name_DataType::setOrganization_Code()
     * @uses Organization_Name_DataType::setInclude_Organization_Code_in_Name()
     * @uses Organization_Name_DataType::setInclude_Manager_Leader_in_Name()
     * @param string $effective_Date
     * @param string $organization_ID
     * @param string $organization_Name
     * @param string $phonetic_Name
     * @param bool $include_Organization_ID_in_Name
     * @param string $organization_Code
     * @param bool $include_Organization_Code_in_Name
     * @param bool $include_Manager_Leader_in_Name
     */
    public function __construct($effective_Date = null, $organization_ID = null, $organization_Name = null, $phonetic_Name = null, $include_Organization_ID_in_Name = null, $organization_Code = null, $include_Organization_Code_in_Name = null, $include_Manager_Leader_in_Name = null)
    {
        $this
            ->setEffective_Date($effective_Date)
            ->setOrganization_ID($organization_ID)
            ->setOrganization_Name($organization_Name)
            ->setPhonetic_Name($phonetic_Name)
            ->setInclude_Organization_ID_in_Name($include_Organization_ID_in_Name)
            ->setOrganization_Code($organization_Code)
            ->setInclude_Organization_Code_in_Name($include_Organization_Code_in_Name)
            ->setInclude_Manager_Leader_in_Name($include_Manager_Leader_in_Name);
    }
    /**
     * Get Effective_Date value
     * @return string|null
     */
    public function getEffective_Date()
    {
        return $this->Effective_Date;
    }
    /**
     * Set Effective_Date value
     * @param string $effective_Date
     * @return \StructType\Organization_Name_DataType
     */
    public function setEffective_Date($effective_Date = null)
    {
        // validation for constraint: string
        if (!is_null($effective_Date) && !is_string($effective_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effective_Date, true), gettype($effective_Date)), __LINE__);
        }
        $this->Effective_Date = $effective_Date;
        return $this;
    }
    /**
     * Get Organization_ID value
     * @return string|null
     */
    public function getOrganization_ID()
    {
        return $this->Organization_ID;
    }
    /**
     * Set Organization_ID value
     * @param string $organization_ID
     * @return \StructType\Organization_Name_DataType
     */
    public function setOrganization_ID($organization_ID = null)
    {
        // validation for constraint: string
        if (!is_null($organization_ID) && !is_string($organization_ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_ID, true), gettype($organization_ID)), __LINE__);
        }
        $this->Organization_ID = $organization_ID;
        return $this;
    }
    /**
     * Get Organization_Name value
     * @return string|null
     */
    public function getOrganization_Name()
    {
        return $this->Organization_Name;
    }
    /**
     * Set Organization_Name value
     * @param string $organization_Name
     * @return \StructType\Organization_Name_DataType
     */
    public function setOrganization_Name($organization_Name = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Name) && !is_string($organization_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Name, true), gettype($organization_Name)), __LINE__);
        }
        $this->Organization_Name = $organization_Name;
        return $this;
    }
    /**
     * Get Phonetic_Name value
     * @return string|null
     */
    public function getPhonetic_Name()
    {
        return $this->Phonetic_Name;
    }
    /**
     * Set Phonetic_Name value
     * @param string $phonetic_Name
     * @return \StructType\Organization_Name_DataType
     */
    public function setPhonetic_Name($phonetic_Name = null)
    {
        // validation for constraint: string
        if (!is_null($phonetic_Name) && !is_string($phonetic_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phonetic_Name, true), gettype($phonetic_Name)), __LINE__);
        }
        $this->Phonetic_Name = $phonetic_Name;
        return $this;
    }
    /**
     * Get Include_Organization_ID_in_Name value
     * @return bool|null
     */
    public function getInclude_Organization_ID_in_Name()
    {
        return $this->Include_Organization_ID_in_Name;
    }
    /**
     * Set Include_Organization_ID_in_Name value
     * @param bool $include_Organization_ID_in_Name
     * @return \StructType\Organization_Name_DataType
     */
    public function setInclude_Organization_ID_in_Name($include_Organization_ID_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Organization_ID_in_Name) && !is_bool($include_Organization_ID_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Organization_ID_in_Name, true), gettype($include_Organization_ID_in_Name)), __LINE__);
        }
        $this->Include_Organization_ID_in_Name = $include_Organization_ID_in_Name;
        return $this;
    }
    /**
     * Get Organization_Code value
     * @return string|null
     */
    public function getOrganization_Code()
    {
        return $this->Organization_Code;
    }
    /**
     * Set Organization_Code value
     * @param string $organization_Code
     * @return \StructType\Organization_Name_DataType
     */
    public function setOrganization_Code($organization_Code = null)
    {
        // validation for constraint: string
        if (!is_null($organization_Code) && !is_string($organization_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organization_Code, true), gettype($organization_Code)), __LINE__);
        }
        $this->Organization_Code = $organization_Code;
        return $this;
    }
    /**
     * Get Include_Organization_Code_in_Name value
     * @return bool|null
     */
    public function getInclude_Organization_Code_in_Name()
    {
        return $this->Include_Organization_Code_in_Name;
    }
    /**
     * Set Include_Organization_Code_in_Name value
     * @param bool $include_Organization_Code_in_Name
     * @return \StructType\Organization_Name_DataType
     */
    public function setInclude_Organization_Code_in_Name($include_Organization_Code_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Organization_Code_in_Name) && !is_bool($include_Organization_Code_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Organization_Code_in_Name, true), gettype($include_Organization_Code_in_Name)), __LINE__);
        }
        $this->Include_Organization_Code_in_Name = $include_Organization_Code_in_Name;
        return $this;
    }
    /**
     * Get Include_Manager_Leader_in_Name value
     * @return bool|null
     */
    public function getInclude_Manager_Leader_in_Name()
    {
        return $this->Include_Manager_Leader_in_Name;
    }
    /**
     * Set Include_Manager_Leader_in_Name value
     * @param bool $include_Manager_Leader_in_Name
     * @return \StructType\Organization_Name_DataType
     */
    public function setInclude_Manager_Leader_in_Name($include_Manager_Leader_in_Name = null)
    {
        // validation for constraint: boolean
        if (!is_null($include_Manager_Leader_in_Name) && !is_bool($include_Manager_Leader_in_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($include_Manager_Leader_in_Name, true), gettype($include_Manager_Leader_in_Name)), __LINE__);
        }
        $this->Include_Manager_Leader_in_Name = $include_Manager_Leader_in_Name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organization_Name_DataType
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
