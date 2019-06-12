<?hh
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * Js_of_ocaml__File.php
 */

namespace Rehack;

final class Js_of_ocaml__File {
  <<__Memoize>>
  public static function get() {
    $global_object = \Rehack\GlobalObject::get();
    $runtime = \Rehack\Runtime::get();
    /*
     * Soon, these will replace the `global_data->ModuleName`
     * pattern in the load() function.
     */
    $Array_ = Array_::get();
    $Js_of_ocaml__Dom = Js_of_ocaml__Dom::get();
    $Js_of_ocaml__Js = Js_of_ocaml__Js::get();
    $Js_of_ocaml__Typed_array = Js_of_ocaml__Typed_array::get();
    $List_ = List_::get();
    $Pervasives = Pervasives::get();
    Js_of_ocaml__File::load($global_object);
    $memoized = $runtime->caml_get_global_data()->Js_of_ocaml__File;
    return $memoized;
  }

  /**
   * Performs module load operation. May have side effects.
   */
  private static function load($joo_global_object) {
    

    $filter_map = new Ref();
    $runtime = $joo_global_object->jsoo_runtime;
    $call1 = $runtime["caml_call1"];
    $call2 = $runtime["caml_call2"];
    $caml_get_public_method = $runtime["caml_get_public_method"];
    $string__0 = $runtime["caml_new_string"];
    $global_data = $runtime["caml_get_global_data"]();
    $cst_can_t_retrieve_file_name_not_implemented = $string__0(
      "can't retrieve file name: not implemented"
    );
    $cst_endings = $string__0("endings");
    $cst_type = $string__0("type");
    $cst_loadstart = $string__0("loadstart");
    $cst_progress = $string__0("progress");
    $cst_abort = $string__0("abort");
    $cst_error = $string__0("error");
    $cst_load = $string__0("load");
    $cst_loadend = $string__0("loadend");
    $Js_of_ocaml_Typed_array = $global_data["Js_of_ocaml__Typed_array"];
    $Js_of_ocaml_Js = $global_data["Js_of_ocaml__Js"];
    $Pervasives = $global_data["Pervasives"];
    $List = $global_data["List_"];
    $Array = $global_data["Array_"];
    $Js_of_ocaml_Dom = $global_data["Js_of_ocaml__Dom"];
    $go = Vector{0, $string__0("transparent")};
    $gp = Vector{0, $string__0("native")};
    $gm = function(dynamic $x) use ($call1,$caml_get_public_method) {
      return $call1($caml_get_public_method($x, -553417380, 86), $x);
    };
    $gn = $Js_of_ocaml_Js[50][1];
    $blob_constr = (function(dynamic $t0, dynamic $param) {return $t0->Blob;})($gn, $gm);
    $filter_map->contents = function(dynamic $f, dynamic $param) use ($call1,$filter_map) {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $q = $param__0[2];
          $v = $param__0[1];
          $match = $call1($f, $v);
          if ($match) {
            $v__0 = $match[1];
            return Vector{0, $v__0, $filter_map->contents($f, $q)};
          }
          $param__0 = $q;
          continue;
        }
        return 0;
      }
    };
    $make_blob_options = function(dynamic $contentType, dynamic $endings) use ($Array,$Js_of_ocaml_Js,$call1,$cst_endings,$cst_type,$filter_map,$go,$gp,$runtime) {
      $gD = 0;
      if ($endings) {
        $gE = 116179762 <= $endings[1] ? $go : ($gp);
        $gF = $gE;
      }
      else {$gF = 0;}
      $gG = Vector{
        0,
        Vector{0, $cst_type, $contentType},
        Vector{0, Vector{0, $cst_endings, $gF}, $gD}
      };
      $options = $filter_map->contents(
        function(dynamic $param) {
          $v = $param[2];
          $name = $param[1];
          if ($v) {
            $v__0 = $v[1];
            return Vector{0, Vector{0, $name, $v__0->toString()}};
          }
          return 0;
        },
        $gG
      );
      return $options
        ? $runtime["caml_js_object"]($call1($Array[12], $options))
        : ($Js_of_ocaml_Js[3]);
    };
    $blob_raw = function(dynamic $contentType, dynamic $endings, dynamic $a) use ($blob_constr,$make_blob_options,$runtime) {
      $options = $make_blob_options($contentType, $endings);
      $gB = 0;
      $gC = $runtime["caml_js_from_array"]($a);
      return (function(dynamic $t3, dynamic $t1, dynamic $t2, dynamic $param) {return new $t3($t1, $t2);
       })($blob_constr, $gC, $options, $gB);
    };
    $blob_from_string = function
    (dynamic $contentType, dynamic $endings, dynamic $s) use ($blob_raw) {
      return $blob_raw($contentType, $endings, Vector{0, $s->toString()});
    };
    $blob_from_any = function
    (dynamic $contentType, dynamic $endings, dynamic $l) use ($Array,$List,$blob_raw,$call1,$call2) {
      $gz = function(dynamic $param) {
        $gA = $param[1];
        if (155580615 === $gA) {$s = $param[2];return $s;}
        if (486041214 <= $gA) {
          if (1037850489 <= $gA) {$a = $param[2];return $a;}
          $a__0 = $param[2];
          return $a__0;
        }
        if (288368849 <= $gA) {$s__0 = $param[2];return $s__0->toString();}
        $b = $param[2];
        return $b;
      };
      $l__0 = $call2($List[17], $gz, $l);
      return $blob_raw($contentType, $endings, $call1($Array[12], $l__0));
    };
    $filename = function(dynamic $file) use ($Js_of_ocaml_Js,$Pervasives,$call1,$caml_get_public_method,$cst_can_t_retrieve_file_name_not_implemented) {
      $gv = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, -922783157, 87), $x);
      };
      $gw = (function(dynamic $t5, dynamic $param) {return $t5->name;})($file, $gv);
      $match = $call1($Js_of_ocaml_Js[6][10], $gw);
      if ($match) {$name = $match[1];return $name;}
      $gx = function(dynamic $x) use ($call1,$caml_get_public_method) {
        return $call1($caml_get_public_method($x, -498902297, 88), $x);
      };
      $gy = (function(dynamic $t4, dynamic $param) {return $t4->fileName;})($file, $gx);
      $match__0 = $call1($Js_of_ocaml_Js[6][10], $gy);
      if ($match__0) {$name__0 = $match__0[1];return $name__0;}
      return $call1(
        $Pervasives[2],
        $cst_can_t_retrieve_file_name_not_implemented
      );
    };
    $gq = function(dynamic $x) use ($call1,$caml_get_public_method) {
      return $call1($caml_get_public_method($x, 1012572826, 89), $x);
    };
    $gr = $Js_of_ocaml_Js[50][1];
    $doc_constr = (function(dynamic $t6, dynamic $param) {return $t6->Document;
     })($gr, $gq);
    $document = function(dynamic $e) use ($Js_of_ocaml_Js,$call1,$doc_constr) {
      return instance_of($e, $doc_constr)
        ? $call1($Js_of_ocaml_Js[2], $e)
        : ($Js_of_ocaml_Js[1]);
    };
    $blob = function(dynamic $e) use ($Js_of_ocaml_Js,$blob_constr,$call1) {
      return instance_of($e, $blob_constr)
        ? $call1($Js_of_ocaml_Js[2], $e)
        : ($Js_of_ocaml_Js[1]);
    };
    $string = function(dynamic $e) use ($Js_of_ocaml_Js,$call1,$runtime) {
      return $runtime["caml_equal"](typeof($e), "string")
        ? $call1($Js_of_ocaml_Js[2], $e)
        : ($Js_of_ocaml_Js[1]);
    };
    $arrayBuffer = function(dynamic $e) use ($Js_of_ocaml_Js,$Js_of_ocaml_Typed_array,$call1) {
      return instance_of($e, $Js_of_ocaml_Typed_array[1])
        ? $call1($Js_of_ocaml_Js[2], $e)
        : ($Js_of_ocaml_Js[1]);
    };
    $loadstart = $call1($Js_of_ocaml_Dom[14][1], $cst_loadstart);
    $progress = $call1($Js_of_ocaml_Dom[14][1], $cst_progress);
    $abort = $call1($Js_of_ocaml_Dom[14][1], $cst_abort);
    $error = $call1($Js_of_ocaml_Dom[14][1], $cst_error);
    $load = $call1($Js_of_ocaml_Dom[14][1], $cst_load);
    $loadend = $call1($Js_of_ocaml_Dom[14][1], $cst_loadend);
    $ReaderEvent = Vector{
      0,
      $loadstart,
      $progress,
      $abort,
      $error,
      $load,
      $loadend
    };
    $gs = function(dynamic $x) use ($call1,$caml_get_public_method) {
      return $call1($caml_get_public_method($x, 642825758, 90), $x);
    };
    $gt = $Js_of_ocaml_Js[50][1];
    $fileReader = (function(dynamic $t7, dynamic $param) {return $t7->FileReader;
     })($gt, $gs);
    $addEventListener = $Js_of_ocaml_Dom[15];
    $Js_of_ocaml_File = Vector{
      0,
      $blob_from_string,
      $blob_from_any,
      Vector{
        0,
        $document,
        $blob,
        function(dynamic $gu) {return $gu;},
        $string,
        $arrayBuffer
      },
      $ReaderEvent,
      $filename,
      $fileReader,
      $addEventListener
    };
    
    $runtime["caml_register_global"](
      23,
      $Js_of_ocaml_File,
      "Js_of_ocaml__File"
    );

  }
}