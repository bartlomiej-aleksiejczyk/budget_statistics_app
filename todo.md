- notes
- document vault
- diet 
- calendar 
==> second brain app

# Entity list

## Transaction

-   id
-   subject_id (FK \u2192 OwningSubject) -- redundant but super handy
-   title
-   description
-   type (INCOME / EXPENSE / TRANSFER)
-   amount (positive DECIMAL)
-   unit_id (FK \u2192 Unit) -- currency of this record
-   occurred_at
-   created_at
-   category_id (FK \u2192 Category)
-   project_id (FK \u2192 Project, nullable)

-   from_asset_source_id (FK \u2192 AssetSource, nullable)
-   to_asset_source_id (FK \u2192 AssetSource, nullable)

## Category

-   id
-   subject_id (FK \u2192 OwningSubject)
-   name
-   description
-   parent_id (nullable, for hierarchies)

## Project

-   id
-   subject_id (FK \u2192 OwningSubject)
-   name
-   description

## OwningSubject

-   id
-   name ("Maciek", "Household", "Side business")
-   type (PERSON / HOUSEHOLD / COMPANY) \u2013 optional
-   default_unit_id (FK \u2192 Unit) -- for reports in that subject

## AssetSource

-   id
-   subject_id (FK \u2192 OwningSubject)
-   name ("mBank ROR", "Wallet", "Revolut EUR")
-   type (BANK_ACCOUNT / CASH_WALLET / CREDIT_CARD / INVESTMENT / OTHER)
-   unit_id (FK \u2192 Unit) -- currency
-   external_id (IBAN, last4 digits, etc., nullable)
-   active (bool)

## Unit

-   id
-   code ("PLN", "USD", "XAU")
-   symbol ("z\u0142", "$", "oz")
-   name
-   decimals

## ExchangeRate

-   id
-   from_unit_id (FK \u2192 Unit)
-   to_unit_id (FK \u2192 Unit)
-   rate
-   valid_at (date/timestamp)

## User

-   name
-   default_unit_id (FK \u2192 Unit)
-   timezone
-   locale

## SubjectUserAccess

-   id
-   user_id (FK \u2192 User)
-   subject_id (FK \u2192 OwningSubject)
-   role (OWNER / EDITOR / VIEWER)
-   can_manage_acl (bool) \u2013 optional
