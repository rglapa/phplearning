<?php
    $xml_doc = new DOMDocument();
    $xml_doc->load('autocomplete.xml');

    $x = $xml_doc->getElementsByTagName('link');

    $q = $_GET['q'];
    $result = '';
    foreach($x as $node) {
        if (stripos("{$node->nodeValue}", $q) !== false) {
            $result .= "{$node->nodeValue}";
        }
    }

    if ($result == '')
        $result = 'No records found.';

    echo $result;