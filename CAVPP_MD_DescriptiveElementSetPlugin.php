<?php
/**
 * CAVPP PBCore Descriptive Metadata Element Set plugin
 *
 * Creates a custom descriptive element set for 
 * California Audiovisual Preservation Project based on 
 * PBCore (Public Broadcasting Metadata Dictionary),
 * a standard for digitalized documents (see http://pbcore.org).
 *
 * copyright LibraryHost, 2014
 * Based on PBCore Element Set by Pop Up Archive, 2012
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * The CAVPP PBCore Descriptive Metadata Element Set plugin.
 * @package Omeka\Plugins\CAVPP_PBCoreElementSet
 */
class CAVPP_MD_DescriptiveElementSetPlugin extends Omeka_Plugin_AbstractPlugin
{
    private $_elementSetName = 'Descriptive Metadata';

    /**
     * @var array Hooks for the plugin.
     */
    protected $_hooks = array(
        'install',
        'uninstall',
		'after_save_item'
    );

    /**
     * Install the plugin.
     */
    public function hookInstall()
    {
        $this->_installOptions();

        // Load elements to add.
        require_once('elements.php');

        // Don't install if an element set already exists.
        if ($this->_getElementSet($this->_elementSetName)) {
            throw new Omeka_Plugin_Installer_Exception('An element set by the name "' . $this->_elementSetName . '" already exists. You must delete that element set to install this plugin.');
        }

        insert_element_set($elementSetMetadata, $elements);
    }

    /**
     * Uninstall the plugin.
     */
    public function hookUninstall()
    {
        $this->_deleteElementSet($this->_elementSetName);

        $this->_uninstallOptions();
    }

	/**
	* Saves the metadata
	*/
	public function hookAfterSaveItem($args)
    {
        $post = $args['post'];
        $item = $args['record'];
    }

        private function _getElementSet($elementSetName)
    {
        return $this->_db
            ->getTable('ElementSet')
            ->findByName($elementSetName);
    }

    private function _deleteElementSet($elementSetName)
    {
        $elementSet = $this->_getElementSet($elementSetName);

        if ($elementSet) {
            $elements = $elementSet->getElements();
            foreach ($elements as $element) {
                $element->delete();
            }
            $elementSet->delete();
        }
    }
}
