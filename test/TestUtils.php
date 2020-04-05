<?php

namespace firesnake\htmlBuilder\test;


class TestUtils
{
    public static function fileContent(string $filename): string
    {
        return file_get_contents('/vagrant/test/comparisonData/' . $filename);
    }
}