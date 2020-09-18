<?php



function DS(){
     return  DIRECTORY_SEPARATOR;
}

function getModuleDirectory(string $moduleName){
    return app_path('Modules'.DS().$moduleName.DS());
}


function getConfigFile(string $fileName , string $moduleName){
    return getModuleDirectory($moduleName).'config'.DS().$fileName.'.php';
}

function loadRoute(string $fileName , string $moduleName){
    return getModuleDirectory($moduleName).'routes'.DS().$fileName.'.php';
}
function loadTrans(string $moduleName){
    return getModuleDirectory($moduleName).'resources'.DS().'lang';
}

function loadViews(string $moduleName){
    return getModuleDirectory($moduleName).'resources'.DS().'views';
}

function loadMigrations(string $moduleName){
    return getModuleDirectory($moduleName).'database'.DS().'migrations';
}
