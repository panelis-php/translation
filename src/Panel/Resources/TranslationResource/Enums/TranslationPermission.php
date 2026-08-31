<?php

namespace Panelis\Translation\Panel\Resources\TranslationResource\Enums;

use Filament\Support\Contracts\HasLabel;
use Illuminate\Support\Str;

enum TranslationPermission: string implements HasLabel
{
    case Browse = 'BrowseTranslation';

    case Read = 'ReadTranslation';

    case Edit = 'EditTranslation';

    case Add = 'AddTranslation';

    case Delete = 'DeleteTranslation';

    case Import = 'ImportTranslation';

    case Export = 'ExportTranslation';

    case Backup = 'BackupTranslation';

    case Restore = 'RestoreTranslation';

    public function getLabel(): string
    {
        return __(sprintf('translation::permission.name_%s', Str::snake($this->value)));
    }
}
