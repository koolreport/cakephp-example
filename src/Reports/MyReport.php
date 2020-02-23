<?php

namespace App\Reports;

class MyReport extends \koolreport\KoolReport
{
    function settings()
    {
        return array(
            "assets"=>array(
                "path"=>"../../webroot/koolreport_assets",
                "url"=>"webroot/koolreport_assets"
            )
        );
    }    
}