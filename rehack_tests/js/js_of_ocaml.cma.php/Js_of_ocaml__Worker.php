<?hh
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * Js_of_ocaml__Worker.php
 */

namespace Rehack;

final class Js_of_ocaml__Worker {
  <<__Memoize>>
  public static function get() {
    $global_object = \Rehack\GlobalObject::get();
    $runtime = \Rehack\Runtime::get();
    /*
     * Soon, these will replace the `global_data->ModuleName`
     * pattern in the load() function.
     */
    $Array_ = Array_::get();
    $Js_of_ocaml__Js = Js_of_ocaml__Js::get();
    $Pervasives = Pervasives::get();
    Js_of_ocaml__Worker::load($global_object);
    $memoized = $runtime->caml_get_global_data()->Js_of_ocaml__Worker;
    return $memoized;
  }

  /**
   * Performs module load operation. May have side effects.
   */
  private static function load($joo_global_object) {
    

    $runtime = $joo_global_object->jsoo_runtime;
    $call1 = $runtime["caml_call1"];
    $call2 = $runtime["caml_call2"];
    $caml_get_public_method = $runtime["caml_get_public_method"];
    $string = $runtime["caml_new_string"];
    $global_data = $runtime["caml_get_global_data"]();
    $cst_Worker_onmessage_is_undefined__0 = $string(
      "Worker.onmessage is undefined"
    );
    $cst_Worker_onmessage_is_undefined = $string(
      "Worker.onmessage is undefined"
    );
    $cst_Worker_import_scripts_is_undefined = $string(
      "Worker.import_scripts is undefined"
    );
    $Js_of_ocaml_Js = $global_data["Js_of_ocaml__Js"];
    $Pervasives = $global_data["Pervasives"];
    $Array = $global_data["Array_"];
    $a_ = function(dynamic $x) use ($call1,$caml_get_public_method) {
      return $call1($caml_get_public_method($x, -324422083, 203), $x);
    };
    $b_ = $Js_of_ocaml_Js[50][1];
    $worker = (function(dynamic $t0, dynamic $param) {return $t0->Worker;})($b_, $a_);
    $create = function(dynamic $script) use ($worker) {
      $w_ = 0;
      $x_ = $script->toString();
      return (function(dynamic $t2, dynamic $t1, dynamic $param) {return new $t2($t1);
       })($worker, $x_, $w_);
    };
    $import_scripts = function(dynamic $scripts) use ($Array,$Js_of_ocaml_Js,$Pervasives,$call1,$call2,$caml_get_public_method,$cst_Worker_import_scripts_is_undefined,$runtime) {
      $o_ = $Js_of_ocaml_Js[3];
      $p_ = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 815769891, 204), $x);
      };
      $q_ = $Js_of_ocaml_Js[50][1];
      if (
        (function(dynamic $t4, dynamic $param) {return $t4->importScripts;})($q_, $p_) === $o_
      ) {$call1($Pervasives[1], $cst_Worker_import_scripts_is_undefined);}
      $r_ = $call1($Array[12], $scripts);
      $s_ = function(dynamic $s) {return $s->toString();};
      $t_ = $call2($Array[15], $s_, $r_);
      $u_ = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 815769891, 205), $x);
      };
      $v_ = $Js_of_ocaml_Js[50][1];
      return $runtime["caml_js_fun_call"](
        (function(dynamic $t3, dynamic $param) {return $t3->importScripts;})($v_, $u_),
        $t_
      );
    };
    $set_onmessage = function(dynamic $handler) use ($Js_of_ocaml_Js,$Pervasives,$call1,$caml_get_public_method,$cst_Worker_onmessage_is_undefined,$runtime) {
      $h_ = $Js_of_ocaml_Js[3];
      $i_ = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 610977416, 206), $x);
      };
      $j_ = $Js_of_ocaml_Js[50][1];
      if (
        (function(dynamic $t8, dynamic $param) {return $t8->onmessage;})($j_, $i_) === $h_
      ) {$call1($Pervasives[1], $cst_Worker_onmessage_is_undefined);}
      $js_handler = function(dynamic $ev) use ($call1,$caml_get_public_method,$handler) {
        $n_ = function(dynamic $x) use ($call1,$caml_get_public_method) {
          return $call1($caml_get_public_method($x, -1033677270, 207), $x);
        };
        return $call1(
          $handler,
          (function(dynamic $t7, dynamic $param) {return $t7->data;})($ev, $n_)
        );
      };
      $k_ = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, 610977416, 208), $x);
      };
      $l_ = $runtime["caml_js_wrap_callback"]($js_handler);
      $m_ = $Js_of_ocaml_Js[50][1];
      return (function(dynamic $t6, dynamic $t5, dynamic $param) {$t6->onmessage = $t5;return 0;
       })($m_, $l_, $k_);
    };
    $post_message = function(dynamic $msg) use ($Js_of_ocaml_Js,$Pervasives,$call1,$caml_get_public_method,$cst_Worker_onmessage_is_undefined__0) {
      $c_ = $Js_of_ocaml_Js[3];
      $d_ = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, -699849401, 209), $x);
      };
      $e_ = $Js_of_ocaml_Js[50][1];
      if (
        (function(dynamic $t11, dynamic $param) {return $t11->postMessage;})($e_, $d_) === $c_
      ) {$call1($Pervasives[1], $cst_Worker_onmessage_is_undefined__0);}
      $f_ = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, -699849401, 210), $x);
      };
      $g_ = $Js_of_ocaml_Js[50][1];
      return (function(dynamic $t10, dynamic $t9, dynamic $param) {return $t10->postMessage($t9);
       })($g_, $msg, $f_);
    };
    $Js_of_ocaml_Worker = Vector{
      0,
      $create,
      $import_scripts,
      $set_onmessage,
      $post_message
    };
    
    $runtime["caml_register_global"](
      14,
      $Js_of_ocaml_Worker,
      "Js_of_ocaml__Worker"
    );

  }
}

/*____hashes compiler:hashing-disabled inputs:hashing-disabled bytecode:hashing-disabled*/
