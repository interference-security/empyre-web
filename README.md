# EmPyre Web


EmPyre Web utilizes the EmPyre REST API Server. It is a web interface for using [EmPyre](https://github.com/adaptivethreat/EmPyre).


# Run EmPyre REST API Server


Get EmPyre: https://github.com/adaptivethreat/EmPyre

```
./empyre --headless --restport port --username empyre_username --password empyre_password
```

# Requirements


PHP Curl should be installed to use EmPyre Web.


## Install PHP Curl

```
sudo apt-get install php5-curl
```


## To check for PHP Curl

Command Line:
```
root@kali:~# php -i | grep -i curl
/etc/php5/cli/conf.d/20-curl.ini,
curl
cURL support => enabled
cURL Information => 7.47.0
```

PHP Script:
```
<?php
echo (function_exists('curl_version') ? "Curl found": "Curl not found");
?>
```


# Important


CSRF protection has not been implemented because it was affecting the working of EmPyre Web. It will be implemented in the next release.


Stay Calm. Stay Secure. Contribute :)


# Screenshots


![empyre-web-login](https://cloud.githubusercontent.com/assets/5358495/15268453/d429473a-19fc-11e6-90a2-9cac96643463.PNG)


![empyre-web-about](https://cloud.githubusercontent.com/assets/5358495/15268501/7d40496c-19fe-11e6-884f-914081da2780.PNG)


![empyre-web-dashboard](https://cloud.githubusercontent.com/assets/5358495/15268458/e7132cee-19fc-11e6-8ed5-8c29f929649c.PNG)


