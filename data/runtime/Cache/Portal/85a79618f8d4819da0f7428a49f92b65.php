<?php if (!defined('THINK_PATH')) exit();?> <div class="audioRoomBack"></div> 
    <div class="mainPart">
     <div class="createB"></div> 
     <div class="createTitle" style="height: 4vh;"></div> 
     <img src="/app/img/common/cancel.png" class="cancelCreate"  onclick="public('vaudioRoom')" /> 
     <div class="blueBack">
      <div style="height: 0.5vh;"></div> 
      <div class="selectPart" style="height: 4vh; line-height: 4vh; padding: 0.8vh 0px;">
       <div class="selectTitle">
        背景音乐：
       </div> 
       <div class="selectList">
        <div class="selectItem" id='bjyx' style="margin-left: 10px;" onclick="bgmp3chage();">
         <div class="selectBox"></div> 
         <img src="/app/img/common/gou.png" id="bgmp3openxx"  /> 
         <div class="selectText">
          开启
         </div>
        </div>
       </div>
      </div> 
      <div class="selectPart" style="height: 4vh; line-height: 4vh; padding: 0.8vh 0px;">
       <div class="selectTitle">
        游戏音效：
       </div> 
       <div class="selectList">
        <div class="selectItem" id='yqyx' style="margin-left: 10px;" onclick="mp3chage();">
         <div class="selectBox"></div> 
         <img src="/app/img/common/gou.png" id="mp3openxx" /> 
         <div class="selectText">
          开启
         </div>
        </div>
       </div>
      </div> 
      <div class="createCommit" onclick="public('vaudioRoom')">
       确定
      </div>
     </div>
    </div>
    <script>
        function bgmp3chage(){
          if(bgmp3open==1){
              mp3play('background');
              mp3pause('background');
              $('#bgmp3openxx').hide();
              bgmp3open=2;
              localStorage.bgmp3open=bgmp3open;
          }
          else{
              bgmp3open=1;
              mp3play('background');
              $('#bgmp3openxx').show();
              localStorage.bgmp3open=bgmp3open;
          }
        }
        function mp3chage(){
            if(mp3open==1){
              $('#mp3openxx').hide();
              mp3open=2;
              localStorage.mp3open=mp3open;
          }
          else{
              $('#mp3openxx').show();
              mp3open=1;
              localStorage.mp3open=mp3open;
          }
        }
        if(mp3open==1){
          $('#mp3openxx').show();
        }
        if(bgmp3open==1){
          $('#bgmp3openxx').show();
        }
    </script>