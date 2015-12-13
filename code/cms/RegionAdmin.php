<?php

class RegionAdmin extends ModelAdmin
{

    private static $menu_icon = 'regionaldata/images/cmsicon.png';

    public static $url_segment = 'regions';
    public static $menu_title = 'Regions';

    public static $managed_models = array('Country','CountrySubdivison');

    public static $model_importers = array(
        'Country' => 'CountriesBulkLoader',
        'CountrySubdivison' => 'CountrySubdivisionsBulkLoader'
    );
}
