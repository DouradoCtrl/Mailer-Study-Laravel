<x-layouts.app :title="__('Principal')">
    <div class="relative h-full flex-1">
        <form action="{{ route('formulario.enviar') }}" method="POST">
            @csrf
            <flux:heading size="xl" class="mb-5">Envie sua mensagem</flux:heading>
            <flux:input type="text" name="nome" class="mb-3" label="Nome" />
            <flux:textarea name="message" label="Sua mensagem" />

            <flux:button variant="primary" class="w-full mt-5" type="submit">Enviar mensagem</flux:button>
        </form>
    </div>
</x-layouts.app>
