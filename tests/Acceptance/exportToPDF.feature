Feature: Export to PDF (Invoice)
  In order to save invoices for offline use
  As a user
  I want to be able to export invoices to PDF format

  Scenario: Exporting an invoice to PDF
    Given I am viewing an invoice
    When I click on the export to PDF button
    Then the invoice should be downloaded as a PDF file

