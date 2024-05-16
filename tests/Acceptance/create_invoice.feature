Feature: Creating an Invoice

  Scenario: Create Invoice
    Given I am on the "Create Invoice" page
    When I input the following details:
      | Field           | Value         |
      | Invoice ID      | 1             |
      | Project ID      | 1             |
      | Invoice Title   | Test Invoice  |
      | Invoice Date    | 2024-05-01    |
      | Business Name   | Hello.inc     |
      | Street          | 87 Street rd  |
      | City            | Montreal      |
      | Postal Code     | A1E 5T8       |
      | Country         | Canada        |
      | Phone Number    | 5141234567    |
      | Return Quantity | 10            |
      | Perfume Price   | 123           |
    And I click on the "+" button
    And I input the following perfume details:
      | Perfume Code | Quantity |
      | 123          | 34       |
      | 456          | 56       |
    And I click on the "Create Invoice" button
    Then I should be redirected to "/Main/index"
    And I should see "Test Invoice"

