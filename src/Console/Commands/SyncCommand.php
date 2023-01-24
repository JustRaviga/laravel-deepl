<?php

namespace JustRaviga\Deepl\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use JustRaviga\Deepl\Facades\Deepl;
use JustRaviga\Deepl\TranslationManager;
use Themsaid\Langman\Manager;

class SyncCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deepl:translate {language}';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $description = 'Generate missing translation for given language';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(TranslationManager $manager)
    {
        $language = strtoupper($this->argument('language'));

        if (Deepl::api()->isSupportedLanguage($language)) {
            $this->error("Language `$language` is not supported");

            return self::FAILURE;
        }

        $sourceLanguage = config('deepl.source_language');
        $this->info("Translating all files from $sourceLanguage to $language");

        $manager->translateAllFiles($language);

        $this->info('Done!');

        return self::SUCCESS;
    }
}
