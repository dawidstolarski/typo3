<?php

namespace InstituteWeb\Unroll\Xclass;

/*  | This extension is made for TYPO3 CMS and is licensed under GNU General Public License.
 *  | See LICENSE.txt shipped with this extension.
 *  |
 *  | (c) 2016-2017 Markus Klein, Reelworx GmbH https://reelworx.at/
 *  |     2016-2017 Armin Vieweg <armin@v.ieweg.de>
 */

use TYPO3\CMS\Backend\Template\Components\Buttons\InputButton;
use TYPO3\CMS\Backend\Template\Components\Buttons\SplitButton;
use TYPO3\CMS\Core\Authentication\BackendUserAuthentication;

/**
 * Xclass SplitButton to change rendering
 */
class UnrolledSplitButton extends SplitButton
{
    /**
     * Renders the better configured SplitButton
     *
     * @return string
     */
    public function render()
    {
        $defaultSettings = [
            'buttons' => '_savedok,_savedokview,_savedoknew,_saveandclosedok',
            'unroll' => true,
            'showLabelSave' => true,
            'showLabelSaveDokView' => true,
            'showLabelSaveDokNew' => true,
            'showLabelSaveAndClose' => true,
        ];
        $settings = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['unroll']);
        if (!is_array($settings)) {
            $settings = [];
        }
        $settings = array_replace($defaultSettings, $settings);

        foreach ($defaultSettings as $name => $_) {
            if (isset($this->getBeUser()->uc[$name])) {
                $value = $this->getBeUser()->uc[$name];
                if ($value !== 'default') {
                    $settings[$name] = $value === 'enable';
                }
            }
        }

        // Get flat array of buttons. Button name is the key of the array.
        $buttonsByName = $this->getButtonsByName();
        // Get flat array of buttons in new order
        $newOrderedButtons = [];
        foreach (explode(',', $settings['buttons']) as $buttonName) {
            $buttonName = trim($buttonName);
            if (isset($buttonsByName[$buttonName])) {
                $newOrderedButtons[] = $buttonsByName[$buttonName];
                unset($buttonsByName[$buttonName]);
            }
        }
        // append remaining buttons
        /** @var InputButton[] $buttons */
        $buttons = array_merge($newOrderedButtons, $buttonsByName);

        // Change button order in configuration
        $this->items = ['primary' => reset($buttons), 'options' => array_slice($buttons, 1, null, true)];

        if ($settings['unroll']) {
            $showButtonLabels = [];
            if ($settings['showLabelSave']) {
                $showButtonLabels[] = '_savedok';
            }
            if ($settings['showLabelSaveDokView']) {
                $showButtonLabels[] = '_savedokview';
            }
            if ($settings['showLabelSaveDokNew']) {
                $showButtonLabels[] = '_savedoknew';
            }
            if ($settings['showLabelSaveAndClose']) {
                $showButtonLabels[] = '_saveandclosedok';
            }

            // This code is originally from EXT:rx_unrollsavebuttons ("Unroll TYPO3 save buttons") by Markus Klein
            $content = '';
            foreach ($buttons as $button) {
                $attributes = [
                    'type' => 'submit',
                    'class' => 'btn btn-sm btn-default ' . $button->getClasses(),
                    'name' => $button->getName(),
                    'value' => $button->getValue(),
                ];
                $onClick = $button->getOnClick();
                if ($onClick) {
                    $attributes['onclick'] = $onClick;
                }
                $form = $button->getForm();
                if ($form) {
                    $attributes['form'] = $form;
                }
                $buttonTitle = $button->getTitle();
                if (!in_array($button->getName(), $showButtonLabels, true)) {
                    $attributes['title'] = $buttonTitle;
                    $buttonTitle = '';
                }
                $optionAttributesString = '';
                foreach ($attributes as $key => $value) {
                    $optionAttributesString .= ' ' . htmlspecialchars($key) . '="' . htmlspecialchars($value) . '"';
                }
                $content .= '<button' . $optionAttributesString . '> '
                            . $button->getIcon()->render() . ' ' . htmlspecialchars($buttonTitle)
                            . '</button>';
            }
            return '<div class="btn-group">' . $content . '</div>';
        }
        return parent::render();
    }

    /**
     * @return InputButton[] name attribute is key of array
     */
    protected function getButtonsByName()
    {
        $items = $this->getButton();
        /** @var InputButton[] $buttons */
        $buttons = array_merge([$items['primary']], $items['options']);
        $buttonsByName = [];
        foreach ($buttons as $button) {
            $key = $button->getName();
            if ($button->getValue() != '1') {
                $key = $button->getValue();
            }
            $buttonsByName[$key] = $button;
        }
        return $buttonsByName;
    }

    /**
     * @return BackendUserAuthentication
     */
    private function getBeUser()
    {
        return $GLOBALS['BE_USER'];
    }
}
