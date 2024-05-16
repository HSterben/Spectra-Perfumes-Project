Feature: Copy invoice
  In order to duplicate invoices
  As a user
  I want to be able to copy invoices

  Scenario: Copying an existing invoice
    Given I am viewing an existing invoice
    When I click on the copy invoice button
    Then a new invoice should be created with the same details as the original invoice