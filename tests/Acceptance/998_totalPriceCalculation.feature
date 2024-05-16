Feature: Tax Calculation
  In order to accurately calculate taxes
  As a user
  I want the system to calculate taxes based on predefined rates

Scenario: Calculate Tax for an Invoice
  Given I am logged in as a user
  And I enter an amount for a product bought on an invoice
  Then I should see a total price with taxes on the invoice, depending on the tax amount defined on the settings page

  TODO: part of createInvoice