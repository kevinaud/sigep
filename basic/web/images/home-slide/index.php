<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>cPanel X - File Manager</title>
        

        <link rel="stylesheet" type="text/css" href="index_files/bootstrap.css">
        
        <link rel="stylesheet" type="text/css" href="index_files/open_sans.css">

        <link rel="stylesheet" href="index_files/tree_styles2_optimized.css">

        <link href="index_files/styles.htm" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="index_files/utilities_container.js">
        </script>
        
        <script type="text/javascript" src="index_files/cpanel-all-en.js"></script>
                <script type="text/javascript" src="index_files/cpanel-all-min.js"></script>
        <script type="text/javascript" src="index_files/filemanager_editors_optimized.js">
        </script>
        
<link rel="stylesheet" type="text/css" href="index_files/ajaxapp-min.css">
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="/cPanel_magic_revision_1443120468/cjt/css/ajaxapp_ie6.css" />
<![endif]-->


        <style type="text/css">
            html, body, #maintbl {
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
                background: none !important;
            }

            form { margin: 0 }

            #switch_editor_control img {
                vertical-align: middle;
            }

            #codewindow {
                margin:0;
                width: 100%;
                border:0;
            }

            #maintbl, #maintbl tr, #maintbl td {
                margin:0;
                padding:0;
                border-collapse: collapse;
                border: none;
            }

            #maintbl td#codewindow_container {
                padding: 0 0 0 3px;
            }

            #tcell, #page {
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
                border: 0;
            }
            #closebutton {
                padding-right: 5px;
                margin-right: 5px;
                margin-top: 10px;
            }
            #helpDiv {
                margin-bottom: 10px;
            }
            .cjt_progress_overlay .bd {
                background: transparent;
            }

            /* Suppress inherited styles from global style sheets. */
            .yui-panel .hd,
            .yui-panel .bd,
            .yui-panel .ft {
                background-image: none;
                font-size: 100%;

            }
            .yui-panel .ft {
                background-color: #CCCCCC;
            }
            textarea {
                font-size: 1.2em;
                font-family: monospace;
            }

            /* overrides from tree_styles2_optimized.css */
            p {
                line-height: normal;
            }
            .header {
                background: #333333;
                color: #FFFFFF;
                padding: 5px;
            }
            .button-group .default {
                background: none !important;
                padding: 0;
            }
        </style>

        <!--[if IE]>
        <style type="text/css">
            #codewindow {
                width: 99.5%;
            }
        </style>
        <![endif]-->

    <script charset="UTF-8" src="index_files/en.js" type="text/javascript"></script><script charset="UTF-8" src="index_files/php.js" type="text/javascript"></script></head>
    <body class="nomargins yui-skin-sam">
        <form action="javascript:void(0)" name="sform" onsubmit="loadfdata('sform_submit'); return false;" class="form-inline">
            <table id="maintbl" border="0">
                <tbody><tr class="header">
                    <td style="padding: 5px">
                        <div style="float:left; width:70%; padding-left:5px;">
                            <label style="font-weight: 900; font-size:13px;">
                                Editing:
                                <input id="path" name="path" value="/home/baylorepsilon/public_html/index.php" class="form-control">
                            </label>
                            <label>Encoding:
                                <select id="charset" name="charset" class="form-control">
                                
                                    
                                        <option value="ansi_x3.110-1983">
                                            ansi_x3.110-1983
                                        </option>
                                    
                                        <option value="ansi_x3.4-1968">
                                            ansi_x3.4-1968
                                        </option>
                                    
                                        <option value="armscii-8">
                                            armscii-8
                                        </option>
                                    
                                        <option value="asmo_449">
                                            asmo_449
                                        </option>
                                    
                                        <option value="big5">
                                            big5
                                        </option>
                                    
                                        <option value="big5-hkscs">
                                            big5-hkscs
                                        </option>
                                    
                                        <option value="brf">
                                            brf
                                        </option>
                                    
                                        <option value="bs_4730">
                                            bs_4730
                                        </option>
                                    
                                        <option value="bs_viewdata">
                                            bs_viewdata
                                        </option>
                                    
                                        <option value="cp10007">
                                            cp10007
                                        </option>
                                    
                                        <option value="cp1125">
                                            cp1125
                                        </option>
                                    
                                        <option value="cp1250">
                                            cp1250
                                        </option>
                                    
                                        <option value="cp1253">
                                            cp1253
                                        </option>
                                    
                                        <option value="cp1254">
                                            cp1254
                                        </option>
                                    
                                        <option value="cp1255">
                                            cp1255
                                        </option>
                                    
                                        <option value="cp1256">
                                            cp1256
                                        </option>
                                    
                                        <option value="cp1257">
                                            cp1257
                                        </option>
                                    
                                        <option value="cp1258">
                                            cp1258
                                        </option>
                                    
                                        <option value="cp737">
                                            cp737
                                        </option>
                                    
                                        <option value="cp775">
                                            cp775
                                        </option>
                                    
                                        <option value="csa_z243.4-1985-1">
                                            csa_z243.4-1985-1
                                        </option>
                                    
                                        <option value="csa_z243.4-1985-2">
                                            csa_z243.4-1985-2
                                        </option>
                                    
                                        <option value="csa_z243.4-1985-gr">
                                            csa_z243.4-1985-gr
                                        </option>
                                    
                                        <option value="csn_369103">
                                            csn_369103
                                        </option>
                                    
                                        <option value="cwi">
                                            cwi
                                        </option>
                                    
                                        <option value="dec-mcs">
                                            dec-mcs
                                        </option>
                                    
                                        <option value="din_66003">
                                            din_66003
                                        </option>
                                    
                                        <option value="ds_2089">
                                            ds_2089
                                        </option>
                                    
                                        <option value="ebcdic-at-de">
                                            ebcdic-at-de
                                        </option>
                                    
                                        <option value="ebcdic-at-de-a">
                                            ebcdic-at-de-a
                                        </option>
                                    
                                        <option value="ebcdic-ca-fr">
                                            ebcdic-ca-fr
                                        </option>
                                    
                                        <option value="ebcdic-dk-no">
                                            ebcdic-dk-no
                                        </option>
                                    
                                        <option value="ebcdic-dk-no-a">
                                            ebcdic-dk-no-a
                                        </option>
                                    
                                        <option value="ebcdic-es">
                                            ebcdic-es
                                        </option>
                                    
                                        <option value="ebcdic-es-a">
                                            ebcdic-es-a
                                        </option>
                                    
                                        <option value="ebcdic-es-s">
                                            ebcdic-es-s
                                        </option>
                                    
                                        <option value="ebcdic-fi-se">
                                            ebcdic-fi-se
                                        </option>
                                    
                                        <option value="ebcdic-fi-se-a">
                                            ebcdic-fi-se-a
                                        </option>
                                    
                                        <option value="ebcdic-fr">
                                            ebcdic-fr
                                        </option>
                                    
                                        <option value="ebcdic-is-friss">
                                            ebcdic-is-friss
                                        </option>
                                    
                                        <option value="ebcdic-it">
                                            ebcdic-it
                                        </option>
                                    
                                        <option value="ebcdic-pt">
                                            ebcdic-pt
                                        </option>
                                    
                                        <option value="ebcdic-uk">
                                            ebcdic-uk
                                        </option>
                                    
                                        <option value="ebcdic-us">
                                            ebcdic-us
                                        </option>
                                    
                                        <option value="ecma-cyrillic">
                                            ecma-cyrillic
                                        </option>
                                    
                                        <option value="es">
                                            es
                                        </option>
                                    
                                        <option value="es2">
                                            es2
                                        </option>
                                    
                                        <option value="euc-jisx0213">
                                            euc-jisx0213
                                        </option>
                                    
                                        <option value="euc-jp">
                                            euc-jp
                                        </option>
                                    
                                        <option value="euc-jp-ms">
                                            euc-jp-ms
                                        </option>
                                    
                                        <option value="euc-kr">
                                            euc-kr
                                        </option>
                                    
                                        <option value="euc-tw">
                                            euc-tw
                                        </option>
                                    
                                        <option value="gb18030">
                                            gb18030
                                        </option>
                                    
                                        <option value="gb2312">
                                            gb2312
                                        </option>
                                    
                                        <option value="gb_1988-80">
                                            gb_1988-80
                                        </option>
                                    
                                        <option value="gbk">
                                            gbk
                                        </option>
                                    
                                        <option value="georgian-academy">
                                            georgian-academy
                                        </option>
                                    
                                        <option value="georgian-ps">
                                            georgian-ps
                                        </option>
                                    
                                        <option value="gost_19768-74">
                                            gost_19768-74
                                        </option>
                                    
                                        <option value="greek-ccitt">
                                            greek-ccitt
                                        </option>
                                    
                                        <option value="greek7">
                                            greek7
                                        </option>
                                    
                                        <option value="greek7-old">
                                            greek7-old
                                        </option>
                                    
                                        <option value="gsm03.38">
                                            gsm03.38
                                        </option>
                                    
                                        <option value="hp-greek8">
                                            hp-greek8
                                        </option>
                                    
                                        <option value="hp-roman8">
                                            hp-roman8
                                        </option>
                                    
                                        <option value="hp-roman9">
                                            hp-roman9
                                        </option>
                                    
                                        <option value="hp-thai8">
                                            hp-thai8
                                        </option>
                                    
                                        <option value="hp-turkish8">
                                            hp-turkish8
                                        </option>
                                    
                                        <option value="hz-gb-2312">
                                            hz-gb-2312
                                        </option>
                                    
                                        <option value="ibm037">
                                            ibm037
                                        </option>
                                    
                                        <option value="ibm038">
                                            ibm038
                                        </option>
                                    
                                        <option value="ibm1004">
                                            ibm1004
                                        </option>
                                    
                                        <option value="ibm1026">
                                            ibm1026
                                        </option>
                                    
                                        <option value="ibm1047">
                                            ibm1047
                                        </option>
                                    
                                        <option value="ibm1124">
                                            ibm1124
                                        </option>
                                    
                                        <option value="ibm1129">
                                            ibm1129
                                        </option>
                                    
                                        <option value="ibm1132">
                                            ibm1132
                                        </option>
                                    
                                        <option value="ibm1133">
                                            ibm1133
                                        </option>
                                    
                                        <option value="ibm1160">
                                            ibm1160
                                        </option>
                                    
                                        <option value="ibm1161">
                                            ibm1161
                                        </option>
                                    
                                        <option value="ibm1162">
                                            ibm1162
                                        </option>
                                    
                                        <option value="ibm1163">
                                            ibm1163
                                        </option>
                                    
                                        <option value="ibm1164">
                                            ibm1164
                                        </option>
                                    
                                        <option value="ibm256">
                                            ibm256
                                        </option>
                                    
                                        <option value="ibm273">
                                            ibm273
                                        </option>
                                    
                                        <option value="ibm274">
                                            ibm274
                                        </option>
                                    
                                        <option value="ibm275">
                                            ibm275
                                        </option>
                                    
                                        <option value="ibm277">
                                            ibm277
                                        </option>
                                    
                                        <option value="ibm278">
                                            ibm278
                                        </option>
                                    
                                        <option value="ibm280">
                                            ibm280
                                        </option>
                                    
                                        <option value="ibm281">
                                            ibm281
                                        </option>
                                    
                                        <option value="ibm284">
                                            ibm284
                                        </option>
                                    
                                        <option value="ibm285">
                                            ibm285
                                        </option>
                                    
                                        <option value="ibm290">
                                            ibm290
                                        </option>
                                    
                                        <option value="ibm297">
                                            ibm297
                                        </option>
                                    
                                        <option value="ibm420">
                                            ibm420
                                        </option>
                                    
                                        <option value="ibm423">
                                            ibm423
                                        </option>
                                    
                                        <option value="ibm424">
                                            ibm424
                                        </option>
                                    
                                        <option value="ibm437">
                                            ibm437
                                        </option>
                                    
                                        <option value="ibm500">
                                            ibm500
                                        </option>
                                    
                                        <option value="ibm850">
                                            ibm850
                                        </option>
                                    
                                        <option value="ibm851">
                                            ibm851
                                        </option>
                                    
                                        <option value="ibm852">
                                            ibm852
                                        </option>
                                    
                                        <option value="ibm855">
                                            ibm855
                                        </option>
                                    
                                        <option value="ibm856">
                                            ibm856
                                        </option>
                                    
                                        <option value="ibm857">
                                            ibm857
                                        </option>
                                    
                                        <option value="ibm860">
                                            ibm860
                                        </option>
                                    
                                        <option value="ibm861">
                                            ibm861
                                        </option>
                                    
                                        <option value="ibm862">
                                            ibm862
                                        </option>
                                    
                                        <option value="ibm863">
                                            ibm863
                                        </option>
                                    
                                        <option value="ibm864">
                                            ibm864
                                        </option>
                                    
                                        <option value="ibm865">
                                            ibm865
                                        </option>
                                    
                                        <option value="ibm866">
                                            ibm866
                                        </option>
                                    
                                        <option value="ibm866nav">
                                            ibm866nav
                                        </option>
                                    
                                        <option value="ibm868">
                                            ibm868
                                        </option>
                                    
                                        <option value="ibm869">
                                            ibm869
                                        </option>
                                    
                                        <option value="ibm870">
                                            ibm870
                                        </option>
                                    
                                        <option value="ibm871">
                                            ibm871
                                        </option>
                                    
                                        <option value="ibm874">
                                            ibm874
                                        </option>
                                    
                                        <option value="ibm875">
                                            ibm875
                                        </option>
                                    
                                        <option value="ibm880">
                                            ibm880
                                        </option>
                                    
                                        <option value="ibm891">
                                            ibm891
                                        </option>
                                    
                                        <option value="ibm903">
                                            ibm903
                                        </option>
                                    
                                        <option value="ibm904">
                                            ibm904
                                        </option>
                                    
                                        <option value="ibm905">
                                            ibm905
                                        </option>
                                    
                                        <option value="ibm918">
                                            ibm918
                                        </option>
                                    
                                        <option value="ibm922">
                                            ibm922
                                        </option>
                                    
                                        <option value="iec_p27-1">
                                            iec_p27-1
                                        </option>
                                    
                                        <option value="inis">
                                            inis
                                        </option>
                                    
                                        <option value="inis-8">
                                            inis-8
                                        </option>
                                    
                                        <option value="inis-cyrillic">
                                            inis-cyrillic
                                        </option>
                                    
                                        <option value="invariant">
                                            invariant
                                        </option>
                                    
                                        <option value="isiri-3342">
                                            isiri-3342
                                        </option>
                                    
                                        <option value="iso-8859-1">
                                            iso-8859-1
                                        </option>
                                    
                                        <option value="iso-8859-10">
                                            iso-8859-10
                                        </option>
                                    
                                        <option value="iso-8859-11">
                                            iso-8859-11
                                        </option>
                                    
                                        <option value="iso-8859-13">
                                            iso-8859-13
                                        </option>
                                    
                                        <option value="iso-8859-14">
                                            iso-8859-14
                                        </option>
                                    
                                        <option value="iso-8859-15">
                                            iso-8859-15
                                        </option>
                                    
                                        <option value="iso-8859-16">
                                            iso-8859-16
                                        </option>
                                    
                                        <option value="iso-8859-2">
                                            iso-8859-2
                                        </option>
                                    
                                        <option value="iso-8859-3">
                                            iso-8859-3
                                        </option>
                                    
                                        <option value="iso-8859-4">
                                            iso-8859-4
                                        </option>
                                    
                                        <option value="iso-8859-5">
                                            iso-8859-5
                                        </option>
                                    
                                        <option value="iso-8859-6">
                                            iso-8859-6
                                        </option>
                                    
                                        <option value="iso-8859-7">
                                            iso-8859-7
                                        </option>
                                    
                                        <option value="iso-8859-8">
                                            iso-8859-8
                                        </option>
                                    
                                        <option value="iso-8859-9">
                                            iso-8859-9
                                        </option>
                                    
                                        <option value="iso-8859-9e">
                                            iso-8859-9e
                                        </option>
                                    
                                        <option value="iso-ir-197">
                                            iso-ir-197
                                        </option>
                                    
                                        <option value="iso-ir-209">
                                            iso-ir-209
                                        </option>
                                    
                                        <option value="iso-ir-90">
                                            iso-ir-90
                                        </option>
                                    
                                        <option value="iso_10367-box">
                                            iso_10367-box
                                        </option>
                                    
                                        <option value="iso_10646">
                                            iso_10646
                                        </option>
                                    
                                        <option value="iso_11548-1">
                                            iso_11548-1
                                        </option>
                                    
                                        <option value="iso_2033-1983">
                                            iso_2033-1983
                                        </option>
                                    
                                        <option value="iso_5427">
                                            iso_5427
                                        </option>
                                    
                                        <option value="iso_5427-ext">
                                            iso_5427-ext
                                        </option>
                                    
                                        <option value="iso_5428">
                                            iso_5428
                                        </option>
                                    
                                        <option value="iso_646.basic">
                                            iso_646.basic
                                        </option>
                                    
                                        <option value="iso_646.irv">
                                            iso_646.irv
                                        </option>
                                    
                                        <option value="iso_6937">
                                            iso_6937
                                        </option>
                                    
                                        <option value="iso_6937-2-25">
                                            iso_6937-2-25
                                        </option>
                                    
                                        <option value="iso_6937-2-add">
                                            iso_6937-2-add
                                        </option>
                                    
                                        <option value="iso_8859-1,gl">
                                            iso_8859-1,gl
                                        </option>
                                    
                                        <option value="iso_8859-supp">
                                            iso_8859-supp
                                        </option>
                                    
                                        <option value="it">
                                            it
                                        </option>
                                    
                                        <option value="jis_c6220-1969-jp">
                                            jis_c6220-1969-jp
                                        </option>
                                    
                                        <option value="jis_c6220-1969-ro">
                                            jis_c6220-1969-ro
                                        </option>
                                    
                                        <option value="jis_c6229-1984-a">
                                            jis_c6229-1984-a
                                        </option>
                                    
                                        <option value="jis_c6229-1984-b">
                                            jis_c6229-1984-b
                                        </option>
                                    
                                        <option value="jis_c6229-1984-b-add">
                                            jis_c6229-1984-b-add
                                        </option>
                                    
                                        <option value="jis_c6229-1984-hand">
                                            jis_c6229-1984-hand
                                        </option>
                                    
                                        <option value="jis_c6229-1984-hand-add">
                                            jis_c6229-1984-hand-add
                                        </option>
                                    
                                        <option value="jis_c6229-1984-kana">
                                            jis_c6229-1984-kana
                                        </option>
                                    
                                        <option value="jis_x0201">
                                            jis_x0201
                                        </option>
                                    
                                        <option value="johab">
                                            johab
                                        </option>
                                    
                                        <option value="jus_i.b1.002">
                                            jus_i.b1.002
                                        </option>
                                    
                                        <option value="jus_i.b1.003-mac">
                                            jus_i.b1.003-mac
                                        </option>
                                    
                                        <option value="jus_i.b1.003-serb">
                                            jus_i.b1.003-serb
                                        </option>
                                    
                                        <option value="koi-8">
                                            koi-8
                                        </option>
                                    
                                        <option value="koi8-r">
                                            koi8-r
                                        </option>
                                    
                                        <option value="koi8-ru">
                                            koi8-ru
                                        </option>
                                    
                                        <option value="koi8-t">
                                            koi8-t
                                        </option>
                                    
                                        <option value="koi8-u">
                                            koi8-u
                                        </option>
                                    
                                        <option value="ks_c_5601-1987">
                                            ks_c_5601-1987
                                        </option>
                                    
                                        <option value="ksc5636">
                                            ksc5636
                                        </option>
                                    
                                        <option value="latin-greek">
                                            latin-greek
                                        </option>
                                    
                                        <option value="latin-greek-1">
                                            latin-greek-1
                                        </option>
                                    
                                        <option value="mac-centraleurope">
                                            mac-centraleurope
                                        </option>
                                    
                                        <option value="mac-cyrillic">
                                            mac-cyrillic
                                        </option>
                                    
                                        <option value="mac-is">
                                            mac-is
                                        </option>
                                    
                                        <option value="mac-sami">
                                            mac-sami
                                        </option>
                                    
                                        <option value="mac-uk">
                                            mac-uk
                                        </option>
                                    
                                        <option value="macintosh">
                                            macintosh
                                        </option>
                                    
                                        <option value="mik">
                                            mik
                                        </option>
                                    
                                        <option value="msz_7795.3">
                                            msz_7795.3
                                        </option>
                                    
                                        <option value="nats-dano">
                                            nats-dano
                                        </option>
                                    
                                        <option value="nats-dano-add">
                                            nats-dano-add
                                        </option>
                                    
                                        <option value="nats-sefi">
                                            nats-sefi
                                        </option>
                                    
                                        <option value="nats-sefi-add">
                                            nats-sefi-add
                                        </option>
                                    
                                        <option value="nc_nc00-10">
                                            nc_nc00-10
                                        </option>
                                    
                                        <option value="nextstep">
                                            nextstep
                                        </option>
                                    
                                        <option value="nf_z_62-010">
                                            nf_z_62-010
                                        </option>
                                    
                                        <option value="nf_z_62-010_1973">
                                            nf_z_62-010_1973
                                        </option>
                                    
                                        <option value="ns_4551-1">
                                            ns_4551-1
                                        </option>
                                    
                                        <option value="ns_4551-2">
                                            ns_4551-2
                                        </option>
                                    
                                        <option value="pt">
                                            pt
                                        </option>
                                    
                                        <option value="pt154">
                                            pt154
                                        </option>
                                    
                                        <option value="pt2">
                                            pt2
                                        </option>
                                    
                                        <option value="rk1048">
                                            rk1048
                                        </option>
                                    
                                        <option value="sami">
                                            sami
                                        </option>
                                    
                                        <option value="sami-ws2">
                                            sami-ws2
                                        </option>
                                    
                                        <option value="sen_850200_b">
                                            sen_850200_b
                                        </option>
                                    
                                        <option value="sen_850200_c">
                                            sen_850200_c
                                        </option>
                                    
                                        <option value="shift_jis">
                                            shift_jis
                                        </option>
                                    
                                        <option value="shift_jisx0213">
                                            shift_jisx0213
                                        </option>
                                    
                                        <option value="t.101-g2">
                                            t.101-g2
                                        </option>
                                    
                                        <option value="t.61-7bit">
                                            t.61-7bit
                                        </option>
                                    
                                        <option value="t.61-8bit">
                                            t.61-8bit
                                        </option>
                                    
                                        <option value="tcvn5712-1">
                                            tcvn5712-1
                                        </option>
                                    
                                        <option value="tis-620">
                                            tis-620
                                        </option>
                                    
                                        <option value="tscii">
                                            tscii
                                        </option>
                                    
                                        <option value="us-ascii">
                                            us-ascii
                                        </option>
                                    
                                        <option value="utf-7">
                                            utf-7
                                        </option>
                                    
                                        <option value="utf-8" selected="selected">
                                            utf-8
                                        </option>
                                    
                                        <option value="videotex-suppl">
                                            videotex-suppl
                                        </option>
                                    
                                        <option value="viscii">
                                            viscii
                                        </option>
                                    
                                        <option value="windows-1251">
                                            windows-1251
                                        </option>
                                    
                                        <option value="windows-1252">
                                            windows-1252
                                        </option>
                                    
                                        <option value="windows-31j">
                                            windows-31j
                                        </option>
                                    
                                
                                </select>
                            </label>
                            <input onclick="loadfile(this);" class="btn btn-default" value="Re-open" id="btnReOpen" type="button">
                        </div>
                        <div style="float:right;padding-right:5px">
                            <button type="button" class="btn btn-default" id="switch_editor_control" onclick="try {toggle_EditArea(this)} catch(e) {} return false">Use Text Editor</button>
                            &nbsp;
                            <input onclick="confirm_close(this);" class="btn btn-default" value="Close" id="btnClose" type="button">
                            <button type="submit" id="sform_submit" class="btn btn-primary" style="font-weight:bold">
                                Save Changes
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="codewindow_container">
                        
                            <div style="border: 1px dashed rgb(136, 136, 136); display: none; width: 1277px; height: 559px;" id="edit_area_resize"></div><textarea id="codewindow" class="codepress " style="width: 1273px; display: none; height: 555px;" name="page" wrap="off">&lt;?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))-&gt;run();
