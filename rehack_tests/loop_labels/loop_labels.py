def call1(f, a0):
    return f(a0) if arity_test is 1 else caml_call_gen(f, [a0])


Out_of_memory = [248, caml_new_string("Out_of_memory"), -1]
Sys_error = [248, caml_new_string("Sys_error"), -2]
Failure = [248, caml_new_string("Failure"), -3]
Invalid_argument = [248, caml_new_string("Invalid_argument"), -4]
End_of_file = [248, caml_new_string("End_of_file"), -5]
Division_by_zero = [248, caml_new_string("Division_by_zero"), -6]
Not_found = [248, caml_new_string("Not_found"), -7]
Match_failure = [248, caml_new_string("Match_failure"), -8]
Stack_overflow = [248, caml_new_string("Stack_overflow"), -9]
Sys_blocked_io = [248, caml_new_string("Sys_blocked_io"), -10]
Assert_failure = [248, caml_new_string("Assert_failure"), -11]
Undefined_recursive_module = [248, caml_new_string("Undefined_recursive_module"), -12]
caml_register_global(11, Undefined_recursive_module, "Undefined_recursive_module")
caml_register_global(10, Assert_failure, "Assert_failure")
caml_register_global(9, Sys_blocked_io, "Sys_blocked_io")
caml_register_global(8, Stack_overflow, "Stack_overflow")
caml_register_global(7, Match_failure, "Match_failure")
caml_register_global(6, Not_found, "Not_found")
caml_register_global(5, Division_by_zero, "Division_by_zero")
caml_register_global(4, End_of_file, "End_of_file")
caml_register_global(3, Invalid_argument, "Invalid_argument")
caml_register_global(2, Failure, "Failure")
caml_register_global(1, Sys_error, "Sys_error")
caml_register_global(0, Out_of_memory, "Out_of_memory")
a = caml_new_string("prefix ")
b = caml_new_string("f1")
c = caml_new_string("f2")
d = caml_new_string("f3")
e = caml_new_string("f4")
f = caml_new_string("f5")
g = caml_new_string("f6")
h = caml_new_string("f7")
i = caml_new_string("f8")
j = caml_new_string("f9")
k = caml_new_string("f10")
m = caml_new_string("h1")
o = caml_new_string("h2")
q = caml_new_string("h3")
s = caml_new_string("h4")
u = caml_new_string("h5")
caml_fresh_oo_id(0)


def symbol(s1, s2):
    l1 = caml_ml_string_length(s1)
    l2 = caml_ml_string_length(s2)
    s = caml_create_bytes(int(l1 + l2))
    caml_blit_string(s1, 0, s, 0, l1)
    caml_blit_string(s2, 0, s, l1, l2)
    return s


def string_of_int(n):
    return caml_new_string("" + n)


caml_ml_open_descriptor_in(0)
stdout = caml_ml_open_descriptor_out(1)
caml_ml_open_descriptor_out(2)


def flush_all(param):
    def iter(param):
        param__0 = param
        while True:
            if param__0:
                l = param__0[2]
                a = param__0[1]
                try:
                    caml_ml_flush(a)
                except:
                    aN = caml_wrap_exception(aN)
                    if aN[1] is not Sys_error:
                        raise (caml_wrap_thrown_exception_reraise(aN))
                param__0 = l
                continue
            return 0

    return iter(caml_ml_out_channels_list(0))


def output_string(oc, s):
    return caml_ml_output(oc, s, 0, caml_ml_string_length(s))


def print_endline(s):
    output_string(stdout, s)
    caml_ml_output_char(stdout, 10)
    return caml_ml_flush(stdout)


def do_at_exit(param):
    return flush_all(0)


def f1(g):
    i = 2
    while True:
        call1(g, i)
        aM = int(i + 1)
        if 3 is not i:
            i = aM
            continue
        return 0


def f2(g):
    i = 2
    while True:
        j = 4
        while True:
            call1(g, int(i + j))
            aL = int(j + 1)
            if 5 is not j:
                j = aL
                continue
            aK = int(i + 1)
            if 3 is not i:
                i = aK
                continue
            return 0


def f3(g):
    i = 2
    while True:
        j = 4
        while True:
            k = 4
            while True:
                call1(g, int(int(i + j) + k))
                aJ = int(k + 1)
                if 5 is not k:
                    k = aJ
                    continue
                aI = int(j + 1)
                if 5 is not j:
                    j = aI
                    continue
                l = 6
                while True:
                    call1(g, int(i + l))
                    aH = int(l + 1)
                    if 7 is not l:
                        l = aH
                        continue
                    aG = int(i + 1)
                    if 3 is not i:
                        i = aG
                        continue
                    return 0


