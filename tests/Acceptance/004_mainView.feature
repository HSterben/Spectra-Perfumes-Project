Feature: Main Invoice List View
  In order to view and manage and access all invoices at a glance
  As a user
  I want to access a main invoice list view that displays all invoices

  Scenario: Viewing the main list of invoices
    Given I am logged in as a user
    When I navigate to the "Main Index" page
    Then I should see a list of all invoices