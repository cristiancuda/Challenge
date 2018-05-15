<h3>Parse.php</h3> Scrapes content of a user-defined endpoint, and returns all tags that match the user-passed values.
Request signature: http://yourwebserver.com/parse?endpoint=www.anywebsite.com&tag=h1
This will output a list of all the matches of the tag value (in this case h1) on the endpoint www.anywebsite.com in a JSON format.

<h3>Parsepush.php</h3> Does the same thing as parse.php, but utilizes the method array_push to populate the array.

<h3>Content.php</h3> Scrapes content of a user-defined endpoint, just like Parse.php, but in addition, looks for certain html tags that has text inside of it.
Request signature: http://yourwebserver.com/parse?endpoint=www.anywebsite.com&tag=h1&content=Hello%20all.
In the hipothetical case that www.anywebsite.com has the text "Hello all" in a h1 tag, the output will be TRUE.

<h3>Contentpush.php</h3> Does the same thing as content.php, but utilizes the method array_push to populate the array.
