<?php

namespace App\Behavioral\TemplateMethod;

class HomePage extends Page
{

    protected function getPageHeader(): string
    {
        return "<header>Load css and js files</header>";
    }

    protected function getPageNav(): string
    {
        return "<nav>Load navigation</nav>";
    }

    protected function getPageBody(): string
    {
      return "<body>Load body for home page</body>";
    }

    protected function getPageFooter(): string
    {
       return "<footer>Load footer</footer>";
    }
}