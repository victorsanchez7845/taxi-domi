<?php

namespace App\Filament\Resources\HotelResource\Pages;

use App\Filament\Resources\HotelResource;
use App\Models\Hotel;
use Filament\Resources\Pages\EditRecord;

class EditHotel extends EditRecord
{
    protected static string $resource = HotelResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['translation_of'] = null;

        if (($data['language'] ?? null) === 'es' && ! empty($data['group_id'])) {
            $original = Hotel::where('group_id', $data['group_id'])
                ->where('language', 'en')
                ->first();

            if ($original) {
                $data['translation_of'] = $original->id;
            }
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (($data['language'] ?? null) === 'es' && ! empty($data['translation_of'])) {
            $original = Hotel::find($data['translation_of']);

            if ($original) {
                $data['group_id'] = $original->group_id ?: $original->id;
            }
        }

        if (($data['language'] ?? null) === 'en' && empty($data['group_id']) && $this->record) {
            $data['group_id'] = $this->record->id;
        }

        unset($data['translation_of']);

        return $data;
    }
}