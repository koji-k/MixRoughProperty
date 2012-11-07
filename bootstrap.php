<?php
set_include_path(
	__DIR__
	. PATH_SEPARATOR
	. get_include_path()
);

// クラスローダー設定
spl_autoload_register(function($className){
	require_once sprintf('%s.php', $className);
});
