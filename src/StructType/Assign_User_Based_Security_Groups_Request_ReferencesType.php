<?php

namespace WorkdayWsdl\\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Assign_User-Based_Security_Groups_Request_ReferencesType
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: Request References element for retrieving specific Workday Accounts and their assigned User-Based Security Groups.
 * @subpackage Structs
 */
class Assign_User_Based_Security_Groups_Request_ReferencesType extends AbstractStructBase
{
    /**
     * The Workday_Account_Reference
     * Meta information extracted from the WSDL
     * - documentation: Workday Account Reference
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \WorkdayWsdl\\StructType\System_UserObjectType[]
     */
    public $Workday_Account_Reference;
    /**
     * Constructor method for Assign_User-Based_Security_Groups_Request_ReferencesType
     * @uses Assign_User_Based_Security_Groups_Request_ReferencesType::setWorkday_Account_Reference()
     * @param \WorkdayWsdl\\StructType\System_UserObjectType[] $workday_Account_Reference
     */
    public function __construct(array $workday_Account_Reference = array())
    {
        $this
            ->setWorkday_Account_Reference($workday_Account_Reference);
    }
    /**
     * Get Workday_Account_Reference value
     * @return \WorkdayWsdl\\StructType\System_UserObjectType[]|null
     */
    public function getWorkday_Account_Reference()
    {
        return $this->Workday_Account_Reference;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkday_Account_Reference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkday_Account_Reference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkday_Account_ReferenceForArrayConstraintsFromSetWorkday_Account_Reference(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assign_User_Based_Security_Groups_Request_ReferencesTypeWorkday_Account_ReferenceItem) {
            // validation for constraint: itemType
            if (!$assign_User_Based_Security_Groups_Request_ReferencesTypeWorkday_Account_ReferenceItem instanceof \WorkdayWsdl\\StructType\System_UserObjectType) {
                $invalidValues[] = is_object($assign_User_Based_Security_Groups_Request_ReferencesTypeWorkday_Account_ReferenceItem) ? get_class($assign_User_Based_Security_Groups_Request_ReferencesTypeWorkday_Account_ReferenceItem) : sprintf('%s(%s)', gettype($assign_User_Based_Security_Groups_Request_ReferencesTypeWorkday_Account_ReferenceItem), var_export($assign_User_Based_Security_Groups_Request_ReferencesTypeWorkday_Account_ReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Workday_Account_Reference property can only contain items of type \WorkdayWsdl\\StructType\System_UserObjectType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Workday_Account_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\System_UserObjectType[] $workday_Account_Reference
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_Request_ReferencesType
     */
    public function setWorkday_Account_Reference(array $workday_Account_Reference = array())
    {
        // validation for constraint: array
        if ('' !== ($workday_Account_ReferenceArrayErrorMessage = self::validateWorkday_Account_ReferenceForArrayConstraintsFromSetWorkday_Account_Reference($workday_Account_Reference))) {
            throw new \InvalidArgumentException($workday_Account_ReferenceArrayErrorMessage, __LINE__);
        }
        $this->Workday_Account_Reference = $workday_Account_Reference;
        return $this;
    }
    /**
     * Add item to Workday_Account_Reference value
     * @throws \InvalidArgumentException
     * @param \WorkdayWsdl\\StructType\System_UserObjectType $item
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_Request_ReferencesType
     */
    public function addToWorkday_Account_Reference(\WorkdayWsdl\\StructType\System_UserObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \WorkdayWsdl\\StructType\System_UserObjectType) {
            throw new \InvalidArgumentException(sprintf('The Workday_Account_Reference property can only contain items of type \WorkdayWsdl\\StructType\System_UserObjectType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Workday_Account_Reference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \WorkdayWsdl\\StructType\Assign_User_Based_Security_Groups_Request_ReferencesType
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
