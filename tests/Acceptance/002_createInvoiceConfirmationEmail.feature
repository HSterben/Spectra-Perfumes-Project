Feature: Email_Notification
  In order to get email notifications
  As a user
  I need to complete the creation of an invoice and have the appropriate settings turned on

  Scenario: try Email_Notification
	Given I am on the final step of creating an invoice
	And I click on the "Create Invoice" button
	Then an email will be sent to your email.