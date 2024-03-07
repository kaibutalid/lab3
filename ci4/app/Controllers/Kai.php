<?php

namespace App\Controllers;

class Kai extends BaseController
{
    public function main()
    {
        $header = view('templates/header');
        $main = view('kai/main');
        $footer = view('templates/footer');

        // Combine the header and main content
        $data['content'] = $header . $main;

        // Combine all content (header, main, footer)
        $fullContent = $header . $main . $footer;
        return $fullContent;
    }
}