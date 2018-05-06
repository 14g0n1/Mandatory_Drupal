# Ads System Module for Durpal8

Manage ads across entities and entity types (config), that generate 
dynamically a block per Ad Type for show one Ad.

## How to install

1. Install module.
2. Go to ```/admin/structure/ad-types/settings``` and configure.
3. Create/Edit in your theme the template html.html.twig and add 
between head tag the lines.
```
<!-- Init Script to Ads System -->
 {{ ads_system_script_init | raw }}
<!-- END Init Script to Ads System -->
```
