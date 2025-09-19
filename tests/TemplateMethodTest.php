<?php

namespace Tests;

use App\Behavioral\TemplateMethod\HomePage;
use App\Behavioral\TemplateMethod\LoginPage;
use App\Behavioral\TemplateMethod\NotFoundPage;
use App\Behavioral\TemplateMethod\RegisterPage;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{

    public function test_can_render_home_page()
    {
          // Arrange
           $page = new HomePage();

          // Act
           $pageResult = $page->renderPage();

          // Assert
           $this->assertStringContainsString("<body>Load body for home page</body>" , $pageResult);
           $this->assertStringNotContainsString("<footer>Load login form</footer>" , $pageResult);

    }

    public function test_can_render_login_page()
    {
        // Arrange
        $page = new LoginPage();

        // Act
        $pageResult = $page->renderPage();

        // Assert
        $this->assertStringNotContainsString("<body>Load body for home page</body>" , $pageResult);
        $this->assertStringNotContainsString("<footer></footer>" , $pageResult);
        $this->assertStringContainsString("<body>Load login form</body>" , $pageResult);

    }

    public function test_can_render_register_page()
    {
        // Arrange
        $page = new RegisterPage();

        // Act
        $pageResult = $page->renderPage();

        // Assert
        $this->assertStringNotContainsString("<body>Load body for home page</body>" , $pageResult);
        $this->assertStringNotContainsString("<footer></footer>" , $pageResult);
        $this->assertStringContainsString("<body>Load register form</body>" , $pageResult);

    }

    public function test_can_render_not_found_page()
    {
        // Arrange
        $page = new NotFoundPage();

        // Act
        $pageResult = $page->renderPage();

        // Assert
        $this->assertStringNotContainsString("<body>Load body for home page</body>" , $pageResult);
        $this->assertStringNotContainsString("<body>Load login form</body>" , $pageResult);
        $this->assertStringContainsString("<body>Page not found</body>" , $pageResult);

    }

}