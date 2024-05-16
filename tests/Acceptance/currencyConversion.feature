Feature: Currency conversion (AED and CAD)
  In order to view invoice amounts in different currencies
  As a user
  I want to be able to convert currency between AED and CAD

  Scenario: Converting invoice amount from AED to CAD
    Given I am in the settings and I have AED set as the default currency
    When I select CAD as the target currency
    Then the invoice amount should be converted to CAD based on the current exchange rate

