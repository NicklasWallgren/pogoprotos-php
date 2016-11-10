<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Data/Battle/BattleAction.php');

namespace POGOProtos\Data\Battle {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;


  // message POGOProtos.Data.Battle.BattleAction
  final class BattleAction extends ProtobufMessage {

    private $_unknown;
    private $type = \POGOProtos\Data\Battle\BattleActionType::ACTION_NONE; // optional .POGOProtos.Data.Battle.BattleActionType type = 1
    private $actionStartMs = 0; // optional int64 action_start_ms = 2
    private $durationMs = 0; // optional int32 duration_ms = 3
    private $energyDelta = 0; // optional int32 energy_delta = 5
    private $attackerIndex = 0; // optional int32 attacker_index = 6
    private $targetIndex = 0; // optional int32 target_index = 7
    private $activePokemonId = 0; // optional fixed64 active_pokemon_id = 8
    private $playerJoined = null; // optional .POGOProtos.Data.Battle.BattleParticipant player_joined = 9
    private $battleResults = null; // optional .POGOProtos.Data.Battle.BattleResults battle_results = 10
    private $damageWindowsStartTimestampMs = 0; // optional int64 damage_windows_start_timestamp_ms = 11
    private $damageWindowsEndTimestampMs = 0; // optional int64 damage_windows_end_timestamp_ms = 12
    private $playerLeft = null; // optional .POGOProtos.Data.Battle.BattleParticipant player_left = 13
    private $targetPokemonId = 0; // optional fixed64 target_pokemon_id = 14

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
          case 1: // optional .POGOProtos.Data.Battle.BattleActionType type = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->type = $tmp;

            break;
          case 2: // optional int64 action_start_ms = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->actionStartMs = $tmp;

            break;
          case 3: // optional int32 duration_ms = 3
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->durationMs = $tmp;

            break;
          case 5: // optional int32 energy_delta = 5
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->energyDelta = $tmp;

            break;
          case 6: // optional int32 attacker_index = 6
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->attackerIndex = $tmp;

            break;
          case 7: // optional int32 target_index = 7
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT32 || $tmp > Protobuf::MAX_INT32) throw new \Exception('int32 out of range');$this->targetIndex = $tmp;

            break;
          case 8: // optional fixed64 active_pokemon_id = 8
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_uint64($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_unint64 returned false');
            $this->activePokemonId = $tmp;

            break;
          case 9: // optional .POGOProtos.Data.Battle.BattleParticipant player_joined = 9
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->playerJoined = new \POGOProtos\Data\Battle\BattleParticipant($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Data\Battle\BattleParticipant did not read the full length');

            break;
          case 10: // optional .POGOProtos.Data.Battle.BattleResults battle_results = 10
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->battleResults = new \POGOProtos\Data\Battle\BattleResults($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Data\Battle\BattleResults did not read the full length');

            break;
          case 11: // optional int64 damage_windows_start_timestamp_ms = 11
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->damageWindowsStartTimestampMs = $tmp;

            break;
          case 12: // optional int64 damage_windows_end_timestamp_ms = 12
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->damageWindowsEndTimestampMs = $tmp;

            break;
          case 13: // optional .POGOProtos.Data.Battle.BattleParticipant player_left = 13
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->playerLeft = new \POGOProtos\Data\Battle\BattleParticipant($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Data\Battle\BattleParticipant did not read the full length');

            break;
          case 14: // optional fixed64 target_pokemon_id = 14
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_uint64($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_unint64 returned false');
            $this->targetPokemonId = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->type !== \POGOProtos\Data\Battle\BattleActionType::ACTION_NONE) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->type);
      }
      if ($this->actionStartMs !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->actionStartMs);
      }
      if ($this->durationMs !== 0) {
        fwrite($fp, "\x18", 1);
        Protobuf::write_varint($fp, $this->durationMs);
      }
      if ($this->energyDelta !== 0) {
        fwrite($fp, "(", 1);
        Protobuf::write_varint($fp, $this->energyDelta);
      }
      if ($this->attackerIndex !== 0) {
        fwrite($fp, "0", 1);
        Protobuf::write_varint($fp, $this->attackerIndex);
      }
      if ($this->targetIndex !== 0) {
        fwrite($fp, "8", 1);
        Protobuf::write_varint($fp, $this->targetIndex);
      }
      if ($this->activePokemonId !== 0) {
        fwrite($fp, "A", 1);
        Protobuf::write_uint64($fp, $this->activePokemonId);
      }
      if ($this->playerJoined !== null) {
        fwrite($fp, "J", 1);
        Protobuf::write_varint($fp, $this->playerJoined->size());
        $this->playerJoined->write($fp);
      }
      if ($this->battleResults !== null) {
        fwrite($fp, "R", 1);
        Protobuf::write_varint($fp, $this->battleResults->size());
        $this->battleResults->write($fp);
      }
      if ($this->damageWindowsStartTimestampMs !== 0) {
        fwrite($fp, "X", 1);
        Protobuf::write_varint($fp, $this->damageWindowsStartTimestampMs);
      }
      if ($this->damageWindowsEndTimestampMs !== 0) {
        fwrite($fp, "`", 1);
        Protobuf::write_varint($fp, $this->damageWindowsEndTimestampMs);
      }
      if ($this->playerLeft !== null) {
        fwrite($fp, "j", 1);
        Protobuf::write_varint($fp, $this->playerLeft->size());
        $this->playerLeft->write($fp);
      }
      if ($this->targetPokemonId !== 0) {
        fwrite($fp, "q", 1);
        Protobuf::write_uint64($fp, $this->targetPokemonId);
      }
    }

