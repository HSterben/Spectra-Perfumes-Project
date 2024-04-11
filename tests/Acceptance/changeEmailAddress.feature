Feature: Change_Email_address
  In order to change the used email address for the notifications
  As a user
  I need to be able to change it from the settings menu

  Scenario: try Change_Email_address
	Given i am in the settings
        When I click on the button change "contact info" 
	And I input my new email
        Then upon creation of future invoices a notification will be sent to the user according to their new email

