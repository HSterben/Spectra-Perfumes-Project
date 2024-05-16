Feature: register
  In order to register
  As a user
  I need to input a username and password

  Scenario: try register
	
	Given I am on "http://localhost/User/register" page
	When I input "admin" for Username
	And I input for "admin" for Password
	And I click on "action" button
	Then I am on "http://localhost/User/login" page