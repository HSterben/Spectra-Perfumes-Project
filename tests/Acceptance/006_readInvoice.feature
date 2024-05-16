Feature: Invoice Read
  In order to read invoices
  As a user
  I want to be able to read specific invoices

Scenario: Read Invoice Details
  Given I am logged in as user
  When I view the list of invoices
  And I see "Invoice 1"
  When I click on "Invoice 1"
  Then I see "Invoice 1" in detail