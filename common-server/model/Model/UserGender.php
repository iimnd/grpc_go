<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: user.proto

namespace Model;

use UnexpectedValueException;

/**
 * Protobuf type <code>model.UserGender</code>
 */
class UserGender
{
    /**
     * Generated from protobuf enum <code>UNDEFINED = 0;</code>
     */
    const UNDEFINED = 0;
    /**
     * Generated from protobuf enum <code>MALE = 1;</code>
     */
    const MALE = 1;
    /**
     * Generated from protobuf enum <code>FEMALE = 2;</code>
     */
    const FEMALE = 2;

    private static $valueToName = [
        self::UNDEFINED => 'UNDEFINED',
        self::MALE => 'MALE',
        self::FEMALE => 'FEMALE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

