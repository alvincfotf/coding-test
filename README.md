## Context

We would like to be able to scrape broadcasts off our radio site and store some information about it into a database. We would also be able to query and display broadcasts from the database based on a specific date range.

## Scrape Focus Canada Broadcasts

The page at https://radio.focusonthefamily.ca/schedule/broadcasts/MM-YY contains a table that has all currently uploaded broadcasts for that month.

Your job is to create a scraping function in PHP that will scrape that page for the date, the title, and link for every broadcast. Store broadcasts with their Date, Link and Title and Guests in a MySQL database. The function should also follow the link to the Guest page and scrape the Description field as well, and then store the Guest with their Name, Link and Description to another table in the database. This function should be called with an asynchronous call to the scrape.php route in scrape.js. The provided select field (feel free to modify it) will be sent to your Javascript and the value should be sent along to scrape.php to construct the corresponding URL for that month's broadcasts. You would also have to create a separate route in search.php, called by a separate form in order to display all stored broadcasts in the database in a specific date range.

## Requirements

*   Create a MySQL database and provide the correct configuration information in config.php
*   Use javascript in the "scrape.js" script to call the "scrape.php" route on the server asyncronously
*   Fill in the "scrape.php" route to scrape the required data from the radio site. It must return the broadcasts and guests only from the requested month
*   Use javascript in the "scrape.js" script to call the search.php route on the server asyncronously
*   Fill in the search.php route to search up and display broadcasts from a date range made by the two datepicker elements from all broadcast records in the database.
*   Update the DOM with the search results
*   Broadcast results must be formatted and easy to read

## Considerations

*   You may add any Javascript libraries that you think are appropriate.
*   Use only base PHP functions/classes such as PDO, curl, DOMDocument and DOMXPath. Searching for documentation and implementation guides is encouraged.
*   Styling is not critical, this is not about looks. However the results should have some basic treatments.
*   Using software such as WAMP or MAMP to host a php and database locally is encouraged for testing
