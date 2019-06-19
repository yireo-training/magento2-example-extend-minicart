<?php
declare(strict_types=1);

namespace Yireo\ExampleExtendMinicart\Observer;

use Magento\Catalog\Block\ShortcutButtons;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Exception\LocalizedException;
use Yireo\ExampleExtendMinicart\Block\Minicart\Buttons\HelloWorld;

/**
 * Class AddShortcutsObserver
 * @package Yireo\ExampleExtendMinicart\Observer
 */
class AddShortcutsObserver implements ObserverInterface
{
    /**
     * @param Observer $observer
     * @return void
     * @throws LocalizedException
     */
    public function execute(Observer $observer)
    {
        /** @var ShortcutButtons $shortcutButtons */
        $shortcutButtons = $observer->getEvent()->getContainer();

        /** @var HelloWorld $shortcut */
        $shortcut = $shortcutButtons->getLayout()->createBlock(
            HelloWorld::class,
            'yireo-example-extend-minicart-buttons-hello-world',
            []
        );

        $shortcutButtons->addShortcut($shortcut);
    }
}
