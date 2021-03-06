<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * @generated
 *
 */
namespace Rehack;

final class CamlinternalFormatBasics {
  <<__Override, __Memoize>>
  public static function get() : Vector<dynamic> {
    
    $concat_fmt = new Ref();$concat_fmtty = new Ref();$erase_rel = new Ref();
    $runtime = (\Rehack\GlobalObject::get() as dynamic)->jsoo_runtime;
    $is_int = $runtime["is_int"];
    $erase_rel->contents = (dynamic $param) : dynamic ==> {
      $rest = null as dynamic;
      $rest__0 = null as dynamic;
      $rest__1 = null as dynamic;
      $rest__10 = null as dynamic;
      $rest__11 = null as dynamic;
      $rest__12 = null as dynamic;
      $rest__13 = null as dynamic;
      $rest__2 = null as dynamic;
      $rest__3 = null as dynamic;
      $rest__4 = null as dynamic;
      $rest__5 = null as dynamic;
      $rest__6 = null as dynamic;
      $rest__7 = null as dynamic;
      $rest__8 = null as dynamic;
      $rest__9 = null as dynamic;
      $ty = null as dynamic;
      $ty1 = null as dynamic;
      if ($is_int($param)) {return 0;}
      else {
        switch($param[0]) {
          // FALLTHROUGH
          case 0:
            $rest = $param[1];
            return Vector{0, $erase_rel->contents($rest)};
          // FALLTHROUGH
          case 1:
            $rest__0 = $param[1];
            return Vector{1, $erase_rel->contents($rest__0)};
          // FALLTHROUGH
          case 2:
            $rest__1 = $param[1];
            return Vector{2, $erase_rel->contents($rest__1)};
          // FALLTHROUGH
          case 3:
            $rest__2 = $param[1];
            return Vector{3, $erase_rel->contents($rest__2)};
          // FALLTHROUGH
          case 4:
            $rest__3 = $param[1];
            return Vector{4, $erase_rel->contents($rest__3)};
          // FALLTHROUGH
          case 5:
            $rest__4 = $param[1];
            return Vector{5, $erase_rel->contents($rest__4)};
          // FALLTHROUGH
          case 6:
            $rest__5 = $param[1];
            return Vector{6, $erase_rel->contents($rest__5)};
          // FALLTHROUGH
          case 7:
            $rest__6 = $param[1];
            return Vector{7, $erase_rel->contents($rest__6)};
          // FALLTHROUGH
          case 8:
            $rest__7 = $param[2];
            $ty = $param[1];
            return Vector{8, $ty, $erase_rel->contents($rest__7)};
          // FALLTHROUGH
          case 9:
            $rest__8 = $param[3];
            $ty1 = $param[1];
            return Vector{9, $ty1, $ty1, $erase_rel->contents($rest__8)};
          // FALLTHROUGH
          case 10:
            $rest__9 = $param[1];
            return Vector{10, $erase_rel->contents($rest__9)};
          // FALLTHROUGH
          case 11:
            $rest__10 = $param[1];
            return Vector{11, $erase_rel->contents($rest__10)};
          // FALLTHROUGH
          case 12:
            $rest__11 = $param[1];
            return Vector{12, $erase_rel->contents($rest__11)};
          // FALLTHROUGH
          case 13:
            $rest__12 = $param[1];
            return Vector{13, $erase_rel->contents($rest__12)};
          // FALLTHROUGH
          default:
            $rest__13 = $param[1];
            return Vector{14, $erase_rel->contents($rest__13)};
          }
      }
    };
    $concat_fmtty->contents = (dynamic $fmtty1, dynamic $fmtty2) : dynamic ==> {
      $rest = null as dynamic;
      $rest__0 = null as dynamic;
      $rest__1 = null as dynamic;
      $rest__10 = null as dynamic;
      $rest__11 = null as dynamic;
      $rest__12 = null as dynamic;
      $rest__13 = null as dynamic;
      $rest__2 = null as dynamic;
      $rest__3 = null as dynamic;
      $rest__4 = null as dynamic;
      $rest__5 = null as dynamic;
      $rest__6 = null as dynamic;
      $rest__7 = null as dynamic;
      $rest__8 = null as dynamic;
      $rest__9 = null as dynamic;
      $ty = null as dynamic;
      $ty1 = null as dynamic;
      $ty2 = null as dynamic;
      if ($is_int($fmtty1)) {return $fmtty2;}
      else {
        switch($fmtty1[0]) {
          // FALLTHROUGH
          case 0:
            $rest = $fmtty1[1];
            return Vector{0, $concat_fmtty->contents($rest, $fmtty2)};
          // FALLTHROUGH
          case 1:
            $rest__0 = $fmtty1[1];
            return Vector{1, $concat_fmtty->contents($rest__0, $fmtty2)};
          // FALLTHROUGH
          case 2:
            $rest__1 = $fmtty1[1];
            return Vector{2, $concat_fmtty->contents($rest__1, $fmtty2)};
          // FALLTHROUGH
          case 3:
            $rest__2 = $fmtty1[1];
            return Vector{3, $concat_fmtty->contents($rest__2, $fmtty2)};
          // FALLTHROUGH
          case 4:
            $rest__3 = $fmtty1[1];
            return Vector{4, $concat_fmtty->contents($rest__3, $fmtty2)};
          // FALLTHROUGH
          case 5:
            $rest__4 = $fmtty1[1];
            return Vector{5, $concat_fmtty->contents($rest__4, $fmtty2)};
          // FALLTHROUGH
          case 6:
            $rest__5 = $fmtty1[1];
            return Vector{6, $concat_fmtty->contents($rest__5, $fmtty2)};
          // FALLTHROUGH
          case 7:
            $rest__6 = $fmtty1[1];
            return Vector{7, $concat_fmtty->contents($rest__6, $fmtty2)};
          // FALLTHROUGH
          case 8:
            $rest__7 = $fmtty1[2];
            $ty = $fmtty1[1];
            return Vector{8, $ty, $concat_fmtty->contents($rest__7, $fmtty2)};
          // FALLTHROUGH
          case 9:
            $rest__8 = $fmtty1[3];
            $ty2 = $fmtty1[2];
            $ty1 = $fmtty1[1];
            return Vector{
              9,
              $ty1,
              $ty2,
              $concat_fmtty->contents($rest__8, $fmtty2)
            };
          // FALLTHROUGH
          case 10:
            $rest__9 = $fmtty1[1];
            return Vector{10, $concat_fmtty->contents($rest__9, $fmtty2)};
          // FALLTHROUGH
          case 11:
            $rest__10 = $fmtty1[1];
            return Vector{11, $concat_fmtty->contents($rest__10, $fmtty2)};
          // FALLTHROUGH
          case 12:
            $rest__11 = $fmtty1[1];
            return Vector{12, $concat_fmtty->contents($rest__11, $fmtty2)};
          // FALLTHROUGH
          case 13:
            $rest__12 = $fmtty1[1];
            return Vector{13, $concat_fmtty->contents($rest__12, $fmtty2)};
          // FALLTHROUGH
          default:
            $rest__13 = $fmtty1[1];
            return Vector{14, $concat_fmtty->contents($rest__13, $fmtty2)};
          }
      }
    };
    $concat_fmt->contents = (dynamic $fmt1, dynamic $fmt2) : dynamic ==> {
      $arity = null as dynamic;
      $char_set = null as dynamic;
      $chr = null as dynamic;
      $counter = null as dynamic;
      $f = null as dynamic;
      $fconv = null as dynamic;
      $fmting_gen = null as dynamic;
      $fmting_lit = null as dynamic;
      $fmtty = null as dynamic;
      $fmtty__0 = null as dynamic;
      $iconv = null as dynamic;
      $iconv__0 = null as dynamic;
      $iconv__1 = null as dynamic;
      $iconv__2 = null as dynamic;
      $ign = null as dynamic;
      $pad = null as dynamic;
      $pad__0 = null as dynamic;
      $pad__1 = null as dynamic;
      $pad__2 = null as dynamic;
      $pad__3 = null as dynamic;
      $pad__4 = null as dynamic;
      $pad__5 = null as dynamic;
      $pad__6 = null as dynamic;
      $pad__7 = null as dynamic;
      $pad__8 = null as dynamic;
      $prec = null as dynamic;
      $prec__0 = null as dynamic;
      $prec__1 = null as dynamic;
      $prec__2 = null as dynamic;
      $prec__3 = null as dynamic;
      $rest = null as dynamic;
      $rest__0 = null as dynamic;
      $rest__1 = null as dynamic;
      $rest__10 = null as dynamic;
      $rest__11 = null as dynamic;
      $rest__12 = null as dynamic;
      $rest__13 = null as dynamic;
      $rest__14 = null as dynamic;
      $rest__15 = null as dynamic;
      $rest__16 = null as dynamic;
      $rest__17 = null as dynamic;
      $rest__18 = null as dynamic;
      $rest__19 = null as dynamic;
      $rest__2 = null as dynamic;
      $rest__20 = null as dynamic;
      $rest__21 = null as dynamic;
      $rest__22 = null as dynamic;
      $rest__23 = null as dynamic;
      $rest__3 = null as dynamic;
      $rest__4 = null as dynamic;
      $rest__5 = null as dynamic;
      $rest__6 = null as dynamic;
      $rest__7 = null as dynamic;
      $rest__8 = null as dynamic;
      $rest__9 = null as dynamic;
      $str = null as dynamic;
      $width_opt = null as dynamic;
      if ($is_int($fmt1)) {return $fmt2;}
      else {
        switch($fmt1[0]) {
          // FALLTHROUGH
          case 0:
            $rest = $fmt1[1];
            return Vector{0, $concat_fmt->contents($rest, $fmt2)};
          // FALLTHROUGH
          case 1:
            $rest__0 = $fmt1[1];
            return Vector{1, $concat_fmt->contents($rest__0, $fmt2)};
          // FALLTHROUGH
          case 2:
            $rest__1 = $fmt1[2];
            $pad = $fmt1[1];
            return Vector{2, $pad, $concat_fmt->contents($rest__1, $fmt2)};
          // FALLTHROUGH
          case 3:
            $rest__2 = $fmt1[2];
            $pad__0 = $fmt1[1];
            return Vector{3, $pad__0, $concat_fmt->contents($rest__2, $fmt2)};
          // FALLTHROUGH
          case 4:
            $rest__3 = $fmt1[4];
            $prec = $fmt1[3];
            $pad__1 = $fmt1[2];
            $iconv = $fmt1[1];
            return Vector{
              4,
              $iconv,
              $pad__1,
              $prec,
              $concat_fmt->contents($rest__3, $fmt2)
            };
          // FALLTHROUGH
          case 5:
            $rest__4 = $fmt1[4];
            $prec__0 = $fmt1[3];
            $pad__2 = $fmt1[2];
            $iconv__0 = $fmt1[1];
            return Vector{
              5,
              $iconv__0,
              $pad__2,
              $prec__0,
              $concat_fmt->contents($rest__4, $fmt2)
            };
          // FALLTHROUGH
          case 6:
            $rest__5 = $fmt1[4];
            $prec__1 = $fmt1[3];
            $pad__3 = $fmt1[2];
            $iconv__1 = $fmt1[1];
            return Vector{
              6,
              $iconv__1,
              $pad__3,
              $prec__1,
              $concat_fmt->contents($rest__5, $fmt2)
            };
          // FALLTHROUGH
          case 7:
            $rest__6 = $fmt1[4];
            $prec__2 = $fmt1[3];
            $pad__4 = $fmt1[2];
            $iconv__2 = $fmt1[1];
            return Vector{
              7,
              $iconv__2,
              $pad__4,
              $prec__2,
              $concat_fmt->contents($rest__6, $fmt2)
            };
          // FALLTHROUGH
          case 8:
            $rest__7 = $fmt1[4];
            $prec__3 = $fmt1[3];
            $pad__5 = $fmt1[2];
            $fconv = $fmt1[1];
            return Vector{
              8,
              $fconv,
              $pad__5,
              $prec__3,
              $concat_fmt->contents($rest__7, $fmt2)
            };
          // FALLTHROUGH
          case 9:
            $rest__8 = $fmt1[2];
            $pad__6 = $fmt1[1];
            return Vector{9, $pad__6, $concat_fmt->contents($rest__8, $fmt2)};
          // FALLTHROUGH
          case 10:
            $rest__9 = $fmt1[1];
            return Vector{10, $concat_fmt->contents($rest__9, $fmt2)};
          // FALLTHROUGH
          case 11:
            $rest__10 = $fmt1[2];
            $str = $fmt1[1];
            return Vector{11, $str, $concat_fmt->contents($rest__10, $fmt2)};
          // FALLTHROUGH
          case 12:
            $rest__11 = $fmt1[2];
            $chr = $fmt1[1];
            return Vector{12, $chr, $concat_fmt->contents($rest__11, $fmt2)};
          // FALLTHROUGH
          case 13:
            $rest__12 = $fmt1[3];
            $fmtty = $fmt1[2];
            $pad__7 = $fmt1[1];
            return Vector{
              13,
              $pad__7,
              $fmtty,
              $concat_fmt->contents($rest__12, $fmt2)
            };
          // FALLTHROUGH
          case 14:
            $rest__13 = $fmt1[3];
            $fmtty__0 = $fmt1[2];
            $pad__8 = $fmt1[1];
            return Vector{
              14,
              $pad__8,
              $fmtty__0,
              $concat_fmt->contents($rest__13, $fmt2)
            };
          // FALLTHROUGH
          case 15:
            $rest__14 = $fmt1[1];
            return Vector{15, $concat_fmt->contents($rest__14, $fmt2)};
          // FALLTHROUGH
          case 16:
            $rest__15 = $fmt1[1];
            return Vector{16, $concat_fmt->contents($rest__15, $fmt2)};
          // FALLTHROUGH
          case 17:
            $rest__16 = $fmt1[2];
            $fmting_lit = $fmt1[1];
            return Vector{
              17,
              $fmting_lit,
              $concat_fmt->contents($rest__16, $fmt2)
            };
          // FALLTHROUGH
          case 18:
            $rest__17 = $fmt1[2];
            $fmting_gen = $fmt1[1];
            return Vector{
              18,
              $fmting_gen,
              $concat_fmt->contents($rest__17, $fmt2)
            };
          // FALLTHROUGH
          case 19:
            $rest__18 = $fmt1[1];
            return Vector{19, $concat_fmt->contents($rest__18, $fmt2)};
          // FALLTHROUGH
          case 20:
            $rest__19 = $fmt1[3];
            $char_set = $fmt1[2];
            $width_opt = $fmt1[1];
            return Vector{
              20,
              $width_opt,
              $char_set,
              $concat_fmt->contents($rest__19, $fmt2)
            };
          // FALLTHROUGH
          case 21:
            $rest__20 = $fmt1[2];
            $counter = $fmt1[1];
            return Vector{
              21,
              $counter,
              $concat_fmt->contents($rest__20, $fmt2)
            };
          // FALLTHROUGH
          case 22:
            $rest__21 = $fmt1[1];
            return Vector{22, $concat_fmt->contents($rest__21, $fmt2)};
          // FALLTHROUGH
          case 23:
            $rest__22 = $fmt1[2];
            $ign = $fmt1[1];
            return Vector{23, $ign, $concat_fmt->contents($rest__22, $fmt2)};
          // FALLTHROUGH
          default:
            $rest__23 = $fmt1[3];
            $f = $fmt1[2];
            $arity = $fmt1[1];
            return Vector{
              24,
              $arity,
              $f,
              $concat_fmt->contents($rest__23, $fmt2)
            };
          }
      }
    };
    $CamlinternalFormatBasics = Vector{
      0,
      $concat_fmtty->contents,
      $erase_rel->contents,
      $concat_fmt->contents
    } as dynamic;
    
    return($CamlinternalFormatBasics);

  }
  public static function concat_fmtty(dynamic $fmtty1, dynamic $fmtty2): dynamic {
    return static::syncCall(__FUNCTION__, 1, $fmtty1, $fmtty2);
  }
  public static function erase_rel(dynamic $param): dynamic {
    return static::syncCall(__FUNCTION__, 2, $param);
  }
  public static function concat_fmt(dynamic $fmt1, dynamic $fmt2): dynamic {
    return static::syncCall(__FUNCTION__, 3, $fmt1, $fmt2);
  }

}
/* Hashing disabled */
