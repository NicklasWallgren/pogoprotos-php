<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Settings/Master/QuestSettings.php');

namespace POGOProtos\Settings\Master {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Settings.Master.QuestSettings
  final class QuestSettings extends ProtobufMessage {

    private $_unknown;
    private $questType = \POGOProtos\Enums\QuestType::QUEST_UNKNOWN_TYPE; // optional .POGOProtos.Enums.QuestType quest_type = 1
    private $dailyQuest = null; // optional .POGOProtos.Settings.Master.Quest.DailyQuestSettings daily_quest = 2

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional .POGOProtos.Enums.QuestType quest_type = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->questType = $tmp;

            break;
          case 2: // optional .POGOProtos.Settings.Master.Quest.DailyQuestSettings daily_quest = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->dailyQuest = new \POGOProtos\Settings\Master\Quest\DailyQuestSettings($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Settings\Master\Quest\DailyQuestSettings did not read the full length');

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->questType !== \POGOProtos\Enums\QuestType::QUEST_UNKNOWN_TYPE) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->questType);
      }
      if ($this->dailyQuest !== null) {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, $this->dailyQuest->size());
        $this->dailyQuest->write($fp);
      }
    }

    public function size() {
      $size = 0;
      if ($this->questType !== \POGOProtos\Enums\QuestType::QUEST_UNKNOWN_TYPE) {
        $size += 1 + Protobuf::size_varint($this->questType);
      }
      if ($this->dailyQuest !== null) {
        $l = $this->dailyQuest->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearQuestType() { $this->questType = \POGOProtos\Enums\QuestType::QUEST_UNKNOWN_TYPE; }
    public function getQuestType() { return $this->questType;}
    public function setQuestType($value) { $this->questType = $value; }

    public function clearDailyQuest() { $this->dailyQuest = null; }
    public function getDailyQuest() { return $this->dailyQuest;}
    public function setDailyQuest(\POGOProtos\Settings\Master\Quest\DailyQuestSettings $value) { $this->dailyQuest = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('quest_type', $this->questType, \POGOProtos\Enums\QuestType::QUEST_UNKNOWN_TYPE)
           . Protobuf::toString('daily_quest', $this->dailyQuest, null);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Settings.Master.QuestSettings)
  }

}