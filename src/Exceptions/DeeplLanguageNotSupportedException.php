<?php

namespace JustRaviga\Deepl\Exceptions;

class DeeplLanguageNotSupportedException extends \Exception
{
    /**
     * DeeplLanguageNotSupportedException constructor.
     * @param string $language
     */
    public function __construct(string $language)
    {
        parent::__construct("Language `{$language}` is not currently supported by DeepL API", 0,null);
    }
}