    public function size() {
      $size = 0;
      if ($this->type !== \POGOProtos\Data\Battle\BattleActionType::ACTION_NONE) {
        $size += 1 + Protobuf::size_varint($this->type);
      }
      if ($this->actionStartMs !== 0) {
        $size += 1 + Protobuf::size_varint($this->actionStartMs);
      }
      if ($this->durationMs !== 0) {
        $size += 1 + Protobuf::size_varint($this->durationMs);
      }
      if ($this->energyDelta !== 0) {
        $size += 1 + Protobuf::size_varint($this->energyDelta);
      }
      if ($this->attackerIndex !== 0) {
        $size += 1 + Protobuf::size_varint($this->attackerIndex);
      }
      if ($this->targetIndex !== 0) {
        $size += 1 + Protobuf::size_varint($this->targetIndex);
      }
      if ($this->activePokemonId !== 0) {
        $size += 9;
      }
      if ($this->playerJoined !== null) {
        $l = $this->playerJoined->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->battleResults !== null) {
        $l = $this->battleResults->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->damageWindowsStartTimestampMs !== 0) {
        $size += 1 + Protobuf::size_varint($this->damageWindowsStartTimestampMs);
      }
      if ($this->damageWindowsEndTimestampMs !== 0) {
        $size += 1 + Protobuf::size_varint($this->damageWindowsEndTimestampMs);
      }
      if ($this->playerLeft !== null) {
        $l = $this->playerLeft->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->targetPokemonId !== 0) {
        $size += 9;
      }
      return $size;
    }

    public function clearType() { $this->type = \POGOProtos\Data\Battle\BattleActionType::ACTION_NONE; }
    public function getType() { return $this->type;}
    public function setType($value) { $this->type = $value; }

    public function clearActionStartMs() { $this->actionStartMs = 0; }
    public function getActionStartMs() { return $this->actionStartMs;}
    public function setActionStartMs($value) { $this->actionStartMs = $value; }

    public function clearDurationMs() { $this->durationMs = 0; }
    public function getDurationMs() { return $this->durationMs;}
    public function setDurationMs($value) { $this->durationMs = $value; }

    public function clearEnergyDelta() { $this->energyDelta = 0; }
    public function getEnergyDelta() { return $this->energyDelta;}
    public function setEnergyDelta($value) { $this->energyDelta = $value; }

    public function clearAttackerIndex() { $this->attackerIndex = 0; }
    public function getAttackerIndex() { return $this->attackerIndex;}
    public function setAttackerIndex($value) { $this->attackerIndex = $value; }

    public function clearTargetIndex() { $this->targetIndex = 0; }
    public function getTargetIndex() { return $this->targetIndex;}
    public function setTargetIndex($value) { $this->targetIndex = $value; }

    public function clearActivePokemonId() { $this->activePokemonId = 0; }
    public function getActivePokemonId() { return $this->activePokemonId;}
    public function setActivePokemonId($value) { $this->activePokemonId = $value; }

    public function clearPlayerJoined() { $this->playerJoined = null; }
    public function getPlayerJoined() { return $this->playerJoined;}
    public function setPlayerJoined(\POGOProtos\Data\Battle\BattleParticipant $value) { $this->playerJoined = $value; }

    public function clearBattleResults() { $this->battleResults = null; }
    public function getBattleResults() { return $this->battleResults;}
    public function setBattleResults(\POGOProtos\Data\Battle\BattleResults $value) { $this->battleResults = $value; }

    public function clearDamageWindowsStartTimestampMs() { $this->damageWindowsStartTimestampMs = 0; }
    public function getDamageWindowsStartTimestampMs() { return $this->damageWindowsStartTimestampMs;}
    public function setDamageWindowsStartTimestampMs($value) { $this->damageWindowsStartTimestampMs = $value; }

    public function clearDamageWindowsEndTimestampMs() { $this->damageWindowsEndTimestampMs = 0; }
    public function getDamageWindowsEndTimestampMs() { return $this->damageWindowsEndTimestampMs;}
    public function setDamageWindowsEndTimestampMs($value) { $this->damageWindowsEndTimestampMs = $value; }

    public function clearPlayerLeft() { $this->playerLeft = null; }
    public function getPlayerLeft() { return $this->playerLeft;}
    public function setPlayerLeft(\POGOProtos\Data\Battle\BattleParticipant $value) { $this->playerLeft = $value; }

    public function clearTargetPokemonId() { $this->targetPokemonId = 0; }
    public function getTargetPokemonId() { return $this->targetPokemonId;}
    public function setTargetPokemonId($value) { $this->targetPokemonId = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('type', $this->type, \POGOProtos\Data\Battle\BattleActionType::ACTION_NONE)
           . Protobuf::toString('action_start_ms', $this->actionStartMs, 0)
           . Protobuf::toString('duration_ms', $this->durationMs, 0)
           . Protobuf::toString('energy_delta', $this->energyDelta, 0)
           . Protobuf::toString('attacker_index', $this->attackerIndex, 0)
           . Protobuf::toString('target_index', $this->targetIndex, 0)
           . Protobuf::toString('active_pokemon_id', $this->activePokemonId, 0)
           . Protobuf::toString('player_joined', $this->playerJoined, null)
           . Protobuf::toString('battle_results', $this->battleResults, null)
           . Protobuf::toString('damage_windows_start_timestamp_ms', $this->damageWindowsStartTimestampMs, 0)
           . Protobuf::toString('damage_windows_end_timestamp_ms', $this->damageWindowsEndTimestampMs, 0)
           . Protobuf::toString('player_left', $this->playerLeft, null)
           . Protobuf::toString('target_pokemon_id', $this->targetPokemonId, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Data.Battle.BattleAction)
  }

}