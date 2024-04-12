Feature: Reset Default Settings
  In order to quickly reset settings options
  As a user
  I need to be able to select the “Reset Settings” button

Scenario: The user wants to reset settings
	Given I am on the Settings page
	When I click the “Reset Settings” button
	Then the default settings are applied