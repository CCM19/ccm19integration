<?php /** @noinspection ALL */

/**
 * @package    ccm19
 *
 * @author     jona <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Installer\InstallerAdapter;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Log\Log;

defined('_JEXEC') or die;

/**
 * joomlaplugin script file.
 *
 * @package   ccm19
 * @since     1.0.0
 */
class plg_SystemJoomlapluginInstallerScript
{
	/**
	 * Script for Component
	 *
	 * @var     string
	 * @since   1.0.0
	 */
	private $minimumJoomlaVersion = '4.0';

	/**
	 * Minimum PHP version to check
	 *
	 * @var     string
	 * @since   1.0.0
	 */
	private $minimumPhpVersion = JOOMLA_MINIMUM_PHP;

	/**
	 * Method to install extension
	 *
	 * @param   InstallerAdapter  $parent  The class calling this method.
	 *
	 * @return  boolean True on succes.
	 *
	 * @since   1.0.0
	 */
	public function install($parent): bool
	{
		echo Text ::_('PLG_JOOMLAPLUGIN_INSTALLSCRIPT_INSTALL');

		return true;
	}

	/**
	 * Method to uninstall the extension
	 *
	 * @param   InstallerAdapter  $parent  The class calling this method.
	 *
	 * @return  boolean True on succes.
	 *
	 * @since   1.0.0
	 */
	public function uninstall($parent): bool
	{
		echo Text ::_('PLG_JOOMLAPLUGIN_INSTALLERSCRIPT_UNINSTALL');

		return true;
	}

	/** Method to update the extension
	 *
	 * @param   InstallerAdapter  $parent  The class calling this method
	 *
	 * @return  boolean  True on success
	 *
	 * @since  1.0.0
	 *
	 */
	public function update($parent): bool
	{
		echo Text ::_('PLG_JOOMLAPLUGIN_INSTALLERSCRIPT_UPDATE');

		return true;
	}

	/**
	 * Function called before extension installation/update/removal procedure commences
	 *
	 * @param   string            $type    The type of change (install, update or discover_install, not uninstall)
	 * @param   InstallerAdapter  $parent  The class calling this method
	 *
	 * @return  boolean  True on success
	 *
	 * @throws Exception
	 * @since  1.0.0
	 *
	 */

	public function preflight($type, $parent): bool
	{
		if ($type !== 'uninstall')
		{
			// Check for the minimum PHP version before continuing
			if (!empty($this -> minimumPHPVersion) && version_compare(PHP_VERSION, $this -> minimumPHPVersion, '<'))
			{
				Log ::add(
					Text ::sprintf('JLIB_INSTALLER_MINIMUM_PHP', $this -> minimumPHPVersion),
					Log::WARNING,
					'jerror'
				);

				return false;
			}
			// Check for the minimum Joomla version before continuing
			if (!empty($this -> minimumJoomlaVersion) && version_compare(JVERSION, $this -> minimumJoomlaVersion, '<'))
			{
				Log ::add(
					Text ::sprintf('JLIB_INSTALLER_MINIMUM_JOOMLA', $this -> minimumJoomlaVersion),
					Log::WARNING,
					'jerror'

				);

				return false;
			}
		}
		echo Text ::_('PLG_JOOMLAPLUGIN_INSTALLERSCRIPT_PREFLIGHT');

		return true;
	}

	/**
	 * Function called after extension installation/update/removal procedure commences
	 *
	 * @param   string            $type    The type of change (install, update or discover_install, not uninstall)
	 * @param   InstallerAdapter  $parent  The class calling this method
	 *
	 * @return  boolean  True on success
	 *
	 * @since  1.0.0
	 *
	 */
	public function postflight($type, $parent): bool
	{
		echo Text ::_('PLG_JOOMLAPLUGIN_INSTALLERSCRIPT_POSTFLIGHT');

		return true;
	}
}
