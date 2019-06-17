# table-triable-bundle

Have a confirmation window before link

```
composer require aldaflux/table-triable-bundle
```

 ## base.html.twig


```
     {% stylesheets  '@AldafluxTableTriableBundle/Resources/public/css/*'  %}
                <link href="{{asset_url}}" type="text/css" rel="stylesheet" />
        {% endstylesheets %}
```


Si Bootsrap 4 : 

```
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
```



```
                {% javascripts 

            '@AldafluxTableTriableBundle/Resources/public/js/jszip.js' 
            '@AldafluxTableTriableBundle/Resources/public/js/pdfmake.js' 
            '@AldafluxTableTriableBundle/Resources/public/js/vfs_fonts.js' 
            '@AldafluxTableTriableBundle/Resources/public/js/jquery.dataTables.min.js' 
            '@AldafluxTableTriableBundle/Resources/public/js/dataTables.buttons.js' 
            '@AldafluxTableTriableBundle/Resources/public/js/buttons.print.js' 
            '@AldafluxTableTriableBundle/Resources/public/js/buttons.html5.js' 
            '@AldafluxTableTriableBundle/Resources/public/js/buttons.bootstrap.js' 
            '@AldafluxTableTriableBundle/Resources/public/js/dataTables.bootstrap.js' 
            '@AldafluxTableTriableBundle/Resources/public/js/tableExtension.js' 

        %}
               <script   src="{{ asset_url }}"></script>
                 
                 
        {% endjavascripts %}

```

