<div style="width: 30%; height: 275px; background-color: #DCDCDC; border-radius: 5%; text-align: center; padding-top: 1%;">
    <b>WMR Form</b>
    <div style="display: flex; margin-top: 5%; margin-bottom: 38%;">
        <div style="text-align: left; padding-left: 5%;">
            <label>Name of Supply Officer:</label>
        </div>
        <div style="text-align: right; padding-right: 5%;">
            <input type="text" wire:model="nameOfSupply" placeholder="Name of Supplier" @if($pr_btn === "update") disabled @endif>
        </div>
    </div>
    @if($pr_btn === "submit")
        <div style="width: 50%; cursor: pointer;" class="bg-primary text-white mx-auto mt-3" wire:click="prSubmit" >
            SUBMIT
        </div>
    @elseif($pr_btn === "update")
        <div style="width: 50%; cursor: pointer;" class="bg-warning mx-auto mt-3 text-white" wire:click="prBtn('edit')">
            EDIT
        </div>
    @elseif($pr_btn === "edit")
        <div style="width: 50%; cursor: pointer;" class="bg-success mx-auto mt-3 text-white" wire:click="prBtn('update')">
            UPDATE
        </div>
    @endif
</div>
