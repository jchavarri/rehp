<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * @generated
 *
 */
namespace Rehack;

final class Calls__Macros {
  <<__Override, __Memoize>>
  public static function get() : Vector<dynamic> {
    
    $runtime = (\Rehack\GlobalObject::get() as dynamic)->jsoo_runtime;
    $string = $runtime["caml_new_string"];
    $cst_hello = $string("hello");
    $cst_hi = $string("hi");
    $cst_sideEffectToInlinedArg = $string("sideEffectToInlinedArg");
    $cst_sideEffectToArgUsedToTest = $string("sideEffectToArgUsedToTest");
    $null__0 = null;
    $inlinesMacros = varray[  $runtime["outerOuter"](
      $runtime["outer"]($runtime["inner"](100))
    )  "convertedToPlatformString",
  null,
  $string("converted to nullable")];
    $a_ = $runtime["caml_js_anything"]($cst_hello);
    $result = $a_ === null ? 0 : Vector {0, $a_};
    $e_ = $runtime["outer"]($runtime["inner"]($cst_hi));
    $d_ = $runtime["outerOuter"](
      $runtime["outer"]($runtime["inner"]($cst_hi))
    );
    $nestedsResult = $d_ +
$runtime["outerOuter"]($e_);
    $b_ = $runtime["side_effect_to_inject_into_nested_macros"](0);
    $g_ = $runtime["outer"]($runtime["inner"]($b_));
    $f_ = $runtime["outerOuter"]($runtime["outer"]($runtime["inner"]($b_)));
    $nestedResult2 = $f_ +
$runtime["outerOuter"]($g_);
    $c_ = 100;
    $i_ = $runtime["outer"]($runtime["inner"]($c_));
    $h_ = $runtime["outerOuter"]($runtime["outer"]($runtime["inner"]($c_)));
    $nestedResult3 = $h_ +
$runtime["outerOuter"]($i_);
    $includeMe = (dynamic $param) : dynamic ==> {return 0;};
    $boolTest1 = (int) SomeClass::hereIsSomeBools(! ! 1, ! ! 0);
    $boolTest2 = (int) SomeClass::hereIsSomeBools(! ! 0, ! ! 1);
    
    ($runtime["foo"](0));
    
    $myDiv = <div className={"two"}>
</div>;
    
    $runtime["side_effect_to_inject_into_nested_macros"]($cst_sideEffectToInlinedArg);
    
    $myDiv2 = <div >
</div>;
    
    $runtime["side_effect_to_inject_into_nested_macros"]($cst_sideEffectToArgUsedToTest);
    
    $myDiv3 = <div >
</div>;
    $Calls_Macros = Vector{
      0,
      $null__0,
      $inlinesMacros,
      $result,
      $nestedsResult,
      $nestedResult2,
      $nestedResult3,
      $includeMe,
      1,
      0,
      $boolTest1,
      $boolTest2,
      $myDiv,
      $myDiv2,
      $myDiv3
    } as dynamic;
    
    return($Calls_Macros);

  }
  public static function includeMe(dynamic $param): dynamic {
    return static::syncCall(__FUNCTION__, 7, $param);
  }

}
/* Hashing disabled */
