<template>
  <div class="sec1">
    <b-button v-b-toggle.collapse-2 class="m-1" variant="primary" size="sm" pill>
       <span class="when-open">－</span><span class="when-closed">＋</span>
    </b-button>
    <b-badge variant="info">年度</b-badge><span class="label-text">令和3年度上期（2021/07/01~2021/11/31) </span>
    <b-badge variant="info">被評価者</b-badge><span class="label-text">ビズ　太郎 </span>
    <b-collapse id="collapse-2" border="none">
      <b-card>
        <div class="content">
          <b-img src="/images/user.svg" width="100px"></b-img>
          <div class="shosai">
            <div class="shosai-box1">
              <b-badge variant="info">評価者</b-badge>
              <div class="evaluator">
                <p class="label-text">ビズ　一郎（リーダー）</p>
                <p class="label-text">ビズ　次郎（課長）</p>
              </div>
            </div>
            <b-badge variant="info">状態</b-badge><span class="state-text label-text">目標設定</span>
          </div>
        </div>
      </b-card>
    </b-collapse>
  </div>
</template>

<script>
  export default {
    name: 'profile',
    data() {
      return {
        visible: true
      }
    }
  }
</script>

<style>
.sec1{
  margin: 30px 0 15px;
  border : thick double #32a1ce;
  padding: 10px;
}

 .content {
   display: flex;
 }
 
.shosai {
  margin-left:20px;
  flex-flow: column;
}

.label-text{
  margin-left:10px;
  margin-right:30px;
  color : #5f6368;
}

.evaluator{
  display: inline-block;
  vertical-align: top;
}

.state-text {
  margin-left:28px;
  margin-right:30px;
}

.collapsed > .when-open,
.not-collapsed > .when-closed {
  display: none;
}
</style>
