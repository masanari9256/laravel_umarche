<x-tests.app>
    <x-slot name="header">
        ヘッダー1
    </x-slot>
    コンポーネントテスト1

    <x-tests.card title="たいとる" content="あいうえお" :message="$message" />
    <x-tests.card title="たいとる2"/>
    <x-tests.card title="css変更" class="bg-red-300" />
</x-tests.app>
