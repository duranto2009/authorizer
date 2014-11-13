<?php namespace Deefour\Authorizer\Traits;

trait Authorizable {

  public function policyNamespace() {
    return '';
  }

  public function policyClass() {
    return static::class . 'Policy';
  }

  public function scopeClass() {
    return static::class . 'Scope';
  }

}