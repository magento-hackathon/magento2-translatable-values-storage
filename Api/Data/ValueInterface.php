<?php

namespace Hackathon\Translationstorage\Api\Data;

interface ValueInterface
{
    const TOKEN = 'token';

    const LOCALE = 'locale';

    const SOURCE = 'source';

    const TRANSLATION = 'translation';

    const CONTEXT = 'context';

    public function getToken();
    public function setToken($value);

    public function getContext();
    public function setContext($value);

    public function getSource();
    public function setSource($value);

    public function getTranslation();
    public function setTranslation($value);

    public function getLocale();
    public function setLocale($value);
}