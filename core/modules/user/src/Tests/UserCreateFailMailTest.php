<?php

/**
 * @file
 * Contains Drupal\user\Tests\UserCreateFailMailTest.
 */

namespace Drupal\user\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Tests the create user administration page.
 *
 * @group user
 */
class UserCreateFailMailTest extends WebTestBase {

  /**
   * Modules to enable
   *
   * @var array
   */
  public static $modules = array('system_mail_failure_test');

  /**
   * Tests the create user administration page.
   */
  protected function testUserAdd() {
    $user = $this->drupalCreateUser(array('administer users'));
    $this->drupalLogin($user);

    // Replace the mail functionality with a fake, malfunctioning service.
    $this->config('system.mail')->set('interface.default', 'test_php_mail_failure')->save();
    // Create a user, but fail to send an email.
    $name = $this->randomMachineName();
    $edit = array(
      'name' => $name,
      'mail' => $this->randomMachineName() . '@example.com',
      'pass[pass1]' => $pass = $this->randomString(),
      'pass[pass2]' => $pass,
      'notify' => TRUE,
    );
    $this->drupalPostForm('admin/people/create', $edit, t('Create new account'));

    $this->assertText(t('Unable to send email. Contact the site administrator if the problem persists.'));
    $this->assertNoText(t('A welcome message with further instructions has been emailed to the new user @name.', array('@name' => $edit['name'])));
  }
}
