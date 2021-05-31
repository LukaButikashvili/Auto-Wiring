# Auto-Wiring

## About Project

Using this project u can get all Required parameters using Auto-Wiring

### Installation

* Clone repository into your apache server file;
* You must change **apache server config** for enable routing in the project.
    * You must open apache config:
    ```apache
    sudo vim /etc/apache2/apache2.conf
    ```
    * In apache2.conf file search **<Directory /var/www/>** and below that write this:
    ```apache
    <Directory /var/www/html/Auto-Wiring/>
        AllowOverride All
    </Directory>
    ```
    * Restart Apache Server:
    ```apache
    sudo systemctl restart apache2
    ```
