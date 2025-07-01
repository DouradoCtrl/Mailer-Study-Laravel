<x-layouts.app :title="__('Principal')">
    <div class="relative h-full flex-1">
        <form action="{{ route('formulario.enviar') }}" method="POST">
            @csrf
            <flux:heading size="xl" class="mb-5">Envie sua mensagem</flux:heading>
            <flux:select wire:model="industry" name="subject" placeholder="Assunto" class="mb-3">
                <flux:select.option>Dúvidas</flux:select.option>
                <flux:select.option>Suporte</flux:select.option>
                <flux:select.option>Atendimento</flux:select.option>
                <flux:select.option>Opinião</flux:select.option>
                <flux:select.option>Elogio</flux:select.option>
                <flux:select.option>Outros</flux:select.option>
            </flux:select>
{{--            <flux:input type="text" name="name" class="mb-3" label="Nome" />--}}
{{--            <flux:input type="hidden" name="email" class="mb-3" value="teste@gmail.com"/>--}}
            <flux:textarea name="message" label="Sua mensagem"/>

            <flux:button variant="primary" class="w-full mt-5" type="submit">Enviar mensagem</flux:button>
        </form>
    </div>
</x-layouts.app>
