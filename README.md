Simple PHP wrapper to the pdfinfo unix tool.

# Installation

## 1. Install pdfinfo

First you need to have phpinfo in your system.

For ubuntu, there's an easy way for doing this:
```
sudo apt-get install popper-utils
```

## 2. Install the library
You can just download the file to your project, or install it via composer:
```
composer require "howtomakeaturn/pdfinfo:1.*"
```

# Usage
Just pass the path to the pdf file to the constructor, and you can get metadata from its properties immediately:

```php
$pdf = new PDFInfo('path/to/the/pdf');
echo $pdf->title; // Get the title
echo $pdf->pages; // Get the number of pages
```

# Reference

Currently this library supports the following metadata:

* title
* author
* creator
* producer
* creationDate
* modDate
* tagged
* form
* pages
* encrypted
* pageSize
* fileSize
* optimized
* PDFVersion
