Feature: login
  In order to login
  As a User
  I need to have a username and password

  Scenario: try login


Scenario: try login
	
	Given I am on "http://localhost/User/login" page
	When I input "admin" for Username
	And I input for "admin" for Password
	And I click on "action" button
	Then I am on "http://localhost/Main/index" page