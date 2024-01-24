<?php

class m {
    public $a;
    public $p;
    public $l;
    public $t;
    public $api;

    private static $i = [];
    private function __construct() {
        global $baseDir;
        $this->api = isset($_REQUEST["api"]);
        $this->p = $_REQUEST["params"] ?? [];
        $this->a = $_REQUEST["action"] ?? $_SESSION["action"] ??"defhome";
        $_SESSION["action"] = $this->a;
        $this->l = $_REQUEST["lang"] ?? $_SESSION["lang"] ?? "fr";
        $dir = $baseDir . "/asset/l/";
        if (!file_exists($dir . $this->l .".json")) {
            $this->l = "fr";
        }
        $_SESSION["lang"] = $this->l;
        $this->t = json_decode(file_get_contents( $dir . $this->l .".json"),true);
    }

    public static function getM() {
        $cls = static::class;
        if (!isset(self::$i[$cls])) {
            self::$i[$cls] = new static();
        }
        return self::$i[$cls];
    }
}

?>