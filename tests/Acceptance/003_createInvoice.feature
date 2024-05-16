Feature: create invoice

	In order to create an invoice,
	As the Admin
	I need to input the different information to create an invoice and see the invoice in the home page

Scenario: createInvoice

    Given I am logged in as "admin"
    And I am on "http://localhost/Invoice/create" page
    When I input "1" for Invoice ID
    And I input "1" for project ID
    And I input "Test Invoice" for Invoice Title
    And I input "2024-05-01" for Invoice Date
    And I input "Hello.inc" for Business Name
    And I input "87 Street rd" for Street
    And I input "Montreal" for City
    And I input "A1E 5T8" for Postal Code
    And I input "Canada" for Country
    And I input "5141234567" for Phone Number
    And I input "10" for Return Quantity
    And I input "123" for Perfume Price
    And I input "123" for Perfume Code
    And I input "34" for Quantity
    And I click on "action" button
    Then I am on "http://localhost/Main/index" page
    And I see "Test Invoice"
