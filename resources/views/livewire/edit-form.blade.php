<div>
    
    <form wire:submit="">
        <div class="mb-3">
            <label class="form-label">Nome Classe:</label>
            <input type="text" class="form-control" wire:model="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Categoria:</label>
            <input type="text" class="form-control" wire:model="class">
        </div>
        <div class="mb-3">
            <label class="form-label">Dadi vita:</label>
            <input type="text" class="form-control" wire:model="pf_dice">
        </div>
        <div class="mb-3">
            <label class="form-label">PF al 1° livello:</label>
            <input type="text" class="form-control" wire:model="pf_first">
        </div>
        <div class="mb-3">
            <label class="form-label">PF ai livelli successivi:</label>
            <input type="text" class="form-control" wire:model="pf_higher">
        </div>
        <div class="mb-3">
            <label class="form-label">Competenza con le armature:</label>
            <input type="text" class="form-control" wire:model="armors">
        </div>
        <div class="mb-3">
            <label class="form-label">Competenza con le armi:</label>
            <input type="text" class="form-control" wire:model="weapons">
        </div>
        <div class="form-floating mb-3">
            <p class="form-label">Competenze con gli attrezzi:</p>
            <input type="text" class="form-control" wire:model="tools">
        </div>
        <div class="form-floating mb-3">
            <p class="form-label">Tiri Salvezza:</p>
            <input type="text" class="form-control" wire:model="saving_throws">
        </div>
        <div class="form-floating mb-3">
            <p class="form-label">Abilità:</p>
            <input type="text" class="form-control" wire:model="abilities">
        </div>
        <div class="form-floating mb-3">
            <p class="form-label">Equipaggiamento iniziale:</p>
            <input type="text" class="form-control" wire:model="equipments">
        </div>
        <div class="form-floating mb-3">
            <p class="form-label">Classi di prestigio:</p>
            <input type="text" class="form-control" wire:model="others">
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" wire:model="img">
        </div>
        <button type="submit" class="btn btn-outline-danger mb-3">Aggiorna</button>
    </form>

</div>
