<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }
    public function contact()
    {
        echo "contact page";
    }
    public function faqs()
    {
        echo "faqs page";
    }
    public function tos()
    {
        echo "Halaman Term Of Service";
    }
    public function biodata()
    {
        echo "<br>Nama:linda khumairo layali";
        echo "<br>Nim:4122021";
        echo "<br> Agama:Islam";
    }
}
