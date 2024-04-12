Feature: Recent Activity Log
  In order to track recent actions
  As a user
  I want to be able to view a log of recent activity

  Scenario: Viewing recent activity log
    Given I am on the settings page
    When I click on the activity log
    Then I should see a log of recent actions performed by users

