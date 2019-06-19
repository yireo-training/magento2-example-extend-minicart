<?php
declare(strict_types=1);

namespace Yireo\ExampleExtendMinicart\Block\Minicart\Buttons;

use Magento\Catalog\Block\ShortcutInterface;
use Magento\Framework\View\Element\Template;

class HelloWorld extends Template implements ShortcutInterface
{
    protected $_template = 'minicart/buttons/hello_world.phtml';

    /**
     * Get shortcut alias
     *
     * @return string
     */
    public function getAlias()
    {
        return 'hello-world';
    }
}