</textarea><iframe style="border-width: 0px; overflow: hidden; display: inline; width: 1273px; height: 555px;" id="frame_codewindow" name="frame_codewindow" frameborder="0"></iframe>
                        
                    </td>
                </tr>
            </tbody></table>
        </form>

        <script type="text/plain" id="general_encoding_changed_template">
            <p>
                The system was unable to save your document in “{old_charset}” encoding. Most likely, your document contains characters incompatible with “{old_charset}”.
            </p>

            <p>
                cPanel has upgraded your document to “{new_charset}” encoding. Please verify that the file opens correctly in your application.
            </p>

            <p>
                To learn more about file encoding, visit <a href="http://go.cpanel.net/encoding">http://go.cpanel.net/encoding</a>.
            </p>
        </script>

        

<img src="index_files/progress_bar.gif" class="preloadedImage">
<img src="index_files/check.png" class="preloadedImage">

<script id="cjt_error_dialog_template" type="text/plain">
<div class="error_notice">{error_html}</div>
</script>

<script id="cjt_http_error_dialog_template" type="text/plain">
<div class="error_notice http_error_notice">
    <div class="http_status">{status}: {status_text_html}</div>
    <div><a href="javascript:void(0)" class="http_error_details_link">Show/Hide Details</a></div>
    <div class="cjt_error_details" style="display:none">
        <div class="url">URL ({method}):<pre>{url_html}</pre></div>
        <div class="post">Body: <pre>{post_html}</pre></div>
        <div class="response">Response:<pre>{response_html}</pre></div>
    </div>
