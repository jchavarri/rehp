<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * @generated
 *
 */
namespace Rehack;

final class List_ {
  <<__Override, __Memoize>>
  public static function get() : Vector<dynamic> {
    $joo_global_object = \Rehack\GlobalObject::get() as dynamic;
    
    $a_ = new Ref();
    $combine = new Ref();
    $flatten = new Ref();
    $fold_right = new Ref();
    $fold_right2 = new Ref();
    $init_aux = new Ref();
    $map = new Ref();
    $map2 = new Ref();
    $merge = new Ref();
    $remove_assoc = new Ref();
    $remove_assq = new Ref();
    $split = new Ref();
    $runtime = $joo_global_object->jsoo_runtime;
    $call1 = $runtime["caml_call1"];
    $call2 = $runtime["caml_call2"];
    $call3 = $runtime["caml_call3"];
    $caml_compare = $runtime["caml_compare"];
    $string = $runtime["caml_new_string"];
    $caml_wrap_thrown_exception = $runtime["caml_wrap_thrown_exception"];
    $right_shift_32 = $runtime["right_shift_32"];
    $cst_List_map2 = $string("List.map2");
    $cst_List_iter2 = $string("List.iter2");
    $cst_List_fold_left2 = $string("List.fold_left2");
    $cst_List_fold_right2 = $string("List.fold_right2");
    $cst_List_for_all2 = $string("List.for_all2");
    $cst_List_exists2 = $string("List.exists2");
    $cst_List_combine = $string("List.combine");
    $cst_List_rev_map2 = $string("List.rev_map2");
    $cst_List_init = $string("List.init");
    $cst_List_nth__0 = $string("List.nth");
    $cst_nth = $string("nth");
    $cst_List_nth = $string("List.nth");
    $cst_tl = $string("tl");
    $cst_hd = $string("hd");
    $Pervasives =  Pervasives::get ();
    $Not_found =  Not_found::get ();
    $Assert_failure =  Assert_failure::get ();
    $c_ = Vector{0, 0, 0};
    $d_ = Vector{0, $string("list.ml"), 262, 11};
    $length_aux = (dynamic $len, dynamic $param) ==> {
      $len__0 = $len;
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $param__1 = $param__0[2];
          $len__1 = (int) ($len__0 + 1);
          $len__0 = $len__1;
          $param__0 = $param__1;
          continue;
        }
        return $len__0;
      }
    };
    $length = (dynamic $l) ==> {return $length_aux(0, $l);};
    $cons = (dynamic $a, dynamic $l) ==> {return Vector{0, $a, $l};};
    $hd = (dynamic $param) ==> {
      if ($param) {$a = $param[1];return $a;}
      return $call1($Pervasives[2], $cst_hd);
    };
    $tl = (dynamic $param) ==> {
      if ($param) {$l = $param[2];return $l;}
      return $call1($Pervasives[2], $cst_tl);
    };
    $nth = (dynamic $l, dynamic $n) ==> {
      if (0 <= $n) {
        $nth_aux = (dynamic $l, dynamic $n) ==> {
          $l__0 = $l;
          $n__0 = $n;
          for (;;) {
            if ($l__0) {
              $l__1 = $l__0[2];
              $a = $l__0[1];
              if (0 === $n__0) {return $a;}
              $n__1 = (int) ($n__0 + -1);
              $l__0 = $l__1;
              $n__0 = $n__1;
              continue;
            }
            return $call1($Pervasives[2], $cst_nth);
          }
        };
        return $nth_aux($l, $n);
      }
      return $call1($Pervasives[1], $cst_List_nth);
    };
    $nth_opt = (dynamic $l, dynamic $n) ==> {
      if (0 <= $n) {
        $nth_aux = (dynamic $l, dynamic $n) ==> {
          $l__0 = $l;
          $n__0 = $n;
          for (;;) {
            if ($l__0) {
              $l__1 = $l__0[2];
              $a = $l__0[1];
              if (0 === $n__0) {return Vector{0, $a};}
              $n__1 = (int) ($n__0 + -1);
              $l__0 = $l__1;
              $n__0 = $n__1;
              continue;
            }
            return 0;
          }
        };
        return $nth_aux($l, $n);
      }
      return $call1($Pervasives[1], $cst_List_nth__0);
    };
    $append = $Pervasives[25];
    $rev_append = (dynamic $l1, dynamic $l2) ==> {
      $l1__0 = $l1;
      $l2__0 = $l2;
      for (;;) {
        if ($l1__0) {
          $l1__1 = $l1__0[2];
          $a = $l1__0[1];
          $l2__1 = Vector{0, $a, $l2__0};
          $l1__0 = $l1__1;
          $l2__0 = $l2__1;
          continue;
        }
        return $l2__0;
      }
    };
    $rev = (dynamic $l) ==> {return $rev_append($l, 0);};
    $init_tailrec_aux = (dynamic $acc, dynamic $i, dynamic $n, dynamic $f) ==> {
      $acc__0 = $acc;
      $i__0 = $i;
      for (;;) {
        if ($n <= $i__0) {return $acc__0;}
        $i__1 = (int) ($i__0 + 1);
        $acc__1 = Vector{0, $call1($f, $i__0), $acc__0};
        $acc__0 = $acc__1;
        $i__0 = $i__1;
        continue;
      }
    };
    $init_aux->contents = (dynamic $i, dynamic $n, dynamic $f) ==> {
      if ($n <= $i) {return 0;}
      $r = $call1($f, $i);
      return Vector{0, $r, $init_aux->contents((int) ($i + 1), $n, $f)};
    };
    $init = (dynamic $len, dynamic $f) ==> {
      return 0 <= $len
        ? 10000 < $len
         ? $rev($init_tailrec_aux(0, 0, $len, $f))
         : ($init_aux->contents(0, $len, $f))
        : ($call1($Pervasives[1], $cst_List_init));
    };
    $flatten->contents = (dynamic $param) ==> {
      if ($param) {
        $r = $param[2];
        $l = $param[1];
        $B_ = $flatten->contents($r);
        return $call2($Pervasives[25], $l, $B_);
      }
      return 0;
    };
    $map->contents = (dynamic $f, dynamic $param) ==> {
      if ($param) {
        $l = $param[2];
        $a = $param[1];
        $r = $call1($f, $a);
        return Vector{0, $r, $map->contents($f, $l)};
      }
      return 0;
    };
    $a_->contents = (dynamic $i, dynamic $f, dynamic $param) ==> {
      if ($param) {
        $l = $param[2];
        $a = $param[1];
        $r = $call2($f, $i, $a);
        return Vector{0, $r, $a_->contents((int) ($i + 1), $f, $l)};
      }
      return 0;
    };
    $mapi = (dynamic $f, dynamic $l) ==> {return $a_->contents(0, $f, $l);};
    $rev_map = (dynamic $f, dynamic $l) ==> {
      $rmap_f = (dynamic $accu, dynamic $param) ==> {
        $accu__0 = $accu;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $param__1 = $param__0[2];
            $a = $param__0[1];
            $accu__1 = Vector{0, $call1($f, $a), $accu__0};
            $accu__0 = $accu__1;
            $param__0 = $param__1;
            continue;
          }
          return $accu__0;
        }
      };
      return $rmap_f(0, $l);
    };
    $iter = (dynamic $f, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $param__1 = $param__0[2];
          $a = $param__0[1];
          $call1($f, $a);
          $param__0 = $param__1;
          continue;
        }
        return 0;
      }
    };
    $b_ = (dynamic $i, dynamic $f, dynamic $param) ==> {
      $i__0 = $i;
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $param__1 = $param__0[2];
          $a = $param__0[1];
          $call2($f, $i__0, $a);
          $i__1 = (int) ($i__0 + 1);
          $i__0 = $i__1;
          $param__0 = $param__1;
          continue;
        }
        return 0;
      }
    };
    $iteri = (dynamic $f, dynamic $l) ==> {return $b_(0, $f, $l);};
    $fold_left = (dynamic $f, dynamic $accu, dynamic $l) ==> {
      $accu__0 = $accu;
      $l__0 = $l;
      for (;;) {
        if ($l__0) {
          $l__1 = $l__0[2];
          $a = $l__0[1];
          $accu__1 = $call2($f, $accu__0, $a);
          $accu__0 = $accu__1;
          $l__0 = $l__1;
          continue;
        }
        return $accu__0;
      }
    };
    $fold_right->contents = (dynamic $f, dynamic $l, dynamic $accu) ==> {
      if ($l) {
        $l__0 = $l[2];
        $a = $l[1];
        return $call2($f, $a, $fold_right->contents($f, $l__0, $accu));
      }
      return $accu;
    };
    $map2->contents = (dynamic $f, dynamic $l1, dynamic $l2) ==> {
      if ($l1) {
        if ($l2) {
          $l2__0 = $l2[2];
          $a2 = $l2[1];
          $l1__0 = $l1[2];
          $a1 = $l1[1];
          $r = $call2($f, $a1, $a2);
          return Vector{0, $r, $map2->contents($f, $l1__0, $l2__0)};
        }
      }
      else {if (! $l2) {return 0;}}
      return $call1($Pervasives[1], $cst_List_map2);
    };
    $rev_map2 = (dynamic $f, dynamic $l1, dynamic $l2) ==> {
      $rmap2_f = (dynamic $accu, dynamic $l1, dynamic $l2) ==> {
        $accu__0 = $accu;
        $l1__0 = $l1;
        $l2__0 = $l2;
        for (;;) {
          if ($l1__0) {
            if ($l2__0) {
              $l2__1 = $l2__0[2];
              $a2 = $l2__0[1];
              $l1__1 = $l1__0[2];
              $a1 = $l1__0[1];
              $accu__1 = Vector{0, $call2($f, $a1, $a2), $accu__0};
              $accu__0 = $accu__1;
              $l1__0 = $l1__1;
              $l2__0 = $l2__1;
              continue;
            }
          }
          else {if (! $l2__0) {return $accu__0;}}
          return $call1($Pervasives[1], $cst_List_rev_map2);
        }
      };
      return $rmap2_f(0, $l1, $l2);
    };
    $iter2 = (dynamic $f, dynamic $l1, dynamic $l2) ==> {
      $l1__0 = $l1;
      $l2__0 = $l2;
      for (;;) {
        if ($l1__0) {
          if ($l2__0) {
            $l2__1 = $l2__0[2];
            $a2 = $l2__0[1];
            $l1__1 = $l1__0[2];
            $a1 = $l1__0[1];
            $call2($f, $a1, $a2);
            $l1__0 = $l1__1;
            $l2__0 = $l2__1;
            continue;
          }
        }
        else {if (! $l2__0) {return 0;}}
        return $call1($Pervasives[1], $cst_List_iter2);
      }
    };
    $fold_left2 = (dynamic $f, dynamic $accu, dynamic $l1, dynamic $l2) ==> {
      $accu__0 = $accu;
      $l1__0 = $l1;
      $l2__0 = $l2;
      for (;;) {
        if ($l1__0) {
          if ($l2__0) {
            $l2__1 = $l2__0[2];
            $a2 = $l2__0[1];
            $l1__1 = $l1__0[2];
            $a1 = $l1__0[1];
            $accu__1 = $call3($f, $accu__0, $a1, $a2);
            $accu__0 = $accu__1;
            $l1__0 = $l1__1;
            $l2__0 = $l2__1;
            continue;
          }
        }
        else {if (! $l2__0) {return $accu__0;}}
        return $call1($Pervasives[1], $cst_List_fold_left2);
      }
    };
    $fold_right2->contents = 
    (dynamic $f, dynamic $l1, dynamic $l2, dynamic $accu) ==> {
      if ($l1) {
        if ($l2) {
          $l2__0 = $l2[2];
          $a2 = $l2[1];
          $l1__0 = $l1[2];
          $a1 = $l1[1];
          return $call3(
            $f,
            $a1,
            $a2,
            $fold_right2->contents($f, $l1__0, $l2__0, $accu)
          );
        }
      }
      else {if (! $l2) {return $accu;}}
      return $call1($Pervasives[1], $cst_List_fold_right2);
    };
    $for_all = (dynamic $p, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $a = $param__0[1];
          $A_ = $call1($p, $a);
          if ($A_) {$param__0 = $l;continue;}
          return $A_;
        }
        return 1;
      }
    };
    $exists = (dynamic $p, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $a = $param__0[1];
          $z_ = $call1($p, $a);
          if ($z_) {return $z_;}
          $param__0 = $l;
          continue;
        }
        return 0;
      }
    };
    $for_all2 = (dynamic $p, dynamic $l1, dynamic $l2) ==> {
      $l1__0 = $l1;
      $l2__0 = $l2;
      for (;;) {
        if ($l1__0) {
          if ($l2__0) {
            $l2__1 = $l2__0[2];
            $a2 = $l2__0[1];
            $l1__1 = $l1__0[2];
            $a1 = $l1__0[1];
            $y_ = $call2($p, $a1, $a2);
            if ($y_) {$l1__0 = $l1__1;$l2__0 = $l2__1;continue;}
            return $y_;
          }
        }
        else {if (! $l2__0) {return 1;}}
        return $call1($Pervasives[1], $cst_List_for_all2);
      }
    };
    $exists2 = (dynamic $p, dynamic $l1, dynamic $l2) ==> {
      $l1__0 = $l1;
      $l2__0 = $l2;
      for (;;) {
        if ($l1__0) {
          if ($l2__0) {
            $l2__1 = $l2__0[2];
            $a2 = $l2__0[1];
            $l1__1 = $l1__0[2];
            $a1 = $l1__0[1];
            $x_ = $call2($p, $a1, $a2);
            if ($x_) {return $x_;}
            $l1__0 = $l1__1;
            $l2__0 = $l2__1;
            continue;
          }
        }
        else {if (! $l2__0) {return 0;}}
        return $call1($Pervasives[1], $cst_List_exists2);
      }
    };
    $mem = (dynamic $x, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $a = $param__0[1];
          $w_ = 0 === $caml_compare($a, $x) ? 1 : (0);
          if ($w_) {return $w_;}
          $param__0 = $l;
          continue;
        }
        return 0;
      }
    };
    $memq = (dynamic $x, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $a = $param__0[1];
          $v_ = $a === $x ? 1 : (0);
          if ($v_) {return $v_;}
          $param__0 = $l;
          continue;
        }
        return 0;
      }
    };
    $assoc = (dynamic $x, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $match = $param__0[1];
          $b = $match[2];
          $a = $match[1];
          if (0 === $caml_compare($a, $x)) {return $b;}
          $param__0 = $l;
          continue;
        }
        throw $caml_wrap_thrown_exception($Not_found) as \Throwable;
      }
    };
    $assoc_opt = (dynamic $x, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $match = $param__0[1];
          $b = $match[2];
          $a = $match[1];
          if (0 === $caml_compare($a, $x)) {return Vector{0, $b};}
          $param__0 = $l;
          continue;
        }
        return 0;
      }
    };
    $assq = (dynamic $x, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $match = $param__0[1];
          $b = $match[2];
          $a = $match[1];
          if ($a === $x) {return $b;}
          $param__0 = $l;
          continue;
        }
        throw $caml_wrap_thrown_exception($Not_found) as \Throwable;
      }
    };
    $assq_opt = (dynamic $x, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $match = $param__0[1];
          $b = $match[2];
          $a = $match[1];
          if ($a === $x) {return Vector{0, $b};}
          $param__0 = $l;
          continue;
        }
        return 0;
      }
    };
    $mem_assoc = (dynamic $x, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $match = $param__0[1];
          $a = $match[1];
          $u_ = 0 === $caml_compare($a, $x) ? 1 : (0);
          if ($u_) {return $u_;}
          $param__0 = $l;
          continue;
        }
        return 0;
      }
    };
    $mem_assq = (dynamic $x, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $match = $param__0[1];
          $a = $match[1];
          $t_ = $a === $x ? 1 : (0);
          if ($t_) {return $t_;}
          $param__0 = $l;
          continue;
        }
        return 0;
      }
    };
    $remove_assoc->contents = (dynamic $x, dynamic $param) ==> {
      if ($param) {
        $l = $param[2];
        $pair = $param[1];
        $a = $pair[1];
        return 0 === $caml_compare($a, $x)
          ? $l
          : (Vector{0, $pair, $remove_assoc->contents($x, $l)});
      }
      return 0;
    };
    $remove_assq->contents = (dynamic $x, dynamic $param) ==> {
      if ($param) {
        $l = $param[2];
        $pair = $param[1];
        $a = $pair[1];
        return $a === $x
          ? $l
          : (Vector{0, $pair, $remove_assq->contents($x, $l)});
      }
      return 0;
    };
    $find = (dynamic $p, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $x = $param__0[1];
          if ($call1($p, $x)) {return $x;}
          $param__0 = $l;
          continue;
        }
        throw $caml_wrap_thrown_exception($Not_found) as \Throwable;
      }
    };
    $find_opt = (dynamic $p, dynamic $param) ==> {
      $param__0 = $param;
      for (;;) {
        if ($param__0) {
          $l = $param__0[2];
          $x = $param__0[1];
          if ($call1($p, $x)) {return Vector{0, $x};}
          $param__0 = $l;
          continue;
        }
        return 0;
      }
    };
    $find_all = (dynamic $p) ==> {
      $find = (dynamic $accu, dynamic $param) ==> {
        $accu__0 = $accu;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $l = $param__0[2];
            $x = $param__0[1];
            if ($call1($p, $x)) {
              $accu__1 = Vector{0, $x, $accu__0};
              $accu__0 = $accu__1;
              $param__0 = $l;
              continue;
            }
            $param__0 = $l;
            continue;
          }
          return $rev($accu__0);
        }
      };
      $r_ = 0;
      return (dynamic $s_) ==> {return $find($r_, $s_);};
    };
    $partition = (dynamic $p, dynamic $l) ==> {
      $part = (dynamic $yes, dynamic $no, dynamic $param) ==> {
        $yes__0 = $yes;
        $no__0 = $no;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $l = $param__0[2];
            $x = $param__0[1];
            if ($call1($p, $x)) {
              $yes__1 = Vector{0, $x, $yes__0};
              $yes__0 = $yes__1;
              $param__0 = $l;
              continue;
            }
            $no__1 = Vector{0, $x, $no__0};
            $no__0 = $no__1;
            $param__0 = $l;
            continue;
          }
          $q_ = $rev($no__0);
          return Vector{0, $rev($yes__0), $q_};
        }
      };
      return $part(0, 0, $l);
    };
    $split->contents = (dynamic $param) ==> {
      if ($param) {
        $l = $param[2];
        $match = $param[1];
        $y = $match[2];
        $x = $match[1];
        $match__0 = $split->contents($l);
        $ry = $match__0[2];
        $rx = $match__0[1];
        return Vector{0, Vector{0, $x, $rx}, Vector{0, $y, $ry}};
      }
      return $c_;
    };
    $combine->contents = (dynamic $l1, dynamic $l2) ==> {
      if ($l1) {
        if ($l2) {
          $l2__0 = $l2[2];
          $a2 = $l2[1];
          $l1__0 = $l1[2];
          $a1 = $l1[1];
          return Vector{
            0,
            Vector{0, $a1, $a2},
            $combine->contents($l1__0, $l2__0)
          };
        }
      }
      else {if (! $l2) {return 0;}}
      return $call1($Pervasives[1], $cst_List_combine);
    };
    $merge->contents = (dynamic $cmp, dynamic $l1, dynamic $match) ==> {
      if ($l1) {
        if ($match) {
          $t2 = $match[2];
          $h2 = $match[1];
          $t1 = $l1[2];
          $h1 = $l1[1];
          return 0 < $call2($cmp, $h1, $h2)
            ? Vector{0, $h2, $merge->contents($cmp, $l1, $t2)}
            : (Vector{0, $h1, $merge->contents($cmp, $t1, $match)});
        }
        return $l1;
      }
      return $match;
    };
    $chop = (dynamic $k, dynamic $l) ==> {
      $k__0 = $k;
      $l__0 = $l;
      for (;;) {
        if (0 === $k__0) {return $l__0;}
        if ($l__0) {
          $l__1 = $l__0[2];
          $k__1 = (int) ($k__0 + -1);
          $k__0 = $k__1;
          $l__0 = $l__1;
          continue;
        }
        throw $caml_wrap_thrown_exception(Vector{0, $Assert_failure, $d_}) as \Throwable;
      }
    };
    $stable_sort = (dynamic $cmp, dynamic $l) ==> {
      $rev_sort = new Ref();
      $rev_merge = (dynamic $l1, dynamic $l2, dynamic $accu) ==> {
        $l1__0 = $l1;
        $l2__0 = $l2;
        $accu__0 = $accu;
        for (;;) {
          if ($l1__0) {
            if ($l2__0) {
              $t2 = $l2__0[2];
              $h2 = $l2__0[1];
              $t1 = $l1__0[2];
              $h1 = $l1__0[1];
              if (0 < $call2($cmp, $h1, $h2)) {
                $accu__1 = Vector{0, $h2, $accu__0};
                $l2__0 = $t2;
                $accu__0 = $accu__1;
                continue;
              }
              $accu__2 = Vector{0, $h1, $accu__0};
              $l1__0 = $t1;
              $accu__0 = $accu__2;
              continue;
            }
            return $rev_append($l1__0, $accu__0);
          }
          return $rev_append($l2__0, $accu__0);
        }
      };
      $rev_merge_rev = (dynamic $l1, dynamic $l2, dynamic $accu) ==> {
        $l1__0 = $l1;
        $l2__0 = $l2;
        $accu__0 = $accu;
        for (;;) {
          if ($l1__0) {
            if ($l2__0) {
              $t2 = $l2__0[2];
              $h2 = $l2__0[1];
              $t1 = $l1__0[2];
              $h1 = $l1__0[1];
              if (0 < $call2($cmp, $h1, $h2)) {
                $accu__1 = Vector{0, $h1, $accu__0};
                $l1__0 = $t1;
                $accu__0 = $accu__1;
                continue;
              }
              $accu__2 = Vector{0, $h2, $accu__0};
              $l2__0 = $t2;
              $accu__0 = $accu__2;
              continue;
            }
            return $rev_append($l1__0, $accu__0);
          }
          return $rev_append($l2__0, $accu__0);
        }
      };
      $sort = (dynamic $n, dynamic $l) ==> {
        if (2 === $n) {
          if ($l) {
            $n_ = $l[2];
            if ($n_) {
              $x2 = $n_[1];
              $x1 = $l[1];
              return 0 < $call2($cmp, $x1, $x2)
                ? Vector{0, $x2, Vector{0, $x1, 0}}
                : (Vector{0, $x1, Vector{0, $x2, 0}});
            }
          }
        }
        else {
          if (3 === $n) {
            if ($l) {
              $o_ = $l[2];
              if ($o_) {
                $p_ = $o_[2];
                if ($p_) {
                  $x3 = $p_[1];
                  $x2__0 = $o_[1];
                  $x1__0 = $l[1];
                  return 0 < $call2($cmp, $x1__0, $x2__0)
                    ? 0 < $call2($cmp, $x1__0, $x3)
                     ? 0 < $call2($cmp, $x2__0, $x3)
                      ? Vector{0, $x3, Vector{0, $x2__0, Vector{0, $x1__0, 0}}}
                      : (Vector{0, $x2__0, Vector{0, $x3, Vector{0, $x1__0, 0}}})
                     : (Vector{0, $x2__0, Vector{0, $x1__0, Vector{0, $x3, 0}}})
                    : (0 < $call2($cmp, $x2__0, $x3)
                     ? 0 < $call2($cmp, $x1__0, $x3)
                      ? Vector{0, $x3, Vector{0, $x1__0, Vector{0, $x2__0, 0}}}
                      : (Vector{0, $x1__0, Vector{0, $x3, Vector{0, $x2__0, 0}}})
                     : (Vector{0, $x1__0, Vector{0, $x2__0, Vector{0, $x3, 0}}}));
                }
              }
            }
          }
        }
        $n1 = $right_shift_32($n, 1);
        $n2 = (int) ($n - $n1);
        $l2 = $chop($n1, $l);
        $s1 = $rev_sort->contents($n1, $l);
        $s2 = $rev_sort->contents($n2, $l2);
        return $rev_merge_rev($s1, $s2, 0);
      };
      $rev_sort->contents = (dynamic $n, dynamic $l) ==> {
        if (2 === $n) {
          if ($l) {
            $k_ = $l[2];
            if ($k_) {
              $x2 = $k_[1];
              $x1 = $l[1];
              return 0 < $call2($cmp, $x1, $x2)
                ? Vector{0, $x1, Vector{0, $x2, 0}}
                : (Vector{0, $x2, Vector{0, $x1, 0}});
            }
          }
        }
        else {
          if (3 === $n) {
            if ($l) {
              $l_ = $l[2];
              if ($l_) {
                $m_ = $l_[2];
                if ($m_) {
                  $x3 = $m_[1];
                  $x2__0 = $l_[1];
                  $x1__0 = $l[1];
                  return 0 < $call2($cmp, $x1__0, $x2__0)
                    ? 0 < $call2($cmp, $x2__0, $x3)
                     ? Vector{0, $x1__0, Vector{0, $x2__0, Vector{0, $x3, 0}}}
                     : (0 < $call2($cmp, $x1__0, $x3)
                      ? Vector{0, $x1__0, Vector{0, $x3, Vector{0, $x2__0, 0}}}
                      : (Vector{0, $x3, Vector{0, $x1__0, Vector{0, $x2__0, 0}}}))
                    : (0 < $call2($cmp, $x1__0, $x3)
                     ? Vector{0, $x2__0, Vector{0, $x1__0, Vector{0, $x3, 0}}}
                     : (0 < $call2($cmp, $x2__0, $x3)
                      ? Vector{0, $x2__0, Vector{0, $x3, Vector{0, $x1__0, 0}}}
                      : (Vector{0, $x3, Vector{0, $x2__0, Vector{0, $x1__0, 0}}})));
                }
              }
            }
          }
        }
        $n1 = $right_shift_32($n, 1);
        $n2 = (int) ($n - $n1);
        $l2 = $chop($n1, $l);
        $s1 = $sort($n1, $l);
        $s2 = $sort($n2, $l2);
        return $rev_merge($s1, $s2, 0);
      };
      $len = $length($l);
      return 2 <= $len ? $sort($len, $l) : ($l);
    };
    $sort_uniq = (dynamic $cmp, dynamic $l) ==> {
      $rev_sort = new Ref();
      $rev_merge = (dynamic $l1, dynamic $l2, dynamic $accu) ==> {
        $l1__0 = $l1;
        $l2__0 = $l2;
        $accu__0 = $accu;
        for (;;) {
          if ($l1__0) {
            if ($l2__0) {
              $t2 = $l2__0[2];
              $h2 = $l2__0[1];
              $t1 = $l1__0[2];
              $h1 = $l1__0[1];
              $c = $call2($cmp, $h1, $h2);
              if (0 === $c) {
                $accu__1 = Vector{0, $h1, $accu__0};
                $l1__0 = $t1;
                $l2__0 = $t2;
                $accu__0 = $accu__1;
                continue;
              }
              if (0 <= $c) {
                $accu__2 = Vector{0, $h2, $accu__0};
                $l2__0 = $t2;
                $accu__0 = $accu__2;
                continue;
              }
              $accu__3 = Vector{0, $h1, $accu__0};
              $l1__0 = $t1;
              $accu__0 = $accu__3;
              continue;
            }
            return $rev_append($l1__0, $accu__0);
          }
          return $rev_append($l2__0, $accu__0);
        }
      };
      $rev_merge_rev = (dynamic $l1, dynamic $l2, dynamic $accu) ==> {
        $l1__0 = $l1;
        $l2__0 = $l2;
        $accu__0 = $accu;
        for (;;) {
          if ($l1__0) {
            if ($l2__0) {
              $t2 = $l2__0[2];
              $h2 = $l2__0[1];
              $t1 = $l1__0[2];
              $h1 = $l1__0[1];
              $c = $call2($cmp, $h1, $h2);
              if (0 === $c) {
                $accu__1 = Vector{0, $h1, $accu__0};
                $l1__0 = $t1;
                $l2__0 = $t2;
                $accu__0 = $accu__1;
                continue;
              }
              if (0 < $c) {
                $accu__2 = Vector{0, $h1, $accu__0};
                $l1__0 = $t1;
                $accu__0 = $accu__2;
                continue;
              }
              $accu__3 = Vector{0, $h2, $accu__0};
              $l2__0 = $t2;
              $accu__0 = $accu__3;
              continue;
            }
            return $rev_append($l1__0, $accu__0);
          }
          return $rev_append($l2__0, $accu__0);
        }
      };
      $sort = (dynamic $n, dynamic $l) ==> {
        if (2 === $n) {
          if ($l) {
            $h_ = $l[2];
            if ($h_) {
              $x2 = $h_[1];
              $x1 = $l[1];
              $c = $call2($cmp, $x1, $x2);
              return 0 === $c
                ? Vector{0, $x1, 0}
                : (0 <= $c
                 ? Vector{0, $x2, Vector{0, $x1, 0}}
                 : (Vector{0, $x1, Vector{0, $x2, 0}}));
            }
          }
        }
        else {
          if (3 === $n) {
            if ($l) {
              $i_ = $l[2];
              if ($i_) {
                $j_ = $i_[2];
                if ($j_) {
                  $x3 = $j_[1];
                  $x2__0 = $i_[1];
                  $x1__0 = $l[1];
                  $c__0 = $call2($cmp, $x1__0, $x2__0);
                  if (0 === $c__0) {
                    $c__1 = $call2($cmp, $x2__0, $x3);
                    return 0 === $c__1
                      ? Vector{0, $x2__0, 0}
                      : (0 <= $c__1
                       ? Vector{0, $x3, Vector{0, $x2__0, 0}}
                       : (Vector{0, $x2__0, Vector{0, $x3, 0}}));
                  }
                  if (0 <= $c__0) {
                    $c__2 = $call2($cmp, $x1__0, $x3);
                    if (0 === $c__2) {
                      return Vector{0, $x2__0, Vector{0, $x1__0, 0}};
                    }
                    if (0 <= $c__2) {
                      $c__3 = $call2($cmp, $x2__0, $x3);
                      return 0 === $c__3
                        ? Vector{0, $x2__0, Vector{0, $x1__0, 0}}
                        : (0 <= $c__3
                         ? Vector{0, $x3, Vector{0, $x2__0, Vector{0, $x1__0, 0}}}
                         : (Vector{0, $x2__0, Vector{0, $x3, Vector{0, $x1__0, 0}}}));
                    }
                    return Vector{
                      0,
                      $x2__0,
                      Vector{0, $x1__0, Vector{0, $x3, 0}}
                    };
                  }
                  $c__4 = $call2($cmp, $x2__0, $x3);
                  if (0 === $c__4) {
                    return Vector{0, $x1__0, Vector{0, $x2__0, 0}};
                  }
                  if (0 <= $c__4) {
                    $c__5 = $call2($cmp, $x1__0, $x3);
                    return 0 === $c__5
                      ? Vector{0, $x1__0, Vector{0, $x2__0, 0}}
                      : (0 <= $c__5
                       ? Vector{0, $x3, Vector{0, $x1__0, Vector{0, $x2__0, 0}}}
                       : (Vector{0, $x1__0, Vector{0, $x3, Vector{0, $x2__0, 0}}}));
                  }
                  return Vector{
                    0,
                    $x1__0,
                    Vector{0, $x2__0, Vector{0, $x3, 0}}
                  };
                }
              }
            }
          }
        }
        $n1 = $right_shift_32($n, 1);
        $n2 = (int) ($n - $n1);
        $l2 = $chop($n1, $l);
        $s1 = $rev_sort->contents($n1, $l);
        $s2 = $rev_sort->contents($n2, $l2);
        return $rev_merge_rev($s1, $s2, 0);
      };
      $rev_sort->contents = (dynamic $n, dynamic $l) ==> {
        if (2 === $n) {
          if ($l) {
            $e_ = $l[2];
            if ($e_) {
              $x2 = $e_[1];
              $x1 = $l[1];
              $c = $call2($cmp, $x1, $x2);
              return 0 === $c
                ? Vector{0, $x1, 0}
                : (0 < $c
                 ? Vector{0, $x1, Vector{0, $x2, 0}}
                 : (Vector{0, $x2, Vector{0, $x1, 0}}));
            }
          }
        }
        else {
          if (3 === $n) {
            if ($l) {
              $f_ = $l[2];
              if ($f_) {
                $g_ = $f_[2];
                if ($g_) {
                  $x3 = $g_[1];
                  $x2__0 = $f_[1];
                  $x1__0 = $l[1];
                  $c__0 = $call2($cmp, $x1__0, $x2__0);
                  if (0 === $c__0) {
                    $c__1 = $call2($cmp, $x2__0, $x3);
                    return 0 === $c__1
                      ? Vector{0, $x2__0, 0}
                      : (0 < $c__1
                       ? Vector{0, $x2__0, Vector{0, $x3, 0}}
                       : (Vector{0, $x3, Vector{0, $x2__0, 0}}));
                  }
                  if (0 < $c__0) {
                    $c__2 = $call2($cmp, $x2__0, $x3);
                    if (0 === $c__2) {
                      return Vector{0, $x1__0, Vector{0, $x2__0, 0}};
                    }
                    if (0 < $c__2) {
                      return Vector{
                        0,
                        $x1__0,
                        Vector{0, $x2__0, Vector{0, $x3, 0}}
                      };
                    }
                    $c__3 = $call2($cmp, $x1__0, $x3);
                    return 0 === $c__3
                      ? Vector{0, $x1__0, Vector{0, $x2__0, 0}}
                      : (0 < $c__3
                       ? Vector{0, $x1__0, Vector{0, $x3, Vector{0, $x2__0, 0}}}
                       : (Vector{0, $x3, Vector{0, $x1__0, Vector{0, $x2__0, 0}}}));
                  }
                  $c__4 = $call2($cmp, $x1__0, $x3);
                  if (0 === $c__4) {
                    return Vector{0, $x2__0, Vector{0, $x1__0, 0}};
                  }
                  if (0 < $c__4) {
                    return Vector{
                      0,
                      $x2__0,
                      Vector{0, $x1__0, Vector{0, $x3, 0}}
                    };
                  }
                  $c__5 = $call2($cmp, $x2__0, $x3);
                  return 0 === $c__5
                    ? Vector{0, $x2__0, Vector{0, $x1__0, 0}}
                    : (0 < $c__5
                     ? Vector{0, $x2__0, Vector{0, $x3, Vector{0, $x1__0, 0}}}
                     : (Vector{0, $x3, Vector{0, $x2__0, Vector{0, $x1__0, 0}}}));
                }
              }
            }
          }
        }
        $n1 = $right_shift_32($n, 1);
        $n2 = (int) ($n - $n1);
        $l2 = $chop($n1, $l);
        $s1 = $sort($n1, $l);
        $s2 = $sort($n2, $l2);
        return $rev_merge($s1, $s2, 0);
      };
      $len = $length($l);
      return 2 <= $len ? $sort($len, $l) : ($l);
    };
    $compare_lengths = (dynamic $l1, dynamic $l2) ==> {
      $l1__0 = $l1;
      $l2__0 = $l2;
      for (;;) {
        if ($l1__0) {
          if ($l2__0) {
            $l2__1 = $l2__0[2];
            $l1__1 = $l1__0[2];
            $l1__0 = $l1__1;
            $l2__0 = $l2__1;
            continue;
          }
          return 1;
        }
        return $l2__0 ? -1 : (0);
      }
    };
    $compare_length_with = (dynamic $l, dynamic $n) ==> {
      $l__0 = $l;
      $n__0 = $n;
      for (;;) {
        if ($l__0) {
          $l__1 = $l__0[2];
          if (0 < $n__0) {
            $n__1 = (int) ($n__0 + -1);
            $l__0 = $l__1;
            $n__0 = $n__1;
            continue;
          }
          return 1;
        }
        return 0 === $n__0 ? 0 : (0 < $n__0 ? -1 : (1));
      }
    };
    $List = Vector{
      0,
      $length,
      $compare_lengths,
      $compare_length_with,
      $cons,
      $hd,
      $tl,
      $nth,
      $nth_opt,
      $rev,
      $init,
      $append,
      $rev_append,
      $flatten->contents,
      $flatten->contents,
      $iter,
      $iteri,
      $map->contents,
      $mapi,
      $rev_map,
      $fold_left,
      $fold_right->contents,
      $iter2,
      $map2->contents,
      $rev_map2,
      $fold_left2,
      $fold_right2->contents,
      $for_all,
      $exists,
      $for_all2,
      $exists2,
      $mem,
      $memq,
      $find,
      $find_opt,
      $find_all,
      $find_all,
      $partition,
      $assoc,
      $assoc_opt,
      $assq,
      $assq_opt,
      $mem_assoc,
      $mem_assq,
      $remove_assoc->contents,
      $remove_assq->contents,
      $split->contents,
      $combine->contents,
      $stable_sort,
      $stable_sort,
      $stable_sort,
      $sort_uniq,
      $merge->contents
    };
    
     return ($List);

  }
  public static function length(dynamic $l): dynamic {
    return static::callRehackFunction(static::get()[1], varray[$l]);
  }
  public static function compare_lengths(dynamic $l1, dynamic $l2): dynamic {
    return static::callRehackFunction(static::get()[2], varray[$l1, $l2]);
  }
  public static function compare_length_with(dynamic $l, dynamic $n): dynamic {
    return static::callRehackFunction(static::get()[3], varray[$l, $n]);
  }
  public static function cons(dynamic $a, dynamic $l): dynamic {
    return static::callRehackFunction(static::get()[4], varray[$a, $l]);
  }
  public static function hd(dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[5], varray[$param]);
  }
  public static function tl(dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[6], varray[$param]);
  }
  public static function nth(dynamic $l, dynamic $n): dynamic {
    return static::callRehackFunction(static::get()[7], varray[$l, $n]);
  }
  public static function nth_opt(dynamic $l, dynamic $n): dynamic {
    return static::callRehackFunction(static::get()[8], varray[$l, $n]);
  }
  public static function rev(dynamic $l): dynamic {
    return static::callRehackFunction(static::get()[9], varray[$l]);
  }
  public static function init(dynamic $len, dynamic $f): dynamic {
    return static::callRehackFunction(static::get()[10], varray[$len, $f]);
  }
  public static function append(): dynamic {
    return static::callRehackFunction(static::get()[11], varray[]);
  }
  public static function rev_append(dynamic $l1, dynamic $l2): dynamic {
    return static::callRehackFunction(static::get()[12], varray[$l1, $l2]);
  }
  public static function flatten(dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[13], varray[$param]);
  }
  public static function iter(dynamic $f, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[15], varray[$f, $param]);
  }
  public static function iteri(dynamic $f, dynamic $l): dynamic {
    return static::callRehackFunction(static::get()[16], varray[$f, $l]);
  }
  public static function map(dynamic $f, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[17], varray[$f, $param]);
  }
  public static function mapi(dynamic $f, dynamic $l): dynamic {
    return static::callRehackFunction(static::get()[18], varray[$f, $l]);
  }
  public static function rev_map(dynamic $f, dynamic $l): dynamic {
    return static::callRehackFunction(static::get()[19], varray[$f, $l]);
  }
  public static function fold_left(dynamic $f, dynamic $accu, dynamic $l): dynamic {
    return static::callRehackFunction(static::get()[20], varray[$f, $accu, $l]);
  }
  public static function fold_right(dynamic $f, dynamic $l, dynamic $accu): dynamic {
    return static::callRehackFunction(static::get()[21], varray[$f, $l, $accu]);
  }
  public static function iter2(dynamic $f, dynamic $l1, dynamic $l2): dynamic {
    return static::callRehackFunction(static::get()[22], varray[$f, $l1, $l2]);
  }
  public static function map2(dynamic $f, dynamic $l1, dynamic $l2): dynamic {
    return static::callRehackFunction(static::get()[23], varray[$f, $l1, $l2]);
  }
  public static function rev_map2(dynamic $f, dynamic $l1, dynamic $l2): dynamic {
    return static::callRehackFunction(static::get()[24], varray[$f, $l1, $l2]);
  }
  public static function fold_left2(dynamic $f, dynamic $accu, dynamic $l1, dynamic $l2): dynamic {
    return static::callRehackFunction(static::get()[25], varray[$f, $accu, $l1, $l2]);
  }
  public static function fold_right2(dynamic $f, dynamic $l1, dynamic $l2, dynamic $accu): dynamic {
    return static::callRehackFunction(static::get()[26], varray[$f, $l1, $l2, $accu]);
  }
  public static function for_all(dynamic $p, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[27], varray[$p, $param]);
  }
  public static function exists(dynamic $p, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[28], varray[$p, $param]);
  }
  public static function for_all2(dynamic $p, dynamic $l1, dynamic $l2): dynamic {
    return static::callRehackFunction(static::get()[29], varray[$p, $l1, $l2]);
  }
  public static function exists2(dynamic $p, dynamic $l1, dynamic $l2): dynamic {
    return static::callRehackFunction(static::get()[30], varray[$p, $l1, $l2]);
  }
  public static function mem(dynamic $x, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[31], varray[$x, $param]);
  }
  public static function memq(dynamic $x, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[32], varray[$x, $param]);
  }
  public static function find(dynamic $p, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[33], varray[$p, $param]);
  }
  public static function find_opt(dynamic $p, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[34], varray[$p, $param]);
  }
  public static function find_all(dynamic $p): dynamic {
    return static::callRehackFunction(static::get()[35], varray[$p]);
  }
  public static function partition(dynamic $p, dynamic $l): dynamic {
    return static::callRehackFunction(static::get()[37], varray[$p, $l]);
  }
  public static function assoc(dynamic $x, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[38], varray[$x, $param]);
  }
  public static function assoc_opt(dynamic $x, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[39], varray[$x, $param]);
  }
  public static function assq(dynamic $x, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[40], varray[$x, $param]);
  }
  public static function assq_opt(dynamic $x, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[41], varray[$x, $param]);
  }
  public static function mem_assoc(dynamic $x, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[42], varray[$x, $param]);
  }
  public static function mem_assq(dynamic $x, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[43], varray[$x, $param]);
  }
  public static function remove_assoc(dynamic $x, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[44], varray[$x, $param]);
  }
  public static function remove_assq(dynamic $x, dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[45], varray[$x, $param]);
  }
  public static function split(dynamic $param): dynamic {
    return static::callRehackFunction(static::get()[46], varray[$param]);
  }
  public static function combine(dynamic $l1, dynamic $l2): dynamic {
    return static::callRehackFunction(static::get()[47], varray[$l1, $l2]);
  }
  public static function stable_sort(dynamic $cmp, dynamic $l): dynamic {
    return static::callRehackFunction(static::get()[48], varray[$cmp, $l]);
  }
  public static function sort_uniq(dynamic $cmp, dynamic $l): dynamic {
    return static::callRehackFunction(static::get()[51], varray[$cmp, $l]);
  }
  public static function merge(dynamic $cmp, dynamic $l1, dynamic $l2): dynamic {
    return static::callRehackFunction(static::get()[52], varray[$cmp, $l1, $l2]);
  }

}
/* Hashing disabled */
