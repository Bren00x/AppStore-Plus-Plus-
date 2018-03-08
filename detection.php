<?php
    $ua = $_SERVER['HTTP_USER_AGENT'];
   
    function GetBetween($content,$start,$end){
        $r = explode($start, $content);
        if (isset($r[1])){
            $r = explode($end, $r[1]);
            return $r[0];
        }
        return '';
    }
   
    class Device {
        public $device = null;
        public $fw = null;
        public $build = null;
        public function __construct() {
            global $ua;
           
            $this->device = GetBetween($ua, '(', ';');
            $this->fw = str_replace('_', '.', GetBetween($ua, 'OS ', ' '));
            if ($this->fw == "X") { $this->fw = str_replace('_', '.', GetBetween($ua, 'OS X', ')')); }
            if ($this->fw == null) { $this->fw = GetBetween($ua, '; ', ')'); }
           
            $this->build = GetBetween($ua, 'Mobile/', ' ');
        }
        public function GetDevice() { return $this->device; }
        public function GetFirmware() { return $this->fw; }
        public function GetBuild() { return $this->build; }
    public function GetIP() { return $_SERVER['REMOTE_ADDR']; }
    }
?>