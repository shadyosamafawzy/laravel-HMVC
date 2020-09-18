<?php


/**
 * @param string $moduleName
 * @param string $type
 * @return string
 */
function buildPrefix(string $moduleName ,string $type = 'web'){
 return config($moduleName.'.prefix.'.$type , config('module.prefix.'.$type)).'/'.config($moduleName.'.name');
}


function buildNamespace(string $moduleName ){
 return ucfirst($moduleName).'\Http\Controllers';
}
//
///**
// * @param string $moduleName
// * @param string $view
// * @param $with
// * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
// */
//function buildView(string $moduleName ,string $view,$with = null){
// return view($moduleName.'::'.$view,$with);
//}


