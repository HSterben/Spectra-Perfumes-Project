Feature: Add Invoice to Folder
  In order to organize invoices efficiently
  As a user
  I want to be able to add invoices to folders

Scenario: Add Invoice to Folder
  Given I am logged in as user
  When I view the list of invoices
  And I see "Folder 1"
  And I see "Invoice 1"
  When I select the checkbox for "Invoice 1"
  And I press the “Add to Folder” button
  Then I should see "Folder 1"
  When I press on "Folder 1"
  Then "Invoice 1" should be added to "Folder 1"
  And I can't see "Invoice 1" on the invoice page