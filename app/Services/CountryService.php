<?php

namespace App\Services;


class CountryService
{
    /**
     * Generates slug from provided source (value) and class (model)
     *
     * @param $sluggable
     * @param $class
     * @return string
     */
    public static function getCountries() {

        return ['Albania', 'Serbia', 'Brasil', 'Argentina', 'Egypt', 'Bosnia'];

    }
}