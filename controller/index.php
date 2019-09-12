<?php
    class Controller {
        public function __construct($model) {
            $this->model = $model;
            if(isset($_GET['colorSelect'])) {
                $this->colorSelect();
            }
            if(isset($_GET['setRandomColor'])) {
                $this->setRandom();
            }
        }
        private function setRandom() {
            $this->model->color = $this->generateColorCode();
            $this->model->font = $this->generateColorCode();
            
        }
        private function generateColorCode() {
            $res = "";
            $i;
            for($i = 0; $i < 6; $i++) {
                $num = rand(0, 15);
                switch($num) {
                    case 1:
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                    case 7:
                    case 8:
                    case 9:
                    case 0:
                        $res = $res . strval($num);
                        break;
                    case 10:
                        $res = $res . "a";
                        break;
                    case 11:
                        $res = $res . "b";
                        break;
                    case 12:
                        $res = $res . "c";
                        break;
                    case 13:
                        $res = $res . "d";
                        break;
                    case 14:
                        $res = $res . "e";
                        break;
                    case 15: 
                        $res = $res . "f";
                        break;
                    
                }
            }
            return $res;
        }
        private function colorSelect() {
                $this->model->color = $_GET['colorSelect'];
                $this->model->font = (hexdec($_GET['colorSelect']) > hexdec("888888")) ? "000000" : "ffffff";
            
        }
    }
?>