def f4(g):
    i = 2
    while True:
        k__3 = 4
        while True:
            call1(g, int(i + k__3))
            aF = int(k__3 + 1)
            if 5 is not k__3:
                k__3 = aF
                continue
            j = 4
            while True:
                k__2 = 4
                while True:
                    l__0 = 4
                    while True:
                        call1(g, int(int(int(i + j) + k__2) + l__0))
                        aE = int(l__0 + 1)
                        if 5 is not l__0:
                            l__0 = aE
                            continue
                        aD = int(k__2 + 1)
                        if 5 is not k__2:
                            k__2 = aD
                            continue
                        k__1 = 4
                        while True:
                            call1(g, int(int(i + j) + k__1))
                            aC = int(k__1 + 1)
                            if 5 is not k__1:
                                k__1 = aC
                                continue
                            aB = int(j + 1)
                            if 5 is not j:
                                j = aB
                                continue
                            l = 6
                            while True:
                                n__0 = 4
                                while True:
                                    call1(g, int(int(i + l) + n__0))
                                    aA = int(n__0 + 1)
                                    if 5 is not n__0:
                                        n__0 = aA
                                        continue
                                    m = 4
                                    while True:
                                        n = 4
                                        while True:
                                            call1(g, int(int(int(i + l) + m) + n))
                                            az = int(n + 1)
                                            if 5 is not n:
                                                n = az
                                                continue
                                            ay = int(m + 1)
                                            if 5 is not m:
                                                m = ay
                                                continue
                                            ax = int(l + 1)
                                            if 7 is not l:
                                                l = ax
                                                continue
                                            k__0 = 4
                                            while True:
                                                call1(g, int(i + k__0))
                                                aw = int(k__0 + 1)
                                                if 5 is not k__0:
                                                    k__0 = aw
                                                    continue
                                                av = int(i + 1)
                                                if 3 is not i:
                                                    i = av
                                                    continue
                                                k = 4
                                                while True:
                                                    call1(g, k)
                                                    au = int(k + 1)
                                                    if 5 is not k:
                                                        k = au
                                                        continue
                                                    return 0


def f5(g):
    i__0 = 2
    while True:
        call1(g, i__0)
        at = int(i__0 + 1)
        if 3 is not i__0:
            i__0 = at
            continue
        i = 2
        while True:
            call1(g, i)
            ar = int(i + 1)
            if 3 is not i:
                i = ar
                continue
            return 0


def f6(g):
    i__2 = 2
    while True:
        call1(g, i__2)
        aq = int(i__2 + 1)
        if 3 is not i__2:
            i__2 = aq
            continue
        i__1 = 2
        while True:
            call1(g, i__1)
            ap = int(i__1 + 1)
            if 3 is not i__1:
                i__1 = ap
                continue
            i__0 = 2
            while True:
                call1(g, i__0)
                ao = int(i__0 + 1)
                if 3 is not i__0:
                    i__0 = ao
                    continue
                i = 2
                while True:
                    call1(g, i)
                    an = int(i + 1)
                    if 3 is not i:
                        i = an
                        continue
                    return 0


def f7(g):
    i__0 = 2
    while True:
        call1(g, i__0)
        am = int(i__0 + 1)
        if 3 is not i__0:
            i__0 = am
            continue
        i = 2
        while True:
            call1(g, i)
            al = int(i + 1)
            if 3 is not i:
                i = al
                continue
            return 0


def f8(g):
    i__0 = 2
    while True:
        call1(g, i__0)
        ai = int(i__0 + 1)
        if 3 is not i__0:
            i__0 = ai
            continue

        def f(x):
            i = 2
            while True:
                j = 4
                while True:
                    call1(g, int(int(x + i) + j))
                    ak = int(j + 1)
                    if 5 is not j:
                        j = ak
                        continue
                    aj = int(i + 1)
                    if 3 is not i:
                        i = aj
                        continue
                    return 0

        i = 2
        while True:
            call1(g, i)
            ah = int(i + 1)
            if 3 is not i:
                i = ah
                continue
            return f


