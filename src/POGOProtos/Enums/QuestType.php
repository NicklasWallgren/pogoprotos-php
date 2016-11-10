<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Enums/QuestType.php');

namespace POGOProtos\Enums {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;

  // enum POGOProtos.Enums.QuestType
  abstract class QuestType extends ProtobufEnum {
    const QUEST_UNKNOWN_TYPE = 0;
    const QUEST_FIRST_CATCH_OF_THE_DAY = 1;
    const QUEST_FIRST_POKESTOP_OF_THE_DAY = 2;

    public static $_values = array(
      0 => "QUEST_UNKNOWN_TYPE",
      1 => "QUEST_FIRST_CATCH_OF_THE_DAY",
      2 => "QUEST_FIRST_POKESTOP_OF_THE_DAY",
    );

    public static function isValid($value) {
      return array_key_exists($value, self::$_values);
    }

    public static function toString($value) {
      checkArgument(is_int($value), 'value must be a integer');
      if (array_key_exists($value, self::$_values))
        return self::$_values[$value];
      return 'UNKNOWN';
    }
  }

}