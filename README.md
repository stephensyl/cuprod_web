# cuprod_web
Making a website for Music Production
#Authors: James Koga, Stephen Syl-Akinwale and Anthony Lall Lewis

Our Website provides:Resources such as sample packs, links to tutorials and helpful Information about our meetings
Media ex. : members beats (embed SoundCloud/spotify), Beat battle challenges (promotion)
Ways to get involved
A way to receive feedback or suggestions
Schedule a 1:1 session?
Link to our discord
Collaboration with genre-specific artists

Domain Name:Cornellmusicproduction.com (going for $12 a year)
initially developed in html and now is dynamic with php
Standard Website Features: About the officers page, Contact us and more

What we might need to integrate on our website:Instagram following integration and Embedding soundcloud/spotify
# Deployment goes through a conversion process in Generate static file php script
This was done to work with github pages as a host and it uses the deploy.yml and generate_static_files.php  to convert all php files and mving necessary directories over to gh-pages branch and then deploying on github pages. If at any point conversion breaks those two files would need to be looked at.

If any other directories are being created they should be added in the deploy.yml script

In any case the generate_static_files.php ghould not break but it is possible I over looked a case further in our development. feel free to look through and adjust as need be but I advise making changes to the deploy.yml first.

mkdir -p static/newfile_name
p -R newfile_name/* static/newfile_name

## Example
- mkdir -p static/stylesheets static/js static/images
- p -R stylesheets/* static/stylesheets/



