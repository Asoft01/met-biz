<?php 
/**
 * PluginJsHandler.php
 *
 * Copyright 2003-2013, Moxiecode Systems AB, All rights reserved.
 */

/**
 * ..
 *
 * @package MOXMAN_Core
 */
class MOXMAN_Core_PluginJsHandler implements MOXMAN_Http_IHandler {
	/**
	 * Process a request using the specified context.
	 *
	 * @param MOXMAN_Http_Context $httpContext Context instance to pass to use for the handler.
	 */
	public function processRequest(MOXMAN_Http_Context $httpContext) {
		$request = $httpContext->getRequest();
		$response = $httpContext->getResponse();

		$response->setHeader('Content-type', 'text/javascript');

		$config = MOXMAN::getConfig();
		$plugins = explode(',', $config->get("general.plugins"));
		$content = "";

		foreach ($plugins as $plugin) {
			$path = MOXMAN_PLUGINS . '/' . $plugin . '/Plugin.js';

			if (file_exists($path)) {
				$content .= file_get_contents($path);
			}
		}

		$response->sendContent($content);
	}
}

