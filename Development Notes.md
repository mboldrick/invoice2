# Development Notes - Invoice2

## Description

A modernized version of my old Clipper "Invoice" accounting system. This version is built as a web app using Laravel 6, Bootstrap 4, and MySQL 8.

## Goal

Start by creating a list of clients and associated jobs. Then decide whether to create invoices directly or to build an "inventory" and time-tracking system from which to generate invoices. Once invoices are being generated, create a way to record payments against invoices. That should provide a basic accounts receivable system. From there, I will create an accounts payable system, primarily to record expenses for tax purposes. I will work through all the functions that are in the old Invoice program and decide, one-by-one, which ones to implement.

## Project Statement / Manifesto (Overview)

Start by handling clients, then jobs (i.e., cases or projects). All the client info - name, address, phone, email, and notes - will start in a single table. Once the CRUD for clients is complete, I'll create the jobs table (I plan to name it projects). A project will be associated with a single client.

Later, for the clients table, I may extract address(es), phone number(s), and email address(es) into separate tables, so a client can have several of each. Countries and U.S. states can be changed to look-up tables. I will also add a boolean to identify the client as a person or a company. If it is a company, it will refer to a "people" table that has name (first, middle, last, etc.), title, etc. and point to the email and phone number tables. There will be a designtion as to which person(s) should receive invoices.

## What am I doing today? (small chunks)

**2019-11-07**
- Display a list of clients using a striped table
- Add pagination
- Make a create form; then store the data
- Add validation
- Display flash message for successful client creation
- Make an edit form; then store the data
- Use validation on edit, too
- Make a show "form"
- Provide a way to delete a client
- Add a confirmation dialog for deletion



## Notes


## Features and Functions

#### High Priority (Must Have)

#### Medium Priority (Need to / Should Have)

#### Low Priority (Nice-to-Have)

## User Stories

## Entities (tables, objects)
1. Client
2. Jobs

A. A job belongs to a client.
B. A client can have many jobs.

## Bugs

* Source map error: Error: request failed with status 404; Resource URL: http://invoice2.test/js/app.js; Source Map URL: popper.js.map
    - fixed 2019-11-06 added ".sourceMaps()" to end of .js line in webpack.mix.js and ran "npm run dev"


## Key Commands - Executed

**2019-11-03**

➜  Sites laravel new invoice2

➜  invoice2 composer require laravel/ui --dev

➜  invoice2 php artisan ui vue --auth

➜  invoice2 git:(master) ✗ npm install

➜  invoice2 git:(master) ✗ npm run dev

** On GitHub, create a repository named invoice2

** Using TablePlus, created MySQL database named “invoice”

** Edited .env file, making the following changes
-   APP_NAME=Invoice2
-   APP_URL=http://invoice2.test
-   DB_DATABASE=invoice2

➜  invoice2 git init

➜  invoice2 git:(master) ✗ php artisan migrate

➜  invoice2 git:(master) ✗ git add .

➜  invoice git:(master) ✗ git commit -m "Initial commit with UI, auth, migrations"

➜  invoice git:(master) git remote add origin https://github.com/mboldrick/invoice2.git

➜  invoice2 git:(master) git push -u origin master

** Create and commit README.md

**2019-11-06**

** Create and write first draft of Development Notes.md

➜  invoice2 git:(master) ✗ php artisan make:model Client -mrf

** Added the following fields to the clients table (in the migration):
•   Name
•   Address1
•   Address2
•   City
•   State
•   Postalcode
•   Country
•   Email
•   Phone
•   Legacy_id
•   Notes

➜  invoice git:(master) ✗ php artisan migrate

** Create 50 clients using a factory
➜  invoice2 git:(master) ✗ php artisan tinker
>>> factory(App\Client::class,50)->create();

** Create route for client index (/clients), testing by going to that route before creating it, then incrementally building up to get to the view.

** Copy bootstrap table structure into client index view
