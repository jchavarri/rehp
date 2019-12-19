<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * @generated
 *
 */
namespace Rehack;

final class SeparateCompilation {
  <<__Override, __Memoize>>
  public static function get() : Vector<dynamic> {
    $joo_global_object = \Rehack\GlobalObject::get() as dynamic;
    
    $runtime = $joo_global_object->jsoo_runtime;
    $call1 = $runtime["caml_call1"];
    $SeparateCompilation_SeparateCompilationHelper =  SeparateCompilation__SeparateCompilationHelper::get (
      
    );
    $Pervasives =  Pervasives::get ();
    $MyLib =  MyLib::get ();
    
    $call1($Pervasives[34], $SeparateCompilation_SeparateCompilationHelper[1]);
    
    $call1($Pervasives[30], $runtime["caml_js_to_string"]($MyLib[2]));
    
    $SeparateCompilation = Vector{0};
    
     return ($SeparateCompilation);

  }

}
/*____hashes compiler: 6d834f124 flags: 1183596006 bytecode: 9777438710 debug-data: 2484335934 primitives: 1058613066*/
