<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * @generated
 *
 */
namespace Rehack;

final class Stdlib__map {
  <<__Override, __Memoize>>
  public static function get() : Vector<dynamic> {
    
    $runtime = (\Rehack\GlobalObject::get() as dynamic)->jsoo_runtime;
    $call1 = $runtime["caml_call1"];
    $call2 = $runtime["caml_call2"];
    $call3 = $runtime["caml_call3"];
    $string = $runtime["caml_new_string"];
    $caml_wrap_thrown_exception = $runtime["caml_wrap_thrown_exception"];
    $cst_Map_remove_min_elt = $string("Map.remove_min_elt");
    $cst_Map_bal = $string("Map.bal");
    $cst_Map_bal__0 = $string("Map.bal");
    $cst_Map_bal__1 = $string("Map.bal");
    $cst_Map_bal__2 = $string("Map.bal");
    $Stdlib = Stdlib::get();
    $Assert_failure = Assert_failure::get();
    $Stdlib_seq = Stdlib__seq::get();
    $a_ = Vector{0, 0, 0, 0} as dynamic;
    $b_ = Vector{0, $string("map.ml"), 398, 10} as dynamic;
    $c_ = Vector{0, 0, 0} as dynamic;
    $Make = (dynamic $Ord) : dynamic ==> {
      $add = new Ref();
      $add_max_binding = new Ref();
      $add_min_binding = new Ref();
      $bindings_aux = new Ref();
      $cardinal = new Ref();
      $exists = new Ref();
      $filter = new Ref();
      $fold = new Ref();
      $for_all = new Ref();
      $iter = new Ref();
      $join = new Ref();
      $map = new Ref();
      $mapi = new Ref();
      $merge = new Ref();
      $partition = new Ref();
      $remove = new Ref();
      $remove_min_binding = new Ref();
      $seq_of_enum = new Ref();
      $split = new Ref();
      $union = new Ref();
      $update = new Ref();
      $height = (dynamic $param) : dynamic ==> {
        $h = null as dynamic;
        if ($param) {$h = $param[5];return $h;}
        return 0;
      };
      $create = (dynamic $l, dynamic $x, dynamic $d, dynamic $r) : dynamic ==> {
        $hl = $height($l);
        $hr = $height($r);
        $U_ = $hr <= $hl ? (int) ($hl + 1) : ((int) ($hr + 1));
        return Vector{0, $l, $x, $d, $r, $U_};
      };
      $singleton = (dynamic $x, dynamic $d) : dynamic ==> {
        return Vector{0, 0, $x, $d, 0, 1};
      };
      $bal = (dynamic $l, dynamic $x, dynamic $d, dynamic $r) : dynamic ==> {
        $P_ = null as dynamic;
        $Q_ = null as dynamic;
        $R_ = null as dynamic;
        $S_ = null as dynamic;
        $h = null as dynamic;
        $h__0 = null as dynamic;
        $hl = null as dynamic;
        $hr = null as dynamic;
        $ld = null as dynamic;
        $ll = null as dynamic;
        $lr = null as dynamic;
        $lrd = null as dynamic;
        $lrl = null as dynamic;
        $lrr = null as dynamic;
        $lrv = null as dynamic;
        $lv = null as dynamic;
        $rd = null as dynamic;
        $rl = null as dynamic;
        $rld = null as dynamic;
        $rll = null as dynamic;
        $rlr = null as dynamic;
        $rlv = null as dynamic;
        $rr = null as dynamic;
        $rv = null as dynamic;
        if ($l) {
          $h = $l[5];
          $hl = $h;
        }
        else {$hl = 0 as dynamic;}
        if ($r) {
          $h__0 = $r[5];
          $hr = $h__0;
        }
        else {$hr = 0 as dynamic;}
        if ((int) ($hr + 2) < $hl) {
          if ($l) {
            $lr = $l[4];
            $ld = $l[3];
            $lv = $l[2];
            $ll = $l[1];
            $P_ = $height($lr);
            if ($P_ <= $height($ll)) {
              return $create($ll, $lv, $ld, $create($lr, $x, $d, $r));
            }
            if ($lr) {
              $lrr = $lr[4];
              $lrd = $lr[3];
              $lrv = $lr[2];
              $lrl = $lr[1];
              $Q_ = $create($lrr, $x, $d, $r);
              return $create($create($ll, $lv, $ld, $lrl), $lrv, $lrd, $Q_);
            }
            return $call1($Stdlib[1], $cst_Map_bal);
          }
          return $call1($Stdlib[1], $cst_Map_bal__0);
        }
        if ((int) ($hl + 2) < $hr) {
          if ($r) {
            $rr = $r[4];
            $rd = $r[3];
            $rv = $r[2];
            $rl = $r[1];
            $R_ = $height($rl);
            if ($R_ <= $height($rr)) {
              return $create($create($l, $x, $d, $rl), $rv, $rd, $rr);
            }
            if ($rl) {
              $rlr = $rl[4];
              $rld = $rl[3];
              $rlv = $rl[2];
              $rll = $rl[1];
              $S_ = $create($rlr, $rv, $rd, $rr);
              return $create($create($l, $x, $d, $rll), $rlv, $rld, $S_);
            }
            return $call1($Stdlib[1], $cst_Map_bal__1);
          }
          return $call1($Stdlib[1], $cst_Map_bal__2);
        }
        $T_ = $hr <= $hl ? (int) ($hl + 1) : ((int) ($hr + 1));
        return Vector{0, $l, $x, $d, $r, $T_};
      };
      $empty = 0 as dynamic;
      $is_empty = (dynamic $param) : dynamic ==> {return $param ? 0 : (1);};
      $add->contents = (dynamic $x, dynamic $data, dynamic $m) : dynamic ==> {
        $c = null as dynamic;
        $d = null as dynamic;
        $h = null as dynamic;
        $l = null as dynamic;
        $ll = null as dynamic;
        $r = null as dynamic;
        $rr = null as dynamic;
        $v = null as dynamic;
        if ($m) {
          $h = $m[5];
          $r = $m[4];
          $d = $m[3];
          $v = $m[2];
          $l = $m[1];
          $c = $call2($Ord[1], $x, $v);
          if (0 === $c) {
            return $d === $data ? $m : (Vector{0, $l, $x, $data, $r, $h});
          }
          if (0 <= $c) {
            $rr = $add->contents($x, $data, $r);
            return $r === $rr ? $m : ($bal($l, $v, $d, $rr));
          }
          $ll = $add->contents($x, $data, $l);
          return $l === $ll ? $m : ($bal($ll, $v, $d, $r));
        }
        return Vector{0, 0, $x, $data, 0, 1};
      };
      $find = (dynamic $x, dynamic $param) : dynamic ==> {
        $c = null as dynamic;
        $d = null as dynamic;
        $l = null as dynamic;
        $param__1 = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            $c = $call2($Ord[1], $x, $v);
            if (0 === $c) {return $d;}
            $param__1 = 0 <= $c ? $r : ($l);
            $param__0 = $param__1;
            continue;
          }
          throw $caml_wrap_thrown_exception($Stdlib[8]) as \Throwable;
        }
      };
      $find_first_aux = (dynamic $v0, dynamic $d0, dynamic $f, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $v0__0 = $v0;
        $d0__0 = $d0;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            if ($call1($f, $v)) {
              $v0__0 = $v;
              $d0__0 = $d;
              $param__0 = $l;
              continue;
            }
            $param__0 = $r;
            continue;
          }
          return Vector{0, $v0__0, $d0__0};
        }
      };
      $find_first = (dynamic $f, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            if ($call1($f, $v)) {return $find_first_aux($v, $d, $f, $l);}
            $param__0 = $r;
            continue;
          }
          throw $caml_wrap_thrown_exception($Stdlib[8]) as \Throwable;
        }
      };
      $find_first_opt_aux = 
      (dynamic $v0, dynamic $d0, dynamic $f, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $v0__0 = $v0;
        $d0__0 = $d0;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            if ($call1($f, $v)) {
              $v0__0 = $v;
              $d0__0 = $d;
              $param__0 = $l;
              continue;
            }
            $param__0 = $r;
            continue;
          }
          return Vector{0, Vector{0, $v0__0, $d0__0}};
        }
      };
      $find_first_opt = (dynamic $f, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            if ($call1($f, $v)) {return $find_first_opt_aux($v, $d, $f, $l);}
            $param__0 = $r;
            continue;
          }
          return 0;
        }
      };
      $find_last_aux = (dynamic $v0, dynamic $d0, dynamic $f, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $v0__0 = $v0;
        $d0__0 = $d0;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            if ($call1($f, $v)) {
              $v0__0 = $v;
              $d0__0 = $d;
              $param__0 = $r;
              continue;
            }
            $param__0 = $l;
            continue;
          }
          return Vector{0, $v0__0, $d0__0};
        }
      };
      $find_last = (dynamic $f, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            if ($call1($f, $v)) {return $find_last_aux($v, $d, $f, $r);}
            $param__0 = $l;
            continue;
          }
          throw $caml_wrap_thrown_exception($Stdlib[8]) as \Throwable;
        }
      };
      $find_last_opt_aux = 
      (dynamic $v0, dynamic $d0, dynamic $f, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $v0__0 = $v0;
        $d0__0 = $d0;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            if ($call1($f, $v)) {
              $v0__0 = $v;
              $d0__0 = $d;
              $param__0 = $r;
              continue;
            }
            $param__0 = $l;
            continue;
          }
          return Vector{0, Vector{0, $v0__0, $d0__0}};
        }
      };
      $find_last_opt = (dynamic $f, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            if ($call1($f, $v)) {return $find_last_opt_aux($v, $d, $f, $r);}
            $param__0 = $l;
            continue;
          }
          return 0;
        }
      };
      $find_opt = (dynamic $x, dynamic $param) : dynamic ==> {
        $c = null as dynamic;
        $d = null as dynamic;
        $l = null as dynamic;
        $param__1 = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            $c = $call2($Ord[1], $x, $v);
            if (0 === $c) {return Vector{0, $d};}
            $param__1 = 0 <= $c ? $r : ($l);
            $param__0 = $param__1;
            continue;
          }
          return 0;
        }
      };
      $mem = (dynamic $x, dynamic $param) : dynamic ==> {
        $O_ = null as dynamic;
        $c = null as dynamic;
        $l = null as dynamic;
        $param__1 = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $v = $param__0[2];
            $l = $param__0[1];
            $c = $call2($Ord[1], $x, $v);
            $O_ = 0 === $c ? 1 : (0);
            if ($O_) {return $O_;}
            $param__1 = 0 <= $c ? $r : ($l);
            $param__0 = $param__1;
            continue;
          }
          return 0;
        }
      };
      $min_binding = (dynamic $param) : dynamic ==> {
        $N_ = null as dynamic;
        $d = null as dynamic;
        $v = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $N_ = $param__0[1];
            if ($N_) {$param__0 = $N_;continue;}
            $d = $param__0[3];
            $v = $param__0[2];
            return Vector{0, $v, $d};
          }
          throw $caml_wrap_thrown_exception($Stdlib[8]) as \Throwable;
        }
      };
      $min_binding_opt = (dynamic $param) : dynamic ==> {
        $M_ = null as dynamic;
        $d = null as dynamic;
        $v = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $M_ = $param__0[1];
            if ($M_) {$param__0 = $M_;continue;}
            $d = $param__0[3];
            $v = $param__0[2];
            return Vector{0, Vector{0, $v, $d}};
          }
          return 0;
        }
      };
      $max_binding = (dynamic $param) : dynamic ==> {
        $J_ = null as dynamic;
        $K_ = null as dynamic;
        $L_ = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $J_ = $param__0[4];
            $K_ = $param__0[3];
            $L_ = $param__0[2];
            if ($J_) {$param__0 = $J_;continue;}
            return Vector{0, $L_, $K_};
          }
          throw $caml_wrap_thrown_exception($Stdlib[8]) as \Throwable;
        }
      };
      $max_binding_opt = (dynamic $param) : dynamic ==> {
        $G_ = null as dynamic;
        $H_ = null as dynamic;
        $I_ = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $G_ = $param__0[4];
            $H_ = $param__0[3];
            $I_ = $param__0[2];
            if ($G_) {$param__0 = $G_;continue;}
            return Vector{0, Vector{0, $I_, $H_}};
          }
          return 0;
        }
      };
      $remove_min_binding->contents = (dynamic $param) : dynamic ==> {
        $F_ = null as dynamic;
        $d = null as dynamic;
        $r = null as dynamic;
        $r__0 = null as dynamic;
        $v = null as dynamic;
        if ($param) {
          $F_ = $param[1];
          if ($F_) {
            $r = $param[4];
            $d = $param[3];
            $v = $param[2];
            return $bal($remove_min_binding->contents($F_), $v, $d, $r);
          }
          $r__0 = $param[4];
          return $r__0;
        }
        return $call1($Stdlib[1], $cst_Map_remove_min_elt);
      };
      $f_ = (dynamic $t, dynamic $match) : dynamic ==> {
        $d = null as dynamic;
        $match__0 = null as dynamic;
        $x = null as dynamic;
        if ($t) {
          if ($match) {
            $match__0 = $min_binding($match);
            $d = $match__0[2];
            $x = $match__0[1];
            return $bal($t, $x, $d, $remove_min_binding->contents($match));
          }
          return $t;
        }
        return $match;
      };
      $remove->contents = (dynamic $x, dynamic $m) : dynamic ==> {
        $c = null as dynamic;
        $d = null as dynamic;
        $l = null as dynamic;
        $ll = null as dynamic;
        $r = null as dynamic;
        $rr = null as dynamic;
        $v = null as dynamic;
        if ($m) {
          $r = $m[4];
          $d = $m[3];
          $v = $m[2];
          $l = $m[1];
          $c = $call2($Ord[1], $x, $v);
          if (0 === $c) {return $f_($l, $r);}
          if (0 <= $c) {
            $rr = $remove->contents($x, $r);
            return $r === $rr ? $m : ($bal($l, $v, $d, $rr));
          }
          $ll = $remove->contents($x, $l);
          return $l === $ll ? $m : ($bal($ll, $v, $d, $r));
        }
        return 0;
      };
      $update->contents = (dynamic $x, dynamic $f, dynamic $m) : dynamic ==> {
        $c = null as dynamic;
        $d = null as dynamic;
        $data = null as dynamic;
        $data__0 = null as dynamic;
        $h = null as dynamic;
        $l = null as dynamic;
        $ll = null as dynamic;
        $match = null as dynamic;
        $r = null as dynamic;
        $rr = null as dynamic;
        $v = null as dynamic;
        if ($m) {
          $h = $m[5];
          $r = $m[4];
          $d = $m[3];
          $v = $m[2];
          $l = $m[1];
          $c = $call2($Ord[1], $x, $v);
          if (0 === $c) {
            $match = $call1($f, Vector{0, $d});
            if ($match) {
              $data = $match[1];
              return $d === $data ? $m : (Vector{0, $l, $x, $data, $r, $h});
            }
            return $f_($l, $r);
          }
          if (0 <= $c) {
            $rr = $update->contents($x, $f, $r);
            return $r === $rr ? $m : ($bal($l, $v, $d, $rr));
          }
          $ll = $update->contents($x, $f, $l);
          return $l === $ll ? $m : ($bal($ll, $v, $d, $r));
        }
        $match__0 = $call1($f, 0);
        if ($match__0) {
          $data__0 = $match__0[1];
          return Vector{0, 0, $x, $data__0, 0, 1};
        }
        return 0;
      };
      $iter->contents = (dynamic $f, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $param__1 = null as dynamic;
        $v = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $param__1 = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            $iter->contents($f, $l);
            $call2($f, $v, $d);
            $param__0 = $param__1;
            continue;
          }
          return 0;
        }
      };
      $map->contents = (dynamic $f, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $d__0 = null as dynamic;
        $h = null as dynamic;
        $l = null as dynamic;
        $l__0 = null as dynamic;
        $r = null as dynamic;
        $r__0 = null as dynamic;
        $v = null as dynamic;
        if ($param) {
          $h = $param[5];
          $r = $param[4];
          $d = $param[3];
          $v = $param[2];
          $l = $param[1];
          $l__0 = $map->contents($f, $l);
          $d__0 = $call1($f, $d);
          $r__0 = $map->contents($f, $r);
          return Vector{0, $l__0, $v, $d__0, $r__0, $h};
        }
        return 0;
      };
      $mapi->contents = (dynamic $f, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $d__0 = null as dynamic;
        $h = null as dynamic;
        $l = null as dynamic;
        $l__0 = null as dynamic;
        $r = null as dynamic;
        $r__0 = null as dynamic;
        $v = null as dynamic;
        if ($param) {
          $h = $param[5];
          $r = $param[4];
          $d = $param[3];
          $v = $param[2];
          $l = $param[1];
          $l__0 = $mapi->contents($f, $l);
          $d__0 = $call2($f, $v, $d);
          $r__0 = $mapi->contents($f, $r);
          return Vector{0, $l__0, $v, $d__0, $r__0, $h};
        }
        return 0;
      };
      $fold->contents = (dynamic $f, dynamic $m, dynamic $accu) : dynamic ==> {
        $accu__1 = null as dynamic;
        $d = null as dynamic;
        $l = null as dynamic;
        $m__1 = null as dynamic;
        $v = null as dynamic;
        $m__0 = $m;
        $accu__0 = $accu;
        for (;;) {
          if ($m__0) {
            $m__1 = $m__0[4];
            $d = $m__0[3];
            $v = $m__0[2];
            $l = $m__0[1];
            $accu__1 = $call3($f, $v, $d, $fold->contents($f, $l, $accu__0));
            $m__0 = $m__1;
            $accu__0 = $accu__1;
            continue;
          }
          return $accu__0;
        }
      };
      $for_all->contents = (dynamic $p, dynamic $param) : dynamic ==> {
        $C_ = null as dynamic;
        $D_ = null as dynamic;
        $E_ = null as dynamic;
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            $C_ = $call2($p, $v, $d);
            if ($C_) {
              $D_ = $for_all->contents($p, $l);
              if ($D_) {$param__0 = $r;continue;}
              $E_ = $D_;
            }
            else {$E_ = $C_;}
            return $E_;
          }
          return 1;
        }
      };
      $exists->contents = (dynamic $p, dynamic $param) : dynamic ==> {
        $A_ = null as dynamic;
        $B_ = null as dynamic;
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $z_ = null as dynamic;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $l = $param__0[1];
            $z_ = $call2($p, $v, $d);
            if ($z_) {
              $A_ = $z_;
            }
            else {
              $B_ = $exists->contents($p, $l);
              if (! $B_) {$param__0 = $r;continue;}
              $A_ = $B_;
            }
            return $A_;
          }
          return 0;
        }
      };
      $add_min_binding->contents = (dynamic $k, dynamic $x, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        if ($param) {
          $r = $param[4];
          $d = $param[3];
          $v = $param[2];
          $l = $param[1];
          return $bal($add_min_binding->contents($k, $x, $l), $v, $d, $r);
        }
        return $singleton($k, $x);
      };
      $add_max_binding->contents = (dynamic $k, dynamic $x, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        if ($param) {
          $r = $param[4];
          $d = $param[3];
          $v = $param[2];
          $l = $param[1];
          return $bal($l, $v, $d, $add_max_binding->contents($k, $x, $r));
        }
        return $singleton($k, $x);
      };
      $join->contents = (dynamic $l, dynamic $v, dynamic $d, dynamic $r) : dynamic ==> {
        $ld = null as dynamic;
        $lh = null as dynamic;
        $ll = null as dynamic;
        $lr = null as dynamic;
        $lv = null as dynamic;
        $rd = null as dynamic;
        $rh = null as dynamic;
        $rl = null as dynamic;
        $rr = null as dynamic;
        $rv = null as dynamic;
        if ($l) {
          if ($r) {
            $rh = $r[5];
            $rr = $r[4];
            $rd = $r[3];
            $rv = $r[2];
            $rl = $r[1];
            $lh = $l[5];
            $lr = $l[4];
            $ld = $l[3];
            $lv = $l[2];
            $ll = $l[1];
            return (int) ($rh + 2) < $lh
              ? $bal($ll, $lv, $ld, $join->contents($lr, $v, $d, $r))
              : ((int) ($lh + 2) < $rh
               ? $bal($join->contents($l, $v, $d, $rl), $rv, $rd, $rr)
               : ($create($l, $v, $d, $r)));
          }
          return $add_max_binding->contents($v, $d, $l);
        }
        return $add_min_binding->contents($v, $d, $r);
      };
      $concat = (dynamic $t, dynamic $match) : dynamic ==> {
        $d = null as dynamic;
        $match__0 = null as dynamic;
        $x = null as dynamic;
        if ($t) {
          if ($match) {
            $match__0 = $min_binding($match);
            $d = $match__0[2];
            $x = $match__0[1];
            return $join->contents(
              $t,
              $x,
              $d,
              $remove_min_binding->contents($match)
            );
          }
          return $t;
        }
        return $match;
      };
      $concat_or_join = (dynamic $t1, dynamic $v, dynamic $d, dynamic $t2) : dynamic ==> {
        $d__0 = null as dynamic;
        if ($d) {$d__0 = $d[1];return $join->contents($t1, $v, $d__0, $t2);}
        return $concat($t1, $t2);
      };
      $split->contents = (dynamic $x, dynamic $param) : dynamic ==> {
        $c = null as dynamic;
        $d = null as dynamic;
        $l = null as dynamic;
        $ll = null as dynamic;
        $lr = null as dynamic;
        $match = null as dynamic;
        $match__0 = null as dynamic;
        $pres = null as dynamic;
        $pres__0 = null as dynamic;
        $r = null as dynamic;
        $rl = null as dynamic;
        $rr = null as dynamic;
        $v = null as dynamic;
        if ($param) {
          $r = $param[4];
          $d = $param[3];
          $v = $param[2];
          $l = $param[1];
          $c = $call2($Ord[1], $x, $v);
          if (0 === $c) {return Vector{0, $l, Vector{0, $d}, $r};}
          if (0 <= $c) {
            $match = $split->contents($x, $r);
            $rr = $match[3];
            $pres = $match[2];
            $lr = $match[1];
            return Vector{0, $join->contents($l, $v, $d, $lr), $pres, $rr};
          }
          $match__0 = $split->contents($x, $l);
          $rl = $match__0[3];
          $pres__0 = $match__0[2];
          $ll = $match__0[1];
          return Vector{0, $ll, $pres__0, $join->contents($rl, $v, $d, $r)};
        }
        return $a_;
      };
      $merge->contents = (dynamic $f, dynamic $s1, dynamic $s2) : dynamic ==> {
        $d1 = null as dynamic;
        $d1__0 = null as dynamic;
        $d2 = null as dynamic;
        $d2__0 = null as dynamic;
        $h1 = null as dynamic;
        $l1 = null as dynamic;
        $l1__0 = null as dynamic;
        $l2 = null as dynamic;
        $l2__0 = null as dynamic;
        $match = null as dynamic;
        $match__0 = null as dynamic;
        $r1 = null as dynamic;
        $r1__0 = null as dynamic;
        $r2 = null as dynamic;
        $r2__0 = null as dynamic;
        $v1 = null as dynamic;
        $v2 = null as dynamic;
        $v_ = null as dynamic;
        $w_ = null as dynamic;
        $x_ = null as dynamic;
        $y_ = null as dynamic;
        if ($s1) {
          $h1 = $s1[5];
          $r1 = $s1[4];
          $d1 = $s1[3];
          $v1 = $s1[2];
          $l1 = $s1[1];
          if ($height($s2) <= $h1) {
            $match = $split->contents($v1, $s2);
            $r2 = $match[3];
            $d2 = $match[2];
            $l2 = $match[1];
            $v_ = $merge->contents($f, $r1, $r2);
            $w_ = $call3($f, $v1, Vector{0, $d1}, $d2);
            return $concat_or_join(
              $merge->contents($f, $l1, $l2),
              $v1,
              $w_,
              $v_
            );
          }
        }
        else {if (! $s2) {return 0;}}
        if ($s2) {
          $r2__0 = $s2[4];
          $d2__0 = $s2[3];
          $v2 = $s2[2];
          $l2__0 = $s2[1];
          $match__0 = $split->contents($v2, $s1);
          $r1__0 = $match__0[3];
          $d1__0 = $match__0[2];
          $l1__0 = $match__0[1];
          $x_ = $merge->contents($f, $r1__0, $r2__0);
          $y_ = $call3($f, $v2, $d1__0, Vector{0, $d2__0});
          return $concat_or_join(
            $merge->contents($f, $l1__0, $l2__0),
            $v2,
            $y_,
            $x_
          );
        }
        throw $caml_wrap_thrown_exception(Vector{0, $Assert_failure, $b_}) as \Throwable;
      };
      $union->contents = (dynamic $f, dynamic $s1, dynamic $s2) : dynamic ==> {
        $d1 = null as dynamic;
        $d1__0 = null as dynamic;
        $d1__1 = null as dynamic;
        $d2 = null as dynamic;
        $d2__0 = null as dynamic;
        $d2__1 = null as dynamic;
        $h1 = null as dynamic;
        $h2 = null as dynamic;
        $l = null as dynamic;
        $l1 = null as dynamic;
        $l1__0 = null as dynamic;
        $l2 = null as dynamic;
        $l2__0 = null as dynamic;
        $l__0 = null as dynamic;
        $match = null as dynamic;
        $match__0 = null as dynamic;
        $r = null as dynamic;
        $r1 = null as dynamic;
        $r1__0 = null as dynamic;
        $r2 = null as dynamic;
        $r2__0 = null as dynamic;
        $r__0 = null as dynamic;
        $s = null as dynamic;
        $v1 = null as dynamic;
        $v2 = null as dynamic;
        if ($s1) {
          if ($s2) {
            $h2 = $s2[5];
            $r2 = $s2[4];
            $d2 = $s2[3];
            $v2 = $s2[2];
            $l2 = $s2[1];
            $h1 = $s1[5];
            $r1 = $s1[4];
            $d1 = $s1[3];
            $v1 = $s1[2];
            $l1 = $s1[1];
            if ($h2 <= $h1) {
              $match = $split->contents($v1, $s2);
              $r2__0 = $match[3];
              $d2__0 = $match[2];
              $l2__0 = $match[1];
              $l = $union->contents($f, $l1, $l2__0);
              $r = $union->contents($f, $r1, $r2__0);
              if ($d2__0) {
                $d2__1 = $d2__0[1];
                return $concat_or_join(
                  $l,
                  $v1,
                  $call3($f, $v1, $d1, $d2__1),
                  $r
                );
              }
              return $join->contents($l, $v1, $d1, $r);
            }
            $match__0 = $split->contents($v2, $s1);
            $r1__0 = $match__0[3];
            $d1__0 = $match__0[2];
            $l1__0 = $match__0[1];
            $l__0 = $union->contents($f, $l1__0, $l2);
            $r__0 = $union->contents($f, $r1__0, $r2);
            if ($d1__0) {
              $d1__1 = $d1__0[1];
              return $concat_or_join(
                $l__0,
                $v2,
                $call3($f, $v2, $d1__1, $d2),
                $r__0
              );
            }
            return $join->contents($l__0, $v2, $d2, $r__0);
          }
          $s = $s1;
        }
        else {$s = $s2;}
        return $s;
      };
      $filter->contents = (dynamic $p, dynamic $m) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $l__0 = null as dynamic;
        $pvd = null as dynamic;
        $r = null as dynamic;
        $r__0 = null as dynamic;
        $v = null as dynamic;
        if ($m) {
          $r = $m[4];
          $d = $m[3];
          $v = $m[2];
          $l = $m[1];
          $l__0 = $filter->contents($p, $l);
          $pvd = $call2($p, $v, $d);
          $r__0 = $filter->contents($p, $r);
          if ($pvd) {
            if ($l === $l__0) {if ($r === $r__0) {return $m;}}
            return $join->contents($l__0, $v, $d, $r__0);
          }
          return $concat($l__0, $r__0);
        }
        return 0;
      };
      $partition->contents = (dynamic $p, dynamic $param) : dynamic ==> {
        $d = null as dynamic;
        $l = null as dynamic;
        $lf = null as dynamic;
        $lt = null as dynamic;
        $match = null as dynamic;
        $match__0 = null as dynamic;
        $pvd = null as dynamic;
        $r = null as dynamic;
        $rf = null as dynamic;
        $rt = null as dynamic;
        $t_ = null as dynamic;
        $u_ = null as dynamic;
        $v = null as dynamic;
        if ($param) {
          $r = $param[4];
          $d = $param[3];
          $v = $param[2];
          $l = $param[1];
          $match = $partition->contents($p, $l);
          $lf = $match[2];
          $lt = $match[1];
          $pvd = $call2($p, $v, $d);
          $match__0 = $partition->contents($p, $r);
          $rf = $match__0[2];
          $rt = $match__0[1];
          if ($pvd) {
            $t_ = $concat($lf, $rf);
            return Vector{0, $join->contents($lt, $v, $d, $rt), $t_};
          }
          $u_ = $join->contents($lf, $v, $d, $rf);
          return Vector{0, $concat($lt, $rt), $u_};
        }
        return $c_;
      };
      $cons_enum = (dynamic $m, dynamic $e) : dynamic ==> {
        $d = null as dynamic;
        $e__1 = null as dynamic;
        $m__1 = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $m__0 = $m;
        $e__0 = $e;
        for (;;) {
          if ($m__0) {
            $r = $m__0[4];
            $d = $m__0[3];
            $v = $m__0[2];
            $m__1 = $m__0[1];
            $e__1 = Vector{0, $v, $d, $r, $e__0} as dynamic;
            $m__0 = $m__1;
            $e__0 = $e__1;
            continue;
          }
          return $e__0;
        }
      };
      $compare = (dynamic $cmp, dynamic $m1, dynamic $m2) : dynamic ==> {
        $compare_aux = (dynamic $e1, dynamic $e2) : dynamic ==> {
          $c = null as dynamic;
          $c__0 = null as dynamic;
          $d1 = null as dynamic;
          $d2 = null as dynamic;
          $e1__1 = null as dynamic;
          $e1__2 = null as dynamic;
          $e2__1 = null as dynamic;
          $e2__2 = null as dynamic;
          $r1 = null as dynamic;
          $r2 = null as dynamic;
          $v1 = null as dynamic;
          $v2 = null as dynamic;
          $e1__0 = $e1;
          $e2__0 = $e2;
          for (;;) {
            if ($e1__0) {
              if ($e2__0) {
                $e2__1 = $e2__0[4];
                $r2 = $e2__0[3];
                $d2 = $e2__0[2];
                $v2 = $e2__0[1];
                $e1__1 = $e1__0[4];
                $r1 = $e1__0[3];
                $d1 = $e1__0[2];
                $v1 = $e1__0[1];
                $c = $call2($Ord[1], $v1, $v2);
                if (0 === $c) {
                  $c__0 = $call2($cmp, $d1, $d2);
                  if (0 === $c__0) {
                    $e2__2 = $cons_enum($r2, $e2__1);
                    $e1__2 = $cons_enum($r1, $e1__1);
                    $e1__0 = $e1__2;
                    $e2__0 = $e2__2;
                    continue;
                  }
                  return $c__0;
                }
                return $c;
              }
              return 1;
            }
            return $e2__0 ? -1 : (0);
          }
        };
        $s_ = $cons_enum($m2, 0);
        return $compare_aux($cons_enum($m1, 0), $s_);
      };
      $equal = (dynamic $cmp, dynamic $m1, dynamic $m2) : dynamic ==> {
        $equal_aux = (dynamic $e1, dynamic $e2) : dynamic ==> {
          $d1 = null as dynamic;
          $d2 = null as dynamic;
          $e1__1 = null as dynamic;
          $e1__2 = null as dynamic;
          $e2__1 = null as dynamic;
          $e2__2 = null as dynamic;
          $p_ = null as dynamic;
          $q_ = null as dynamic;
          $r1 = null as dynamic;
          $r2 = null as dynamic;
          $r_ = null as dynamic;
          $v1 = null as dynamic;
          $v2 = null as dynamic;
          $e1__0 = $e1;
          $e2__0 = $e2;
          for (;;) {
            if ($e1__0) {
              if ($e2__0) {
                $e2__1 = $e2__0[4];
                $r2 = $e2__0[3];
                $d2 = $e2__0[2];
                $v2 = $e2__0[1];
                $e1__1 = $e1__0[4];
                $r1 = $e1__0[3];
                $d1 = $e1__0[2];
                $v1 = $e1__0[1];
                $p_ = 0 === $call2($Ord[1], $v1, $v2) ? 1 : (0);
                if ($p_) {
                  $q_ = $call2($cmp, $d1, $d2);
                  if ($q_) {
                    $e2__2 = $cons_enum($r2, $e2__1);
                    $e1__2 = $cons_enum($r1, $e1__1);
                    $e1__0 = $e1__2;
                    $e2__0 = $e2__2;
                    continue;
                  }
                  $r_ = $q_;
                }
                else {$r_ = $p_;}
                return $r_;
              }
              return 0;
            }
            return $e2__0 ? 0 : (1);
          }
        };
        $o_ = $cons_enum($m2, 0);
        return $equal_aux($cons_enum($m1, 0), $o_);
      };
      $cardinal->contents = (dynamic $param) : dynamic ==> {
        $l = null as dynamic;
        $n_ = null as dynamic;
        $r = null as dynamic;
        if ($param) {
          $r = $param[4];
          $l = $param[1];
          $n_ = $cardinal->contents($r);
          return (int) ((int) ($cardinal->contents($l) + 1) + $n_);
        }
        return 0;
      };
      $bindings_aux->contents = (dynamic $accu, dynamic $param) : dynamic ==> {
        $accu__1 = null as dynamic;
        $d = null as dynamic;
        $param__1 = null as dynamic;
        $r = null as dynamic;
        $v = null as dynamic;
        $accu__0 = $accu;
        $param__0 = $param;
        for (;;) {
          if ($param__0) {
            $r = $param__0[4];
            $d = $param__0[3];
            $v = $param__0[2];
            $param__1 = $param__0[1];
            $accu__1 = Vector{
              0,
              Vector{0, $v, $d},
              $bindings_aux->contents($accu__0, $r)
            } as dynamic;
            $accu__0 = $accu__1;
            $param__0 = $param__1;
            continue;
          }
          return $accu__0;
        }
      };
      $bindings = (dynamic $s) : dynamic ==> {
        return $bindings_aux->contents(0, $s);
      };
      $add_seq = (dynamic $i, dynamic $m) : dynamic ==> {
        $m_ = (dynamic $m, dynamic $param) : dynamic ==> {
          $v = $param[2];
          $k = $param[1];
          return $add->contents($k, $v, $m);
        };
        return $call3($Stdlib_seq[7], $m_, $m, $i);
      };
      $of_seq = (dynamic $i) : dynamic ==> {return $add_seq($i, $empty);};
      $seq_of_enum->contents = (dynamic $c, dynamic $param) : dynamic ==> {
        $k = null as dynamic;
        $k_ = null as dynamic;
        $rest = null as dynamic;
        $t = null as dynamic;
        $v = null as dynamic;
        if ($c) {
          $rest = $c[4];
          $t = $c[3];
          $v = $c[2];
          $k = $c[1];
          $k_ = $cons_enum($t, $rest);
          return Vector{
            0,
            Vector{0, $k, $v},
            (dynamic $l_) : dynamic ==> {
              return $seq_of_enum->contents($k_, $l_);
            }
          };
        }
        return 0;
      };
      $to_seq = (dynamic $m) : dynamic ==> {
        $i_ = $cons_enum($m, 0);
        return (dynamic $j_) : dynamic ==> {
          return $seq_of_enum->contents($i_, $j_);
        };
      };
      $to_seq_from = (dynamic $low, dynamic $m) : dynamic ==> {
        $aux = (dynamic $low, dynamic $m, dynamic $c) : dynamic ==> {
          $c__1 = null as dynamic;
          $d = null as dynamic;
          $l = null as dynamic;
          $n = null as dynamic;
          $r = null as dynamic;
          $v = null as dynamic;
          $m__0 = $m;
          $c__0 = $c;
          for (;;) {
            if ($m__0) {
              $r = $m__0[4];
              $d = $m__0[3];
              $v = $m__0[2];
              $l = $m__0[1];
              $n = $call2($Ord[1], $v, $low);
              if (0 === $n) {return Vector{0, $v, $d, $r, $c__0};}
              if (0 <= $n) {
                $c__1 = Vector{0, $v, $d, $r, $c__0} as dynamic;
                $m__0 = $l;
                $c__0 = $c__1;
                continue;
              }
              $m__0 = $r;
              continue;
            }
            return $c__0;
          }
        };
        $g_ = $aux($low, $m, 0);
        return (dynamic $h_) : dynamic ==> {
          return $seq_of_enum->contents($g_, $h_);
        };
      };
      return Vector{
        0,
        $height,
        $create,
        $singleton,
        $bal,
        $empty,
        $is_empty,
        $add->contents,
        $find,
        $find_first_aux,
        $find_first,
        $find_first_opt_aux,
        $find_first_opt,
        $find_last_aux,
        $find_last,
        $find_last_opt_aux,
        $find_last_opt,
        $find_opt,
        $mem,
        $min_binding,
        $min_binding_opt,
        $max_binding,
        $max_binding_opt,
        $remove_min_binding->contents,
        $remove->contents,
        $update->contents,
        $iter->contents,
        $map->contents,
        $mapi->contents,
        $fold->contents,
        $for_all->contents,
        $exists->contents,
        $add_min_binding->contents,
        $add_max_binding->contents,
        $join->contents,
        $concat,
        $concat_or_join,
        $split->contents,
        $merge->contents,
        $union->contents,
        $filter->contents,
        $partition->contents,
        $cons_enum,
        $compare,
        $equal,
        $cardinal->contents,
        $bindings_aux->contents,
        $bindings,
        $min_binding,
        $min_binding_opt,
        $add_seq,
        $of_seq,
        $seq_of_enum->contents,
        $to_seq,
        $to_seq_from
      };
    };
    $Stdlib_map = Vector{
      0,
      (dynamic $d_) : dynamic ==> {
        $e_ = $Make($d_);
        return Vector{
          0,
          $e_[5],
          $e_[6],
          $e_[18],
          $e_[7],
          $e_[25],
          $e_[3],
          $e_[24],
          $e_[38],
          $e_[39],
          $e_[43],
          $e_[44],
          $e_[26],
          $e_[29],
          $e_[30],
          $e_[31],
          $e_[40],
          $e_[41],
          $e_[45],
          $e_[47],
          $e_[19],
          $e_[20],
          $e_[21],
          $e_[22],
          $e_[48],
          $e_[49],
          $e_[37],
          $e_[8],
          $e_[17],
          $e_[10],
          $e_[12],
          $e_[14],
          $e_[16],
          $e_[27],
          $e_[28],
          $e_[53],
          $e_[54],
          $e_[50],
          $e_[51]
        };
      }
    } as dynamic;
    
    return($Stdlib_map);

  }

}
/* Hashing disabled */
