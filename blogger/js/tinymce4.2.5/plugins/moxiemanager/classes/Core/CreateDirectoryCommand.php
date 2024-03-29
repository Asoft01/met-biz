<?php 
/**
 * CreateDirectoryCommand.php
 *
 * Copyright 2003-2013, Moxiecode Systems AB, All rights reserved.
 */

/**
 * Command that creates directories.
 *
 * @package MOXMAN_Core
 */
class MOXMAN_Core_CreateDirectoryCommand extends MOXMAN_Core_BaseCommand {
	/**
	 * Executes the command logic with the specified RPC parameters.
	 *
	 * @param Object $params Command parameters sent from client.
	 * @return Object Result object to be passed back to client.
	 */
	public function execute($params) {
		$file = MOXMAN::getFile($params->path);
		$config = $file->getConfig();

		if ($config->get('general.demo')) {
			throw new MOXMAN_Exception(
				"This action is restricted in demo mode.",
				MOXMAN_Exception::DEMO_MODE
			);
		}

		if (!$file->canWrite()) {
			throw new MOXMAN_Exception(
				"No write access to file: " . $file->getPublicPath(),
				MOXMAN_Exception::NO_WRITE_ACCESS
			);
		}

		if ($file->exists()) {
			throw new MOXMAN_Exception(
				"File already exist: " . $file->getPublicPath(),
				MOXMAN_Exception::FILE_EXISTS
			);
		}

		$filter = MOXMAN_Vfs_CombinedFileFilter::createFromConfig($config, "createdir");
		if ($filter->accept($file, false) !== MOXMAN_Vfs_CombinedFileFilter::ACCEPTED) {
			throw new MOXMAN_Exception(
				"Invalid file name for: " . $file->getPublicPath(),
				MOXMAN_Exception::INVALID_FILE_NAME
			);
		}

		// Fire event before folder created.
		$args = new MOXMAN_Core_FileActionEventArgs("add", $file);
		MOXMAN::getPluginManager()->get("core")->fire("BeforeFileAction", $args);
		$file = $args->getFile();

		if (isset($params->template)) {
			// TODO: Security audit this
			$templateFile = MOXMAN::getFile($params->template);
			if (!$templateFile->exists()) {
				throw new MOXMAN_Exception(
					"Template file doesn't exists: " . $file->getPublicPath(),
					MOXMAN_Exception::FILE_DOESNT_EXIST
				);
			}

			$templateFile->copyTo($file);
		} else {
			$file->mkdir();
		}

		$this->fireFileAction(MOXMAN_Core_FileActionEventArgs::ADD, $file);

		return $this->fileToJson($file);
	}
}

