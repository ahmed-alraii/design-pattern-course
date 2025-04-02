<?php

namespace Tests;

use App\Behavioral\ChainOfResponsibility\EmployeeOneHandler;
use App\Behavioral\ChainOfResponsibility\EmployeeThreeHandler;
use App\Behavioral\ChainOfResponsibility\EmployeeTwoHandler;
use App\Behavioral\ChainOfResponsibility\Request;
use PHPUnit\Framework\TestCase;

class ChainOfResponsibilityTest extends TestCase
{


    public function test_employee_one_can_handel_request()
    {

        // Arrange
        $employeeOne = new EmployeeOneHandler();
        $employeeTwo = new EmployeeTwoHandler();
        $employeeThree = new EmployeeThreeHandler();

        $employeeOne->setNext($employeeTwo->setNext($employeeThree));

        $request = new Request();
        $request->setId(4);

        // Act

        $response = $employeeOne->handle($request);


        // Assert

        self::assertTrue($response->isDone());
        self::assertEquals( EmployeeOneHandler::class , $response->getHandler());


    }


    public function test_employee_two_can_handel_request()
    {

        // Arrange
        $employeeOne = new EmployeeOneHandler();
        $employeeTwo = new EmployeeTwoHandler();
        $employeeThree = new EmployeeThreeHandler();

        $employeeOne->setNext($employeeTwo);
        $employeeTwo->setNext($employeeThree);
        $employeeThree->setNext(null);

        $request = new Request();
        $request->setId(9);

        // Act
        $response = $employeeOne->handle($request);


        // Assert
        self::assertTrue($response->isDone());
        self::assertEquals( EmployeeTwoHandler::class , $response->getHandler());
    }


    public function test_employee_three_can_handel_request()
    {

        // Arrange
        $employeeOne = new EmployeeOneHandler();
        $employeeTwo = new EmployeeTwoHandler();
        $employeeThree = new EmployeeThreeHandler();

        $employeeOne->setNext($employeeTwo);
        $employeeTwo->setNext($employeeThree);
        $employeeThree->setNext(null);

        $request = new Request();
        $request->setId(49);

        // Act
        $response = $employeeOne->handle($request);


        // Assert
        self::assertTrue($response->isDone());
        self::assertEquals( EmployeeThreeHandler::class , $response->getHandler());
    }


    public function test_no_one_can_handel_request()
    {

        // Arrange
        $employeeOne = new EmployeeOneHandler();
        $employeeTwo = new EmployeeTwoHandler();
        $employeeThree = new EmployeeThreeHandler();

        $employeeOne->setNext($employeeTwo);
        $employeeTwo->setNext($employeeThree);
        $employeeThree->setNext(null);

        $request = new Request();
        $request->setId(13);

        // Act
        $response = $employeeThree->handle($request);


        // Assert
        self::assertFalse($response->isDone());
    }

}