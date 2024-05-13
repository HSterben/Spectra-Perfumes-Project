<?php
//use statements to simplify code below
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\MoFileLoader;
//list the localisations that have been built
$supportedLocales = ['fr', 'en'];
//get the requested locale to use here we default to 'fr'
$locale = $_GET['lang'] ?? $_COOKIE['lang'] ?? 'fr';
//ensure the locale is supported
if(!in_array($locale, $supportedLocales))
	$locale = 'fr';
//save the setting to a cookie
setcookie('lang',$locale,0,'/');
//initialise a translator object for the locale
$t = new Translator($locale);
//add a loader for .mo files
$t->addLoader('mo', new MoFileLoader());
//grab the .mo file resource from the folders previously built
$t->addResource('mo',"./locales/$locale/LC_MESSAGES/messages.mo", $locale);

//define a helper function to load translations from the translator
//that remains unobstrusive for writing in views
function __($message){
	global $t;
	return $t->trans($message);
}