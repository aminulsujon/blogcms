<script type="text/javascript" src="<?= $siteoptions['web_url'] ?>/converter/bijoy2uni.js"></script>
<script type="text/javascript" src="<?= $siteoptions['web_url'] ?>/converter/common.js"></script>
<script type="text/javascript" src="<?= $siteoptions['web_url'] ?>/converter/count.js"></script>
<script type="text/javascript" src="<?= $siteoptions['web_url'] ?>/converter/js.js"></script>
<script type="text/javascript" src="<?= $siteoptions['web_url'] ?>/converter/js1.js"></script>
<script type="text/javascript" src="<?= $siteoptions['web_url'] ?>/converter/layout.js"></script>
<script type="text/javascript" src="<?= $siteoptions['web_url'] ?>/converter/uni2bijoy.js"></script>
<link rel="stylesheet" type="text/css" href="<?= $siteoptions['web_url'] ?>/converter/center160e.css"/>

<style>
.sharethis-inline-share-buttons{text-align:center}
@media  screen and (max-width: 768px) {
    .converter tr td{
        width: auto;
    }
    .converter tr td table{
        width: auto;
    }
}
</style>
<div class="main-content--section pbottom--30" style="margin-top:30px">
	<div class="container">
			<!-- Main Content Start -->
            
<table class="w-100 mr-auto bg-light converter" border="0" align="center" width="100%">
    <tr>
        <td align="center">
            <table border="0" width="100%">
                <form name="myForm" action="#" method="post">
                    <tr>
                        <td>
                            <div>
                                <TEXTAREA class="unicode_textarea" onKeyPress="return KeyBoardPress(event);" id=EDT
                                          onKeyDown="return KeyBoardDown(event);" name="textarea"
                                          onBlur="InputLengthCheck();" onKeyUp="InputLengthCheck();"
                                          autofocus="autofocus" value=""
                                          placeholder="ইউনিকোড কি-বোর্ডের লেখা এখানে পেস্ট করুন"></TEXTAREA>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" height="60px" valign="middle">
                            <div class="convert_button_left">
                                <button type="button" class="bijoy_button btn btn-primary"
                                        onClick="ConvertToTextArea('CONVERTEDT');" name="ConvertToAsciiButton"><span
                                        class="fa fa-arrow-down" aria-hidden="true"></span> ইউনিকোড টু বিজয়
                                </button>
                                <button type="button" class="unicode_button btn btn-success"
                                        onClick="ConvertFromTextArea('CONVERTEDT');" name="ConvertButton"><span
                                        class="fa fa-arrow-up" aria-hidden="true"></span> বিজয় টু ইউনিকোড
                                </button>
                                <button type="reset" class="reset_button btn btn-danger m-1 m-sm-1 m-md-0" name=ClearButton><span
                                        class="fa fa-refresh" aria-hidden="true"></span> মুছে ফেলুন
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <input readonly type="hidden" name="CharsTyped" size="2" style="font-weight:bold; border: 0px solid #2D69AE; color:#808080; text-align:left;">
                                <input readonly type="hidden" name="WordsTyped" size="3" style="font-weight:bold; border: 1px solid #2D69AE; color:#808080; text-align:right;">
                                <input readonly type="hidden" name="CharsLeft" size="8">
                                <input readonly type="hidden" name="WordsLeft" size="8">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div>
                                <TEXTAREA class="bijoy_textarea" id="CONVERTEDT" autofocus value="" placeholder="বিজয় কি-বোর্ডের লেখা এখানে পেস্ট করুন"></TEXTAREA>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div style="margin:20px 0;">
                                <div class="my-plugin-share" button-type="round"></div>
                            </div>
                        </td>
                    </tr>
                </form>
            </table>
        </td>
    </tr>
</table>
<div class="sharethis-inline-share-buttons"></div>
</div>
</div>