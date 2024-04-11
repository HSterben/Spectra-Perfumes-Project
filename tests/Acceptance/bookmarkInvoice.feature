Feature: Star invoice (Bookmark)
  In order to mark important invoices
  As a user
  I want to be able to star/bookmark invoices

  Scenario: Starring an invoice
    Given I am viewing an invoice
    When I click on the star icon
    Then the invoice should be starred/bookmarked for easy access