def f9(g):
    i1 = 2
    while True:
        i2 = 2
        while True:

            def f__0(i1, i2):
                def f(x):
                    i3 = 2
                    while True:
                        i4 = 2
                        while True:
                            call1(g, int(int(int(int(x + i1) + i2) + i3) + i4))
                            ag = int(i4 + 1)
                            if 3 is not i4:
                                i4 = ag
                                continue
                            af = int(i3 + 1)
                            if 3 is not i3:
                                i3 = af
                                continue
                            return 0

                return f

            f = f__0(i1, i2)
            f(i2)
            ae = int(i2 + 1)
            if 3 is not i2:
                i2 = ae
                continue
            ad = int(i1 + 1)
            if 3 is not i1:
                i1 = ad
                continue
            return 0


def f10(g):
    i1 = 2
    while True:
        i2 = 2
        while True:
            try:
                i3 = 2
                while True:
                    i4 = 2
                    while True:
                        call1(g, int(int(int(i1 + i2) + i3) + i4))
                        ab = int(i4 + 1)
                        if 3 is not i4:
                            i4 = ab
                            continue
                        if 2 < i3:
                            raise (caml_wrap_thrown_exception(Not_found))
                        aa = int(i3 + 1)
                        if 3 is not i3:
                            i3 = aa
                            continue
                        break
                    break
            except:
                ac = caml_wrap_exception(ac)
                if ac is not Not_found:
                    raise (caml_wrap_thrown_exception_reraise(ac))
            Z = int(i2 + 1)
            if 3 is not i2:
                i2 = Z
                continue
            Y = int(i1 + 1)
            if 3 is not i1:
                i1 = Y
                continue
            return 0


def fx(prefix, x):
    return print_endline(symbol(a, string_of_int(x)))


f1(function_expression)
f2(function_expression)
f3(function_expression)
f4(function_expression)
f5(function_expression)
f6(function_expression)
f7(function_expression)
f8(function_expression)
f9(function_expression)
f10(function_expression)


def h1(g, t):
    i = 2
    while True:
        if t is 0:
            call1(g, 0)
            break
        else:
            if t is 1:
                k = 4
                while True:
                    call1(g, int(i + k))
                    N = int(k + 1)
                    if 5 is not k:
                        k = N
                        continue
                    break
                break
            else:
                call1(g, 1)
        M = int(i + 1)
        if 3 is not i:
            i = M
            continue
        return 0


def h2(g, t):
    i = 2
    while True:
        j = 2
        while True:
            if t is 0:
                call1(g, 0)
                break
            else:
                if t is 1:
                    k = 4
                    while True:
                        call1(g, int(int(i + j) + k))
                        L = int(k + 1)
                        if 5 is not k:
                            k = L
                            continue
                        break
                    break
                else:
                    call1(g, 1)
            K = int(j + 1)
            if 3 is not j:
                j = K
                continue
            J = int(i + 1)
            if 3 is not i:
                i = J
                continue
            return 0


def h3(g, t):
    i = 4
    while True:
        if t is 0:
            call1(g, 0)
            break
        else:
            if t is 1:
                j = 4
                while True:
                    k = 2
                    while True:
                        call1(g, int(int(i + j) + k))
                        I = int(k + 1)
                        if 3 is not k:
                            k = I
                            continue
                        H = int(j + 1)
                        if 5 is not j:
                            j = H
                            continue
                        break
                    break
                break
            else:
                call1(g, 1)
        G = int(i + 1)
        if 5 is not i:
            i = G
            continue
        return 0


def h4(g, t):
    if t is 0:
        return call1(g, 0)
    else:
        if t is 1:
            j = 4
            while True:
                k = 2
                while True:
                    call1(g, int(j + k))
                    F = int(k + 1)
                    if 3 is not k:
                        k = F
                        continue
                    E = int(j + 1)
                    if 5 is not j:
                        j = E
                        continue
                    return 0
        else:
            return call1(g, 1)


def h5(g, t):
    i = 2
    while True:
        j = 2
        while True:
            if t is 0:
                call1(g, 0)
                break
            else:
                if t is 1:
                    k = 4
                    while True:
                        l = 2
                        while True:
                            call1(g, int(int(int(i + j) + k) + l))
                            D = int(l + 1)
                            if 3 is not l:
                                l = D
                                continue
                            C = int(k + 1)
                            if 5 is not k:
                                k = C
                                continue
                            break
                        break
                    break
                else:
                    call1(g, 1)
            B = int(j + 1)
            if 3 is not j:
                j = B
                continue
            A = int(i + 1)
            if 3 is not i:
                i = A
                continue
            return 0


l = 0
h1(function_expression, l)
n = 0
h2(function_expression, n)
p = 0
h3(function_expression, p)
r = 0
h4(function_expression, r)
t = 0
h5(function_expression, t)
do_at_exit(0)
