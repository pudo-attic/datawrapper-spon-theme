<?php

class DatawrapperPlugin_ThemeSpon extends DatawrapperPlugin {

    public function init() {
        DatawrapperTheme::register($this, array(
            "id" => "spon",
            "title" => "SPIEGEL ONLINE",
            "restrict" => "@spiegel.de",
            "default_width" => 520,
            "assets" => array("spon-logo-bw.png", "spon-logo-bw-big.png")
        ));
    }

}
