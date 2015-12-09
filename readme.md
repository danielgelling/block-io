## Block.io API Class

[![Total Downloads](https://poser.pugx.org/danielgelling/block-io/d/total.svg)](https://packagist.org/packages/danielgelling/block-io)
[![Latest Stable Version](https://poser.pugx.org/danielgelling/block-io/v/stable.svg)](https://packagist.org/packages/danielgelling/block-io)
[![Latest Unstable Version](https://poser.pugx.org/danielgelling/block-io/v/unstable.svg)](https://packagist.org/packages/danielgelling/block-io)
[![License](https://poser.pugx.org/danielgelling/block-io/license.svg)](https://packagist.org/packages/danielgelling/block-io)

This repository contains a class which can be used for [Block.io's API](https://block.io/api). This repository doesn't require any php mods to be installed. It has all methods that Block.io's API has in the form of URL's.

## Installation

### Using Composer

Simply use [composer](https://getcomposer.org) to install this repository into your project.

	composer require danielgelling/block-io:~1.*

### Downloading the repository

When you choose to download the repository, instead of using composer, you'll need to include all files in the `src` directory in the order as listed below.

	require 'src/Http.php';
	require 'src/Factory.php';

## Making a call

First you need to create a new instance of the Factory class. Which constructor needs the `api key`, `pin` and `version`.

	$api = new BlockIO\Factory($apiKey, $pin, $version);

Then on the $api object you can call any method as shown on [Block.io's API documentation](https://block.io/api).
