Feature: Add Invoice to Folder
  In order to organize invoices efficiently
  As a user
  I want to be able to add invoices to folders

Scenario: Add Invoice to Folder
  Given I am logged in as user
  When I view the list of invoices
  And there is an existing folder
  And there is an existing invoice on the view
  And I select a specific invoice to add to a folder using the checkboxes next to the invoices
  And I press the “Add to Folder” button
  Then it should prompt me asking which folder to add the invoice to with choices of existing folders, if any
  Then the selected invoice should move to the selected folder
  And the selected invoice should no longer appear in the list of invoices

