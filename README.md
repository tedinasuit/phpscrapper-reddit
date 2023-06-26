# PHP Web Scraper for Reddit's Soccer Subreddit

This project includes a simple PHP script for scraping the [Soccer subreddit](https://www.reddit.com/r/soccer/). It fetches HTML content from the page, parses it, and then extracts information from each post's headline and corresponding link.

## Requirements

- PHP 7.0 or higher.
- libcurl enabled for PHP.

## Usage

1. Clone this repository to your local machine.
2. Navigate to the directory of the script via the command line.
3. Run the script with the PHP command-line interface using the command `php phpscrapper.php`.

The script will print the title and link of each post from the Soccer subreddit to the console.

## Code Explanation

This PHP script uses the cURL library to fetch the HTML of the page. It then uses PHP's built-in DOMDocument class to parse this HTML. 

It searches for all the `div` tags in the HTML, and within each `div`, it searches for `h3` and `a` tags, which are assumed to contain the headline and link of a post, respectively. If it finds both `h3` and `a` tags in a `div`, it prints the contents of these tags to the console.

## Limitations and Disclaimer

This script is a basic example of web scraping with PHP and might not work if Reddit changes the structure of their website. Always respect the target website's robots.txt file and terms of service. In this case, Reddit's API should be used for larger scale data extraction, as per Reddit's terms of service.

The User-Agent string used in this script is for a specific version of Chrome on a Windows machine. If the script doesn't work as expected, you might need to update the User-Agent string or use a different one that corresponds to your machine and browser.
