<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * @generated
 *
 */
namespace Rehack;

final class Oo {
  <<__Override, __Memoize>>
  public static function get() : Vector<dynamic> {
    $joo_global_object = \Rehack\GlobalObject::get() as dynamic;
    
    $runtime = $joo_global_object->jsoo_runtime;
    $CamlinternalOO =  CamlinternalOO::get ();
    $copy = $CamlinternalOO[22];
    $new_method = $CamlinternalOO[1];
    $public_method_label = $CamlinternalOO[1];
    $Oo = Vector{0, $copy, $new_method, $public_method_label};
    
     return ($Oo);

  }
  public static function copy(): dynamic {
    return static::callRehackFunction(static::get()[1], varray[]);
  }
  public static function new_method(): dynamic {
    return static::callRehackFunction(static::get()[2], varray[]);
  }
  public static function public_method_label(): dynamic {
    return static::callRehackFunction(static::get()[3], varray[]);
  }

}
/* Hashing disabled */
