<?php
    class Model {
        public $color = "ffffff";
        public $font = "000000"; 
        public $header;
        public $footer;
        public function __construct() {
            include_once 'templates/header.php';
            include_once 'templates/footer.php';
            $h = new Header();
            $f = new Footer();
            $this->header = $h->build();
            $this->footer = $f->build();
        }
    }
?>