## Local development - domains ##

Add the following domains to the `/etc/hosts` file:

```shell
127.0.0.1 wordpress-education.local www.wordpress-education.local mh-prod-wordpress-education.local pma-prod-wordpress-education.local
```

Urls list:
- [https://wordpress-education.local](https://wordpress-education.local) 
- [https://www.wordpress-education.local](https://www.wordpress-education.local) 
- [http://mh-prod-wordpress-education.local](http://mh-prod-wordpress-education.local) 
- [http://pma-prod-wordpress-education.local](http://pma-prod-wordpress-education.local)


## Local development - self-signed certificates ##

Generate self-signed certificates before running this composition in the `$SSL_CERTIFICATES_DIR`:

```shell
mkcert -cert-file=wordpress-education.local-prod.pem -key-file=wordpress-education.local-prod-key.pem wordpress-education.local www.wordpress-education.local
```

Add these keys to the Traefik configuration file if needed.