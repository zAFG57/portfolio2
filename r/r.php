<?php


class routeur {
    private $m;
    public function __construct() {
        global $baseDir;
        include_once $baseDir . "/m/m.php";
        session_start();
        $this->m = m::getM();
        $dir = $baseDir . "/vi/p/";
        if (!file_exists($dir . $this->m->a .".php")) {
            $this->m->a = "home";
        }
        require_once($baseDir . "/vi/p/".$this->m->a.".php");
        if ($this->m->api) {
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(["page"=>$page]);
        } else {
            require_once($baseDir."/vi/compo/nav.php");
            echo "<section class='body'>".$page."</section>";
        }
    }
}

?>