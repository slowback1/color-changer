<?php
    class View {
        public function __construct($model, $controller) {
            $this->model = $model;
            $this->controller = $controller;
            $this->header = $this->model->header;
            $this->body = "<a href='./index.php?setRandomColor=true'><button>Randomize Colors</button></a>";
            $this->footer = $this->model->footer;
            $this->build();    
        }
        private function build() {
            echo $this->buildMetadata();
            echo $this->buildColorCss($this->model->color, $this->model->font);
            echo $this->header;
            echo $this->buildColorInput();
            echo $this->body;
            echo $this->footer;
            echo $this->addScripts();
        }
        private function buildColorCss($background, $font) {
            return "
                <head>
                    <style>
                        body {
                            background-color: #$background !important;
                            color: #$font !important;
                        }
                        button {
                            background-color: #$background !important;
                            color: #$font !important;
                            border-color: #$font !important;
                        }
                    </style>
                </head>
            ";
        }
        private function buildMetadata() {
            return "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <meta http-equiv='X-UA-Compatible' content='ie=edge'>
                <title>MVC Practice</title>
                <link rel='stylesheet' href='style/index.css' />
            </head>";
        }
        private function buildColorInput() {
            return '<input id="colorValue" type="color" value="#'.$this->model->color.'"></input>';
        }
        private function addScripts() {
            return "<script src='scripts/index.js'></script>";
        }
        

    }
?>