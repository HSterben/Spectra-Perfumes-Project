Feature: Keyboard Shortcuts
  In order to navigate the system more efficiently
  As a user
  I want to use keyboard shortcuts for common actions

  Scenario: Using a keyboard shortcut to create a new invoice
    Given I am on any page within the application
    When I press the "Shift + Alt + C" keys together
    Then I should be taken to the "Create Invoice" page