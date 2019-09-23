<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Local_Person_Name_Detail_DataType StructType
 * Meta information extracted from the WSDL
 * - documentation: The Local First Name 2 field accepts only Kana script. | Local Secondary Last Name 2 is not set up for this country. | Local Secondary Last Name is not set up for this country. | The Local Last Name 2 field accepts only Kana script.
 * | Local Middle Name 2 is not set up for this country. | Local Middle Name is not set up for this country. | Local Last Name 2 is not set up for this country. | Local First Name is not set up for this country. | If one local script is submitted, all
 * required local script name fields must be submitted. | Local First Name 2 is not set up for this country. | Local Last Name is not set up for this country. | Contains the components of a name in local script, such as the First Name and Last Name, for
 * supporting countries.
 * @subpackage Structs
 */
class Local_Person_Name_Detail_DataType extends AbstractStructBase
{
    /**
     * The First_Name
     * Meta information extracted from the WSDL
     * - documentation: Contains First Name in local script, which is generally configured to as Given Name, for supporting Countries.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Name;
    /**
     * The Middle_Name
     * Meta information extracted from the WSDL
     * - documentation: Contains Middle Name in local script for supporting Countries.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Middle_Name;
    /**
     * The Last_Name
     * Meta information extracted from the WSDL
     * - documentation: Contains Last Name in local script, which is generally configured as Family Name, for supporting Countries.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Name;
    /**
     * The Secondary_Last_Name
     * Meta information extracted from the WSDL
     * - documentation: Contains Secondary Last Name in local script, which is generally configured as Maternal Family Name, for supporting Countries.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Secondary_Last_Name;
    /**
     * The First_Name_2
     * Meta information extracted from the WSDL
     * - documentation: Contains First Name in second local script, which is generally configured as Given Name, for supporting Countries.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $First_Name_2;
    /**
     * The Middle_Name_2
     * Meta information extracted from the WSDL
     * - documentation: Contains Middle Name in second local script for supporting Countries.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Middle_Name_2;
    /**
     * The Last_Name_2
     * Meta information extracted from the WSDL
     * - documentation: Contains Last Name in second local script, which is generally configured as Given Name, for supporting Countries.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Last_Name_2;
    /**
     * The Secondary_Last_Name_2
     * Meta information extracted from the WSDL
     * - documentation: Contains Secondary Last Name in second local script, which is generally configured as Maternal Family Name, for supporting Countries.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Secondary_Last_Name_2;
    /**
     * The Local_Name
     * Meta information extracted from the WSDL
     * - documentation: Contains the formatted Local Name in local script as configured for the Country
     * @var string
     */
    public $Local_Name;
    /**
     * The Local_Script
     * Meta information extracted from the WSDL
     * - documentation: Contains the formatted Local Script Name which contains the ISO code and name.
     * @var string
     */
    public $Local_Script;
    /**
     * Constructor method for Local_Person_Name_Detail_DataType
     * @uses Local_Person_Name_Detail_DataType::setFirst_Name()
     * @uses Local_Person_Name_Detail_DataType::setMiddle_Name()
     * @uses Local_Person_Name_Detail_DataType::setLast_Name()
     * @uses Local_Person_Name_Detail_DataType::setSecondary_Last_Name()
     * @uses Local_Person_Name_Detail_DataType::setFirst_Name_2()
     * @uses Local_Person_Name_Detail_DataType::setMiddle_Name_2()
     * @uses Local_Person_Name_Detail_DataType::setLast_Name_2()
     * @uses Local_Person_Name_Detail_DataType::setSecondary_Last_Name_2()
     * @uses Local_Person_Name_Detail_DataType::setLocal_Name()
     * @uses Local_Person_Name_Detail_DataType::setLocal_Script()
     * @param string $first_Name
     * @param string $middle_Name
     * @param string $last_Name
     * @param string $secondary_Last_Name
     * @param string $first_Name_2
     * @param string $middle_Name_2
     * @param string $last_Name_2
     * @param string $secondary_Last_Name_2
     * @param string $local_Name
     * @param string $local_Script
     */
    public function __construct($first_Name = null, $middle_Name = null, $last_Name = null, $secondary_Last_Name = null, $first_Name_2 = null, $middle_Name_2 = null, $last_Name_2 = null, $secondary_Last_Name_2 = null, $local_Name = null, $local_Script = null)
    {
        $this
            ->setFirst_Name($first_Name)
            ->setMiddle_Name($middle_Name)
            ->setLast_Name($last_Name)
            ->setSecondary_Last_Name($secondary_Last_Name)
            ->setFirst_Name_2($first_Name_2)
            ->setMiddle_Name_2($middle_Name_2)
            ->setLast_Name_2($last_Name_2)
            ->setSecondary_Last_Name_2($secondary_Last_Name_2)
            ->setLocal_Name($local_Name)
            ->setLocal_Script($local_Script);
    }
    /**
     * Get First_Name value
     * @return string|null
     */
    public function getFirst_Name()
    {
        return $this->First_Name;
    }
    /**
     * Set First_Name value
     * @param string $first_Name
     * @return \StructType\Local_Person_Name_Detail_DataType
     */
    public function setFirst_Name($first_Name = null)
    {
        // validation for constraint: string
        if (!is_null($first_Name) && !is_string($first_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_Name, true), gettype($first_Name)), __LINE__);
        }
        $this->First_Name = $first_Name;
        return $this;
    }
    /**
     * Get Middle_Name value
     * @return string|null
     */
    public function getMiddle_Name()
    {
        return $this->Middle_Name;
    }
    /**
     * Set Middle_Name value
     * @param string $middle_Name
     * @return \StructType\Local_Person_Name_Detail_DataType
     */
    public function setMiddle_Name($middle_Name = null)
    {
        // validation for constraint: string
        if (!is_null($middle_Name) && !is_string($middle_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middle_Name, true), gettype($middle_Name)), __LINE__);
        }
        $this->Middle_Name = $middle_Name;
        return $this;
    }
    /**
     * Get Last_Name value
     * @return string|null
     */
    public function getLast_Name()
    {
        return $this->Last_Name;
    }
    /**
     * Set Last_Name value
     * @param string $last_Name
     * @return \StructType\Local_Person_Name_Detail_DataType
     */
    public function setLast_Name($last_Name = null)
    {
        // validation for constraint: string
        if (!is_null($last_Name) && !is_string($last_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Name, true), gettype($last_Name)), __LINE__);
        }
        $this->Last_Name = $last_Name;
        return $this;
    }
    /**
     * Get Secondary_Last_Name value
     * @return string|null
     */
    public function getSecondary_Last_Name()
    {
        return $this->Secondary_Last_Name;
    }
    /**
     * Set Secondary_Last_Name value
     * @param string $secondary_Last_Name
     * @return \StructType\Local_Person_Name_Detail_DataType
     */
    public function setSecondary_Last_Name($secondary_Last_Name = null)
    {
        // validation for constraint: string
        if (!is_null($secondary_Last_Name) && !is_string($secondary_Last_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondary_Last_Name, true), gettype($secondary_Last_Name)), __LINE__);
        }
        $this->Secondary_Last_Name = $secondary_Last_Name;
        return $this;
    }
    /**
     * Get First_Name value
     * @return string|null
     */
    public function getFirst_Name_2()
    {
        return $this->First_Name_2;
    }
    /**
     * Set First_Name value
     * @param string $first_Name
     * @return \StructType\Local_Person_Name_Detail_DataType
     */
    public function setFirst_Name_2($first_Name_2 = null)
    {
        // validation for constraint: string
        if (!is_null($first_Name_2) && !is_string($first_Name_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first_Name_2, true), gettype($first_Name_2)), __LINE__);
        }
        $this->First_Name_2 = $first_Name_2;
        return $this;
    }
    /**
     * Get Middle_Name value
     * @return string|null
     */
    public function getMiddle_Name_2()
    {
        return $this->Middle_Name_2;
    }
    /**
     * Set Middle_Name value
     * @param string $middle_Name
     * @return \StructType\Local_Person_Name_Detail_DataType
     */
    public function setMiddle_Name_2($middle_Name_2 = null)
    {
        // validation for constraint: string
        if (!is_null($middle_Name_2) && !is_string($middle_Name_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middle_Name_2, true), gettype($middle_Name_2)), __LINE__);
        }
        $this->Middle_Name_2 = $middle_Name_2;
        return $this;
    }
    /**
     * Get Last_Name value
     * @return string|null
     */
    public function getLast_Name_2()
    {
        return $this->Last_Name_2;
    }
    /**
     * Set Last_Name value
     * @param string $last_Name
     * @return \StructType\Local_Person_Name_Detail_DataType
     */
    public function setLast_Name_2($last_Name_2 = null)
    {
        // validation for constraint: string
        if (!is_null($last_Name_2) && !is_string($last_Name_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last_Name_2, true), gettype($last_Name_2)), __LINE__);
        }
        $this->Last_Name_2 = $last_Name_2;
        return $this;
    }
    /**
     * Get Secondary_Last_Name value
     * @return string|null
     */
    public function getSecondary_Last_Name_2()
    {
        return $this->Secondary_Last_Name_2;
    }
    /**
     * Set Secondary_Last_Name value
     * @param string $secondary_Last_Name
     * @return \StructType\Local_Person_Name_Detail_DataType
     */
    public function setSecondary_Last_Name_2($secondary_Last_Name_2 = null)
    {
        // validation for constraint: string
        if (!is_null($secondary_Last_Name_2) && !is_string($secondary_Last_Name_2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondary_Last_Name_2, true), gettype($secondary_Last_Name_2)), __LINE__);
        }
        $this->Secondary_Last_Name_2 = $secondary_Last_Name_2;
        return $this;
    }
    /**
     * Get Local_Name value
     * @return string|null
     */
    public function getLocal_Name()
    {
        return $this->Local_Name;
    }
    /**
     * Set Local_Name value
     * @param string $local_Name
     * @return \StructType\Local_Person_Name_Detail_DataType
     */
    public function setLocal_Name($local_Name = null)
    {
        // validation for constraint: string
        if (!is_null($local_Name) && !is_string($local_Name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($local_Name, true), gettype($local_Name)), __LINE__);
        }
        $this->Local_Name = $local_Name;
        return $this;
    }
    /**
     * Get Local_Script value
     * @return string|null
     */
    public function getLocal_Script()
    {
        return $this->Local_Script;
    }
    /**
     * Set Local_Script value
     * @param string $local_Script
     * @return \StructType\Local_Person_Name_Detail_DataType
     */
    public function setLocal_Script($local_Script = null)
    {
        // validation for constraint: string
        if (!is_null($local_Script) && !is_string($local_Script)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($local_Script, true), gettype($local_Script)), __LINE__);
        }
        $this->Local_Script = $local_Script;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Local_Person_Name_Detail_DataType
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
