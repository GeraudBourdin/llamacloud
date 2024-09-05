<?php

use Partitech\LlamaCloud\Client;
use Partitech\LlamaCloud\LlamaCloudException;
use Partitech\LlamaCloud\Parse;

require_once __DIR__ . '/../../vendor/autoload.php';

// export LLAMACLOUD_API_KEY=*****
$apiKey = getenv('LLAMACLOUD_API_KEY');
$client = new Client($apiKey);
$parse  = new Parse($client);

try {
    $usage = $parse->getJobJsonResult('5f1badf2-75b0-420e-977c-bff0136b377a');
} catch (LlamaCloudException $e) {
    echo $e->getMessage();
    die();
}

var_dump($usage);

/**
 * array(2) {
 * ["pages"]=>
 * array(10) {
 * [0]=>
 * array(5) {
 * ["page"]=>
 * int(1)
 * ["text"]=>
 * string(877) "                                                                         Licenses
* The X.Org Foundation
 *
 * October 2009
 *
 * Table of Contents
 * Introduction ...........................................................................................................................3
 * X.Org Preferred License.......................................................................................................3
 * XFree86 License 1.0 ...............................................................................................................3
 * Other Licenses .......................................................................................................................4"
 * ["md"]=>
 * string(615) "# Licenses
 *
 * # The X.Org Foundation
 *
 * # October 2009
 *
 * # Table of Contents
 *
 * - Introduction ...........................................................................................................................3
 * - X.Org Preferred License.......................................................................................................3
 * - XFree86 License 1.0 ...............................................................................................................3
 * - Other Licenses .......................................................................................................................4"
 * ["images"]=>
 * array(0) {
 * }
 * ["items"]=>
 * array(5) {
 * [0]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(8) "Licenses"
 * ["md"]=>
 * string(10) "# Licenses"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(270)
 * ["y"]=>
 * float(85.04100000000005)
 * ["w"]=>
 * float(68.67174399999999)
 * ["h"]=>
 * float(16.0448)
 * }
 * }
 * [1]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(20) "The X.Org Foundation"
 * ["md"]=>
 * string(22) "# The X.Org Foundation"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(235)
 * ["y"]=>
 * float(109.04100000000005)
 * ["w"]=>
 * float(139.0475058)
 * ["h"]=>
 * float(13.2603)
 * }
 * }
 * [2]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(12) "October 2009"
 * ["md"]=>
 * string(14) "# October 2009"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(270)
 * ["y"]=>
 * float(156.04100000000005)
 * ["w"]=>
 * float(69.43559040000002)
 * ["h"]=>
 * float(10.9589)
 * }
 * }
 * [3]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(17) "Table of Contents"
 * ["md"]=>
 * string(19) "# Table of Contents"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(180.04100000000005)
 * ["w"]=>
 * float(110.7898065)
 * ["h"]=>
 * float(13.2603)
 * }
 * }
 * [4]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(542) "- Introduction ...........................................................................................................................3
* - X.Org Preferred License.......................................................................................................3
 * - XFree86 License 1.0 ...............................................................................................................3
 * - Other Licenses .......................................................................................................................4"
* ["md"]=>
 * string(542) "- Introduction ...........................................................................................................................3
* - X.Org Preferred License.......................................................................................................3
 * - XFree86 License 1.0 ...............................................................................................................3
 * - Other Licenses .......................................................................................................................4"
* ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(85.04100000000005)
 * ["w"]=>
 * float(370.6087200000002)
 * ["h"]=>
 * float(16.0448)
 * }
 * }
 * }
 * }
 * [1]=>
 * array(5) {
 * ["page"]=>
 * int(2)
 * ["text"]=>
 * string(0) ""
 * ["md"]=>
 * string(0) ""
 * ["images"]=>
 * array(1) {
 * [0]=>
 * array(6) {
 * ["name"]=>
 * string(10) "page_1.jpg"
 * ["height"]=>
 * float(789.041)
 * ["width"]=>
 * float(609.714)
 * ["x"]=>
 * int(0)
 * ["y"]=>
 * int(0)
 * ["type"]=>
 * string(20) "full_page_screenshot"
 * }
 * }
 * ["items"]=>
 * array(0) {
 * }
 * }
 * [2]=>
 * array(5) {
 * ["page"]=>
 * int(3)
 * ["text"]=>
 * string(4139) "Introduction
* The X.Org Foundation X Window System distribution is a compilation of code and
 * documentation from many sources. This document is intended primarily as a guide
 * to the licenses used in the distribution: you must check each file and/or package
 * for precise redistribution terms. None-the-less, this summary may be useful to many
 * users.
 * This document is based on the compilation from XFree86. If you find any errors
 * or significant omissions in this document, please contact us with details at
 * <xorg@lists.freedesktop.org>.
 * Most of these licenses are based on the MIT, X Consortium, or BSD (original and
 * revised) licenses. All of them are consistent with the Open Source Definition1, and
 * most are consistent with the Free Software Foundation’s Free Software Definition2.
 * While the current licenses are all open source licenses, the X.Org Foundation is at-
 * tempting, over time, to bring as much as possible of the code’s licenses in the distri-
 * bution into compliance with the Debian Free Software Guidelines3.
 *
 * X.Org Preferred License
 * The X.Org Foundation has chosen the following format of the MIT License as the pre-
 * ferred format for code included in the X Window System distribution. This is a slight
 * variant of the common MIT license form published by the Open Source Initiative at
 * http://www.opensource.org/licenses/mit-license.php.
 * Copyright ©[year] [copyright holder]
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this soft-
 * ware and associated documentation files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom
 * the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice (including the next paragraph)
 * shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 * When listing multiple copyright holders with the license statement, please sort by
 * surname for people, and by the full name for other entities (e.g. Juliusz Chroboczek
 * sorts before Intel Corporation sorts before Daniel Stone).
 *
 * XFree86 License 1.0
 * XFree86 code without an explicit copyright is covered by the following
 * copyright/license:
 * Copyright (C) 1994-2003 The XFree86 Project, Inc. All Rights Reserved.
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this soft-
 * ware and associated documentation files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom
 * the Software is furnished to do so, subject to the following conditions:
 *
 * 3"
 * ["md"]=>
 * string(3287) "# Introduction
 *
 * The X.Org Foundation X Window System distribution is a compilation of code and documentation from many sources. This document is intended primarily as a guide to the licenses used in the distribution: you must check each file and/or package for precise redistribution terms. None-the-less, this summary may be useful to many users.
 *
 * This document is based on the compilation from XFree86. If you find any errors or significant omissions in this document, please contact us with details at xorg@lists.freedesktop.org.
 *
 * Most of these licenses are based on the MIT, X Consortium, or BSD (original and revised) licenses. All of them are consistent with the Open Source Definition1, and most are consistent with the Free Software Foundation’s Free Software Definition2. While the current licenses are all open source licenses, the X.Org Foundation is attempting, over time, to bring as much as possible of the code’s licenses in the distribution into compliance with the Debian Free Software Guidelines3.
 *
 * # X.Org Preferred License
 *
 * The X.Org Foundation has chosen the following format of the MIT License as the preferred format for code included in the X Window System distribution. This is a slight variant of the common MIT license form published by the Open Source Initiative at http://www.opensource.org/licenses/mit-license.php.
 *
 * Copyright ©[year] [copyright holder]
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice (including the next paragraph) shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * When listing multiple copyright holders with the license statement, please sort by surname for people, and by the full name for other entities (e.g. Juliusz Chroboczek sorts before Intel Corporation sorts before Daniel Stone).
 *
 * # XFree86 License 1.0
 *
 * XFree86 code without an explicit copyright is covered by the following copyright/license:
 *
 * Copyright (C) 1994-2003 The XFree86 Project, Inc. All Rights Reserved.
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:"
 * ["images"]=>
 * array(0) {
 * }
 * ["items"]=>
 * array(6) {
 * [0]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(12) "Introduction"
 * ["md"]=>
 * string(14) "# Introduction"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(83.04100000000005)
 * ["w"]=>
 * float(77.0821239)
 * ["h"]=>
 * float(13.2603)
 * }
 * }
 * [1]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(1003) "The X.Org Foundation X Window System distribution is a compilation of code and documentation from many sources. This document is intended primarily as a guide to the licenses used in the distribution: you must check each file and/or package for precise redistribution terms. None-the-less, this summary may be useful to many users.
 *
 * This document is based on the compilation from XFree86. If you find any errors or significant omissions in this document, please contact us with details at xorg@lists.freedesktop.org.
 *
 * Most of these licenses are based on the MIT, X Consortium, or BSD (original and revised) licenses. All of them are consistent with the Open Source Definition1, and most are consistent with the Free Software Foundation’s Free Software Definition2. While the current licenses are all open source licenses, the X.Org Foundation is attempting, over time, to bring as much as possible of the code’s licenses in the distribution into compliance with the Debian Free Software Guidelines3."
 * ["md"]=>
 * string(1003) "The X.Org Foundation X Window System distribution is a compilation of code and documentation from many sources. This document is intended primarily as a guide to the licenses used in the distribution: you must check each file and/or package for precise redistribution terms. None-the-less, this summary may be useful to many users.
 *
 * This document is based on the compilation from XFree86. If you find any errors or significant omissions in this document, please contact us with details at xorg@lists.freedesktop.org.
 *
 * Most of these licenses are based on the MIT, X Consortium, or BSD (original and revised) licenses. All of them are consistent with the Open Source Definition1, and most are consistent with the Free Software Foundation’s Free Software Definition2. While the current licenses are all open source licenses, the X.Org Foundation is attempting, over time, to bring as much as possible of the code’s licenses in the distribution into compliance with the Debian Free Software Guidelines3."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(101.04100000000005)
 * ["w"]=>
 * float(370.7844662)
 * ["h"]=>
 * float(13.962600000000009)
 * }
 * }
 * [2]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(23) "X.Org Preferred License"
 * ["md"]=>
 * string(25) "# X.Org Preferred License"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(298.04100000000005)
 * ["w"]=>
 * float(151.48566720000002)
 * ["h"]=>
 * float(13.26030000000003)
 * }
 * }
 * [3]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(1620) "The X.Org Foundation has chosen the following format of the MIT License as the preferred format for code included in the X Window System distribution. This is a slight variant of the common MIT license form published by the Open Source Initiative at http://www.opensource.org/licenses/mit-license.php.
 *
 * Copyright ©[year] [copyright holder]
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice (including the next paragraph) shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * When listing multiple copyright holders with the license statement, please sort by surname for people, and by the full name for other entities (e.g. Juliusz Chroboczek sorts before Intel Corporation sorts before Daniel Stone)."
 * ["md"]=>
 * string(1620) "The X.Org Foundation has chosen the following format of the MIT License as the preferred format for code included in the X Window System distribution. This is a slight variant of the common MIT license form published by the Open Source Initiative at http://www.opensource.org/licenses/mit-license.php.
 *
 * Copyright ©[year] [copyright holder]
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice (including the next paragraph) shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * When listing multiple copyright holders with the license statement, please sort by surname for people, and by the full name for other entities (e.g. Juliusz Chroboczek sorts before Intel Corporation sorts before Daniel Stone)."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(326.04100000000005)
 * ["w"]=>
 * float(370.6087200000003)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * [4]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(19) "XFree86 License 1.0"
 * ["md"]=>
 * string(21) "# XFree86 License 1.0"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(608.041)
 * ["w"]=>
 * float(126.7817283)
 * ["h"]=>
 * float(13.26030000000003)
 * }
 * }
 * [5]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(594) "XFree86 code without an explicit copyright is covered by the following copyright/license:
 *
 * Copyright (C) 1994-2003 The XFree86 Project, Inc. All Rights Reserved.
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:"
* ["md"]=>
 * string(594) "XFree86 code without an explicit copyright is covered by the following copyright/license:
 *
 * Copyright (C) 1994-2003 The XFree86 Project, Inc. All Rights Reserved.
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:"
* ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(393.04100000000005)
 * ["w"]=>
 * float(370.540302)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * }
 * }
 * [3]=>
 * array(5) {
 * ["page"]=>
 * int(4)
 * ["text"]=>
 * string(3349) "Licenses
 *
 * The above copyright notice and this permission notice shall be included in all copies or
 * substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE XFREE86 PROJECT BE LIABLE
 * FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 * Except as contained in this notice, the name of the XFree86 Project shall not be used in ad-
 * vertising or otherwise to promote the sale, use or other dealings in this Software without
 * prior written authorization from the XFree86 Project.
 * No software incorporating the XFree86 1.1 license has been incorporated.
 *
 * Other Licenses
 * Portions of code are covered by the following licenses/copyrights. See individual
 * files for the copyright dates.
 *
 * X/MIT Copyrights
 *
 * X Consortium
 * Copyright (C) <date> X Consortium
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Soft-
 * ware without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to per-
 * mit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-
 * INFRINGEMENT. IN NO EVENT SHALL THE X CONSORTIUM BE LIABLE FOR
 * ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNEC-
 * TION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFT-
 * WARE.
 * Except as contained in this notice, the name of the X Consortium shall not be used in
 * advertising or otherwise to promote the sale, use or other dealings in this Software
 * without prior written authorization from the X Consortium.
 * X Window System is a trademark of X Consortium, Inc.
 *
 * The Open Group
 * Copyright <date> The Open Group
 * Permission to use, copy, modify, distribute, and sell this software and its documenta-
 * tion for any purpose is hereby granted without fee, provided that the above copyright
 * notice appear in all copies and that both that copyright notice and this permission no-
 * tice appear in supporting documentation.
 *
 * 4"
 * ["md"]=>
 * string(2751) "# Licenses
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE XFREE86 PROJECT BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * Except as contained in this notice, the name of the XFree86 Project shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Software without prior written authorization from the XFree86 Project.
 *
 * No software incorporating the XFree86 1.1 license has been incorporated.
 *
 * # Other Licenses
 *
 * Portions of code are covered by the following licenses/copyrights. See individual files for the copyright dates.
 *
 * # X/MIT Copyrights
 *
 * X Consortium Copyright (C) &lt;date&gt; X Consortium
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE X CONSORTIUM BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * Except as contained in this notice, the name of the X Consortium shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Software without prior written authorization from the X Consortium.
 *
 * X Window System is a trademark of X Consortium, Inc.
 *
 * The Open Group Copyright &lt;date&gt; The Open Group
 *
 * Permission to use, copy, modify, distribute, and sell this software and its documentation for any purpose is hereby granted without fee, provided that the above copyright notice appear in all copies and that both that copyright notice and this permission notice appear in supporting documentation."
 * ["images"]=>
 * array(0) {
 * }
 * ["items"]=>
 * array(6) {
 * [0]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(8) "Licenses"
 * ["md"]=>
 * string(10) "# Licenses"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(57.041000000000054)
 * ["w"]=>
 * float(33.4045978)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * [1]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(886) "The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE XFREE86 PROJECT BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * Except as contained in this notice, the name of the XFree86 Project shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Software without prior written authorization from the XFree86 Project.
 *
 * No software incorporating the XFree86 1.1 license has been incorporated."
 * ["md"]=>
 * string(886) "The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE XFREE86 PROJECT BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * Except as contained in this notice, the name of the XFree86 Project shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Software without prior written authorization from the XFree86 Project.
 *
 * No software incorporating the XFree86 1.1 license has been incorporated."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(83.04100000000005)
 * ["w"]=>
 * float(370.60872000000035)
 * ["h"]=>
 * float(9.962600000000009)
 * }
 * }
 * [2]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(14) "Other Licenses"
 * ["md"]=>
 * string(16) "# Other Licenses"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(57.041000000000054)
 * ["w"]=>
 * float(95.8056675)
 * ["h"]=>
 * float(13.26030000000003)
 * }
 * }
 * [3]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(112) "Portions of code are covered by the following licenses/copyrights. See individual files for the copyright dates."
 * ["md"]=>
 * string(112) "Portions of code are covered by the following licenses/copyrights. See individual files for the copyright dates."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(57.041000000000054)
 * ["w"]=>
 * float(370.60872000000006)
 * ["h"]=>
 * float(9.962600000000009)
 * }
 * }
 * [4]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(16) "X/MIT Copyrights"
 * ["md"]=>
 * string(18) "# X/MIT Copyrights"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(318.04100000000005)
 * ["w"]=>
 * float(98.9457984)
 * ["h"]=>
 * float(12.0548)
 * }
 * }
 * [5]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(1699) "X Consortium Copyright (C) &lt;date&gt; X Consortium
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE X CONSORTIUM BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * Except as contained in this notice, the name of the X Consortium shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Software without prior written authorization from the X Consortium.
 *
 * X Window System is a trademark of X Consortium, Inc.
 *
 * The Open Group Copyright &lt;date&gt; The Open Group
 *
 * Permission to use, copy, modify, distribute, and sell this software and its documentation for any purpose is hereby granted without fee, provided that the above copyright notice appear in all copies and that both that copyright notice and this permission notice appear in supporting documentation."
 * ["md"]=>
 * string(1699) "X Consortium Copyright (C) &lt;date&gt; X Consortium
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE X CONSORTIUM BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * Except as contained in this notice, the name of the X Consortium shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Software without prior written authorization from the X Consortium.
 *
 * X Window System is a trademark of X Consortium, Inc.
 *
 * The Open Group Copyright &lt;date&gt; The Open Group
 *
 * Permission to use, copy, modify, distribute, and sell this software and its documentation for any purpose is hereby granted without fee, provided that the above copyright notice appear in all copies and that both that copyright notice and this permission notice appear in supporting documentation."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(83.04100000000005)
 * ["w"]=>
 * float(370.60872000000035)
 * ["h"]=>
 * float(10.958899999999971)
 * }
 * }
 * }
 * }
 * [4]=>
 * array(5) {
 * ["page"]=>
 * int(5)
 * ["text"]=>
 * string(2869) "                                                                                       Licenses
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONIN-
 * FRINGEMENT. IN NO EVENT SHALL THE OPEN GROUP BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CON-
 * TRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 * Except as contained in this notice, the name of The Open Group shall not be used in
 * advertising or otherwise to promote the sale, use or other dealings in this Software
 * without prior written authorization from The Open Group.
 *
 * Berkeley-based copyrights:
 *
 * General
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list
 * of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this
 * list of conditions and the following disclaimer in the documentation and/or
 * other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products de-
 * rived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
 * THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF
 * USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * UCB/LBL
 * Copyright (c) 1993 The Regents of the University of California. All rights reserved.
 * This software was developed by the Computer Systems Engineering group at
 * Lawrence Berkeley Laboratory under DARPA contract BG 91-66 and contributed to
 * Berkeley.
 * All advertising materials mentioning features or use of this software must display
 * the following acknowledgement: This product includes software developed by the
 * University of California, Lawrence Berkeley Laboratory.
 *
 * 5"
 * ["md"]=>
 * string(2658) "# Licenses
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONIN-FRINGEMENT. IN NO EVENT SHALL THE OPEN GROUP BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CON-TRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * Except as contained in this notice, the name of The Open Group shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Software without prior written authorization from The Open Group.
 *
 * # Berkeley-based copyrights:
 *
 * # General
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * # UCB/LBL
 *
 * Copyright (c) 1993 The Regents of the University of California. All rights reserved. This software was developed by the Computer Systems Engineering group at Lawrence Berkeley Laboratory under DARPA contract BG 91-66 and contributed to Berkeley.
 *
 * All advertising materials mentioning features or use of this software must display the following acknowledgement: This product includes software developed by the University of California, Lawrence Berkeley Laboratory."
 * ["images"]=>
 * array(0) {
 * }
 * ["items"]=>
 * array(7) {
 * [0]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(8) "Licenses"
 * ["md"]=>
 * string(10) "# Licenses"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(480)
 * ["y"]=>
 * float(57.041000000000054)
 * ["w"]=>
 * float(33.4045978)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * [1]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(799) "The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONIN-FRINGEMENT. IN NO EVENT SHALL THE OPEN GROUP BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CON-TRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * Except as contained in this notice, the name of The Open Group shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Software without prior written authorization from The Open Group."
 * ["md"]=>
 * string(799) "The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONIN-FRINGEMENT. IN NO EVENT SHALL THE OPEN GROUP BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CON-TRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * Except as contained in this notice, the name of The Open Group shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Software without prior written authorization from The Open Group."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(83.04100000000005)
 * ["w"]=>
 * float(370.6087200000004)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * [2]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(26) "Berkeley-based copyrights:"
 * ["md"]=>
 * string(28) "# Berkeley-based copyrights:"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(262.04100000000005)
 * ["w"]=>
 * float(157.73705800000005)
 * ["h"]=>
 * float(12.0548)
 * }
 * }
 * [3]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(7) "General"
 * ["md"]=>
 * string(9) "# General"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(292.04100000000005)
 * ["w"]=>
 * float(40.8109436)
 * ["h"]=>
 * float(10.958899999999971)
 * }
 * }
 * [4]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(1327) "Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE."
 * ["md"]=>
 * string(1327) "Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(308.04100000000005)
 * ["w"]=>
 * float(371.02482599999996)
 * ["h"]=>
 * float(9.962600000000009)
 * }
 * }
 * [5]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(7) "UCB/LBL"
 * ["md"]=>
 * string(9) "# UCB/LBL"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(615.041)
 * ["w"]=>
 * float(48.087653200000005)
 * ["h"]=>
 * float(10.958899999999971)
 * }
 * }
 * [6]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(464) "Copyright (c) 1993 The Regents of the University of California. All rights reserved. This software was developed by the Computer Systems Engineering group at Lawrence Berkeley Laboratory under DARPA contract BG 91-66 and contributed to Berkeley.
 *
 * All advertising materials mentioning features or use of this software must display the following acknowledgement: This product includes software developed by the University of California, Lawrence Berkeley Laboratory."
* ["md"]=>
 * string(464) "Copyright (c) 1993 The Regents of the University of California. All rights reserved. This software was developed by the Computer Systems Engineering group at Lawrence Berkeley Laboratory under DARPA contract BG 91-66 and contributed to Berkeley.
 *
 * All advertising materials mentioning features or use of this software must display the following acknowledgement: This product includes software developed by the University of California, Lawrence Berkeley Laboratory."
* ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(632.041)
 * ["w"]=>
 * float(370.60871999999995)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * }
 * }
 * [5]=>
 * array(5) {
 * ["page"]=>
 * int(6)
 * ["text"]=>
 * string(3566) "Licenses
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list
 * of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this
 * list of conditions and the following disclaimer in the documentation and/or
 * other materials provided with the distribution.
 * 3. All advertising materials mentioning features or use of this software must dis-
 * play the following acknowledgement: This product includes software devel-
 * oped by the University of California, Berkeley and its contributors.
 * 4. Neither the name of the University nor the names of its contributors may be
 * used to endorse or promote products derived from this software without spe-
 * cific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS “AS
 * IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FIT-
 * NESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL
 * THE REGENTS OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (IN-
 * CLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
 * HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CON-
 * TRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHER-
 * WISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
 * ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * The NetBSD Foundation, Inc.
 * Copyright (c) 2003 The NetBSD Foundation, Inc. All rights reserved.
 * This code is derived from software contributed to The NetBSD Foundation by Ben
 * Collver <collver1@attbi.com>
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list
 * of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this
 * list of conditions and the following disclaimer in the documentation and/or
 * other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE NETBSD FOUNDATION, INC. AND
 * CONTRIBUTORS “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE FOUNDATION OR CONTRIBUTORS
 * BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 * OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA,
 * OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
 * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
 * 6"
 * ["md"]=>
 * string(3008) "# Licenses
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. All advertising materials mentioning features or use of this software must display the following acknowledgement: This product includes software developed by the University of California, Berkeley and its contributors.
 * 4. Neither the name of the University nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE REGENTS OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * The NetBSD Foundation, Inc.
 *
 * Copyright (c) 2003 The NetBSD Foundation, Inc. All rights reserved.
 *
 * This code is derived from software contributed to The NetBSD Foundation by Ben Collver &lt;collver1@attbi.com&gt;
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE NETBSD FOUNDATION, INC. AND CONTRIBUTORS “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE FOUNDATION OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY."
 * ["images"]=>
 * array(0) {
 * }
 * ["items"]=>
 * array(2) {
 * [0]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(8) "Licenses"
 * ["md"]=>
 * string(10) "# Licenses"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(57.041000000000054)
 * ["w"]=>
 * float(33.4045978)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * [1]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(2996) "Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. All advertising materials mentioning features or use of this software must display the following acknowledgement: This product includes software developed by the University of California, Berkeley and its contributors.
 * 4. Neither the name of the University nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE REGENTS OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * The NetBSD Foundation, Inc.
 *
 * Copyright (c) 2003 The NetBSD Foundation, Inc. All rights reserved.
 *
 * This code is derived from software contributed to The NetBSD Foundation by Ben Collver &lt;collver1@attbi.com&gt;
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE NETBSD FOUNDATION, INC. AND CONTRIBUTORS “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE FOUNDATION OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY."
 * ["md"]=>
 * string(2996) "Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. All advertising materials mentioning features or use of this software must display the following acknowledgement: This product includes software developed by the University of California, Berkeley and its contributors.
 * 4. Neither the name of the University nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE REGENTS AND CONTRIBUTORS “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE REGENTS OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * The NetBSD Foundation, Inc.
 *
 * Copyright (c) 2003 The NetBSD Foundation, Inc. All rights reserved.
 *
 * This code is derived from software contributed to The NetBSD Foundation by Ben Collver &lt;collver1@attbi.com&gt;
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE NETBSD FOUNDATION, INC. AND CONTRIBUTORS “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE FOUNDATION OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(83.04100000000005)
 * ["w"]=>
 * float(370.6087200000002)
 * ["h"]=>
 * float(10.958899999999971)
 * }
 * }
 * }
 * }
 * [6]=>
 * array(5) {
 * ["page"]=>
 * int(7)
 * ["text"]=>
 * string(3070) "                                                                                      Licenses
 *
 * OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY
 * OF SUCH DAMAGE.
 *
 * Theodore Ts’o.
 * Copyright Theodore Ts’o, 1994, 1995, 1996, 1997, 1998, 1999. All rights reserved.
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, and the
 * entire permission notice in its entirety, including the disclaimer of warranties.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this
 * list of conditions and the following disclaimer in the documentation and/or
 * other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products de-
 * rived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED “AS IS” AND ANY EXPRESS OR IMPLIED WAR-
 * RANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE, ALL OF
 * WHICH ARE HEREBY DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCURE-
 * MENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROF-
 * ITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THE-
 * ORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF
 * THE USE OF THIS SOFTWARE, EVEN IF NOT ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 * Theo de Raadt and Damien Miller
 * Copyright (c) 1995,1999 Theo de Raadt. All rights reserved. Copyright (c) 2001-2002
 * Damien Miller. All rights reserved.
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list
 * of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this
 * list of conditions and the following disclaimer in the documentation and/or
 * other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
 * THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF
 * USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * 7"
 * ["md"]=>
 * string(2861) "# Licenses
 *
 * OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * Theodore Ts’o.
 *
 * Copyright Theodore Ts’o, 1994, 1995, 1996, 1997, 1998, 1999. All rights reserved. Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, and the entire permission notice in its entirety, including the disclaimer of warranties.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE, ALL OF WHICH ARE HEREBY DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF NOT ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * Theo de Raadt and Damien Miller
 *
 * Copyright (c) 1995,1999 Theo de Raadt. All rights reserved. Copyright (c) 2001-2002 Damien Miller. All rights reserved. Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE."
 * ["images"]=>
 * array(0) {
 * }
 * ["items"]=>
 * array(2) {
 * [0]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(8) "Licenses"
 * ["md"]=>
 * string(10) "# Licenses"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(480)
 * ["y"]=>
 * float(57.041000000000054)
 * ["w"]=>
 * float(33.4045978)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * [1]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(2849) "OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * Theodore Ts’o.
 *
 * Copyright Theodore Ts’o, 1994, 1995, 1996, 1997, 1998, 1999. All rights reserved. Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, and the entire permission notice in its entirety, including the disclaimer of warranties.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE, ALL OF WHICH ARE HEREBY DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF NOT ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * Theo de Raadt and Damien Miller
 *
 * Copyright (c) 1995,1999 Theo de Raadt. All rights reserved. Copyright (c) 2001-2002 Damien Miller. All rights reserved. Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE."
 * ["md"]=>
 * string(2849) "OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * Theodore Ts’o.
 *
 * Copyright Theodore Ts’o, 1994, 1995, 1996, 1997, 1998, 1999. All rights reserved. Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, and the entire permission notice in its entirety, including the disclaimer of warranties.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE, ALL OF WHICH ARE HEREBY DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF NOT ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * Theo de Raadt and Damien Miller
 *
 * Copyright (c) 1995,1999 Theo de Raadt. All rights reserved. Copyright (c) 2001-2002 Damien Miller. All rights reserved. Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(83.04100000000005)
 * ["w"]=>
 * float(371.02482599999996)
 * ["h"]=>
 * float(10.9589)
 * }
 * }
 * }
 * }
 * [7]=>
 * array(5) {
 * ["page"]=>
 * int(8)
 * ["text"]=>
 * string(2888) "Licenses
 *
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * Todd C. Miller
 * Copyright (c) 1998 Todd C. Miller <Todd.Miller@courtesan.com>
 * Permission to use, copy, modify, and distribute this software for any purpose with
 * or without fee is hereby granted, provided that the above copyright notice and this
 * permission notice appear in all copies.
 * THE SOFTWARE IS PROVIDED "AS IS" AND TODD C. MILLER DISCLAIMS ALL
 * WARRANTIES WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL
 * TODD C. MILLER BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR
 * CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING
 * FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF
 * CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT
 * OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS
 * SOFTWARE.
 *
 * Thomas Winischhofer
 * Copyright (C) 2001-2004 Thomas Winischhofer
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list
 * of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this
 * list of conditions and the following disclaimer in the documentation and/or
 * other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products de-
 * rived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY
 * EXPRESSED OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED
 * TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF
 * USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * SGI Free Software License B
 * SGI FREE SOFTWARE LICENSE B (Version 2.0, Sept. 18, 2008)
 * Copyright (C) 1991-2000 Silicon Graphics, Inc. All Rights Reserved.
 *
 * 8"
 * ["md"]=>
 * string(2451) "# Licenses
 *
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * # Todd C. Miller
 *
 * Copyright (c) 1998 Todd C. Miller &lt;Todd.Miller@courtesan.com&gt;
 *
 * Permission to use, copy, modify, and distribute this software for any purpose with or without fee is hereby granted, provided that the above copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND TODD C. MILLER DISCLAIMS ALL WARRANTIES WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL TODD C. MILLER BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
 *
 * # Thomas Winischhofer
 *
 * Copyright (C) 2001-2004 Thomas Winischhofer
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY EXPRESSED OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * # SGI Free Software License B
 *
 * SGI FREE SOFTWARE LICENSE B (Version 2.0, Sept. 18, 2008)
 *
 * Copyright (C) 1991-2000 Silicon Graphics, Inc. All Rights Reserved."
 * ["images"]=>
 * array(0) {
 * }
 * ["items"]=>
 * array(8) {
 * [0]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(8) "Licenses"
 * ["md"]=>
 * string(10) "# Licenses"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(57.041000000000054)
 * ["w"]=>
 * float(33.4045978)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * [1]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(91) "ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE."
 * ["md"]=>
 * string(91) "ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(83.04100000000005)
 * ["w"]=>
 * float(370.60871999999983)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * [2]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(14) "Todd C. Miller"
 * ["md"]=>
 * string(16) "# Todd C. Miller"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(131.04100000000005)
 * ["w"]=>
 * float(71.47394580000002)
 * ["h"]=>
 * float(10.9589)
 * }
 * }
 * [3]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(770) "Copyright (c) 1998 Todd C. Miller &lt;Todd.Miller@courtesan.com&gt;
 *
 * Permission to use, copy, modify, and distribute this software for any purpose with or without fee is hereby granted, provided that the above copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND TODD C. MILLER DISCLAIMS ALL WARRANTIES WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL TODD C. MILLER BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE."
 * ["md"]=>
 * string(770) "Copyright (c) 1998 Todd C. Miller &lt;Todd.Miller@courtesan.com&gt;
 *
 * Permission to use, copy, modify, and distribute this software for any purpose with or without fee is hereby granted, provided that the above copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND TODD C. MILLER DISCLAIMS ALL WARRANTIES WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL TODD C. MILLER BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(131.04100000000005)
 * ["w"]=>
 * float(418.9837182)
 * ["h"]=>
 * float(10.9589)
 * }
 * }
 * [4]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(19) "Thomas Winischhofer"
 * ["md"]=>
 * string(21) "# Thomas Winischhofer"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(326.04100000000005)
 * ["w"]=>
 * float(114.25749140000005)
 * ["h"]=>
 * float(10.958899999999971)
 * }
 * }
 * [5]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(1374) "Copyright (C) 2001-2004 Thomas Winischhofer
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY EXPRESSED OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE."
 * ["md"]=>
 * string(1374) "Copyright (C) 2001-2004 Thomas Winischhofer
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR “AS IS” AND ANY EXPRESSED OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(83.04100000000005)
 * ["w"]=>
 * float(370.67487759999995)
 * ["h"]=>
 * float(10.958899999999971)
 * }
 * }
 * [6]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(27) "SGI Free Software License B"
 * ["md"]=>
 * string(29) "# SGI Free Software License B"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(676.041)
 * ["w"]=>
 * float(164.13815680000005)
 * ["h"]=>
 * float(12.0548)
 * }
 * }
 * [7]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(126) "SGI FREE SOFTWARE LICENSE B (Version 2.0, Sept. 18, 2008)
 *
 * Copyright (C) 1991-2000 Silicon Graphics, Inc. All Rights Reserved."
* ["md"]=>
 * string(126) "SGI FREE SOFTWARE LICENSE B (Version 2.0, Sept. 18, 2008)
 *
 * Copyright (C) 1991-2000 Silicon Graphics, Inc. All Rights Reserved."
* ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(676.041)
 * ["w"]=>
 * float(343.49071600000013)
 * ["h"]=>
 * float(12.0548)
 * }
 * }
 * }
 * }
 * [8]=>
 * array(5) {
 * ["page"]=>
 * int(9)
 * ["text"]=>
 * string(3397) "                                                                                         Licenses
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Soft-
 * ware without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to per-
 * mit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 * The above copyright notice including the dates of first publication and either this
 * permission notice or a reference to http://oss.sgi.com/projects/FreeB/ shall be in-
 * cluded in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-
 * INFRINGEMENT. IN NO EVENT SHALL SILICON GRAPHICS, INC. BE LIABLE
 * FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CON-
 * NECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * Bigelow & Holmes Inc and URW++ GmbH Luxi font license
 * Luxi fonts copyright (c) 2001 by Bigelow & Holmes Inc. Luxi font instruction code
 * copyright (c) 2001 by URW++ GmbH. All Rights Reserved. Luxi is a registered trade-
 * mark of Bigelow & Holmes Inc.
 * Permission is hereby granted, free of charge, to any person obtaining a copy of these
 * Fonts and associated documentation files (the "Font Software"), to deal in the Font
 * Software, including without limitation the rights to use, copy, merge, publish, dis-
 * tribute, sublicense, and/or sell copies of the Font Software, and to permit persons to
 * whom the Font Software is furnished to do so, subject to the following conditions:
 * The above copyright and trademark notices and this permission notice shall be in-
 * cluded in all copies of one or more of the Font Software.
 * The Font Software may not be modified, altered, or added to, and in particular the
 * designs of glyphs or characters in the Fonts may not be modified nor may additional
 * glyphs or characters be added to the Fonts. This License becomes null and void when
 * the Fonts or Font Software have been modified.
 * THE FONT SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF
 * ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO
 * ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
 * PURPOSE AND NONINFRINGEMENT OF COPYRIGHT, PATENT, TRADEMARK,
 * OR OTHER RIGHT. IN NO EVENT SHALL BIGELOW & HOLMES INC. OR
 * URW++ GMBH. BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, INCLUDING ANY GENERAL, SPECIAL, INDIRECT, INCIDENTAL,
 * OR CONSEQUENTIAL DAMAGES, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF THE USE OR INABILITY TO
 * USE THE FONT SOFTWARE OR FROM OTHER DEALINGS IN THE FONT
 * SOFTWARE.
 * Except as contained in this notice, the names of Bigelow & Holmes Inc. and URW++
 * GmbH. shall not be used in advertising or otherwise to promote the sale, use or other
 * dealings in this Font Software without prior written authorization from Bigelow &
 * Holmes Inc. and URW++ GmbH.
 * For further information, contact:
 * info@urwpp.de or design@bigelowandholmes.com
 *
 * 9"
 * ["md"]=>
 * string(3206) "# Licenses
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice including the dates of first publication and either this permission notice or a reference to http://oss.sgi.com/projects/FreeB/ shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL SILICON GRAPHICS, INC. BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * # Bigelow & Holmes Inc and URW++ GmbH Luxi font license
 *
 * Luxi fonts copyright (c) 2001 by Bigelow & Holmes Inc. Luxi font instruction code copyright (c) 2001 by URW++ GmbH. All Rights Reserved. Luxi is a registered trademark of Bigelow & Holmes Inc.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of these Fonts and associated documentation files (the "Font Software"), to deal in the Font Software, including without limitation the rights to use, copy, merge, publish, distribute, sublicense, and/or sell copies of the Font Software, and to permit persons to whom the Font Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright and trademark notices and this permission notice shall be included in all copies of one or more of the Font Software.
 *
 * The Font Software may not be modified, altered, or added to, and in particular the designs of glyphs or characters in the Fonts may not be modified nor may additional glyphs or characters be added to the Fonts. This License becomes null and void when the Fonts or Font Software have been modified.
 *
 * THE FONT SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF COPYRIGHT, PATENT, TRADEMARK, OR OTHER RIGHT. IN NO EVENT SHALL BIGELOW & HOLMES INC. OR URW++ GMBH. BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, INCLUDING ANY GENERAL, SPECIAL, INDIRECT, INCIDENTAL, OR CONSEQUENTIAL DAMAGES, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF THE USE OR INABILITY TO USE THE FONT SOFTWARE OR FROM OTHER DEALINGS IN THE FONT SOFTWARE.
 *
 * Except as contained in this notice, the names of Bigelow & Holmes Inc. and URW++ GmbH. shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Font Software without prior written authorization from Bigelow & Holmes Inc. and URW++ GmbH.
 *
 * For further information, contact: info@urwpp.de or design@bigelowandholmes.com"
 * ["images"]=>
 * array(0) {
 * }
 * ["items"]=>
 * array(4) {
 * [0]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(8) "Licenses"
 * ["md"]=>
 * string(10) "# Licenses"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(480)
 * ["y"]=>
 * float(57.041000000000054)
 * ["w"]=>
 * float(33.4045978)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * [1]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(1114) "Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice including the dates of first publication and either this permission notice or a reference to http://oss.sgi.com/projects/FreeB/ shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL SILICON GRAPHICS, INC. BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE."
 * ["md"]=>
 * string(1114) "Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice including the dates of first publication and either this permission notice or a reference to http://oss.sgi.com/projects/FreeB/ shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL SILICON GRAPHICS, INC. BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE."
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(83.04100000000005)
 * ["w"]=>
 * float(370.75835059999997)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * [2]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(53) "Bigelow & Holmes Inc and URW++ GmbH Luxi font license"
 * ["md"]=>
 * string(55) "# Bigelow & Holmes Inc and URW++ GmbH Luxi font license"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(307.04100000000005)
 * ["w"]=>
 * float(334.14700120000015)
 * ["h"]=>
 * float(12.0548)
 * }
 * }
 * [3]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(2021) "Luxi fonts copyright (c) 2001 by Bigelow & Holmes Inc. Luxi font instruction code copyright (c) 2001 by URW++ GmbH. All Rights Reserved. Luxi is a registered trademark of Bigelow & Holmes Inc.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of these Fonts and associated documentation files (the "Font Software"), to deal in the Font Software, including without limitation the rights to use, copy, merge, publish, distribute, sublicense, and/or sell copies of the Font Software, and to permit persons to whom the Font Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright and trademark notices and this permission notice shall be included in all copies of one or more of the Font Software.
 *
 * The Font Software may not be modified, altered, or added to, and in particular the designs of glyphs or characters in the Fonts may not be modified nor may additional glyphs or characters be added to the Fonts. This License becomes null and void when the Fonts or Font Software have been modified.
 *
 * THE FONT SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF COPYRIGHT, PATENT, TRADEMARK, OR OTHER RIGHT. IN NO EVENT SHALL BIGELOW & HOLMES INC. OR URW++ GMBH. BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, INCLUDING ANY GENERAL, SPECIAL, INDIRECT, INCIDENTAL, OR CONSEQUENTIAL DAMAGES, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF THE USE OR INABILITY TO USE THE FONT SOFTWARE OR FROM OTHER DEALINGS IN THE FONT SOFTWARE.
 *
 * Except as contained in this notice, the names of Bigelow & Holmes Inc. and URW++ GmbH. shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Font Software without prior written authorization from Bigelow & Holmes Inc. and URW++ GmbH.
 *
 * For further information, contact: info@urwpp.de or design@bigelowandholmes.com"
 * ["md"]=>
 * string(2021) "Luxi fonts copyright (c) 2001 by Bigelow & Holmes Inc. Luxi font instruction code copyright (c) 2001 by URW++ GmbH. All Rights Reserved. Luxi is a registered trademark of Bigelow & Holmes Inc.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of these Fonts and associated documentation files (the "Font Software"), to deal in the Font Software, including without limitation the rights to use, copy, merge, publish, distribute, sublicense, and/or sell copies of the Font Software, and to permit persons to whom the Font Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright and trademark notices and this permission notice shall be included in all copies of one or more of the Font Software.
 *
 * The Font Software may not be modified, altered, or added to, and in particular the designs of glyphs or characters in the Fonts may not be modified nor may additional glyphs or characters be added to the Fonts. This License becomes null and void when the Fonts or Font Software have been modified.
 *
 * THE FONT SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF COPYRIGHT, PATENT, TRADEMARK, OR OTHER RIGHT. IN NO EVENT SHALL BIGELOW & HOLMES INC. OR URW++ GMBH. BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, INCLUDING ANY GENERAL, SPECIAL, INDIRECT, INCIDENTAL, OR CONSEQUENTIAL DAMAGES, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF THE USE OR INABILITY TO USE THE FONT SOFTWARE OR FROM OTHER DEALINGS IN THE FONT SOFTWARE.
 *
 * Except as contained in this notice, the names of Bigelow & Holmes Inc. and URW++ GmbH. shall not be used in advertising or otherwise to promote the sale, use or other dealings in this Font Software without prior written authorization from Bigelow & Holmes Inc. and URW++ GmbH.
 *
 * For further information, contact: info@urwpp.de or design@bigelowandholmes.com"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(138.04100000000005)
 * ["w"]=>
 * float(370.96872599999995)
 * ["h"]=>
 * float(9.962600000000009)
 * }
 * }
 * }
 * }
 * [9]=>
 * array(5) {
 * ["page"]=>
 * int(10)
 * ["text"]=>
 * string(196) "Licenses
 *
 * Notes
 * 1. http://www.opensource.org/docs/definition.php
 * 2. http://www.fsf.org/philosophy/free-sw.html
 * 3. http://www.debian.org/social_contract#guidelines
 *
 * 10"
 * ["md"]=>
 * string(167) "# Licenses
 *
 * # Notes
 *
 * 1. http://www.opensource.org/docs/definition.php
 * 2. http://www.fsf.org/philosophy/free-sw.html
 * 3. http://www.debian.org/social_contract#guidelines"
 * ["images"]=>
 * array(0) {
 * }
 * ["items"]=>
 * array(3) {
 * [0]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(8) "Licenses"
 * ["md"]=>
 * string(10) "# Licenses"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(57.041000000000054)
 * ["w"]=>
 * float(33.4045978)
 * ["h"]=>
 * float(9.9626)
 * }
 * }
 * [1]=>
 * array(5) {
 * ["type"]=>
 * string(7) "heading"
 * ["lvl"]=>
 * int(1)
 * ["value"]=>
 * string(5) "Notes"
 * ["md"]=>
 * string(7) "# Notes"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(95)
 * ["y"]=>
 * float(83.04100000000005)
 * ["w"]=>
 * float(36.83711340000002)
 * ["h"]=>
 * float(13.2603)
 * }
 * }
 * [2]=>
 * array(4) {
 * ["type"]=>
 * string(4) "text"
 * ["value"]=>
 * string(146) "1. http://www.opensource.org/docs/definition.php
* 2. http://www.fsf.org/philosophy/free-sw.html
 * 3. http://www.debian.org/social_contract#guidelines"
 * ["md"]=>
 * string(146) "1. http://www.opensource.org/docs/definition.php
* 2. http://www.fsf.org/philosophy/free-sw.html
 * 3. http://www.debian.org/social_contract#guidelines"
 * ["bBox"]=>
 * array(4) {
 * ["x"]=>
 * int(143)
 * ["y"]=>
 * float(101.04100000000005)
 * ["w"]=>
 * float(244.88077240000013)
 * ["h"]=>
 * float(9.962600000000009)
 * }
 * }
 * }
 * }
 * }
 * ["job_metadata"]=>
 * array(5) {
 * ["credits_used"]=>
 * float(10)
 * ["job_credits_usage"]=>
 * int(0)
 * ["job_pages"]=>
 * int(0)
 * ["job_is_cache_hit"]=>
 * bool(true)
 * ["credits_max"]=>
 * int(1000)
 * }
 * }
 */