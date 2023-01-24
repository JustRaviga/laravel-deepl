<?php

namespace JustRaviga\Deepl\Exceptions;

class DeeplTranslateFailedException extends \Exception
{
    /**
     * Translated text
     * @var string|null
     */
    public ?string $text;

    /**
     * DeeplTranslateException constructor.
     * @param $message
     * @param  string|null  $text
     */
    public function __construct($message, ?string $text)
    {
        $this->text = $text;
        parent::__construct($message, 0,null);
    }
}
