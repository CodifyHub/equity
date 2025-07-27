<?php

namespace App\Observers;

use App\Models\Property;
use Illuminate\Support\Facades\Storage;

class PropertyObserver
{
    /**
     * Handle the Property "created" event.
     */
    public function created(Property $property): void
    {
        //
    }

    /**
     * Handle the Property "updated" event.
     */
    public function updated(Property $property): void
    {
        if ($property->isDirty('image')) {
            Storage::disk('public')->delete($property->getOriginal('image'));
        }
    }

    /**
     * Handle the Property "deleted" event.
     */
    public function deleted(Property $property): void
    {
        if (! is_null($property->image)) {
            Storage::disk('public')->delete($property->image);
        }
    }

    /**
     * Handle the Property "restored" event.
     */
    public function restored(Property $property): void
    {
        //
    }

    /**
     * Handle the Property "force deleted" event.
     */
    public function forceDeleted(Property $property): void
    {
        //
    }
}
