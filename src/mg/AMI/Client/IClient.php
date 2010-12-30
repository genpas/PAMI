<?php
/**
 * Interface for an ami client.
 *
 * PHP Version 5
 *
 * @category Ami
 * @package  Client
 * @author   Marcelo Gornstein <marcelog@gmail.com>
 * @license  http://www.noneyet.ar/ Apache License 2.0
 * @version  SVN: $Id$
 * @link     http://www.noneyet.ar/
 */
namespace AMI\Client;

/**
 * Interface for an ami client.
 *
 * PHP Version 5
 *
 * @category Ami
 * @package  Client
 * @author   Marcelo Gornstein <marcelog@gmail.com>
 * @license  http://www.noneyet.ar/ Apache License 2.0
 * @version  SVN: $Id$
 * @link     http://www.noneyet.ar/
 */
interface IClient
{
	/**
	 * Opens a tcp connection to ami.
	 *
	 * @throws ClientException
	 * @return void
	 */
	public function open();

	/**
	 * Closes the connection to ami.
	 *
	 * @return void
	 */
	public function close();
}