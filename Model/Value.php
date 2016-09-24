<?php

namespace Hackathon\Translationstorage\Model;

use Hackathon\Translationstorage\Api\Data\ValueInterface;
use Magento\Framework\Model\AbstractExtensibleModel;

class Value extends AbstractExtensibleModel implements ValueInterface
{
    /**
     *
     */
    protected function _construct()
    {
        $this->_init('Hackathon\Translationstorage\Model\Resource\Value');
    }

    public function getToken()
    {
        $this->getData(ValueInterface::TOKEN);
    }

    public function setToken($value)
    {
        $this->setData(ValueInterface::TOKEN, $value);
    }

    public function getContext()
    {
        $this->getData(ValueInterface::TOKEN);
    }

    public function setContext($value)
    {
        $this->setData(ValueInterface::CONTEXT, $value);
    }

    public function getSource()
    {
        $this->getData(ValueInterface::SOURCE);
    }

    public function setSource($value)
    {
        $this->setData(ValueInterface::SOURCE, $value);
    }

    public function getTranslation()
    {
        $this->getData(ValueInterface::TRANSLATION);
    }

    public function setTranslation($value)
    {
        $this->setData(ValueInterface::TRANSLATION, $value);
    }

    public function getLocale()
    {
        $this->getData(ValueInterface::LOCALE);
    }

    public function setLocale($value)
    {
        $this->setData(ValueInterface::LOCALE, $value);
    }
}