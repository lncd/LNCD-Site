# lncd.lincoln.ac.uk

This repository contains the source for the LNCD website.

## Requirements

This site requires the following:

* A web server with PHP 5.3 or higher.
* A MySQL server.

## Installation

Installation is pretty simple - clone the repository to a folder, configure your web server to point at it, and populate the following environment variables:

* `CI_BASE_URL: `Base URL (including trailing slash) the site will be served from.
* `DB1_HOST`: Hostname of the MySQL server.
* `DB1_USER`: MySQL username with access to the database.
* `DB1_PASS`: Password of the MySQL user.
* `DB1_NAME`: Name of the MySQL database.
* `DB1_PORT`: Port of the MySQL server.
* `CWD_BASE_URI`: The base URL (including trailing slash) of the CWD CDN.

Once this is done you can build the database schema from the file in the `sql` folder, using the interface of your choice.
