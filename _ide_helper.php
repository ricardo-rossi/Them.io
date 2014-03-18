<?php
/**
 * An helper file for Laravel 4, to provide autocomplete information to your IDE
 * Generated with https://github.com/barryvdh/laravel-ide-helper
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */
exit('Only to be used as an helper for your IDE');

class App extends Illuminate\Support\Facades\App{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($request = null){
		 Illuminate\Foundation\Application::__construct($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function bindInstallPaths($paths){
		 Illuminate\Foundation\Application::bindInstallPaths($paths);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getBootstrapFile(){
		 Illuminate\Foundation\Application::getBootstrapFile();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function startExceptionHandling(){
		 Illuminate\Foundation\Application::startExceptionHandling();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function environment(){
		 Illuminate\Foundation\Application::environment();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isLocal(){
		 Illuminate\Foundation\Application::isLocal();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function detectEnvironment($envs){
		 Illuminate\Foundation\Application::detectEnvironment($envs);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function runningInConsole(){
		 Illuminate\Foundation\Application::runningInConsole();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function runningUnitTests(){
		 Illuminate\Foundation\Application::runningUnitTests();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function forceRegister($provider, $options = array()){
		 Illuminate\Foundation\Application::forceRegister($provider, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function register($provider, $options = array(), $force = false){
		 Illuminate\Foundation\Application::register($provider, $options, $force);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRegistered($provider){
		 Illuminate\Foundation\Application::getRegistered($provider);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function resolveProviderClass($provider){
		 Illuminate\Foundation\Application::resolveProviderClass($provider);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function loadDeferredProviders(){
		 Illuminate\Foundation\Application::loadDeferredProviders();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function registerDeferredProvider($provider, $service = null){
		 Illuminate\Foundation\Application::registerDeferredProvider($provider, $service);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function make($abstract, $parameters = array()){
		 Illuminate\Foundation\Application::make($abstract, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function before($callback){
		 Illuminate\Foundation\Application::before($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function after($callback){
		 Illuminate\Foundation\Application::after($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function finish($callback){
		 Illuminate\Foundation\Application::finish($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function shutdown($callback = null){
		 Illuminate\Foundation\Application::shutdown($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function useArraySessions($callback){
		 Illuminate\Foundation\Application::useArraySessions($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isBooted(){
		 Illuminate\Foundation\Application::isBooted();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function boot(){
		 Illuminate\Foundation\Application::boot();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function booting($callback){
		 Illuminate\Foundation\Application::booting($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function booted($callback){
		 Illuminate\Foundation\Application::booted($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function run($request = null){
		 Illuminate\Foundation\Application::run($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function middleware($class, $parameters = array()){
		 Illuminate\Foundation\Application::middleware($class, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function forgetMiddleware($class){
		 Illuminate\Foundation\Application::forgetMiddleware($class);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function handle($request, $type = 1, $catch = true){
		 Illuminate\Foundation\Application::handle($request, $type, $catch);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function dispatch($request){
		 Illuminate\Foundation\Application::dispatch($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function terminate($request, $response){
		 Illuminate\Foundation\Application::terminate($request, $response);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function callFinishCallbacks($request, $response){
		 Illuminate\Foundation\Application::callFinishCallbacks($request, $response);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function prepareRequest($request){
		 Illuminate\Foundation\Application::prepareRequest($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function prepareResponse($value){
		 Illuminate\Foundation\Application::prepareResponse($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function readyForResponses(){
		 Illuminate\Foundation\Application::readyForResponses();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isDownForMaintenance(){
		 Illuminate\Foundation\Application::isDownForMaintenance();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function down($callback){
		 Illuminate\Foundation\Application::down($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function abort($code, $message = '', $headers = array()){
		 Illuminate\Foundation\Application::abort($code, $message, $headers);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function missing($callback){
		 Illuminate\Foundation\Application::missing($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function error($callback){
		 Illuminate\Foundation\Application::error($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function pushError($callback){
		 Illuminate\Foundation\Application::pushError($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function fatal($callback){
		 Illuminate\Foundation\Application::fatal($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getConfigLoader(){
		 Illuminate\Foundation\Application::getConfigLoader();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getEnvironmentVariablesLoader(){
		 Illuminate\Foundation\Application::getEnvironmentVariablesLoader();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getProviderRepository(){
		 Illuminate\Foundation\Application::getProviderRepository();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLoadedProviders(){
		 Illuminate\Foundation\Application::getLoadedProviders();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDeferredServices($services){
		 Illuminate\Foundation\Application::setDeferredServices($services);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isDeferredService($service){
		 Illuminate\Foundation\Application::isDeferredService($service);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function requestClass($class = null){
		 Illuminate\Foundation\Application::requestClass($class);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setRequestForConsoleEnvironment(){
		 Illuminate\Foundation\Application::setRequestForConsoleEnvironment();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function onRequest($method, $parameters = array()){
		 Illuminate\Foundation\Application::onRequest($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLocale(){
		 Illuminate\Foundation\Application::getLocale();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setLocale($locale){
		 Illuminate\Foundation\Application::setLocale($locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function registerCoreContainerAliases(){
		 Illuminate\Foundation\Application::registerCoreContainerAliases();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __get($key){
		 Illuminate\Foundation\Application::__get($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __set($key, $value){
		 Illuminate\Foundation\Application::__set($key, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function bound($abstract){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::bound($abstract);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isAlias($name){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::isAlias($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function bind($abstract, $concrete = null, $shared = false){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function bindIf($abstract, $concrete = null, $shared = false){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function singleton($abstract, $concrete = null){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::singleton($abstract, $concrete);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function share($closure){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::share($closure);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function bindShared($abstract, $closure){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::bindShared($abstract, $closure);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function extend($abstract, $closure){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::extend($abstract, $closure);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function instance($abstract, $instance){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::instance($abstract, $instance);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function alias($abstract, $alias){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::alias($abstract, $alias);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function rebinding($abstract, $callback){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::rebinding($abstract, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function refresh($abstract, $target, $method){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::refresh($abstract, $target, $method);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function build($concrete, $parameters = array()){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::build($concrete, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function resolving($abstract, $callback){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::resolving($abstract, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function resolvingAny($callback){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::resolvingAny($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isShared($abstract){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::isShared($abstract);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getBindings(){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::getBindings();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function forgetInstance($abstract){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::forgetInstance($abstract);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function forgetInstances(){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::forgetInstances();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetExists($key){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::offsetExists($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetGet($key){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::offsetGet($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetSet($key, $value){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::offsetSet($key, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetUnset($key){
		//Method inherited from Illuminate\Container\Container
		 Illuminate\Foundation\Application::offsetUnset($key);
	 }

}

class Artisan extends Illuminate\Support\Facades\Artisan{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function start($app){
		 Illuminate\Console\Application::start($app);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function make($app){
		 Illuminate\Console\Application::make($app);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function boot(){
		 Illuminate\Console\Application::boot();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function call($command, $parameters = array(), $output = null){
		 Illuminate\Console\Application::call($command, $parameters, $output);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function add($command){
		 Illuminate\Console\Application::add($command);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function resolve($command){
		 Illuminate\Console\Application::resolve($command);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function resolveCommands($commands){
		 Illuminate\Console\Application::resolveCommands($commands);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function renderException($e, $output){
		 Illuminate\Console\Application::renderException($e, $output);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setExceptionHandler($handler){
		 Illuminate\Console\Application::setExceptionHandler($handler);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setLaravel($laravel){
		 Illuminate\Console\Application::setLaravel($laravel);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setAutoExit($boolean){
		 Illuminate\Console\Application::setAutoExit($boolean);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($name = 'UNKNOWN', $version = 'UNKNOWN'){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::__construct($name, $version);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDispatcher($dispatcher){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setDispatcher($dispatcher);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function run($input = null, $output = null){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::run($input, $output);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function doRun($input, $output){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::doRun($input, $output);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setHelperSet($helperSet){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setHelperSet($helperSet);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getHelperSet(){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::getHelperSet();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDefinition($definition){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setDefinition($definition);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDefinition(){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::getDefinition();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getHelp(){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::getHelp();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setCatchExceptions($boolean){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setCatchExceptions($boolean);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getName(){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::getName();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setName($name){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setName($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getVersion(){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::getVersion();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setVersion($version){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setVersion($version);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLongVersion(){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::getLongVersion();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function register($name){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::register($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function addCommands($commands){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::addCommands($commands);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function get($name){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::get($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function has($name){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::has($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getNamespaces(){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::getNamespaces();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function findNamespace($namespace){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::findNamespace($namespace);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function find($name){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::find($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function all($namespace = null){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::all($namespace);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getAbbreviations($names){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::getAbbreviations($names);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function asText($namespace = null, $raw = false){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::asText($namespace, $raw);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function asXml($namespace = null, $asDom = false){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::asXml($namespace, $asDom);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTerminalDimensions(){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::getTerminalDimensions();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setTerminalDimensions($width, $height){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::setTerminalDimensions($width, $height);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function extractNamespace($name, $limit = null){
		//Method inherited from Symfony\Component\Console\Application
		 Illuminate\Console\Application::extractNamespace($name, $limit);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __call($method, $parameters){
		 Illuminate\Foundation\Artisan::__call($method, $parameters);
	 }

}

class Auth extends Illuminate\Support\Facades\Auth{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function createDatabaseDriver(){
		 Illuminate\Auth\AuthManager::createDatabaseDriver();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function createEloquentDriver(){
		 Illuminate\Auth\AuthManager::createEloquentDriver();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDefaultDriver(){
		 Illuminate\Auth\AuthManager::getDefaultDriver();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDefaultDriver($name){
		 Illuminate\Auth\AuthManager::setDefaultDriver($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($app){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Auth\AuthManager::__construct($app);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function driver($driver = null){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Auth\AuthManager::driver($driver);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function extend($driver, $callback){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Auth\AuthManager::extend($driver, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDrivers(){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Auth\AuthManager::getDrivers();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __call($method, $parameters){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Auth\AuthManager::__call($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function check(){
		 Illuminate\Auth\Guard::check();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function guest(){
		 Illuminate\Auth\Guard::guest();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function user(){
		 Illuminate\Auth\Guard::user();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function once($credentials = array()){
		 Illuminate\Auth\Guard::once($credentials);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function validate($credentials = array()){
		 Illuminate\Auth\Guard::validate($credentials);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function basic($field = 'email', $request = null){
		 Illuminate\Auth\Guard::basic($field, $request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function onceBasic($field = 'email', $request = null){
		 Illuminate\Auth\Guard::onceBasic($field, $request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function attempt($credentials = array(), $remember = false, $login = true){
		 Illuminate\Auth\Guard::attempt($credentials, $remember, $login);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function attempting($callback){
		 Illuminate\Auth\Guard::attempting($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function login($user, $remember = false){
		 Illuminate\Auth\Guard::login($user, $remember);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function loginUsingId($id, $remember = false){
		 Illuminate\Auth\Guard::loginUsingId($id, $remember);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function onceUsingId($id){
		 Illuminate\Auth\Guard::onceUsingId($id);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function logout(){
		 Illuminate\Auth\Guard::logout();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getCookieJar(){
		 Illuminate\Auth\Guard::getCookieJar();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setCookieJar($cookie){
		 Illuminate\Auth\Guard::setCookieJar($cookie);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDispatcher(){
		 Illuminate\Auth\Guard::getDispatcher();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDispatcher($events){
		 Illuminate\Auth\Guard::setDispatcher($events);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSession(){
		 Illuminate\Auth\Guard::getSession();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getProvider(){
		 Illuminate\Auth\Guard::getProvider();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setProvider($provider){
		 Illuminate\Auth\Guard::setProvider($provider);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getUser(){
		 Illuminate\Auth\Guard::getUser();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setUser($user){
		 Illuminate\Auth\Guard::setUser($user);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRequest(){
		 Illuminate\Auth\Guard::getRequest();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setRequest($request){
		 Illuminate\Auth\Guard::setRequest($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLastAttempted(){
		 Illuminate\Auth\Guard::getLastAttempted();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getName(){
		 Illuminate\Auth\Guard::getName();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRecallerName(){
		 Illuminate\Auth\Guard::getRecallerName();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function viaRemember(){
		 Illuminate\Auth\Guard::viaRemember();
	 }

}

class Blade extends Illuminate\Support\Facades\Blade{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function compile($path){
		 Illuminate\View\Compilers\BladeCompiler::compile($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function compileString($value){
		 Illuminate\View\Compilers\BladeCompiler::compileString($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function compileEchoDefaults($value){
		 Illuminate\View\Compilers\BladeCompiler::compileEchoDefaults($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function extend($compiler){
		 Illuminate\View\Compilers\BladeCompiler::extend($compiler);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function createMatcher($function){
		 Illuminate\View\Compilers\BladeCompiler::createMatcher($function);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function createOpenMatcher($function){
		 Illuminate\View\Compilers\BladeCompiler::createOpenMatcher($function);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function createPlainMatcher($function){
		 Illuminate\View\Compilers\BladeCompiler::createPlainMatcher($function);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setContentTags($openTag, $closeTag, $escaped = false){
		 Illuminate\View\Compilers\BladeCompiler::setContentTags($openTag, $closeTag, $escaped);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setEscapedContentTags($openTag, $closeTag){
		 Illuminate\View\Compilers\BladeCompiler::setEscapedContentTags($openTag, $closeTag);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getContentTags(){
		 Illuminate\View\Compilers\BladeCompiler::getContentTags();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getEscapedContentTags(){
		 Illuminate\View\Compilers\BladeCompiler::getEscapedContentTags();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($files, $cachePath){
		//Method inherited from Illuminate\View\Compilers\Compiler
		 Illuminate\View\Compilers\BladeCompiler::__construct($files, $cachePath);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getCompiledPath($path){
		//Method inherited from Illuminate\View\Compilers\Compiler
		 Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isExpired($path){
		//Method inherited from Illuminate\View\Compilers\Compiler
		 Illuminate\View\Compilers\BladeCompiler::isExpired($path);
	 }

}

class Cache extends Illuminate\Support\Facades\Cache{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPrefix(){
		 Illuminate\Cache\CacheManager::getPrefix();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setPrefix($name){
		 Illuminate\Cache\CacheManager::setPrefix($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDefaultDriver(){
		 Illuminate\Cache\CacheManager::getDefaultDriver();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDefaultDriver($name){
		 Illuminate\Cache\CacheManager::setDefaultDriver($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($app){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Cache\CacheManager::__construct($app);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function driver($driver = null){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Cache\CacheManager::driver($driver);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function extend($driver, $callback){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Cache\CacheManager::extend($driver, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDrivers(){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Cache\CacheManager::getDrivers();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __call($method, $parameters){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Cache\CacheManager::__call($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function has($key){
		 Illuminate\Cache\Repository::has($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function get($key, $default = null){
		 Illuminate\Cache\Repository::get($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function put($key, $value, $minutes){
		 Illuminate\Cache\Repository::put($key, $value, $minutes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function add($key, $value, $minutes){
		 Illuminate\Cache\Repository::add($key, $value, $minutes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function remember($key, $minutes, $callback){
		 Illuminate\Cache\Repository::remember($key, $minutes, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function sear($key, $callback){
		 Illuminate\Cache\Repository::sear($key, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function rememberForever($key, $callback){
		 Illuminate\Cache\Repository::rememberForever($key, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDefaultCacheTime(){
		 Illuminate\Cache\Repository::getDefaultCacheTime();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDefaultCacheTime($minutes){
		 Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getStore(){
		 Illuminate\Cache\Repository::getStore();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetExists($key){
		 Illuminate\Cache\Repository::offsetExists($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetGet($key){
		 Illuminate\Cache\Repository::offsetGet($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetSet($key, $value){
		 Illuminate\Cache\Repository::offsetSet($key, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetUnset($key){
		 Illuminate\Cache\Repository::offsetUnset($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function macro($name, $macro){
		 Illuminate\Cache\Repository::macro($name, $macro);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasMacro($name){
		 Illuminate\Cache\Repository::hasMacro($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __callStatic($method, $parameters){
		 Illuminate\Cache\Repository::__callStatic($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function macroCall($method, $parameters){
		 Illuminate\Cache\Repository::macroCall($method, $parameters);
	 }

}

class ClassLoader extends Illuminate\Support\ClassLoader{
}

class Config extends Illuminate\Support\Facades\Config{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($loader, $environment){
		 Illuminate\Config\Repository::__construct($loader, $environment);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function has($key){
		 Illuminate\Config\Repository::has($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasGroup($key){
		 Illuminate\Config\Repository::hasGroup($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function get($key, $default = null){
		 Illuminate\Config\Repository::get($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function set($key, $value){
		 Illuminate\Config\Repository::set($key, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function package($package, $hint, $namespace = null){
		 Illuminate\Config\Repository::package($package, $hint, $namespace);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function afterLoading($namespace, $callback){
		 Illuminate\Config\Repository::afterLoading($namespace, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function addNamespace($namespace, $hint){
		 Illuminate\Config\Repository::addNamespace($namespace, $hint);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getNamespaces(){
		 Illuminate\Config\Repository::getNamespaces();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLoader(){
		 Illuminate\Config\Repository::getLoader();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setLoader($loader){
		 Illuminate\Config\Repository::setLoader($loader);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getEnvironment(){
		 Illuminate\Config\Repository::getEnvironment();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getAfterLoadCallbacks(){
		 Illuminate\Config\Repository::getAfterLoadCallbacks();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getItems(){
		 Illuminate\Config\Repository::getItems();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetExists($key){
		 Illuminate\Config\Repository::offsetExists($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetGet($key){
		 Illuminate\Config\Repository::offsetGet($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetSet($key, $value){
		 Illuminate\Config\Repository::offsetSet($key, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offsetUnset($key){
		 Illuminate\Config\Repository::offsetUnset($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function parseKey($key){
		//Method inherited from Illuminate\Support\NamespacedItemResolver
		 Illuminate\Config\Repository::parseKey($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setParsedKey($key, $parsed){
		//Method inherited from Illuminate\Support\NamespacedItemResolver
		 Illuminate\Config\Repository::setParsedKey($key, $parsed);
	 }

}

class Controller extends Illuminate\Routing\Controller{
}

class Cookie extends Illuminate\Support\Facades\Cookie{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
		 Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
		 Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function forget($name, $path = null, $domain = null){
		 Illuminate\Cookie\CookieJar::forget($name, $path, $domain);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasQueued($key){
		 Illuminate\Cookie\CookieJar::hasQueued($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function queued($key, $default = null){
		 Illuminate\Cookie\CookieJar::queued($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function queue(){
		 Illuminate\Cookie\CookieJar::queue();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function unqueue($name){
		 Illuminate\Cookie\CookieJar::unqueue($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDefaultPathAndDomain($path, $domain){
		 Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getQueuedCookies(){
		 Illuminate\Cookie\CookieJar::getQueuedCookies();
	 }

}

class Crypt extends Illuminate\Support\Facades\Crypt{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($key){
		 Illuminate\Encryption\Encrypter::__construct($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function encrypt($value){
		 Illuminate\Encryption\Encrypter::encrypt($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function decrypt($payload){
		 Illuminate\Encryption\Encrypter::decrypt($payload);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setKey($key){
		 Illuminate\Encryption\Encrypter::setKey($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setCipher($cipher){
		 Illuminate\Encryption\Encrypter::setCipher($cipher);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setMode($mode){
		 Illuminate\Encryption\Encrypter::setMode($mode);
	 }

}

class DB extends Illuminate\Support\Facades\DB{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($app, $factory){
		 Illuminate\Database\DatabaseManager::__construct($app, $factory);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function connection($name = null){
		 Illuminate\Database\DatabaseManager::connection($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function reconnect($name = null){
		 Illuminate\Database\DatabaseManager::reconnect($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function disconnect($name = null){
		 Illuminate\Database\DatabaseManager::disconnect($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDefaultConnection(){
		 Illuminate\Database\DatabaseManager::getDefaultConnection();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDefaultConnection($name){
		 Illuminate\Database\DatabaseManager::setDefaultConnection($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function extend($name, $resolver){
		 Illuminate\Database\DatabaseManager::extend($name, $resolver);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getConnections(){
		 Illuminate\Database\DatabaseManager::getConnections();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __call($method, $parameters){
		 Illuminate\Database\DatabaseManager::__call($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSchemaBuilder(){
		 Illuminate\Database\MySqlConnection::getSchemaBuilder();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function useDefaultQueryGrammar(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::useDefaultQueryGrammar();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function useDefaultSchemaGrammar(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::useDefaultSchemaGrammar();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function useDefaultPostProcessor(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::useDefaultPostProcessor();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function table($table){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::table($table);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function raw($value){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::raw($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function selectOne($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::selectOne($query, $bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function select($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::select($query, $bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function insert($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::insert($query, $bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function update($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::update($query, $bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function delete($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::delete($query, $bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function statement($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::statement($query, $bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function affectingStatement($query, $bindings = array()){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::affectingStatement($query, $bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function unprepared($query){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::unprepared($query);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function prepareBindings($bindings){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::prepareBindings($bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function transaction($callback){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::transaction($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function beginTransaction(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::beginTransaction();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function commit(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::commit();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function rollBack(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::rollBack();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function pretend($callback){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::pretend($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function logQuery($query, $bindings, $time = null){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::logQuery($query, $bindings, $time);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function listen($callback){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::listen($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDoctrineColumn($table, $column){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getDoctrineColumn($table, $column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDoctrineSchemaManager(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getDoctrineSchemaManager();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDoctrineConnection(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getDoctrineConnection();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPdo(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getPdo();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getReadPdo(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getReadPdo();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setPdo($pdo){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setPdo($pdo);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setReadPdo($pdo){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setReadPdo($pdo);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getName(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getName();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getConfig($option){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getConfig($option);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDriverName(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getDriverName();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getQueryGrammar(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getQueryGrammar();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setQueryGrammar($grammar){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setQueryGrammar($grammar);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSchemaGrammar(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getSchemaGrammar();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setSchemaGrammar($grammar){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setSchemaGrammar($grammar);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPostProcessor(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getPostProcessor();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setPostProcessor($processor){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setPostProcessor($processor);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getEventDispatcher(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getEventDispatcher();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setEventDispatcher($events){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setEventDispatcher($events);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPaginator(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getPaginator();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setPaginator($paginator){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setPaginator($paginator);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getCacheManager(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getCacheManager();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setCacheManager($cache){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setCacheManager($cache);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function pretending(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::pretending();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getFetchMode(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getFetchMode();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setFetchMode($fetchMode){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setFetchMode($fetchMode);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getQueryLog(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getQueryLog();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flushQueryLog(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::flushQueryLog();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function enableQueryLog(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::enableQueryLog();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function disableQueryLog(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::disableQueryLog();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function logging(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::logging();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDatabaseName(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getDatabaseName();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDatabaseName($database){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setDatabaseName($database);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTablePrefix(){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::getTablePrefix();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setTablePrefix($prefix){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::setTablePrefix($prefix);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function withTablePrefix($grammar){
		//Method inherited from Illuminate\Database\Connection
		 Illuminate\Database\MySqlConnection::withTablePrefix($grammar);
	 }

}

class Eloquent extends Illuminate\Database\Eloquent\Model{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function findMany($id, $columns = array()){
		 Illuminate\Database\Eloquent\Builder::findMany($id, $columns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function first($columns = array()){
		 Illuminate\Database\Eloquent\Builder::first($columns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function firstOrFail($columns = array()){
		 Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function get($columns = array()){
		 Illuminate\Database\Eloquent\Builder::get($columns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function pluck($column){
		 Illuminate\Database\Eloquent\Builder::pluck($column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function chunk($count, $callback){
		 Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function lists($column, $key = null){
		 Illuminate\Database\Eloquent\Builder::lists($column, $key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function paginate($perPage = null, $columns = array()){
		 Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function increment($column, $amount = 1, $extra = array()){
		 Illuminate\Database\Eloquent\Builder::increment($column, $amount, $extra);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function decrement($column, $amount = 1, $extra = array()){
		 Illuminate\Database\Eloquent\Builder::decrement($column, $amount, $extra);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function forceDelete(){
		 Illuminate\Database\Eloquent\Builder::forceDelete();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function onDelete($callback){
		 Illuminate\Database\Eloquent\Builder::onDelete($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getModels($columns = array()){
		 Illuminate\Database\Eloquent\Builder::getModels($columns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function eagerLoadRelations($models){
		 Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function where($column, $operator = null, $value = null, $boolean = 'and'){
		 Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orWhere($column, $operator = null, $value = null){
		 Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null){
		 Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whereHas($relation, $callback, $operator = '>=', $count = 1){
		 Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orHas($relation, $operator = '>=', $count = 1){
		 Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orWhereHas($relation, $callback, $operator = '>=', $count = 1){
		 Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getQuery(){
		 Illuminate\Database\Eloquent\Builder::getQuery();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setQuery($query){
		 Illuminate\Database\Eloquent\Builder::setQuery($query);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getEagerLoads(){
		 Illuminate\Database\Eloquent\Builder::getEagerLoads();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setEagerLoads($eagerLoad){
		 Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getModel(){
		 Illuminate\Database\Eloquent\Builder::getModel();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setModel($model){
		 Illuminate\Database\Eloquent\Builder::setModel($model);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function macro($name, $callback){
		 Illuminate\Database\Eloquent\Builder::macro($name, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getMacro($name){
		 Illuminate\Database\Eloquent\Builder::getMacro($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function select($columns = array()){
		 Illuminate\Database\Query\Builder::select($columns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function selectRaw($expression){
		 Illuminate\Database\Query\Builder::selectRaw($expression);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function addSelect($column){
		 Illuminate\Database\Query\Builder::addSelect($column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function distinct(){
		 Illuminate\Database\Query\Builder::distinct();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function from($table){
		 Illuminate\Database\Query\Builder::from($table);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function join($table, $one, $operator = null, $two = null, $type = 'inner', $where = false){
		 Illuminate\Database\Query\Builder::join($table, $one, $operator, $two, $type, $where);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function joinWhere($table, $one, $operator, $two, $type = 'inner'){
		 Illuminate\Database\Query\Builder::joinWhere($table, $one, $operator, $two, $type);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function leftJoin($table, $first, $operator = null, $second = null){
		 Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function leftJoinWhere($table, $one, $operator, $two){
		 Illuminate\Database\Query\Builder::leftJoinWhere($table, $one, $operator, $two);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whereRaw($sql, $bindings = array(), $boolean = 'and'){
		 Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orWhereRaw($sql, $bindings = array()){
		 Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whereBetween($column, $values, $boolean = 'and', $not = false){
		 Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orWhereBetween($column, $values, $not = false){
		 Illuminate\Database\Query\Builder::orWhereBetween($column, $values, $not);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whereNotBetween($column, $values, $boolean = 'and'){
		 Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orWhereNotBetween($column, $values){
		 Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whereNested($callback, $boolean = 'and'){
		 Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function addNestedWhereQuery($query, $boolean = 'and'){
		 Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whereExists($callback, $boolean = 'and', $not = false){
		 Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orWhereExists($callback, $not = false){
		 Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whereNotExists($callback, $boolean = 'and'){
		 Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orWhereNotExists($callback){
		 Illuminate\Database\Query\Builder::orWhereNotExists($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whereIn($column, $values, $boolean = 'and', $not = false){
		 Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orWhereIn($column, $values){
		 Illuminate\Database\Query\Builder::orWhereIn($column, $values);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whereNotIn($column, $values, $boolean = 'and'){
		 Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orWhereNotIn($column, $values){
		 Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whereNull($column, $boolean = 'and', $not = false){
		 Illuminate\Database\Query\Builder::whereNull($column, $boolean, $not);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orWhereNull($column){
		 Illuminate\Database\Query\Builder::orWhereNull($column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whereNotNull($column, $boolean = 'and'){
		 Illuminate\Database\Query\Builder::whereNotNull($column, $boolean);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orWhereNotNull($column){
		 Illuminate\Database\Query\Builder::orWhereNotNull($column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function dynamicWhere($method, $parameters){
		 Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function groupBy(){
		 Illuminate\Database\Query\Builder::groupBy();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function having($column, $operator = null, $value = null){
		 Illuminate\Database\Query\Builder::having($column, $operator, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function havingRaw($sql, $bindings = array(), $boolean = 'and'){
		 Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orHavingRaw($sql, $bindings = array()){
		 Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orderBy($column, $direction = 'asc'){
		 Illuminate\Database\Query\Builder::orderBy($column, $direction);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function latest($column = 'created_at'){
		 Illuminate\Database\Query\Builder::latest($column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function oldest($column = 'created_at'){
		 Illuminate\Database\Query\Builder::oldest($column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function orderByRaw($sql, $bindings = array()){
		 Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function offset($value){
		 Illuminate\Database\Query\Builder::offset($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function skip($value){
		 Illuminate\Database\Query\Builder::skip($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function limit($value){
		 Illuminate\Database\Query\Builder::limit($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function take($value){
		 Illuminate\Database\Query\Builder::take($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function forPage($page, $perPage = 15){
		 Illuminate\Database\Query\Builder::forPage($page, $perPage);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function union($query, $all = false){
		 Illuminate\Database\Query\Builder::union($query, $all);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function unionAll($query){
		 Illuminate\Database\Query\Builder::unionAll($query);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function lock($value = true){
		 Illuminate\Database\Query\Builder::lock($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function lockForUpdate(){
		 Illuminate\Database\Query\Builder::lockForUpdate();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function sharedLock(){
		 Illuminate\Database\Query\Builder::sharedLock();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function toSql(){
		 Illuminate\Database\Query\Builder::toSql();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function remember($minutes, $key = null){
		 Illuminate\Database\Query\Builder::remember($minutes, $key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function rememberForever($key = null){
		 Illuminate\Database\Query\Builder::rememberForever($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function cacheTags($cacheTags){
		 Illuminate\Database\Query\Builder::cacheTags($cacheTags);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function cacheDriver($cacheDriver){
		 Illuminate\Database\Query\Builder::cacheDriver($cacheDriver);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getFresh($columns = array()){
		 Illuminate\Database\Query\Builder::getFresh($columns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getCached($columns = array()){
		 Illuminate\Database\Query\Builder::getCached($columns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getCacheKey(){
		 Illuminate\Database\Query\Builder::getCacheKey();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function generateCacheKey(){
		 Illuminate\Database\Query\Builder::generateCacheKey();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function implode($column, $glue = null){
		 Illuminate\Database\Query\Builder::implode($column, $glue);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function buildRawPaginator($paginator, $results, $perPage){
		 Illuminate\Database\Query\Builder::buildRawPaginator($paginator, $results, $perPage);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPaginationCount(){
		 Illuminate\Database\Query\Builder::getPaginationCount();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function exists(){
		 Illuminate\Database\Query\Builder::exists();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function count($column = '*'){
		 Illuminate\Database\Query\Builder::count($column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function min($column){
		 Illuminate\Database\Query\Builder::min($column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function max($column){
		 Illuminate\Database\Query\Builder::max($column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function sum($column){
		 Illuminate\Database\Query\Builder::sum($column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function avg($column){
		 Illuminate\Database\Query\Builder::avg($column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function aggregate($function, $columns = array()){
		 Illuminate\Database\Query\Builder::aggregate($function, $columns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function insert($values){
		 Illuminate\Database\Query\Builder::insert($values);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function insertGetId($values, $sequence = null){
		 Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function truncate(){
		 Illuminate\Database\Query\Builder::truncate();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function mergeWheres($wheres, $bindings){
		 Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function raw($value){
		 Illuminate\Database\Query\Builder::raw($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getBindings(){
		 Illuminate\Database\Query\Builder::getBindings();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setBindings($bindings){
		 Illuminate\Database\Query\Builder::setBindings($bindings);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function addBinding($value){
		 Illuminate\Database\Query\Builder::addBinding($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function mergeBindings($query){
		 Illuminate\Database\Query\Builder::mergeBindings($query);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getProcessor(){
		 Illuminate\Database\Query\Builder::getProcessor();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getGrammar(){
		 Illuminate\Database\Query\Builder::getGrammar();
	 }

}

class Event extends Illuminate\Support\Facades\Event{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($container = null){
		 Illuminate\Events\Dispatcher::__construct($container);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function listen($events, $listener, $priority = 0){
		 Illuminate\Events\Dispatcher::listen($events, $listener, $priority);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasListeners($eventName){
		 Illuminate\Events\Dispatcher::hasListeners($eventName);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function queue($event, $payload = array()){
		 Illuminate\Events\Dispatcher::queue($event, $payload);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function subscribe($subscriber){
		 Illuminate\Events\Dispatcher::subscribe($subscriber);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function until($event, $payload = array()){
		 Illuminate\Events\Dispatcher::until($event, $payload);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flush($event){
		 Illuminate\Events\Dispatcher::flush($event);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function firing(){
		 Illuminate\Events\Dispatcher::firing();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function fire($event, $payload = array(), $halt = false){
		 Illuminate\Events\Dispatcher::fire($event, $payload, $halt);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getListeners($eventName){
		 Illuminate\Events\Dispatcher::getListeners($eventName);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function makeListener($listener){
		 Illuminate\Events\Dispatcher::makeListener($listener);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function createClassListener($listener){
		 Illuminate\Events\Dispatcher::createClassListener($listener);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function forget($event){
		 Illuminate\Events\Dispatcher::forget($event);
	 }

}

class File extends Illuminate\Support\Facades\File{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function exists($path){
		 Illuminate\Filesystem\Filesystem::exists($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function get($path){
		 Illuminate\Filesystem\Filesystem::get($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRequire($path){
		 Illuminate\Filesystem\Filesystem::getRequire($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function requireOnce($file){
		 Illuminate\Filesystem\Filesystem::requireOnce($file);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function put($path, $contents){
		 Illuminate\Filesystem\Filesystem::put($path, $contents);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function prepend($path, $data){
		 Illuminate\Filesystem\Filesystem::prepend($path, $data);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function append($path, $data){
		 Illuminate\Filesystem\Filesystem::append($path, $data);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function delete($paths){
		 Illuminate\Filesystem\Filesystem::delete($paths);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function move($path, $target){
		 Illuminate\Filesystem\Filesystem::move($path, $target);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function copy($path, $target){
		 Illuminate\Filesystem\Filesystem::copy($path, $target);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function extension($path){
		 Illuminate\Filesystem\Filesystem::extension($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function type($path){
		 Illuminate\Filesystem\Filesystem::type($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function size($path){
		 Illuminate\Filesystem\Filesystem::size($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function lastModified($path){
		 Illuminate\Filesystem\Filesystem::lastModified($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isDirectory($directory){
		 Illuminate\Filesystem\Filesystem::isDirectory($directory);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isWritable($path){
		 Illuminate\Filesystem\Filesystem::isWritable($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isFile($file){
		 Illuminate\Filesystem\Filesystem::isFile($file);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function glob($pattern, $flags = 0){
		 Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function files($directory){
		 Illuminate\Filesystem\Filesystem::files($directory);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function allFiles($directory){
		 Illuminate\Filesystem\Filesystem::allFiles($directory);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function directories($directory){
		 Illuminate\Filesystem\Filesystem::directories($directory);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false){
		 Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function copyDirectory($directory, $destination, $options = null){
		 Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function deleteDirectory($directory, $preserve = false){
		 Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function cleanDirectory($directory){
		 Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
	 }

}

class Form extends Illuminate\Support\Facades\Form{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($html, $url, $csrfToken){
		 Illuminate\Html\FormBuilder::__construct($html, $url, $csrfToken);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function open($options = array()){
		 Illuminate\Html\FormBuilder::open($options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function model($model, $options = array()){
		 Illuminate\Html\FormBuilder::model($model, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setModel($model){
		 Illuminate\Html\FormBuilder::setModel($model);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function close(){
		 Illuminate\Html\FormBuilder::close();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function token(){
		 Illuminate\Html\FormBuilder::token();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function label($name, $value = null, $options = array()){
		 Illuminate\Html\FormBuilder::label($name, $value, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function input($type, $name, $value = null, $options = array()){
		 Illuminate\Html\FormBuilder::input($type, $name, $value, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function text($name, $value = null, $options = array()){
		 Illuminate\Html\FormBuilder::text($name, $value, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function password($name, $options = array()){
		 Illuminate\Html\FormBuilder::password($name, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hidden($name, $value = null, $options = array()){
		 Illuminate\Html\FormBuilder::hidden($name, $value, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function email($name, $value = null, $options = array()){
		 Illuminate\Html\FormBuilder::email($name, $value, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function url($name, $value = null, $options = array()){
		 Illuminate\Html\FormBuilder::url($name, $value, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function file($name, $options = array()){
		 Illuminate\Html\FormBuilder::file($name, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function textarea($name, $value = null, $options = array()){
		 Illuminate\Html\FormBuilder::textarea($name, $value, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function select($name, $list = array(), $selected = null, $options = array()){
		 Illuminate\Html\FormBuilder::select($name, $list, $selected, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function selectRange($name, $begin, $end, $selected = null, $options = array()){
		 Illuminate\Html\FormBuilder::selectRange($name, $begin, $end, $selected, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function selectYear(){
		 Illuminate\Html\FormBuilder::selectYear();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function selectMonth($name, $selected = null, $options = array()){
		 Illuminate\Html\FormBuilder::selectMonth($name, $selected, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSelectOption($display, $value, $selected){
		 Illuminate\Html\FormBuilder::getSelectOption($display, $value, $selected);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function checkbox($name, $value = 1, $checked = null, $options = array()){
		 Illuminate\Html\FormBuilder::checkbox($name, $value, $checked, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function radio($name, $value = null, $checked = null, $options = array()){
		 Illuminate\Html\FormBuilder::radio($name, $value, $checked, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function reset($value, $attributes = array()){
		 Illuminate\Html\FormBuilder::reset($value, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function image($url, $name = null, $attributes = array()){
		 Illuminate\Html\FormBuilder::image($url, $name, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function submit($value = null, $options = array()){
		 Illuminate\Html\FormBuilder::submit($value, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function button($value = null, $options = array()){
		 Illuminate\Html\FormBuilder::button($value, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getIdAttribute($name, $attributes){
		 Illuminate\Html\FormBuilder::getIdAttribute($name, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getValueAttribute($name, $value = null){
		 Illuminate\Html\FormBuilder::getValueAttribute($name, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function old($name){
		 Illuminate\Html\FormBuilder::old($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function oldInputIsEmpty(){
		 Illuminate\Html\FormBuilder::oldInputIsEmpty();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSessionStore(){
		 Illuminate\Html\FormBuilder::getSessionStore();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setSessionStore($session){
		 Illuminate\Html\FormBuilder::setSessionStore($session);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function macro($name, $macro){
		 Illuminate\Html\FormBuilder::macro($name, $macro);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasMacro($name){
		 Illuminate\Html\FormBuilder::hasMacro($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __callStatic($method, $parameters){
		 Illuminate\Html\FormBuilder::__callStatic($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __call($method, $parameters){
		 Illuminate\Html\FormBuilder::__call($method, $parameters);
	 }

}

class Hash extends Illuminate\Support\Facades\Hash{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function make($value, $options = array()){
		 Illuminate\Hashing\BcryptHasher::make($value, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function check($value, $hashedValue, $options = array()){
		 Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function needsRehash($hashedValue, $options = array()){
		 Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
	 }

}

class HTML extends Illuminate\Support\Facades\HTML{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($url = null){
		 Illuminate\Html\HtmlBuilder::__construct($url);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function entities($value){
		 Illuminate\Html\HtmlBuilder::entities($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function decode($value){
		 Illuminate\Html\HtmlBuilder::decode($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function script($url, $attributes = array()){
		 Illuminate\Html\HtmlBuilder::script($url, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function style($url, $attributes = array()){
		 Illuminate\Html\HtmlBuilder::style($url, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function image($url, $alt = null, $attributes = array()){
		 Illuminate\Html\HtmlBuilder::image($url, $alt, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function link($url, $title = null, $attributes = array(), $secure = null){
		 Illuminate\Html\HtmlBuilder::link($url, $title, $attributes, $secure);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function secureLink($url, $title = null, $attributes = array()){
		 Illuminate\Html\HtmlBuilder::secureLink($url, $title, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function linkAsset($url, $title = null, $attributes = array(), $secure = null){
		 Illuminate\Html\HtmlBuilder::linkAsset($url, $title, $attributes, $secure);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function linkSecureAsset($url, $title = null, $attributes = array()){
		 Illuminate\Html\HtmlBuilder::linkSecureAsset($url, $title, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function linkRoute($name, $title = null, $parameters = array(), $attributes = array()){
		 Illuminate\Html\HtmlBuilder::linkRoute($name, $title, $parameters, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function linkAction($action, $title = null, $parameters = array(), $attributes = array()){
		 Illuminate\Html\HtmlBuilder::linkAction($action, $title, $parameters, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function mailto($email, $title = null, $attributes = array()){
		 Illuminate\Html\HtmlBuilder::mailto($email, $title, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function email($email){
		 Illuminate\Html\HtmlBuilder::email($email);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function ol($list, $attributes = array()){
		 Illuminate\Html\HtmlBuilder::ol($list, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function ul($list, $attributes = array()){
		 Illuminate\Html\HtmlBuilder::ul($list, $attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function attributes($attributes){
		 Illuminate\Html\HtmlBuilder::attributes($attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function obfuscate($value){
		 Illuminate\Html\HtmlBuilder::obfuscate($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function macro($name, $macro){
		 Illuminate\Html\HtmlBuilder::macro($name, $macro);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasMacro($name){
		 Illuminate\Html\HtmlBuilder::hasMacro($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __callStatic($method, $parameters){
		 Illuminate\Html\HtmlBuilder::__callStatic($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __call($method, $parameters){
		 Illuminate\Html\HtmlBuilder::__call($method, $parameters);
	 }

}

class Input extends Illuminate\Support\Facades\Input{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function instance(){
		 Illuminate\Http\Request::instance();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function method(){
		 Illuminate\Http\Request::method();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function root(){
		 Illuminate\Http\Request::root();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function url(){
		 Illuminate\Http\Request::url();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function fullUrl(){
		 Illuminate\Http\Request::fullUrl();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function path(){
		 Illuminate\Http\Request::path();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function decodedPath(){
		 Illuminate\Http\Request::decodedPath();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function segment($index, $default = null){
		 Illuminate\Http\Request::segment($index, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function segments(){
		 Illuminate\Http\Request::segments();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function is(){
		 Illuminate\Http\Request::is();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function ajax(){
		 Illuminate\Http\Request::ajax();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function secure(){
		 Illuminate\Http\Request::secure();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function has($key){
		 Illuminate\Http\Request::has($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function all(){
		 Illuminate\Http\Request::all();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function input($key = null, $default = null){
		 Illuminate\Http\Request::input($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function only($keys){
		 Illuminate\Http\Request::only($keys);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function except($keys){
		 Illuminate\Http\Request::except($keys);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function query($key = null, $default = null){
		 Illuminate\Http\Request::query($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasCookie($key){
		 Illuminate\Http\Request::hasCookie($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function cookie($key = null, $default = null){
		 Illuminate\Http\Request::cookie($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function file($key = null, $default = null){
		 Illuminate\Http\Request::file($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasFile($key){
		 Illuminate\Http\Request::hasFile($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function header($key = null, $default = null){
		 Illuminate\Http\Request::header($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function server($key = null, $default = null){
		 Illuminate\Http\Request::server($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function old($key = null, $default = null){
		 Illuminate\Http\Request::old($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flash($filter = null, $keys = array()){
		 Illuminate\Http\Request::flash($filter, $keys);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flashOnly($keys){
		 Illuminate\Http\Request::flashOnly($keys);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flashExcept($keys){
		 Illuminate\Http\Request::flashExcept($keys);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flush(){
		 Illuminate\Http\Request::flush();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function merge($input){
		 Illuminate\Http\Request::merge($input);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function replace($input){
		 Illuminate\Http\Request::replace($input);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function json($key = null, $default = null){
		 Illuminate\Http\Request::json($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isJson(){
		 Illuminate\Http\Request::isJson();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function wantsJson(){
		 Illuminate\Http\Request::wantsJson();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function format($default = 'html'){
		 Illuminate\Http\Request::format($default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function createFromBase($request){
		 Illuminate\Http\Request::createFromBase($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function session(){
		 Illuminate\Http\Request::session();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function createFromGlobals(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::createFromGlobals();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setFactory($callable){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setFactory($callable);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __toString(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::__toString();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function overrideGlobals(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::overrideGlobals();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setTrustedProxies($proxies){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedProxies($proxies);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTrustedProxies(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getTrustedProxies();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setTrustedHosts($hostPatterns){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHosts($hostPatterns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTrustedHosts(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getTrustedHosts();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setTrustedHeaderName($key, $value){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHeaderName($key, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTrustedHeaderName($key){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getTrustedHeaderName($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function normalizeQueryString($qs){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::normalizeQueryString($qs);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function enableHttpMethodParameterOverride(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::enableHttpMethodParameterOverride();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getHttpMethodParameterOverride(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getHttpMethodParameterOverride();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function get($key, $default = null, $deep = false){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::get($key, $default, $deep);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getSession();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasPreviousSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::hasPreviousSession();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::hasSession();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setSession($session){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setSession($session);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getClientIps(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getClientIps();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getClientIp(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getClientIp();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getScriptName(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getScriptName();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPathInfo(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getPathInfo();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getBasePath(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getBasePath();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getBaseUrl(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getBaseUrl();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getScheme(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getScheme();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPort(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getPort();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getUser(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getUser();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPassword(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getPassword();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getUserInfo(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getUserInfo();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getHttpHost(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getHttpHost();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRequestUri(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getRequestUri();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSchemeAndHttpHost(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getSchemeAndHttpHost();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getUri(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getUri();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getUriForPath($path){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getUriForPath($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getQueryString(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getQueryString();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isSecure(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::isSecure();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getHost(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getHost();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setMethod($method){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setMethod($method);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getMethod(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getMethod();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRealMethod(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getRealMethod();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getMimeType($format){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getMimeType($format);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getFormat($mimeType){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getFormat($mimeType);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setFormat($format, $mimeTypes){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setFormat($format, $mimeTypes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRequestFormat($default = 'html'){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getRequestFormat($default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setRequestFormat($format){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setRequestFormat($format);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getContentType(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getContentType();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDefaultLocale($locale){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setDefaultLocale($locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setLocale($locale){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setLocale($locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLocale(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getLocale();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isMethod($method){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::isMethod($method);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isMethodSafe(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::isMethodSafe();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getContent($asResource = false){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getContent($asResource);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getETags(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getETags();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isNoCache(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::isNoCache();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPreferredLanguage($locales = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getPreferredLanguage($locales);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLanguages(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getLanguages();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getCharsets(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getCharsets();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getEncodings(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getEncodings();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getAcceptableContentTypes(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getAcceptableContentTypes();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isXmlHttpRequest(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::isXmlHttpRequest();
	 }

}

class Lang extends Illuminate\Support\Facades\Lang{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($loader, $locale){
		 Illuminate\Translation\Translator::__construct($loader, $locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function has($key, $locale = null){
		 Illuminate\Translation\Translator::has($key, $locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function get($key, $replace = array(), $locale = null){
		 Illuminate\Translation\Translator::get($key, $replace, $locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function choice($key, $number, $replace = array(), $locale = null){
		 Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function trans($id, $parameters = array(), $domain = 'messages', $locale = null){
		 Illuminate\Translation\Translator::trans($id, $parameters, $domain, $locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function transChoice($id, $number, $parameters = array(), $domain = 'messages', $locale = null){
		 Illuminate\Translation\Translator::transChoice($id, $number, $parameters, $domain, $locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function load($namespace, $group, $locale){
		 Illuminate\Translation\Translator::load($namespace, $group, $locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function addNamespace($namespace, $hint){
		 Illuminate\Translation\Translator::addNamespace($namespace, $hint);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function parseKey($key){
		 Illuminate\Translation\Translator::parseKey($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSelector(){
		 Illuminate\Translation\Translator::getSelector();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setSelector($selector){
		 Illuminate\Translation\Translator::setSelector($selector);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLoader(){
		 Illuminate\Translation\Translator::getLoader();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function locale(){
		 Illuminate\Translation\Translator::locale();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLocale(){
		 Illuminate\Translation\Translator::getLocale();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setLocale($locale){
		 Illuminate\Translation\Translator::setLocale($locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getFallback(){
		 Illuminate\Translation\Translator::getFallback();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setFallback($fallback){
		 Illuminate\Translation\Translator::setFallback($fallback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setParsedKey($key, $parsed){
		//Method inherited from Illuminate\Support\NamespacedItemResolver
		 Illuminate\Translation\Translator::setParsedKey($key, $parsed);
	 }

}

class Log extends Illuminate\Support\Facades\Log{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($monolog, $dispatcher = null){
		 Illuminate\Log\Writer::__construct($monolog, $dispatcher);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function useFiles($path, $level = 'debug'){
		 Illuminate\Log\Writer::useFiles($path, $level);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function useDailyFiles($path, $days = 0, $level = 'debug'){
		 Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function listen($callback){
		 Illuminate\Log\Writer::listen($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getMonolog(){
		 Illuminate\Log\Writer::getMonolog();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getEventDispatcher(){
		 Illuminate\Log\Writer::getEventDispatcher();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setEventDispatcher($dispatcher){
		 Illuminate\Log\Writer::setEventDispatcher($dispatcher);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function write(){
		 Illuminate\Log\Writer::write();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __call($method, $parameters){
		 Illuminate\Log\Writer::__call($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function debug($message, $context = array()){
		 Monolog\Logger::addDebug($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function info($message, $context = array()){
		 Monolog\Logger::addInfo($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function notice($message, $context = array()){
		 Monolog\Logger::addNotice($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function warning($message, $context = array()){
		 Monolog\Logger::addWarning($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function error($message, $context = array()){
		 Monolog\Logger::addError($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function critical($message, $context = array()){
		 Monolog\Logger::addCritical($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function alert($message, $context = array()){
		 Monolog\Logger::addAlert($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function emergency($message, $context = array()){
		 Monolog\Logger::addEmergency($message, $context);
	 }

}

class Mail extends Illuminate\Support\Facades\Mail{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($views, $swift){
		 Illuminate\Mail\Mailer::__construct($views, $swift);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function alwaysFrom($address, $name = null){
		 Illuminate\Mail\Mailer::alwaysFrom($address, $name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function plain($view, $data, $callback){
		 Illuminate\Mail\Mailer::plain($view, $data, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function send($view, $data, $callback){
		 Illuminate\Mail\Mailer::send($view, $data, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function queue($view, $data, $callback, $queue = null){
		 Illuminate\Mail\Mailer::queue($view, $data, $callback, $queue);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function queueOn($queue, $view, $data, $callback){
		 Illuminate\Mail\Mailer::queueOn($queue, $view, $data, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function later($delay, $view, $data, $callback, $queue = null){
		 Illuminate\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function laterOn($queue, $delay, $view, $data, $callback){
		 Illuminate\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function handleQueuedMessage($job, $data){
		 Illuminate\Mail\Mailer::handleQueuedMessage($job, $data);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function pretend($value = true){
		 Illuminate\Mail\Mailer::pretend($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getViewFactory(){
		 Illuminate\Mail\Mailer::getViewFactory();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSwiftMailer(){
		 Illuminate\Mail\Mailer::getSwiftMailer();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function failures(){
		 Illuminate\Mail\Mailer::failures();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setSwiftMailer($swift){
		 Illuminate\Mail\Mailer::setSwiftMailer($swift);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setLogger($logger){
		 Illuminate\Mail\Mailer::setLogger($logger);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setQueue($queue){
		 Illuminate\Mail\Mailer::setQueue($queue);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setContainer($container){
		 Illuminate\Mail\Mailer::setContainer($container);
	 }

}

class Paginator extends Illuminate\Support\Facades\Paginator{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($request, $view, $trans, $pageName = 'page'){
		 Illuminate\Pagination\Factory::__construct($request, $view, $trans, $pageName);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function make($items, $total, $perPage){
		 Illuminate\Pagination\Factory::make($items, $total, $perPage);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPaginationView($paginator, $view = null){
		 Illuminate\Pagination\Factory::getPaginationView($paginator, $view);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getCurrentPage(){
		 Illuminate\Pagination\Factory::getCurrentPage();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setCurrentPage($number){
		 Illuminate\Pagination\Factory::setCurrentPage($number);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getCurrentUrl(){
		 Illuminate\Pagination\Factory::getCurrentUrl();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setBaseUrl($baseUrl){
		 Illuminate\Pagination\Factory::setBaseUrl($baseUrl);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setPageName($pageName){
		 Illuminate\Pagination\Factory::setPageName($pageName);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPageName(){
		 Illuminate\Pagination\Factory::getPageName();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getViewName($view = null){
		 Illuminate\Pagination\Factory::getViewName($view);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setViewName($viewName){
		 Illuminate\Pagination\Factory::setViewName($viewName);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLocale(){
		 Illuminate\Pagination\Factory::getLocale();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setLocale($locale){
		 Illuminate\Pagination\Factory::setLocale($locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRequest(){
		 Illuminate\Pagination\Factory::getRequest();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setRequest($request){
		 Illuminate\Pagination\Factory::setRequest($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getViewFactory(){
		 Illuminate\Pagination\Factory::getViewFactory();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setViewFactory($view){
		 Illuminate\Pagination\Factory::setViewFactory($view);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTranslator(){
		 Illuminate\Pagination\Factory::getTranslator();
	 }

}

class Password extends Illuminate\Support\Facades\Password{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($reminders, $users, $mailer, $reminderView){
		 Illuminate\Auth\Reminders\PasswordBroker::__construct($reminders, $users, $mailer, $reminderView);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function remind($credentials, $callback = null){
		 Illuminate\Auth\Reminders\PasswordBroker::remind($credentials, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function sendReminder($user, $token, $callback = null){
		 Illuminate\Auth\Reminders\PasswordBroker::sendReminder($user, $token, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function reset($credentials, $callback){
		 Illuminate\Auth\Reminders\PasswordBroker::reset($credentials, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function validator($callback){
		 Illuminate\Auth\Reminders\PasswordBroker::validator($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getUser($credentials){
		 Illuminate\Auth\Reminders\PasswordBroker::getUser($credentials);
	 }

}

class Queue extends Illuminate\Support\Facades\Queue{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($app){
		 Illuminate\Queue\QueueManager::__construct($app);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function failing($callback){
		 Illuminate\Queue\QueueManager::failing($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function connected($name = null){
		 Illuminate\Queue\QueueManager::connected($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function connection($name = null){
		 Illuminate\Queue\QueueManager::connection($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function extend($driver, $resolver){
		 Illuminate\Queue\QueueManager::extend($driver, $resolver);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function addConnector($driver, $resolver){
		 Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDefaultDriver(){
		 Illuminate\Queue\QueueManager::getDefaultDriver();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDefaultDriver($name){
		 Illuminate\Queue\QueueManager::setDefaultDriver($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getName($connection = null){
		 Illuminate\Queue\QueueManager::getName($connection);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __call($method, $parameters){
		 Illuminate\Queue\QueueManager::__call($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function push($job, $data = '', $queue = null){
		 Illuminate\Queue\SyncQueue::push($job, $data, $queue);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function pushRaw($payload, $queue = null, $options = array()){
		 Illuminate\Queue\SyncQueue::pushRaw($payload, $queue, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function later($delay, $job, $data = '', $queue = null){
		 Illuminate\Queue\SyncQueue::later($delay, $job, $data, $queue);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function pop($queue = null){
		 Illuminate\Queue\SyncQueue::pop($queue);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function marshal(){
		//Method inherited from Illuminate\Queue\Queue
		 Illuminate\Queue\SyncQueue::marshal();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function bulk($jobs, $data = '', $queue = null){
		//Method inherited from Illuminate\Queue\Queue
		 Illuminate\Queue\SyncQueue::bulk($jobs, $data, $queue);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTime(){
		//Method inherited from Illuminate\Queue\Queue
		 Illuminate\Queue\SyncQueue::getTime();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setContainer($container){
		//Method inherited from Illuminate\Queue\Queue
		 Illuminate\Queue\SyncQueue::setContainer($container);
	 }

}

class Redirect extends Illuminate\Support\Facades\Redirect{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($generator){
		 Illuminate\Routing\Redirector::__construct($generator);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function home($status = 302){
		 Illuminate\Routing\Redirector::home($status);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function back($status = 302, $headers = array()){
		 Illuminate\Routing\Redirector::back($status, $headers);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function refresh($status = 302, $headers = array()){
		 Illuminate\Routing\Redirector::refresh($status, $headers);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function guest($path, $status = 302, $headers = array(), $secure = null){
		 Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function intended($default = '/', $status = 302, $headers = array(), $secure = null){
		 Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function to($path, $status = 302, $headers = array(), $secure = null){
		 Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function away($path, $status = 302, $headers = array()){
		 Illuminate\Routing\Redirector::away($path, $status, $headers);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function secure($path, $status = 302, $headers = array()){
		 Illuminate\Routing\Redirector::secure($path, $status, $headers);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function route($route, $parameters = array(), $status = 302, $headers = array()){
		 Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function action($action, $parameters = array(), $status = 302, $headers = array()){
		 Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getUrlGenerator(){
		 Illuminate\Routing\Redirector::getUrlGenerator();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setSession($session){
		 Illuminate\Routing\Redirector::setSession($session);
	 }

}

class Redis extends Illuminate\Support\Facades\Redis{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($servers = array()){
		 Illuminate\Redis\Database::__construct($servers);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function connection($name = 'default'){
		 Illuminate\Redis\Database::connection($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function command($method, $parameters = array()){
		 Illuminate\Redis\Database::command($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __call($method, $parameters){
		 Illuminate\Redis\Database::__call($method, $parameters);
	 }

}

class Request extends Illuminate\Support\Facades\Request{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function instance(){
		 Illuminate\Http\Request::instance();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function method(){
		 Illuminate\Http\Request::method();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function root(){
		 Illuminate\Http\Request::root();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function url(){
		 Illuminate\Http\Request::url();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function fullUrl(){
		 Illuminate\Http\Request::fullUrl();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function path(){
		 Illuminate\Http\Request::path();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function decodedPath(){
		 Illuminate\Http\Request::decodedPath();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function segment($index, $default = null){
		 Illuminate\Http\Request::segment($index, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function segments(){
		 Illuminate\Http\Request::segments();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function is(){
		 Illuminate\Http\Request::is();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function ajax(){
		 Illuminate\Http\Request::ajax();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function secure(){
		 Illuminate\Http\Request::secure();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function has($key){
		 Illuminate\Http\Request::has($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function all(){
		 Illuminate\Http\Request::all();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function input($key = null, $default = null){
		 Illuminate\Http\Request::input($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function only($keys){
		 Illuminate\Http\Request::only($keys);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function except($keys){
		 Illuminate\Http\Request::except($keys);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function query($key = null, $default = null){
		 Illuminate\Http\Request::query($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasCookie($key){
		 Illuminate\Http\Request::hasCookie($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function cookie($key = null, $default = null){
		 Illuminate\Http\Request::cookie($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function file($key = null, $default = null){
		 Illuminate\Http\Request::file($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasFile($key){
		 Illuminate\Http\Request::hasFile($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function header($key = null, $default = null){
		 Illuminate\Http\Request::header($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function server($key = null, $default = null){
		 Illuminate\Http\Request::server($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function old($key = null, $default = null){
		 Illuminate\Http\Request::old($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flash($filter = null, $keys = array()){
		 Illuminate\Http\Request::flash($filter, $keys);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flashOnly($keys){
		 Illuminate\Http\Request::flashOnly($keys);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flashExcept($keys){
		 Illuminate\Http\Request::flashExcept($keys);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flush(){
		 Illuminate\Http\Request::flush();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function merge($input){
		 Illuminate\Http\Request::merge($input);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function replace($input){
		 Illuminate\Http\Request::replace($input);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function json($key = null, $default = null){
		 Illuminate\Http\Request::json($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isJson(){
		 Illuminate\Http\Request::isJson();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function wantsJson(){
		 Illuminate\Http\Request::wantsJson();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function format($default = 'html'){
		 Illuminate\Http\Request::format($default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function createFromBase($request){
		 Illuminate\Http\Request::createFromBase($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function session(){
		 Illuminate\Http\Request::session();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function createFromGlobals(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::createFromGlobals();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setFactory($callable){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setFactory($callable);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __toString(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::__toString();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function overrideGlobals(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::overrideGlobals();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setTrustedProxies($proxies){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedProxies($proxies);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTrustedProxies(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getTrustedProxies();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setTrustedHosts($hostPatterns){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHosts($hostPatterns);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTrustedHosts(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getTrustedHosts();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setTrustedHeaderName($key, $value){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setTrustedHeaderName($key, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTrustedHeaderName($key){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getTrustedHeaderName($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function normalizeQueryString($qs){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::normalizeQueryString($qs);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function enableHttpMethodParameterOverride(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::enableHttpMethodParameterOverride();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getHttpMethodParameterOverride(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getHttpMethodParameterOverride();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function get($key, $default = null, $deep = false){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::get($key, $default, $deep);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getSession();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasPreviousSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::hasPreviousSession();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasSession(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::hasSession();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setSession($session){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setSession($session);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getClientIps(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getClientIps();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getClientIp(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getClientIp();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getScriptName(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getScriptName();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPathInfo(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getPathInfo();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getBasePath(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getBasePath();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getBaseUrl(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getBaseUrl();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getScheme(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getScheme();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPort(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getPort();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getUser(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getUser();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPassword(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getPassword();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getUserInfo(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getUserInfo();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getHttpHost(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getHttpHost();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRequestUri(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getRequestUri();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSchemeAndHttpHost(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getSchemeAndHttpHost();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getUri(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getUri();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getUriForPath($path){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getUriForPath($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getQueryString(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getQueryString();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isSecure(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::isSecure();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getHost(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getHost();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setMethod($method){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setMethod($method);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getMethod(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getMethod();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRealMethod(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getRealMethod();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getMimeType($format){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getMimeType($format);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getFormat($mimeType){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getFormat($mimeType);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setFormat($format, $mimeTypes){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setFormat($format, $mimeTypes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRequestFormat($default = 'html'){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getRequestFormat($default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setRequestFormat($format){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setRequestFormat($format);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getContentType(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getContentType();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDefaultLocale($locale){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setDefaultLocale($locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setLocale($locale){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::setLocale($locale);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLocale(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getLocale();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isMethod($method){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::isMethod($method);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isMethodSafe(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::isMethodSafe();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getContent($asResource = false){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getContent($asResource);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getETags(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getETags();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isNoCache(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::isNoCache();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPreferredLanguage($locales = null){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getPreferredLanguage($locales);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLanguages(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getLanguages();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getCharsets(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getCharsets();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getEncodings(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getEncodings();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getAcceptableContentTypes(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::getAcceptableContentTypes();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isXmlHttpRequest(){
		//Method inherited from Symfony\Component\HttpFoundation\Request
		 Illuminate\Http\Request::isXmlHttpRequest();
	 }

}

class Response extends Illuminate\Support\Facades\Response{
}

class Route extends Illuminate\Support\Facades\Route{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($events, $container = null){
		 Illuminate\Routing\Router::__construct($events, $container);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function get($uri, $action){
		 Illuminate\Routing\Router::get($uri, $action);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function post($uri, $action){
		 Illuminate\Routing\Router::post($uri, $action);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function put($uri, $action){
		 Illuminate\Routing\Router::put($uri, $action);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function patch($uri, $action){
		 Illuminate\Routing\Router::patch($uri, $action);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function delete($uri, $action){
		 Illuminate\Routing\Router::delete($uri, $action);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function options($uri, $action){
		 Illuminate\Routing\Router::options($uri, $action);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function any($uri, $action){
		 Illuminate\Routing\Router::any($uri, $action);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function match($methods, $uri, $action){
		 Illuminate\Routing\Router::match($methods, $uri, $action);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function controllers($controllers){
		 Illuminate\Routing\Router::controllers($controllers);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function controller($uri, $controller, $names = array()){
		 Illuminate\Routing\Router::controller($uri, $controller, $names);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function resource($name, $controller, $options = array()){
		 Illuminate\Routing\Router::resource($name, $controller, $options);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getResourceUri($resource){
		 Illuminate\Routing\Router::getResourceUri($resource);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getResourceWildcard($value){
		 Illuminate\Routing\Router::getResourceWildcard($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function group($attributes, $callback){
		 Illuminate\Routing\Router::group($attributes, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function mergeWithLastGroup($new){
		 Illuminate\Routing\Router::mergeWithLastGroup($new);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function mergeGroup($new, $old){
		 Illuminate\Routing\Router::mergeGroup($new, $old);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function dispatch($request){
		 Illuminate\Routing\Router::dispatch($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function dispatchToRoute($request){
		 Illuminate\Routing\Router::dispatchToRoute($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function matched($callback){
		 Illuminate\Routing\Router::matched($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function before($callback){
		 Illuminate\Routing\Router::before($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function after($callback){
		 Illuminate\Routing\Router::after($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function filter($name, $callback){
		 Illuminate\Routing\Router::filter($name, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function when($pattern, $name, $methods = null){
		 Illuminate\Routing\Router::when($pattern, $name, $methods);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function whenRegex($pattern, $name, $methods = null){
		 Illuminate\Routing\Router::whenRegex($pattern, $name, $methods);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function model($key, $class, $callback = null){
		 Illuminate\Routing\Router::model($key, $class, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function bind($key, $binder){
		 Illuminate\Routing\Router::bind($key, $binder);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function pattern($key, $pattern){
		 Illuminate\Routing\Router::pattern($key, $pattern);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function callRouteBefore($route, $request){
		 Illuminate\Routing\Router::callRouteBefore($route, $request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function findPatternFilters($request){
		 Illuminate\Routing\Router::findPatternFilters($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function callRouteAfter($route, $request, $response){
		 Illuminate\Routing\Router::callRouteAfter($route, $request, $response);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function callRouteFilter($filter, $parameters, $route, $request, $response = null){
		 Illuminate\Routing\Router::callRouteFilter($filter, $parameters, $route, $request, $response);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function withoutFilters($callback){
		 Illuminate\Routing\Router::withoutFilters($callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function enableFilters(){
		 Illuminate\Routing\Router::enableFilters();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function disableFilters(){
		 Illuminate\Routing\Router::disableFilters();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function input($key, $default = null){
		 Illuminate\Routing\Router::input($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getCurrentRoute(){
		 Illuminate\Routing\Router::getCurrentRoute();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function current(){
		 Illuminate\Routing\Router::current();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function currentRouteName(){
		 Illuminate\Routing\Router::currentRouteName();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function currentRouteNamed($name){
		 Illuminate\Routing\Router::currentRouteNamed($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function currentRouteAction(){
		 Illuminate\Routing\Router::currentRouteAction();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function currentRouteUses($action){
		 Illuminate\Routing\Router::currentRouteUses($action);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getCurrentRequest(){
		 Illuminate\Routing\Router::getCurrentRequest();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRoutes(){
		 Illuminate\Routing\Router::getRoutes();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getControllerDispatcher(){
		 Illuminate\Routing\Router::getControllerDispatcher();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setControllerDispatcher($dispatcher){
		 Illuminate\Routing\Router::setControllerDispatcher($dispatcher);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getInspector(){
		 Illuminate\Routing\Router::getInspector();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function handle($request, $type = 1, $catch = true){
		 Illuminate\Routing\Router::handle($request, $type, $catch);
	 }

}

class Schema extends Illuminate\Support\Facades\Schema{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasTable($table){
		 Illuminate\Database\Schema\MySqlBuilder::hasTable($table);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($connection){
		//Method inherited from Illuminate\Database\Schema\Builder
		 Illuminate\Database\Schema\MySqlBuilder::__construct($connection);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasColumn($table, $column){
		//Method inherited from Illuminate\Database\Schema\Builder
		 Illuminate\Database\Schema\MySqlBuilder::hasColumn($table, $column);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function table($table, $callback){
		//Method inherited from Illuminate\Database\Schema\Builder
		 Illuminate\Database\Schema\MySqlBuilder::table($table, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function create($table, $callback){
		//Method inherited from Illuminate\Database\Schema\Builder
		 Illuminate\Database\Schema\MySqlBuilder::create($table, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function drop($table){
		//Method inherited from Illuminate\Database\Schema\Builder
		 Illuminate\Database\Schema\MySqlBuilder::drop($table);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function dropIfExists($table){
		//Method inherited from Illuminate\Database\Schema\Builder
		 Illuminate\Database\Schema\MySqlBuilder::dropIfExists($table);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function rename($from, $to){
		//Method inherited from Illuminate\Database\Schema\Builder
		 Illuminate\Database\Schema\MySqlBuilder::rename($from, $to);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getConnection(){
		//Method inherited from Illuminate\Database\Schema\Builder
		 Illuminate\Database\Schema\MySqlBuilder::getConnection();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setConnection($connection){
		//Method inherited from Illuminate\Database\Schema\Builder
		 Illuminate\Database\Schema\MySqlBuilder::setConnection($connection);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function blueprintResolver($resolver){
		//Method inherited from Illuminate\Database\Schema\Builder
		 Illuminate\Database\Schema\MySqlBuilder::blueprintResolver($resolver);
	 }

}

class Seeder extends Illuminate\Database\Seeder{
}

class Session extends Illuminate\Support\Facades\Session{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSessionConfig(){
		 Illuminate\Session\SessionManager::getSessionConfig();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDefaultDriver(){
		 Illuminate\Session\SessionManager::getDefaultDriver();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDefaultDriver($name){
		 Illuminate\Session\SessionManager::setDefaultDriver($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($app){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Session\SessionManager::__construct($app);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function driver($driver = null){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Session\SessionManager::driver($driver);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function extend($driver, $callback){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Session\SessionManager::extend($driver, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDrivers(){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Session\SessionManager::getDrivers();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __call($method, $parameters){
		//Method inherited from Illuminate\Support\Manager
		 Illuminate\Session\SessionManager::__call($method, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function start(){
		 Illuminate\Session\Store::start();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getId(){
		 Illuminate\Session\Store::getId();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setId($id){
		 Illuminate\Session\Store::setId($id);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getName(){
		 Illuminate\Session\Store::getName();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setName($name){
		 Illuminate\Session\Store::setName($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function invalidate($lifetime = null){
		 Illuminate\Session\Store::invalidate($lifetime);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function migrate($destroy = false, $lifetime = null){
		 Illuminate\Session\Store::migrate($destroy, $lifetime);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function regenerate($destroy = false){
		 Illuminate\Session\Store::regenerate($destroy);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function save(){
		 Illuminate\Session\Store::save();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function ageFlashData(){
		 Illuminate\Session\Store::ageFlashData();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function has($name){
		 Illuminate\Session\Store::has($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function get($name, $default = null){
		 Illuminate\Session\Store::get($name, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function hasOldInput($key = null){
		 Illuminate\Session\Store::hasOldInput($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getOldInput($key = null, $default = null){
		 Illuminate\Session\Store::getOldInput($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function set($name, $value){
		 Illuminate\Session\Store::set($name, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function put($key, $value){
		 Illuminate\Session\Store::put($key, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function push($key, $value){
		 Illuminate\Session\Store::push($key, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flash($key, $value){
		 Illuminate\Session\Store::flash($key, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flashInput($value){
		 Illuminate\Session\Store::flashInput($value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function reflash(){
		 Illuminate\Session\Store::reflash();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function keep($keys = null){
		 Illuminate\Session\Store::keep($keys);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function all(){
		 Illuminate\Session\Store::all();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function replace($attributes){
		 Illuminate\Session\Store::replace($attributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function remove($name){
		 Illuminate\Session\Store::remove($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function forget($key){
		 Illuminate\Session\Store::forget($key);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function clear(){
		 Illuminate\Session\Store::clear();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flush(){
		 Illuminate\Session\Store::flush();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isStarted(){
		 Illuminate\Session\Store::isStarted();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function registerBag($bag){
		 Illuminate\Session\Store::registerBag($bag);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getBag($name){
		 Illuminate\Session\Store::getBag($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getMetadataBag(){
		 Illuminate\Session\Store::getMetadataBag();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getBagData($name){
		 Illuminate\Session\Store::getBagData($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function token(){
		 Illuminate\Session\Store::token();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getToken(){
		 Illuminate\Session\Store::getToken();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getHandler(){
		 Illuminate\Session\Store::getHandler();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function handlerNeedsRequest(){
		 Illuminate\Session\Store::handlerNeedsRequest();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setRequestOnHandler($request){
		 Illuminate\Session\Store::setRequestOnHandler($request);
	 }

}

class SSH extends Illuminate\Support\Facades\SSH{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($app){
		 Illuminate\Remote\RemoteManager::__construct($app);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function into($name){
		 Illuminate\Remote\RemoteManager::into($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function connection($name = null){
		 Illuminate\Remote\RemoteManager::connection($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function group($name){
		 Illuminate\Remote\RemoteManager::group($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function multiple($names){
		 Illuminate\Remote\RemoteManager::multiple($names);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function resolve($name){
		 Illuminate\Remote\RemoteManager::resolve($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDefaultConnection(){
		 Illuminate\Remote\RemoteManager::getDefaultConnection();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDefaultConnection($name){
		 Illuminate\Remote\RemoteManager::setDefaultConnection($name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __call($method, $parameters){
		 Illuminate\Remote\RemoteManager::__call($method, $parameters);
	 }

}

class Str extends Illuminate\Support\Str{
}

class URL extends Illuminate\Support\Facades\URL{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($routes, $request){
		 Illuminate\Routing\UrlGenerator::__construct($routes, $request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function full(){
		 Illuminate\Routing\UrlGenerator::full();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function current(){
		 Illuminate\Routing\UrlGenerator::current();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function previous(){
		 Illuminate\Routing\UrlGenerator::previous();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function to($path, $extra = array(), $secure = null){
		 Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function secure($path, $parameters = array()){
		 Illuminate\Routing\UrlGenerator::secure($path, $parameters);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function asset($path, $secure = null){
		 Illuminate\Routing\UrlGenerator::asset($path, $secure);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function secureAsset($path){
		 Illuminate\Routing\UrlGenerator::secureAsset($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function route($name, $parameters = array(), $absolute = true, $route = null){
		 Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute, $route);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function action($action, $parameters = array(), $absolute = true){
		 Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function isValidUrl($path){
		 Illuminate\Routing\UrlGenerator::isValidUrl($path);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRequest(){
		 Illuminate\Routing\UrlGenerator::getRequest();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setRequest($request){
		 Illuminate\Routing\UrlGenerator::setRequest($request);
	 }

}

class Validator extends Illuminate\Support\Facades\Validator{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($translator, $container = null){
		 Illuminate\Validation\Factory::__construct($translator, $container);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function make($data, $rules, $messages = array(), $customAttributes = array()){
		 Illuminate\Validation\Factory::make($data, $rules, $messages, $customAttributes);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function extend($rule, $extension, $message = null){
		 Illuminate\Validation\Factory::extend($rule, $extension, $message);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function extendImplicit($rule, $extension, $message = null){
		 Illuminate\Validation\Factory::extendImplicit($rule, $extension, $message);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function replacer($rule, $replacer){
		 Illuminate\Validation\Factory::replacer($rule, $replacer);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function resolver($resolver){
		 Illuminate\Validation\Factory::resolver($resolver);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTranslator(){
		 Illuminate\Validation\Factory::getTranslator();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getPresenceVerifier(){
		 Illuminate\Validation\Factory::getPresenceVerifier();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setPresenceVerifier($presenceVerifier){
		 Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
	 }

}

class View extends Illuminate\Support\Facades\View{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct($engines, $finder, $events){
		 Illuminate\View\Factory::__construct($engines, $finder, $events);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function make($view, $data = array(), $mergeData = array()){
		 Illuminate\View\Factory::make($view, $data, $mergeData);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function of($view, $data = array()){
		 Illuminate\View\Factory::of($view, $data);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function name($view, $name){
		 Illuminate\View\Factory::name($view, $name);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function exists($view){
		 Illuminate\View\Factory::exists($view);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function renderEach($view, $data, $iterator, $empty = 'raw|'){
		 Illuminate\View\Factory::renderEach($view, $data, $iterator, $empty);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function share($key, $value = null){
		 Illuminate\View\Factory::share($key, $value);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function creator($views, $callback){
		 Illuminate\View\Factory::creator($views, $callback);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function composers($composers){
		 Illuminate\View\Factory::composers($composers);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function composer($views, $callback, $priority = null){
		 Illuminate\View\Factory::composer($views, $callback, $priority);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function callComposer($view){
		 Illuminate\View\Factory::callComposer($view);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function callCreator($view){
		 Illuminate\View\Factory::callCreator($view);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function startSection($section, $content = ''){
		 Illuminate\View\Factory::startSection($section, $content);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function inject($section, $content){
		 Illuminate\View\Factory::inject($section, $content);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function yieldSection(){
		 Illuminate\View\Factory::yieldSection();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function stopSection($overwrite = false){
		 Illuminate\View\Factory::stopSection($overwrite);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function appendSection(){
		 Illuminate\View\Factory::appendSection();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function yieldContent($section, $default = ''){
		 Illuminate\View\Factory::yieldContent($section, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flushSections(){
		 Illuminate\View\Factory::flushSections();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function flushSectionsIfDoneRendering(){
		 Illuminate\View\Factory::flushSectionsIfDoneRendering();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function incrementRender(){
		 Illuminate\View\Factory::incrementRender();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function decrementRender(){
		 Illuminate\View\Factory::decrementRender();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function doneRendering(){
		 Illuminate\View\Factory::doneRendering();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function addLocation($location){
		 Illuminate\View\Factory::addLocation($location);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function addNamespace($namespace, $hints){
		 Illuminate\View\Factory::addNamespace($namespace, $hints);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function prependNamespace($namespace, $hints){
		 Illuminate\View\Factory::prependNamespace($namespace, $hints);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function addExtension($extension, $engine, $resolver = null){
		 Illuminate\View\Factory::addExtension($extension, $engine, $resolver);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getExtensions(){
		 Illuminate\View\Factory::getExtensions();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getEngineResolver(){
		 Illuminate\View\Factory::getEngineResolver();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getFinder(){
		 Illuminate\View\Factory::getFinder();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setFinder($finder){
		 Illuminate\View\Factory::setFinder($finder);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDispatcher(){
		 Illuminate\View\Factory::getDispatcher();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setDispatcher($events){
		 Illuminate\View\Factory::setDispatcher($events);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getContainer(){
		 Illuminate\View\Factory::getContainer();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setContainer($container){
		 Illuminate\View\Factory::setContainer($container);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function shared($key, $default = null){
		 Illuminate\View\Factory::shared($key, $default);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getShared(){
		 Illuminate\View\Factory::getShared();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getSections(){
		 Illuminate\View\Factory::getSections();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getNames(){
		 Illuminate\View\Factory::getNames();
	 }

}

class Clockwork extends Clockwork\Support\Laravel\Facade{
	/**
	 * 
	 *
	 * @static 
	 */
	 public static function __construct(){
		 Clockwork\Clockwork::__construct();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function addDataSource($dataSource){
		 Clockwork\Clockwork::addDataSource($dataSource);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getDataSources(){
		 Clockwork\Clockwork::getDataSources();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getRequest(){
		 Clockwork\Clockwork::getRequest();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setRequest($request){
		 Clockwork\Clockwork::setRequest($request);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function resolveRequest(){
		 Clockwork\Clockwork::resolveRequest();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function storeRequest(){
		 Clockwork\Clockwork::storeRequest();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getStorage(){
		 Clockwork\Clockwork::getStorage();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setStorage($storage){
		 Clockwork\Clockwork::setStorage($storage);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getLog(){
		 Clockwork\Clockwork::getLog();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setLog($log){
		 Clockwork\Clockwork::setLog($log);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function getTimeline(){
		 Clockwork\Clockwork::getTimeline();
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function setTimeline($timeline){
		 Clockwork\Clockwork::setTimeline($timeline);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function log($level, $message, $context = array()){
		 Clockwork\Clockwork::log($level, $message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function emergency($message, $context = array()){
		 Clockwork\Clockwork::emergency($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function alert($message, $context = array()){
		 Clockwork\Clockwork::alert($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function critical($message, $context = array()){
		 Clockwork\Clockwork::critical($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function error($message, $context = array()){
		 Clockwork\Clockwork::error($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function warning($message, $context = array()){
		 Clockwork\Clockwork::warning($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function notice($message, $context = array()){
		 Clockwork\Clockwork::notice($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function info($message, $context = array()){
		 Clockwork\Clockwork::info($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function debug($message, $context = array()){
		 Clockwork\Clockwork::debug($message, $context);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function startEvent($name, $description, $time = null){
		 Clockwork\Clockwork::startEvent($name, $description, $time);
	 }

	/**
	 * 
	 *
	 * @static 
	 */
	 public static function endEvent($name){
		 Clockwork\Clockwork::endEvent($name);
	 }

}

