<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{

    /*
        Antes de Criar (before create)
    */
    public function creating(User $user): void
    {
        //
    }
    
    /*
        Depois de Criar (after create)
    */
    public function created(User $user): void
    {
        //
    }

    /*
        Antes de Alterar (before update)
    */
    public function updating(User $user): void
    {
        //
    }
    
    /*
        Depois de Alterar (after update)
    */
    public function updated(User $user): void
    {
        //
    }

    /*
        Antes de Deletar (before delete)
    */
    public function deleting(User $user): void
    {
        //
    }

    /*
        Depois de Deletar (afater delete)
    */
    public function deleted(User $user): void
    {
        //
    }
    
    public function restoring(User $user): void
    {
        //
    }

    public function restored(User $user): void
    {
        //
    }

    public function forceDeleted(User $user): void
    {
        //
    }
}
