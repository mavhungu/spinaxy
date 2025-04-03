<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>
    <form method="POST" action="{{ $action }}" class="mt-6 space-y-6">
        @csrf
        @method($method ?? 'POST')

        <div>
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input id="location" name="location" type="text" class="mt-1 block w-full" required />
        </div>
        <div>
            <x-input-label for="collection_date" :value="__('Collection Date')" />
            <x-text-input id="collection_date" name="collection_date" type="text" class="mt-1 block w-full" required />
        </div>
        <div>
            <x-input-label for="boxes_collected" :value="__('Boxes to Collect')" />
            <x-text-input id="boxes_collected" name="boxes_collected" type="text" class="mt-1 block w-full" required />
        </div>
        <div>
            <x-input-label for="containers_collected" :value="__('Containers to Collect')" />
            <x-text-input id="containers_collected" name="containers_collected" type="text" class="mt-1 block w-full" required />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Book') }}</x-primary-button>
        </div>
    </form>
</section>
