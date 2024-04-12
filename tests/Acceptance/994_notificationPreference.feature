Feature: notification_preference
  In order to change the notification preference
  As a user
  I need to I need to be able to change the notification preference in the settings view

  Scenario: try notification_preference
	Given i am in the settings and the incorrect notification preference is selected by default
        When I select a notification preference
        Then upon creation of future invoices a notification will be sent to the user according to their preference

TODO: not real