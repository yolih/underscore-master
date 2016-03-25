# underscore-master

DESCRIPTION: Root DNA for Ticketfly internal and contractor themes

## The Gallery Template
*Using Post Formats to Curate WP Galleries *
A replacement for the NextGen Gallery Plugin

Below are instructions for using the files included in this folder.
For additional documentation on post formats, go to:
http://codex.wordpress.org/Post_Formats

	•	This package was created in order to facilitate the retirement of the NextGen plugin from our multi-site. You are encouraged to customize these files in a way that best serves your work flow and style, and integrate them into your own starter theme/boilerplate.
	•	The files included in this folder are not a complete theme. Each file contains snippets of code necessary to utilize the WP Post Format function, as well as providing a basic structure and style to get you started.

Using the Files
	•	functions.php   Add all of this code to your own theme's functions.php file. Two variable you will probably edit from time to time are the "Normal post thumbnails" and the "Photo gallery thumbnail size". The first number is the width, and the second number is the height. More documentation on these functions can be found here: http://codex.wordpress.org/Function_Reference/add_image_size
	•	index.php   This much simpler form of a loop for your index page partials out specialized loops based on post format to other post templates. For the purpose of this package, only two post templates are included: Gallery and None (which is a standard blog post). This file will continue to handle displaying a list of your standard blog posts for any page assigned to function as your Posts page as per your Settings. (http://codex.wordpress.org/Settings_Reading_Screen)
	•	content-gallery.php   Posts assigned to the Gallery Post Format will appear using this file.
	•	content.php   Standard single posts will appear using this file.
	•	page-gallery.php   This template filters out all posts except for posts in the Gallery Post Format. It is also counting images loaded into each Gallery post. If you choose to use an image for your Featured Image that does not appear in your gallery, it will include that image in your total image count.
	•	style.css   Add these styles to your own theme's style.css file to get started and edit as needed.

Creating Galleries
	•	After updating your theme files with the provided code snippets and page template, create a new page in your WP site and assign the Photo Gallery Page Template to it. Publish or save draft.
	•	Create a new post and assign the Gallery Post Format to it. If you do not see the Format panel, check your Screen Options at top to make sure the Format panel is visible.
	•	Create a gallery by following these instructions: http://codex.wordpress.org/The_WordPress_Gallery
	•	Make sure the post has a title and a Featured Image assigned to it, then publish.
	•	Posts in the Gallery Post Format will automatically populate the page using the Photo Gallery Page Template.