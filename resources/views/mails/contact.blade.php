<x-layouts.mail>
    <flux:heading size="xl" level="1">Olá Colaborador, você recebeu uma mensagem de {{ $data['fromName'] }}</flux:heading>
    <flux:text class="mt-2 mb-6 text-base">{{ $data['message'] }}</flux:text>
    <flux:separator variant="subtle" />
</x-layouts.mail>
