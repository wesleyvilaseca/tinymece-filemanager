    <?php
    define('URL_BASE', 'http://localhost/modelos/tiny-filemanager/');
    /**
     * TODOS REFERENTES A PASTAS DENTRO DO ASSETS
     * UPLOADDIR -> CAMINHO ABSOLUTO DA PASTA IMAGENS
     * 
     */
    define('FILEMANAGER', [
        'PLUGIN_TINY_FILEMANAGER' => URL_BASE . 'assets/js/libs/managerfile/tinymce/plugins/responsivefilemanager/plugin.min.js',
        'PLUGIN_FILEMANAGER' => URL_BASE . 'assets/js/libs/managerfile/filemanager/plugin.min.js',
        'EXTERNAL_FILEMAGER_PATH' => URL_BASE . 'assets/js/libs/managerfile/filemanager/',
        'TEMPLATES' => URL_BASE . 'assets/js/libs/tinymce/templatelist.php',
        'UPLOAD_DIR' => '/modelos/tiny-filemanager/assets/img/images/',
        'CURRENT_PATH' => '../../../../img/images/',
        'THUMBS_BASE_PATH' => '../../../../img/thumbs/',
        'THUMBS_UPLOAD_DIR' => '../../../../img/thumbs/',
        'TEMPLATELIST' => URL_BASE . 'assets/js/libs/tinymce/templates/'
    ]);