</div>
</script>

<script>
CPANEL.application = "cpaneld";
YAHOO.lang.augmentObject( CPANEL.Locale.prototype.LEXICON, {"An unknown error occurred.":"An unknown error occurred.","OK":"OK","Processing …":"Processing …","ERROR":"ERROR","Error":"Error","Success!":"Success!","HTTP ERROR":"HTTP ERROR","Notice":"Notice","Cancel":"Cancel","Proceed":"Proceed"} );
</script>
<script src="index_files/ajaxapp-min.js"></script>

        <script type="text/javascript">
            var CHARSET = document.sform.charset.value;

            if ( !window.LEXICON ) {
                LEXICON = {};
            }

            LEXICON.charset_changed = "Character Encoding Change";
            LEXICON.confirm_close   = "You have unsaved changes. Are you sure you want to close this window?";
            LEXICON.reloading       = "Reloading…";

            function loadfile(clicked_el) {
                var textarea = DOM.get("codewindow");

                if (textarea.value !== textarea.defaultValue) {
                    var sure = confirm("Are you sure you wish to open a new file? You will lose any changes you have made.");
                    if (!sure) {
                        return;
                    }
                }

                var filen = document.sform.path.value;
                var fpath = filen.split('/');;
                var filename = fpath.pop();
                var dir = fpath.join('/');
                var sdir = encodeURIComponent(dir);
                var sfilename = encodeURIComponent(filename);
                var charset = document.getElementById('charset').value;

                var pp = new CPANEL.ajax.Progress_Panel( DOM.generateId(), {
                    status_html : "Reloading…",
                    effect: CPANEL.ajax.FADE_MODAL
                } );

                if (clicked_el) {
                    pp.show_from_source(clicked_el);
                }
                else {
                    pp.show();
                }

                document.location.href="?dir=" + sdir + "&file=" + sfilename + '&file_charset=' + charset;
            }

            var LAST_NOTICE = null;

            function loadfdata(clicked_el) {
                var path     = DOM.get("path");

                if ( CODEWINDOW.value === CODEWINDOW.defaultValue && path.value === path.defaultValue ) {
                    LAST_NOTICE = new CPANEL.ajax.Dynamic_Notice({content:"You have made no changes to save.", level:"info", replaces:LAST_NOTICE});
                    return;
                }

                var match = path.value.match(/^(.+)\/([^\/]+)$/);
                if ( !match ) {
                    LAST_NOTICE = new CPANEL.ajax.Dynamic_Notice({content:"Invalid path.", level:"error", replaces:LAST_NOTICE});
                    return;
                }

                var api_params = {
                    module:   "Fileman",
                    func:     "savefile",
                    data:     {
                        dir:           match[1],
                        filename:      match[2],
                        content:       window.editAreaLoader ? editAreaLoader.getValue("codewindow") : document.sform.page.value,
                        utf8_fallback: 1,
                        charset:       CHARSET
                    },
                    progress_panel: {
                        zIndex:      2500,
                        show_status: true,
                        source_el:   clicked_el,
                        status_html: "Saving “{the_file}” …".replace('{the_file}',match[2].html_encode()),
                        success_notice_options: { replaces:LAST_NOTICE },
                        before_success: function(result) {
                            CODEWINDOW.defaultValue = CODEWINDOW.value;

                            return check_for_encoding_change.call(
                                this,
                                CPANEL.ajax.templates.general_encoding_changed_template,
                                result.cpanel_data
                            );
                        }
                    },
                    callback: {
                        success: function() { LAST_NOTICE = req.notice }
                    }
                };

                var req = CPANEL.api( api_params );

                return false;
            }
        </script>

        <script type="text/javascript" src="index_files/edit_area_full.js"></script>
        <script type="text/javascript" src="index_files/edit_area_resizer.js"></script>
        <script>
        var editAreaEl='codewindow';
        var lastResizeTime=0;
        var lastResizeRequestTime=0;

        function unhide_codewindow() {
            DOM.setStyle("codewindow","visibility","");
            if ( YAHOO.env.ua.ie ) fix_ie_margin();
            set_link_for_code();
        };

        var EditArea_config = {
        
            EA_load_callback: "unhide_codewindow",
        
            EA_toggle_on_callback: "set_link_for_code",
            EA_toggle_off_callback: "set_link_for_text",
            id: editAreaEl,
            start_highlight: true,
            allow_resize: "both",
            allow_toggle: false,
            language: "en",
            toolbar: "search, go_to_line, |, undo, redo, |, select_font, |, syntax_selection, |, change_smooth_selection, highlight, reset_highlight, word_wrap, |, help",
            syntax: "php",
            word_wrap: true
        };

        function load_EditArea() {
            //Set the code textarea width to 800px temporarily
            //so EditArea will size the edit area to that width.
            //This mimicks behavior of the old separate editit_code.html.
            if ( !CODEWINDOW) CODEWINDOW = DOM.get(editAreaEl);
            CODEWINDOW.style.visibility = "";
            CODEWINDOW.style.width = "800px";

            editAreaLoader.init(EditArea_config);

        
            doResizeSoon();
        
        }

        function fix_ie_margin() {
            //work around a bug in EditArea that sets a marginTop when it shouldn't.
            //The EA code has an exception for IE>7, but it kills detecting IE>7 early
            //on presuming that it will be able to force IE7 compatibility mode.
            //(Which it can't always do, actually.)
            if ( YAHOO.env.ua.ie > 7 ) {
                var iframe_window = DOM.get("frame_codewindow");
                iframe_window.contentDocument.getElementById("textarea").style.marginTop = "";
            }
        }

        function set_link_for_code() {
            DOM.get("switch_editor_control").innerHTML = "Use Text Editor";
            if ( YAHOO.env.ua.ie ) fix_ie_margin();
            window.ea_shown = true;
        }
        function set_link_for_text() {
            DOM.get("switch_editor_control").innerHTML = "Use Code Editor";
        }

        function toggle_EditArea(link) {
            var ea = editAreas[editAreaEl];

            if (!ea || !ea.displayed) {
        
                editAreaLoader.toggle_on(editAreaEl);
                doResizeSoon();
                EVENT.removeListener( window, "resize", textarea_sizer );
                EVENT.addListener( window, "resize", doResizeSoon );
            }
            else {
                editAreaLoader.toggle_off(editAreaEl);
                CODEWINDOW.wrap = "soft";
                EVENT.removeListener( window, "resize", doResizeSoon );
                EVENT.addListener( window, "resize", textarea_sizer );
                textarea_sizer();
            }
        }

        var CODEWINDOW;
        var codewindow_padding = YAHOO.env.ua.ie ? 3 : 0;
        function textarea_sizer() {
            var pos = DOM.getXY(CODEWINDOW);
            var viewport_height = DOM.getViewportHeight();
            var viewport_width  = DOM.getViewportWidth();
            CODEWINDOW.style.width  = (viewport_width  - pos[0] - codewindow_padding) + "px";
            CODEWINDOW.style.height = (viewport_height - pos[1] - codewindow_padding) + "px";
        }

        // var editor_icons = {
        //     code: "/cPanel_magic_revision_0/frontend/gl_paper_lantern/filemanager/img/icons/codeEditorB.gif",
        //     text: "/cPanel_magic_revision_0/frontend/gl_paper_lantern/filemanager/img/icons/Document 2 Edit 2.gif"
        // };

        EVENT.throwErrors = true;
        EVENT.onDOMReady( function() {
            CODEWINDOW = DOM.get(editAreaEl);
            //var img = document.createElement("img");
            //img.style.display = "none";
        
            //img.src = editor_icons.code;
            EVENT.addListener(window, "resize", doResizeSoon);
        
            //document.body.appendChild(img);
        } );

        YAHOO.util.Event.addListener(window, "load", load_EditArea);
        //YAHOO.util.Event.addListener(window, "load", textarea_sizer);
        </script>

    


</body></html>
<!-- cPanel [11.50] (pro,attracta) Copyright (c) 2015 cPanel, Inc. Licensed on a2plcpnl0396.prod.iad2.secureserver.net -->