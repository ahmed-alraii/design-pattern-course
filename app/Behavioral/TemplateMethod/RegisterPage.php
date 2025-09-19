<?php

namespace App\Behavioral\TemplateMethod;

class RegisterPage extends Page
{

    protected function getPageHeader(): string
    {
       return "<header>Load css and js files</header>";
    }

    protected function getPageNav(): string
    {
        return "";
    }

    protected function getPageBody(): string
    {
        return "<body>Load register form</body>";
    }

    protected function getPageFooter(): string
    {
        return "";
    }
}