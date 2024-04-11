Feature: Change_Phonenumber
  In order to change the phone number used for notifications
  As a user
  I need to I need to be able to change it from the settings menu

  Scenario: try Change_Phonenumber
	Given i am in the settings
        When I click on the button change "contact info"
        And I input my new phone number
        Then upon creation of future invoices a notification will be sent to the user according to their new phone number

