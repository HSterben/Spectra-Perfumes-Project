Feature: Tax_Rates
  In order to change the tax rate
  As a user
  I need to be able to change the tax rate in the settings menu

  Scenario: try Tax_Rates
	Given i am in the settings and the incorrect tax rate is selected by default
        When I select a different tax rate
        Then the future invoices tax rates will change accordingly

TODO: real?