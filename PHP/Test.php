<?php

require_once 'PHPUnit\Framework\TestCase.php';

/**
 * test case.
 */

class signup extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost/");
  }

  public function testMyTestCase()
  {
    $this->open("/sign_up/sign-up.php");
    $this->type("name=name", "Yogi");
    $this->type("name=email", "Youg");
    $this->type("name=user", "ksdlf");
    $this->type("name=pass", "s;llkdf");
    $this->type("name=cpass", "s;llkdf");
    $this->click("id=button");
    $this->waitForPageToLoad("30000");
    try {
        $this->assertTrue($this->isElementPresent("css=body"));
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
  }
}
?>
