<?php if (!defined('THINK_PATH')) exit();?><div class="messageBack" style="z-index: 999;" onclick="public('message')"></div>
<div class="textPartOuter" style="z-index: 999;">
    <div class="yuyinButton" onclick="yuyinButton()"></div>
    <div class="emojiButton" onclick="emojiButton()"></div>
    <div id="message-box" class="textPart" style="height: 260.13px; z-index: 999;">
        <div id="scroll-box" class="textList" style="width: 100%;">
            <div class="textItem" onclick="sendmsg('玩游戏，请先进群','message1');">
                玩游戏，请先进群
            </div>
            <div class="textItem" onclick="sendmsg('群内游戏，切勿转发','message2');">
                群内游戏，切勿转发
            </div>
            <div class="textItem" onclick="sendmsg('别磨蹭，快点打牌','message3');">
                别磨蹭，快点打牌
            </div>
            <div class="textItem" onclick="sendmsg(' 我出去叫人','message4');">
                我出去叫人
            </div>
            <div class="textItem" onclick="sendmsg(' 你的牌好靓哇','message5');">
                你的牌好靓哇
            </div>
            <div class="textItem" onclick="sendmsg(' 我当年横扫澳门五条街','message6');">
                我当年横扫澳门五条街
            </div>
            <div class="textItem" onclick="sendmsg(' 算你牛逼','message7');">
                算你牛逼
            </div>
            <div class="textItem" onclick="sendmsg(' 别跟我抢庄','message8');">
                别跟我抢庄
            </div>
            <div class="textItem" onclick="sendmsg(' 输得裤衩都没了','message9');">
                输得裤衩都没了
            </div>
            <div class="textItem" onclick="sendmsg(' 我给你们送温暖了','message10');">
                我给你们送温暖了
            </div>
            <div class="textItem" onclick="sendmsg(' 谢谢老板','message11');">
                谢谢老板
            </div>
        </div>
        <div id="scroll-box2" class="textList2" style="width: 100%;">
            <div class="emojiItem emojiItem0" onclick="sendemoji('0','emoji0');"> </div>
            <div class="emojiItem emojiItem1" onclick="sendemoji('1','emoji1');"> </div>
            <div class="emojiItem emojiItem2" onclick="sendemoji('2','emoji2');"> </div>
            <div class="emojiItem emojiItem3" onclick="sendemoji('3','emoji3');"> </div>
            <div class="emojiItem emojiItem4" onclick="sendemoji('4','emoji4');"> </div>
            <div class="emojiItem emojiItem5" onclick="sendemoji('5','emoji5');"> </div>
            <div class="emojiItem emojiItem6" onclick="sendemoji('6','emoji6');"> </div>
            <div class="emojiItem emojiItem7" onclick="sendemoji('7','emoji7');"> </div>
            <div class="emojiItem emojiItem8" onclick="sendemoji('8','emoji8');"> </div>
            <div class="emojiItem emojiItem9" onclick="sendemoji('9','emoji9');"> </div>
            <div class="emojiItem emojiItem10" onclick="sendemoji('10','emoji10');"> </div>
            <div class="emojiItem emojiItem11" onclick="sendemoji('11','emoji11');"> </div>
            <div class="emojiItem emojiItem12" onclick="sendemoji('12','emoji12');"> </div>
            <div class="emojiItem emojiItem13" onclick="sendemoji('13','emoji13');"> </div>
            <div class="emojiItem emojiItem14" onclick="sendemoji('14','emoji14');"> </div>
            <div class="emojiItem emojiItem15" onclick="sendemoji('15','emoji15');"> </div>
            <div class="emojiItem emojiItem16" onclick="sendemoji('16','emoji16');"> </div>
            <div class="emojiItem emojiItem17" onclick="sendemoji('17','emoji17');"> </div>
            <div class="emojiItem emojiItem18" onclick="sendemoji('18','emoji18');"> </div>
            <div class="emojiItem emojiItem19" onclick="sendemoji('19','emoji19');"> </div>
        </div>
    </div>
</div>
<script>
    overscroll(document.querySelector('.textPart'));
</script>