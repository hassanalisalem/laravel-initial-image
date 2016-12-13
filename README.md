# Laravel Default Profile Image

Laravel package to create default profile image using name of user.


## Installation

Install using composer:

    composer require hassanalisalem/laravel-initial-image

Edit `app/config/app.php` and add the `providers`

    'providers' => [
        'hassanalisalem\Image\DefaultProfileImageServiceProvider'
    ]

    
## Basic Usage

To create a profile image just do

	$img = \DefaultProfileImage::create("Name Surname");
	\Storage::put("profile.png", $img->encode());

	
This will create a profile image that has 512px width&height using the first letters of name and surname.


## Advanced Usage

Create a white color text over black color background profile image that has 216px width&height.

	$img = \DefaultProfileImage::create("Name Surname", 256, '#000', '#FFF');
	\Storage::put("profile.png", $img->encode());

Using a custom font

	$img = \DefaultProfileImage::create("@ Lamoni", 256, "#212121", "#FFF", '/var/www/public/fonts/RobotoDraftRegular.woff');
	\Storage::put("profile.png", $img->encode());
	
