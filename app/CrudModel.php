<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class CrudModel extends Model
{
    /**
     * Validate for store and update actions
     */
    public static $validateRules = [];
    
    /**
     * Validate only store action
     */
    public static $createValidateRules = [];
    
    /**
     * Validate only update action
     */
    public static $updateValidateRules = [];
    
    /**
     * Create or Update data with provide request
     */
    public function saveOrUpdate($request) {
        return $this->fill($request->all())->save();
    }
}
