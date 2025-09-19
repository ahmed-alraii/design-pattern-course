<?php

namespace App\Behavioral\TemplateMethod;

class NotFoundPage extends Page
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
        return "<body>Page not found</body>";
    }

    protected function getPageFooter(): string
    {
        return "<footer>Load footer</footer>";
    }
}