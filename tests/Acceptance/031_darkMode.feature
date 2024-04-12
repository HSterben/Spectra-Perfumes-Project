Feature: Dark Mode (Theme)
  In order to reduce eye strain in low-light environments
  As a user
  I want to be able to switch to dark mode

  
Scenario: Enabling dark mode
    Given I am on the settings page
    When I toggle the dark mode switch
    Then the application should switch to dark mode