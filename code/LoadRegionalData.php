<?php

class LoadRegionalData extends BuildTask
{

    public static $countries_datafile = "regionaldata/data/cdh_countries_10_29_2012.txt";
    public static $subdivisions_datafile = "regionaldata/data/cdh_subdivisions_10_29_2012.txt";
    public static $delete_existing_records = false;

    public function run($request)
    {
        $this->loadCountries();
        $this->loadSubdivisions();
    }

    public function loadCountries()
    {
        $loader = new CountriesBulkLoader("Country");
        $loader->deleteExistingRecords = self::$delete_existing_records;
        $results = $loader->load(self::$countries_datafile);
        echo "loaded countries.";
    }

    public function loadSubdivisions()
    {
        $loader = new CountrySubdivisionsBulkLoader("CountrySubdivison");
        $loader->deleteExistingRecords = self::$delete_existing_records;
        $results = $loader->load(self::$subdivisions_datafile);
        echo "loaded subdivisions.";
    }
}
