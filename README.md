# Introduction 
M12wear.com repo

# First Install Guide
1.	Download Docker
 - [MAC](https://docs.docker.com/desktop/mac/install/)
 - [direct link for Intel:](https://desktop.docker.com/mac/main/amd64/Docker.dmg?utm_source=docker&utm_medium=webreferral&utm_campaign=docs-driven-download-mac-amd64)
 - [direct link for M1:](https://desktop.docker.com/mac/main/arm64/Docker.dmg?utm_source=docker&utm_medium=webreferral&utm_campaign=docs-driven-download-mac-arm64) 
 
 - [WINDOWS](https://docs.docker.com/desktop/windows/install/)
 - [direct link:](https://desktop.docker.com/win/main/amd64/Docker%20Desktop%20Installer.exe) 

2.	Run command: docker-compose up -d
 - TO stop container: docker-compose down
 - TO restart container: docker-compose restart

3.	Open site http://localhost:8000/

4.  Press Continue

5.  Fill all fields and Press "Install WordPress"

6.  If WP said that DBs need to be repaired
 - Add define('WP_ALLOW_REPAIR', true); at the end in wordpress/wp-config.php file
 - Reload the page with error and Press "Repair Database"
 - Delete define('WP_ALLOW_REPAIR', true); in wordpress/wp-config.php file
 - Go to http://localhost:8000/wp-admin/

7. Go To Plugins -> Add New -> Search 'woocommerce' and press "Install Now"

8. After installation press "Activate"

9. Fill Store details with any and press "Continue"

10. Press "No thanks"

11. Industry - Fashion,... -> Continue

12. Physical products -> Continue

13. I don't.. -> No -> Continue

14. Continue

15. Select Storefront theme

# Additiona info

Database:
 - Name: wordpress
 - User: wp-user
 - Password: wp-pass

Folders:
 - wordpress = main site folder
 - plugins = word press plugins folder
 - db-data = MySQL DB