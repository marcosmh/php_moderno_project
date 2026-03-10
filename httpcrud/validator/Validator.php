<?php

namespace app\validators;

use app\interaces\ValidatorsInterface;

class Validator implements ValidatorsInterface {
    
    private string $error;
    
    public function getError(): string {
        
        return $this->error;
    }
    
    public function validateAdd($data): bool {
        if(empty($data['name'])) {
            $this->error = 'Nombre es obligatorio';
        }
        
        return true;
    }
    
    public function validateUpdate($data): bool {
        
         if(empty($data['id'])) {
            $this->error = 'Id es obligatorio';
        }
        
        if(empty($data['name'])) {
            $this->error = 'Nombre es obligatorio';
        }
        
        return true;
    }
    
    
} 