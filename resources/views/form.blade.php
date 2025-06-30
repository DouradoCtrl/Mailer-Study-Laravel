<x-layouts.app :title="__('Principal')">
    <div class="relative h-full flex-1">
        <flux:heading size="xl" class="mb-5">Envie sua mensagem</flux:heading>
        <flux:input type="email" name="nome" class="mb-3" label="Nome" />
        <flux:textarea name="message" label="Sua mensagem" />

        <flux:button variant="primary" class="w-full mt-5">Enviar mensagem</flux:button>
    </div>
</x-layouts.app>
